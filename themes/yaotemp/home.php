<?php get_header(); ?>

<!-- ==================== トップページ FV ==================== -->
<section class="top-fv">
    <!-- 背景画像・メインコンテンツエリア -->
    <div class="top-fv__main">
        <div class="top-fv__inner">

            <!-- テキストエリア -->
            <div class="top-fv__text-box">
                <h2 class="top-fv__main-copy">
                    <span class="top-fv__main-copy-line">組織の成長を、</span><br />
                    <span class="top-fv__main-copy-line u-hidden-sm">盤石の組織力で支える。</span>
                    <span class="top-fv__main-copy-line u-visible-sm">盤石の組織力で</span><br class="u-visible-sm">
                    <span class="top-fv__main-copy-line u-visible-sm">支える。</span>
                </h2>
                <p class="top-fv__sub-copy">
                    横浜で100名〜500名規模の労務を担う。<br>
                    5人体制のチーム制で、属人化しない安定感と圧倒的なスピードを実現します。
                </p>
            </div>

        </div>

        <!-- SCROLL (PCのみ) -->
        <div class="top-fv__scroll u-hidden-sm">
            <span class="top-fv__scroll-text">SCROLL</span>
        </div>
    </div>
    <!-- INFORMATION エリア -->
    <div class="top-fv__info">
        <p class="top-fv__info-label u-hidden-sm">INFORMATION</p>
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="top-fv__info-link">
            <time class="top-fv__info-date" datetime="2026-04-01">2026.04.01</time>
            <span class="top-fv__info-title">WEBサイトをリニューアルしました。</span>
        </a>
    </div>
</section>
<!-- ==================== トップページ 特徴・実績セクション ==================== -->
<section class="p-top-features">
    <div class="p-top-features__inner">

        <!-- ===== SYSTEM ===== -->
        <div class="p-top-features__section">
            <!-- 見出しエリア (PC左寄せ / SP右寄せ) -->
            <div class="p-top-features__head">
                <div class="p-top-features__title-wrapper">
                    <h3 class="p-top-features__title">SYSTEM</h3>
                </div>
                <div class="p-top-features__line"></div>
            </div>

            <!-- コンテンツボックス -->
            <div class="p-top-features__box p-top-features__box--system">
                <div class="p-top-features__list">

                    <!-- 項目1: 対応従業員数 -->
                    <div class="p-top-features__item">
                        <h4 class="p-top-features__item-title">対応従業員数</h4>
                        <div class="p-top-features__item-content">
                            <figure class="p-top-features__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-feat-img1.png"
                                    alt="対応従業員数イメージ">
                            </figure>
                            <div class="p-top-features__item-data">
                                <p class="p-top-features__item-sub"><span
                                        class="p-top-features__item-sub-num">1</span>名〜</p>
                                <div class="p-top-features__item-number-wrap">
                                    <span class="p-top-features__item-number">5,000</span>
                                    <span class="p-top-features__item-unit">名</span>
                                </div>
                                <p class="p-top-features__item-desc">規模まで、幅広く対応</p>
                            </div>
                        </div>
                    </div>

                    <!-- 項目2: サポート体制 -->
                    <div class="p-top-features__item">
                        <h4 class="p-top-features__item-title">サポート体制</h4>
                        <div class="p-top-features__item-content">
                            <figure class="p-top-features__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-feat-img2.png"
                                    alt="サポート体制イメージ">
                            </figure>
                            <div class="p-top-features__item-data">
                                <div
                                    class="p-top-features__item-number-wrap p-top-features__item-number-wrap--baseline">
                                    <p class="p-top-features__item-sub-inline"><span
                                            class="p-top-features__item-sub-num">1</span>社につき</p>
                                    <span class="p-top-features__item-number">5</span>
                                    <span class="p-top-features__item-unit">名</span>
                                </div>
                                <p class="p-top-features__item-desc">の専任チームで手厚く対応</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ===== PERFORMANCE ===== -->
        <div class="p-top-features__section">
            <!-- 見出しエリア (PC左寄せ / SP右寄せ) -->
            <div class="p-top-features__head">
                <div class="p-top-features__title-wrapper">
                    <h3 class="p-top-features__title">PERFORMANCE</h3>
                </div>
                <div class="p-top-features__line"></div>
            </div>

            <!-- コンテンツボックス -->
            <div class="p-top-features__box p-top-features__box--performance">
                <div class="p-top-features__list">

                    <!-- 項目3: IT活用率 -->
                    <div class="p-top-features__item">
                        <h4 class="p-top-features__item-title">IT活用率 / クラウド導入率</h4>
                        <div class="p-top-features__item-content">
                            <figure class="p-top-features__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-feat-img3.png"
                                    alt="IT活用率イメージ">
                            </figure>
                            <div class="p-top-features__item-data">
                                <div class="p-top-features__item-number-wrap">
                                    <span class="p-top-features__item-number">95</span>
                                    <span class="p-top-features__item-unit">% <span
                                            class="p-top-features__item-unit-small">以上</span></span>
                                </div>
                                <p class="p-top-features__item-desc">導入から運用までサポート</p>
                            </div>
                        </div>
                    </div>

                    <!-- 項目4: 年間相談実績 -->
                    <div class="p-top-features__item">
                        <h4 class="p-top-features__item-title">年間相談実績</h4>
                        <div class="p-top-features__item-content">
                            <figure class="p-top-features__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-feat-img4.png"
                                    alt="年間相談実績イメージ">
                            </figure>
                            <div class="p-top-features__item-data">
                                <div class="p-top-features__item-number-wrap">
                                    <span class="p-top-features__item-number">1,200</span>
                                    <span class="p-top-features__item-unit">件</span>
                                </div>
                                <p class="p-top-features__item-desc">以上のご相談に対応</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- ==================== トップページ コンセプトセクション ==================== -->
