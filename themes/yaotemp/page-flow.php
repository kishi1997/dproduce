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
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <!-- イントロダクション 1 -->
    <section class="p-intro">
        <div class="l-container">
            <div class="p-intro__inner">
                <h2 class="p-intro__title">
                    <span>貴社のパートナーになるための、丁寧なプロセス。</span>
                </h2>
                <p class="p-intro__lead">
                    社労士法人の切り替えや新規導入には、多くの不安が伴うものです。<br />
                    「今の業務を止めることなく移行できるか？」「自社にフィットする提案がもらえるか？」といった懸念を、私たちは一つひとつ解消しながら進めます。<br />
                    D・プロデュースでは、いきなりご契約を急かすことはありません。まずは貴社の現状を深く理解し、私たちの「組織力」がどう貢献できるかを明確に提示した上で、伴走をスタートいたします。
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
                <ul class="p-tab__list">
                    <li class="p-tab__item js-flow-tab-item is-active" data-tab="tab-problem">
                        <button class="p-tab__btn">具体的なお悩みがある方へ</button>
                    </li>
                    <li class="p-tab__item js-flow-tab-item" data-tab="tab-info">
                        <button class="p-tab__btn">まずは情報収集をしたい方へ</button>
                    </li>
                </ul>

                <div class="p-tab__panel-wrapper">

                    <!-- パネル1 -->
                    <div class="p-tab__panel js-flow-tab-panel is-active" id="tab-problem">
                            <!-- コンテンツ -->
                            <div class="p-tab__content">
                                <p class="p-tab__text p-tab__text--center">
                                    現在の労務環境に関するご相談や、お見積もりのご依頼はこちらから。<br>2営業日以内に専任チームよりご連絡いたします。
                                </p>
                                <div class="p-tab__btn-wrap">
                                    <a href="<?php bloginfo('url'); ?>/contact/" class="c-btn c-btn--outline">就業規則簡易診断</a>
                                    <a href="<?php bloginfo('url'); ?>/contact/" class="c-btn c-btn--outline">助成金受信診断</a>
                                </div>
                            </div>
                    </div>

                    <!-- パネル2 -->
                    <div class="p-tab__panel js-flow-tab-panel" id="tab-info">
                        <!-- コンテンツ -->
                        <div class="p-tab__content">
                            <p class="p-tab__text p-tab__text--center">
                                現在の労務環境に関するご相談や、お見積もりのご依頼はこちらから。<br>2営業日以内に専任チームよりご連絡いたします。
                            </p>
                            <div class="p-tab__btn-wrap">
                                <a href="<?php bloginfo('url'); ?>/contact/" class="c-btn c-btn--outline">資料請求</a>
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
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/flow-step-img1.jpg" alt="お問い合わせのイメージ"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 1</p>
                        <h3 class="p-flow-step__item-title">お問い合わせ</h3>
                        <p class="p-flow-step__item-text">
                            お電話、お問い合わせフォーム、または各種資料ダウンロード後のメールからご連絡ください。受付後、専任のコンサルティングチームから2営業日以内に折り返しご連絡し、詳細なヒアリングの日程を調整させていただきます。
                        </p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/flow-step-img2.jpg" alt="ヒアリング項目の画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 2</p>
                        <h3 class="p-flow-step__item-title">ヒアリング（オンライン可）</h3>
                        <p class="p-flow-step__item-text">
                            貴社の従業員規模、現在の運用フロー、解決したい課題を詳しく伺います。Zoom等によるオンライン面談にも柔軟に対応。遠方の企業様や、多忙な経営者・人事担当者様でも、場所を選ばずスムーズに課題の共有が可能です。
                        </p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/flow-step-img3.jpg" alt="データの資料を持って作業している画像"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 3</p>
                        <h3 class="p-flow-step__item-title">現状分析とプランのご提案</h3>
                        <p class="p-flow-step__item-text">
                            ヒアリング内容に基づき、貴社に最適なサポートプランと「5名体制」のチーム構成をオーダーメイドでご提案します。業務範囲を明確にした詳細なお見積書と共に、導入によって期待できる効果（コスト削減・リスク回避等）を具体的に提示いたします。
                        </p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/business.jpg" alt="ご契約のイメージ"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 4</p>
                        <h3 class="p-flow-step__item-title">ご契約・キックオフ</h3>
                        <p class="p-flow-step__item-text">
                            ご提案内容にご納得いただけましたら、正式なご契約となります。その後、速やかにキックオフミーティング（対面またはオンライン）を実施。担当チームメンバーの紹介、チャットツールの連携設定、既存データからの移行スケジュールを確認し、初動の不安をゼロにします。
                        </p>
                    </div>
                </li>
                <li class="p-flow-step__item">
                    <figure class="p-flow-step__item-img"><img src="<?php bloginfo('template_url');?>/img/flow-step-img5.jpg" alt="サポートチームのイメージ"></figure>
                    <div class="p-flow-step__item-body">
                        <p class="p-flow-step__item-number">STEP 5</p>
                        <h3 class="p-flow-step__item-title">サポート開始（運用スタート）</h3>
                        <p class="p-flow-step__item-text">
                            貴社の「外部人事労務部」として、実務運用をスタートします。日々の手続きから急な労務相談まで、チーム制ならではの圧倒的なレスポンス速度でサポート。運用開始後も、常に最適な形へとブラッシュアップを繰り返していきます。
                        </p>
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
                        <img src="<?php bloginfo('template_url'); ?>/img/top-strength-img1.jpg" alt="チーム制サポート">
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
                            私たちは、メールや電話だけでなく、Slack、Chatwork、Teamsなどのチャットツールを標準活用しています。貴社が日常的に使用しているツールに私たちが参加することで、社内の専門スタッフに尋ねるような感覚で、いつでも迅速に相談が可能。物理的な距離を感じさせない、シームレスなコミュニケーション環境を構築します。
                        </p>
                    </div>
                </div>

                <!-- 02 (リバース配置) -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url'); ?>/img/top-strength-img2.jpg" alt="圧倒的なレスポンス">
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
                            ご契約後は、定期的な状況確認面談を実施し、潜在的な労務リスクの芽を早期に摘み取ります。また、法改正の実務対応や最新の労務トレンドを解説する「ハイブリッド型勉強会」や「セミナー」へも優先的にご招待。契約して終わりではなく、常に貴社の「知のインフラ」をアップデートし続け、自走できる強い組織づくりを支援します。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- セミナー -->
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
                                <img src="<?php bloginfo('template_url'); ?>/img/placeholder-seminar.jpg" alt="">
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
                                <img src="<?php bloginfo('template_url'); ?>/img/placeholder-seminar.jpg" alt="">
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

    <!-- サービス一覧 -->
    <?php get_template_part( 'template-parts/section', 'service' ); ?>

    <!-- モデルケース -->
    <?php get_template_part( 'template-parts/section', 'model-case' ); ?>

    <!-- お客様の声 -->
    <?php get_template_part( 'template-parts/section', 'voices' ); ?>

</div>
<?php get_footer(); ?>