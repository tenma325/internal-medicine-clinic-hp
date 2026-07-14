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

## プレビュー方法

`index.html` をブラウザで開くと静的HTML版を確認できます。

## WordPressで使う場合

1. `wordpress-theme/midori-naika-clinic` を `wp-content/themes/` にコピーします。
2. テーマ「Midori Naika Clinic」を有効化します。
3. 固定ページ（クリニック紹介 / 診療案内 / アクセス / Web予約・お問い合わせ）を作成します。
4. 「設定 > 表示設定」でトップページを固定ページにする場合はトップ用ページを指定します。
5. 実際の医院情報に差し替えます。

## 差し替えが必要な仮情報

- クリニック名 / 住所 / 電話番号 / 最寄り駅 / 診療時間 / 休診日 / 駐車場案内
- Google Map の埋め込み先
- Web予約サービスの埋め込みコード
- 医師紹介、ロゴ、実写真、診療科目の正式名称
