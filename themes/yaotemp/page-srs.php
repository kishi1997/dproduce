<?php get_header(); ?>
<div class="p-srs">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">SRS</span>
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
                    御社の“見えない労務リスク”を可視化します。
                </h2>
                <p class="p-intro__lead">
                    組織の歪みは、目に見えないところで静かに進行します。「なぜか離職が止まらない」「現場の活気がない」「ハラスメントの噂が絶えない」——。これらの問題の正体は、主観的な判断や断片的なヒアリングだけでは決して掴めません。 D・プロデュース独自の「SRS診断（職場環境診断）」は、従業員の本音と組織の状態を数値で可視化する「組織の健康診断」です。根拠に基づいたデータが、貴社が今、真に取り組むべき課題を浮き彫りにします。
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
                        <p class="p-trouble__text">自社の労務リスクがどこにあるか分からない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">就業規則や制度が現状に合っているか不安</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">労基署調査に備えて事前にチェックしたい</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">何から改善すべきか整理できていない</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- D・プロデュースのSRS診断３つの特長 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースのSRS診断<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/flow-step-img3.jpg" alt="分析のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">社労士の知見による「多角的な分析項目」</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            一般的な意識調査とは異なり、労働法規と実務に精通した社労士の視点で診断項目を設計しています。心理的な満足度だけでなく、評価への納得感、労働時間の負担、コンプライアンス意識など、労務トラブルに直結しやすい項目を多角的に網羅し、高精度な分析を実現します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/roadmap-img1.jpg" alt="最新トレンドへの対応のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「診断して終わり」にしない、<br />具体的な改善ロードマップ</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            診断はあくまでスタート地点です。私たちは結果をグラフで提示するだけでなく、そのデータが「経営に何を意味するのか」を専門家が解説。優先順位をつけた具体的な改善アクションプラン（就業規則の改定、管理職研修、運用フローの是正など）をセットで提示します。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/flow-step-img5.jpg" alt="チーム体制のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">5名体制のチームによる<br />「中立・客観的」なフィードバック</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            内部の人間ではどうしても忖度が働いてしまう組織課題。D・プロデュースの5名体制チームが、第三者のプロフェッショナルとして客観的に現状をフィードバックします。経営層が「真実の課題」に直面できる環境を作ることで、本質的な組織変革を後押しします。
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- 提供している診断（独自セクション） -->
    <section class="p-srs__diagnosis">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">DIAGNOSIS</span>
                <h2 class="c-section-heading__title-ja">/ 提供している診断</h2>
            </div>

            <!-- 診断タブ -->
            <div class="p-srs_diagnosis-tab">
                <div class="p-tab">

                    <ul class="p-tab__list js-tab-list">
                        <li class="p-tab__item is-active js-srs-tab-item" data-tab="tab-ability">
                            <button class="p-tab__btn">適正診断・基礎能力診断</button>
                        </li>
                        <li class="p-tab__item js-srs-tab-item" data-tab="tab-personality">
                            <button class="p-tab__btn">パーソナリティ診断</button>
                        </li>
                        <li class="p-tab__item js-srs-tab-item" data-tab="tab-leadership-style">
                            <button class="p-tab__btn">リーダーシップスタイル<br />180度診断</button>
                        </li>
                        <li class="p-tab__item js-srs-tab-item" data-tab="tab-leadership-communication">
                            <button class="p-tab__btn">リーダーシップ<br class="u-hidden-sm"/>コミュニケーション <br class="u-hidden-sm"/>180度・360度診断</button>
                        </li>
                    </ul>

                    <div class="p-tab__panel-wrapper">

                        <!-- パネル1 適正診断・基礎能力診断 -->
                        <div class="p-tab__panel is-active js-srs-tab-panel" id="tab-ability">
                            <div class="p-tab__content">
                                <h3 class="p-srs__tab-panel-title">適正診断・基礎能力診断</h3>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--problem">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--problem">問題・課題</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--problem">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">入社１年以内に退職する社員が多い</li>
                                            <li class="p-srs__tab-panel-item">希望通りの人材採用をしたい</li>
                                            <li class="p-srs__tab-panel-item">面接で的確な質問をしたい</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-arrow">
                                    <p class="p-srs__tab-panel-arrow-text">SRS診断サービス</p>
                                </div>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--solution">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">期待効果</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">客観的データを参考に面接を行うため、雇用のミスマッチによる早期退職を抑制できます。</li>
                                            <li class="p-srs__tab-panel-item">現有社員の適性測定を行うことで、期待人物像を見える化できるため、企業が求める人材を採用できます。</li>
                                            <li class="p-srs__tab-panel-item">診断結果から導き出された「面接のポイント」により、面接で聞きたいことを的確に質問できます。</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-body">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">活用手順</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <!-- SRS診断のステップ（画像をテキスト化したもの） -->
                                        <div class="p-srs-step">
                                            <div class="p-srs-step__inner">
                                                <div class="p-srs-step__list">
                                                    <!-- 1-1 回答用紙をFAX -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.1</div>
                                                        <h3 class="p-srs-step__title">回答用紙をFAX</h3>
                                                        <div class="p-srs-step__body">
                                                            <div class="p-srs-step__content">
                                                                <!-- 1-1-1 適正診断問題と回答用紙 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img1.jpg" alt="適正診断問題と回答用紙">
                                                                </div>
                                                                <p class="p-srs-step__text">適正診断問題と回答用紙</p>
                                                            </div>
                                                            <div class="p-srs-step__content">
                                                                <!-- 1-1-2 適正診断問題と回答用紙 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img2.jpg" alt="基礎能力診断問題と回答用紙">
                                                                </div>
                                                                <p class="p-srs-step__text">基礎能力診断問題と回答用紙</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 02 診断結果作成 -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.2</div>
                                                        <h3 class="p-srs-step__title">診断結果作成</h3>
                                                        <div class="p-srs-step__body">
                                                            <!-- 02-2 適性診断診断結果 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img3.jpg" alt="適性診断診断結果">
                                                                </div>
                                                                <p class="p-srs-step__text">適性診断診断結果</p>
                                                            </div>
                                                            <!-- 02-3 基礎能力診断診断結果 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img4.jpg" alt="基礎能力診断診断結果">
                                                                </div>
                                                                <p class="p-srs-step__text">基礎能力診断診断結果</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 03 診断後のサポート -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.3</div>
                                                        <h3 class="p-srs-step__title">診断後のサポート</h3>
                                                        <div class="p-srs-step__body">
                                                            <!-- 03-1 面接と育成のポイント -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                <img src="<?php bloginfo('template_url'); ?>/img/srs-img5.jpg" alt="面接と育成のポイント">
                                                                </div>
                                                                <p class="p-srs-step__text">面接と育成のポイント</p>
                                                            </div>
                                                            <!-- 03-2 社員教育動画 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                <div class="p-srs-step__video-thumb">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img6.jpg" alt="社員教育動画">
                                                                </div>
                                                                </div>
                                                                <p class="p-srs-step__text">社員教育動画</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- パネル2 パーソナリティ診断 -->
                        <div class="p-tab__panel js-srs-tab-panel" id="tab-personality">
                            <div class="p-tab__content">
                                <h3 class="p-srs__tab-panel-title">パーソナリティ診断</h3>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--problem">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--problem">問題・課題</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--problem">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">メンタルヘルス不全を起こす社員が増加傾向</li>
                                            <li class="p-srs__tab-panel-item">リーダーとしての適正を把握したい</li>
                                            <li class="p-srs__tab-panel-item">本人に合った面接・育成をしていきたい</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-arrow">
                                    <p class="p-srs__tab-panel-arrow-text">SRS診断サービス</p>
                                </div>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--solution">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">期待効果</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">「ストレス耐性」「感情コントロール」「ポジティブ性」などのメンタリティ診断から、社員の顕在化していない心理状態を把握できます。これにより、メンタルヘルス対策に役立てることができます。</li>
                                            <li class="p-srs__tab-panel-item">「目標達成行動」と「集団維持行動」の視点から。組織内でリーダーシップを発揮していくための潜在的な脂質を把握できます。これにより、リーダー適正を測るなど、育成の参考資料として活用できます。</li>
                                            <li class="p-srs__tab-panel-item">「職種適正」「パーソナリティ」分析から、面接と採用後の育成ポイントを把握することができます。</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-body">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">活用手順</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <!-- SRS診断のステップ（画像をテキスト化したもの） -->
                                        <div class="p-srs-step">
                                            <div class="p-srs-step__inner">
                                                <div class="p-srs-step__list">
                                                    <!-- 2-1 回答用紙をFAX -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.1</div>
                                                        <h3 class="p-srs-step__title">回答用紙をFAX</h3>
                                                        <div class="p-srs-step__body">
                                                            <div class="p-srs-step__content">
                                                                <!-- 2-1-1 パーソナリティ診断問題回答用紙 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img6.jpg" alt="パーソナリティ診断問題回答用紙">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断問題回答用紙</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 2-2 診断結果作成 -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.2</div>
                                                        <h3 class="p-srs-step__title">診断結果作成</h3>
                                                        <div class="p-srs-step__body">
                                                            <div class="p-srs-step__content">
                                                                <!-- 2-2-1 パーソナリティ診断結果 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img7.jpg" alt="パーソナリティ診断結果">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断結果</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 2-3 診断後のサポート -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.3</div>
                                                        <h3 class="p-srs-step__title">診断後のサポート</h3>
                                                        <div class="p-srs-step__body p-srs-step__body--items">
                                                            <!-- 2-3-1 面接と育成のポイント -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                <img src="<?php bloginfo('template_url'); ?>/img/srs-img8.jpg" alt="面接と育成のポイント">
                                                                </div>
                                                                <p class="p-srs-step__text">面接と育成のポイント</p>
                                                            </div>
                                                            <!-- 2-3-2 社員教育動画 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img5.jpg" alt="社員教育動画">
                                                                </div>
                                                                <p class="p-srs-step__text">社員教育動画</p>
                                                            </div>
                                                            <!-- 2-3-3 メンタルヘルスケア -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img9.jpg" alt="メンタルヘルスケア">
                                                                </div>
                                                                <p class="p-srs-step__text">メンタルヘルスケア</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-srs_tab-panel-note">
                                        ※ 回答用紙を当事務所にFAX送信いただくだけで診断結果をお返しいたします。<br />
                                        ※ 「パーソナリティ診断活用ハンドブック」にて面接と育成のポイントを支援いたします。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- パネル3 リーダーシップスタイル180度診断 -->
                        <div class="p-tab__panel js-srs-tab-panel" id="tab-leadership-style">
                            <div class="p-tab__content">
                                <h3 class="p-srs__tab-panel-title">リーダーシップスタイル180度診断</h3>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--problem">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--problem">問題・課題</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--problem">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">リーダーの長所と短所を正しく把握したい</li>
                                            <li class="p-srs__tab-panel-item">組織の生産性を向上させたい</li>
                                            <li class="p-srs__tab-panel-item">リーダーに対して十分な研修を実施したい</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-arrow">
                                    <p class="p-srs__tab-panel-arrow-text">SRS診断サービス</p>
                                </div>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--solution">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">期待効果</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">リーダー本人評価と部下評価の複眼分析をすることで、リーダーとしての「長所」「短所」を見える化できます。</li>
                                            <li class="p-srs__tab-panel-item">リーダーシップスキルの定期診断で、リーダーの意識向上ならびに組織の生産性や業績向上につながります。</li>
                                            <li class="p-srs__tab-panel-item">日々の行動レベルでの改善点がフィードバックされ、リーダーシップスキルの向上につながります。</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-body">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">活用手順</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <!-- SRS診断のステップ（画像をテキスト化したもの） -->
                                        <div class="p-srs-step">
                                            <div class="p-srs-step__inner">
                                                <div class="p-srs-step__list">
                                                    <!-- 3-1 回答用紙をFAX -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.1</div>
                                                        <h3 class="p-srs-step__title">回答用紙をFAX</h3>
                                                        <div class="p-srs-step__body">
                                                            <div class="p-srs-step__content">
                                                                <!-- 3-1-1 パーソナリティ診断問題回答用紙 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img10.jpg" alt="パーソナリティ診断問題回答用紙">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断問題回答用紙</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 3-2 診断結果をお届け -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.2</div>
                                                        <h3 class="p-srs-step__title">診断結果をお届け</h3>
                                                        <div class="p-srs-step__body p-srs-step__body">
                                                            <!-- 3-2-1 パーソナリティ診断結果 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                <img src="<?php bloginfo('template_url'); ?>/img/srs-img11.jpg" alt="パーソナリティ診断結果">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断結果</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-srs_tab-panel-note">
                                        ※ リーダー１人に対して部下４～５人程度の組み合わせが最適です。<br />
                                        ※ 解答用紙を当事務所にFAX送信いただくだけで診断結果をお返しいたします。<br />
                                        ※ 診断結果作成には約２週間程のお時間を頂戴いたします。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- パネル4 リーダーシップコミュニケーション180度・360度診断 -->
                        <div class="p-tab__panel js-srs-tab-panel" id="tab-leadership-communication">
                            <div class="p-tab__content">
                                <h3 class="p-srs__tab-panel-title">リーダーシップコミュニケーション180度・360度診断</h3>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--problem">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--problem">問題・課題</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--problem">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">リーダーの長所と短所を正しく把握したい</li>
                                            <li class="p-srs__tab-panel-item">組織力を高めたい</li>
                                            <li class="p-srs__tab-panel-item">リーダーのコミュニケーションスキルを高めたい</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-arrow">
                                    <p class="p-srs__tab-panel-arrow-text">SRS診断サービス</p>
                                </div>
                                <div class="p-srs__tab-panel-body p-srs__tab-panel-body--solution">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">期待効果</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <ul class="p-srs__tab-panel-list">
                                            <li class="p-srs__tab-panel-item">リーダー本人、部下、上司（同僚）の複眼評価により、コミュニケーションスキルの「長所」と「短所」を見える化します。</li>
                                            <li class="p-srs__tab-panel-item">リーダーが部下、上司（同僚）との意識のギャップを把握することで、コミュニケーションの「質」工場への取り組みを進めます。</li>
                                            <li class="p-srs__tab-panel-item">日々の行動レベルでの改善点がフィードバックされ、リーダーシップスキルの向上につながります。</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-srs__tab-panel-body">
                                    <h4 class="p-srs__tab-panel-sub-title p-srs__tab-panel-sub-title--solution">活用手順</h4>
                                    <div class="p-srs__tab-panel-content p-srs__tab-panel-content--solution">
                                        <!-- SRS診断のステップ（画像をテキスト化したもの） -->
                                        <div class="p-srs-step">
                                            <div class="p-srs-step__inner">
                                                <div class="p-srs-step__list">
                                                    <!-- 4-1 回答用紙をFAX -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.1</div>
                                                        <h3 class="p-srs-step__title">回答用紙をFAX</h3>
                                                        <div class="p-srs-step__body">
                                                            <div class="p-srs-step__content">
                                                                <!-- 4-1-1 パーソナリティ診断問題回答用紙 -->
                                                                <div class="p-srs-step__img-unit">
                                                                    <img src="<?php bloginfo('template_url'); ?>/img/srs-img10.jpg" alt="パーソナリティ診断問題回答用紙">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断問題回答用紙</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 矢印 -->
                                                    <div class="p-srs-step__arrow"></div>

                                                    <!-- 4-2 診断結果をお届け -->
                                                    <div class="p-srs-step__item">
                                                        <div class="p-srs-step__step">STEP.2</div>
                                                        <h3 class="p-srs-step__title">診断結果をお届け</h3>
                                                        <div class="p-srs-step__body p-srs-step__body">
                                                            <!-- 4-2-1 パーソナリティ診断結果 -->
                                                            <div class="p-srs-step__content">
                                                                <div class="p-srs-step__img-unit">
                                                                <img src="<?php bloginfo('template_url'); ?>/img/srs-img11.jpg" alt="パーソナリティ診断結果">
                                                                </div>
                                                                <p class="p-srs-step__text">パーソナリティ診断結果</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="p-srs_tab-panel-note">
                                        ※ リーダー１人に対して部下４～５人程度の組み合わせが最適です。<br />
                                        ※ 解答用紙を当事務所にFAX送信いただくだけで診断結果をお返しいたします。<br />
                                        ※ 診断結果作成には約２週間程のお時間を頂戴いたします。
                                    </p>
                                </div>
                            </div>
                        </div>

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
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img4.jpg" alt="研修のイメージ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">診断だけで終わらせないサポート体制</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            診断で明確になった課題に対し、そのまま実務改善の代行までワンストップで依頼可能です。給与計算や規程作成のチームと連携しているため、診断で見つかった「歪み」を、スピーディーかつ確実に修正し、理想の職場環境へとアップデートできます。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/specialist.jpg" alt="専門家のイメージ">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">専門家ならではの視点</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            年間1,200件超の労務相談をこなすプロの視点でデータを読み解きます。「この数値の低下は、将来的な労働争議のリスクがある」「この不満は、実は給与体系の不備が原因である」といった、表面的なアンケート結果からは見えない「深層の経営リスク」を特定します。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SRS診断の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ SRS診断の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            まずは現在の組織構成や抱えている懸念、診断を通じて明らかにしたいテーマを伺います。全社一斉実施か、特定の部署に絞るかなど、貴社の目的と状況に合わせた最適な診断設計を行います。
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
                            ヒアリングに基づき、診断項目（質問票）のカスタマイズ案と実施スケジュールをご提案します。従業員の匿名性をどう担保し、回答率を上げるためのアナウンスをどう行うかなど、運用面での最適プランを提示します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">03</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">診断の開始</h3>
                        <p class="p-process__item-text">
                            WEBまたは書面によるアンケートを実施します。匿名性を完全に担保したシステムを使用することで、従業員が「会社には直接言えない本音」を安心して伝えられる環境を整え、精度の高いデータを収集します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">04</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">診断結果の返却・アドバイス</h3>
                        <p class="p-process__item-text">
                            収集したデータを集計・分析し、詳細な診断レポートを作成。経営層・人事担当者様向けに報告会を実施します。数値の背景にある根本原因を解説し、組織を健全化するための具体的な改善策をアドバイスいたします。
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
                            <p class="p-faq__text p-faq__text--bold">SRS診断とは何ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                労務リスクや制度の不備をチェックする簡易診断サービスです。<br />現状を可視化し、優先的に対応すべき課題を明確にします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">診断にはどれくらい時間がかかりますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                ヒアリングからレポート提出まで通常2～3週間程度です。<br />企業規模や診断範囲により調整可能です。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">診断後の改善サポートもお願いできますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、改善提案から実行支援まで対応します。<br >診断だけで終わらず、具体的な解決策まで伴走します。
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