<?php
/**
 * Site header.
 *
 * @package Midori_Naika_Clinic
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="top-strip">
    <div class="top-strip__inner">
      <span>〒000-0000 東京都○○区○○ 1-2-3　○○駅 徒歩3分</span>
      <span class="top-strip__links">
        <a href="tel:0000000000">TEL 00-0000-0000</a>
        <span>月・火・水・金 9:00-18:00 / 土 9:00-13:00</span>
      </span>
    </div>
  </div>
  <div class="header-main">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> ホーム">
      <span class="brand-mark">緑</span>
      <span>
        <span class="brand-name"><?php bloginfo('name'); ?></span>
        <span class="brand-sub">Internal Medicine Clinic</span>
      </span>
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" data-nav-toggle>メニュー</button>
    <nav class="site-nav" data-site-nav aria-label="主要ナビゲーション">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'container' => false,
              'items_wrap' => '<ul class="menu">%3$s</ul>',
              'fallback_cb' => false,
          ]);
      } else {
          ?>
          <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
          <a href="<?php echo esc_url(home_url('/about/')); ?>">クリニック紹介</a>
          <a href="<?php echo esc_url(home_url('/services/')); ?>">診療案内</a>
          <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセス</a>
          <a class="nav-cta" href="<?php echo esc_url(home_url('/reservation/')); ?>">Web予約・お問い合わせ</a>
          <?php
      }
      ?>
    </nav>
  </div>
</header>
