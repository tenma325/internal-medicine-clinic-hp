<?php
/**
 * Template Name: 地図・アクセス
 * Template Post Type: page
 *
 * @package Midori_Naika_Clinic
 */

get_header();
?>
<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">ACCESS</p>
      <h1>地図・アクセス</h1>
      <p>スマホでもPCでも確認しやすいよう、住所・電話・最寄り駅・Google Mapを並べて表示します。</p>
    </div>
  </section>
  <section class="section">
    <div class="container access-grid">
      <div class="access-detail">
        <h2>アクセス情報</h2>
        <dl>
          <dt>住所</dt><dd>〒000-0000<br>東京都○○区○○ 1-2-3</dd>
          <dt>電車</dt><dd>○○駅 南口より徒歩3分</dd>
          <dt>バス</dt><dd>○○停留所より徒歩1分（仮）</dd>
          <dt>駐車場</dt><dd>近隣コインパーキングをご利用ください（仮）</dd>
          <dt>電話</dt><dd><a href="tel:0000000000">00-0000-0000</a></dd>
        </dl>
      </div>
      <div class="map-box">
        <iframe title="Google Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%A7%85&amp;output=embed"></iframe>
      </div>
    </div>
  </section>
  <section class="section section-soft">
    <div class="container">
      <div class="section-heading"><h2>来院時の目印</h2><p>実際の開院場所が確定後、駅出口、ビル外観、駐輪場・駐車場情報を追記してください。</p></div>
    </div>
  </section>
</main>
<?php
get_footer();

