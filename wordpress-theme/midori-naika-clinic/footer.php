<?php
/**
 * Site footer.
 *
 * @package Midori_Naika_Clinic
 */
?>
<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <strong class="brand-name" style="color: #fff"><?php bloginfo('name'); ?></strong>
      <p>地域の皆さまが、いつでも相談できる内科クリニックを目指します。</p>
    </div>
    <nav class="footer-nav" aria-label="フッターナビゲーション">
      <?php
      if (has_nav_menu('footer')) {
          wp_nav_menu([
              'theme_location' => 'footer',
              'container' => false,
              'items_wrap' => '<ul class="menu">%3$s</ul>',
              'fallback_cb' => false,
          ]);
      } else {
          ?>
          <a href="<?php echo esc_url(home_url('/about/')); ?>">クリニック紹介</a>
          <a href="<?php echo esc_url(home_url('/services/')); ?>">診療案内</a>
          <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセス</a>
          <a href="<?php echo esc_url(home_url('/reservation/')); ?>">Web予約・お問い合わせ</a>
          <?php
      }
      ?>
    </nav>
  </div>
  <div class="container copyright">© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
