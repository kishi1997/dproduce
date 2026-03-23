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
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <!-- イントロダクション 1 -->
    <section class="p-intro">
        <div class="l-container">
            <div class="p-intro__inner">
                <h2 class="p-intro__title">
                    中・長期的なお付き合いの中で<br />貴社の課題やご相談に一緒に取り組みます
                </h2>
                <p class="p-intro__lead">
                    当事務所では、小～中規模のベンチャー企業様を中心に、人事労務支援サービスをご提供しております。<br />業務をご依頼いただく基本の形態として、各種調査対策や手続代行から日々の人事労務に関するご相談などについて総合的に支援する「顧問契約」、手続代行などの実務を除きアドバイス のみに特化した「相談顧問」、各種手続代行や人事労務支援を案件単位でご依頼いただける「スポット契約」をご用意しており、お客さまのご要望や必要なサービスなどに応じて柔軟に対応いたします。
                </p>
            </div>
        </div>
    </section>

    <section class="p-charge__contract">
        <div class="l-container">
            <div class="p-charge__contract-list">
                <div class="p-charge__contract-item">
                    <h2 class="p-charge__contract-title">顧問契約</h2>
                    <p class="p-charge__contract-text">
                        日常に起きる人事労務に関する課題やトラブルのご相談、給与計算、社会保険・労働保険の諸手続きおよびアドバイス業務をしっかりと行います。中・長期的なお付き合いの中で、貴社の課題やご相談に一緒に取り組みます。頻繁な法改正への対応も安心です。<br />
                        <br />
                        ※社員数、事業規模、業務量等により顧問料が変動します。
                    </p>
                    <div class="p-charge__contract-btn-wrap">
                        <a href="#advisor" class="c-btn c-btn--outline p-charge__contract-btn">
                            顧問契約料金
                        </a>
                    </div>
                </div>
                <div class="p-charge__contract-item">
                    <h2 class="p-charge__contract-title">スポット契約</h2>
                    <p class="p-charge__contract-text">
                        就業規則など各種規程の作成・変更、助成金申請、労働保険・社会保険の新規加入手続き、是正勧告対応、労働時間管理コンサルティング（変形労働時間制の採用・運用サポートなど）、制度設計運用サポート、高齢者最適賃金設計、労働者派遣業申請、官公庁への立会など承ります。<br />
                        <br />
                        ※顧問契約の有無により料金が異なります。
                    </p>
                    <div class="p-charge__contract-btn-wrap">
                        <a href="#spot" class="c-btn c-btn--outline p-charge__contract-btn">
                            スポット契約料金
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 顧問契約料金セクション（独自コンテンツ） -->
    <section id="advisor" class="p-charge__advisor">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">ADVISOR</span>
                <h2 class="c-section-heading__title-ja">/ 顧問契約料金</h2>
            </div>
            <p class="p-charge__advisor-lead">
                企業における定例手続き、労務管理アドバイス、人事労務に関するご提案、労務トラブルのご相談、<br />事業運営に役立つ情報のご提供など企業をトータルにサポート致します。
            </p>
            <div class="p-charge__advisor-table">
                <!-- 料金テーブル -->
                <table class="p-charge-table">
                    <colgroup>
                        <col class="p-charge-table__col01">
                        <col class="p-charge-table__col02">
                        <col class="p-charge-table__col03">
                        <col class="p-charge-table__col04">
                        <col class="p-charge-table__col05">
                        <col class="p-charge-table__col06">
                    </colgroup>
                    <thead class="p-charge-table__thead">
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__column-title">従業員数</th>
                            <th class="p-charge-table__column-title">ブロンズプラン<br />(月額)</th>
                            <th class="p-charge-table__column-title">シルバープラン<br />(月額)</th>
                            <th class="p-charge-table__column-title">ゴールドプラン<br />(月額)</th>
                            <th class="p-charge-table__column-title">プラチナプラン<br />(月額)</th>
                            <th class="p-charge-table__column-title">システム管理料<br />(月額)</th>
                        </tr>
                        <tr class="p-charge-table__row p-charge-table__row--secondary">
                            <th class="p-charge-table__column-title">人数＝役員+正社員+非正規社員</th>
                            <th class="p-charge-table__column-title">労務相談</th>
                            <th class="p-charge-table__column-title">労務相談+雇用・社会保険手続き<br />※年度更新・算定基礎届含む</th>
                            <th class="p-charge-table__column-title">労務相談+雇用・社会保険手続き+給与計算<br />※初期登録別途</th>
                            <th class="p-charge-table__column-title">労務相談+雇用・社会保険手続き+社内規定テンプレ使い放題</th>
                            <th class="p-charge-table__column-title">
                                ・シルバープラン<br />
                                ・ゴールドプラン<br />
                                ・プラチナプラン<br />
                                料金に加算
                            </th>
                        </tr>
                    </thead>
                    <tbody class="p-charge-table__tbody">
                        <!-- 01 ~5 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">5人まで</th>
                            <td class="p-charge-table__data">11,000円</td>
                            <td class="p-charge-table__data">16,500円</td>
                            <td class="p-charge-table__data">27,500円</td>
                            <td class="p-charge-table__data">33,000円</td>
                            <td class="p-charge-table__data">3,300円</td>
                        </tr>
                        <!-- 02 6~10 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">6人〜10人まで</th>
                            <td class="p-charge-table__data">16,500円</td>
                            <td class="p-charge-table__data">22,000円</td>
                            <td class="p-charge-table__data">44,000円</td>
                            <td class="p-charge-table__data">49,500円</td>
                            <td class="p-charge-table__data">5,500円</td>
                        </tr>
                        <!-- 03 11~20 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">11人〜20人まで</th>
                            <td class="p-charge-table__data">22,000円</td>
                            <td class="p-charge-table__data">33,000円</td>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">66,000円</td>
                            <td class="p-charge-table__data">8,250円</td>
                        </tr>
                        <!-- 04 21~30 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">21人〜30人まで</th>
                            <td class="p-charge-table__data">22,000円</td>
                            <td class="p-charge-table__data">44,000円</td>
                            <td class="p-charge-table__data">66,000円</td>
                            <td class="p-charge-table__data">77,000円</td>
                            <td class="p-charge-table__data">11,000円</td>
                        </tr>
                        <!-- 05 31~50 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">31人〜50人まで</th>
                            <td class="p-charge-table__data">44,000円</td>
                            <td class="p-charge-table__data">66,000円</td>
                            <td class="p-charge-table__data">93,500円</td>
                            <td class="p-charge-table__data">104,500円</td>
                            <td class="p-charge-table__data">11,000円</td>
                        </tr>
                        <!-- 06 51~75 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">51人〜75人まで</th>
                            <td class="p-charge-table__data">44,000円</td>
                            <td class="p-charge-table__data">82,500円</td>
                            <td class="p-charge-table__data">159,500円</td>
                            <td class="p-charge-table__data">170,500円</td>
                            <td class="p-charge-table__data">11,000円</td>
                        </tr>
                        <!-- 07 76~100 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">76人〜100人まで</th>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">99,000円</td>
                            <td class="p-charge-table__data">198,000円</td>
                            <td class="p-charge-table__data">209,000円</td>
                            <td class="p-charge-table__data">13,200円</td>
                        </tr>
                        <!-- 08 101~150 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">101人〜150人まで</th>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">132,000円</td>
                            <td class="p-charge-table__data">264,000円</td>
                            <td class="p-charge-table__data">275,000円</td>
                            <td class="p-charge-table__data">16,500円</td>
                        </tr>
                        <!-- 09 151~200 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">151人〜200人まで</th>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">165,000円</td>
                            <td class="p-charge-table__data">330,000円</td>
                            <td class="p-charge-table__data">352,000円</td>
                            <td class="p-charge-table__data">22,000円</td>
                        </tr>
                        <!-- 10 201~250 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">201人〜250人まで</th>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">220,000円</td>
                            <td class="p-charge-table__data">440,000円</td>
                            <td class="p-charge-table__data">462,000円</td>
                            <td class="p-charge-table__data">27,500円</td>
                        </tr>
                        <!-- 11 251~300 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">251人〜300人まで</th>
                            <td class="p-charge-table__data">55,000円</td>
                            <td class="p-charge-table__data">275,000円</td>
                            <td class="p-charge-table__data">550,000円</td>
                            <td class="p-charge-table__data">605,000円</td>
                            <td class="p-charge-table__data">33,000円</td>
                        </tr>
                        <!-- 12 300~ -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">301人以上</th>
                            <td class="p-charge-table__data" colspan="5">別途御見積</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="p-charge__advisor-note">
                労働保険事務組合・健康保険組合・基金等にご加入の場合は、別途、御見積させて頂きます。<br />
                ＊建設事業等二元適用事業所の場合は、別途、御見積させて頂きます。<br />
                ＊給与計算の対応ソフト：マネーフォワード、freee、セルズ<br />
                ＊給与計算代行は、給与締日と支給日の間隔が少なくとも15日以上あることがお引き受けの条件となります。
            </p>
        </div>
    </section>

    <!-- スポット契約セクション （独自コンテンツ） -->
    <section id="spot" class="p-charge__spot">
        <div class="l-container">
            <!-- セクション見出し -->
            <div class="c-section-heading">
                <div class="c-section-heading__deco">
                    <span class="c-section-heading__deco-light"></span>
                    <span class="c-section-heading__deco-dark"></span>
                </div>
                <span class="c-section-heading__title-en">SPOT</span>
                <h2 class="c-section-heading__title-ja">/ スポット契約料金</h2>
            </div>
            <p class="p-charge__spot-lead">顧問業務を請け負っている場合と、そうではない場合と料金が異なります。詳しくはお問い合わせください。</p>
            <div class="p-charge__spot-table">
                <!-- テーブル -->
                <table class="p-charge-table">
                    <colgroup>
                        <col class="p-charge-table__col01">
                        <col class="p-charge-table__col02">
                        <col class="p-charge-table__col03">
                        <col class="p-charge-table__col04">
                    </colgroup>
                    <thead class="p-charge-table__thead">
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__column-title">スポット契約</th>
                            <th class="p-charge-table__column-title">人数</th>
                            <th class="p-charge-table__column-title">料金（円）</th>
                            <th class="p-charge-table__column-title">備考</th>
                        </tr>
                    </thead>
                    <tbody class="p-charge-table__body">
                        <!-- 01 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労災保険の新規加入（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">33,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 02 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">雇用保険の新規加入（1件につき）</th>
                            <td class="p-charge-table__data">5名まで</td>
                            <td class="p-charge-table__data">33,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 03 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労災保険+雇用保険の新規加入</th>
                            <td class="p-charge-table__data">5名まで</td>
                            <td class="p-charge-table__data">66,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 04 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険の新規加入</th>
                            <td class="p-charge-table__data">5名まで</td>
                            <td class="p-charge-table__data">55,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 05 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労災保険+雇用保険+社会保険の新規加入</th>
                            <td class="p-charge-table__data">5名まで</td>
                            <td class="p-charge-table__data">88,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 06 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労災保険給付（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">22,000〜</td>
                            <td class="p-charge-table__data">料金は、労災保険給付内容により異なります</td>
                        </tr>
                        <!-- 07 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">健康保険 傷病手当金申請代行（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">33,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 08 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労働保険 年度更新の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">10名まで</td>
                            <td class="p-charge-table__data">33,000</td>
                            <td class="p-charge-table__data">建設事業等は、20%加算</td>
                        </tr>
                        <!-- 09 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労働保険 年度更新の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">20名まで</td>
                            <td class="p-charge-table__data">55,000</td>
                            <td class="p-charge-table__data">建設事業等は、20%加算</td>
                        </tr>
                        <!-- 10 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労働保険 年度更新の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">30名まで</td>
                            <td class="p-charge-table__data">66,000</td>
                            <td class="p-charge-table__data">建設事業等は、20%加算</td>
                        </tr>
                        <!-- 11 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険の算定基礎届の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">10名まで</td>
                            <td class="p-charge-table__data">55,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 12 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険の算定基礎届の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">20名まで</td>
                            <td class="p-charge-table__data">77,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 13 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険の算定基礎届の提出代行（1件につき）</th>
                            <td class="p-charge-table__data">30名まで</td>
                            <td class="p-charge-table__data">88,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 14 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">雇用保険資格取得手続き（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">13,200</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 15 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">雇用保険資格喪失手続き（1件につき 離職票作成含まず）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">13,200</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 16 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">雇用保険資格喪失手続き（1件につき 離職票作成含む）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">24,200</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 17 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険資格取得手続き（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">13,200</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 18 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">社会保険資格喪失手続き（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">13,200</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 19 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">36協定作成及び提出代行（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">33,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 20 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">1年単位の変形労働時間制協定届作成及び提出代行（1件につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">38,500</td>
                            <td class="p-charge-table__data">勤務カレンダーの作成含みます</td>
                        </tr>
                        <!-- 21 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">就業基本本則・賃金規定・育児介護休業規程の作成及び提出代行</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">275,000</td>
                            <td class="p-charge-table__data">打ち合わせ3回、6時間程度</td>
                        </tr>
                        <!-- 22 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">【簡易版】就業基本本則・賃金規定・育児介護休業規程の作成及び提出代行</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">132,000</td>
                            <td class="p-charge-table__data">打ち合わせ1回、2時間程度</td>
                        </tr>
                        <!-- 23 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">人事労務相談（1時間につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">22,000</td>
                            <td class="p-charge-table__data">WEB面談・当社会議室での相談に限ります</td>
                        </tr>
                        <!-- 24 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">人事評価制度導入コンサルティング</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">440,000〜</td>
                            <td class="p-charge-table__data">交通費、別途ご請求</td>
                        </tr>
                        <!-- 25 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労務監査・デューデリジェンス</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">198,000〜</td>
                            <td class="p-charge-table__data">料金は、事業所数、調査項目の範囲により変動</td>
                        </tr>
                        <!-- 26 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">役所調査対応支援（労基署、年金事務所調査など）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">66,000〜</td>
                            <td class="p-charge-table__data">交通費、別途ご請求</td>
                        </tr>
                        <!-- 27 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">介護事業の指定申請（1サービスにつき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">143,000〜</td>
                            <td class="p-charge-table__data">法定費用は、別途ご負担頂きます</td>
                        </tr>
                        <!-- 28 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">介護事業 介護職員等処遇改善加算計画・実績届の作成支援</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">132,000</td>
                            <td class="p-charge-table__data"></td>
                        </tr>
                        <!-- 29 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労働者派遣事業新規許可申請</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">220,000</td>
                            <td class="p-charge-table__data">法定費用は、別途ご負担頂きます</td>
                        </tr>
                        <!-- 30 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">労働者派遣事業更新許可申請</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">110,000</td>
                            <td class="p-charge-table__data">法定費用は、別途ご負担頂きます</td>
                        </tr>
                        <!-- 31 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">研修・セミナー講師（参加人数に関係なく、1時間につき）</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">66,000</td>
                            <td class="p-charge-table__data">資料作成代・交通費、別途ご請求</td>
                        </tr>
                        <!-- 32 -->
                        <tr class="p-charge-table__row">
                            <th class="p-charge-table__row-title">厚生労働省管轄助成金の申請代行</th>
                            <td class="p-charge-table__data">-</td>
                            <td class="p-charge-table__data">受給金額の25%</td>
                            <td class="p-charge-table__data">着手金別途ご請求、最低ご請求額10万円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="p-charge__spot-note">
                ※社員数、事業規模、業務量等により顧問料が変動します。お気軽にご相談ください。
            </p>
        </div>
    </section>

</div>
<?php get_footer(); ?>