<section class="p-top-concept">

    <!-- 上部装飾（縦線・SP時のドット） -->
    <div class="p-top-concept__deco"></div>

    <div class="p-top-concept__inner">
        <div class="p-top-concept__title-area">
            <figure class="p-top-concept__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept-bg.svg" alt="" aria-hidden="true">
            </figure>
            <h2 class="p-top-concept__title">
                「個」の限界を超え、<br />
                「組織」で貴社の成長をバッ<br class="u-visible-sm">クアップする。
            </h2>
        </div>
        <div class="p-top-concept__content">
            <figure class="p-top-concept__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top-concept-img.jpg" alt="チームでのミーティング風景">
            </figure>
            <div class="p-top-concept__text-box">
                <p class="p-top-concept__text">
                    労働環境が激変する現代において、人事労務の課題は一人の「先生」だけで解決できるほど単純ではなくなりました。
                </p>
                <p class="p-top-concept__text">
                    私たちＤ・プロデュースは、横浜を拠点に1名から数千名規模まで、多様な企業の航路を支えてきた独立系社労士法人です。<br>
                    最新のDXツールによる効率化と、5名1組のチーム制による盤石なサポート体制。この「組織力」こそが、私たちが多くのお客様に選ばれ続けている理由です。
                </p>
                <p class="p-top-concept__text">
                    貴社が安心して本業に集中できるよう、人事労務のプロフェッショナル集団として、スピード感を持って伴走いたします。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ==================== トップページ 課題と解決セクション ==================== -->
<section class="p-top-problem">
    <div class="p-top-problem__head-area">
        <div class="p-top-problem__bg-blue u-hidden-sm"></div>
        <div class="p-top-problem__inner">
            <div class="p-top-problem__intro">
                <div class="p-top-problem__sp-dots"></div>
                <div class="p-top-problem__intro-box">
                    <figure class="p-top-problem__intro-deco">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deco-lines.svg" alt=""
                            aria-hidden="true">
                    </figure>
                    <p class="p-top-problem__intro-text">企業の成長に伴い、人事労務の悩みは「深さ」から「広さ」へ。</p>
                </div>
            </div>

            <!-- メイン見出し -->
            <h2 class="p-top-problem__title">
                こんな<span class="p-top-problem__title-hl">労務の壁</span>を感じて<br class="u-visible-sm">いませんか？
            </h2>
        </div>
    </div>
    <div class="p-top-problem__body-area">
        <div class="p-top-problem__inner">
            <!-- 課題チェックリスト -->
            <ul class="p-top-problem__list">
                <li class="p-top-problem__item">
                    <div class="p-top-problem__item-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt=""
                            aria-hidden="true">
                    </div>
                    <p class="p-top-problem__item-text">担当社労士が1名で、連絡がつきにくくなってきた</p>
                </li>
                <li class="p-top-problem__item">
                    <div class="p-top-problem__item-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt=""
                            aria-hidden="true">
                    </div>
                    <p class="p-top-problem__item-text">法改正のたびに「具体的にどうすれば？」と後手に回っている</p>
                </li>
                <li class="p-top-problem__item">
                    <div class="p-top-problem__item-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt=""
                            aria-hidden="true">
                    </div>
                    <p class="p-top-problem__item-text">給与計算や手続きのミスが怖く、属人化が止まらない</p>
                </li>
                <li class="p-top-problem__item">
                    <div class="p-top-problem__item-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.svg" alt=""
                            aria-hidden="true">
                    </div>
                    <p class="p-top-problem__item-text">単なる「手続き代行」ではなく、組織改善の提案がほしい</p>
                </li>
            </ul>
            <div class="p-top-problem__bottom">
                <figure class="p-top-problem__arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-down-double.svg" alt=""
                        aria-hidden="true">
                </figure>
                <p class="p-top-problem__lead">
                    その課題、D・プロデュースが<br class="u-visible-sm">
                    <span class="p-top-problem__lead-hl">「組織力」</span>で解決します。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ==================== トップページ STRENGTHセクション ==================== -->
