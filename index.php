<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AutoMessageEC - ECショップの注文処理自動化ツール</title>
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script>tailwind.config={theme:{extend:{colors:{primary:'#3b82f6',secondary:'#64748b'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
</head>
<body class="bg-white">
<!-- ヘッダー -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
<div class="flex items-center">
<h1 class="text-2xl font-['Pacifico'] text-primary">AutoMessageEC</h1>
</div>
<nav class="hidden md:flex space-x-8">
<a href="#features" class="text-gray-700 hover:text-primary transition-colors">機能紹介</a>
<a href="#pricing" class="text-gray-700 hover:text-primary transition-colors">料金プラン</a>
<a href="#benefits" class="text-gray-700 hover:text-primary transition-colors">導入メリット</a>
<a href="#contact" class="text-gray-700 hover:text-primary transition-colors">お問い合わせ</a>
</nav>
<a href="#contact" class="hidden md:inline-block bg-primary text-white px-6 py-2 rounded-button shadow-sm hover:bg-blue-600 transition-colors whitespace-nowrap">お問い合わせ</a>
<button class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700" id="mobile-menu-button">
<i class="ri-menu-line ri-lg"></i>
</button>
</div>
<!-- モバイルメニュー -->
<div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg absolute w-full">
<div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
<a href="#features" class="text-gray-700 hover:text-primary transition-colors">機能紹介</a>
<a href="#pricing" class="text-gray-700 hover:text-primary transition-colors">料金プラン</a>
<a href="#benefits" class="text-gray-700 hover:text-primary transition-colors">導入メリット</a>
<a href="#contact" class="text-gray-700 hover:text-primary transition-colors">お問い合わせ</a>
<a href="#contact" class="bg-primary text-white px-6 py-2 rounded-button shadow-sm hover:bg-blue-600 transition-colors text-center whitespace-nowrap">お問い合わせ</a>
</div>
</div>
</header>
<!-- ヒーローセクション -->
<section class="relative overflow-hidden">
<div class="absolute inset-0 w-full h-full" style="background-image: url('https://readdy.ai/api/search-image?query=A%20modern%2C%20clean%20e-commerce%20dashboard%20interface%20with%20soft%20blue%20gradient%20background.%20The%20left%20side%20has%20a%20white%20space%20for%20text%20content%2C%20while%20the%20right%20side%20shows%20a%20stylized%20computer%20screen%20with%20order%20notifications%20and%20messaging%20templates.%20The%20design%20is%20minimalist%20with%20subtle%20blue%20accents%2C%20perfect%20for%20a%20Japanese%20e-commerce%20automation%20tool.%20The%20transition%20between%20the%20white%20text%20area%20and%20image%20must%20be%20seamless%20and%20natural.&width=1920&height=800&seq=hero1&orientation=landscape'); background-size: cover; background-position: center;"></div>
<div class="relative container mx-auto px-4 py-20 md:py-32 flex flex-col items-start">
<div class="max-w-2xl bg-white bg-opacity-90 p-8 rounded-lg shadow-lg">
<h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">ECショップの注文処理を<span class="text-primary">自動化</span></h1>
<p class="text-xl md:text-2xl text-gray-700 mb-8">minne・Creemaの注文管理をもっと簡単に</p>
<p class="text-gray-600 mb-8">Gmail連携による自動メール取得、テンプレートによる自動メッセージ送信で、ECショップの運営効率を大幅に向上させます。</p>
<div class="flex flex-col sm:flex-row gap-4">
<a href="#demo" class="bg-primary text-white px-8 py-3 rounded-button shadow-md hover:bg-blue-600 transition-colors text-center whitespace-nowrap">無料デモを申し込む</a>
<a href="#features" class="bg-white text-primary border border-primary px-8 py-3 rounded-button shadow-sm hover:bg-gray-50 transition-colors text-center whitespace-nowrap">機能を詳しく見る</a>
</div>
</div>
</div>
</section>
<!-- 主要機能紹介 -->
<section id="features" class="py-20 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold text-gray-900 mb-4">主要機能</h2>
<p class="text-gray-600 max-w-2xl mx-auto">AutoMessageECは、ECショップ運営者の作業負担を軽減するための機能を多数搭載しています。</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- 機能1 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-mail-download-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Gmail連携による自動メール取得</h3>
<p class="text-gray-600 text-center">注文通知メールを自動的に取得し、必要な情報を抽出します。IMAP対応で安全かつ効率的に処理します。</p>
</div>
<!-- 機能2 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-message-3-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">テンプレートによる自動メッセージ送信</h3>
<p class="text-gray-600 text-center">あらかじめ設定したテンプレートを使用して、顧客へ自動的にメッセージを送信。対応の品質と速度を向上させます。</p>
</div>
<!-- 機能3 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-code-box-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">ノーコードで簡単設定</h3>
<p class="text-gray-600 text-center">プログラミングの知識不要。直感的なGUIで簡単に設定でき、誰でも短時間で導入できます。</p>
</div>
</div>
</div>
</section>
<!-- 詳細機能説明 -->
<section class="py-20 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold text-gray-900 mb-4">詳細機能</h2>
<p class="text-gray-600 max-w-2xl mx-auto">AutoMessageECの充実した機能をご紹介します。</p>
</div>
<!-- タブナビゲーション -->
<div class="flex flex-wrap justify-center mb-8 border-b">
<button class="tab-button px-6 py-3 text-primary border-b-2 border-primary font-medium" data-tab="tab1">メール受信設定</button>
<button class="tab-button px-6 py-3 text-gray-500 hover:text-primary" data-tab="tab2">注文情報抽出</button>
<button class="tab-button px-6 py-3 text-gray-500 hover:text-primary" data-tab="tab3">自動ログイン</button>
<button class="tab-button px-6 py-3 text-gray-500 hover:text-primary" data-tab="tab4">メッセージ送信</button>
<button class="tab-button px-6 py-3 text-gray-500 hover:text-primary" data-tab="tab5">UI操作</button>
<button class="tab-button px-6 py-3 text-gray-500 hover:text-primary" data-tab="tab6">自動処理設定</button>
</div>
<!-- タブコンテンツ -->
<div class="tab-content-container">
<!-- タブ1: メール受信設定 -->
<div id="tab1" class="tab-content active">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20clean%2C%20modern%20interface%20showing%20Gmail%20integration%20settings%20for%20an%20e-commerce%20automation%20tool.%20The%20screen%20displays%20email%20configuration%20options%20with%20fields%20for%20IMAP%20settings%2C%20email%20filters%2C%20and%20connection%20status%20indicators.%20The%20design%20is%20minimalist%20with%20a%20light%20blue%20accent%20color%2C%20showing%20Japanese%20text%20in%20the%20interface.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot.&width=600&height=400&seq=mail1&orientation=landscape" alt="メール受信設定画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">Gmail連携・IMAP取得</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>Gmailとの安全な連携によるメール取得</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>IMAP対応で様々なメールサーバーに対応可能</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>キーワードフィルターで必要なメールのみを処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>期間指定による過去メールの一括処理も可能</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズにより独自メールサーバー対応や複数条件抽出も可能です。</p>
</div>
</div>
</div>
<!-- タブ2: 注文情報抽出 -->
<div id="tab2" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20software%20interface%20showing%20order%20information%20extraction%20from%20emails%20for%20an%20e-commerce%20automation%20tool.%20The%20screen%20displays%20parsed%20data%20fields%20like%20product%20name%2C%20order%20ID%2C%20customer%20name%2C%20and%20shipping%20details%20extracted%20from%20notification%20emails.%20The%20interface%20has%20Japanese%20text%20labels%20and%20a%20clean%20design%20with%20light%20blue%20accents.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot%20with%20sample%20order%20data%20visible.&width=600&height=400&seq=order1&orientation=landscape" alt="注文情報抽出画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">商品名・注文ID・氏名等の抽出</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>minne・Creemaの注文通知メールから必要情報を正確に抽出</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>商品名、注文ID、顧客名、配送先など重要情報を自動認識</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>サイト別のテンプレートに対応し、正確な情報抽出を実現</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>抽出データの確認・編集機能で万一の誤認識にも対応</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズにより他のECサイトへの対応や抽出項目の追加も可能です。</p>
</div>
</div>
</div>
<!-- タブ3: 自動ログイン -->
<div id="tab3" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20software%20interface%20showing%20automatic%20login%20configuration%20for%20e-commerce%20platforms.%20The%20screen%20displays%20secure%20credential%20storage%20for%20Minne%20and%20Creema%20websites%20with%20masked%20password%20fields%20and%20login%20status%20indicators.%20The%20interface%20has%20Japanese%20text%20labels%20and%20a%20clean%20design%20with%20light%20blue%20accents.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot%20with%20browser%20automation%20settings%20visible.&width=600&height=400&seq=login1&orientation=landscape" alt="自動ログイン設定画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">Seleniumによる自動ログイン</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>Seleniumを活用した安全なブラウザ自動操作</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>minne・Creemaへの自動ログイン処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>認証メール経由のログインにも対応（minne）</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>セキュアな認証情報管理</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズによりAmazon・BASE・STORES等への対応拡張も可能です。</p>
</div>
</div>
</div>
<!-- タブ4: メッセージ送信 -->
<div id="tab4" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20software%20interface%20showing%20message%20template%20management%20for%20an%20e-commerce%20automation%20tool.%20The%20screen%20displays%20multiple%20message%20templates%20with%20editable%20fields%2C%20variables%20for%20customer%20information%2C%20and%20preview%20functionality.%20The%20interface%20has%20Japanese%20text%20content%20in%20the%20templates%20and%20a%20clean%20design%20with%20light%20blue%20accents.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot%20with%20sample%20message%20templates%20visible.&width=600&height=400&seq=message1&orientation=landscape" alt="メッセージ送信設定画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">テンプレート送信（GUI選択）</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>複数のメッセージテンプレートを登録・管理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>顧客名や商品名などの変数を自動挿入</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>送信前のプレビュー確認機能</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>送信履歴の記録と管理</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズによりテンプレート管理ツール連携や多言語対応も可能です。</p>
</div>
</div>
</div>
<!-- タブ5: UI操作 -->
<div id="tab5" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20software%20interface%20showing%20the%20main%20dashboard%20of%20an%20e-commerce%20automation%20tool.%20The%20screen%20displays%20a%20clean%20Tkinter%20GUI%20with%20order%20list%2C%20operation%20buttons%2C%20and%20activity%20logs.%20The%20interface%20has%20Japanese%20text%20labels%20and%20a%20clean%20design%20with%20light%20blue%20accents.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot%20with%20a%20user-friendly%20layout%20and%20sample%20order%20data%20visible.&width=600&height=400&seq=ui1&orientation=landscape" alt="UI操作画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">Tkinter GUIで操作・表示ログ</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>直感的に操作できるシンプルなインターフェース</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>注文一覧の表示と選択操作</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>リアルタイムの処理ログ表示</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>各種設定画面への簡単アクセス</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズによりロゴ・テーマカラー変更やWeb UI対応も可能です。</p>
</div>
</div>
</div>
<!-- タブ6: 自動処理設定 -->
<div id="tab6" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=A%20software%20interface%20showing%20automation%20settings%20for%20an%20e-commerce%20tool.%20The%20screen%20displays%20scheduling%20options%2C%20processing%20intervals%2C%20and%20operation%20mode%20settings.%20The%20interface%20has%20Japanese%20text%20labels%20and%20a%20clean%20design%20with%20light%20blue%20accents.%20The%20image%20should%20look%20like%20a%20professional%20software%20screenshot%20with%20time%20interval%20settings%2C%20headless%20mode%20toggle%2C%20and%20test%20mode%20options%20visible.&width=600&height=400&seq=auto1&orientation=landscape" alt="自動処理設定画面" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-2xl font-semibold text-gray-900 mb-4">1分ごとに取得→送信</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>定期的な自動処理の実行（標準：1分間隔）</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>テストモードによる安全な動作確認</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>ヘッドレスモードでバックグラウンド処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>処理状況のログ記録</p>
</li>
</ul>
<p class="mt-6 text-gray-600">カスタマイズにより繰り返し間隔設定変更や曜日別スケジューリングも可能です。</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 料金プラン -->
<section id="pricing" class="py-20 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold text-gray-900 mb-4">料金プラン</h2>
<p class="text-gray-600 max-w-2xl mx-auto">シンプルな料金体系で、導入しやすい価格設定をしています。</p>
</div>
<div class="max-w-4xl mx-auto">
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
<div class="bg-primary text-white p-6 text-center">
<h3 class="text-2xl font-bold">スタンダードプラン</h3>
<p class="text-lg opacity-90">Minne・Creema対応（1アカウント）</p>
</div>
<div class="p-8">
<div class="text-center mb-8">
<span class="text-4xl font-bold text-gray-900">¥110,000</span>
<span class="text-gray-600 ml-2">（税込）</span>
</div>
<ul class="space-y-4 mb-8">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>Gmail連携による注文メール自動取得</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>テンプレートによる自動メッセージ送信</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>初期導入サポート（リモート設定支援）</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>基本操作マニュアル提供</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-2 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p>年1回までのメンテナンス／機能追加対応（軽微なもの）</p>
</li>
</ul>
<div class="bg-gray-50 p-4 rounded-lg mb-8">
<p class="text-gray-700 font-medium">オプション</p>
<p class="text-gray-600 mt-2">標準対応以外のECサイト（BASE、STORES、Shopify等）を追加する場合は、1サイトにつき別途¥100,000（税込）</p>
</div>
<div class="text-center">
<a href="#contact" class="bg-primary text-white px-8 py-3 rounded-button shadow-md hover:bg-blue-600 transition-colors inline-block whitespace-nowrap">お問い合わせ</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 導入メリット -->
<section id="benefits" class="py-20 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold text-gray-900 mb-4">導入メリット</h2>
<p class="text-gray-600 max-w-2xl mx-auto">AutoMessageECを導入することで得られる具体的なメリットをご紹介します。</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- メリット1 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-time-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4">作業時間の削減</h3>
<p class="text-gray-600">注文確認から顧客へのメッセージ送信までの作業を自動化することで、1日あたり約1〜2時間の作業時間を削減できます。この時間を商品開発や他の業務に充てることができます。</p>
</div>
<!-- メリット2 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-medal-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4">対応品質の向上</h3>
<p class="text-gray-600">テンプレート化された丁寧なメッセージを即時に送信することで、顧客満足度が向上します。人的ミスを減らし、一貫した高品質な対応を実現します。</p>
</div>
<!-- メリット3 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-24-hours-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4">24時間自動運用</h3>
<p class="text-gray-600">深夜や外出中でも注文に対して迅速に対応できるため、顧客の待ち時間を最小限に抑えることができます。休日や繁忙期でも安定した対応が可能になります。</p>
</div>
<!-- メリット4 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-install-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-4">簡単導入・操作</h3>
<p class="text-gray-600">プログラミングの知識がなくても、直感的なインターフェースで簡単に設定・操作できます。初期設定サポートも充実しているため、ITに詳しくない方でも安心して導入できます。</p>
</div>
</div>
</div>
</section>
<!-- お問い合わせ・資料請求 -->
<section id="contact" class="py-20 gradient-bg">
<div class="container mx-auto px-4">
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 md:p-12">
<div class="text-center mb-12">
<h2 class="text-3xl font-bold text-gray-900 mb-4">お問い合わせ・資料請求</h2>
<p class="text-gray-600">AutoMessageECについてのご質問や資料請求、デモのお申し込みはこちらから</p>
</div>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label for="company" class="block text-sm font-medium text-gray-700 mb-1">会社名</label>
<input type="text" id="company" name="company" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="name" class="block text-sm font-medium text-gray-700 mb-1">お名前 <span class="text-red-500">*</span></label>
<input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="email" class="block text-sm font-medium text-gray-700 mb-1">メールアドレス <span class="text-red-500">*</span></label>
<input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="phone" class="block text-sm font-medium text-gray-700 mb-1">電話番号</label>
<input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
</div>
<div>
<label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-1">お問い合わせ内容 <span class="text-red-500">*</span></label>
<select id="inquiry_type" name="inquiry_type" required class="w-full px-4 py-2 pr-8 border border-gray-300 rounded focus:ring-primary focus:border-primary appearance-none bg-white">
<option value="">選択してください</option>
<option value="demo">無料デモ申し込み</option>
<option value="document">資料請求</option>
<option value="price">お見積り依頼</option>
<option value="question">製品に関する質問</option>
<option value="other">その他</option>
</select>
</div>
<div>
<label for="message" class="block text-sm font-medium text-gray-700 mb-1">お問い合わせ詳細</label>
<textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-primary focus:border-primary"></textarea>
</div>
<div class="flex items-start">
<div class="flex items-center h-5">
<input id="privacy" name="privacy" type="checkbox" required class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
</div>
<div class="ml-3 text-sm">
<label for="privacy" class="font-medium text-gray-700">プライバシーポリシーに同意する <span class="text-red-500">*</span></label>
</div>
</div>
<div class="text-center">
<button type="submit" class="bg-primary text-white px-8 py-3 rounded-button shadow-md hover:bg-blue-600 transition-colors whitespace-nowrap">送信する</button>
</div>
</form>
<div class="mt-12 pt-8 border-t border-gray-200">
<h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">サポート内容</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-customer-service-2-line ri-xl text-primary"></i>
</div>
<h4 class="font-medium text-gray-900 mb-2">初期導入サポート</h4>
<p class="text-gray-600 text-sm">リモートによる設定支援で、スムーズな導入をサポートします。</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-file-list-3-line ri-xl text-primary"></i>
</div>
<h4 class="font-medium text-gray-900 mb-2">マニュアル提供</h4>
<p class="text-gray-600 text-sm">基本操作マニュアルとトラブル対応手順書を提供します。</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-tools-line ri-xl text-primary"></i>
</div>
<h4 class="font-medium text-gray-900 mb-2">メンテナンス対応</h4>
<p class="text-gray-600 text-sm">年1回までの軽微な機能追加・メンテナンス対応を行います。</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- フッター -->
<footer class="bg-gray-800 text-white py-12">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div>
<h3 class="text-xl font-['Pacifico'] mb-4">AutoMessageEC</h3>
<p class="text-gray-400 text-sm">ECショップの注文処理を自動化し、作業効率を大幅に向上させるツールです。</p>
</div>
<div>
<h4 class="font-semibold mb-4">リンク</h4>
<ul class="space-y-2 text-gray-400">
<li><a href="#features" class="hover:text-white transition-colors">機能紹介</a></li>
<li><a href="#pricing" class="hover:text-white transition-colors">料金プラン</a></li>
<li><a href="#benefits" class="hover:text-white transition-colors">導入メリット</a></li>
<li><a href="#contact" class="hover:text-white transition-colors">お問い合わせ</a></li>
</ul>
</div>
<div>
<h4 class="font-semibold mb-4">サポート</h4>
<ul class="space-y-2 text-gray-400">
<li><a href="#" class="hover:text-white transition-colors">よくある質問</a></li>
<li><a href="#" class="hover:text-white transition-colors">マニュアル</a></li>
<li><a href="#" class="hover:text-white transition-colors">サポート窓口</a></li>
<li><a href="#" class="hover:text-white transition-colors">システム要件</a></li>
</ul>
</div>
<div>
<h4 class="font-semibold mb-4">お問い合わせ</h4>
<ul class="space-y-2 text-gray-400">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-mail-line"></i>
</div>
<span>info@automessageec.com</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-phone-line"></i>
</div>
<span>03-1234-5678</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-map-pin-line"></i>
</div>
<span>〒100-0001 東京都千代田区千代田1-1</span>
</li>
</ul>
</div>
</div>
<div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm">© 2025 AutoMessageEC. All rights reserved.</p>
<div class="flex space-x-4 mt-4 md:mt-0">
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-twitter-x-line ri-lg"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-facebook-circle-line ri-lg"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-instagram-line ri-lg"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-youtube-line ri-lg"></i>
</div>
</a>
</div>
</div>
<div class="mt-4 text-center">
<a href="#" class="text-gray-400 text-sm hover:text-white transition-colors mr-4">プライバシーポリシー</a>
<a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">利用規約</a>
</div>
</div>
</footer>
<!-- スクリプト -->
<script src="assets/js/script.js"></script>
</body>
</html>