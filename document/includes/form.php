<?php if (!defined("DOCROOT")) header("location: /document/");
    require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
    if(!isset($step) ) $step = "input";
?>
<section id="contactSect" class="<?=$step??'input';?>">
    <div class="contactSect_inner">
        <?php
        if(isset($step) && $step=='confirm'): ?>
        <h1 class="contact-title">入力内容確認</h1>
        <p class="contactSect_p_title">入力内容にお間違いがないか、ご確認ください。</p>
        <form class="p-form" method="POST" action="/document/?step=send">
        <?php 
        else: ?>
        <form class="p-form" method="POST" action="/document/?step=confirm">
        <?php 
        endif; ?>
            <div class="contactSect_input_list">

            <?php if(isset($step) && $step=='input'): ?>
                <div class="mar-t30 form-group-index">
                    <p>資料のお送り先の情報をご入力ください。</p>
                </div>
            <?php endif; ?>

            <div class="contactSect_flex_box">
                <label><span class="contactSect_astarisk">必須</span>保護者さまのお名前</label>
                <input type="text" name="保護者さまのお名前" value="<?=h($_POST["保護者さまのお名前"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?> >
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['保護者さまのお名前']; ?></p>
                <?php endif; ?>
                <?php if(isset($step) && $step=='input'): ?>
                    <div class="explain-txt"><span>姓と名の間に全角スペースを入れてください。</span></div>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['保護者さまのお名前'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["保護者さまのお名前"])) ? h($_SESSION["ERROR"]["保護者さまのお名前"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?> 
            </div>
            
            <div class="contactSect_flex_box">
                <label><span class="contactSect_astarisk">必須</span>保護者のお名前<br>(フリガナ)</label>
                <input type="text" name="保護者のお名前のフリガナ" value="<?=h($_POST["保護者のお名前のフリガナ"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?> >
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['保護者のお名前のフリガナ']; ?></p>
                <?php endif; ?>
                <?php if(isset($step) && $step=='input'): ?>
                    <div class="explain-txt"><span>姓と名の間に全角スペースを入れてください。</span></div>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['保護者のお名前のフリガナ'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["保護者のお名前のフリガナ"])) ? h($_SESSION["ERROR"]["保護者のお名前のフリガナ"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="contactSect_flex_box">
                <label><span class="contactSect_astarisk">必須</span>住所</label>
                <input type="text" name="住所" value="<?=h($_POST["住所"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?> >
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['住所']; ?></p>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['住所'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["住所"])) ? h($_SESSION["ERROR"]["住所"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="contactSect_flex_box">
                <label><span class="contactSect_any">任意</span>ビル・マンション名</label>
                <input type="text" name="ビル・マンション名" value="<?=h($_POST["ビル・マンション名"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?> >
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['ビル・マンション名']; ?></p>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['ビル・マンション名'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["ビル・マンション名"])) ? h($_SESSION["ERROR"]["ビル・マンション名"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="contactSect_flex_box">
                <label><span class="contactSect_astarisk">必須</span>連絡先(携帯も可)</label>
                <input class="" type="text" name="連絡先(携帯も可)" value="<?=h($_POST["連絡先(携帯も可)"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?>>
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['連絡先(携帯も可)']; ?></p>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['連絡先(携帯も可)'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["連絡先(携帯も可)"])) ? h($_SESSION["ERROR"]["連絡先(携帯も可)"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="contactSect_flex_box">
                <label><span class="contactSect_astarisk">必須</span>メールアドレス</label>
                <input type="text" name="email" value="<?=h($_POST["email"]??""); ?>" <?= ($step=="confirm")? "hidden" :'';  ?> >
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['email']; ?></p>
                <?php endif; ?>
                <?php if (isset($_SESSION['ERROR']['email'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["email"])) ? h($_SESSION["ERROR"]["email"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if(isset($step) && $step=='input'): ?>
                <div class="mar-t30 form-group-index">
                    <p>その他に気になることがあれば下記にご記載ください。</p>
                </div>
            <?php endif; ?>

            <div class="contactSect_flex_box">
                <label><span class="contactSect_any">任意</span>ご質問・ご不明点等</label>
                <div class="contactSect_select_item textareaContent">
                    <textarea name="ご質問・ご不明点等" rows="5" <?= ($step=="confirm")? "hidden" :'';  ?>><?=h($_POST["ご質問・ご不明点等"]??""); ?></textarea>
                </div>
                <?php if(isset($step) && $step=='confirm'): ?>
                    <p class="confirmPostText"><?php echo $_POST['ご質問・ご不明点等']; ?></p>
                <?php endif; ?>
            </div>

            <?php if(isset($step) && $step=='input'): ?>
                <div class="mar-t30 form-group-index">
                    <p>個人情報の取り扱いについてご確認ください。</p>
                </div>
            <?php endif; ?>

            
            <?php if(isset($step) && $step=='confirm'): ?>
                <div class="contactSect_flex_box">
                    <label>個人情報の取扱い</label>
                    <p class="confirmPostText">『お問い合わせにおける個人情報の取扱いについて』に同意する</p>
                </div>
            <?php endif; ?>

            <?php 
            // ない場合の初期化
            if( !isset($_POST["個人情報の取扱い"]) ){ $_POST["個人情報の取扱い"] = array(); } 
            ?>
            <div class="contactSect_privay">
                <p class="contactSect_privay-title">お問い合わせにおける個人情報の取扱いについて</p>
                <div class="contactSect_privay-Wrap">
                    <ul class="privacyCont">
                        <li class="privacyCont--item">
                            <h3>個人情報保護方針</h3>
                            <p>株式会社グローバルキャスト (以下、「当社」という。)は、ダイレクトマーケティング、テレマーケティング、多言語コミュニケーション、デジタルマーケティング、教育事業、新電力事業およびその附帯事業を行っております。<br>当社は、当社の事業の用に供するすべての個人情報を適切に取扱うため、<br>当社全従業者が遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図ることといたします。</p>
                            <ol>
                                <li>
                                当社は、個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守するため、日本工業規格「個人情報保護マネジメントシステム-要求事項」 (JIS Q 15001)に準拠した個人情報保護マネジメントシステムを策定し、適切に運用いたします。
                                </li>
                                <li>
                                当社は、事業の内容及び規模を考慮した適切な個人情報の取得、利用及び提供を行います。 それには特定された利用目的の達成に必要な範囲を超えた個人情報の取扱いを行わないこと及びそのための措置を講じることを含みます。
                                </li>
                                <li>
                                当社は、個人情報の取扱いの全部又は一部を委託する場合は、その取扱いを委託された個人情報の安全管理が図られるよう、委託を受けた者に対する必要かつ適切な監督を行います。
                                </li>
                                <li>
                                当社は、本人の同意がある場合又は法令に基づく場合を除き、個人情報を第三者に提供することはありません。
                                </li>
                                <li>
                                当社は、個人情報の漏えい、滅失又はき損の防止及び是正のための措置を講じます。
                                </li>
                                <li>
                                当社は、個人情報の取扱いに関する苦情及び相談への適切かつ迅速な対応に努めます。また、当社が保有する開示対象個人情報の開示等の求め(利用目的の通知、開示、訂正・追加又は削除、利用又は提供の停止）を受け付けます。開示等の求めの手続きにつきましては、以下の「個人情報に関する相談窓口」までご連絡ください。
                                </li>
                                <li>
                                当社は、個人情報保護マネジメントシステムの継続的改善を行ないます。
                                </li>
                            </ol>
                            <p>
                            制定：2011年10月1日<br>
                            改定：2020年5月12日<br>
                            株式会社グローバルキャスト<br>
                            代表取締役社長 川口 英幸
                            </p>
                        </li>
                        <li class="privacyCont--item">
                            <h3>当社における個人情報の取扱いについて</h3>
                            <p>（個人情報保護法及びJISに基づく公表事項及び本人が容易に知り得る状態に置く事項）<br>（個人情報保護法及びJISに基づく「本人の知り得る状態（本人の求めに応じて遅滞なく回答する場合を含む。）」に置く事項）</p>
                            <ol class="style-none">
                                <li>
                                    <p class="ol-table-p">● 個人情報取り扱い事業者の氏名または名称及び住所並びに法人にあっては、その代表者の氏名</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>個人情報取り扱い<br>事業者の氏名<br>または名称</td>
                                                <td>株式会社グローバルキャスト</td>
                                            </tr>
                                            <tr>
                                                <td>住所</td>
                                                <td>〒453-6114<br>愛知県名古屋市中村区平池町 4-60-12 グローバルゲート 14F</td>
                                            </tr>
                                            <tr>
                                                <td>代表者の氏名</td>
                                                <td>川口 英幸</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <p class="ol-table-p">● 個人情報保護管理者の職名、所属及び連絡先</p>
                                    経営管理グループ長（連絡先は下記「個人情報に関する相談窓口」）
                                </li>
                                <li>
                                    <p class="ol-table-p">● 個人情報の利用目的</p>
                                    当社が、ダイレクトマーケティング、テレマーケティング、多言語コミュニケーション、デジタルマーケティング、教育事業、新電力事業およびその附帯事業を主な事業としていることを踏まえて当社が取扱う個人情報の利用目的を以下のように定めます。
                                </li>
                            </ol>
                            <p>(1)　保有個人データの利用目的</p>
                            <ol>
                                <li>
                                    お客様の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">・ご契約内容を実施し、適切に管理するため</li>
                                    </ol>
                                </li>
                                <li>
                                    お取引先様の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">・お取引先様との間のご契約内容を適切に管理するため</li>
                                    </ol>
                                </li>
                                <li>
                                    株主の皆様の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">
                                        ・会社法及び商法に基づく権利の行使・義務の履行のため
                                        </li>
                                        <li class="mb-0">
                                        ・当社から各種便宜を供与するため
                                        </li>
                                        <li class="mb-0">
                                        ・株主と会社の関係の円滑化を図るための各種の施策を実施するため
                                        </li>
                                        <li class="mb-0">
                                        ・各種法令に基づき所定の基準による株主のデータを作成する等、株主管理のため
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    当社への入社を希望される皆様の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">
                                        ・就職先としてご興味をお持ちになった方並びにご応募いただいた方への採用、募集情報等の提供・連絡のため
                                        </li>
                                        <li class="mb-0">
                                            ・採用選考業務のため
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    当社の社員の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">
                                        ・業務上の連絡、社員名簿の作成、法律上要求される諸手続(本人退職後も含む)、その他雇用管理のため。
                                        </li>
                                        <li class="mb-0">
                                        ・人事選考、配属先および出向、派遣先の決定のため。
                                        </li>
                                        <li class="mb-0">
                                        ・報酬の決定および支払、税務処理、社会保険関連の手続き、福利厚生の提供のため。
                                        </li>
                                        <li class="mb-0">
                                        ・ビデオ及びオンラインによるモニタリング等における安全管理措置のため。<br>
                                        </li>
                                        <li class="mb-0">
                                        ・当社PR又は宣伝資料等における当社PR又は宣伝活動等のため。<br>
                                        </li>
                                        <li class="mb-0">
                                        ・適正な健康管理のため。(健康診断の結果等の労働者の健康情報については、法令に基づく場合を除いて、取得、利用又は提供を行いません。)
                                        </li>
                                    </ol>
                                </li> 
                                <li>
                                    当社へお問合せ頂いた方の個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">
                                        ・当社の接客態度等の向上のため
                                        </li>
                                        <li class="mb-0">
                                        ・お問い合わせやご連絡内容を正確に把握し、対処するため
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <p>※上記利用目的において、「ご契約内容を適切に管理するため」としているものは、「契約に入る前の段階における利用」と「契約終了後における利用」を含みます。</p>
                            <br>
                            <p>(2)　それ以外の個人データの利用目的</p>
                            <ol>
                                <li>
                                    お取引先様から委託を受けて取得する個人情報
                                    <ol class="style-none mt-15">
                                        <li class="mb-0">・各種販売取次業務、ウェブ関連及びデザイン関連サービス、その他コールセンターの受託業務をはじめとする業務を適切に実施するため</li>
                                    </ol>
                                </li>
                            </ol>
                            <ol class="style-none">
                                <li>
                                    <p class="ol-table-p">● 保有個人データの取扱いに関する苦情の申し出先</p>
                                    「個人情報に関する相談窓口」（末尾に記載）
                                </li>
                                <li>
                                    <p class="ol-table-p">● 認定個人情報保護団体の名称及び苦情の解決の申し出先</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>名称</td>
                                                <td>一般財団法人 日本情報経済社会推進協会<br>認定個人情報保護団体事務局</td>
                                            </tr>
                                            <tr>
                                                <td>住所</td>
                                                <td>〒4160-0032<br>東京都港区六本木一丁目9番9号六本木ファーストビル内</td>
                                            </tr>
                                            <tr>
                                                <td>電話番号</td>
                                                <td><a href="tel:+03-5860-7565">03-5860-7565</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <p>※当社の商品・サービスに関する問合せ先ではございません</p>
                                </li>
                                <li>
                                    <p class="ol-table-p">● 開示等の求めに応じる手続き</p>
                                    <ol>
                                        <li>
                                            開示等の求めの申し出先
                                            <ol class="style-none mt-15">
                                                <li class="mb-0">・「個人情報に関する相談窓口」（末尾に記載）</li>
                                            </ol>
                                        </li>
                                        <li>
                                            開示等の求めに際して提出すべき書面の様式その他の開示等の求めの方式
                                            <br>
                                            <br>
                                            保有個人データに関する開示等のお申し出は、下記の受付窓口までご連絡ください。ご連絡いただきましたら、当社所定の「保有個人データ開示等請求書」を郵送または、メール等でお送り致します。内容ご記入の上必要書類を同封し、郵送またはメール等にてお申し込み下さい。（送付料は請求者のご負担となります。）<br>ご本人（または代理人）であることを確認した上で、ご希望の開示方法により回答いたします。
                                            <br>
                                            <br>
                                            <ol class="mt-15" style="list-style: lower-alpha;">
                                                <li>当社指定の「開示等の求め申請書」
                                                    <ol class="style-none mt-15">
                                                        <li class="mb-0">お手元にない場合は、ご連絡ください。こちらからお送りいたします。</li>
                                                    </ol>
                                                </li>
                                                <li>本人確認書類
                                                    <ol class="mt-15" style="list-style: upper-roman;">
                                                        <li>ご本人によるお申し込みの場合 不要（後日、ご本人確認のためにご連絡することがあります。）</li>
                                                        <li>代理人によるお申し込みの場合 下記の書類のうち該当するもののすべて。
                                                            <ol class="mt-15 katakana-list">
                                                                <li>ア.親権者（または未成年被後見人)の場合
                                                                    <ol class="style-none mt-15">
                                                                        <li class="mb-0">・本人の住所・本籍を確認できる公的証明書のコピー</li>
                                                                        <li class="mb-0">・戸籍謄本(全部事項証明)1通のコピー</li>
                                                                        <li class="mb-0">・代理人の住所・本籍を確認できる公的証明書のコピー</li>
                                                                        <li class="mb-0">※上記はデータでも可</li>
                                                                    </ol>
                                                                </li>
                                                                <li>イ.成年後見人(成年被後見人の法定代理人)の場合
                                                                    <ol class="style-none mt-15">
                                                                        <li class="mb-0">・本人の住所を確認できる公的証明書のコピー</li>
                                                                        <li class="mb-0">・「登記事項証明書」1通のコピー(本人の法定代理人であることがわかるもの。)</li>
                                                                        <li class="mb-0">・代理人の住所を確認できる公的証明書のコピー</li>
                                                                        <li class="mb-0">※上記はデータでも可</li>
                                                                    </ol>
                                                                </li>
                                                                <li>ウ.委任状による代理人の場合
                                                                    <ol class="style-none mt-15">
                                                                        <li class="mb-0">・本人の印鑑証明書のコピー</li>
                                                                        <li class="mb-0">・当社指定の委任状(本人の印鑑証明書で使用している印鑑を捺印したもの)<br>（当社指定の委任状がお手元にない場合は、ご連絡ください。早急にご郵送、またはメールします。</li>
                                                                        <li class="mb-0">・代理人の住所を確認できる公的証明書のコピー(弁護士の場合は登録番号でも可)</li>
                                                                        <li class="mb-0">※上記はデータでも可</li>
                                                                        <li class="mb-0">※「公的証明書」とは、運転免許証、各種健康保険証・年金手帳等、写真付き住民基本台帳カード、旅券（パスポート）、外国人登録証明書、印鑑登録証明書、住民票の写し、戸籍謄本・抄本、外国人登録原票の写し などを言います。</li>
                                                                        <li class="mb-0">※ご提示いただいた本人確認書類は、以下の通り利用いたします。ご同意いただける方のみご送付下さい。</li>
                                                                        <li class="mb-0">・当個人情報は、本人からの開示等の求めに応じるために利用いたします。</li>
                                                                        <li class="mb-0">・ご提示いただく本人確認書類によっては、本籍地等特定の機微な個人情報を取得することがあります。</li>
                                                                        <li class="mb-0">・法令に基づく場合を除いて、当個人情報を本人の同意なく第三者に提供することはありません。また、当個人情報の取扱いを委託する予定はありません。</li>
                                                                        <li class="mb-0">・本人確認書類等により本人確認が出来ない場合、開示等の求めに応じられない場合がございます。</li>
                                                                        <li class="mb-0">・その他、当社の個人情報の取扱いについては以下の当社のホームページをご覧下さい。<br><a href="https://global-cast.jp/privacypolicy/">https://global-cast.jp/privacypolicy/</a></li>
                                                                    </ol>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>手数料
                                                    <ol class="style-none mt-15">
                                                        <li class="mb-0">「利用目的の通知」あるいは「開示」につきましては、1件のお申込みにつき手数料として1,000円いただきます。1,000円分の郵便小為替を上記書類にあわせてご同封ください。 メールにて対応させていただく場合は、振込先の口座をメールにてお知らせいたします。上記の通り手数料が同封されていなかった場合は、その旨ご連絡申し上げますが、所定の期間内にお支払いいただけない場合は開示等の求めがなかったものといたします。なお、送付頂いた書類、データは原則としてご返却いたしません。</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li class="privacyCont--item">
                            <h3>個人情報に関する相談窓口</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>情報セキュリティ<br>管理責任者</td>
                                        <td>管理グループ長</td>
                                    </tr>
                                    <tr>
                                        <td>連絡先</td>
                                        <td>〒453-6114<br>愛知県名古屋市中村区平池町4-60-12 グローバルゲート 14F</td>
                                    </tr>
                                    <tr>
                                        <td>電話番号</td>
                                        <td><a href="tel:+052-433-7177">052-433-7177</a></td>
                                    </tr>
                                    <tr>
                                        <td>Fax番号</td>
                                        <td>052-433-7178</td>
                                    </tr>
                                    <tr>
                                        <td>e-mail</td>
                                        <td>privacy@global-cast.jp</td>
                                    </tr>
                                    <tr>
                                        <td>受付時間</td>
                                        <td>月曜日～金曜日　祝祭日を除く10時～16時</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <ol class="style-none">
                                <li>
                                    ※注意事項<br><br>
                                    <ol class="style-none">
                                        <li class="mb-0">・郵送や配送途中の書類の紛失、事故による未着につきましては、当社では責任を負いかねます。</li>
                                        <li class="mb-0">・必要事項を全てご記入下さい。書類に不備がある場合は、返送させていただく場合がございます。</li>
                                        <li class="mb-0">・個人情報保護法の例外規定にあたる場合など、開示等の求めにお答えできない場合がございます。</li>
                                        <li class="mb-0">・内容により、お時間をいただく場合がございます。</li>
                                        <li class="mb-0">・開示等の求めにともない収集した個人情報は、開示等の求めの必要な範囲のみで取扱うものとします。提出していただいた書面は当社で適切に廃棄いたします。</li>
                                        <li class="mb-0">・「訂正等」、「利用停止等」の結果、該当するサービスがご利用いただけなくなることがあります。あらかじめご了承下さい。</li>
                                        <li class="mb-0">※「保有個人データ」とは、電子計算機を用いて検索することができるように体系的に構成した情報の集合物又は一定の規則に従って整理、分類し、 目次、索引、符合などを付すことによって特定の個人情報を容易に検索できるように体系的に構成した情報の集合物を構成する個人情報であって、 当社が、本人から求められる開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止、第三者への提供記録の停止の求めのすべてに応じることができる権限を有するものをいいます。 詳しくは、「個人情報苦情及びご相談窓口」までご連絡ください。</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li class="privacyCont--item">
                            <h3>共同利用プライバシーポリシーについて</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>共同利用する者の範囲</td>
                                        <td>
                                            <ol class="style-none">
                                                <li class="mb-0">○当社は以下の者との間でお客さまの個人情報を共同で利用することがあります。 ※1</li>
                                                <li class="mb-0">・小売電気事業者 ※2</li>
                                                <li class="mb-0">・一般送配電事業者 ※3</li>
                                                <li class="mb-0">・電力広域的運営推進機関</li>
                                                <li class="mb-0">・需要抑制契約者 ※4</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>共同利用の目的</td>
                                        <td>
                                            <ol class="style-none">
                                                <li class="mb-0">① 託送供給契約又は電力量調整供給契約（以下「託送供給等契約」といいます。）の締結、変更又は解約のため</li>
                                                <li class="mb-0">②小売供給契約（離島供給及び最終保障供給に関する契約を含む。）又は電気受給契約（以下「小売供給等契約」といいます。）の廃止取次※5のため</li>
                                                <li class="mb-0">③供給（受電）地点に関する情報の確認のため</li>
                                                <li class="mb-0">④電力量の検針、設備の保守・点検・交換、停電時・災害時等の設備の調査その他の託送供給等契約に基づく一般送配電事業者の業務遂行のため ⑤ネガワット取引に関する業務遂行のため</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>共同利用する情報項目</td>
                                        <td>
                                            <ol class="style-none">
                                                <li class="mb-0">①基本情報：氏名、住所、電話番号及び小売供給等契約の契約番号</li>
                                                <li class="mb-0">②供給（受電）地点に関する情報：託送供給等契約を締結する一般送配電事業者の供給区域、離島供給約款対象、供給（受電）地点特定番号、託送契約高情報、電流上限値、接続送電サービスメニュー、力率、供給方式、託送契約決定方法、計器情報、引込柱番号、系統連系設備有無、託送契約異動年月日、検針日、契約状態、廃止措置方法</li>
                                                <li class="mb-0">③ネガワット取引に関する情報：発電販売量、需要調達量、需要抑制量、ベースライン</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>共同利用の管理責任者</td>
                                        <td>
                                            <ol class="style-none">
                                                <li class="mb-0">①基本情報：小売供給等契約を締結している小売電気事業者<br>（但し、離島供給又は最終保障供給を受けている需要者に関する基本情報については、一般送配電事業者）</li>
                                                <li class="mb-0">②供給（受電）地点に関する情報：供給（受電）地点を供給区域とする一般送配電事業者</li>
                                                <li class="mb-0">③ネガワット取引に関する情報：需要抑制契約者</li>
                                            </ol>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <ol class="style-none asteriskList">
                                <li>※1. 当社は、共同利用の目的のために必要な範囲の事業者に限定してお客さまの個人情報を共同利用するものであり、必ずしも全ての小売電気事業者、一般送配電事業者及び需要抑制契約者との間でお客さまの個人情報を共同利用するものではありません。</li>
                                <li>※2. 小売電気事業者とは、 電気事業法（昭和３９年７月１１日法律第１７０号）第２条の５第１項に規定する登録拒否事由に該当せず、小売電気事業者として経済産業大臣の登録を受けた事業者（電気事業法等の一部を改正する法律（平成２６年法律第７２号）の附則により、小売電気事業者の登録を受けたとみなされた事業者を含みます。）をいいます（事業者の名称、所在地等につきましては、資源エネルギー庁のホームページ（<a href="http://www.enecho.meti.go.jp/category/electricity_and_gas/electric/summary/retailers_list/">http://www.enecho.meti.go.jp/category/electricity_and_gas/electric/summary/retailers_list/</a>）をご参照ください）。</li>
                                <li>※3. 一般送配電事業者とは、北海道電力ネットワーク株式会社、東北電力ネットワーク株式会社、東京電力パワーグリッド株式会社、中部電力パワーグリッド株式会社、北陸電力送配電株式会社、関西電力送配電株式会社、中国電力ネットワーク株式会社、四国電力送配電株式会社、九州電力送配電株式会社及び沖縄電力株式会社をいいます。</li>
                                <li>※4. 需要抑制契約者とは、一般送配電事業者たる会員との間で需要抑制量調整供給契約を締結している事業者（契約締結前に事業者コードを取得している事業者を含みます）をいいます（事業者の名称、所在地等については、電力広域的運営推進機関のホームページ（<a href="https://www.occto.or.jp/privacy/negawatt-jigyousya.html">https://www.occto.or.jp/privacy/negawatt-jigyousya.html</a>）をご参照ください）。</li>
                                <li>※5. 「小売供給等契約の廃止取次」とは、お客さまから新たに小売供給等契約の申込みを受けた事業者が、お客さまを代行して、既存の事業者に対して、小売供給等契約の解約の申込みを行うことをいいます。</li>
                            </ol>
                        </li>
                        <li class="privacyCont--item">
                            <h3>情報セキュリティに関する方針</h3>
                            <p>株式会社グローバルキャストについて、第一にお客様はもとより、当社のサービスに関わる全ての人々の満足を得る事を目標とし、信頼・安心され、発展し続ける会社を目指す。</p>
                            <br>
                            <p style="font-weight: 500;">● 行動指針</p>
                            <ol>
                                <li>
                                情報資産の機密性、完全性、可用性を確実に保護するために組織的、技術的に適切な対策を講じ、変化する情報技術や新たな脅威に対応する。
                                </li>
                                <li>
                                全社員に情報セキュリティ教育の実施と方針の周知徹底をはかり、意識の高揚・維持に務める。
                                </li>
                                <li>
                                マネジメントシステム及び、情報セキュリティに関する目的を設定し、定期的にレビューし、継続的に改善を実施し、維持する。
                                </li>
                                <li>
                                マネジメントシステムを実行・維持・改善して行くために管理責任者に責任と権限を委譲する。
                                </li>
                            </ol>
                            <br><br><br><br>
                            <p>
                            2015年10月23日<br>
                            株式会社グローバルキャスト<br>
                            代表取締役社長 川口 英幸
                            </p>
                        </li>
                    </ul> 
                </div>
                <label class="inline">
                    <input class="contactSect_checkbox" type="checkbox" name="個人情報の取扱い[]" value="同意する" <?php if(in_array("同意する",$_POST["個人情報の取扱い"])) echo "checked" ; ?> <?= ($step=="confirm")? "disabled=\"disabled\"" :'';  ?> />
                    『お問い合わせにおける個人情報の取扱いについて』に同意する 
                    <span></span>
                </label>
                <?php if (isset($_SESSION['ERROR']['個人情報の取扱い'])) : ?>
                    <div class="p-form__container">
                        <div class="c-error">
                            <?= (isset($_SESSION["ERROR"]["個人情報の取扱い"])) ? h($_SESSION["ERROR"]["個人情報の取扱い"]) : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php 
        if(isset($step) && $step=='confirm'): ?>
            <p style="text-align:center;">
                <input type="hidden" name="token" value="<?= $token; ?>" />
                <div class="confirmBtnWrap">
                    <input class="btn" type="reset" value="修正する" style="cursor: pointer;">
                    <input class="btn" type="submit" value="送信する" style="cursor: pointer;"/>
                </div>
            </p>
        <?php 
        else: ?>
            <p style="text-align:center;">
                <input class="btn" type="submit" value="入力内容を確認" style="cursor: pointer;margin: 0 auto;"/>
                <!-- <?php if(!empty($_SESSION['ERROR'])): ?>
                    <div class="mar-t10 c-error" style="text-align:center;">
                    <?php
                    foreach($_SESSION['ERROR'] as $key => $val) {
                        echo "$key の入力欄を確認してください<br/>";
                    }
                    ?>
                    </div>
                <?php endif; ?> -->
            </p>
        <?php 
        endif;?>
        </form>
    </div>
</section>