<section class="p-top-strength">
    <div class="p-top-strength__inner">

        <!-- 強みリスト -->
        <div class="p-top-strength__list">

            <!-- 01 -->
            <div class="p-top-strength__item">
                <figure class="p-top-strength__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img1.jpg" alt="チーム制サポート">
                </figure>
                <div class="p-top-strength__content">
                    <div class="p-top-strength__head">
                        <div class="p-top-strength__label-wrap">
                            <span class="p-top-strength__label">STRENGTH.01</span>
                            <span class="p-top-strength__line"></span>
                        </div>
                        <h3 class="p-top-strength__title">属人化を排除し、継続性を担保する<br>「チーム制サポート」</h3>

                        <figure class="p-top-strength__number  p-top-strength__number--small">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
                                aria-hidden="true">
                        </figure>

                    </div>
                    <p class="p-top-strength__desc">
                        「担当者が不在で連絡がつかない」「退職して業務が不透明になった」――そんなリスクを、私たちは仕組みで解決します。<br>
                        Ｄ・プロデュースでは、お客様1社に対してメイン・サブを含む5名の専任チームを編成。情報共有を徹底することで、誰が対応しても変わらない高品質なサービスを提供します。属人化を排除したこの体制は、特に安定した運用が求められる中堅・大企業のお客様から高い信頼をいただいています。
                    </p>
                </div>
            </div>

            <!-- 02 (リバース配置) -->
            <div class="p-top-strength__item p-top-strength__item--reverse">
                <figure class="p-top-strength__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img2.jpg" alt="圧倒的なレスポンス">
                </figure>
                <div class="p-top-strength__content">
                    <div class="p-top-strength__head">
                        <div class="p-top-strength__label-wrap">
                            <span class="p-top-strength__label">STRENGTH.02</span>
                            <span class="p-top-strength__line"></span>
                        </div>
                        <h3 class="p-top-strength__title">経営の速度を落とさない、<br>圧倒的なレスポンス</h3>

                        <figure class="p-top-strength__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
                                aria-hidden="true">
                        </figure>

                    </div>
                    <p class="p-top-strength__desc">
                        労務のトラブルや疑問は、時間が経つほど深刻化します。私たちは「スピードこそが最大の付加価値」と考えます。<br>
                        チャットツール（SLACK/CHATWORK/TEAMS等）やZOOMを標準活用し、場所や時間に縛られないリアルタイムなコミュニケーションを実現。日々の些細な相談から緊急事態まで、意思決定を妨げない迅速なレスポンスを徹底し、貴社のビジネススピードを人事面から加速させます。
                    </p>
                </div>
            </div>

            <!-- 03 -->
            <div class="p-top-strength__item">
                <figure class="p-top-strength__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img3.jpg"
                        alt="100名〜数千名規模を支える">
                </figure>
                <div class="p-top-strength__content">
                    <div class="p-top-strength__head">
                        <div class="p-top-strength__label-wrap">
                            <span class="p-top-strength__label">STRENGTH.03</span>
                            <span class="p-top-strength__line"></span>
                        </div>
                        <h3 class="p-top-strength__title">100名〜数千名規模を支える<br>「DX×専門知」</h3>

                        <figure class="p-top-strength__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number3.svg" alt=""
                                aria-hidden="true">
                        </figure>

                    </div>
                    <p class="p-top-strength__desc">
                        創業期のスタートアップから数千名規模の大企業まで。フェーズに合わせた最適なソリューションをプロデュースします。<br>
                        最新のクラウド人事労務ソフトやAIツールを駆使し、大規模企業の複雑な給与計算や社会保険手続きも、ミスなく効率的に処理します。単なる事務代行に留まらず、各フェーズで直面する「組織の壁」を突破するための最適なインフラ構築を、確かな実務経験に基づきご提案します。
                    </p>
                </div>
            </div>

            <!-- 04 (リバース配置) -->
            <div class="p-top-strength__item p-top-strength__item--reverse">
                <figure class="p-top-strength__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img4.jpg" alt="実践支援">
                </figure>
                <div class="p-top-strength__content">
                    <div class="p-top-strength__head">
                        <div class="p-top-strength__label-wrap">
                            <span class="p-top-strength__label">STRENGTH.04</span>
                            <span class="p-top-strength__line"></span>
                        </div>
                        <h3 class="p-top-strength__title">「知っている」を「使える」に<br>変える実践支援</h3>

                        <figure class="p-top-strength__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number4.svg" alt=""
                                aria-hidden="true">
                        </figure>

                    </div>
                    <p class="p-top-strength__desc">
                        法改正の通知を受け取るだけの関係は、もう終わりにしませんか。私たちは、最新の法改正や労務トレンドを実務でどう活かすべきか、具体的なアクションプランとして提示します。<br>
                        定期的な勉強会の開催や人事評価制度の構築、労務監査（DD）など、組織の守りを固めつつ攻めの姿勢を支える提案により、貴社の人事担当者が自ら組織を改善していける「自走する力」を支援します。
                    </p>
                </div>
            </div>

            <!-- 05 -->
            <div class="p-top-strength__item">
                <figure class="p-top-strength__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img5.jpg" alt="労働保険事務組合">
                </figure>
                <div class="p-top-strength__content">
                    <div class="p-top-strength__head">
                        <div class="p-top-strength__label-wrap">
                            <span class="p-top-strength__label">STRENGTH.05</span>
                            <span class="p-top-strength__line"></span>
                        </div>
                        <h3 class="p-top-strength__title">厚労大臣認可の<br>労働保険事務組合を運営</h3>

                        <!-- ▼ 数字をSVG画像に変更 ▼ -->
                        <figure class="p-top-strength__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number5.svg" alt=""
                                aria-hidden="true">
                        </figure>

                    </div>
                    <p class="p-top-strength__desc">
                        労働保険事務組合を併設・運営している社会保険労務士（社労士）事務所に労務を依頼する最大のメリットは、「事業主自身の労災加入が可能になること」と「労働保険料の分割納付が可能になること」です。<br>
                        本来、社労士個人では提供できない「事務組合独自の法的特典」を、社労士としての専門知識を活かしながらワンストップで享受できる点が強みです。
                    </p>
                </div>
            </div>

        </div>

        <!-- 以下、アコーディオンエリア等は変更なしのため省略せずにそのまま記載してください -->
        <div class="p-top-strength__accordion-wrap">
            <!-- アイテム1 -->
            <div class="p-top-strength__accordion ">
                <button class="p-top-strength__accordion-trigger ">
                    <span class="p-top-strength__accordion-title">1. 事業主・役員の「労災保険」への特別加入</span>
                    <span class="p-top-strength__accordion-btn">
                        <span class="p-top-strength__accordion-btn-text u-hidden-sm">詳しく見る</span>
                        <span class="p-top-strength__accordion-icon"></span>
                    </span>
                </button>
                <div class="p-top-strength__accordion-content">
                    <div class="p-top-strength__accordion-inner">
                        <p class="p-top-strength__accordion-text">
                            原則として、社長や役員、家族従事者は「労働者」ではないため労災保険の対象外です。しかし、労働保険事務組合に事務委託をすることで、中小事業主等として労災保険に特別加入できるようになります。
                        </p>
                        <ul class="p-top-strength__accordion-sublist">
                            <li>現場仕事や移動中の事故など、経営者の万が一の際にも労働者と同様の補償が受けられます。</li>
                            <li>建設業などの一人親方や中小事業主にとって、現場入場条件として特別加入が必須となるケースでもスムーズに対応可能です。<span
                                    class="u-hidden-sm"></span>一人親方建設業共済会</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- アイテム2 -->
            <div class="p-top-strength__accordion ">
                <button class="p-top-strength__accordion-trigger ">
                    <span class="p-top-strength__accordion-title">2. 労働保険料の「3回分割納付」が可能</span>
                    <span class="p-top-strength__accordion-btn">
                        <span class="p-top-strength__accordion-btn-text u-hidden-sm">詳しく見る</span>
                        <span class="p-top-strength__accordion-icon"></span>
                    </span>
                </button>
                <div class="p-top-strength__accordion-content">
                    <div class="p-top-strength__accordion-inner">
                        <p class="p-top-strength__accordion-text">
                            通常、労働保険料の額が一定（40万円以上など）を超えない限り分割納付は認められませんが、事務組合に委託すれば、金額に関わらず3回に分けて納付できます。
                        </p>
                        <ul class="p-top-strength__accordion-sublist">
                            <li>キャッシュフローの安定化に寄与します。</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- アイテム3 -->
            <div class="p-top-strength__accordion ">
                <button class="p-top-strength__accordion-trigger ">
                    <span class="p-top-strength__accordion-title">3. 社労士の専門性と事務組合の機能を一元化</span>
                    <span class="p-top-strength__accordion-btn">
                        <span class="p-top-strength__accordion-btn-text u-hidden-sm">詳しく見る</span>
                        <span class="p-top-strength__accordion-icon"></span>
                    </span>
                </button>
                <div class="p-top-strength__accordion-content">
                    <div class="p-top-strength__accordion-inner">
                        <p class="p-top-strength__accordion-text">
                            事務組合には「労災給付の請求（事故が起きた時の手続き）」ができないという法律上の制限がありますが、運営が社労士事務所であれば、その制限を補完できます。
                        </p>
                        <ul class="p-top-strength__accordion-sublist">
                            <li><strong>事務組合の利点:</strong> 特別加入や分割納付などの「制度上のメリット」を利用。</li>
                            <li><strong>社労士の利点:</strong>
                                事務組合では扱えない「社会保険（健保・厚年）の手続き」や「助成金の申請」「就業規則の作成」といった高度なコンサルティングを直接依頼。</li>
                            <li>窓口が一つになるため、情報の二重伝達が不要になり、管理コストを大幅に削減できます。</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- アイテム4 -->
            <div class="p-top-strength__accordion ">
                <button class="p-top-strength__accordion-trigger ">
                    <span class="p-top-strength__accordion-title">4. 事務処理の正確性とリスク回避</span>
                    <span class="p-top-strength__accordion-btn">
                        <span class="p-top-strength__accordion-btn-text u-hidden-sm">詳しく見る</span>
                        <span class="p-top-strength__accordion-icon"></span>
                    </span>
                </button>
                <div class="p-top-strength__accordion-content">
                    <div class="p-top-strength__accordion-inner">
                        <p class="p-top-strength__accordion-text">
                            社労士系の事務組合は、労働法の専門家が実務を統括しているため、一般的な商工会等の事務組合と比較して実務上の判断がより的確である場合が多いです。
                        </p>
                        <ul class="p-top-strength__accordion-sublist">
                            <li>法改正への迅速な対応や、雇用保険のトラブル防止など、経営リスクの軽減に直結します。</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- 最下部ボタン -->
        <div class="p-top-strength__btn-wrap">
            <a href="<?php echo esc_url( home_url( '/reason/' ) ); ?>" class="c-btn c-btn--outline p-top-strength__btn">
                選ばれる理由を詳しく見る
            </a>
        </div>
    </div>
