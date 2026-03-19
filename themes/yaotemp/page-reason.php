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
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">REASON</span>
                <h2 class="c-section-heading__title-ja">/ 選ばれる理由</h2>
            </div>
            <div class="p-reason-feature__list">
                <div class="p-reason-feature__item">
                    <div class="p-reason-feature__list-header">
                        <span class="p-reason-feature__list-number">01</span>
                        <h2 class="p-reason-feature__list-title">属人化を排除し、継続性を担保する<br />「5名体制のチームサポート」</h2>
                    </div>
                    <div class="p-reason-feature__sub-list">
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img1.jpg" alt="会議するチームメンバーたち"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">担当者不在を解消するチーム制</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img2.jpg" alt="並んでいるチームメンバー"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">チーム制でも一貫性のある対応</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img3.jpg" alt="担当者の引継ぎ"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">担当者交代でもスムーズな引き継ぎ</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-reason-feature__item">
                    <div class="p-reason-feature__list-header">
                        <span class="p-reason-feature__list-number">02</span>
                        <h2 class="p-reason-feature__list-title">意思決定を妨げない、圧倒的な<br class="u-block-sm"/>「クイックレスポンス」</h2>
                    </div>
                    <div class="p-reason-feature__sub-list">
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img4.jpg" alt="パソコンに向かうビジネスパーソン"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">貴社が使い慣れたツールでコミュニケーション</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img5.jpg" alt="並んで立つチームメンバーたち"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">チーム制だからこそ、誰かが即座に対応</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img6.jpg" alt="パソコンに向かいながら会議するメンバー"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">複雑な案件は即座にZoom等で解決</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-reason-feature__item">
                    <div class="p-reason-feature__list-header">
                        <span class="p-reason-feature__list-number">03</span>
                        <h2 class="p-reason-feature__list-title">100名〜数千名規模を支える<br class="u-block-sm"/>「DX×専門知」</h2>
                    </div>
                    <div class="p-reason-feature__sub-list">
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img7.jpg" alt="資料を精査するビジネスパーソン"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">大規模企業の複雑な労務に対応</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img8.jpg" alt="タブレット端末を手に説明を行うビジネスパーソン"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">最新DXツールの導入支援</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img9.jpg" alt="チェックリストを確認するビジネスパーソン"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">システム×プロの目で「ミスゼロ」への挑戦</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-reason-feature__item">
                    <div class="p-reason-feature__list-header">
                        <span class="p-reason-feature__list-number">04</span>
                        <h2 class="p-reason-feature__list-title">「知っている」を「使える」に<br class="u-block-sm"/>変える実践支援</h2>
                    </div>
                    <div class="p-reason-feature__sub-list">
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img10.jpg" alt="ホワイトボードを使用したプレゼンの様子"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">定期勉強会の開催</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img11.jpg" alt="歩くビジネスパーソンたちの後ろ姿"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">自走する組織づくり</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                        <div class="p-reason-feature__sub-item">
                            <figure class="p-reason-feature__sub-img"><img src="<?php bloginfo('template_url');?>/img/reason-feature-img12.jpg" alt="資料が並べられたデスクの上で握手を交わしている様子"></figure>
                            <div class="p-reason-feature__sub-body">
                                <h3 class="p-reason-feature__sub-title">多角的な経営支援</h3>
                                <p class="p-reason-feature__sub-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス一覧 -->
    <section class="p-service">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SERVICE</span>
                <h2 class="c-section-heading__title-ja">/ サービス一覧</h2>
            </div>
            <div class="p-tab">

                <ul class="p-tab__list js-tab-list">
                    <li class="p-tab__item is-active" data-tab="tab-outsourcing">
                        <button class="p-tab__btn">基幹・アウトソーシング</button>
                    </li>
                    <li class="p-tab__item" data-tab="tab-consulting">
                        <button class="p-tab__btn">組織改善<span class="u-hidden-sm">・</span><br
                                class="u-visible-sm" />コンサルティング</button>
                    </li>
                    <li class="p-tab__item" data-tab="tab-education">
                        <button class="p-tab__btn">戦略・教育</button>
                    </li>
                </ul>

                <div class="p-tab__panel-wrapper">

                    <div class="p-tab__panel is-active" id="tab-outsourcing">
                        <div class="p-tab__card-list">

                            <!-- カード1 -->
                            <a href="<?php echo esc_url( home_url( '/service/startup/' ) ); ?>" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">創業支援パック</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    スタートアップの足場を固める。法人設立時に必要な社会保険手続きから、助成金の活用提案、労働環境の整備まで、事業立ち上げ期に必要な労務をワンストップで支援します。</p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード2 -->
                            <a href="<?php echo esc_url( home_url( '/service/disability-pension/' ) ); ?>"
                                class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">障害年金サポート</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    働く人の「もしも」を支える。病気やケガで就労が困難になった際、専門的な知識と経験を持つ社労士が、申請から受給まで複雑な手続きを親身にサポートします。</p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード3 -->
                            <a href="<?php echo esc_url( home_url( '/service/payroll/' ) ); ?>" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">給与計算代行</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    1名から数千名規模まで対応。ミスが許されない給与計算を、最新のDXツールと二重三重のチェック体制で正確かつ迅速に遂行し、貴社をルーチンワークから解放します。</p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード4 -->
                            <a href="<?php echo esc_url( home_url( '/service/social-insurance/' ) ); ?>"
                                class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">労働・社会保険事務代行</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    煩雑な手続きをプロに一任。入退社時の手続きから年度更新、算定基礎届まで、正確かつスピーディーに処理し、行政対応の負担とリスクを最小限に抑えます。</p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                        </div>
                    </div>

                    <div class="p-tab__panel" id="tab-consulting">
                        <div class="p-tab__card-list">

                            <!-- カード1：就業規則サポート -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">就業規則サポート</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    「守り」から「攻め」のルールへ。最新の法改正対応はもちろん、貴社の企業文化を反映し、従業員が安心して力を発揮できる「組織の憲法」を構築します。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード2：人事評価制度構築 -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">人事評価制度構築</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    「形だけ」で終わらせない制度設計。貴社のビジョンに連動した評価基準を策定し、社員のモチベーション向上と次世代リーダーの育成を強力に後押しします。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード3：労務トラブル相談 -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">労務トラブル相談</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    未然に防ぐ、起きたら迅速に解決する。解雇、ハラスメント、未払い残業代など、複雑な労務問題に対して、豊富な実務経験に基づき法的・実務的な最適解を提示します。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード4：SRS診断（職場環境診断） -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">SRS診断（職場環境診断）</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    組織の「健康状態」を可視化。独自の診断ツールを用いて職場の強みと課題を分析し、離職防止や生産性向上に向けた具体的な改善アクションを導き出します。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                        </div>
                    </div>

                    <div class="p-tab__panel" id="tab-education">
                        <div class="p-tab__card-list">
                            <!-- カード5：労務監査・労務DD -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">労務監査<br>労務DD(デューデリジェンス)</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    IPO準備やM&A、取引先選定の信頼の証に。潜在的な労務リスクをプロの視点で徹底調査し、改善提案を行うことで、企業の社会的信用と価値を高めます。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード6：社員研修 -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">社員研修</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    知識を「行動」に変える。ハラスメント防止、管理職教育、インシビリティ研修など、組織の課題に合わせた実践的なカリキュラムで、自走できる組織文化を醸成します。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>

                            <!-- カード7：企業拠出年金 -->
                            <a href="<?php bloginfo('url'); ?>/works/" class="p-tab__card">
                                <div class="p-tab__card-head">
                                    <span class="p-tab__card-dot"></span>
                                    <h3 class="p-tab__card-title">企業拠出年金</h3>
                                </div>
                                <p class="p-tab__card-text">
                                    福利厚生の充実と節税の両立。中小企業でも導入可能な確定拠出年金の設計から導入後の継続教育までサポートし、従業員の資産形成と採用力の強化を支援します。
                                </p>
                                <span class="p-tab__card-arrow"></span>
                            </a>
                        </div>
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
            <!-- セクション見出し -->
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