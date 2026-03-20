<?php get_header(); ?>
<div class="p-about">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">First</span>
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
                    <span>その人事労務、次のフェーズへ。<br />
                        組織の成長にブレーキをかけない体制を。</span>
                </h2>
                <p class="p-intro__lead">
                    従業員数が100名を超えると、人事労務の役割は「単なる事務」から「経営を支えるインフラ」へと変わります。 しかし、多くの企業様が「1名体制の社労士事務所」や「属人化した内製チーム」による限界<br />
                    レスポンスの遅れ、法改正への対応不足、そしてミスへの不安——に直面しているのが実情です。<br />
                    <br>
                    私たちD・プロデュースは、その「組織の壁」を突破するためのパートナーです。 一人の「先生」に頼るのではなく、プロフェッショナルな「組織」で貴社を支える。 創業期から拡大期、そして数千名規模の大企業までを支えてきた知見と、最新のデジタル技術を融合させ、貴社のさらなる成長を揺るぎないものにします。
                </p>
            </div>
        </div>
    </section>

    <!-- こんなお悩み -->
    <section class="p-trouble">
        <div class="l-container">
            <div class="p-trouble__inner">
                <div class="p-trouble__header">
                    <div class="p-trouble__title">こんな「組織の壁」に</div>
                    <div class="p-trouble__subtitle">直面していませんか？</div>
                </div>
                <ul class="p-trouble__list">
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">顧問社労士が1名で、連絡がつきにくく回答に時間がかかる</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">従業員数が増え、給与計算や手続きのミスが目立ってきた</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">担当者の退職や不在で、業務がブラックボックス化している</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">法改正のたびに「自社はどうすべきか」という具体的な提案がほしい</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">IPOやM&Aを見据え、労務リスクをゼロにしたい</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- なぜ、D・プロデュースが「次」のパートナーにふさわしいのか -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">WHY</span>
                <h2 class="c-section-heading__title-ja">/ なぜ、D・プロデュースが<br />「次」のパートナーにふさわしいのか</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url'); ?>/img/about-why-img1.jpg" alt="チーム担当制">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">WHY.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">【属人化の解消】<br />1社5名のチーム担当制</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url'); ?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            社労士業界で一般的な「1社1担当制」は、担当者の不在や退職がそのまま貴社のリスクに直結します。 D・プロデュースでは、お客様1社に対して役割の異なる5名の専任チームを編成。チャットツールで情報をリアルタイムに共有し、常に「誰かが即座に答えられる」体制を構築しています。属人化を徹底して排除し、止まることのない安定したバックオフィス運用をお約束します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url'); ?>/img/about-why-img2.jpg" alt="大規模対応の知見">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">WHY.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">【大規模対応の知見】<br />100名〜数千名規模企業サポートの実績</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url'); ?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            私たちは、数名規模のスタートアップから、数千名規模の大企業まで、あらゆるフェーズの労務管理を経験してきました。 100名を超えると急増する入退社手続き、複雑な多拠点管理、そして膨大な給与計算。これらの課題を、最新のDXツールとこれまでの豊富な受託実績に裏打ちされたノウハウで、正確かつ効率的に処理します。貴社の規模がどれだけ拡大しても、柔軟に対応し続けるキャパシティがここにあります。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url'); ?>/img/about-why-img3.jpg" alt="法改正への対応">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">WHY.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">【攻めの改善提案】<br />法改正を「リスク」ではなく「機会」に</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url'); ?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            目まぐるしく変わる労働法制。それを単なる「守るべきルール」として捉えるか、「組織をより良くするチャンス」として捉えるかで、企業の未来は変わります。 私たちは、法改正の内容を伝えるだけでなく、それが「貴社の現場にどう影響し、どう活用すべきか」を具体的に提言。定期的な勉強会の開催や独自のSRS診断を通じ、トラブルを未然に防ぎ、社員が安心して自走できる「強い組織」へのアップデートを支援します。
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- 比較表セクション (Aboutページ専用) -->
    <section class="p-about-compare">
        <div class="l-container">
            <h2 class="p-about-compare__title">
                従来型社労士 <span class="p-about-compare__vs">vs</span> D・プロデュース
            </h2>

            <div class="p-about-compare__table">
                <!-- ヘッダー行 (PC版のみ表示) -->
                <div class="p-about-compare__row p-about-compare__row--header">
                    <div class="p-about-compare__col p-about-compare__col--label">比較項目</div>
                    <div class="p-about-compare__col p-about-compare__col--old">従来型の個人事務所</div>
                    <div class="p-about-compare__col p-about-compare__col--new">D・プロデュース</div>
                </div>

                <!-- データ行 1：対応体制 -->
                <div class="p-about-compare__row">
                    <div class="p-about-compare__col p-about-compare__col--label">対応体制</div>
                    <div class="p-about-compare__col p-about-compare__col--old">
                        <span class="p-about-compare__sp-head">従来型の個人事務所</span>
                        <p class="p-about-compare__text">社労士1名（属人化のリスク）</p>
                    </div>
                    <div class="p-about-compare__col p-about-compare__col--new">
                        <span class="p-about-compare__sp-head">D・プロデュース</span>
                        <p class="p-about-compare__text p-about-compare__text--bold">5名1組のチーム制（安定性）</p>
                    </div>
                </div>

                <!-- データ行 2：レスポンス -->
                <div class="p-about-compare__row">
                    <div class="p-about-compare__col p-about-compare__col--label">レスポンス</div>
                    <div class="p-about-compare__col p-about-compare__col--old">
                        <span class="p-about-compare__sp-head">従来型の個人事務所</span>
                        <p class="p-about-compare__text">連絡待ちが発生しやすい</p>
                    </div>
                    <div class="p-about-compare__col p-about-compare__col--new">
                        <span class="p-about-compare__sp-head">D・プロデュース</span>
                        <p class="p-about-compare__text p-about-compare__text--bold">チャット・Zoomで即時対応</p>
                    </div>
                </div>

                <!-- データ行 3：大規模対応 -->
                <div class="p-about-compare__row">
                    <div class="p-about-compare__col p-about-compare__col--label">大規模対応</div>
                    <div class="p-about-compare__col p-about-compare__col--old">
                        <span class="p-about-compare__sp-head">従来型の個人事務所</span>
                        <p class="p-about-compare__text">限界があり、ミスが増える傾向</p>
                    </div>
                    <div class="p-about-compare__col p-about-compare__col--new">
                        <span class="p-about-compare__sp-head">D・プロデュース</span>
                        <p class="p-about-compare__text p-about-compare__text--bold">DX活用で数千名まで正確に処理</p>
                    </div>
                </div>

                <!-- データ行 4：提案内容 -->
                <div class="p-about-compare__row">
                    <div class="p-about-compare__col p-about-compare__col--label">提案内容</div>
                    <div class="p-about-compare__col p-about-compare__col--old">
                        <span class="p-about-compare__sp-head">従来型の個人事務所</span>
                        <p class="p-about-compare__text">法改正の通達のみ</p>
                    </div>
                    <div class="p-about-compare__col p-about-compare__col--new">
                        <span class="p-about-compare__sp-head">D・プロデュース</span>
                        <p class="p-about-compare__text p-about-compare__text--bold">実務への落とし込みと勉強会</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- イントロダクション 2 -->
    <section class="p-intro p-intro__bggray">
        <div class="l-container">
            <div class="p-intro__inner">
                <h2 class="p-intro__title">
                    D・プロデュースの強みを支える「4つの理由」
                </h2>
                <p class="p-intro__lead">
                    D・プロデュースが、なぜ横浜の多くの中堅・成長企業から選ばれ続けているのか。<br />
                    その根底には、徹底した「組織対応」「スピード」「テクノロジー活用」「実践的な提案」という、譲れない4つのこだわりがあります。<br />
                    他事務所とは一線を画す、私たちの「プロフェッショナリズムの正体」をぜひご覧ください。
                </p>
                <h3 class="p-intro__sub-lead">私たちのこだわりは、4つの理由に集約されています。</h3>
                <div class="p-intro__btn-wrapper">
                    <div class="c-btn c-btn--outline">
                        <a href="">選ばれる理由はこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="p-faq">
        <div class="l-container">
            <!-- ヘッダーエリア -->
            <div class="p-faq__header">
                <h2 class="p-faq__title">
                    お問い合わせの前に<br>
                    よくある「切り替え」の不安にお答えします
                </h2>
            </div>

            <!-- FAQリストエリア -->
            <div class="p-faq__inner">
                <dl class="p-faq__list">
                    <!-- FAQアイテム 1 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">今の社労士から変更したいのですが、トラブルになりませんか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                社労士の変更は珍しいことではなく、適切な手順を踏めば問題なく切り替え可能です。<br>
                                契約内容の確認や引き継ぎも当事務所がサポートしますので、安心してご相談ください。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">社労士を切り替えるベストなタイミングはいつですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                年度替わりや給与計算の区切りがスムーズですが、状況に応じて柔軟に対応できます。<br>
                                貴社の業務に支障が出ないタイミングをご提案いたします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">社労士を変更すると業務に支障は出ませんか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                事前に段取りを整えれば、業務が止まることはほとんどありません。<br>
                                必要資料の引き継ぎや未処理手続きの確認までしっかり対応いたします。
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>