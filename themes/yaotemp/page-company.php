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
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <!-- 会社概要 （独自コンテンツ） -->
    <section class="p-company__profile">
        <div class="l-container">
            <div class="p-company__profile-content">
                <!-- セクション見出し -->
                <div class="c-section-heading">
                    <div class="c-section-heading__deco">
                        <span class="c-section-heading__deco-light"></span>
                        <span class="c-section-heading__deco-dark"></span>
                    </div>
                    <span class="c-section-heading__title-en">COMPANY PROFILE</span>
                    <h2 class="c-section-heading__title-ja">/ 会社概要</h2>
                </div>

                <dl class="p-company__profile-list">
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">社名</dt>
                        <dd class="p-company__profile-list-data">社会保険労務士法人D・プロデュース(ディー・プロデュース)</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">役員</dt>
                        <dd class="p-company__profile-list-data">代表社員　越石　能章　(登録番号　14040022号)</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">創業</dt>
                        <dd class="p-company__profile-list-data">2005年(平成17年)　8月　12日</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">スタッフ数</dt>
                        <dd class="p-company__profile-list-data">
                            16名(代表社員含む)※有資格者９名<br />
                            経営顧問2名</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">所在地</dt>
                        <dd class="p-company__profile-list-data">
                            〒231-0013<br />
                            神奈川県横浜市中区住吉町４－４５－１　関内トーセイビルⅡ１０階
                        </dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">電話番号</dt>
                        <dd class="p-company__profile-list-data">045-226-5482（代表）</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">FAX番号</dt>
                        <dd class="p-company__profile-list-data">045-226-5483</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">Email</dt>
                        <dd class="p-company__profile-list-data">info＠d-produce.com</dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">
                            事業内容<br />
                            (主要業務)
                        </dt>
                        <dd class="p-company__profile-list-data">
                            【労務コンプライアンス】<br />
                            労務相談顧問(労務トラブル対応)<br />
                            就業規則作成・改定支援<br />
                            労働基準監督署からの是正勧告対応<br />
                            上場準備企業のための労務監査報告<br />
                            【アウトソーシングサービス】<br />
                            労働保険・社会保険手続<br />
                            勤怠管理<br />
                            給与計算<br />
                            各種保険給付申請<br />
                            各種年金申請<br />
                            【人事労務コンサルティング】<br />
                            賃金制度の設計・改定<br />
                            人事評価制度の設計・改定<br />
                            退職金制度の設計・改定<br />
                            役員会・会議のコーディネート<br />
                            勤怠管理システム導入コンサルティング<br />
                            【人材教育・セミナー講師】<br />
                            新入社員研修<br />
                            人事・総務担当者向け教育研修<br />
                            管理職向け教育研修<br />
                            評価者向け教育研修<br />
                            各種ハラスメント研修<br />
                            コミュニケーションセミナー<br />
                            ライフプランセミナー<br />
                            日本公認会計協会神奈川県会　働き方改革セミナー講師<br />
                            三菱電機本社　管理職向けリーダーシップ研修講師<br />
                            【労働保険事務組合】
                        </dd>
                    </div>
                    <div class="p-company__profile-row">
                        <dt class="p-company__profile-list-title">顧問先企業</dt>
                        <dd class="p-company__profile-list-data">
                            定型顧問先数　約200社　 ※従業員一名～数千人規模まで対応<br />
                            スポット顧問先数　多数</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- 所在地 -->
    <section class="p-company__location">
        <div class="l-container">
            <div class="p-company__location-content">
                <!-- セクション見出し -->
                <div class="c-section-heading">
                    <div class="c-section-heading__deco">
                        <span class="c-section-heading__deco-light"></span>
                        <span class="c-section-heading__deco-dark"></span>
                    </div>
                    <span class="c-section-heading__title-en">LOCATION</span>
                    <h2 class="c-section-heading__title-ja">/ 所在地</h2>
                </div>

                <!-- マップ -->
                <div class="p-company__content-main">
                    <div class="p-company__location-map">
                        <iframe class="p-company__location-map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6500.6990796152795!2d139.63150164441777!3d35.44613999065589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185d19478e9065%3A0x84fd4ba829dd198c!2z56S-5Lya5L-d6Zm65Yq05YuZ5aOr5rOV5Lq6ROODu-ODl-ODreODh-ODpeODvOOCuQ!5e0!3m2!1sja!2sjp!4v1774445344918!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <dl class="p-company__location-list">
                        <div class="p-company__location-list-row">
                            <dt class="p-company__location-list-title">本店</dt>
                            <dd class="p-company__location-list-data">
                                〒231-0013<br />
                                神奈川県横浜市住吉町4-45-1　関内トーセイビルⅡ10階<br />
                                TEL 045-226-5482
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>