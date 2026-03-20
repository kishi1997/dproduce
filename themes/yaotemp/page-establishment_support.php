<?php get_header(); ?>
<div class="p-establishment-support">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Establishment Support</span>
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
                    創業期の“わからない”を、まるごとサポート。
                </h2>
                <p class="p-intro__lead">
                    会社設立直後は、本業以外にも社会保険の新規適用や労働保険の成立、雇用契約書の作成など、不慣れで煩雑な手続きが山積みです。これらを後回しにしたり、誤った方法で行うことは、将来の法的トラブルや助成金の受給漏れといった大きなリスクに繋がります。 D・プロデュースの「創業支援パック」は、創業者が本業に100%集中できる環境を整えるためのトータルパッケージです。専門家チームが貴社の「外部人事部」として、スタートアップに必要な労務インフラを最短・最適に構築します。 従業員数が100名を超え、組織が多層化すると、従来の「感覚的な評価」では限界が訪れます。D・プロデュースが提案するのは、会社のビジョンを社員の行動へと翻訳し、自走する組織を作るための「経営インフラ」です。 私たちは、制度を作ることをゴールにせず、現場で「運用され、成果が出る」までを徹底してプロデュースします。
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

    <!-- D・プロデュースの創業支援パック３つの特長 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの創業支援パック<br />３つの特長</h2>
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
                            <h3 class="p-strength__item-title">「創業期〜成長期」を見据えた一貫サポート</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            単なるスポットの手続き代行では終わりません。将来、従業員が50名、100名と増えていく成長フェーズを見据え、拡張性のある就業規則や管理体制を最初から構築します。事業規模の変化に合わせてスムーズに組織をアップデートできるよう、長期的な視点で貴社の土台を支えます。
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
                            <h3 class="p-strength__item-title">助成金の有効活用を強力に<br />バックアップ</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            創業期は、返済不要の「助成金」を活用できる大きなチャンスです。しかし、受給には「採用前の整備」など厳格な要件が求められます。私たちは数多くの申請実績を活かし、貴社が受給できる可能性のある助成金をプロの視点で選定。要件漏れを防ぐための労務整備をセットで支援し、受給可能性を最大化します。
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
                            <h3 class="p-strength__item-title">IT・DXツールの初期導入支援</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            従業員1名の時から、クラウド勤怠や給与ソフトを導入することを推奨しています。アナログな管理が定着してからでは移行コストが膨大になるからです。私たちは、貴社の業種に最適な最新ITツールの選定から初期設定までをサポート。将来の事務コストを最小限に抑え、成長を加速させるスマートな職場環境を実現します。
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
                            <h3 class="p-point__item-title">本来取り組むべき経営・営業活動に専念できる</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            煩雑な役所への届出や書類作成といった事務作業をプロに丸投げすることで、経営者は「売上向上」や「商品開発」といった本来の業務に全エネルギーを注ぐことができます。貴重な創業期の時間を、不慣れな事務作業で浪費させません。
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
                            <h3 class="p-point__item-title">「正解」がわからない不安を解消し、コンプライアンスを担保できる</h3>

                            <figure class="p-point__number  p-top-point__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-point__desc">
                            「雇用契約書はどう書く？」「36協定って何？」といった、創業期の絶えない疑問に専門家チームが即座にお答えします。最初から法令を遵守した正しい運用を行うことで、社員からの信頼を高めるとともに、将来の労働紛争リスクを最小限に抑えることができます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 創業支援の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 創業支援の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            まずは、創業の理念や事業計画、今後の採用予定などを詳しく伺います。法人設立時の社会保険の手続きが必要か、どのような雇用形態を想定しているかなど、専門家の視点から「最初にやるべきこと」を整理します。
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
                            ヒアリングに基づき、助成金の受給可能性や、創業時に最低限整えておくべき労務書類（雇用契約書、36協定等）を特定します。貴社の予算や成長スピードに合わせた、過不足のない最適な支援プランをご提案します。
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
                            プラン内容にご納得いただけましたら、正式にサポートを開始します。専任のチームを編成し、役所への届出スケジュールやITツールの導入フローを確認。経営者が本業に集中できるバックオフィス体制を速やかに構築します。
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
                            決定したスケジュールに沿って、社会保険の新規適用手続きや就業規則の作成、助成金の申請準備を一括して代行します。運用開始後も、採用や労務に関する疑問にチャット等で即座にお答えし、貴社のスタートダッシュを強力にバックアップします。
                        </p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <!-- 商品概要（独自セクション） -->
    <section class="p-establishment-support__about">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">PRODUCT</span>
                <h2 class="c-section-heading__title-ja">/ 商品概要</h2>
            </div>
            <div class="p-establishment-support__about-content">
                <div class="p-establishment-support__about-img"><img src="<?php echo get_template_directory_uri(); ?>/img/product-summary-img.jpg" alt="創業支援パックの対象となる企業の図解"></div>
                <div class="p-establishment-support__about-body">
                    <h3 class="p-establishment-support__about-title">適応条件</h3>
                    <p class="p-establishment-support__about-requirements">法人設立1年未満かつ社員数5人以下</p>
                    <p class="p-establishment-support__about-note">
                        ※役員、パートアルバイトを含みます。<br />
                        ※上記要件を満たさなくなった時点で、通常料金へ移行となります。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス一覧（独自セクション） -->
    <section class="p-establishment-support__service">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SERVICE</span>
                <h2 class="c-section-heading__title-ja">/ サービス一覧</h2>
            </div>
            <ul class="p-establishment-support__service-list">
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-consult1.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">創業無料相談</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-document1.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">保険関係成立届</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-document1.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">労働保険概算保険料申告書</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-document1.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">雇用保険適用事業所設置届</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-business-person.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">社会保険新規適用</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-check-list.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">就業規則本作成</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-yen.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">賃金規定作成</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-consult2.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">顧問業務</p>
                </li>
                <li class="p-establishment-support__service-item">
                    <div class="p-establishment-support__service-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-calc.svg" alt=""></div>
                    <p class="p-establishment-support__service-item-title">給与計算業務</p>
                </li>
            </ul>
            <p class="p-establishment-support__service-note">
                ※1　弊社事務所での相談に限ります。<br />
                ※2　弊社ひな型を使用します。<br />
                ※3　人事労務相談、行政手続き支援（事業運営において通常発生しうるものに限ります）<br />
                ※4　年3回までの賞与計算を含みます。
            </p>
        </div>
    </section>

    <!-- 事業紹介（独自セクション） -->
    <section class="p-establishment-support__business">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">OUR BUSINESS</span>
                <h2 class="c-section-heading__title-ja">/ 事業紹介</h2>
            </div>
            <div class="p-establishment-support__business-content">
                <figure class="p-establishment-support__business-img"><img src="<?php echo get_template_directory_uri(); ?>/img/business-introduction.jpg" alt=""></figure>
                <!-- 料金改定事例紹介 -->
                <div class="p-establishment-support__business-price">
                    <p class="p-establishment-support__business-price-note">※法人設立5年経過した場合又は社員数が10人を超えた場合の料金改定事例紹介</p>
                    <div class="p-establishment-support__business-table">
                        <table class="p-price-table">
                            <tbody class="p-price-table__tbody">
                                <tr class="p-price-table__row">
                                    <th class="p-price-table__row-title">従業員</th>
                                    <td class="p-price-table__data">12名に増員</td>
                                </tr>
                                <tr class="p-price-table__row">
                                    <th class="p-price-table__row-title">法人設立</th>
                                    <td class="p-price-table__data">3年経過</td>
                                </tr>
                                <tr class="p-price-table__row">
                                    <th class="p-price-table__row-title">顧問業務</th>
                                    <td class="p-price-table__data">月額25,000円</td>
                                </tr>
                                <tr class="p-price-table__row">
                                    <th class="p-price-table__row-title">給与計算業務</th>
                                    <td class="p-price-table__data">月額20,000円</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 価格表（独自セクション） -->
    <section class="p-establishment-support__price">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">PRICE</span>
                <h2 class="c-section-heading__title-ja">/ 価格表</h2>
            </div>
            <div class="p-establishment-support__price-content">
                <div class="p-establishment-support__price-table">
                    <!-- 価格表テーブル（共通パーツ） -->
                    <table class="p-price-table">
                        <tbody class="p-price-table__tbody">
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">創業無料相談</th>
                                <td class="p-price-table__data">無料～</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">保険関係成立届</th>
                                <td class="p-price-table__data">10,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">労働保険概算保険料申告書</th>
                                <td class="p-price-table__data">10,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">雇用保険適用事業所設置届</th>
                                <td class="p-price-table__data">10,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">社会保険新規適用</th>
                                <td class="p-price-table__data">10,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">就業規則本作成</th>
                                <td class="p-price-table__data">20,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">賃金規定作成</th>
                                <td class="p-price-table__data">20,000円</td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">顧問業務</th>
                                <td class="p-price-table__data">10,000円 / 月　<span class="p-price-table__data-strong-text">★同時契約割引</span></td>
                            </tr>
                            <tr class="p-price-table__row">
                                <th class="p-price-table__row-title">給与計算業務</th>
                                <td class="p-price-table__data">10,000円 / 月　<span class="p-price-table__data-strong-text">★同時契約割引</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                            <p class="p-faq__text p-faq__text--bold">会社設立直後でも相談できますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、設立直後からサポート可能です。<br />手続きなどの準備段階からお手伝いします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">何から始めればいいか分からないのですが大丈夫ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                問題ありません。<br />必要な手続きを整理し、優先順位をつけてご案内します。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">助成金の相談も含まれますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、活用可能な助成金のご提案も行います。<br />創業期の資金負担を軽減できるよう支援します。
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