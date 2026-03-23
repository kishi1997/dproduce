<?php get_header(); ?>
<div class="p-company">

    <!-- 下層ページMV -->
    <section class="p-page-header">
        <div class="p-page-header__inner">
            <span class="p-page-header__subtitle">Company</span>
            <h1 class="p-page-header__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- パンくずリスト -->
    <div class="c-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="l-container">
            <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
    </div>

    <!-- 会社概要 -->
    <section class="p-company-info">
        <div class="l-container">
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">COMPANY</span>
                <h2 class="c-section-heading__title-ja">/ 会社概要</h2>
            </div>

            <div class="p-company-info__table">
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">社名</dt>
                    <dd class="p-company-info__data">社会保険労務士法人D・プロデュース</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">代表者</dt>
                    <dd class="p-company-info__data">代表社員　氏名</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">住所</dt>
                    <dd class="p-company-info__data">〒231-0013<br>神奈川県横浜市中区住吉町4-45-1　関内トーセイビルⅡ 10階</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">事業内容</dt>
                    <dd class="p-company-info__data">SR法人として社会保険労務士業務を行う事業所の労働・社会保険の届出書類の作成並びに提出代行、賃金制度等の設計・コンサルティング、給与計算代行等</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">設立年月</dt>
                    <dd class="p-company-info__data">○○○○年○月</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">Tel / Fax</dt>
                    <dd class="p-company-info__data">TEL：045-226-5482　／　FAX：045-226-5483</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">Email</dt>
                    <dd class="p-company-info__data">info@d-produce.com</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">主要業務<span>（社会保険・給付関係）</span></dt>
                    <dd class="p-company-info__data">
                        <ul class="p-company-info__list">
                            <li>健康保険・厚生年金保険各種届出</li>
                            <li>雇用保険各種届出</li>
                            <li>労災保険給付請求</li>
                            <li>健康保険給付申請</li>
                            <li>社会保険算定・月額変更届</li>
                            <li>年度更新手続</li>
                            <li>社会保険設立・廃止手続</li>
                            <li>労働保険設立・廃止手続</li>
                            <li>マイナンバー管理</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">主要業務<span>（労働保険関係）</span></dt>
                    <dd class="p-company-info__data">
                        <ul class="p-company-info__list">
                            <li>就業規則・各種規程の作成・改定</li>
                            <li>賃金制度・人事制度設計コンサルティング</li>
                            <li>労務トラブル対応</li>
                            <li>助成金申請</li>
                            <li>労使協定（36協定等）の作成・届出</li>
                            <li>採用・退職手続</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">主要業務<span>（給与計算・その他）</span></dt>
                    <dd class="p-company-info__data">
                        <ul class="p-company-info__list">
                            <li>給与計算代行</li>
                            <li>人事評価制度構築支援</li>
                            <li>DX推進支援</li>
                            <li>社員研修</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">顧問先業種</dt>
                    <dd class="p-company-info__data">建設業、製造業、IT・情報通信業、医療・福祉、小売・流通、サービス業、飲食業　他多数</dd>
                </dl>
                <dl class="p-company-info__row">
                    <dt class="p-company-info__label">関係会社</dt>
                    <dd class="p-company-info__data">株式会社D・プロデュース</dd>
                </dl>
            </div>
        </div>
    </section>

    <!-- 所在地 -->
    <section class="p-company-access">
        <div class="l-container">
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">ACCESS</span>
                <h2 class="c-section-heading__title-ja">/ 所在地</h2>
            </div>

            <div class="p-company-access__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.9!2d139.63!3d35.44!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185d1c39bca903%3A0x0!2z5qCq5byP5Lya56S-ROODl-ODreODvOOCuQ!5e0!3m2!1sja!2sjp!4v1718759883911!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="p-company-access__info">
                <dl class="p-company-access__row">
                    <dt class="p-company-access__label">本社住所</dt>
                    <dd class="p-company-access__data">〒231-0013　神奈川県横浜市中区住吉町4-45-1　関内トーセイビルⅡ 10階</dd>
                </dl>
                <dl class="p-company-access__row">
                    <dt class="p-company-access__label">電車でお越しの方</dt>
                    <dd class="p-company-access__data">JR根岸線・横浜市営地下鉄「関内駅」より徒歩○分</dd>
                </dl>
                <dl class="p-company-access__row">
                    <dt class="p-company-access__label">お問い合わせ</dt>
                    <dd class="p-company-access__data">TEL：045-226-5482　／　FAX：045-226-5483</dd>
                </dl>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>
