<?php get_header(); ?>
<div class="p-labor">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Labor</span>
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
                    そのトラブル、放置すると“経営リスク”になります。
                </h2>
                <p class="p-intro__lead">
                    メンタルヘルス不調、ハラスメントの訴え、突然の残業代請求……。従業員数が100名を超え、組織が複雑化するほど、労務トラブルの火種はどこにでも潜んでいます。 これらの問題を「現場の判断」や「ネットの知識」だけで解決しようとすると、かえって事態を悪化させ、莫大な法的・経済的リスクを招く恐れがあります。D・プロデュースは、年間1,200件超の相談実績に基づき、貴社のフェーズに合わせた最適な解決ルートを提示。経営の安定を守るための「最強の防波堤」となります。
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
                        <p class="p-trouble__text">問題社員への対応方法が分からない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">解雇や退職勧奨の進め方に不安がある</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">未払い残業代を請求された</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">労基署から是正勧告を受けた</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- D・プロデュースの労務トラブル相談３つの特長 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの労務トラブル相談<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/about-why-img3.jpg" alt="的確なアドバイス">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「法的」かつ「実務的」な<br />二段構えのアドバイス</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            法律論を振りかざすだけでは、現場の混乱は収まりません。私たちは労働法の深い知見（リーガル視点）と、数多くの泥臭い現場調整（実務視点）の両面からアドバイスを行います。貴社の社風や人間関係まで考慮した「現実的な着地点」を提案できるのが、私たちの最大の強みです。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-strength-img1.jpg" alt="チームによる多角的検証">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">5名チームによる多角的検証</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            トラブル対応に「一人の担当者の主観」は禁物です。D・プロデュースでは、一つの案件に対して5名体制のチームで知見を出し合います。過去の膨大な事例と照らし合わせ、多角的な視点からリスクを分析。客観的で精度の高い判断を下すことで、貴社を誤った選択から守ります。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/planning-img.jpg" alt="予防策の提示">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">トラブルを糧にする「予防策」の提示</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            起きてしまった問題の解決は、あくまでスタート地点です。私たちはトラブルの根本原因を特定し、就業規則の改定や管理職研修、コミュニケーションツールの導入などをセットで提案します。トラブルを「組織の脆弱性を克服する機会」へと変え、再発しない強い組織づくりに伴走します。
                        </p>
                    </div>
                </div>


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
                        <img src="<?php bloginfo('template_url');?>/img/labor-trouble-merit-img1.jpg" alt="柔軟な対応を行うスタッフ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">ハード・ソフト双方からのアプローチ</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-point-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            就業規則や雇用契約書の整備といった「ハード面」の法整備はもちろん、社員の意識改革やメンタルヘルス対策といった「ソフト面」のサポートまで網羅。表面的な解決にとどまらない、全方位的な労務マネジメントを実現します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/labor-trouble-merit-img2.jpg" alt="ワンストップでご対応">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">労務相談以外のことも<br />ワンストップで</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-point-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            トラブルの背景に「給与計算のミス」や「評価への不満」がある場合も、D・プロデュースなら一括で対応可能です。給与代行や評価制度の専門チームと連携し、窓口を一本化することで、スピーディーかつ一貫性のある解決を可能にします。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 労務相談の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 労務相談の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            まずは現在起きている事象、これまでの経緯、関係者の主張などを詳しく伺います。秘密を厳守し、中立・客観的な立場から状況を整理。Zoom等によるオンライン相談で、緊急性の高い案件にも即座に対応を開始します。
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
                            ヒアリングに基づき、法的なリスクの度合いと、貴社が取りうる解決の選択肢を複数提示します。各プランのメリット・デメリットを明確にし、貴社の状況に最も適した解決へのロードマップとお見積りをご案内します。
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
                            方針にご納得いただけましたら、正式にサポートを開始します。専任の5名チームを編成し、チャットツール等でのリアルタイムな連携をスタート。複雑な事案の場合は、関係者へのインタビューや資料の精査などの実務に速やかに着手します。
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
                            決定した方針に基づき、実際の解決に向けて伴走します。書面の作成指導、社員への面談アドバイス、労働基準監督署等の調査立ち会いなど、現場の最前線でバックアップ。問題が終息するまで、チーム一丸となって貴社を支え続けます。
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
                            <p class="p-faq__text p-faq__text--bold">トラブルが大きくなる前でも相談できますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、早めのご相談が最も重要です。<br />初動対応によってリスクは大きく変わります。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">解雇や退職勧奨の相談も可能ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、法的リスクを踏まえた対応をご提案します。<br />感情的にならず、会社を守る進め方をサポートします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">労基署対応もお願いできますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                是正勧告や調査対応もサポート可能です。<br />書類準備から対応方法まで実務的に支援します。
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