</section>
<!-- ==================== トップページ SERVICEセクション ==================== -->
<section class="p-top-service">
    <div class="p-top-service__inner">

        <!-- ===== ヘッダーエリア ===== -->
        <div class="p-top-service__header">
            <!-- タイトル装飾・見出し -->
            <div class="p-top-service__title-area">
                <div class="p-top-service__deco">
                    <span class="p-top-service__deco-light"></span>
                    <span class="p-top-service__deco-dark"></span>
                </div>
                <div class="p-top-service__title-wrap">
                    <h2 class="p-top-service__title-en">SERVICE</h2>
                    <span class="p-top-service__title-ja">/ サービス紹介</span>
                </div>
            </div>

            <!-- リードテキスト -->
            <div class="p-top-service__text-area">
                <p class="p-top-service__lead">
                    人事労務をトータルプロデュース。<br>
                    貴社のフェーズに最適な支援を。
                </p>
                <p class="p-top-service__desc">
                    日常の手続きから、組織の命運を分ける戦略的な人事制度の構築まで。<br>
                    1名から数千名規模までを支える豊富なメニューで、貴社の成長フェーズに合わせたオーダーメイドの解決策を提示します。
                </p>
            </div>
        </div>

        <!-- ===== タブコンテンツエリア ===== -->
        <div class="p-top-service__tab-area">

            <ul class="p-top-service__tab-list js-tab-list">
                <li class="p-top-service__tab-item is-active" data-tab="tab-outsourcing">
                    <button class="p-top-service__tab-btn">基幹・アウトソーシング</button>
                </li>
                <li class="p-top-service__tab-item" data-tab="tab-consulting">
                    <button class="p-top-service__tab-btn">組織改善<span class="u-hidden-sm">・</span><br
                            class="u-visible-sm" />コンサルティング</button>
                </li>
                <li class="p-top-service__tab-item" data-tab="tab-education">
                    <button class="p-top-service__tab-btn">戦略・教育</button>
                </li>
            </ul>

            <div class="p-top-service__panel-wrapper">

                <div class="p-top-service__panel is-active" id="tab-outsourcing">
                    <div class="p-top-service__card-list">

                        <!-- カード1 -->
                        <a href="<?php echo esc_url( home_url( '/service/startup/' ) ); ?>" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">創業支援パック</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                スタートアップの足場を固める。法人設立時に必要な社会保険手続きから、助成金の活用提案、労働環境の整備まで、事業立ち上げ期に必要な労務をワンストップで支援します。</p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード2 -->
                        <a href="<?php echo esc_url( home_url( '/service/disability-pension/' ) ); ?>"
                            class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">障害年金サポート</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                働く人の「もしも」を支える。病気やケガで就労が困難になった際、専門的な知識と経験を持つ社労士が、申請から受給まで複雑な手続きを親身にサポートします。</p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード3 -->
                        <a href="<?php echo esc_url( home_url( '/service/payroll/' ) ); ?>" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">給与計算代行</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                1名から数千名規模まで対応。ミスが許されない給与計算を、最新のDXツールと二重三重のチェック体制で正確かつ迅速に遂行し、貴社をルーチンワークから解放します。</p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード4 -->
                        <a href="<?php echo esc_url( home_url( '/service/social-insurance/' ) ); ?>"
                            class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">労働・社会保険事務代行</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                煩雑な手続きをプロに一任。入退社時の手続きから年度更新、算定基礎届まで、正確かつスピーディーに処理し、行政対応の負担とリスクを最小限に抑えます。</p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                    </div>
                </div>

                <div class="p-top-service__panel" id="tab-consulting">
                    <div class="p-top-service__card-list">

                        <!-- カード1：就業規則サポート -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">就業規則サポート</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                「守り」から「攻め」のルールへ。最新の法改正対応はもちろん、貴社の企業文化を反映し、従業員が安心して力を発揮できる「組織の憲法」を構築します。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード2：人事評価制度構築 -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">人事評価制度構築</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                「形だけ」で終わらせない制度設計。貴社のビジョンに連動した評価基準を策定し、社員のモチベーション向上と次世代リーダーの育成を強力に後押しします。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード3：労務トラブル相談 -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">労務トラブル相談</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                未然に防ぐ、起きたら迅速に解決する。解雇、ハラスメント、未払い残業代など、複雑な労務問題に対して、豊富な実務経験に基づき法的・実務的な最適解を提示します。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード4：SRS診断（職場環境診断） -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">SRS診断（職場環境診断）</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                組織の「健康状態」を可視化。独自の診断ツールを用いて職場の強みと課題を分析し、離職防止や生産性向上に向けた具体的な改善アクションを導き出します。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                    </div>
                </div>

                <div class="p-top-service__panel" id="tab-education">
                    <div class="p-top-service__card-list">
                        <!-- カード5：労務監査・労務DD -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">労務監査<br>労務DD(デューデリジェンス)</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                IPO準備やM&A、取引先選定の信頼の証に。潜在的な労務リスクをプロの視点で徹底調査し、改善提案を行うことで、企業の社会的信用と価値を高めます。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード6：社員研修 -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">社員研修</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                知識を「行動」に変える。ハラスメント防止、管理職教育、インシビリティ研修など、組織の課題に合わせた実践的なカリキュラムで、自走できる組織文化を醸成します。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>

                        <!-- カード7：企業拠出年金 -->
                        <a href="<?php bloginfo('url'); ?>/works/" class="p-top-service__card">
                            <div class="p-top-service__card-head">
                                <span class="p-top-service__card-dot"></span>
                                <h3 class="p-top-service__card-title">企業拠出年金</h3>
                            </div>
                            <p class="p-top-service__card-text">
                                福利厚生の充実と節税の両立。中小企業でも導入可能な確定拠出年金の設計から導入後の継続教育までサポートし、従業員の資産形成と採用力の強化を支援します。
                            </p>
                            <span class="p-top-service__card-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ==================== トップページ MODEL CASEセクション ==================== -->
