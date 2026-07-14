<?php
/**
 * Template Name: Web予約・お問い合わせ
 * Template Post Type: page
 *
 * @package Midori_Naika_Clinic
 */

get_header();
?>
<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">RESERVATION / CONTACT</p>
      <h1>Web予約・お問い合わせ</h1>
      <p>予約システムは後日埋め込み予定のため、差し替え位置が分かるように専用の枠を用意しています。</p>
    </div>
  </section>
  <section class="section">
    <div class="container reservation-grid">
      <div class="embed-placeholder" id="web-reservation">
        <div>
          <strong>Web予約システム埋め込み予定位置</strong>
          <span>予約サービスのiframeまたはスクリプトタグをこの枠内に設置します。</span>
          <span>例：診療予約、Web問診、LINE予約など</span>
        </div>
      </div>
      <div class="contact-list" id="contact">
        <div><strong>お電話でのお問い合わせ</strong><br><a href="tel:0000000000">00-0000-0000</a><br><small>受付時間内にお問い合わせください。</small></div>
        <div><strong>住所</strong><br>〒000-0000 東京都○○区○○ 1-2-3</div>
        <div><strong>発熱などの症状がある方</strong><br>来院前にWeb予約またはお電話でご相談ください。</div>
      </div>
    </div>
  </section>
  <section class="section section-soft">
    <div class="container">
      <div class="section-heading"><h2>予約導線の考え方</h2><p>トップページ、ヘッダー、診療案内、診療時間からこのページへ誘導し、患者さんが迷わず次の行動に進めるようにしています。</p></div>
    </div>
  </section>
</main>
<?php
get_footer();

