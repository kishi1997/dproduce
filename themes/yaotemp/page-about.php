<?php get_header(); ?>
<div class="p-about">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">About</span>
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
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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

    <!-- 理由（2カラムレイアウト） -->
    <section class="p-reason">
        <div class="l-container">
            <div class="p-reason__header">
                <h2 class="p-reason__title">
                    <span class="p-reason__title-line p-reason__title-line--deco">
                        なぜ、D・プロデュースが
                    </span>
                    <span class="p-reason__title-line">
                        「次」のパートナーにふさわしいのか
                    </span>
                </h2>
            </div>

            <div class="p-reason__list">
                <div class="p-reason__item">
                    <div class="p-reason__img">
                        <img src="<?php bloginfo('template_url');?>/img/sample/reason-two-col-img1.jpg"
                            alt="白い外壁が特徴のシンプルモダンな2階建て住宅の外観">
                    </div>
                    <div class="p-reason__body">
                        <span class="p-reason__label">
                            Point<span class="p-reason__label-num">/ 01</span>
                        </span>
                        <h3 class="p-reason__item-title">
                            1社5名のチーム担当制
                        </h3>
                        <p class="p-reason__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>

                <div class="p-reason__item">
                    <div class="p-reason__img">
                        <img src="<?php bloginfo('template_url');?>/img/sample/reason-two-col-img2.jpg"
                            alt="ヘリンボーン調の木壁とアイアン照明を取り入れた開放的なLDK空間">
                    </div>
                    <div class="p-reason__body">
                        <span class="p-reason__label">
                            Point<span class="p-reason__label-num">/ 02</span>
                        </span>
                        <h3 class="p-reason__item-title">
                            100名〜数千名規模企業サポートの実績
                        </h3>
                        <p class="p-reason__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>

                <div class="p-reason__item">
                    <div class="p-reason__img">
                        <img src="<?php bloginfo('template_url');?>/img/sample/reason-two-col-img3.jpg"
                            alt="アイランドキッチンを中心にしたナチュラルモダンなダイニングキッチン">
                    </div>
                    <div class="p-reason__body">
                        <span class="p-reason__label">
                            Point<span class="p-reason__label-num">/ 03</span>
                        </span>
                        <h3 class="p-reason__item-title">
                            法改正を「リスク」ではなく「機会」に
                        </h3>
                        <p class="p-reason__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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
    <!-- 施工事例 / 実績 -->
    <section class="p-works">
        <h3>以下はサンプルセクションです</h3>
        <div class="l-container">
            <div class="p-works__list">
                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img1.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img2.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>

                <a href="" class="p-works__item">
                    <div class="p-works__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-work-img3.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__meta">
                            <span class="p-works__category">カテゴリ名</span>
                            <span class="p-works__client">〇〇市A様</span>
                        </div>
                        <h4 class="p-works__title">タイトルタイトルタイトルタイトル</h4>
                        <p class="p-works__text">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                    </div>
                </a>
            </div>

            <div class="p-works__btn-wrapper">
                <div class="c-btn c-btn--outline">
                    <a href="">もっと見る</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ポイント（左右互い違いのレイアウト） -->
    <section class="p-point">
        <div class="l-container">
            <div class="p-point__item">
                <div class="p-point__inner">
                    <div class="p-point__img">
                        <img alt="「完全オーダーメイドで理想の暮らしを実現」イメージ画像"
                            src="<?php bloginfo('template_url');?>/img/sample/sample-point-img1.jpg" />
                    </div>
                    <div class="p-point__body">
                        <span class="p-point__number">
                            <img alt="01" src="<?php bloginfo('template_url');?>/img/sample/bg-number-01.svg" />
                        </span>
                        <h3 class="p-point__title">サンプルタイトル</h3>
                        <p class="p-point__text">ご家族のライフスタイルに合わせた、個々の動き・活動・空間にフィットする住まいを提案します。</p>
                        <p class="p-point__text">決まった形はありません。お客様の想いを大切にし、素敵な住まいを実現するお手伝いをします。</p>
                    </div>
                </div>
            </div>

            <div class="p-point__item">
                <!-- 反転レイアウト用のモディファイアクラス（--reverse）を付与 -->
                <div class="p-point__inner p-point__inner--reverse">
                    <div class="p-point__body">
                        <span class="p-point__number">
                            <img alt="02" src="<?php bloginfo('template_url');?>/img/sample/bg-number-02.svg" />
                        </span>
                        <h3 class="p-point__title">サンプルタイトル</h3>
                        <p class="p-point__text">理想の家を実現するためには、敷地の特性を活かすことが重要です。お客様のライフスタイルに合わせた最適なプランをご提案します。</p>
                        <p class="p-point__text">また、周辺環境や将来的な変化にも配慮したプランニングを行い、安心して住める家づくりをサポートします。</p>
                    </div>
                    <div class="p-point__img">
                        <img alt="「敷地条件を活かした柔軟なプランニング」イメージ画像"
                            src="<?php bloginfo('template_url');?>/img/sample/sample-point-img2.jpg" />
                    </div>
                </div>
            </div>

            <div class="p-point__item">
                <div class="p-point__inner">
                    <div class="p-point__img">
                        <img alt="「自然素材と最新技術の融合」イメージ画像"
                            src="<?php bloginfo('template_url');?>/img/sample/sample-point-img3.jpg" />
                    </div>
                    <div class="p-point__body">
                        <span class="p-point__number">
                            <img alt="03" src="<?php bloginfo('template_url');?>/img/sample/bg-number-03.svg" />
                        </span>
                        <h3 class="p-point__title">サンプルタイトル</h3>
                        <p class="p-point__text">無垢材や漆喰といった自然素材の魅力を活かしながら、断熱性能・耐震構造・省エネ設計など、現代の住宅に必要な性能も確保。</p>
                        <p class="p-point__text">見た目の美しさと暮らしの快適性、どちらも兼ね備えたバランスの良い住まいを実現します。安心して長く住めることを大切にしています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>