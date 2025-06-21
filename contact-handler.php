<?php
// メール送信処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームデータの取得
    $company = $_POST['company'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $inquiry_type = $_POST['inquiry_type'] ?? '';
    $message = $_POST['message'] ?? '';
    $privacy = isset($_POST['privacy']) ? 'はい' : 'いいえ';
    
    // バリデーション
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'お名前を入力してください。';
    }
    
    if (empty($email)) {
        $errors[] = 'メールアドレスを入力してください。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = '有効なメールアドレスを入力してください。';
    }
    
    if (empty($inquiry_type)) {
        $errors[] = 'お問い合わせ内容を選択してください。';
    }
    
    if (!isset($_POST['privacy'])) {
        $errors[] = 'プライバシーポリシーに同意してください。';
    }
    
    // エラーがない場合はメール送信
    if (empty($errors)) {
        // お問い合わせ内容の変換
        $inquiry_types = [
            'demo' => '無料デモ申し込み',
            'document' => '資料請求',
            'price' => 'お見積り依頼',
            'question' => '製品に関する質問',
            'other' => 'その他'
        ];
        $inquiry_type_text = $inquiry_types[$inquiry_type] ?? $inquiry_type;
        
        // メール本文の作成
        $email_body = "AutoMessageECお問い合わせフォームより\n\n";
        $email_body .= "会社名: " . $company . "\n";
        $email_body .= "お名前: " . $name . "\n";
        $email_body .= "メールアドレス: " . $email . "\n";
        $email_body .= "電話番号: " . $phone . "\n";
        $email_body .= "お問い合わせ内容: " . $inquiry_type_text . "\n";
        $email_body .= "お問い合わせ詳細:\n" . $message . "\n";
        $email_body .= "プライバシーポリシー同意: " . $privacy . "\n";
        
        // メール送信設定（実際の送信先メールアドレスに変更してください）
        $to = 'info@koikoi.co.jp';
        $subject = 'AutoMessageEC お問い合わせ - ' . $name . '様';
        $headers = 'From: noreply@koikoi.co.jp' . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        
        // メール送信（実際の本番環境では適切なメール送信サービスを使用してください）
        if (mail($to, $subject, $email_body, $headers)) {
            $success_message = 'お問い合わせありがとうございます。担当者より折り返しご連絡いたします。';
        } else {
            $error_message = 'メール送信に失敗しました。お手数ですが、直接お電話でお問い合わせください。';
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ完了 - AutoMessageEC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    <?php if (isset($success_message)): ?>
                        お問い合わせ完了
                    <?php else: ?>
                        エラー
                    <?php endif; ?>
                </h2>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <?php if (isset($success_message)): ?>
                    <div class="text-green-600 text-center mb-4">
                        <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="text-center text-gray-700 mb-6"><?php echo $success_message; ?></p>
                <?php else: ?>
                    <div class="text-red-600 text-center mb-4">
                        <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L5.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <p class="text-center text-red-600 mb-6"><?php echo $error_message; ?></p>
                <?php endif; ?>
                
                <div class="text-center">
                    <a href="index.php" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        トップページに戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 