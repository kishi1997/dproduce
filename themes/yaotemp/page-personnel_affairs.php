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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/personal-evaluation-img1.jpg" alt="こだわりのポイント">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「シンプル・継続・定着」へのこだわり</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/personal-evaluation-img2.jpg" alt="クラウド活用">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">クラウド評価ツールの導入・活用支援</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/personal-evaluation-img3.jpg" alt="評価者研修">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「評価者研修」をセットで提供</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number3.svg" alt=""
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/personal-evaluation-img4.jpg" alt="安心のサポート">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">作成から支援までフルサポート</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/personal-evaluation-img5.jpg" alt="運用支援">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">会社のDXも支援</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
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

</div>
<?php get_footer(); ?>