<section class="p-top-case">
    <div class="p-top-case__inner">

        <!-- ===== ヘッダーエリア ===== -->
        <div class="p-top-case__header">
            <div class="p-top-case__deco">
                <span class="p-top-case__deco-light"></span>
                <span class="p-top-case__deco-dark"></span>
            </div>
            <h2 class="p-top-case__title-en">MODEL CASE</h2>
            <span class="p-top-case__title-ja">/ モデルケース紹介</span>
            <p class="p-top-case__desc">
                実際にＤ・プロデュースがどのように企業の労務課題に向き合い、改善へと導いたのか。<br>
                給与計算の効率化から複雑な労務トラブルの解消まで、具体的な支援プロセスと成果を詳しくご紹介します。
            </p>
        </div>

        <!-- ===== スライダーエリア ===== -->
        <div class="p-top-case__slider-wrap">
            <div class="p-top-case__slider js-case-slider">

                <!-- スライド 1 -->
                <a href="" class="p-top-case__slide">
                    <div class="p-top-case__slide-inner">
                        <div class="p-top-case__left">
                            <figure class="p-top-case__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                    alt="モデルケースのイメージ画像">
                            </figure>
                            <figure class="p-top-case__bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <!-- 右側：テキストコンテンツ -->
                        <div class="p-top-case__content">
                            <span class="p-top-case__cat">カテゴリ名</span>
                            <h3 class="p-top-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-case__slide-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>

                    </div>
                </a>

                <!-- スライド 2 (デモ用に複製) -->
                <a href="" class="p-top-case__slide">
                    <div class="p-top-case__slide-inner">
                        <div class="p-top-case__left">
                            <figure class="p-top-case__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                    alt="モデルケースのイメージ画像">
                            </figure>
                            <figure class="p-top-case__bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <div class="p-top-case__content">
                            <span class="p-top-case__cat">別のカテゴリ</span>
                            <h3 class="p-top-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-case__slide-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </div>
                </a>

                <a href="" class="p-top-case__slide">
                    <div class="p-top-case__slide-inner">
                        <div class="p-top-case__left">
                            <figure class="p-top-case__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-img1.jpg"
                                    alt="モデルケースのイメージ画像">
                            </figure>
                            <figure class="p-top-case__bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-case-bg.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <div class="p-top-case__content">
                            <span class="p-top-case__cat">カテゴリ名</span>
                            <h3 class="p-top-case__slide-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-case__slide-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </div>
                    </あ>

            </div>
        </div>

        <!-- ===== もっと見るボタン ===== -->
        <div class="p-top-case__btn-wrap">
            <a href="<?php echo esc_url( home_url( '/case/' ) ); ?>" class="c-btn c-btn--outline">
                もっと見る
            </a>
        </div>
    </div>
