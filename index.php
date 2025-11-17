<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AutoMessageEC - ECショップの注文処理自動化ツール</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<!-- RemixIcon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
<!-- Custom CSS -->
<link rel="stylesheet" href="./assets/css/style.css">
<!-- Tailwind Config -->
<script>tailwind.config={theme:{extend:{colors:{primary:'#3b82f6',secondary:'#64748b'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
</head>
<body class="bg-white">
<!-- ヘッダー -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
<div class="flex items-center">
<h1 class="text-3xl font-bold text-primary">AutoMessageEC</h1>
</div>
<nav class="hidden md:flex space-x-8">
<a href="#features" class="text-lg text-gray-700 hover:text-primary transition-colors">機能紹介</a>
<a href="#pricing" class="text-lg text-gray-700 hover:text-primary transition-colors">料金プラン</a>
<a href="#benefits" class="text-lg text-gray-700 hover:text-primary transition-colors">導入メリット</a>
<a href="#contact" class="text-lg text-gray-700 hover:text-primary transition-colors">お問い合わせ</a>
</nav>
<a href="#contact" class="hidden md:inline-block bg-primary text-white px-8 py-3 text-lg rounded-button shadow-sm hover:bg-blue-600 transition-colors whitespace-nowrap">お問い合わせ</a>
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
<section class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-100">
<div class="container mx-auto px-4 py-12 md:py-16">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
<!-- テキストコンテンツ -->
<div class="order-1 lg:order-1">
<div class="bg-white bg-opacity-95 p-6 md:p-8 lg:p-10 rounded-lg shadow-lg">
<h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4 md:mb-6 tracking-tight">ECサイトの注文対応を<span class="text-primary">完全自動化</span></h1>
<p class="text-lg md:text-2xl lg:text-3xl text-gray-700 mb-6 md:mb-10">様々なECサイトから注文を読み取り、自動でサンクスメールを送信</p>
<p class="text-base md:text-lg lg:text-xl text-gray-600 mb-6 md:mb-10 leading-relaxed">様々なメールサーバーから注文メール自動取得、カスタマイズ可能なサンクスメール送信まで。必要に応じてECサイトにログインし、サイト内メッセージ機能からも自動送信できます。</p>
<div class="flex justify-start">
<a href="#contact" class="bg-primary text-white px-8 md:px-10 py-3 md:py-4 text-base md:text-lg rounded-button shadow-md hover:bg-blue-600 transition-colors text-center whitespace-nowrap">今すぐお問い合わせ</a>
</div>
</div>
</div>
<!-- PC画面表示エリア -->
<div class="order-2 lg:order-2 flex justify-center">
<div class="relative">
<!-- PC枠 -->
<div class="bg-gray-800 rounded-t-lg p-1.5 md:p-2 shadow-2xl">
<div class="bg-gray-700 rounded-t-md p-1 flex items-center space-x-1">
<div class="w-2 h-2 md:w-3 md:h-3 bg-red-500 rounded-full"></div>
<div class="w-2 h-2 md:w-3 md:h-3 bg-yellow-500 rounded-full"></div>
<div class="w-2 h-2 md:w-3 md:h-3 bg-green-500 rounded-full"></div>
</div>
<!-- PC画面部分 -->
<div class="bg-white rounded-b-md overflow-hidden w-80 h-56 md:w-96 md:h-64 lg:w-[500px] lg:h-[350px]">
<img src="./assets/images/hero-bg.png" alt="AutoMessageEC画面" class="w-full h-full object-cover">
</div>
</div>
<!-- PC台座 -->
<div class="absolute -bottom-3 md:-bottom-4 left-1/2 transform -translate-x-1/2 w-16 h-3 md:w-20 md:h-4 bg-gray-600 rounded-b-lg"></div>
<div class="absolute -bottom-4 md:-bottom-6 left-1/2 transform -translate-x-1/2 w-24 h-1.5 md:w-32 md:h-2 bg-gray-700 rounded-full"></div>
</div>
</div>
</div>
</div>
</section>
<!-- 主要機能紹介 -->
<section id="features" class="py-20 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">主要機能</h2>
<p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">AutoMessageECは、様々なECサイトの注文対応を自動化し、運営者の作業負担を大幅に軽減する多機能ツールです。</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- 機能1 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-mail-download-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">多様なメールサーバー対応の注文取得</h3>
<p class="text-lg text-gray-600 text-center leading-relaxed">Gmail、Yahoo!メール、独自ドメインメールなど様々なメールサーバーから注文通知メールを自動取得。IMAP対応で安全かつ効率的に注文情報を抽出します。</p>
</div>
<!-- 機能2 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-message-3-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">カスタマイズ可能なサンクスメール送信</h3>
<p class="text-lg text-gray-600 text-center leading-relaxed">お客様のブランドに合わせてカスタマイズしたサンクスメールを自動送信。メール内容は自由に編集でき、丁寧な対応で顧客満足度を向上させます。</p>
</div>
<!-- 機能3 -->
<div class="bg-white p-8 rounded-lg shadow-md transition-all duration-300 feature-card">
<div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-code-box-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6 text-center">ECサイト内メッセージ機能対応</h3>
<p class="text-lg text-gray-600 text-center leading-relaxed">必要に応じてECサイトに自動ログインし、サイト内のメッセージ機能からもサンクスメールを送信。幅広いECプラットフォームに対応します。</p>
</div>
</div>
</div>
</section>
<!-- 詳細機能説明 -->
<section class="py-20 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-16">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">詳細機能</h2>
<p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">AutoMessageECの充実した機能をご紹介します。</p>
</div>
<!-- タブナビゲーション -->
<div class="flex flex-wrap justify-center mb-8 border-b">
<button class="tab-button px-8 py-4 text-lg text-primary border-b-2 border-primary font-medium" data-tab="tab1">メール受信設定</button>
<button class="tab-button px-8 py-4 text-lg text-gray-500 hover:text-primary" data-tab="tab2">注文情報抽出</button>
<button class="tab-button px-8 py-4 text-lg text-gray-500 hover:text-primary" data-tab="tab3">自動ログイン</button>
<button class="tab-button px-8 py-4 text-lg text-gray-500 hover:text-primary" data-tab="tab4">メッセージ送信</button>
<button class="tab-button px-8 py-4 text-lg text-gray-500 hover:text-primary" data-tab="tab5">UI操作</button>
<button class="tab-button px-8 py-4 text-lg text-gray-500 hover:text-primary" data-tab="tab6">自動処理設定</button>
</div>
<!-- タブコンテンツ -->
<div class="tab-content-container">
<!-- タブ1: メール受信設定 -->
<div id="tab1" class="tab-content active">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="./assets/images/mail-concept.png" alt="メール受信設定コンセプト" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">多様なメールサーバー・IMAP対応</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">Gmail、Yahoo!メール、独自ドメインメールなど幅広いメールサーバーに対応</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">IMAP/POP3プロトコル対応で安全なメール取得</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">キーワードフィルターで必要なメールのみを処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">期間指定による過去メールの一括処理も可能</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズにより企業独自のメールサーバーや特殊な設定にも対応可能です。</p>
</div>
</div>
</div>
<!-- タブ2: 注文情報抽出 -->
<div id="tab2" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="./assets/images/data-concept.png" alt="注文情報抽出コンセプト" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">商品名・注文ID・氏名等の抽出</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">様々なECサイトの注文通知メールから必要情報を正確に抽出</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">商品名、注文ID、顧客名、配送先など重要情報を自動認識</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">サイト別のテンプレートに対応し、正確な情報抽出を実現</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">抽出データの確認・編集機能で万一の誤認識にも対応</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズにより他のECプラットフォームへの対応や抽出項目の追加も可能です。</p>
</div>
</div>
</div>
<!-- タブ3: 自動ログイン -->
<div id="tab3" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="./assets/images/auth-concept.png" alt="自動ログインコンセプト" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">Seleniumによる自動ログイン</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">Seleniumを活用した安全なブラウザ自動操作</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">様々なECサイトへの自動ログイン処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">認証メール経由のログインにも対応</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">セキュアな認証情報管理</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズにより他のECプラットフォームへの対応拡張も可能です。</p>
</div>
</div>
</div>
<!-- タブ4: メッセージ送信 -->
<div id="tab4" class="tab-content hidden">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="md:w-1/2">
<img src="./assets/images/message-concept.png" alt="メッセージ送信コンセプト" class="rounded-lg shadow-lg w-full">
</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">サンクスメール自動送信</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">カスタマイズ可能なサンクスメールテンプレートを登録・管理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">顧客名や商品名などの変数を自動挿入してパーソナライズ</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">送信前のプレビュー確認機能</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">送信履歴の記録と管理</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズによりテンプレート管理ツール連携や多言語対応も可能です。</p>
</div>
</div>
</div>
		<!-- タブ5: UI操作 -->
		<div id="tab5" class="tab-content hidden">
			<div class="flex flex-col md:flex-row items-center gap-12">
				<div class="md:w-1/2">
					<img src="./assets/images/ui-concept.png" alt="UI操作コンセプト" class="rounded-lg shadow-lg w-full">
				</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">Tkinter GUIで操作・表示ログ</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">直感的に操作できるシンプルなインターフェース</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">注文一覧の表示と選択操作</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">リアルタイムの処理ログ表示</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">各種設定画面への簡単アクセス</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズによりロゴ・テーマカラー変更やWeb UI対応も可能です。</p>
</div>
</div>
</div>
		<!-- タブ6: 自動処理設定 -->
		<div id="tab6" class="tab-content hidden">
			<div class="flex flex-col md:flex-row items-center gap-12">
				<div class="md:w-1/2">
					<img src="./assets/images/automation-concept.png" alt="自動処理設定コンセプト" class="rounded-lg shadow-lg w-full">
				</div>
<div class="md:w-1/2">
<h3 class="text-3xl font-semibold text-gray-900 mb-6">1分ごとに取得→送信</h3>
<ul class="space-y-6">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">定期的な自動処理の実行（標準：1分間隔）</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">テストモードによる安全な動作確認</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">ヘッドレスモードでバックグラウンド処理</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">処理状況のログ記録</p>
</li>
</ul>
<p class="mt-8 text-lg text-gray-600 leading-relaxed">カスタマイズにより繰り返し間隔設定変更や曜日別スケジューリングも可能です。</p>
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
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">料金プラン</h2>
<p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">シンプルな料金体系で、導入しやすい価格設定をしています。</p>
</div>
<div class="max-w-4xl mx-auto">
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
<div class="bg-primary text-white p-6 text-center">
<h3 class="text-3xl font-bold">スタンダードプラン</h3>
<p class="text-xl opacity-90">ECサイト1つまで対応（1アカウント）</p>
</div>
<div class="p-8">
<div class="text-center mb-8">
<span class="text-5xl font-bold text-gray-900">¥50,000</span>
<span class="text-xl text-gray-600 ml-2">（税込）</span>
</div>
<ul class="space-y-6 mb-10">
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">様々なメールサーバーからの注文メール自動取得</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">カスタマイズ可能なサンクスメールの自動送信</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">初期導入サポート（リモート設定支援）</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">基本操作マニュアル提供</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">ECサイト内メッセージ機能からの自動送信対応</p>
</li>
<li class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center text-primary mr-3 mt-1">
<i class="ri-check-line ri-lg"></i>
</div>
<p class="text-lg leading-relaxed">年1回までのメンテナンス／機能追加対応（軽微なもの）</p>
</li>
</ul>
<div class="bg-gray-50 p-6 rounded-lg mb-10">
<p class="text-xl text-gray-700 font-medium mb-4">追加オプション</p>
<div class="space-y-3">
<div class="flex justify-between items-center">
<span class="text-lg text-gray-600">サイト追加オプション（ECサイトを1つ追加）</span>
<span class="text-lg font-medium text-gray-900">¥100,000（税込）</span>
</div>
<div class="flex justify-between items-center">
<span class="text-lg text-gray-600">以降のサイト追加（サイト1つ追加ごと）</span>
<span class="text-lg font-medium text-gray-900">+¥100,000（税込）</span>
</div>
<p class="text-sm text-gray-500 mt-3">例：BASE、STORES、Shopifyなど任意のECモールに対応可能（個別見積可）</p>
</div>
</div>
<div class="text-center">
<a href="#contact" class="bg-primary text-white px-10 py-4 text-lg rounded-button shadow-md hover:bg-blue-600 transition-colors inline-block whitespace-nowrap">お問い合わせ</a>
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
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">導入メリット</h2>
<p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">様々なECサイトの注文対応を自動化することで得られる具体的なメリットをご紹介します。</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- メリット1 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-time-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6">作業時間の削減</h3>
<p class="text-lg text-gray-600 leading-relaxed">複数のECサイトからの注文確認からサンクスメール送信までの作業を完全自動化。1日あたり約1〜2時間の作業時間を削減でき、この時間を商品開発や他の重要な業務に充てることができます。</p>
</div>
<!-- メリット2 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-medal-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6">対応品質の向上</h3>
<p class="text-lg text-gray-600 leading-relaxed">カスタマイズしたサンクスメールテンプレートにより、ブランドに合った丁寧なメッセージを即座に送信。人的ミスを防ぎ、全てのECサイトで一貫した高品質な顧客対応を実現します。</p>
</div>
<!-- メリット3 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-24-hours-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6">24時間自動運用</h3>
<p class="text-lg text-gray-600 leading-relaxed">複数のECサイトからの注文に対して24時間体制で自動対応。深夜や外出中でも顧客の待ち時間を最小限に抑え、休日や繁忙期でも全てのサイトで安定した対応が可能です。</p>
</div>
<!-- メリット4 -->
<div class="bg-gray-50 p-8 rounded-lg shadow-md">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
<i class="ri-install-line ri-xl text-primary"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-900 mb-6">複数サイト一括管理</h3>
<p class="text-lg text-gray-600 leading-relaxed">複数のECサイトの注文対応を一つのツールで一括管理。各サイトを個別に確認する手間が不要になり、運営効率が大幅に向上します。初期設定サポートも充実しています。</p>
</div>
</div>
</div>
</section>
<!-- お問い合わせ・資料請求 -->
<section id="contact" class="py-20 gradient-bg">
<div class="container mx-auto px-4">
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 md:p-12">
<div class="text-center mb-12">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">お問い合わせ・資料請求</h2>
<p class="text-lg md:text-xl text-gray-600 leading-relaxed">AutoMessageECについてのご質問や資料請求はこちらから</p>
</div>
		<form action="contact-handler.php" method="POST" class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label for="company" class="block text-lg font-medium text-gray-700 mb-2">会社名</label>
<input type="text" id="company" name="company" class="w-full px-4 py-3 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="name" class="block text-lg font-medium text-gray-700 mb-2">お名前 <span class="text-red-500">*</span></label>
<input type="text" id="name" name="name" required class="w-full px-4 py-3 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="email" class="block text-lg font-medium text-gray-700 mb-2">メールアドレス <span class="text-red-500">*</span></label>
<input type="email" id="email" name="email" required class="w-full px-4 py-3 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
<div>
<label for="phone" class="block text-lg font-medium text-gray-700 mb-2">電話番号</label>
<input type="tel" id="phone" name="phone" class="w-full px-4 py-3 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary">
</div>
</div>
<div>
<label for="inquiry_type" class="block text-lg font-medium text-gray-700 mb-2">お問い合わせ内容 <span class="text-red-500">*</span></label>
<select id="inquiry_type" name="inquiry_type" required class="w-full px-4 py-3 pr-8 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary appearance-none bg-white">
<option value="">選択してください</option>
<option value="document">資料請求</option>
<option value="price">お見積り依頼</option>
<option value="question">製品に関する質問</option>
<option value="other">その他</option>
</select>
</div>
<div>
<label for="message" class="block text-lg font-medium text-gray-700 mb-2">お問い合わせ詳細</label>
<textarea id="message" name="message" rows="4" class="w-full px-4 py-3 text-lg border border-gray-300 rounded focus:ring-primary focus:border-primary"></textarea>
</div>
<div class="flex items-start">
<div class="flex items-center h-5">
<input id="privacy" name="privacy" type="checkbox" required class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
</div>
<div class="ml-3 text-sm">
<label for="privacy" class="text-lg font-medium text-gray-700"><a href="privacy-policy.php" target="_blank" class="text-primary hover:underline">プライバシーポリシー</a>に同意する <span class="text-red-500">*</span></label>
</div>
</div>
<div class="text-center">
<button type="submit" class="bg-primary text-white px-10 py-4 text-lg rounded-button shadow-md hover:bg-blue-600 transition-colors whitespace-nowrap">送信する</button>
</div>
</form>
<div class="mt-12 pt-8 border-t border-gray-200">
<h3 class="text-2xl md:text-3xl font-semibold text-gray-900 mb-6 text-center">サポート内容</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-customer-service-2-line ri-xl text-primary"></i>
</div>
<h4 class="text-xl font-medium text-gray-900 mb-4">初期導入サポート</h4>
<p class="text-gray-600 text-lg leading-relaxed">リモートによる設定支援で、スムーズな導入をサポートします。</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-file-list-3-line ri-xl text-primary"></i>
</div>
<h4 class="text-xl font-medium text-gray-900 mb-4">マニュアル提供</h4>
<p class="text-gray-600 text-lg leading-relaxed">基本操作マニュアルとトラブル対応手順書を提供します。</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
<i class="ri-tools-line ri-xl text-primary"></i>
</div>
<h4 class="text-xl font-medium text-gray-900 mb-4">メンテナンス対応</h4>
<p class="text-gray-600 text-lg leading-relaxed">年1回までの軽微な機能追加・メンテナンス対応を行います。</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- フッター -->
<footer class="bg-gray-800 text-white py-12">
<div class="container mx-auto px-4">
	<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div>
<h3 class="text-xl font-bold mb-4">AutoMessageEC</h3>
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
<h4 class="font-semibold mb-4">お問い合わせ</h4>
<ul class="space-y-2 text-gray-400">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-mail-line"></i>
</div>
<span>info@koikoi.co.jp</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-phone-line"></i>
</div>
<span>03-6754-6371</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-0.5">
<i class="ri-map-pin-line"></i>
</div>
<span>170-0004<br>東京都豊島区北大塚1-34-2-2</span>
</li>
</ul>
</div>
</div>
	<div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm">© 2025 AutoMessageEC. All rights reserved.</p>
<div class="mt-4 md:mt-0">
<a href="https://koikoi.co.jp/" target="_blank" class="text-gray-400 hover:text-white transition-colors text-sm">
<i class="ri-external-link-line mr-1"></i>公式サイトへ
</a>
</div>
</div>
<div class="mt-4 text-center">
<a href="privacy-policy.php" class="text-gray-400 text-sm hover:text-white transition-colors mr-4">プライバシーポリシー</a>
<a href="terms-of-service.php" class="text-gray-400 text-sm hover:text-white transition-colors">利用規約</a>
</div>
</div>
</footer>
<!-- スクリプト -->
<script src="./assets/js/script.js"></script>
</body>
</html>