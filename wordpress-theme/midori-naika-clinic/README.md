# Midori Naika Clinic WordPress theme draft

This folder contains a simple WordPress theme scaffold based on the static homepage draft in the parent project.

## Intended setup

1. Copy `wordpress-theme/midori-naika-clinic` into `wp-content/themes/`.
2. Activate **Midori Naika Clinic** in WordPress.
3. Set the site name to the real clinic name.
4. Create pages for:
   - トップ
   - クリニック紹介
   - 診療案内
   - アクセス
   - Web予約・お問い合わせ
5. Set a static front page if needed.
6. Replace placeholder clinic data:
   - Clinic name
   - Address
   - Phone number
   - Station/access details
   - Consultation hours and holidays
   - Google Map embed query
   - Web reservation embed code

## Notes

- `front-page.php` contains the full landing-page style top page.
- `page.php` supports normal editable WordPress pages.
- `style.css` includes the WordPress theme header plus the same responsive design used by the static HTML version.