</section>
<!-- ==================== トップページ VOICESセクション ==================== -->
<section class="p-top-voices">
    <div class="p-top-voices__inner">

        <!-- ===== ヘッダーエリア ===== -->
        <div class="p-top-voices__header">
            <div class="p-top-voices__deco">
                <span class="p-top-voices__deco-light"></span>
                <span class="p-top-voices__deco-dark"></span>
            </div>
            <h2 class="p-top-voices__title-en">VOICES</h2>
            <span class="p-top-voices__title-ja">/ お客様の声</span>
            <p class="p-top-voices__desc">
                共に歩むパートナーとして、信頼の言葉をいただいています。<br>
                実際にサービスを導入されている経営者様や人事担当者様から寄せられた、生の声をご紹介します。
            </p>
        </div>

        <!-- ===== スライダーエリア ===== -->
        <div class="p-top-voices__slider-wrap">

            <!-- スライダー本体 -->
            <div class="p-top-voices__slider js-voices-slider">

                <!-- スライド 1 -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/1/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice1.jpg" alt="">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>

                <!-- スライド 2 -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/2/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice2.jpg"
                                alt="サムネイル画像">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>

                <!-- スライド 3 -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/3/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice3.jpg"
                                alt="サムネイル画像">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>

                <!-- スライド 4 (ループ確認用) -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/4/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice1.jpg"
                                alt="サムネイル画像">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>
                <!-- スライド 5 -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/2/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice2.jpg"
                                alt="サムネイル画像">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>

                <!-- スライド 6 -->
                <div class="p-top-voices__slide">
                    <a href="<?php echo esc_url( home_url( '/voice/3/' ) ); ?>" class="p-top-voices__card">
                        <figure class="p-top-voices__card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-voice3.jpg"
                                alt="サムネイル画像">
                        </figure>
                        <div class="p-top-voices__card-body">
                            <span class="p-top-voices__card-cat">カテゴリ名</span>
                            <h3 class="p-top-voices__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                            <p class="p-top-voices__card-text">
                                本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- SP用 プログレスバー (FigmaのSVGデザインをCSSで再現) -->
            <div class="p-top-voices__progress-wrap u-visible-sm" aria-hidden="true">
                <span class="p-top-voices__progress-bg"></span>
                <!-- ここのwidthがJSで変化して青いバーが伸びる -->
                <span class="p-top-voices__progress-line js-voices-progress"></span>
            </div>

        </div>

        <!-- ===== もっと見るボタン ===== -->
        <div class="p-top-voices__btn-wrap">
            <a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>" class="c-btn c-btn--outline">
                もっと見る
            </a>
        </div>
