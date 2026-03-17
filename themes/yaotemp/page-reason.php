<?php get_header(); ?>
<div class="p-reason">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Reason</span>
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
                    <span>組織を支えるのは、属人化しない『組織力』。<br />私たちが選ばれる4つの根拠</span>
                </h2>
                <p class="p-intro__lead">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>
        </div>
    </section>

    <!-- 選ばれる理由（reasonページ専用） -->
    <section class="p-reason-feature">
        <div class="l-container">
            <h2 class="p-reason-feature__title">選ばれる理由</h2>
            <div class="p-reason-feature__list">
                <div class="p-reason-feature__list-header">
                    <span class="p-reason-feature__list-number">01</span>
                    <h2 class="p-reason-feature__list-title">属人化を排除し、継続性を担保する<br />「5名体制のチームサポート」</h2>
                </div>
                <div class="p-reason-feature__sub-list">
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">担当者不在を解消するチーム制</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">チーム制でも一貫性のある対応</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">担当者交代でもスムーズな引き継ぎ</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-reason-feature__list">
                <div class="p-reason-feature__list-header">
                    <span class="p-reason-feature__list-number">02</span>
                    <h2 class="p-reason-feature__list-title">意思決定を妨げない、圧倒的な「クイックレスポンス」</h2>
                </div>
                <div class="p-reason-feature__sub-list">
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">貴社が使い慣れたツールでコミュニケーション</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">チーム制だからこそ、誰かが即座に対応</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">複雑な案件は即座にZoom等で解決</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-reason-feature__list">
                <div class="p-reason-feature__list-header">
                    <span class="p-reason-feature__list-number">03</span>
                    <h2 class="p-reason-feature__list-title">100名〜数千名規模を支える「DX×専門知」</h2>
                </div>
                <div class="p-reason-feature__sub-list">
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">大規模企業の複雑な労務に対応</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">最新DXツールの導入支援</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">システム×プロの目で「ミスゼロ」への挑戦</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-reason-feature__list">
                <div class="p-reason-feature__list-header">
                    <span class="p-reason-feature__list-number">04</span>
                    <h2 class="p-reason-feature__list-title">「知っている」を「使える」に変える実践支援</h2>
                </div>
                <div class="p-reason-feature__sub-list">
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">定期勉強会の開催</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">自走する組織づくり</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="p-reason-feature__sub-item">
                        <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/" alt=""></figure>
                        <div class="p-reason-feature__sub-body">
                            <h3 class="p-reason-feature__item-title">多角的な経営支援</h3>
                            <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス一覧 -->
    <section class="p-service">
        <div class="l-container">
            <h2 class="">サービス一覧</h2>
            <div class="p-service-tab c-tab">
                <div class="c-tab__buttons">
                    <button class="c-tab__button">基幹・アウトソーシング</button>
                    <button class="c-tab__button">組織改善・コンサルティング</button>
                    <button class="c-tab__button">戦略・教育</button>
                </div>
                <div class="c-tab__content">
                    <ul class="c-tab__content-list">
                        <li class="c-tab__content-item">
                            <h3 class="c-tab__content-item-title">創業支援パック</h3>
                            <p class="c-tab__content-item-text">スタートアップの足場を固める。法人設立時に必要な社会保険手続きから、助成金の活用提案、労働環境の整備まで、事業立ち上げ期に必要な労務をワンストップで支援します。</p>
                        </li>
                        <li class="c-tab__content-item">
                            <h3 class="c-tab__content-item-title">障害年金サポート</h3>
                            <p class="c-tab__content-item-text">働く人の「もしも」を支える。病気やケガで就労が困難になった際、専門的な知識と経験を持つ社労士が、申請から受給まで複雑な手続きを親身にサポートします。</p>
                        </li>
                        <li class="c-tab__content-item">
                            <h3 class="c-tab__content-item-title">給与計算代行</h3>
                            <p class="c-tab__content-item-text">1名から数千名規模まで対応。ミスが許されない給与計算を、最新のDXツールと二重三重のチェック体制で正確かつ迅速に遂行し、貴社をルーチンワークから解放します。</p>
                        </li>
                        <li class="c-tab__content-item">
                            <h3 class="c-tab__content-item-title">労働・社会保険事務代行</h3>
                            <p class="c-tab__content-item-text">煩雑な手続きをプロに一任。入退社時の手続きから年度更新、算定基礎届まで、正確かつスピーディーに処理し、行政対応の負担とリスクを最小限に抑えます。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- モデルケース -->
    <section class="p-works">
        <h3 class="p-works__title">モデルケース</h3>
        <div class="l-container">
            <div class="p-works__list">
                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img1.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img2.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img3.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>
            </div>

            <div class="p-works__btn-wrapper">
                <div class="c-btn c-btn--outline">
                    <a href="">もっと見る</a>
                </div>
            </div>
        </div>
    </section>

    <!-- お客様の声 -->
    <section class="p-works">
        <h3 class="p-works__title">お客様の声</h3>
        <div class="l-container">
            <div class="p-works__list">
                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img1.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img2.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img3.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>
            </div>

            <div class="p-works__btn-wrapper">
                <div class="c-btn c-btn--outline">
                    <a href="">もっと見る</a>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>