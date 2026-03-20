<?php get_header(); ?>
<div class="p-price">

    <!-- ==================== MV ==================== -->
    <section class="p-page-header p-page-header--price">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Price</span>
            <h1 class="p-page-header__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- ==================== パンくずリスト ==================== -->
    <div class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-container">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- ==================== イントロ ==================== -->
    <section class="p-intro">
        <div class="l-container">
            <div class="p-intro__inner">
                <h2 class="p-intro__title">
                    <span>料金は、貴社の規模と課題に合わせて<br />柔軟にご提案します。</span>
                </h2>
                <p class="p-intro__lead">
                    D・プロデュースでは、「まず相談してみる」ところから始めていただけます。従業員数やご依頼内容によって最適なプランを個別にご提案。透明性の高い料金設定で、安心してご契約いただけます。
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== サービス概要（01〜03） ==================== -->
    <section class="p-price-feature">
        <div class="l-container">
            <div class="c-page-section-header">
                <div class="c-page-section-header__deco">
                    <span class="c-page-section-header__deco-light"></span>
                    <span class="c-page-section-header__deco-dark"></span>
                </div>
                <span class="c-page-section-header__title-en">SERVICE</span>
                <h2 class="c-page-section-header__title-ja">/ サービス概要</h2>
            </div>
            <div class="p-price-feature__list">

                <!-- 01 -->
                <div class="p-price-feature__item">
                    <div class="p-price-feature__list-header">
                        <span class="p-price-feature__list-number">01</span>
                        <h2 class="p-price-feature__list-title">基幹業務アウトソーシング</h2>
                    </div>
                    <div class="p-price-feature__sub-list">
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img1.jpg"
                                    alt="社会保険手続きのイメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">社会保険・労働保険手続き代行</h3>
                                <p class="p-price-feature__sub-text">入退社・産育休・年度更新など、複雑な行政手続きをすべて代行。法改正への対応も漏れなくカバーします。
                                </p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img2.jpg"
                                    alt="給与計算の作業イメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">給与計算代行</h3>
                                <p class="p-price-feature__sub-text">
                                    1名から数千名規模まで対応。最新DXツールと二重チェック体制でミスゼロを追求し、毎月の業務負担を大幅に削減します。</p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img3.jpg" alt="労務相談のイメージ">
                            </figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">労務相談・チャットサポート</h3>
                                <p class="p-price-feature__sub-text">チャットツール（Slack / Chatwork /
                                    Teams等）で日々の疑問に迅速回答。5名の専任チームが常時対応します。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-price-feature__item">
                    <div class="p-price-feature__list-header">
                        <span class="p-price-feature__list-number">02</span>
                        <h2 class="p-price-feature__list-title">組織改善コンサルティング</h2>
                    </div>
                    <div class="p-price-feature__sub-list">
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img4.jpg"
                                    alt="就業規則作成のイメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">就業規則の策定・改定</h3>
                                <p class="p-price-feature__sub-text">
                                    法改正対応はもちろん、貴社の企業文化を反映した「組織の憲法」を構築。トラブルを未然に防ぐ就業規則づくりを支援します。</p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img5.jpg"
                                    alt="人事評価制度のイメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">人事評価制度の構築</h3>
                                <p class="p-price-feature__sub-text">「形だけ」で終わらせない制度設計。社員のモチベーション向上と次世代リーダー育成を強力に後押しします。
                                </p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img6.jpg"
                                    alt="労務トラブル相談のイメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">労務トラブル相談</h3>
                                <p class="p-price-feature__sub-text">
                                    解雇・ハラスメント・未払い残業代など、複雑な労務問題に対して法的・実務的な最適解を、豊富な実務経験に基づきご提示します。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-price-feature__item">
                    <div class="p-price-feature__list-header">
                        <span class="p-price-feature__list-number">03</span>
                        <h2 class="p-price-feature__list-title">戦略・教育支援</h2>
                    </div>
                    <div class="p-price-feature__sub-list">
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img7.jpg" alt="社員研修のイメージ">
                            </figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">社員研修</h3>
                                <p class="p-price-feature__sub-text">
                                    ハラスメント防止・管理職教育など組織の課題に合わせた実践的カリキュラムで、自走できる組織文化を醸成します。</p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img8.jpg" alt="労務監査のイメージ">
                            </figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">労務監査・労務DD</h3>
                                <p class="p-price-feature__sub-text">
                                    IPO準備・M&A・取引先選定の信頼の証に。潜在的な労務リスクをプロの視点で徹底調査し、企業の社会的信用を高めます。</p>
                            </div>
                        </div>
                        <div class="p-price-feature__sub-item">
                            <figure class="p-price-feature__sub-img"><img
                                    src="<?php bloginfo('template_url');?>/img/price-service-img9.jpg"
                                    alt="企業拠出年金のイメージ"></figure>
                            <div class="p-price-feature__sub-body">
                                <h3 class="p-price-feature__sub-title">企業拠出年金</h3>
                                <p class="p-price-feature__sub-text">福利厚生の充実と節税の両立。中小企業でも導入可能な確定拠出年金を、設計から継続教育までサポートします。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== POINT（選ばれる理由） ==================== -->
    <section class="p-price-point">
        <div class="l-container">

            <div class="c-page-section-header">
                <div class="c-page-section-header__deco">
                    <span class="c-page-section-header__deco-light"></span>
                    <span class="c-page-section-header__deco-dark"></span>
                </div>
                <span class="c-page-section-header__title-en">OUR STRENGTH</span>
                <h2 class="c-page-section-header__title-ja">/ D・プロデュースが選ばれる理由</h2>
            </div>

            <!-- POINT 1 -->
            <div class="p-price-point__item ">
                <div class="p-price-point__img">
                    <img src="<?php bloginfo('template_url');?>/img/price-point-img1.jpg" alt="5名の専任チームが並ぶイメージ">
                </div>
                <div class="p-price-point__body">
                    <div class="c-point-label-wrap">
                        <span class="c-point-label">POINT 01</span>
                        <span class="c-point-line"></span>
                    </div>
                    <h3 class="p-price-point__title">属人化しない「5名体制の専任チーム」</h3>
                    <p class="p-price-point__text">
                        1社につき5名の専任チームをアサイン。担当者が不在でも、誰が対応しても変わらない高品質なサービスを提供します。急な担当交代でもスムーズに引き継げる体制が、継続的な安心感を生みます。</p>
                </div>
            </div>

            <!-- POINT 2 -->
            <div class="p-price-point__item p-price-point__item--reverse ">
                <div class="p-price-point__img">
                    <img src="<?php bloginfo('template_url');?>/img/price-point-img2.jpg" alt="チャットツールで迅速対応するイメージ">
                </div>
                <div class="p-price-point__body">
                    <div class="c-point-label-wrap">
                        <span class="c-point-label">POINT 02</span>
                        <span class="c-point-line"></span>
                    </div>
                    <h3 class="p-price-point__title">経営スピードを落とさない「圧倒的レスポンス」</h3>
                    <p class="p-price-point__text">
                        Slack・Chatwork・Teams等のチャットツールをフル活用し、場所や時間を問わないリアルタイムサポートを実現。日常の小さな疑問から緊急トラブルまで、迅速な意思決定を支えます。</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== ご契約の流れ ==================== -->
    <section class="p-price-flow">
        <div class="l-container">

            <div class="c-page-section-header">
                <div class="c-page-section-header__deco">
                    <span class="c-page-section-header__deco-light"></span>
                    <span class="c-page-section-header__deco-dark"></span>
                </div>
                <span class="c-page-section-header__title-en">GETTING STARTED</span>
                <h2 class="c-page-section-header__title-ja">/ ご契約までの流れ</h2>
            </div>

            <div class="p-price-flow__list">

                <div class="p-price-flow__item ">
                    <div class="p-price-flow__step">
                        <span class="p-price-flow__step-num">01</span>
                        <span class="p-price-flow__step-label">無料相談</span>
                    </div>
                    <div class="p-price-flow__content">
                        <h3 class="p-price-flow__title">お問い合わせ・ヒアリング</h3>
                        <p class="p-price-flow__text">
                            まずはお電話またはフォームよりお問い合わせください。現在の課題やご状況を丁寧にお伺いし、最適な支援の方向性をご提案します。費用は一切かかりません。</p>
                    </div>
                </div>

                <div class="p-price-flow__arrow">▼</div>

                <div class="p-price-flow__item ">
                    <div class="p-price-flow__step">
                        <span class="p-price-flow__step-num">02</span>
                        <span class="p-price-flow__step-label">お見積もり</span>
                    </div>
                    <div class="p-price-flow__content">
                        <h3 class="p-price-flow__title">プランご提案・お見積もり提示</h3>
                        <p class="p-price-flow__text">
                            ヒアリング内容をもとに、従業員数・ご希望のサービス範囲に合わせた料金をご提示します。追加費用は一切発生せず、納得いただいてからご契約いただけます。</p>
                    </div>
                </div>

                <div class="p-price-flow__arrow">▼</div>

                <div class="p-price-flow__item ">
                    <div class="p-price-flow__step">
                        <span class="p-price-flow__step-num">03</span>
                        <span class="p-price-flow__step-label">ご契約</span>
                    </div>
                    <div class="p-price-flow__content">
                        <h3 class="p-price-flow__title">ご契約・専任チーム決定</h3>
                        <p class="p-price-flow__text">ご契約後、5名の専任担当チームをアサインします。担当者全員へのご挨拶と情報共有を速やかに行い、スムーズな引き継ぎを実現します。
                        </p>
                    </div>
                </div>

                <div class="p-price-flow__arrow">▼</div>

                <div class="p-price-flow__item ">
                    <div class="p-price-flow__step">
                        <span class="p-price-flow__step-num">04</span>
                        <span class="p-price-flow__step-label">スタート</span>
                    </div>
                    <div class="p-price-flow__content">
                        <h3 class="p-price-flow__title">サービス開始</h3>
                        <p class="p-price-flow__text">チャットツールやZoomを活用した迅速なコミュニケーション体制を整えてサービスを開始します。ご不明な点はいつでもご相談いただけます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== よくある質問 ==================== -->
    <section class="p-price-faq">
        <div class="l-container">

            <div class="c-page-section-header">
                <div class="c-page-section-header__deco">
                    <span class="c-page-section-header__deco-light"></span>
                    <span class="c-page-section-header__deco-dark"></span>
                </div>
                <span class="c-page-section-header__title-en">FAQ</span>
                <h2 class="c-page-section-header__title-ja">/ よくある質問</h2>
            </div>

            <div class="p-price-faq__list">

                <div class="p-price-faq__item">
                    <button class="p-price-faq__question js-faq-trigger">
                        <span class="p-price-faq__q-icon">Q</span>
                        <span class="p-price-faq__q-text">料金はどのように決まりますか？</span>
                        <span class="p-price-faq__toggle"></span>
                    </button>
                    <div class="p-price-faq__answer">
                        <span class="p-price-faq__a-icon">A</span>
                        <p class="p-price-faq__a-text">従業員数・ご依頼内容・ご契約期間などをもとに個別にお見積もりします。まずは無料相談にてご状況をお聞かせください。</p>
                    </div>
                </div>

                <div class="p-price-faq__item">
                    <button class="p-price-faq__question js-faq-trigger">
                        <span class="p-price-faq__q-icon">Q</span>
                        <span class="p-price-faq__q-text">最低契約期間はありますか？</span>
                        <span class="p-price-faq__toggle"></span>
                    </button>
                    <div class="p-price-faq__answer">
                        <span class="p-price-faq__a-icon">A</span>
                        <p class="p-price-faq__a-text">原則として1年（12ヶ月）のご契約をお願いしています。途中解約の場合は所定の手続きが必要ですが、詳細はご相談時にご説明します。
                        </p>
                    </div>
                </div>

                <div class="p-price-faq__item">
                    <button class="p-price-faq__question js-faq-trigger">
                        <span class="p-price-faq__q-icon">Q</span>
                        <span class="p-price-faq__q-text">現在別の社労士と契約中でも切り替えられますか？</span>
                        <span class="p-price-faq__toggle"></span>
                    </button>
                    <div class="p-price-faq__answer">
                        <span class="p-price-faq__a-icon">A</span>
                        <p class="p-price-faq__a-text">はい、対応しています。切り替えのタイミングや手続きについても丁寧にサポートいたしますので、お気軽にご相談ください。</p>
                    </div>
                </div>

                <div class="p-price-faq__item">
                    <button class="p-price-faq__question js-faq-trigger">
                        <span class="p-price-faq__q-icon">Q</span>
                        <span class="p-price-faq__q-text">オプションサービスだけ単体で依頼できますか？</span>
                        <span class="p-price-faq__toggle"></span>
                    </button>
                    <div class="p-price-faq__answer">
                        <span class="p-price-faq__a-icon">A</span>
                        <p class="p-price-faq__a-text">はい、就業規則の策定・人事評価制度の構築・社員研修など、単体でのスポット依頼も承っています。まずはご相談ください。</p>
                    </div>
                </div>

                <div class="p-price-faq__item">
                    <button class="p-price-faq__question js-faq-trigger">
                        <span class="p-price-faq__q-icon">Q</span>
                        <span class="p-price-faq__q-text">助成金の成功報酬はどのくらいですか？</span>
                        <span class="p-price-faq__toggle"></span>
                    </button>
                    <div class="p-price-faq__answer">
                        <span class="p-price-faq__a-icon">A</span>
                        <p class="p-price-faq__a-text">
                            助成金の種類や受給額によって異なりますが、受給決定額の15〜20%を目安としています。受給決定後の成功報酬制ですので、不受給の場合は費用はかかりません。</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== 料金シミュレーション ==================== -->
    <section class="p-price-sim">
        <div class="l-container">

            <div class="c-page-section-header">
                <div class="c-page-section-header__deco">
                    <span class="c-page-section-header__deco-light"></span>
                    <span class="c-page-section-header__deco-dark"></span>
                </div>
                <span class="c-page-section-header__title-en">FEE SIMULATION</span>
                <h2 class="c-page-section-header__title-ja">/ 料金シミュレーション</h2>
                <p class="c-page-section-header__desc">従業員規模・サービス内容に応じた月額料金の目安をご確認いただけます。<br>実際のお見積もりは無料相談にてご提示します。</p>
            </div>

            <div class="p-price-sim__table-wrap">
                <table class="p-price-sim__table">
                    <thead>
                        <tr>
                            <th class="p-price-sim__th">従業員規模</th>
                            <th class="p-price-sim__th">基幹アウトソーシング<br><small>（手続き代行＋相談）</small></th>
                            <th class="p-price-sim__th">給与計算追加</th>
                            <th class="p-price-sim__th">フルサポート<br><small>（全サービス込み）</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-price-sim__td p-price-sim__td--label">〜10名</td>
                            <td class="p-price-sim__td">30,000円〜</td>
                            <td class="p-price-sim__td">+15,000円〜</td>
                            <td class="p-price-sim__td p-price-sim__td--total">55,000円〜</td>
                        </tr>
                        <tr>
                            <td class="p-price-sim__td p-price-sim__td--label">11〜30名</td>
                            <td class="p-price-sim__td">45,000円〜</td>
                            <td class="p-price-sim__td">+20,000円〜</td>
                            <td class="p-price-sim__td p-price-sim__td--total">75,000円〜</td>
                        </tr>
                        <tr>
                            <td class="p-price-sim__td p-price-sim__td--label">31〜100名</td>
                            <td class="p-price-sim__td">70,000円〜</td>
                            <td class="p-price-sim__td">+35,000円〜</td>
                            <td class="p-price-sim__td p-price-sim__td--total">120,000円〜</td>
                        </tr>
                        <tr>
                            <td class="p-price-sim__td p-price-sim__td--label">101〜300名</td>
                            <td class="p-price-sim__td">要相談</td>
                            <td class="p-price-sim__td">要相談</td>
                            <td class="p-price-sim__td p-price-sim__td--total">要相談</td>
                        </tr>
                        <tr>
                            <td class="p-price-sim__td p-price-sim__td--label">301名〜</td>
                            <td class="p-price-sim__td">要相談</td>
                            <td class="p-price-sim__td">要相談</td>
                            <td class="p-price-sim__td p-price-sim__td--total">要相談</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="p-price-sim__note">※ 上記は税別の目安金額です。実際の料金はヒアリング後に個別にご提示します。</p>

        </div>
    </section>

    <!-- ==================== モデルケース ==================== -->
    <section class="p-case">
        <div class="p-case__inner">

            <h2 class="p-case__title">モデルケース</h2>

            <div class="p-case__slider-wrap">
                <div class="p-case__slider js-case-slider">

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
                                <span class="p-case__cat">給与計算代行</span>
                                <h3 class="p-case__slide-title">社員数150名の製造業。給与計算の内製化リスクを解消し、毎月のミスが0に。</h3>
                                <p class="p-case__slide-text">
                                    毎月の給与計算作業でエラーが多発し、担当者の負担が限界に。D・プロデュースへ代行依頼後、ミスゼロを実現し担当者の残業時間も大幅削減。</p>
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
                                <span class="p-case__cat">就業規則改定</span>
                                <h3 class="p-case__slide-title">10年更新されていない就業規則を全面改定。労務トラブルのリスクを大幅低減。</h3>
                                <p class="p-case__slide-text">
                                    法改正に対応できていない就業規則のリスクを指摘され、緊急で改定を依頼。最新法令に準拠した規則に全面改定し、労使トラブルのリスクをゼロに。</p>
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
                                <span class="p-case__cat">フルサポート</span>
                                <h3 class="p-case__slide-title">IPO準備中のIT企業。労務DDから体制整備まで一括サポートで上場を実現。</h3>
                                <p class="p-case__slide-text">
                                    IPO審査に向けた労務DDを依頼。潜在リスクの洗い出しから改善計画の策定・実行まで一貫サポートし、無事上場審査をクリア。</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="p-case__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/case/' ) ); ?>" class="c-btn c-btn--outline">もっと見る</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>