</section>
<!-- ==================== トップページ SEMINARセクション ==================== -->
<section class="p-top-seminar">
    <div class="p-top-seminar__inner">

        <!-- ===== 左カラム：ヘッダー・テキストエリア ===== -->
        <div class="p-top-seminar__text-area">
            <h2 class="p-top-seminar__title-en">SEMINAR</h2>
            <span class="p-top-seminar__title-ja">/ セミナー情報</span>
            <p class="p-top-seminar__desc">
                最新の知見を、組織の「自走する力」に変える。<br>
                法改正への対応から、明日から使えるマネジメントのコツまで。<br>
                Ｄ・プロデュースでは、最新の労務トレンドを実務に落とし込むための勉強会やセミナーを随時開催しています。
            </p>

            <!-- もっと見るボタン -->
            <div class="p-top-seminar__btn-wrap">
                <a href="" class="c-btn c-btn--outline c-btn--outline-white">
                    もっと見る
                </a>
            </div>
        </div>

        <!-- ===== 右カラム：スライダーエリア ===== -->
        <div class="p-top-seminar__slider-area">

            <!-- スライダー本体 -->
            <div class="p-top-seminar__slider js-seminar-slider">

                <!-- スライド 1 -->
                <div class="p-top-seminar__slide">
                    <a href="" class="p-top-seminar__card">
                        <!-- カード左側（画像） -->
                        <figure class="p-top-seminar__card-img">
                            <span class="p-top-seminar__card-label">募集中</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-seminar.jpg" alt="">
                        </figure>

                        <!-- カード右側（テキスト・情報） -->
                        <div class="p-top-seminar__card-body">
                            <span class="p-top-seminar__card-cat">カテゴリ名</span>
                            <h3 class="p-top-seminar__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>

                            <div class="p-top-seminar__card-line"></div>

                            <dl class="p-top-seminar__card-info">
                                <div class="p-top-seminar__card-info-row">
                                    <dt class="p-top-seminar__card-dt">開催日時</dt>
                                    <dd class="p-top-seminar__card-dd">2026.01.01-2026.01.01</dd>
                                </div>
                                <div class="p-top-seminar__card-info-row">
                                    <dt class="p-top-seminar__card-dt">開催場所</dt>
                                    <dd class="p-top-seminar__card-dd">
                                        住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト住所テキスト</dd>
                                </div>
                            </dl>
                        </div>
                    </a>
                </div>

                <!-- スライド 2 (ループ動作用ダミー) -->
                <div class="p-top-seminar__slide">
                    <a href="" class="p-top-seminar__card">
                        <figure class="p-top-seminar__card-img">
                            <span class="p-top-seminar__card-label" style="background-color: #999;">受付終了</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-seminar.jpg" alt="">
                        </figure>
                        <div class="p-top-seminar__card-body">
                            <span class="p-top-seminar__card-cat">カテゴリ名</span>
                            <h3 class="p-top-seminar__card-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイト</h3>
                            <div class="p-top-seminar__card-line"></div>
                            <dl class="p-top-seminar__card-info">
                                <div class="p-top-seminar__card-info-row">
                                    <dt class="p-top-seminar__card-dt">開催日時</dt>
                                    <dd class="p-top-seminar__card-dd">2026.02.01-2026.02.01</dd>
                                </div>
                                <div class="p-top-seminar__card-info-row">
                                    <dt class="p-top-seminar__card-dt">開催場所</dt>
                                    <dd class="p-top-seminar__card-dd">オンライン（Zoom配信）</dd>
                                </div>
                            </dl>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- ==================== トップページ 資料請求CTAセクション ==================== -->
