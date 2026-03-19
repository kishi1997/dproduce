<?php get_header(); ?>
<div class="p-regulation">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">regulation</span>
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
                    会社を守り、社員を活かす。<br />実務に強い就業規則サポート
                </h2>
                <p class="p-intro__lead">
                    就業規則は、単に「法律を守るための書類」ではありません。会社を不当なリスクから守る「防波堤」であり、同時に社員が安心して力を発揮できる「組織の憲法」です。 10年以上更新されていない、あるいはネットのひな形を流用しただけの規則では、現代の複雑な労務トラブルや多様な働き方に対応できません。D・プロデュースは、数多くの紛争解決実績と最新の法務知見に基づき、貴社のビジョンを反映した「生きた就業規則」をプロデュースします。
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
                        <p class="p-trouble__text">就業規則を何年も見直していない</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">ネットのひな形をそのまま使っていて不安</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">問題社員への対応ルールが曖昧</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">助成金に対応した規程になっていない</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SUPPORT</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの就業規則サポート<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/regulation-img1.jpg" alt="チェック体制">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">SUPPORT.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">複数人のプロによるリーガルチェック</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            一人の担当者の主観に頼らず、チーム内の複数の専門家が異なる視点で条文を精査します。100名〜500名規模の企業で起こりがちな「多種多様な職種・雇用形態」が混在するケースでも、法的整合性と実務上の運用しやすさを両立させた、抜け漏れのない規定を構築します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-img3.jpg" alt="運用支援">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">SUPPORT.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「作りっぱなし」にしない運用支援</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            規則を納品して終わりではありません。新しいルールが社内に浸透するよう、従業員向け説明会の実施や、管理職向けの運用マニュアル作成を徹底サポート。経営層の想いが正しく現場に伝わり、トラブルの火種を未然に防ぐ「運用できる体制」までをセットで提供します。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/regulation-img2.jpg" alt="法改正・トレンドの反映">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">SUPPORT.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">最新の法改正・トレンドを即時反映</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            目まぐるしく変わる労働関連法規。私たちは常に最新の法改正情報をキャッチアップし、貴社の規則に即座に反映させる体制を整えています。また、昨今のトレンドであるテレワーク規定、副業解禁、メンタルヘルス対応など、時代に即した柔軟なルール作りを提言します。
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- D・プロデュースの就業規則サポート３つの特長 -->
    <section class="p-point">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの就業規則の特徴</h2>
            </div>

            <div class="p-point__list">

                <!-- 01 -->
                <div class="p-point__item">
                    <figure class="p-point__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/regulation-img3.jpg" alt="会社第一">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">FEATURE.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">会社を守ることを第一に</h3>
                        </div>
                        <p class="p-point__desc">
                            当社が作成する就業規則は、絶対的必要記載事項、相対的記載事項はもちろんのこと、特に「任意的記載事項」に着目して、会社の基本ルールの明確化、社員が安心して働ける環境作りを常に念頭に置き、万が一トラブルが発生しても、就業規則をベースに適切な処理することが可能になる（会社を守る！）ことを意識して作成致します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/regulation-img4.jpg" alt="良好な職場環境">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">FEATURE.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">働きやすい職場環境へ</h3>
                        </div>
                        <p class="p-point__desc">
                            会社内にて守らなければいけないルール(服務規律)や違反してはいけないルール(懲戒事由)の基準を具体的、かつ、明確に定めていきます。その結果として、労使双方の義務と権利を明確にすることにより、無用な労働トラブルの防止・働きやすい職場環境の実現を目指していきます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 就業規則作成の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング・現状調査</h3>
                        <p class="p-process__item-text">
                            現行の就業規則や諸規程を確認し、現在の運用実態や経営層が抱える課題、将来のビジョンを詳しく伺います。まずは「現状と理想のギャップ」を明確にすることから始まります。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">02</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">就業規則の診断</h3>
                        <p class="p-process__item-text">
                            最新の法令や判例に照らし合わせ、現行の規則が抱える法的リスクを徹底的に洗い出します。未払い残業代対策やハラスメント防止規定など、現代の労務課題に対する「守りの強度」を専門家の視点で診断します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">03</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">就業規則の整備</h3>
                        <p class="p-process__item-text">
                            診断結果に基づき、貴社の業種や組織規模に最適化した条文のドラフトを作成します。D・プロデュースのチームによる複数人チェックを経て、法適合性と現場での使いやすさを両立させた「生きたルール」へと整えていきます。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">04</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">就業規則の変更・決定</h3>
                        <p class="p-process__item-text">
                            作成した原案を元に、経営層や実務担当者様とお打ち合わせを重ねます。内容が確定した後は、従業員代表への意見聴取や説明会の実施を通じて、組織内での合意形成と決定プロセスを丁寧にサポートいたします。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">05</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">運用開始</h3>
                        <p class="p-process__item-text">
                            完成した規則を所轄の労働基準監督署へ届け出ます。受理後も「規則をどう運用し、社内に浸透させるか」についてアドバイスを行い、トラブルを未然に防ぎ、社員が安心して働ける環境づくりを伴走支援します。
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
                <h2 class="c-section-heading__title-ja">/ お問い合わせの前によくある「切り替え」の<br />不安にお答えします</h2>
            </div>

            <!-- FAQリストエリア -->
            <div class="p-faq__inner">
                <dl class="p-faq__list">
                    <!-- FAQアイテム 1 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">就業規則は本当に必要ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                常時10人以上の従業員がいる場合は作成・届出が義務です。<br />それ未満でも、トラブル防止や会社を守るために整備をおすすめしています。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">今ある就業規則の見直しだけでも依頼できますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、可能です。<br />法改正対応やリスクチェックのみのご相談も承っています。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">作成にはどれくらい期間がかかりますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                通常は1～2ヶ月程度です。<br />ヒアリングを行い、貴社の実態に合わせて作成いたします。
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- サービス一覧 -->
    <section class="p-service">
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