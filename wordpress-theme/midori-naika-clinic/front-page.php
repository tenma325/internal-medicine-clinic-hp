<?php
/**
 * Front page template.
 *
 * @package Midori_Naika_Clinic
 */

get_header();
?>
<main>
  <section class="hero" id="top">
    <div class="container hero-grid">
      <div>
        <p class="eyebrow">健康と安心を、毎日のそばに</p>
        <h1>地域のかかりつけ医として、やさしく丁寧な内科診療を。</h1>
        <p class="hero-lead">発熱・生活習慣病・健康診断・予防接種まで、日々の不調を気軽に相談できる内科クリニックのホームページ案です。緑を基調に、清潔感と安心感が伝わるシンプルな構成でまとめました。</p>
        <div class="hero-actions">
          <a class="button button-primary" href="<?php echo esc_url(home_url('/reservation/')); ?>">Web予約はこちら</a>
          <a class="button button-secondary" href="<?php echo esc_url(home_url('/services/')); ?>">診療案内を見る</a>
        </div>
        <div class="quick-info" aria-label="クリニック基本情報">
          <div class="quick-info__item"><span>ACCESS</span><strong>○○駅 徒歩3分</strong></div>
          <div class="quick-info__item"><span>HOURS</span><strong>平日18時まで</strong></div>
          <div class="quick-info__item"><span>RESERVE</span><strong>Web予約対応予定</strong></div>
        </div>
      </div>
      <div class="hero-card" aria-label="院内イメージ"><div class="hero-card__photo"></div><div class="hero-card__panel"><strong>初めての方にも分かりやすい導線</strong><p>診療内容・受付時間・アクセス・予約への導線をファーストビューから確認できます。</p></div></div>
    </div>
  </section>
  <section class="section section-soft" id="services">
    <div class="container">
      <div class="section-heading"><h2>診療案内</h2><p>内科クリニックとして必要な情報をカード型で整理。WordPress化後は診療科目や症状別ページを追加しやすい構成です。</p></div>
      <div class="cards">
        <article class="card"><div class="card__icon">内</div><h3>一般内科</h3><p>発熱、咳、腹痛、頭痛、倦怠感など、急な体調不良から継続的な相談まで幅広く診療します。</p></article>
        <article class="card"><div class="card__icon">生</div><h3>生活習慣病</h3><p>高血圧、脂質異常症、糖尿病など、検査結果や日常生活に合わせて継続的にサポートします。</p></article>
        <article class="card"><div class="card__icon">健</div><h3>健診・予防接種</h3><p>健康診断、各種ワクチン、診断書の相談など、予防医療の窓口としてご利用いただけます。</p></article>
      </div>
    </div>
  </section>
  <section class="section"><div class="container feature-grid"><div class="feature-panel"><h2>シンプルで更新しやすい、WordPress向けの設計</h2><p>テンプレートやテーマをベースに手を入れすぎず、医院情報を分かりやすく伝えることを優先しています。</p></div><div class="feature-list"><div class="feature-list__item"><b>1</b><div><h3>トップページはランディングページ型</h3><p>診療案内、特徴、診療時間、予約、アクセスまで1ページ内で自然に確認できます。</p></div></div><div class="feature-list__item"><b>2</b><div><h3>スマホでも迷わない予約導線</h3><p>ヘッダーとCTAからWeb予約ページへ誘導。後日予約システムの埋め込みを差し替えできます。</p></div></div><div class="feature-list__item"><b>3</b><div><h3>医療サイトらしい清潔感</h3><p>緑系・白背景・角丸カードを中心に、健康的でナチュラルな印象に整えました。</p></div></div></div></div></section>
  <section class="section section-soft" id="hours">
    <div class="container">
      <div class="section-heading"><h2>診療時間</h2><p>実際の診療時間が確定していないため、差し替え前提のサンプルとして配置しています。</p></div>
      <div class="hours-card">
        <div><table class="hours-table" aria-label="診療時間表"><thead><tr><th>診療時間</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th></tr></thead><tbody><tr><td>9:00-12:30</td><td class="circle">●</td><td class="circle">●</td><td class="circle">●</td><td class="closed">—</td><td class="circle">●</td><td class="circle">●</td><td class="closed">—</td></tr><tr><td>14:30-18:00</td><td class="circle">●</td><td class="circle">●</td><td class="circle">●</td><td class="closed">—</td><td class="circle">●</td><td class="closed">—</td><td class="closed">—</td></tr></tbody></table><ul class="note-list"><li>休診日：木曜・日曜・祝日（仮）</li><li>受付終了時間、発熱外来の扱いなどは運用に合わせて調整してください。</li></ul></div>
        <div class="info-box"><h3>ご来院前のお願い</h3><p>発熱・咳など感染症が疑われる症状のある方は、来院前にWeb予約またはお電話でご相談ください。</p><a class="button button-primary" href="<?php echo esc_url(home_url('/reservation/')); ?>">予約・お問い合わせへ</a></div>
      </div>
    </div>
  </section>
  <section class="section"><div class="container cta-band"><div class="cta-band__inner"><div><h2>Web予約システムの埋め込み位置を用意しました。</h2><p>予約サービス確定後、予約ページ内の点線枠を埋め込みタグに差し替える想定です。</p></div><a class="button button-secondary" href="<?php echo esc_url(home_url('/reservation/')); ?>">Web予約ページへ</a></div></div></section>
  <section class="section section-soft" id="access"><div class="container"><div class="section-heading"><h2>地図・アクセス</h2><p>Google Mapを配置し、住所・最寄り駅・駐車場など患者さんが来院前に必要な情報をまとめています。</p></div><div class="access-grid"><div class="access-detail"><dl><dt>住所</dt><dd>〒000-0000<br />東京都○○区○○ 1-2-3</dd><dt>最寄り</dt><dd>○○駅 徒歩3分</dd><dt>電話</dt><dd><a href="tel:0000000000">00-0000-0000</a></dd><dt>駐車場</dt><dd>近隣コインパーキングをご利用ください（仮）</dd></dl></div><div class="map-box"><iframe title="Google Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%A7%85&amp;output=embed"></iframe></div></div></div></section>
</main>
<?php
get_footer();

