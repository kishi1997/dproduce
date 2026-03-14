<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>
<?php if (is_home()) : ?>

<!--　body Start-->

<body class="top">
    <?php else : ?>
    <!--　body Start-->
    <body<?php fit_body_class();?>>
        <?php endif; ?>

        <!-- ==================== ヘッダー ==================== -->
        <header class="l-header p-header">
            <div class="p-header__inner">

                <!-- ロゴ部分（PC・SP共通ヘッダー） -->
                <?php if (is_home() || is_front_page()) : ?>
                <h1 class="p-header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                        alt="<?php bloginfo('name'); ?>">
                </h1>
                <?php else : ?>
                <div class="p-header__logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                            alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <?php endif; ?>

                <div class="p-header__right">
                    <!-- PC用コンタクト -->
                    <div class="p-header__contact-area">
                        <div class="p-header__contact u-hidden-pc">
                            <div class="p-header__tel-box">
                                <p class="p-header__tel-num"><span>TEL</span>045-226-5482</p>
                                <p class="p-header__tel-time">受付時間 9:00〜18:00 (土日祝休)</p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                                class="c-btn c-btn--orange p-header__btn-contact">
                                <span class="c-icon-mail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico-mail-shadow.svg"
                                        alt="メールアイコン">
                                </span>
                                <span>お問い合わせ</span>
                            </a>
                        </div>
                        <!-- ハンバーガーボタン (SP時表示) -->
                        <button class="p-header__hamburger c-hamburger js-drawer-open u-visible-pc"
                            aria-label="メニューを開く">
                            <span></span><span></span><span></span>
                        </button>
                    </div>
                    <!-- PC用グローバルナビ -->
                    <nav class="p-global-nav u-hidden-pc">
                        <ul class="p-global-nav__list">
                            <li class="p-global-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/beginner/' ) ); ?>">はじめての方へ</a>
                            </li>
                            <li class="p-global-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/reason/' ) ); ?>">選ばれる理由</a>
                            </li>
                            <li class="p-global-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/service/' ) ); ?>">サービスメニュー</a>
                            </li>
                            <li class="p-global-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>">セミナー情報</a>
                            </li>
                            <li class="p-global-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- ==================== ドロワーメニュー ==================== -->
        <div class="p-drawer js-drawer">
            <div class="p-drawer__overlay js-drawer-close"></div>
            <div class="p-drawer__inner">
                <!-- ドロワーヘッダー -->
                <div class="p-drawer__head">
                    <!-- ドロワー用ロゴ -->
                    <div class="p-drawer__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-blue.png"
                                alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <button class="p-drawer__close js-drawer-close" aria-label="メニューを閉じる"></button>
                </div>

                <!-- SP用上部ボタン -->
                <div class="p-drawer__sp-btns u-visible-sm">
                    <a href="tel:045-226-5482" class="c-btn c-btn--blue p-drawer__btn">
                        <span class="c-icon-tel"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-tel.svg"
                                alt="電話アイコン"></span>お電話
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                        class="c-btn c-btn--orange p-drawer__btn">
                        <span class="c-icon-mail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico-mail-shadow.svg"
                                alt="メールアイコン">
                        </span>
                        お問い合わせ
                    </a>
                </div>

                <!-- ドロワーコンテンツ -->
                <div class="p-drawer__content p-drawer-nav">
                    <!-- 1列目 (PC) / 上部 (SP) -->
                    <div class="p-drawer-nav__col">
                        <ul class="p-drawer-nav__list">
                            <li class="p-drawer-nav__item p-drawer-nav__item--current"><a
                                    href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/beginner/' ) ); ?>">はじめての方へ</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/reason/' ) ); ?>">選ばれる理由</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/flow/' ) ); ?>">ご相談の流れ</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/price/' ) ); ?>">料金案内</a></li>
                        </ul>
                    </div>

                    <!-- 2列目 (PC) / 中間 (SP) -->
                    <div class="p-drawer-nav__col">
                        <div class="p-drawer-nav__accordion js-accordion">
                            <button class="p-drawer-nav__accordion-trigger js-accordion-trigger">サービスメニュー</button>
                            <div class="p-drawer-nav__accordion-content js-accordion-content">
                                <div class="p-drawer-nav__accordion-inner">
                                    <ul class="p-drawer-nav__sub-list">
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/rules/' ) ); ?>">就業規則サポート</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/payroll/' ) ); ?>">給与計算代行</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/trouble/' ) ); ?>">労務トラブル相談</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/evaluation/' ) ); ?>">人事評価制度構築</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/startup/' ) ); ?>">創業支援パック</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/social-insurance/' ) ); ?>">労働・社会保険事務代行</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/pension/' ) ); ?>">企業拠出年金</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/training/' ) ); ?>">社員研修</a>
                                        </li>
                                        <li><a href="<?php echo esc_url( home_url( '/service/srs/' ) ); ?>">SRS診断</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/audit/' ) ); ?>">労務監査・労務DD(デューデリジェンス)</a>
                                        </li>
                                        <li><a
                                                href="<?php echo esc_url( home_url( '/service/disability-pension/' ) ); ?>">障害年金サポート</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3列目 (PC) / 下部 (SP) -->
                    <div class="p-drawer-nav__col">
                        <ul class="p-drawer-nav__list">
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/case/' ) ); ?>">モデルケース紹介</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/voice/' ) ); ?>">お客様の声</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>">セミナー情報</a></li>
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/report/' ) ); ?>">セミナー開催レポート</a></li>
                        </ul>

                        <div class="p-drawer-nav__accordion js-accordion">
                            <button class="p-drawer-nav__accordion-trigger js-accordion-trigger">ブログ</button>
                            <div class="p-drawer-nav__accordion-content js-accordion-content">
                                <div class="p-drawer-nav__accordion-inner">
                                    <ul class="p-drawer-nav__sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/column/' ) ); ?>">お役立ちコラム</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <ul class="p-drawer-nav__list">
                            <li class="p-drawer-nav__item"><a
                                    href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a></li>
                        </ul>

                        <!-- PC用下部ボタン -->
                        <div class="p-drawer__pc-btns u-hidden-sm">
                            <div class="p-drawer__pc-btns-row">
                                <a href="tel:045-226-5482" class="c-btn c-btn--blue p-drawer__btn">
                                    <span class="c-icon-tel"> <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/ico-tel.svg"
                                            alt="電話アイコン"></span>お電話
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                                    class="c-btn c-btn--orange p-drawer__btn">
                                    <span class="c-icon-mail"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/ico-mail-shadow.svg"
                                            alt="メールアイコン"></span>お問い合わせ
                                </a>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/document/' ) ); ?>"
                                class="c-btn c-btn--outline p-drawer__btn-doc">
                                資料請求はこちらから
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SP用最下部ボタン -->
                <div class="p-drawer__sp-bottom-btn u-visible-sm">
                    <a href="<?php echo esc_url( home_url( '/document/' ) ); ?>"
                        class="c-btn c-btn--outline p-drawer__btn-doc">
                        資料請求はこちらから
                    </a>
                </div>

            </div>
        </div>