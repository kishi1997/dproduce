<?php get_header(); ?>
<div class="p-calculation">
    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Calculation</span>
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
                    正確・安心・手間ゼロへ。プロに任せる給与計算。
                </h2>
                <p class="p-intro__lead">
                    給与計算は、単なるルーチンワークではありません。従業員の生活を支え、会社への信頼を形にする極めて重要な業務です。
                    しかし、法改正への対応や社会保険料の改定など、その実務は年々複雑化しています。「担当者が一人しかおらずブラックボックス化している」「毎月のチェック作業に追われ、本来取り組むべき採用や教育に手が回らない」——そんな課題を、D・プロデュースが解決します。
                    私たちは最新のDXツールと5名体制の組織力を駆使し、ミスゼロ・遅延ゼロの安定した給与インフラを貴社に提供します。
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
                        <p class="p-trouble__text">給与計算に毎月時間を取られている</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">計算ミスや法改正対応が不安</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">担当者が退職すると回らなくなる</p>
                    </li>
                    <li class="p-trouble__item">
                        <div class="p-trouble__bullet"></div>
                        <p class="p-trouble__text">社会保険・労働保険との連動が複雑で困っている</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- D・プロデュースの給与計算代行 -->
    <section class="p-strength">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FEATURE</span>
                <h2 class="c-section-heading__title-ja">/ D・プロデュースの給与計算代行<br />３つの特長</h2>
            </div>

            <div class="p-strength__list">

                <!-- 01 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/regulation-img1.jpg" alt="チェック体制">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.01</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">「5名体制」によるトリプルチェック</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number1.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            一人の担当者に計算を委ねることは、ヒューマンエラーのリスクを放置することと同じです。D・プロデュースでは、計算・確認・最終承認の各工程をチーム内の異なるスタッフが担当する「トリプルチェック体制」を徹底。組織的な多重検算により、1円の誤差も許さない圧倒的な正確性を担保します。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-strength__item p-strength__item--reverse">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/top-strength-img3.jpg" alt="運用支援">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.02</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">クラウド・DX対応のフルサポート</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number2.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            Money
                            Forward、freee、ジョブカン、OBIC7など、主要なクラウド人事労務ソフトにフル対応しています。現在アナログなExcel管理や紙のタイムカード運用をされている場合でも、システム選定から初期設定、データ移行までプロが伴走。貴社のDX化を加速させ、ペーパーレスで効率的な給与運用を実現します。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-strength__item">
                    <figure class="p-strength__img">
                        <img src="<?php bloginfo('template_url');?>/img/regulation-img2.jpg" alt="法改正・トレンドの反映">
                    </figure>
                    <div class="p-strength__content">
                        <div class="p-strength__head">
                            <div class="p-strength__label-wrap">
                                <span class="p-strength__label">FEATURE.03</span>
                                <span class="p-strength__line"></span>
                            </div>
                            <h3 class="p-strength__item-title">社労士法人ならではのアドバイス</h3>

                            <figure class="p-strength__number  p-top-strength__number--small">
                                <img src="<?php bloginfo('template_url');?>/img/top-strength-number3.svg" alt=""
                                    aria-hidden="true">
                            </figure>
                        </div>
                        <p class="p-strength__desc">
                            単なる数字の入力代行では終わりません。私たちは労務の専門家として、給与データから読み取れる「残業時間の異常値」や「未払い残業代リスク」、「法改正に伴う手当の見直し」などをいち早くキャッチ。トラブルの火種を未然に防ぎ、コンプライアンスを遵守した健全な賃金体系の維持をアドバイスします。
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
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img1.jpg" alt="喜ぶ社員の画像">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.01</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">社員の事務負担軽減 ⇒ コア業務への集中</h3>
                        </div>
                        <p class="p-point__desc">
                            毎月の煩雑な入力・確認作業から解放されることで、人事・総務担当者は採用活動、人材育成、評価制度の運用といった、企業の成長に直結する「付加価値の高い業務」にリソースを集中させることが可能になります。
                        </p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img2.jpg" alt="経費削減">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.02</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">処理にかかる時間の短縮 ⇒ 人件費（残業代）の抑制</h3>
                        </div>
                        <p class="p-point__desc">
                            プロフェッショナルなチームが最新のITツールを用いて処理を行うため、内製に比べて圧倒的なスピードで計算が完了します。給与締切日前後の担当者の過度な残業をなくし、間接部門のコスト最適化に貢献します。
                        </p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="p-point__item">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img3.jpg"
                            alt="チェックリストを確認するビジネスパーソン">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.03</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">担当者変更に伴う引継ぎリスクの解消 ⇒ 安定した手続きの実現</h3>
                        </div>
                        <p class="p-point__desc">
                            給与業務が特定の社員に依存する「属人化」は経営上の大きなリスクです。アウトソーシングにより、担当者の急な退職や休職に左右されない体制を構築。5名体制のチームが常に貴社のルールを把握しているため、恒久的に安定した給与支払いが可能となります。
                        </p>
                    </div>
                </div>

                <!-- 04 -->
                <div class="p-point__item p-point__item--reverse">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img4.jpg"
                            alt="確かな知識と経験を持ったアドバイザー">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.04</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">専門性の活用、スピーディーな処理 ⇒ 助成金などの有効活用</h3>
                        </div>
                        <p class="p-point__desc">
                            給与計算と手続きをセットで任せることで、助成金の受給要件となる賃金要件や労働時間の管理をリアルタイムに把握できます。申請可能な助成金を逃さず、スピーディーな処理で受給のチャンスを最大化します。
                        </p>
                    </div>
                </div>

                <!-- 05 -->
                <div class="p-point__item">
                    <figure class="p-point__img">
                        <img src="<?php bloginfo('template_url');?>/img/calculation-merit-img5.jpg"
                            alt="確かな知識と経験を持ったアドバイザー">
                    </figure>
                    <div class="p-point__content">
                        <div class="p-point__head">
                            <div class="p-point__label-wrap">
                                <span class="p-point__label">MERIT.05</span>
                                <span class="p-point__line"></span>
                            </div>
                            <h3 class="p-point__item-title">安定した手続き人事労務全般に関するアドバイス・ご提案 ⇒ 業務効率化の実現</h3>
                        </div>
                        <p class="p-point__desc">
                            給与計算を通じて貴社の勤怠状況を深く理解しているからこそ、無駄な残業の削減策や、社会保険料の適正化、最適な手当の構成など、現場に即した具体的な改善提案が可能。給与計算を起点に、バックオフィス全体の生産性を向上させます。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="p-calculation__service">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SERVICE</span>
                <h2 class="c-section-heading__title-ja">/ 主なサービス</h2>
            </div>
            <div class="p-calculation__service-items">
                <div class="p-calculation__service-item">
                    <h3 class="p-calculation__service-title">基本サービス</h3>
                    <div class="p-service-list">
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img1.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">マスター情報の管理</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img2.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">毎月の給与計算サービス</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img3.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">賞与計算サービス<br />(年3回まで)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img4.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">給与支給控除一覧表の<br />作成・提出</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img5.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">合計支給控除一覧表の<br />作成・提出</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img6.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">銀行振込依頼書の<br />作成・提出</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img7.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">金種表の作成・提出、<br />給与明細書の作成・提出</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img8.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">退職者に係る給与源泉徴収票の作成・提出<br />※退職所得に係るものを除く</p>
                        </div>
                    </div>
                </div>
                <div class="p-calculation__service-item">
                    <h3 class="p-calculation__service-title">オプションサービス</h3>
                    <div class="p-service-list">
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img9.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">WEB明細</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img10.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">労働時間集計サービス<br />(タイムカード等の集計サービス)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img11.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">有給管理サービス<br />(年3回まで)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img12.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">給与袋の提出及び<br />袋詰めサービス</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img13.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">住民税異動届の<br />作成サービス</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img14.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">社会保険算定基礎届(毎年1回)の提出代行サービス(※)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img15.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">労働保険年度更新(毎年1回)業務の書類作成・提出代行サービス(※)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img16.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">社会保険月額変更届(随時)の提出代行サービス(※)</p>
                        </div>
                        <div class="p-service-list__item">
                            <div class="p-service-list__item-img"><img
                                    src="<?php bloginfo('template_url');?>/img/calculation-service-img17.jpg" alt="">
                            </div>
                            <p class="p-service-list__item-title">社会保険賞与支払届の作成・提出代行サービス(※)</p>
                        </div>
                    </div>
                    <p class="p-calculation__service-notice">※は当社顧問契約内容に含まれるサービスとなります</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 給与計算の流れ -->
    <section class="p-process">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">FLOW</span>
                <h2 class="c-section-heading__title-ja">/ 給与計算の流れ</h2>
            </div>

            <ol class="p-process__list">
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">01</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">ヒアリング</h3>
                        <p class="p-process__item-text">
                            現在の給与規定や手当の構成、社会保険の加入状況、使用されている勤怠管理システムなどを詳しく伺います。法改正への対応状況も併せて確認し、貴社に最適な計算・運用フローを設計します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">02</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">タイムカードの提出</h3>
                        <p class="p-process__item-text">
                            毎月の締日に合わせ、タイムカードやクラウド勤怠ソフトから出力された労働時間データを共有いただきます。データの受け渡しは、チャットツールやセキュアなクラウドストレージを活用し、スピーディーかつ安全に行います。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">03</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">給与計算の開始</h3>
                        <p class="p-process__item-text">
                            お預かりしたデータを基に、D・プロデュースの専任チームが計算を開始します。独自の「5名体制」を活かし、入力・計算・確認の各工程で異なるスタッフがチェックを行うことで、ヒューマンエラーを徹底的に排除します。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">04</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">お客様のチェック</h3>
                        <p class="p-process__item-text">
                            計算完了後、給与一覧表や差引支給額などを事前にご確認いただきます。疑問点や変動項目がある場合は、チャットやオンライン会議ですぐに回答・修正対応を行い、情報の正確性を最終確定させます。
                        </p>
                    </div>
                </li>
                <li class="p-process__item">
                    <div class="p-process__item-header">
                        <span class="p-process__item-number">05</span>
                    </div>
                    <div class="p-process__item-body">
                        <h3 class="p-process__item-title">給与情報のご提供</h3>
                        <p class="p-process__item-text">
                            最終確定した給与明細（WEB明細対応可）、振込データ（FBデータ）、賃金台帳、住民税納付一覧などの必要書類一式をご提供します。また、計算結果に基づいた社会保険料の改定案内や、労務改善のアドバイスも併せてお届けします。
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
                <h2 class="c-section-heading__title-ja"> よくあるご質問</h2>
            </div>

            <!-- FAQリストエリア -->
            <div class="p-faq__inner">
                <dl class="p-faq__list">
                    <!-- FAQアイテム 1 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">小規模な会社でも依頼できますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                はい、従業員数に関わらず対応可能です。<br />数名規模の企業様からも多くご依頼いただいています。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 2 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">今使っている勤怠システムはそのまま使えますか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                多くの場合そのまま連携可能です。<br />状況に応じて最適な方法をご提案いたします。
                            </p>
                        </dd>
                    </div>

                    <!-- FAQアイテム 3 -->
                    <div class="p-faq__item">
                        <dt class="p-faq__question">
                            <span class="p-faq__icon p-faq__icon--q">Q</span>
                            <p class="p-faq__text p-faq__text--bold">情報管理は安全ですか？</p>
                        </dt>
                        <dd class="p-faq__answer">
                            <span class="p-faq__icon p-faq__icon--a">A</span>
                            <p class="p-faq__text">
                                給与情報は厳重に管理しています。<br />守秘義務を徹底し、安全な体制で運用しています。
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