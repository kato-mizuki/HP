# HP - 不動産サイト

このリポジトリは、不動産関連のウェブサイトのソースコードです。  
サイトは「空き家管理・売却・相続」の相談を受け付けるフォームを備えています。

## 目次

- [概要](#概要)
- [機能](#機能)
- [使用技術](#使用技術)
- [セットアップ方法](#セットアップ方法)
- [メール送信設定](#メール送信設定)
- [ライセンス](#ライセンス)

## 概要

- 不動産の売却・管理・相続に関する情報提供サイト
- 入力内容確認画面を備えたお問い合わせフォーム
- 都道府県・市区町村情報を含むフォームのバリデーション

## 機能

1. お問い合わせフォーム
   - 名前、フリガナ、メールアドレス、電話番号
   - 郵便番号、住所、建物名
   - お問い合わせ内容（チェックボックス）
   - 個人情報の同意チェックボックス
2. 入力内容確認画面
   - 入力内容の確認・修正
   - セッションによるデータ保持
   - 修正ボタン押下で入力値保持しつつトップページへ戻る
3. メール送信
   - ユーザーへの確認メール
   - 管理者への通知メール

## 使用技術

- PHP 8.0.30 / Laravel 9.52.20
- HTML5 / CSS3 / JavaScript
- Laravel Blade テンプレート
- ClosedXML（Excel 出力）
- Composer パッケージ管理

## セットアップ方法

1. リポジトリをクローン
   ```bash
   git clone https://github.com/kato-mizuki/HP.git
   cd HP
2. 依存パッケージをインストール
    composer install  
    npm install  
    npm run dev  
3.  .envファイルを作成し、必要な設定を追加  
    cp .env.example .env  
    php artisan key:generate  
4. サーバー起動  
    php artisan serve  

## メール送信設定
 .envに以下のように設定してください（例Gmail）  
  MAIL_MAILER=smtp  
  MAIL_HOST=smtp.gmail.com  
  MAIL_PORT=587  
  MAIL_USERNAME=your_email@gmail.com  
  MAIL_PASSWORD=your_app_password  
  MAIL_ENCRYPTION=tls  
  MAIL_FROM_ADDRESS=your_email@gmail.com  
  MAIL_FROM_NAME="サイト名"  
その他のメールサービス（Yahoo, Outlook, iCloud など）にも対応可能です。  

## ライセンス

このリポジトリのコードは MIT ライセンスのもとで公開されています。

💡 ポイント
- プロジェクトの概要、機能、使用技術、セットアップ手順を明確に記載
- メール送信設定例も書いているので、開発者がすぐ動かせる
- 必要に応じて「フォームバリデーション」の詳細も追記可能
