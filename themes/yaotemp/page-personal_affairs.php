<?php get_header(); ?>
<div class="p-personnel-affairs">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Personnel Affairs</span>
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
                    評価が変われば、組織が変わる。
                </h2>
                <p class="p-intro__lead">
                    「基準が曖昧で社員の納得感が低い」「評価シートが形骸化し、単なる給与決定の作業になっている」——そんな悩みはありませんか？ 従業員数が100名を超え、組織が多層化すると、従来の「感覚的な評価」では限界が訪れます。D・プロデュースが提案するのは、会社のビジョンを社員の行動へと翻訳し、自走する組織を作るための「経営インフラ」です。 私たちは、制度を作ることをゴールにせず、現場で「運用され、成果が出る」までを徹底してプロデュースします。
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
                        <p class="p-trouble__text">評価基準が曖昧で不公平感が出ている</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">上司によって評価にばらつきがある</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">昇給・賞与の決め方に根拠がない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">社員のモチベーションが上がらない</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- D・プロデュースの人事評価制度構築３つの特長 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの人事評価制度構築<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img1.jpg" alt="こだわりのポイント">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「シンプル・継続・定着」へのこだわり</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            どんなに立派な制度も、運用が複雑すぎて止まってしまっては意味がありません。私たちは、中堅企業の現場でも無理なく継続できる「シンプルさ」を重視。貴社の社風やリソースに合わせ、評価者も被評価者も迷わない、実効性の高い仕組みをオーダーメイドで設計します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img2.jpg" alt="クラウド活用のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">クラウド評価ツールの導入・活用支援</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            Excelや紙による管理から脱却し、最新のクラウド評価システムの導入を支援します。データの蓄積・分析を容易にすることで、評価業務の工数を大幅に削減。システム設定から操作の定着までプロのチームが伴走し、貴社の「評価のDX化」を強力にバックアップします。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img3.jpg" alt="評価者研修のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「評価者研修」をセットで提供</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            制度に魂を吹き込むのは「人（評価者）」です。制度構築と並行して、管理職向けの評価者研修を実施。「目標設定のコツ」から「部下のやる気を引き出すフィードバックスキル」までを実践的にレクチャーし、評価のバラつきを抑え、納得感の高い組織へと導きます。
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
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img4.jpg" alt="安心のサポートのイメージ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">作成から支援までフルサポート</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            経営理念の明文化、等級定義の策定、賃金テーブルの設計といった「構築フェーズ」から、社員説明会、実際の評価立ち会い、制度の微調整といった「運用フェーズ」までを網羅。社労士・コンサルタントのチームが、一気通貫で貴社のプロジェクトを完遂させます。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img5.jpg" alt="DX支援のイメージ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">会社のDXも支援</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            評価制度の構築を機に、勤怠管理や給与計算、タレントマネジメントといった周辺のバックオフィス業務のデジタル化も同時にご提案。バラバラだった人事データを一元管理できる環境を整え、データに基づいた戦略的な人事管理（人的資本経営）を可能にします。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 人事評価制度構築の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 人事評価制度構築の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            経営陣へのインタビューを通じ、会社のビジョンや「どのような人材を評価したいか」という想いを深掘りし、制度構築のゴールを明確に定めます。
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
                            現状分析から既存制度の問題点や改善の方向性を提示します。貴社のフェーズに合わせ、どのクラウドツールを使い、どう構築を進めるかの最適プランをご提案します。
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
                            プロジェクトを正式にスタート。実務担当者様との定期的な打ち合わせを通じ、等級・評価・報酬の3本柱を中心に、貴社独自の評価基準や賃金テーブルを練り上げます。
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
                            制度完成後、社員説明会を実施し理解を深めます。また、管理職向けの評価者研修を行い、制度が正しく運用され、組織の成果に繋がるまで継続的にフォローアップします。
                        </p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- 人事評価制度策定のステップ -->
    <section class="p-personnel-affairs__step">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">STEP</span>
                <h2 class="c-section-heading__title-ja">/ 人事評価制度策定のステップ</h2>
            </div>

            <div class="p-personnel-affairs__step-content">
                <ol class="p-personnel-affairs__step-list">
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">1</span></div>
                        <p class="p-personnel-affairs__step-item-text">経営理念</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">2</span></div>
                        <p class="p-personnel-affairs__step-item-text">全社経営目標</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">3</span></div>
                        <p class="p-personnel-affairs__step-item-text">経営目標達成に必要な組織（図）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">4</span></div>
                        <p class="p-personnel-affairs__step-item-text">部門目標</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">5</span></div>
                        <p class="p-personnel-affairs__step-item-text">人材育成方針（全社共通の求人材像）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">6</span></div>
                        <p class="p-personnel-affairs__step-item-text">等級基準（共通）考え方、心構え、業務のレベル・能力</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">7</span></div>
                        <p class="p-personnel-affairs__step-item-text">等級基準（職種別：○○○○）or（部門別：○○○○）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">8</span></div>
                        <p class="p-personnel-affairs__step-item-text">人事評価作成記図（キャリアデザイン）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">9</span></div>
                        <p class="p-personnel-affairs__step-item-text">社員等等級設定</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">10</span></div>
                        <p class="p-personnel-affairs__step-item-text">教育訓練体系（職種別：○○○○）or（部門別：○○○○）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">11</span></div>
                        <p class="p-personnel-affairs__step-item-text">教育訓練カリキュラム（全体、内容、目的）</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">12</span></div>
                        <p class="p-personnel-affairs__step-item-text">人事評価シートの策定</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">13</span></div>
                        <p class="p-personnel-affairs__step-item-text">社内昇進の基準・設定</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">14</span></div>
                        <p class="p-personnel-affairs__step-item-text">賃金制度の策定</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">15</span></div>
                        <p class="p-personnel-affairs__step-item-text">人事評価委員設置</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">16</span></div>
                        <p class="p-personnel-affairs__step-item-text">人事評価制度（仮）運用</p>
                    </li>
                    <li class="p-personnel-affairs__step-item">
                        <div class="p-personnel-affairs__step-item-head"><span class="p-personnel-affairs__step-number">17</span></div>
                        <p class="p-personnel-affairs__step-item-text">人事制度を運用（PDCAで改善を繰り返す）</p>
                    </li>
                </ol>
            </div>
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
                            <p class="p-faq__text p-faq__text--bold">小規模な会社でも評価制度は必要ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、人数が少ない会社ほど明確な基準が重要です。<br />納得感のある評価は、離職防止にもつながります。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">制度づくりにはどれくらい時間がかかりますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                通常は2～3ヶ月程度です。<br />ヒアリングを重ね、御社に合った制度を設計します。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">制度を作った後の運用サポートもありますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、評価者研修や運用フォローも対応可能です。<br />“作って終わり”ではなく、定着まで支援します。
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