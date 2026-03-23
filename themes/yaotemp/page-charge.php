<?php get_header(); ?>
<div class="p-charge">

    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Charge</span>
            <h1 class="p-page-header__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- パンくずリスト -->
    <div class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-container">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- イントロ -->
    <section class="p-charge-intro">
        <div class="l-container">
            <div class="p-charge-intro__inner">
                <h2 class="p-charge-intro__catch">
                    中・長期的なお付き合いの中で、<br>
                    担当者がお客様のご相談に一緒に取り組みます
                </h2>
                <p class="p-charge-intro__lead">
                    社会保険労務士法人D・プロデュースでは、顧問契約とスポット契約の2つのプランをご用意しております。<br>
                    継続的なサポートをご希望の方には顧問契約を、単発でのご相談・手続き代行には<br class="u-hidden-sm">スポット契約をお選びください。<br>
                    ご不明な点はお気軽にお問い合わせください。
                </p>
                <div class="p-charge-intro__btns">
                    <a href="#retainer" class="p-charge-intro__btn">顧問契約について</a>
                    <a href="#spot" class="p-charge-intro__btn p-charge-intro__btn--outline">スポット契約について</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 契約種別説明 -->
    <section class="p-charge-types">
        <div class="l-container">
            <div class="p-charge-types__grid">
                <!-- 顧問契約 -->
                <div class="p-charge-types__item">
                    <h2 class="p-charge-types__title">顧問契約</h2>
                    <p class="p-charge-types__text">
                        日常に起きる人事労務に関する課題やトラブルのご相談、給与計算、社会保険・労働保険の諸手続きおよびアドバイス業務をしっかりと行います。中・長期的なお付き合いの中で、貴社の課題やご相談に一緒に取り組みます。頻繁な法改正への対応も安心です。<br>
                        <small>※社員数、事業規模、業務量等により顧問料が変動します。</small>
                    </p>
                    <a href="#retainer" class="p-charge-types__btn">顧問契約料金</a>
                </div>
                <!-- スポット契約 -->
                <div class="p-charge-types__item">
                    <h2 class="p-charge-types__title">スポット契約</h2>
                    <p class="p-charge-types__text">
                        就業規則など各種規程の作成・変更、助成金申請、労働保険・社会保険の新規加入手続き、是正勧告対応、労働時間管理コンサルティング（変形労働時間制の採用・運用サポートなど）、制度設計運用サポート、高齢者最適賃金設計、労働者派遣業申請、官公庁への立会など承ります。<br>
                        <small>※顧問契約の有無により料金が異なります。</small>
                    </p>
                    <a href="#spot" class="p-charge-types__btn">スポット契約料金</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 顧問契約料金 -->
    <section class="p-charge-retainer" id="retainer">
        <div class="l-container">
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">RETAINER</span>
                <h2 class="c-section-heading__title-ja">/ 顧問契約料金</h2>
            </div>

            <div class="p-charge-table-wrap">
                <table class="p-charge-table">
                    <thead class="p-charge-table__head">
                        <tr>
                            <th class="p-charge-table__th">従業員数</th>
                            <th class="p-charge-table__th">月額顧問料（税別）</th>
                            <th class="p-charge-table__th">主な対応内容</th>
                        </tr>
                    </thead>
                    <tbody class="p-charge-table__body">
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">〜5名</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">30,000円〜</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">入退社手続、算定・月変、36協定届出、労務相談</td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">6〜10名</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">40,000円〜</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">入退社手続、算定・月変、36協定届出、労務相談</td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">11〜30名</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">55,000円〜</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">上記に加え、就業規則レビュー、給与計算サポート</td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">31〜50名</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">75,000円〜</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">上記に加え、人事評価サポート、DX推進支援</td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">51〜100名</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">100,000円〜</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">フルサポート（専任チーム5名体制）</td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">101名以上</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">別途お見積り</span></td>
                            <td class="p-charge-table__td p-charge-table__td--desc">企業規模・業務内容に応じてご提案</td>
                        </tr>
                    </tbody>
                </table>
                <p class="p-charge-note">※上記料金はすべて税別表示です。従業員数・業務内容によって異なる場合があります。詳細はお問い合わせください。</p>
            </div>
        </div>
    </section>

    <!-- スポット契約料金 -->
    <section class="p-charge-spot" id="spot">
        <div class="l-container">
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SPOT</span>
                <h2 class="c-section-heading__title-ja">/ スポット契約料金</h2>
            </div>

            <div class="p-charge-table-wrap">
                <table class="p-charge-table">
                    <thead class="p-charge-table__head">
                        <tr>
                            <th class="p-charge-table__th">サービス内容</th>
                            <th class="p-charge-table__th">料金（税別）</th>
                        </tr>
                    </thead>
                    <tbody class="p-charge-table__body">
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">労務相談（60分）</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">20,000円</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">就業規則作成・改定</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">150,000円〜</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">給与計算代行（単月）</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">30,000円〜</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">助成金申請代行</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">成功報酬 支給額の20%</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">労務監査・デューデリジェンス</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">200,000円〜</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">36協定届出</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">30,000円〜</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">社会保険設立手続</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">50,000円〜</span></td>
                        </tr>
                        <tr class="p-charge-table__row">
                            <td class="p-charge-table__td p-charge-table__td--label">人事評価制度構築</td>
                            <td class="p-charge-table__td"><span class="p-charge-table__price">別途お見積り</span></td>
                        </tr>
                    </tbody>
                </table>
                <p class="p-charge-note">※上記料金はすべて税別表示です。業務の規模・難易度によって異なる場合があります。まずはご相談ください。</p>
            </div>

            <div class="p-charge-cta">
                <p class="p-charge-cta__text">ご不明な点やご質問は、お気軽にお問い合わせください。</p>
                <a href="<?php bloginfo('url'); ?>/contact/" class="c-btn c-btn--orange">無料相談・お問い合わせ</a>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>