<section class="p-top-document">
    <div class="p-top-document__inner">
        <!-- 左側：画像エリア -->
        <figure class="p-top-document__img u-hidden-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-document-img.png" alt="D・プロデュース独自の資料">
        </figure>
        <div class="p-top-document__content">

            <div class="p-top-document__heading">
                <figure class="p-top-document__img u-visible-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-document-img.png" alt="D・プロデュース独自の資料">
                </figure>

                <h2 class="p-top-document__title">
                    <span class="p-top-document__title-hl">強い組織づくり</span>に役立つ、<br class="u-visible-sm">実務ノウハウを無料で。
                </h2>
            </div>

            <p class="p-top-document__text">
                法改正への対応、複雑な給与計算の効率化、労務リスクの回避――。<br>
                現場で即活用できるD・プロデュース独自の資料をご用意しました。貴社のスムーズな人事労務運営にお役立てください。
            </p>

            <div class="p-top-document__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/document/' ) ); ?>" class="p-top-document__btn">
                    資料請求はこちら
                </a>
            </div>

        </div>

    </div>
</section>
<!-- ==================== トップページ BLOGS & COLUMNS セクション ==================== -->
<section class="p-top-blogs">

    <!-- ==================== 左側：BLOGSエリア ==================== -->
    <div class="p-top-blogs__col p-top-blogs__col--blogs">
        <div class="p-top-blogs__content">

            <!-- 見出し -->
            <div class="p-top-blogs__header">
                <h2 class="p-top-blogs__title-en">BLOGS</h2>
                <span class="p-top-blogs__title-ja">/ スタッフブログ</span>
            </div>

            <!-- 記事リスト -->
            <div class="p-top-blogs__list">

                <a href="<?php echo esc_url( home_url( '/blogs/1/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

                <a href="<?php echo esc_url( home_url( '/blogs/2/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

                <a href="<?php echo esc_url( home_url( '/blogs/3/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

            </div>

            <!-- もっと見るボタン -->
            <div class="p-top-blogs__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>" class="c-btn c-btn--outline">もっと見る</a>
            </div>

        </div>
    </div>


    <!-- ==================== 右側：COLUMNSエリア ==================== -->
    <div class="p-top-blogs__col p-top-blogs__col--columns">
        <div class="p-top-blogs__content">

            <!-- 見出し -->
            <div class="p-top-blogs__header">
                <h2 class="p-top-blogs__title-en">COLUMNS</h2>
                <span class="p-top-blogs__title-ja">/ お役立ちブログ</span>
            </div>

            <!-- 記事リスト -->
            <div class="p-top-blogs__list">

                <a href="<?php echo esc_url( home_url( '/columns/1/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

                <a href="<?php echo esc_url( home_url( '/columns/2/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

                <a href="<?php echo esc_url( home_url( '/columns/3/' ) ); ?>" class="p-top-blogs__item">
                    <figure class="p-top-blogs__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-blog.jpg" alt="">
                    </figure>
                    <div class="p-top-blogs__item-body">
                        <time class="p-top-blogs__item-date" datetime="2024-01-01">2024.00.00</time>
                        <h3 class="p-top-blogs__item-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                    </div>
                </a>

            </div>

            <!-- もっと見るボタン -->
            <div class="p-top-blogs__btn-wrap">
                <a href="<?php echo esc_url( home_url( '/columns/' ) ); ?>" class="c-btn c-btn--outline">もっと見る</a>
            </div>

        </div>
    </div>

</section>
<section class="p-reports">
    <div class="p-reports__inner">
        <!-- タイトルエリア -->
        <div class="p-reports__header">
            <h2 class="p-reports__title">REPORTS</h2>
            <p class="p-reports__subtitle">/ セミナー開催レポート</p>
        </div>

        <!-- リストエリア -->
        <div class="p-reports__list">
            <!-- 記事アイテム 1 -->
            <a href="<?php bloginfo('url'); ?>/works/" class="p-reports__item">
                <div class="p-reports__thumb">
                    <!-- プレースホルダー画像等を配置 -->
                    <img src="<?php bloginfo('template_url');?>/img/placeholder-report.jpg" alt="レポートサムネイル">
                </div>
                <div class="p-reports__body">
                    <time class="p-reports__date" datetime="2024-00-00">2024.00.00</time>
                    <h3 class="p-reports__text">
                        タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル
                    </h3>
                </div>
            </a>

            <!-- 記事アイテム 2 -->
            <a href="<?php bloginfo('url'); ?>/works/" class="p-reports__item">
                <div class="p-reports__thumb">
                    <img src="<?php bloginfo('template_url');?>/img/placeholder-report.jpg" alt="レポートサムネイル">
                </div>
                <div class="p-reports__body">
                    <time class="p-reports__date" datetime="2024-00-00">2024.00.00</time>
                    <h3 class="p-reports__text">
                        タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル
                    </h3>
                </div>
            </a>

            <!-- 記事アイテム 3 -->
            <a href="<?php bloginfo('url'); ?>/works/" class="p-reports__item">
                <div class="p-reports__thumb">
                    <img src="<?php bloginfo('template_url');?>/img/placeholder-report.jpg" alt="レポートサムネイル">
                </div>
                <div class="p-reports__body">
                    <time class="p-reports__date" datetime="2024-00-00">2024.00.00</time>
                    <h3 class="p-reports__text">
                        タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル
                    </h3>
                </div>
            </a>
        </div>

        <!-- ボタンエリア -->
        <div class="p-reports__btn-wrapper">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn c-btn--outline">もっと見る</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>