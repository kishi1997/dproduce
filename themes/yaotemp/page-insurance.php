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
                        <img src="<?php bloginfo('template_url');?>/img/insurance-feature-img1.jpg" alt="こだわりのポイント">
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
                        <img src="<?php bloginfo('template_url');?>/img/insurance-feature-img2.jpg" alt="クラウド活用">
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
                        <img src="<?php bloginfo('template_url');?>/img/about-why-img1.jpg" alt="評価者研修">
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
                <div class="p-insurance__system-overview">

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
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img5.jpg" alt="運用支援">
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

    <!-- サービスタブ -->
    <section class="p-service">
        <div class="l-container">
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
                            <a href="<?php bloginfo('url');?>/service/establishment_affairs/" class="p-tab__card">
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
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-bg.svg" alt=""
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
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-bg.svg" alt=""
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
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-img1.jpg"
                                        alt="モデルケースのイメージ画像">
                                </figure>
                                <figure class="p-case__bg">
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-bg.svg" alt=""
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

</div>
<?php get_footer(); ?>