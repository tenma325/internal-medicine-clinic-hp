<?php
/**
 * Generic page template with clinic-friendly fallback sections.
 *
 * @package Midori_Naika_Clinic
 */

get_header();
?>
<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow"><?php echo esc_html(strtoupper((string) get_post_field('post_name', get_post()))); ?></p>
      <h1><?php the_title(); ?></h1>
      <?php if (has_excerpt()) : ?>
        <p><?php echo esc_html(get_the_excerpt()); ?></p>
      <?php endif; ?>
    </div>
  </section>
  <section class="section">
    <div class="container content-card">
      <?php
      while (have_posts()) {
          the_post();
          the_content();
      }
      ?>
    </div>
  </section>
</main>
<?php
get_footer();

