<?php get_header(); ?>
<div class="p-flow">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Flow</span>
            <h1 class="p-page-header__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- パンくずリスト -->
    <div class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-container">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- イントロダクション 1 -->
    <section class="p-intro">
        <div class="l-container">
            <div class="p-intro__inner">
                <h2 class="p-intro__title">
                    <span>貴社のパートナーになるための、丁寧なプロセス。<br />ご相談から導入まで</span>
                </h2>
                <p class="p-intro__lead">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>
        </div>
    </section>

    <!-- まずは「知る」ことから -->
    <section class="p-flow-contact">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">KNOW</span>
                <h2 class="c-section-heading__title-ja">/ まずは「知る」ことから</h2>
            </div>

            <!-- タブ -->
            <div class="p-tab">
                <ul class="p-tab__list js-tab-list">
                    <li class="p-tab__item is-active" data-tab="tab-problem">
                        <button class="p-tab__btn">具体的なお悩みがある方へ</button>
                    </li>
                    <li class="p-tab__item" data-tab="tab-info">
                        <button class="p-tab__btn">まずは情報収集をしたい方へ</button>
                    </li>
                </ul>

                <div class="p-tab__panel-wrapper">

                    <!-- パネル1 -->
                    <div class="p-tab__panel is-active" id="tab-problem">
                            <!-- コンテンツ -->
                            <div class="p-tab__content">
                                <p class="p-tab__text p-tab__text--center">
                                    現在の労務環境に関するご相談や、お見積もりのご依頼はこちらから。<br>2営業日以内に専任チームよりご連絡いたします。
                                </p>
                                <div class="p-tab__btn-wrap">
                                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="c-btn c-btn--outline">無料相談・お問い合わせ</a>
                                </div>
                            </div>
                    </div>

                    <!-- パネル2 -->
                    <div class="p-tab__panel" id="tab-info">
                        <!-- コンテンツ -->
                        <div class="p-tab__content">
                            <p class="p-tab__text p-tab__text--center">
                                現在の労務環境に関するご相談や、お見積もりのご依頼はこちらから。<br>2営業日以内に専任チームよりご連絡いたします。
                            </p>
                            <div class="p-tab__btn-wrap">
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="c-btn c-btn--outline">無料相談・お問い合わせ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-flow-step">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">STEP</span>
                <h2 class="c-section-heading__title-ja">/ ご契約・導入までのステップ</h2>
            </div>

            <ol class="p-flow-step__list">
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img12.jpg" alt="商談で握手している画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 1</p>
                        <h3 class="p-flow-step__item-title">お問い合わせ</h3>
                        <p class="p-flow-step__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/hearing-img.jpg" alt="ヒアリング項目の画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 2</p>
                        <h3 class="p-flow-step__item-title">ヒアリング（オンライン可）</h3>
                        <p class="p-flow-step__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img7.jpg" alt="データの資料を持って作業している画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 3</p>
                        <h3 class="p-flow-step__item-title">現状分析とプランのご提案</h3>
                        <p class="p-flow-step__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/business.jpg" alt="握手している画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 4</p>
                        <h3 class="p-flow-step__item-title">ご契約・キックオフ</h3>
                        <p class="p-flow-step__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img2.jpg" alt="スタッフが並んでいる画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 5</p>
                        <h3 class="p-flow-step__item-title">サポート開始（運用スタート）</h3>
                        <p class="p-flow-step__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- 契約後のサポート体制 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SUPPORT</span>
                <h2 class="c-section-heading__title-ja">/ 契約後のサポート体制</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img1.jpg" alt="チーム制サポート">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">SUPPORT.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">コミュニケーション面での連携</h3>
                        </div>
                        <p class="p-strength__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>

                <!-- 02 (リバース配置) -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img2.jpg" alt="圧倒的なレスポンス">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">SUPPORT.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">定期面談・勉強会の実施</h3>
                        </div>
                        <p class="p-strength__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="p-seminar">
        <div class="p-seminar__inner">

            <!-- ===== 左カラム：ヘッダー・テキストエリア ===== -->
            <div class="p-seminar__text-area">
                <h2 class="p-seminar__title-en">SEMINAR</h2>
                <span class="p-seminar__title-ja">/ セミナー情報</span>
                <p class="p-seminar__desc">
                    最新の知見を、組織の「自走する力」に変える。<br>
                    法改正への対応から、明日から使えるマネジメントのコツまで。<br>
                    Ｄ・プロデュースでは、最新の労務トレンドを実務に落とし込むための勉強会やセミナーを随時開催しています。
                </p>

                <!-- もっと見るボタン -->
                <div class="p-seminar__btn-wrap">
                    <a href="" class="c-btn c-btn--outline c-btn--outline-white">
                        もっと見る
                    </a>
                </div>
            </div>

            <!-- ===== 右カラム：スライダーエリア ===== -->
            <div class="p-seminar__slider-area">

                <!-- スライダー本体 -->
                <div class="p-seminar__slider js-seminar-slider">

                    <!-- スライド 1 -->
                    <div class="p-seminar__slide">
                        <a href="" class="p-seminar__card">
                            <!-- カード左側（画像） -->
                            <figure class="p-seminar__card-img">
                                <span class="p-seminar__card-label">募集中</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-seminar.jpg" alt="">
                            </figure>

                            <!-- カード右側（テキスト・情報） -->
                            <div class="p-seminar__card-body">
                                <span class="p-seminar__card-cat">カテゴリ名</span>
                                <h3 class="p-seminar__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>

                                <div class="p-seminar__card-line"></div>

                                <dl class="p-seminar__card-info">
                                    <div class="p-seminar__card-info-row">
                                        <dt class="p-seminar__card-dt">開催日時</dt>
                                        <dd class="p-seminar__card-dd">2026.01.01-2026.01.01</dd>
                                    </div>
                                    <div class="p-seminar__card-info-row">
                                        <dt class="p-seminar__card-dt">開催場所</dt>
                                        <dd class="p-seminar__card-dd">
                                            住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト</dd>
                                    </div>
                                </dl>
                            </div>
                        </a>
                    </div>

                    <!-- スライド 2 (ループ動作用ダミー) -->
                    <div class="p-seminar__slide">
                        <a href="" class="p-seminar__card">
                            <figure class="p-seminar__card-img">
                                <span class="p-seminar__card-label" style="background-color: #999;">受付終了</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-seminar.jpg" alt="">
                            </figure>
                            <div class="p-seminar__card-body">
                                <span class="p-seminar__card-cat">カテゴリ名</span>
                                <h3 class="p-seminar__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイト</h3>
                                <div class="p-seminar__card-line"></div>
                                <dl class="p-seminar__card-info">
                                    <div class="p-seminar__card-info-row">
                                        <dt class="p-seminar__card-dt">開催日時</dt>
                                        <dd class="p-seminar__card-dd">2026.02.01-2026.02.01</dd>
                                    </div>
                                    <div class="p-seminar__card-info-row">
                                        <dt class="p-seminar__card-dt">開催場所</dt>
                                        <dd class="p-seminar__card-dd">オンライン（Zoom配信）</dd>
                                    </div>
                                </dl>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- モデルケース -->
    <section class="p-case">
        <div class="p-case__inner">

            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">MODEL CASE</span>
                <h2 class="c-section-heading__title-ja">/ モデルケース</h2>
            </div>

            <!-- ===== スライダーエリア ===== -->
            <div class="p-case__slider-wrap">
                <div class="p-case__slider js-case-slider">

                    <!-- スライド 1 -->
                    <a href="" class="p-case__slide">
                        <div class="p-case__slide-inner">
                            <div class="p-case__left">
                                <figure class="p-case__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                        aria-hidden="true">
                                </figure>
                            </div>
                            <!-- 右側：テキストコンテンツ -->
                            <div class="p-case__content">
                                <span class="p-case__cat">カテゴリ名</span>
                                <h3 class="p-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-case__slide-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>

                        </div>
                    </a>

                    <!-- スライド 2 (デモ用に複製) -->
                    <a href="" class="p-case__slide">
                        <div class="p-case__slide-inner">
                            <div class="p-case__left">
                                <figure class="p-case__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                        aria-hidden="true">
                                </figure>
                            </div>
                            <div class="p-case__content">
                                <span class="p-case__cat">別のカテゴリ</span>
                                <h3 class="p-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-case__slide-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </div>
                    </a>

                    <a href="" class="p-case__slide">
                        <div class="p-case__slide-inner">
                            <div class="p-case__left">
                                <figure class="p-case__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                        aria-hidden="true">
                                </figure>
                            </div>
                            <div class="p-case__content">
                                <span class="p-case__cat">カテゴリ名</span>
                                <h3 class="p-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-case__slide-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <!-- ===== もっと見るボタン ===== -->
            <div class="p-case__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/case/' ) ); ?>" class="c-btn c-btn--outline">
                    もっと見る
                </a>
            </div>
        </div>
    </section>

    <!-- お客様の声 -->
    <section class="p-voices">
        <div class="p-voices__inner">
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">VOICES</span>
                <h2 class="c-section-heading__title-ja">/ お客様の声</h2>
            </div>

            <!-- ===== スライダーエリア ===== -->
            <div class="p-voices__slider-wrap">

                <!-- スライダー本体 -->
                <div class="p-voices__slider js-voices-slider">

                    <!-- スライド 1 -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/1/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice1.jpg" alt="">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>

                    <!-- スライド 2 -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/2/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice2.jpg"
                                    alt="サムネイル画像">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>

                    <!-- スライド 3 -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/3/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice3.jpg"
                                    alt="サムネイル画像">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>

                    <!-- スライド 4 (ループ確認用) -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/4/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice1.jpg"
                                    alt="サムネイル画像">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>
                    <!-- スライド 5 -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/2/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice2.jpg"
                                    alt="サムネイル画像">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>

                    <!-- スライド 6 -->
                    <div class="p-voices__slide">
                        <a href="<?php echo esc_url( home_url( '/voice/3/' ) ); ?>" class="p-voices__card">
                            <figure class="p-voices__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice3.jpg"
                                    alt="サムネイル画像">
                            </figure>
                            <div class="p-voices__card-body">
                                <span class="p-voices__card-cat">カテゴリ名</span>
                                <h3 class="p-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                <p class="p-voices__card-text">
                                    本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- SP用 プログレスバー (FigmaのSVGデザインをCSSで再現) -->
                <div class="p-voices__progress-wrap u-visible-sm" aria-hidden="true">
                    <span class="p-voices__progress-bg"></span>
                    <!-- ここのwidthがJSで変化して青いバーが伸びる -->
                    <span class="p-voices__progress-line js-voices-progress"></span>
                </div>

            </div>

            <!-- ===== もっと見るボタン ===== -->
            <div class="p-voices__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>" class="c-btn c-btn--outline">
                    もっと見る
                </a>
            </div>
    </section>

</div>
<?php get_footer(); ?>