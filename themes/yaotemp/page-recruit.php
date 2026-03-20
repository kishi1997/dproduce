<?php get_header(); ?>

<div class="p-recruit">
    <!-- HERO -->
    <section class="p-hero">
      <div class="p-hero__bg"></div>
      <div class="p-hero__noise"></div>
      <div class="p-hero__line"></div>
      <div class="p-hero__inner">
        <span class="p-hero__subtitle">Recruit</span>
        <h1 class="p-hero__title">採用情報</h1>
      </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-container c-breadcrumb__inner">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- INTRO -->
    <section class="p-intro">
      <div class="p-intro__inner">
        <div class="c-section-label" style="justify-content:center;">
          <div class="c-section-label__line"></div>
          <span class="c-section-label__en">About Us</span>
          <div class="c-section-label__line"></div>
        </div>
        <h2 class="p-intro__main-copy">企業の未来を変える仕事を、<br>私たちと。</h2>
        <p class="p-intro__lead">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </section>

    <!-- POINT HEADING -->
    <div class="p-section-heading">
      <h2 class="p-section-heading__jp">D・プロデュースで働く魅力</h2>
      <span class="p-section-heading__en">Why Work With Us</span>
    </div>

    <!-- POINTS -->
    <section class="p-recruit-point">
      <div class="l-container">

        <!-- 01 -->
        <div class="p-point__item js-reveal">
          <div class="p-point__inner">
            <div class="p-point__img">
              <img src="<?php bloginfo('template_url');?>/img/recruit-point-img1.jpg" alt="事業内容と仕事のやりがいのイメージ">
            </div>
            <div class="p-point__body">
              <div class="p-point__num-wrap">
                <span class="p-point__num">01</span>
                <span class="p-point__en">Our Features</span>
              </div>
              <h3 class="p-point__title">タイトルタイトル</h3>
              <p class="p-point__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
        </div>

        <!-- 02 -->
        <div class="p-point__item js-reveal">
          <div class="p-point__inner p-point__inner--reverse">
            <div class="p-point__img">
              <img src="<?php bloginfo('template_url');?>/img/recruit-point-img2.jpg" alt="キャリアパスのイメージ">
            </div>
            <div class="p-point__body">
              <div class="p-point__num-wrap">
                <span class="p-point__num">02</span>
                <span class="p-point__en">Our Features</span>
              </div>
              <h3 class="p-point__title">キャリアパス</h3>
              <p class="p-point__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
        </div>

        <!-- 03 -->
        <div class="p-point__item js-reveal">
          <div class="p-point__inner">
            <div class="p-point__img">
              <img src="<?php bloginfo('template_url');?>/img/recruit-point-img3.jpg" alt="就労環境と福利厚生のイメージ">
            </div>
            <div class="p-point__body">
              <div class="p-point__num-wrap">
                <span class="p-point__num">03</span>
                <span class="p-point__en">Our Features</span>
              </div>
              <h3 class="p-point__title">就労環境と福利厚生</h3>
              <p class="p-point__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- JOBS -->
    <section class="p-recruit-jobs">
      <div class="l-container">

        <div class="p-jobs-header">
          <span class="p-jobs-header__en">Job Openings</span>
          <h2 class="p-jobs-header__jp">募集職種一覧</h2>
        </div>

        <!-- 職種1 -->
        <div class="p-recruit-job js-reveal">
          <h3 class="p-recruit-job__title">社会保険労務士</h3>
          <div class="p-recruit-job__layout">
            <div class="p-recruit-job__img">
              <div class="p-recruit-job__img-wrapper">
                <img src="<?php bloginfo('template_url');?>/img/recruit-job-img1.jpg" alt="社会保険労務士のイメージ">
              </div>
            </div>
            <div class="p-recruit-job__info">
              <div class="p-recruit-job__box">
                <h4 class="p-recruit-job__box-title">Job Description</h4>
                <p class="p-recruit-job__box-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
              <div class="p-recruit-job__box">
                <h4 class="p-recruit-job__box-title">Ideal Candidate</h4>
                <p class="p-recruit-job__box-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="p-recruit-job__btn-wrap">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn c-btn--blue">募集詳細を見る</a>
          </div>
        </div>

        <div class="c-ornament">· · ·</div>

        <!-- 職種2 -->
        <div class="p-recruit-job js-reveal">
          <h3 class="p-recruit-job__title">一般事務</h3>
          <div class="p-recruit-job__layout p-recruit-job__layout--reverse">
            <div class="p-recruit-job__img">
              <div class="p-recruit-job__img-wrapper">
                <img src="<?php bloginfo('template_url');?>/img/recruit-job-img2.jpg" alt="一般事務のイメージ">
              </div>
            </div>
            <div class="p-recruit-job__info">
              <div class="p-recruit-job__box">
                <h4 class="p-recruit-job__box-title">Job Description</h4>
                <p class="p-recruit-job__box-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
              <div class="p-recruit-job__box">
                <h4 class="p-recruit-job__box-title">Ideal Candidate</h4>
                <p class="p-recruit-job__box-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
          <div class="p-recruit-job__btn-wrap">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn c-btn--blue">募集詳細を見る</a>
          </div>
        </div>

      </div>
    </section>

    <!-- DATA -->
    <section class="p-recruit-data">
      <div class="l-container">
        <div class="p-data-header">
          <span class="p-data-header__en">Work Environment</span>
          <h2 class="p-data-header__jp">働く環境・データ</h2>
        </div>
        <div class="p-recruit-data__table-wrap">
          <table class="p-recruit-data__table">
            <tbody>
              <tr>
                <th>平均残業時間</th>
                <td>〇〇時間</td>
              </tr>
              <tr>
                <th>男女比</th>
                <td>〇：〇</td>
              </tr>
              <tr>
                <th>有給取得率</th>
                <td>〇〇％</td>
              </tr>
              <tr>
                <th>産休・育休取得率</th>
                <td>〇〇％</td>
              </tr>
              <tr>
                <th>平均年齢</th>
                <td>〇〇歳</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- MORE -->
    <section class="p-recruit-more">
      <div class="l-container">
        <div class="p-more-header">
          <span class="p-more-header__en">Explore More</span>
          <h2 class="p-more-header__jp">D・プロデュースをもっと知りたい方へ</h2>
        </div>
        <div class="p-recruit-more__list">
          <div class="p-recruit-more__item">
            <p class="p-recruit-more__text">どんな人が<br>働いているか知りたい</p>
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn c-btn--white">社員紹介を見る</a>
          </div>
          <div class="p-recruit-more__item">
            <p class="p-recruit-more__text">事務所の雰囲気を<br>知りたい</p>
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn c-btn--white">オフィス案内を見る</a>
          </div>
        </div>
      </div>
    </section>
</div>

<script>
  const reveals = document.querySelectorAll('.js-reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  reveals.forEach(el => observer.observe(el));
</script>

<?php get_footer(); ?>
