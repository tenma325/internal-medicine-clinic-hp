# 内科クリニック 新規ホームページ制作案

Obsidian note `内科クリニックの新規ホームページ制作.md` の要件に沿って作成した、内科クリニック向けホームページ案です。

## 成果物

- `index.html` — トップページ / ランディングページ型トップ
- `about.html` — クリニック紹介
- `services.html` — 診療案内
- `access.html` — 地図・アクセス
- `reservation.html` — Web予約埋め込み予定位置 / お問い合わせ
- `assets/styles.css` — 緑系・健康/ナチュラル配色のレスポンシブCSS
- `assets/main.js` — スマホ用メニュー開閉
- `wordpress-theme/midori-naika-clinic/` — WordPressテーマ化用の下地
- `docs/requirements-audit.md` — 要件対応表・検証メモ
- `internal-medicine-clinic-hp-complete.zip` — 配布用zip一式
- `midori-naika-clinic-wordpress-theme.zip` — WordPressテーマ単体のzip

## 配布用zipについて

配布用ファイルは以下の2種類です。

### 1. 全体配布用zip

`internal-medicine-clinic-hp-complete.zip`

静的HTML版、WordPressテーマ下地、README、要件対応メモ、プレビュー画像をまとめた配布用zipです。

このzipを渡す相手が、まず内容を確認したい場合はこちらを使用してください。

含まれる主な内容：

- `index.html`
- `about.html`
- `services.html`
- `access.html`
- `reservation.html`
- `assets/`
- `docs/`
- `wordpress-theme/`
- `README.md`

### 2. WordPressテーマ単体zip

`midori-naika-clinic-wordpress-theme.zip`

WordPress管理画面からアップロードするためのテーマzipです。

WordPressに導入する場合は、このzipを使用してください。

### 配布用zipの入手先

配布用zipは以下の2か所で受け取れます。

- ローカル：プロジェクトフォルダ直下の各zipファイル
  - `internal-medicine-clinic-hp-complete.zip`
  - `midori-naika-clinic-wordpress-theme.zip`
- GitHub Release（Public）：
  `https://github.com/tenma325/internal-medicine-clinic-hp/releases/tag/v1.0.0`

GitHubから受け取る場合の手順：

1. 上記のReleaseページを開きます。
2. 「Assets」の中から必要なzipをクリックしてダウンロードします。
   - 内容確認・全体を渡す場合：`internal-medicine-clinic-hp-complete.zip`
   - WordPressに導入する場合：`midori-naika-clinic-wordpress-theme.zip`

## サイトの開き方

### 方法1：HTML版をそのままブラウザで開く

`index.html` をブラウザで開くと静的HTML版を確認できます。

手順：

1. `internal-medicine-clinic-hp-complete.zip` を展開します。
2. 展開したフォルダを開きます。
3. `index.html` をダブルクリックします。
4. ブラウザでトップページが表示されます。

各ページは以下のファイルで確認できます。

- トップページ：`index.html`
- クリニック紹介：`about.html`
- 診療案内：`services.html`
- 地図・アクセス：`access.html`
- Web予約・お問い合わせ：`reservation.html`

### 方法2：GitHubで確認・ダウンロードする

Publicリポジトリ：

`https://github.com/tenma325/internal-medicine-clinic-hp`

GitHubにアクセスできるユーザーは、上記URLからソース一式を確認できます。配布用zipは Release ページ（`https://github.com/tenma325/internal-medicine-clinic-hp/releases/tag/v1.0.0`）の「Assets」からダウンロードできます。

注意：現在はPublic公開のため、URLを知っている人以外でもGitHub上で閲覧・ダウンロードできます。

### 方法3：WordPressにテーマとして導入する

WordPressで使う場合は、`midori-naika-clinic-wordpress-theme.zip` を使用します。

## WordPressで使う場合

### 管理画面からアップロードする場合

1. WordPress管理画面にログインします。
2. 「外観」→「テーマ」→「新規追加」を開きます。
3. 「テーマのアップロード」をクリックします。
4. `midori-naika-clinic-wordpress-theme.zip` を選択してアップロードします。
5. テーマ「Midori Naika Clinic」を有効化します。
6. 固定ページ（クリニック紹介 / 診療案内 / アクセス / Web予約・お問い合わせ）を作成します。
7. 「設定」→「表示設定」で、必要に応じてトップページを固定ページに設定します。
8. 実際の医院情報に差し替えます。

### FTPやサーバー上で設置する場合

1. `internal-medicine-clinic-hp-complete.zip` を展開します。
2. `wordpress-theme/midori-naika-clinic` フォルダを取り出します。
3. WordPressの `wp-content/themes/` にアップロードします。
4. WordPress管理画面でテーマ「Midori Naika Clinic」を有効化します。

## GitHubリポジトリ

URL：

`https://github.com/tenma325/internal-medicine-clinic-hp`

配布用zip（Release）：

`https://github.com/tenma325/internal-medicine-clinic-hp/releases/tag/v1.0.0`

公開範囲：

Public（一般公開）

GitHubアカウントにログインしていないユーザーでも、リポジトリとReleaseの配布zipを閲覧・ダウンロードできます。

## 差し替えが必要な仮情報

- クリニック名 / 住所 / 電話番号 / 最寄り駅 / 診療時間 / 休診日 / 駐車場案内
- Google Map の埋め込み先
- Web予約サービスの埋め込みコード
- 医師紹介、ロゴ、実写真、診療科目の正式名称

## 注意点

- 現在のGoogle Mapは仮の場所を表示しています。実際の住所が決まり次第、埋め込みURLを差し替えてください。
- Web予約欄は後日埋め込み用のプレースホルダーです。予約サービスが決まり次第、`reservation.html` またはWordPressテーマ側の該当テンプレートに埋め込みコードを設置してください。
- 静的HTML版はブラウザで直接確認できますが、WordPressテーマとして使う場合はWordPress環境が必要です。
