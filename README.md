## Atte

「Atte」は勤怠管理ができるアプリです。 会員登録することで毎日の勤怠を記録でき、日付別の勤怠記録の閲覧もできます。また個々人毎のログも確認できます（こちらは本来管理者権限の元を想定していましたが未実装となっています）

## 作成目的
このアプリはLaravel学習の総まとめとして作成しました。 与えられた要件や成果物イメージをもとに、テーブル定義・ER図作成・コーディングをおこないました。

## アプリケーションURL

デプロイしていないため、アプリケーションURLはありません。

## 他のリポジトリ
ありません
## 機能一覧
- 会員登録機能（入力項目は名前、メールアドレス、パスワード、確認用パスワード）
- ログイン（メールアドレスとパスワードで認証）・ログアウト機能
- 勤怠の打刻機能
  - 出勤・退勤の打刻
  - 休憩開始・終了の打刻
- 全ユーザーの日付別勤怠記録の表示
- ユーザー一覧（名前、メールアドレス）の表示
  - そのユーザー個別の日付別勤怠記録の表示

### 機能に関する注釈

- 出勤中に日付をまたいだ場合は、その日（跨ぐ前）の退勤ログが「null」に打刻されます。
- 出勤中は何度でも休憩できます。


## 使用技術および実行環境
- Laravel 8.83.27
- Laravel Breeze
- MySQL 5.7.34
- MacOS

## テーブル設計
![テーブル設計](https://github.com/seki221/attendance/assets/119157114/8e5052cf-c748-4b1b-8523-89b88fd1d606)

##　ER図
![ER図](https://github.com/seki221/attendance/assets/119157114/8114a3f2-b16a-4d9a-944f-2fe9f5b9a2bd)


## 環境構築

## 各ブランチの説明

main：完成版
