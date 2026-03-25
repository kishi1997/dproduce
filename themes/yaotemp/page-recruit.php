<?php get_header(); ?>
<div class="p-recruit">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Recruit</span>
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
                    企業の未来を支える仕事を、私たちと。
                </h2>
                <p class="p-intro__lead">
                    社会保険労務士法人D・プロデュースは、単なる事務代行の集団ではありません。お客様である企業の成長をデザインし、そこで働く人々の幸せをプロデュースするプロフェッショナル・チームです。 私たちが求めているのは、指示を待つ人ではなく、自ら考え、チームで高め合える仲間です。変化の激しい時代だからこそ、最新のテクノロジーを駆使し、専門性を武器に、お客様の「夢」を共に叶える。そんな刺激的でやりがいのあるステージが、ここにあります。
                </p>
            </div>
        </div>
    </section>

    <!-- D・プロデュースで働く魅力 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">WHY JOIN US</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースで働く魅力</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/support-img2.jpg" alt="サポートのイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">チーム制でのサポート</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            「一人の知識には限界がある」というのが私たちの考えです。D・プロデュースでは、お客様1社に対して5名のチームで対応します。経験豊富な先輩が常にバックアップし、成功事例やノウハウをリアルタイムに共有。困ったときはすぐに相談し合える、孤独にならない環境があなたの成長を加速させます。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/personal-evaluation-img2.jpg" alt="DXのイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">DX・ITを標準装備</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            私たちは業界内でもいち早くDX化を推進してきました。SlackやChatworkでの迅速なコミュニケーション、最新のクラウド人事労務ソフトのフル活用など、アナログな作業を徹底して効率化しています。煩雑な事務に忙殺されるのではなく、コンサルティングや課題解決といった「人にしかできない付加価値の高い業務」に集中できる環境です。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/training.jpg" alt="成長できる環境のイメージ">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">成長を支援する環境</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            資格取得の支援はもちろん、定期的な社内勉強会や外部セミナーへの参加も積極的に推奨しています。最新の法改正情報から高度なコンサルティング手法まで、常にインプットを絶やさない文化があります。プロフェッショナルとして市場価値を高めたいという意欲を、組織全体で全力でバックアップします。
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- 募集職種 （独自コンテンツ） -->
    <section class="p-recruit__roles">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">OPEN ROLES</span>
                <h2 class="c-section-heading__title-ja">/ 募集職種</h2>
            </div>

            <!-- 職種リスト -->
            <ol class="p-recruit__roles-list">
                <!-- 1. 社会保険労務士 -->
                <li class="p-recruit__roles-item">
                    <div class="p-recruit__roles-item-head">
                        <span class="p-recruit__roles-item-num">1</span>
                        <h3 class="p-recruit__roles-item-title">社会保険労務士</h3>
                    </div>
                    <ul class="p-recruit__roles-sub-list">
                        <li class="p-recruit__roles-sub-item">
                            <figure class="p-recruit__roles-sub-img"><img src="<?php bloginfo('template_url'); ?>/img/recruit-img1.jpg" alt="仕事内容のイメージ"></figure>
                            <div class="p-recruit__roles-sub-body">
                                <h4 class="p-recruit__roles-sub-title">仕事内容</h4>
                                <p class="p-recruit__roles-sub-text">
                                    顧問先企業への労務コンサルティング、就業規則の作成・改定、人事評価制度の構築支援、労働局・監督署の調査立ち会いなど。100名〜500名規模を中心とした中堅企業の「組織課題」を解決するディレクターとして活躍していただきます。
                                </p>
                            </div>
                        </li>
                        <li class="p-recruit__roles-sub-item">
                            <figure class="p-recruit__roles-sub-img"><img src="<?php bloginfo('template_url'); ?>/img/recruit-img2.jpg" alt="求める人物像のイメージ"></figure>
                            <div class="p-recruit__roles-sub-body">
                                <h4 class="p-recruit__roles-sub-title">求める人物像</h4>
                                <p class="p-recruit__roles-sub-text">
                                    ・社会保険労務士資格をお持ちの方、または資格取得に向けて実務経験を積みたい方。<br />
                                    ・「先生」として教えるだけでなく、お客様と同じ目線で並走できるパートナーシップを大切にできる方。<br />・変化を楽しみ、新しいITツールや知識を積極的に取り入れられる方。
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="p-recruit__roles-btn-wrap">
                        <a href="#advisor" class="c-btn c-btn--outline p-charge__contract-btn">
                            詳細・応募はこちらから
                        </a>
                    </div>
                </li>

                <!-- 2. 一般事務 -->
                <li class="p-recruit__roles-item">
                    <div class="p-recruit__roles-item-head">
                        <span class="p-recruit__roles-item-num">2</span>
                        <h3 class="p-recruit__roles-item-title">一般事務</h3>
                    </div>
                    <ul class="p-recruit__roles-sub-list">
                        <li class="p-recruit__roles-sub-item">
                            <figure class="p-recruit__roles-sub-img"><img src="<?php bloginfo('template_url'); ?>/img/recruit-img3.jpg" alt="仕事内容のイメージ"></figure>
                            <div class="p-recruit__roles-sub-body">
                                <h4 class="p-recruit__roles-sub-title">仕事内容</h4>
                                <p class="p-recruit__roles-sub-text">
                                    社会保険・労働保険の各種書類作成（電子申請）、給与計算の補助業務、電話・来客対応、書類管理など。5名体制のチームの一員として、正確かつスピーディーな実務処理でフロントの社労士とお客様を支える、屋台骨となる業務です。
                                </p>
                            </div>
                        </li>
                        <li class="p-recruit__roles-sub-item">
                            <figure class="p-recruit__roles-sub-img"><img src="<?php bloginfo('template_url'); ?>/img/recruit-img4.jpg" alt="求める人物像のイメージ"></figure>
                            <div class="p-recruit__roles-sub-body">
                                <h4 class="p-recruit__roles-sub-title">求める人物像</h4>
                                <p class="p-recruit__roles-sub-text">
                                    ・事務経験があり、正確で丁寧な仕事に自信がある方。<br />
                                    ・チーム全体の動きを把握し、先回りしたサポートや細やかな気配りができる方。<br />
                                    ・「ありがとう」と言われることに喜びを感じ、バックオフィスから組織の生産性を向上させたい方。
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="p-recruit__roles-btn-wrap">
                        <a href="#advisor" class="c-btn c-btn--outline">
                            詳細・応募はこちらから
                        </a>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- 働く環境・データ （独自コンテンツ） -->
    <section class="p-recruit__environment">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">ENVIRON<br class="u-visible-xs"/>MENT</span>
                <h2 class="c-section-heading__title-ja">/ 働く環境・データ</h2>
            </div>

            <div class="p-recruit__environment-table">
                <!-- テーブル -->
                <dl class="p-recruit-table">
                    <div class="p-recruit-table__item">
                        <dt class="p-recruit-table__item-head">
                            <span class="p-recruit-table__item-icon">
                                <img src="<?php bloginfo('template_url'); ?>/img/ico-map.svg" alt="" aria-hidden="true">
                            </span>
                            <span class="p-recruit-table__item-title">勤務地</span>
                        </dt>
                        <dd class="p-recruit-table__item-data">テキスト</dd>
                    </div>
                    <div class="p-recruit-table__item">
                        <dt class="p-recruit-table__item-head">
                            <span class="p-recruit-table__item-icon">
                                <img src="<?php bloginfo('template_url'); ?>/img/ico-time.svg" alt="" aria-hidden="true">
                            </span>
                            <span class="p-recruit-table__item-title">勤務時間</span>
                        </dt>
                        <dd class="p-recruit-table__item-data">テキスト</dd>
                    </div>
                    <div class="p-recruit-table__item">
                        <dt class="p-recruit-table__item-head">
                            <span class="p-recruit-table__item-icon">
                                <img src="<?php bloginfo('template_url'); ?>/img/ico-work.svg" alt="" aria-hidden="true">
                            </span>
                            <span class="p-recruit-table__item-title">雇用形態</span>
                        </dt>
                        <dd class="p-recruit-table__item-data">テキスト</dd>
                    </div>
                    <div class="p-recruit-table__item">
                        <dt class="p-recruit-table__item-head">
                            <span class="p-recruit-table__item-icon">
                                <img src="<?php bloginfo('template_url'); ?>/img/ico-calendar.svg" alt="" aria-hidden="true">
                            </span>
                            <span class="p-recruit-table__item-title">試用期間</span>
                        </dt>
                        <dd class="p-recruit-table__item-data">テキスト</dd>
                    </div>
                    <div class="p-recruit-table__item">
                        <dt class="p-recruit-table__item-head">
                            <span class="p-recruit-table__item-icon">
                                <img src="<?php bloginfo('template_url'); ?>/img/ico-life.svg" alt="" aria-hidden="true">
                            </span>
                            <span class="p-recruit-table__item-title">福利厚生</span>
                        </dt>
                        <dd class="p-recruit-table__item-data">テキスト</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- D・プロデュースをもっと知りたい方へ （独自コンテンツ） -->
    <section class="p-recruit__more">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">MORE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースをもっと知りたい方へ</h2>
            </div>

            <!-- リンク -->
            <div class="p-recruit__more-btns">
                <div class="p-recruit__more-btn">
                    <a href="#" class="p-recruit__more-btn-link">
                        <p class="p-recruit__more-btn-text">どんな人が働いてるか知りたい！</p>
                        <h3 class="p-recruit__more-btn-title">スタッフ紹介</h3>
                    </a>
                </div>
                <div class="p-recruit__more-btn">
                    <a href="#" class="p-recruit__more-btn-link">
                        <p class="p-recruit__more-btn-text">事務所の雰囲気を知りたい！</p>
                        <h3 class="p-recruit__more-btn-title">スタッフブログ</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>