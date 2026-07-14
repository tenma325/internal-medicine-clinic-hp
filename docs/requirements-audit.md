# Requirements audit

Source: `C:\Users\user\Documents\Obsidian Vault\内科クリニックの新規ホームページ制作.md`

## Derived requirements

- Create a new homepage/site for an internal medicine clinic, intended for WordPress.
- WordPress-oriented production: planning, design, coding, responsive support, CMS/WordPress introduction.
- Usage category: shop/office style site.
- Page count: 5 pages.
- Required content: Top / 診療案内 (medical services) / アクセス (access) / Web予約 (reservation, embedded later, position it) / お問い合わせ (contact) / Google Map.
- Also implied: company/clinic introduction, landing page.
- Must be easy to view on both smartphone and PC (responsive).
- Green color image (health / natural).
- Simple template/theme-based feel; do not over-customize.
- Navigation may mix one-page anchors, tabs, and page transitions; adjust sensibly.
- Reference impression: `https://hanako-skin.com/`, `https://www.tamagawa-josui.com/kihokai.html`.

## Implementation mapping

- 5 pages:
  - `index.html`: top / LP-style overview (診療案内/特徴/診療時間/予約/アクセス を1ページ内で確認)
  - `about.html`: clinic introduction
  - `services.html`: medical services
  - `access.html`: map/access
  - `reservation.html`: Web reservation placeholder + contact
- Green/natural design in `assets/styles.css` (white/mint/beige/green palette, rounded cards).
- Responsive layouts via CSS media queries + mobile nav toggle in `assets/main.js`.
- Google Map iframe in `index.html` and `access.html` (placeholder location pending real address).
- Web reservation embed placeholder in `reservation.html` + CTA in `index.html`.
- Contact info in header/footer and `reservation.html`.
- WordPress-ready theme scaffold under `wordpress-theme/midori-naika-clinic/`:
  - `style.css` (theme header + responsive design), `functions.php` (setup, menus, assets)
  - `header.php`, `footer.php` (nav with `wp_nav_menu` + hardcoded fallback)
  - `front-page.php` (LP-style top), `page.php` (editable pages), `README.md`

## Verification results

- 5 static HTML pages present; no broken internal links.
- Google Map iframe on `index.html` and `access.html`.
- Web reservation embed placeholder confirmed on `reservation.html`; contact `tel:` present.
- Responsive CSS media queries present; mobile nav toggle JS syntax-checked with `node --check` (OK).
- All required WordPress theme files present.
- PHP CLI is not installed locally, so WordPress PHP linting was not run; the theme follows standard WordPress structure.

## Uncertainties / placeholders to replace

- Clinic name is assumed as "みどり内科クリニック".
- Address, phone, nearest station, parking, official hours, holidays, and exact Google Map query are placeholders.
- Doctor profile, real photos, logo, official department names, and the reservation service are not specified in the source note.
- A live WordPress installation is not configured because hosting credentials/target environment were not provided.
