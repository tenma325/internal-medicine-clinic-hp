# 内科クリニック 新規ホームページ制作案

Obsidian note `内科クリニックの新規ホームページ制作.md` の要件に沿って作成した、内科クリニック向けホームページ案です。

## 公開URL

GitHub Pagesで以下のURLから閲覧できます。

`https://tenma325.github.io/internal-medicine-clinic-hp/`

## GitHubリポジトリ

`https://github.com/tenma325/internal-medicine-clinic-hp`

公開範囲：Public（一般公開）

## 配布について

GitHub上でのzip配布は中止しました。

現在はRelease配布ではなく、GitHub Pages上の公開URLからサイトを確認する運用です。

## サイトの開き方

### 方法1：公開URLで見る

1. ブラウザで `https://tenma325.github.io/internal-medicine-clinic-hp/` を開きます。
2. トップページが表示されます。
3. ヘッダーのメニューから以下の各ページへ移動できます。
   - トップ
   - クリニック紹介
   - 診療案内
   - アクセス
   - Web予約・お問い合わせ

### 方法2：ローカルで確認する

1. リポジトリをダウンロードまたはcloneします。
2. `index.html` をブラウザで開きます。

各ページは以下のファイルで確認できます。

- トップページ：`index.html`
- クリニック紹介：`about.html`
- 診療案内：`services.html`
- 地図・アクセス：`access.html`
- Web予約・お問い合わせ：`reservation.html`

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

## 今回のデザイン修正

診療案内や特徴リストの緑色アイコンは、単純な「+」風の表示ではなく、CSSアニメーション付きの医療系アイコン表現に変更しました。

- 診療カード：聴診器、ハート、注射器、問診票などのアイコン
- 特徴リスト：丸型の小さなアニメーションアイコン
- CSSアニメーション：
  - やわらかいパルス
  - ふわっと浮く動き
  - 光が流れるハイライト

## WordPressで使う場合

`wordpress-theme/midori-naika-clinic/` を WordPress の `wp-content/themes/` に配置すると、WordPressテーマ下地として利用できます。

手順：

1. `wordpress-theme/midori-naika-clinic` フォルダを `wp-content/themes/` にアップロードします。
2. WordPress管理画面でテーマ「Midori Naika Clinic」を有効化します。
3. 固定ページ（クリニック紹介 / 診療案内 / アクセス / Web予約・お問い合わせ）を作成します。
4. 「設定」→「表示設定」で、必要に応じてトップページを固定ページに設定します。
5. 実際の医院情報に差し替えます。

## 差し替えが必要な仮情報

- クリニック名 / 住所 / 電話番号 / 最寄り駅 / 診療時間 / 休診日 / 駐車場案内
- Google Map の埋め込み先
- Web予約サービスの埋め込みコード
- 医師紹介、ロゴ、実写真、診療科目の正式名称

## 注意点

- 現在のGoogle Mapは仮の場所を表示しています。実際の住所が決まり次第、埋め込みURLを差し替えてください。
- Web予約欄は後日埋め込み用のプレースホルダーです。予約サービスが決まり次第、`reservation.html` またはWordPressテーマ側の該当テンプレートに埋め込みコードを設置してください。
- WordPressテーマとして使う場合はWordPress環境が必要です。
