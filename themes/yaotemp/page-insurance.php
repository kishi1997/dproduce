<?php get_header(); ?>
<div class="p-insurance">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Insurance</span>
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
                    煩雑な手続きを、正確・迅速に。
                </h2>
                <p class="p-intro__lead">
                    従業員数が増えるほど、入退社の手続きや社会保険の算定基礎、労働保険の年度更新といった事務作業は膨大なボリュームとなり、担当者のリソースを圧迫します。 これらの業務は「できて当たり前」と思われがちですが、万が一ミスや遅延が発生すれば、従業員の信頼を損なうだけでなく、行政指導のリスクにも繋がりかねません。D・プロデュースは、貴社の事務負担を最小限に抑え、確実なコンプライアンスを実現します。
                </p>
            </div>
        </div>
    </section>

    <!-- こんなお悩み -->
    <section class="p-trouble">
        <div class="l-container">
            <div class="p-trouble__inner">
                <div class="p-trouble__header">
                    <div class="p-trouble__title">こんなお困りごと</div>
                    <div class="p-trouble__subtitle">ありませんか？</div>
                </div>
                <ul class="p-trouble__list">
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">従業員を雇うのが初めてで手続きが分からない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">社会保険・労働保険の加入が不安</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">助成金を活用したいが調べる時間がない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">本業に集中したいのに事務手続きに追われている</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- D・プロデュースの労働・社会保険事務代行３つの特長 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの労働・社会保険事務代行<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/insurance-feature-img1.jpg" alt="労災保険のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">事業主・役員の「労災保険」への特別加入</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            本来、経営者や役員は労働者ではないため、業務中のケガで労災保険を受けることはできません。しかし、厚労大臣認可の事務組合を運営する当法人なら、事業主や家族従事者の方々も「特別加入」が可能です。現場作業や移動中の事故など、経営者の「もしも」の際にも労働者と同様の補償が受けられる安心を提供します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/insurance-feature-img2.jpg" alt="労働保険料のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">労働保険料の「3回分割納付」が可能</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            通常、労働保険料はある程度の金額（概ね40万円以上）に達しない限り分割納付は認められませんが、当法人の事務組合に委託いただくことで、金額の多寡に関わらず保険料を年3回に分けて納付することが可能になります。一括納付によるキャッシュフローへの負担を軽減し、資金運用の安定化に寄与します。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/about-why-img1.jpg" alt="一括対応のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">専門知と事務組合機能の<br />「ワンストップ一元化」</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            一般的な事務組合では行えない「社会保険（健保・厚年）の手続き」や「助成金の申請」「労災給付の請求」も、社労士法人である私たちが窓口となることで全て一括対応可能です。事務組合の制度的メリットを享受しつつ、社労士の高度なコンサルティングを一つの窓口で完結。情報の二重伝達を防ぎ、管理コストを大幅に削減します。
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- D・プロデュースのバックアップ体制（独自セクション） -->
    <section class="p-insurance__system">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SYSTEM</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースのバックアップ体制</h2>
            </div>
            <div class="p-insurance__system-content">
                <div class="p-insurance__system-cards">
                    <!-- 01 -->
                    <div class="p-insurance__system-card p-insurance__system-card--dproduce">
                        <div class="p-insurance__system-card-head">
                            <h3 class="p-insurance__system-card-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="社会保険労務士法人D・プロデュース"></h3>
                        </div>
                        <div class="p-insurance__system-card-body">
                            <!-- リスト -->
                            <ul class="p-insurance__system-card-list">
                                <li class="p-insurance__system-card-item">社会保険、労働保険手続きを<span class="p-insurance__system-card-item-strong">迅速かつ正確</span>に対応</li>
                                <li class="p-insurance__system-card-item">法改正等の頻繁かつタイムリーな各種情報提供</li>
                                <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">問題箇所がはっきりわかる</span>官公庁の立ち入り検査対応</li>
                                <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">労働紛争解決へのアドバイス及びあっせん代理</span></li>
                                <li class="p-insurance__system-card-item">法人組織による、<span class="p-insurance__system-card-item-strong">安心・安全</span>なご契約</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-insurance__system-row">
                        <!-- 02 -->
                        <div class="p-insurance__system-card p-insurance__system-card--sr">
                            <div class="p-insurance__system-card-head">
                                <h3 class="p-insurance__system-card-title">神奈川県SR経営労務センター</h3>
                            </div>
                            <div class="p-insurance__system-card-body">
                                <!-- リスト -->
                                <ul class="p-insurance__system-card-list">
                                    <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">会社に事務負担の少ない</span>労働保険手続き</li>
                                    <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">労働保険楼の</span>確定申告<span class="p-insurance__system-card-item-small">(年度更新)</span></li>
                                    <li class="p-insurance__system-card-item">事業主も労働加入できる安心の特別加入制度</li>
                                </ul>
                            </div>
                        </div>
                        <!-- 03 -->
                        <div class="p-insurance__system-card p-insurance__system-card--consultant">
                            <div class="p-insurance__system-card-head">
                                <h3 class="p-insurance__system-card-title">人事労務コンサルタント</h3>
                            </div>
                            <div class="p-insurance__system-card-body">
                                <!-- リスト -->
                                <ul class="p-insurance__system-card-list">
                                    <li class="p-insurance__system-card-item">就業規則を<span class="p-insurance__system-card-item-strong">オーダーメイド作成</span></li>
                                    <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">判断に迷う</span>人づかいのアドバイス</li>
                                    <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">時代とニーズにマッチした</span>諸規定の準備</li>
                                    <li class="p-insurance__system-card-item"><span class="p-insurance__system-card-item-strong">経営労働監査による「人材」の効果的活用と成長発展の視点での経営分析評価</span></li>
                                    <li class="p-insurance__system-card-item">IPO<span class="p-insurance__system-card-item-small">(株式公開)</span>へ向けた<span class="p-insurance__system-card-item-strong">内部統制支援<span class="p-insurance__system-card-item-small">(コンサルティング)</span></span>他</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-insurance__system-text">
                    当社の「労働・社会保険事務アウトソーシング」サービスでは、このような実務手続きの代行を適正に行い、事業継続する上で必要な知識・ノウハウをご提供しながら、しっかりと御社をサポートさせていただきます。<br />
                    このサービスをご利用いただくことで、これまでの労働・社会保険事務を合理化(スリム化)し、コア業務へ集中することができ、事業拡大や企業発展のために使える時間を確保することができます。
                </p>
            </div>
        </div>
    </section>

    <!-- ご利用のメリット -->
    <section class="p-point">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">MERIT</span>
                <h2 class="c-section-heading__title-ja">/ ご利用のメリット</h2>
            </div>

            <div class="p-point__list">

                <!-- 01 -->
                <div class="p-point__item">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img4.jpg" alt="安心のサポート">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">煩雑な手続きをまとめてサポート</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            雇用保険・社会保険の取得、喪失、扶養変更から、労災事故の対応まで、人事労務に関するあらゆる手続きを一括して代行します。専門家チームが窓口となることで、役所ごとに異なる複雑なルールを調べる手間をなくし、正確かつ最短ルートで手続きを完結させます。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/reason-feature-img4.jpg" alt="相談のイメージ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">労務相談もできる環境</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            単なる事務作業の代行にとどまらず、手続きの背景にある「雇用契約の適正さ」や「法改正に伴う実務の変更点」についても、その場で専門家へ相談が可能です。事務代行と労務アドバイザリーを一体化させることで、リスクを未然に防ぐ一歩先のバックオフィス体制を構築できます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 労働・社会保険事務代行の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 労働・社会保険事務代行の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            現在の従業員数、拠点数、現在の手続きの運用フローや使用されている人事ソフトなどを詳しく伺います。現状の課題を洗い出し、二重入力などの無駄を省いた、貴社に最適なアウトソーシングプランを設計します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">02</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">現状調査とプランのご提案</h3>
                        <p class="p-process__item-text">
                            ヒアリングに基づき、代行範囲（スポットからフルアウトソーシングまで）とお見積りをご提示します。また、電子申請への移行やチャットツールでの情報共有など、業務スピードを劇的に向上させるための具体的な改善案を提案いたします。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">03</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ご契約・キックオフ</h3>
                        <p class="p-process__item-text">
                            プラン内容にご納得いただけましたら、正式にサポートを開始します。専任の5名チームを編成し、キックオフミーティングを実施。貴社固有のルールや連絡系統を確認し、スムーズな実務移行のための準備を整えます。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">04</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">サポート開始</h3>
                        <p class="p-process__item-text">
                            決定したフローに沿って、実際の手続き代行をスタートします。入退社情報などをチャットや共有ストレージで受け取り、電子申請にて迅速に処理。完了報告までチーム一貫で対応し、貴社が本業に専念できる環境を強力にバックアップします。
                        </p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- FAQ -->
    <section class="p-faq">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FAQ</span>
                <h2 class="c-section-heading__title-ja">/ よくある質問</h2>
            </div>

            <!-- FAQリストエリア -->
            <div class="p-faq__inner">
                <dl class="p-faq__list">
                    <!-- FAQアイテム 1 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">どこまで対応してもらえますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                入退社手続き、社会保険・労働保険の各種届出まで幅広く対応可能です。<br />電子申請にも対応し、迅速に手続きを行います。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">スポットでの依頼も可能ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、必要な手続きのみのご依頼も可能です。<br />
                                顧問契約がなくても対応いたします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">手続きの進捗は確認できますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、状況は随時ご報告いたします。<br />安心してお任せいただける体制を整えています。
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

        <!-- サービス一覧 -->
    <?php get_template_part( 'template-parts/section', 'service' ); ?>

    <!-- モデルケース -->
    <?php get_template_part( 'template-parts/section', 'model-case' ); ?>

</div>
<?php get_footer(); ?>