# AutoMessageEC ランディングページ

ECサイトの注文処理自動化ツール「AutoMessageEC」のランディングページです。

## 🚀 本番環境での運用

### 必要な環境
- **Webサーバー**: Apache 2.4+ または Nginx
- **PHP**: 7.4+ (推奨: 8.0+)
- **SSL証明書**: HTTPS対応必須
- **メール送信**: SMTP設定またはメール送信サービス

### ファイル構成
```
automessageec-lp/
├── index.php              # メインページ
├── contact-handler.php    # お問い合わせ処理
├── .htaccess             # Apache設定
├── assets/
│   ├── css/style.css     # スタイルシート
│   ├── js/script.js      # JavaScript
│   └── images/           # 画像ファイル
└── contact_log.txt       # お問い合わせログ（自動生成）
```

### 🔧 本番環境設定

#### 1. メール設定
`contact-handler.php`の以下の設定を確認してください：

```php
$to = 'info@koikoi.co.jp';  // 受信メールアドレス
```

#### 2. セキュリティ設定
- `.htaccess`ファイルでセキュリティヘッダーを設定済み
- ログファイルへの直接アクセスを禁止
- レート制限機能（1分間に3回まで）

#### 3. ログファイル権限
```bash
chmod 666 contact_log.txt  # 書き込み権限付与
```

#### 4. HTTPS設定
`.htaccess`内のHTTPSリダイレクトのコメントアウトを解除：
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### 📧 メール送信について

#### 開発環境
- メール送信は行われず、`contact_log.txt`にログ記録

#### 本番環境
- PHPの`mail()`関数を使用
- 送信失敗時は`contact_log.txt`にログ記録
- より確実な送信のため、以下の外部サービス推奨：
  - SendGrid
  - Mailgun
  - Amazon SES

### 🔒 セキュリティ機能

1. **入力値サニタイズ**: XSS攻撃対策
2. **レート制限**: スパム送信防止
3. **CSRFトークン**: 将来的な実装推奨
4. **ログファイル保護**: 直接アクセス禁止
5. **セキュリティヘッダー**: 各種攻撃対策

### 📊 監視・メンテナンス

#### ログファイル確認
```bash
tail -f contact_log.txt  # リアルタイム監視
```

#### 定期メンテナンス
- ログファイルのローテーション
- 画像ファイルの最適化
- セキュリティアップデート

### 🎯 パフォーマンス最適化

- **Gzip圧縮**: 有効化済み
- **ブラウザキャッシュ**: 1ヶ月設定
- **画像最適化**: WebP形式推奨
- **CDN**: CloudflareやAWS CloudFront推奨

### 📞 サポート情報

**連絡先**
- メール: info@koikoi.co.jp
- 電話: 03-6754-6371
- 住所: 170-0004 東京都豊島区北大塚1-34-2-2

### 🔄 更新履歴

- 2025-06-21: 本番環境対応完了
  - セキュリティ強化
  - レート制限追加
  - .htaccess設定追加
  - エラーハンドリング改善

---

© 2025 AutoMessageEC. All rights reserved. 