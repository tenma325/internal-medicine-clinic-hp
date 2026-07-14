<?php
/**
 * Template Name: 診療案内
 * Template Post Type: page
 *
 * @package Midori_Naika_Clinic
 */

get_header();
?>
<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">MEDICAL</p>
      <h1>診療案内</h1>
      <p>患者さんが症状や目的から探しやすいよう、まずは主要な診療内容をシンプルに整理しています。</p>
    </div>
  </section>
  <section class="section section-soft">
    <div class="container">
      <div class="cards">
        <article class="card"><div class="card__icon">内</div><h3>一般内科</h3><p>発熱、咳、のどの痛み、腹痛、頭痛、めまい、倦怠感など、日常的な体調不良を診療します。</p></article>
        <article class="card"><div class="card__icon">糖</div><h3>生活習慣病</h3><p>高血圧、脂質異常症、糖尿病、高尿酸血症などの検査・治療・生活相談に対応します。</p></article>
        <article class="card"><div class="card__icon">予</div><h3>予防接種</h3><p>インフルエンザ、肺炎球菌など、取り扱いワクチンは運用に合わせて掲載します。</p></article>
        <article class="card"><div class="card__icon">健</div><h3>健康診断</h3><p>雇入時健診、定期健診、自治体健診などの案内枠として利用できます。</p></article>
        <article class="card"><div class="card__icon">発</div><h3>発熱・感染症相談</h3><p>発熱外来を設ける場合の受付方法や来院前連絡の案内を掲載します。</p></article>
        <article class="card"><div class="card__icon">書</div><h3>診断書・各種相談</h3><p>診断書、紹介状、検査結果の相談など、必要に応じて項目を追加できます。</p></article>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container cta-band">
      <div class="cta-band__inner">
        <div><h2>どの科目を受診すればよいか迷う方へ</h2><p>症状に応じてご案内します。来院前にWeb予約またはお電話でご相談ください。</p></div>
        <a class="button button-secondary" href="<?php echo esc_url(home_url('/reservation/')); ?>">相談・予約する</a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();

