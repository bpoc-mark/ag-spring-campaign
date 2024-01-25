<?php  
  require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';
  
  ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>バレッドキッズ</title>
<meta name="description" content="ページの説明" />
<meta name="format-detection" content="telephone=no" />

<link rel="icon" href="favicon.ico" />

<!-- ogp -->
<!-- ogp -->
<meta property="og:site_name" content="バレッドキッズの夏休み" />
<meta property="og:url" content="<?=BASEURL;?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="バレッドキッズの夏休み" />
<meta property="og:description" content="eスポーツ講座や、動画作成講座、プログラミング講座など、夏休みのこの機会に子どもの「好き」を、この夏、学びに変えませんか？バレッドキッズでは、夏の思い出に残る素晴らしい体験を提供し、お子様の成長をサポートします。" />
<meta property="og:image" content="<?=BASEURL;?>images/ogp.jpg" />
<meta property="og:locale" content="ja_JP" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="" />
<meta name="twitter:image:src" content="<?=BASEURL;?>images/ogp.jpg" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
<meta name="facebook-domain-verification" content="nqnj8gi26ly2mi5fiaqjfd1uqobagm" />

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- Google Tag Manager バレッドキッズ -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKHNPVK');</script>
<!-- End Google Tag Manager バレッドキッズ -->
<!-- Google Tag Manager 夏休みLP -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDR23PM');</script>
<!-- End Google Tag Manager 夏休みLP -->
</head>
<body>
<!-- Google Tag Manager (noscript) バレッドキッズ　-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKHNPVK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) バレッドキッズ -->
<!-- Google Tag Manager (noscript) 夏休みLP -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDR23PM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) 夏休みLP -->

<style>
  /* .swiper {
  width: 600px;
  height: 300px;
} */
</style>

<header id="top-head">
  <div class="header--wrap">
    <div class="header--container">
      <div class="header--left">
        <a href="index.php"><img src="/images/common/logo.svg" alt="" /></a>
      </div>
      <div class="header--right">
        <a href="#sec12" class="header--request">
          <p class="header--request__txt">無料体験・お問い合わせはこちら</p>
        </a>
        <div class="header--menu">
          <a href="" class="header--menu__btn">
            <span></span>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="31.044" height="8.556" viewBox="0 0 31.044 8.556">
                <path id="Path_6371" data-name="Path 6371" d="M-14.778,0a.621.621,0,0,1-.7-.708V-7.692a.643.643,0,0,1,.21-.558,1.059,1.059,0,0,1,.618-.15.923.923,0,0,1,.84.48l2.124,3.552,2.1-3.54a.866.866,0,0,1,.39-.4,1.484,1.484,0,0,1,.582-.1.626.626,0,0,1,.708.708V-.708A.626.626,0,0,1-8.61,0a.626.626,0,0,1-.708-.708v-5.28L-11.01-3.06a.763.763,0,0,1-.684.492.763.763,0,0,1-.684-.492l-1.7-2.928v5.28A.621.621,0,0,1-14.778,0ZM-5.5,0A.626.626,0,0,1-6.21-.708V-7.692A.626.626,0,0,1-5.5-8.4h4.2q.708,0,.708.648t-.708.636H-4.83v2.184h3.156q.708,0,.708.648t-.708.648H-4.83v2.352h3.66q.708,0,.708.636T-1.17,0ZM1.506,0A.615.615,0,0,1,.822-.708V-7.692A.615.615,0,0,1,1.506-8.4h.156a.974.974,0,0,1,.852.468l3.648,5.5V-7.692a.7.7,0,0,1,.186-.528A.72.72,0,0,1,6.87-8.4a.621.621,0,0,1,.7.708V-.708q0,.708-.66.708h-.12a.955.955,0,0,1-.852-.468L2.2-6.132V-.708A.621.621,0,0,1,1.506,0Zm10.86.156a3.236,3.236,0,0,1-2.4-.834,3.413,3.413,0,0,1-.828-2.5V-7.692a.7.7,0,0,1,.186-.528.72.72,0,0,1,.522-.18.621.621,0,0,1,.7.708v4.44a2.147,2.147,0,0,0,.486,1.566,1.808,1.808,0,0,0,1.338.486A1.787,1.787,0,0,0,13.7-1.686a2.165,2.165,0,0,0,.48-1.566v-4.44a.621.621,0,0,1,.7-.708.621.621,0,0,1,.7.708V-3.18a3.445,3.445,0,0,1-.816,2.5A3.194,3.194,0,0,1,12.366.156Z" transform="translate(15.474 8.4)" fill="#fff"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="37.284" height="8.808" viewBox="0 0 37.284 8.808">
                <path id="Path_6370" data-name="Path 6370" d="M-14.706.192a3.856,3.856,0,0,1-2.034-.54,3.7,3.7,0,0,1-1.4-1.53,5.055,5.055,0,0,1-.5-2.322,5.083,5.083,0,0,1,.5-2.334,3.745,3.745,0,0,1,1.4-1.536,3.824,3.824,0,0,1,2.034-.546A3.869,3.869,0,0,1-13.14-8.3a3.728,3.728,0,0,1,1.242.876.532.532,0,0,1,.156.534.714.714,0,0,1-.324.414l-.06.036a.732.732,0,0,1-.444.072.86.86,0,0,1-.528-.252,2.123,2.123,0,0,0-.714-.474,2.372,2.372,0,0,0-.894-.162,2.294,2.294,0,0,0-1.308.378,2.437,2.437,0,0,0-.87,1.068A3.952,3.952,0,0,0-17.19-4.2a3.92,3.92,0,0,0,.306,1.6,2.437,2.437,0,0,0,.87,1.068,2.294,2.294,0,0,0,1.308.378A2.231,2.231,0,0,0-13.1-1.788a.909.909,0,0,1,.492-.264.825.825,0,0,1,.48.072l.024.024a.68.68,0,0,1,.354.4.522.522,0,0,1-.126.546,3.634,3.634,0,0,1-1.248.888A3.942,3.942,0,0,1-14.706.192ZM-9.45,0a.626.626,0,0,1-.708-.708V-7.692A.615.615,0,0,1-9.474-8.4a.621.621,0,0,1,.7.708v6.408h3.672q.708,0,.708.636T-5.106,0ZM.2.192a3.856,3.856,0,0,1-2.034-.54,3.7,3.7,0,0,1-1.4-1.53,5.055,5.055,0,0,1-.5-2.322,5.083,5.083,0,0,1,.5-2.334,3.745,3.745,0,0,1,1.4-1.536A3.824,3.824,0,0,1,.2-8.616,3.762,3.762,0,0,1,2.22-8.07,3.815,3.815,0,0,1,3.612-6.534,5.033,5.033,0,0,1,4.122-4.2a5.005,5.005,0,0,1-.51,2.322A3.772,3.772,0,0,1,2.22-.348,3.794,3.794,0,0,1,.2.192Zm0-1.344A2.258,2.258,0,0,0,1.506-1.53,2.47,2.47,0,0,0,2.364-2.6,3.92,3.92,0,0,0,2.67-4.2a3.952,3.952,0,0,0-.306-1.614,2.47,2.47,0,0,0-.858-1.068A2.258,2.258,0,0,0,.2-7.26a2.294,2.294,0,0,0-1.308.378,2.437,2.437,0,0,0-.87,1.068A3.952,3.952,0,0,0-2.286-4.2,3.92,3.92,0,0,0-1.98-2.6,2.437,2.437,0,0,0-1.11-1.53,2.294,2.294,0,0,0,.2-1.152ZM8.442.168A4.433,4.433,0,0,1,6.786-.138a3.1,3.1,0,0,1-1.32-1.026A.632.632,0,0,1,5.328-1.7a.66.66,0,0,1,.354-.4.624.624,0,0,1,.5-.1,1.023,1.023,0,0,1,.456.318,2.251,2.251,0,0,0,.774.54,2.727,2.727,0,0,0,1.074.192,1.777,1.777,0,0,0,1.182-.306,1.062,1.062,0,0,0,.342-.834,1.065,1.065,0,0,0-.15-.576,1.377,1.377,0,0,0-.624-.45,8.2,8.2,0,0,0-1.458-.426A3.349,3.349,0,0,1,6.06-4.62,2.15,2.15,0,0,1,5.5-6.144a2.356,2.356,0,0,1,.354-1.29,2.379,2.379,0,0,1,1-.87,3.409,3.409,0,0,1,1.506-.312A3.7,3.7,0,0,1,9.93-8.3a3.56,3.56,0,0,1,1.128.8.58.58,0,0,1,.18.5.765.765,0,0,1-.312.456.606.606,0,0,1-.5.168,1,1,0,0,1-.48-.276A2.687,2.687,0,0,0,9.258-7.1a2.132,2.132,0,0,0-.912-.18,1.745,1.745,0,0,0-1.014.27.92.92,0,0,0-.39.81,1,1,0,0,0,.114.462,1.134,1.134,0,0,0,.5.426,5.463,5.463,0,0,0,1.206.4,4.155,4.155,0,0,1,2.076.972,2.235,2.235,0,0,1,.636,1.632,2.186,2.186,0,0,1-.834,1.842A3.514,3.514,0,0,1,8.442.168ZM13.6,0a.626.626,0,0,1-.708-.708V-7.692A.626.626,0,0,1,13.6-8.4h4.2q.708,0,.708.648t-.708.636H14.274v2.184H17.43q.708,0,.708.648t-.708.648H14.274v2.352h3.66q.708,0,.708.636T17.934,0Z" transform="translate(18.642 8.616)" fill="#fff"/>
              </svg>
            </p>
          </a>
          <div class="header--ham_menu">
            <div class="header--ham_menu__container">
              <!-- <a href="" class="close-btn">
                <span></span>
                <p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="37.284" height="8.808" viewBox="0 0 37.284 8.808">
                    <path id="Path_6370" data-name="Path 6370" d="M-14.706.192a3.856,3.856,0,0,1-2.034-.54,3.7,3.7,0,0,1-1.4-1.53,5.055,5.055,0,0,1-.5-2.322,5.083,5.083,0,0,1,.5-2.334,3.745,3.745,0,0,1,1.4-1.536,3.824,3.824,0,0,1,2.034-.546A3.869,3.869,0,0,1-13.14-8.3a3.728,3.728,0,0,1,1.242.876.532.532,0,0,1,.156.534.714.714,0,0,1-.324.414l-.06.036a.732.732,0,0,1-.444.072.86.86,0,0,1-.528-.252,2.123,2.123,0,0,0-.714-.474,2.372,2.372,0,0,0-.894-.162,2.294,2.294,0,0,0-1.308.378,2.437,2.437,0,0,0-.87,1.068A3.952,3.952,0,0,0-17.19-4.2a3.92,3.92,0,0,0,.306,1.6,2.437,2.437,0,0,0,.87,1.068,2.294,2.294,0,0,0,1.308.378A2.231,2.231,0,0,0-13.1-1.788a.909.909,0,0,1,.492-.264.825.825,0,0,1,.48.072l.024.024a.68.68,0,0,1,.354.4.522.522,0,0,1-.126.546,3.634,3.634,0,0,1-1.248.888A3.942,3.942,0,0,1-14.706.192ZM-9.45,0a.626.626,0,0,1-.708-.708V-7.692A.615.615,0,0,1-9.474-8.4a.621.621,0,0,1,.7.708v6.408h3.672q.708,0,.708.636T-5.106,0ZM.2.192a3.856,3.856,0,0,1-2.034-.54,3.7,3.7,0,0,1-1.4-1.53,5.055,5.055,0,0,1-.5-2.322,5.083,5.083,0,0,1,.5-2.334,3.745,3.745,0,0,1,1.4-1.536A3.824,3.824,0,0,1,.2-8.616,3.762,3.762,0,0,1,2.22-8.07,3.815,3.815,0,0,1,3.612-6.534,5.033,5.033,0,0,1,4.122-4.2a5.005,5.005,0,0,1-.51,2.322A3.772,3.772,0,0,1,2.22-.348,3.794,3.794,0,0,1,.2.192Zm0-1.344A2.258,2.258,0,0,0,1.506-1.53,2.47,2.47,0,0,0,2.364-2.6,3.92,3.92,0,0,0,2.67-4.2a3.952,3.952,0,0,0-.306-1.614,2.47,2.47,0,0,0-.858-1.068A2.258,2.258,0,0,0,.2-7.26a2.294,2.294,0,0,0-1.308.378,2.437,2.437,0,0,0-.87,1.068A3.952,3.952,0,0,0-2.286-4.2,3.92,3.92,0,0,0-1.98-2.6,2.437,2.437,0,0,0-1.11-1.53,2.294,2.294,0,0,0,.2-1.152ZM8.442.168A4.433,4.433,0,0,1,6.786-.138a3.1,3.1,0,0,1-1.32-1.026A.632.632,0,0,1,5.328-1.7a.66.66,0,0,1,.354-.4.624.624,0,0,1,.5-.1,1.023,1.023,0,0,1,.456.318,2.251,2.251,0,0,0,.774.54,2.727,2.727,0,0,0,1.074.192,1.777,1.777,0,0,0,1.182-.306,1.062,1.062,0,0,0,.342-.834,1.065,1.065,0,0,0-.15-.576,1.377,1.377,0,0,0-.624-.45,8.2,8.2,0,0,0-1.458-.426A3.349,3.349,0,0,1,6.06-4.62,2.15,2.15,0,0,1,5.5-6.144a2.356,2.356,0,0,1,.354-1.29,2.379,2.379,0,0,1,1-.87,3.409,3.409,0,0,1,1.506-.312A3.7,3.7,0,0,1,9.93-8.3a3.56,3.56,0,0,1,1.128.8.58.58,0,0,1,.18.5.765.765,0,0,1-.312.456.606.606,0,0,1-.5.168,1,1,0,0,1-.48-.276A2.687,2.687,0,0,0,9.258-7.1a2.132,2.132,0,0,0-.912-.18,1.745,1.745,0,0,0-1.014.27.92.92,0,0,0-.39.81,1,1,0,0,0,.114.462,1.134,1.134,0,0,0,.5.426,5.463,5.463,0,0,0,1.206.4,4.155,4.155,0,0,1,2.076.972,2.235,2.235,0,0,1,.636,1.632,2.186,2.186,0,0,1-.834,1.842A3.514,3.514,0,0,1,8.442.168ZM13.6,0a.626.626,0,0,1-.708-.708V-7.692A.626.626,0,0,1,13.6-8.4h4.2q.708,0,.708.648t-.708.636H14.274v2.184H17.43q.708,0,.708.648t-.708.648H14.274v2.352h3.66q.708,0,.708.636T17.934,0Z" transform="translate(18.642 8.616)" fill="#fff"/>
                  </svg>
                </p>
              </a> -->
              <div class="close-btn__center">
                <ul> 
                  <li><a href="index.php">TOP</a></li>
                  <li><a href="#sec03">バレッドキッズとは？</a></li>
                  <li><a href="#sec06">バレッドキッズの3つの特長</a></li>
                  <li><a href="#sec08">独自のカリキュラム</a></li>
                  <li><a href="#sec10">体験参加者・受講生の声</a></li>
                  <li><a href="#sec11">よくある質問</a></li>
                </ul>
                <div>
                  <a href="" class="btn_01">無料体験・<br class="sp">お問い合 わせはこちら</a>
                </div>
              </div>
            </div>
            <div class="bg-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>



<!-- コンテンツを記述 -->
<main>
<div class="contents">
<section id="sec1" class="sec1">
  <div class="mar-style">
    <div class="content">
      <div class="pc">
        <h1>
          <img draggable="false"  src="./images/sec1/mv_ttl-1.png" alt="幼児・小学校低学年から始められる！ | 子どもたちが社会を生きぬく力を身につける | プログラミング教室">
        </h1>
        <div class="flex">
          <div class="left">
            <figure>
              <img draggable="false"  src="./images/sec1/mv_ttl-2.png" alt="入会キャンペーン実施中！ | ※キャンペーンは、PC-ITCコースのみ対象になります。">
            </figure>
          </div>
          <div class="right">
            <figure>
              <img draggable="false"  src="./images/sec1/mv_ttl-3.png" alt="各教室にて | 無料体験! | 受付中!">
            </figure>
          </div>
        </div>
      </div>
      <div class="sp">
        <figure>
          <img src="/images/sec1/mv_ttl-1_sp_1.png" alt="">
        </figure>
        <figure>
          <img src="/images/sec1/mv_ttl-1_sp_2.png" alt="">
        </figure>
        <figure>
          <img src="/images/sec1/mv_ttl-1_sp_3.png" alt="">
        </figure>
      </div>
      <div class="btnWrap">
        <a href="" class="btn_01">無料体験・お問い合わせはこちら</a>
      </div>
    </div>
  </div>
  <div class="border-bottom"></div>
</section>
<section id="sec2">
  <div class="mar-style">
    <div class='section2Container'>
      <div class='childrenContainer'>
        <img src="/images/sec2/children.png" alt="バレッドキッズとは？">
      </div>
      <div class="sect2DescContainer">
        <h2 class='sect2-title'>バレッドキッズとは？</h2>
        <div class="header--dot sect2-dot">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
        <div class='sect2-decript'>

          <p class='p_descrpt1'>
          バレッドキッズは2024年で30周年を迎える、子ども向けパソコン・プログラミングスクールです。<br>全国に140教室を展開しております。
          </p>
          <p class='p_descrpt2'>
          マウスの使い方からタイピング、Officeソフトの使い方、プログラミングに加えて、プレゼンテーションや情報モラル、情報セキュリティーの知識までが学べる「PC-ICT教室」。<br>小学校から高校で必要とされている情報活用能力すべてが身につく教室です。
          </p>

        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec3">
  <div class="mar-style">
    <div class='section3Container'>
      <div class='headerContainer'>
        <img src="/images/sec3/sect3Title.png" alt="お子さまにこんな想い…ありませんか？" class='sect3-title pc'>
        <img src="/images/sec3/sect3Title2360.png" alt="お子さまにこんな想い…ありませんか？" class='sect3-title sp'>
        <div class="header--dot">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>
      <div class="sect3familyCon">
        <div class='familyContainer'>
          <img src="/images/sec3/family.png" alt="お子さまにこんな想い…ありませんか？">
        </div>
        <div class='checkListContainer'>
          <div class='sect3Decript1'>
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>どんな習い事をやらせてあげればいいのかわからない</p>
          </div>
          <div class='sect3Decript1'>
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>子どもが夢中になって続けられるものを見つけたい</p>
          </div>
          <div class='sect3Decript1'>
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>社会に出て生かせるスキルを身につけさせたい</p>
          </div>
          <div class='sect3Decript1'>
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>楽しみながら役に立つことを学ばせたい</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<section id="sec4"></section>
<section id="sec5" class="sec5">
  <div class="mar-style">
    <div class="sec5-content">
      <div class="headerWrap">
        <div class="headerTtl">
          <p>他のプログラミング教室とここが違う!</p>
          <h3>
            <figure class="pc">
              <img src="/images/sec5/sec5-ttl.png" alt="">
            </figure>
            <figure class="sp">
              <img src="/images/sec5/sec5-ttl_sp.png" alt="">
            </figure>
          </h3>
          <figure class="bearFloat pc">
            <img src="/images/sec5/bear_img.png" alt="">
          </figure>
        </div>
      </div>
      <div class="point">
        <div class="pointHeader"> 
          <div class="flex">
            <div class="item">
              <h3>POINT 01</h3>
            </div>
            <div class="item">
              <div class="header--dot">
                <span class="header--dot__clr1"></span>
                <span class="header--dot__clr2"></span>
                <span class="header--dot__clr3"></span>
                <span class="header--dot__clr4"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="pointContent">
          <div class="pointContentWrap">
            <div class="pointContentWrap-ttl">
              <p>プログラミング的思考だけでなく</p>
              <h3>「情報活用能力」の<br class="sp">取得・育成</h3>
              <p>を目指します!!</p>
            </div>
            <p class="pointContentWrap-desc">文部科学省が定め、子どもたちの教科書や時間割の基になる学習指導要領には、「言語能力」「情報活用能力」「問題発見・解決能力」等の学習の基盤となる資質・能力を育成していくことが示されています。<br>「バレッドキッズ」ではこの中で、『情報活用能力』の取得・育成を目標とします。</p>
          </div>
          <div class="pointContent-point1">
            <p>学校の授業はもちろん、『情報活用能力』は一生もののスキル！<br>情報活用能力の取得・育成を通して、社会を生きぬく力を身につけていきます。</p>
            <figure>
              <img src="/images/sec5/img01.png" alt="" class="pc">
              <img src="/images/sec5/img01_sp.png" alt="" class="sp">
            </figure>
          </div>
        </div>
      </div>
      <div class="point">
        <div class="pointHeader"> 
          <div class="flex">
            <div class="item">
              <h3>POINT 02</h3>
            </div>
            <div class="item">
              <div class="header--dot">
                <span class="header--dot__clr1"></span>
                <span class="header--dot__clr2"></span>
                <span class="header--dot__clr3"></span>
                <span class="header--dot__clr4"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="pointContent">
          <div class="pointContentWrap">
            <div class="pointContentWrap-ttl">
              <h3>社会に出てすぐに役立つ</h3>
              <p>能力とスキルが身につきます!!</p>
            </div>
            <p class="pointContentWrap-desc">幼児から小学生、中学生、高校生までの情報活用能力取得のためのカリキュラムを準備しています。多くのプログラミング教室は、ゲームを活用してプログラミングを組めることを目的としていますが、バレットキッズは、社会に出てすぐ役立つ能力・スキルの取得・育成を目的として、専用教材を学んでいきます。</p>
          </div>
          <div class="pointContent-point2">
            <figure class="pc">
              <img src="/images/sec5/img02.png" alt="">
            </figure>
            <ul class="point2-skills sp">
              <li class="point2-skills-item">
                <div class="box1 clr1">
                  <h3>幼児</h3>
                  <ul class="box1Wrap">
                    <li>タッチタイピング<br>パソコンの基本操作</li>
                    <li>ワード/パワーポイントの基本操作</li>
                    <li>プログラミング的思考</li>
                  </ul>
                </div>
                <div class="box2 clr1">
                  <figure>
                    <img src="/images/sec5/skills_1.png" alt="">
                  </figure>
                  <div class="content">
                    <h3>生徒の声</h3>
                    <ul>
                      <li>楽しそう！</li>
                      <li>やってみたい！</li>
                      <li>さわってみたい！</li>
                    </ul>
                  </div>
                </div>
              </li> 
              <li class="point2-skills-item">
                <div class="box1 clr2">
                  <h3>小学生</h3>
                  <ul class="box1Wrap">
                    <li>ビジュアルプログラミングの学習</li>
                    <li>エクセル 表計算ソフト の使い方</li>
                    <li>パワーポイントでプレゼンテーション練習</li>
                    <li>ワードを使った文書作成/ICT ナレッジ</li>
                  </ul>
                </div>
                <div class="box2 clr2">
                  <figure>
                    <img src="/images/sec5/skills_2.png" alt="">
                  </figure>
                  <div class="content">
                    <h3>生徒の声</h3>
                    <ul>
                      <li>タイピングはクラスで一番！</li>
                      <li>思った通りにPCを使えるよ。</li>
                      <li>プログラミングも楽しい！</li>
                    </ul>
                  </div>
                </div>
              </li>  
              <li class="point2-skills-item">
                <div class="box1 clr3">
                  <h3>中学生</h3>
                  <ul class="box1Wrap">
                    <li>テキストプログラミングの学習</li>
                    <li>表計算ソフトを活用した統計スキル</li>
                    <li>プレゼンテーションスキル向上</li>
                    <li>資格取得・コンテスト応募</li>
                  </ul>
                </div>
                <div class="box2 clr3">
                  <figure>
                    <img src="/images/sec5/skills_3.png" alt="">
                  </figure>
                  <div class="content">
                    <h3>生徒の声</h3>
                    <ul>
                      <li>スキルは既に高校レベル？</li>
                      <li>フローチャートもバッチリ！</li>
                      <li>エクセルで統計も得意に◎</li>
                    </ul>
                  </div>
                </div>
              </li>  
              <li class="point2-skills-item">
                <div class="box1 clr4">
                  <h3>高校生</h3>
                  <ul class="box1Wrap">
                    <li>生成AI の活用</li>
                    <li>大学入試/ MOS</li>
                  </ul>
                  <figure class="point2-skills-item-box4">
                    <img src="/images/sec5/skills_4_1.png" alt="">
                  </figure>
                </div>
                <div class="box2 clr4">
                  <figure>
                    <img src="/images/sec5/skills_4.png" alt="">
                  </figure>
                  <div class="content">
                    <h3>生徒の声</h3>
                    <ul>
                      <li>社会で役に立つ</li>
                      <li>スキルは一通り身に</li>
                      <li>ついたかな！</li>
                    </ul>
                  </div>
                </div>
              </li>  
            </ul>
          </div>
        </div>
      </div>
      <div class="point">
        <div class="pointHeader"> 
          <div class="flex">
            <div class="item">
              <h3>POINT 03</h3>
            </div>
            <div class="item">
              <div class="header--dot">
                <span class="header--dot__clr1"></span>
                <span class="header--dot__clr2"></span>
                <span class="header--dot__clr3"></span>
                <span class="header--dot__clr4"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="pointContent">
          <div class="pointContentWrap">
            <div class="pointContentWrap-ttl">
              <p>パソコンスキルを学ぶことで!!</p>
              <h3>考える力を身につけます!!</h3>
            </div>
            <p class="pointContentWrap-desc">パソコン操作だけを学ぶのではなく、プログラミング的思考、論理的思考力を身に付けることを目的とした教材を使用します。</p>
          </div>
          <div class="pointContent-point3">
            <div class="slide slide1">
              <div class="slide-ttl bg1">
                <h3>幼児用</h3>
                <p>オリジナル課題プリント</p>
              </div>
              <div class="swiper infantSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/infant_slide_1.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/infant_slide_2.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/infant_slide_3.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/infant_slide_3.jpg" alt="">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination swiper-paginationInfant"></div>
            </div>
            <div class="slide slide2">
              <div class="slide-ttl bg2">
                <h3>小学生用</h3>
                <p>オリジナル課題プリント</p>
              </div>
              <div class="swiper kidsSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_1.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_2.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_3.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_4.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_5.jpg" alt="">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure>
                      <img src="/images/sec5/kids_slide_6.jpg" alt="">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination swiper-paginationKids"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec6"></section>
<section id="sec7"></section>
<section id="sec8"></section>
<section id="sec9"></section>
<section id="sec10" class="sec10">
  <div class="mar-style">
    <div data-aos="fade-up" data-aos-anchor-placement="top-center">
      <div class="componentHeader">
        <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-center">よくある質問</h2>
        <div class="header--dot">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            どういうお子さんが学んでいるの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>年中～高校３年生までの方が学んでいらっしゃいます。長く通っている方では、６年以上継続している方もいます。プログラミングやパソコンの基礎から応用、検定取得のサポートまでできるので、着実にレベルアップを目指していただけます。お友達同士、ごきょうだいで通う方も多くいらっしゃいます。
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            未経験で家にもパソコンがないけど大丈夫なの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>教室では週１・２回、各５０分ひとり１台のパソコンを使って練習しますので、しっかりスキルアップできます。ご自宅にパソコンがなくても大丈夫ですので、ご安心ください。もしご自宅でも取り組みたい場合は専用サイトからタイピング練習なども可能です。
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            他のプログラミング教室何が違うの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>プログラミングに加え、タイピングやパソコンの操作や知識も併せて総合的に学べます。将来、どんな職業についても必要な総合的なスキルをバランスよく育みます。
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            無料体験は何ができるの？費用は、かからないの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>プログラミングとパソコン操作の両方の要素が入った課題で体験ができます。費用はかかりませんので、お気軽に無料体験をご予約ください。
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            入会するタイミングは？いつでもできるの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>教室の空き状況にもよりますが、月途中からでもご入会が可能です。
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            １回の授業は何分？月何回通うの？
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>１回の授業は５０分です。コースによって、月４回～８回受講いただけます。<br>
          ＊教室の授業カレンダーにより回数が変動する月もございます
          </p>
        </div>
      </div>
      <div class="sec10--container">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            人気のコースを教えてください。
            </p>
          </div>
          <img src="/images/common/arrow_red.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>総合的に学べる、PC-ICT+ロジカコースが人気です。プログラミングでは、子どもむけのビジュアル言語から、一般的なテキスト言語、パソコンではタイピングからオフィス操作、検定取得までおこさまのスキルを育むカリキュラムです。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec11" class="sec11">
  <div class="mar-style">
    <div class="componentHeader">
      <h2 class="component--hdng-ttl" >お問い合わせ</h2>
      <div class="header--dot">
        <span class="header--dot__clr1"></span>
        <span class="header--dot__clr2"></span>
        <span class="header--dot__clr3"></span>
        <span class="header--dot__clr4"></span>
      </div>
    </div>
    <p class="sec11_desc">初めてのプログラミングでも安心！<br>まずは、お気軽に無料体験にご参加ください！</p>
    <div class="sec11_content">
      <div class="sec11_content-head">
        <h3>無料体験・お問い合わせを希望する教室名を選択ください。</h3>
        <p>教室を選択後、バレッドキッズ公式ホームページの<span>教室詳細ページに遷移</span>します。<br>お問い合わせは各教室へご連絡ください。<br>無料体験は<span>教室詳細ページ下部のカレンダーよりお申し込み</span>ください。</p>
      </div>
      <div class="sec11_content-body">
        <div class="sec11_content-bodyWrap">
          <div class="prefecture">
            <h4 for="">都道府県を選択</h4>
            <div>
              <select name="" id="">
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
              </select>
            </div>
          </div>
          <div class="prefectureContents">
            <div class="left">
              <h4>教室を選択</h4>
            </div>
            <div class="right">
              <ul>
                <li>
                  <a>
                    <h6>石巻 教室</h6>
                    <p>石巻市湊町1-5-24</p>
                  </a>
                </li>
                <li>
                  <a>
                    <h6>鶴が丘 教室</h6>
                    <p>仙台市泉区松森字台95-5</p>
                  </a>
                </li>
                <li>
                  <a>
                    <h6>志津川 教室</h6>
                    <p>本吉郡南三陸町志津川字新井34-187本吉郡南三陸町志津川字新井34-187</p>
                  </a>
                </li>
                <li>
                  <a>
                    <h6>豊里 教室</h6>
                    <p>登米市豊里町浦軒84-2</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!--/contents-->
</main>
<footer class="bg_ft">
  <div>
    <p>Copyright © 2024 VALED All Rights Reserved.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>


<script src="js/common.js" defer></script> 

<script>
  AOS.init({
    once: true,
  });

  $(function() {
    $('.prefectureContents ul li a').matchHeight();
  });

  var swiper = new Swiper(".infantSwiper", {
    slidesPerView: 1.2,
    spaceBetween: 14,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 5000,
    },  
    breakpoints: {
      // when window width is >= 640px
      961: {
        slidesPerView: 1.4,
        spaceBetween: 40,
      }
    },
    pagination: {
      el: ".swiper-paginationInfant",
    },
  });

  var swiper = new Swiper(".kidsSwiper", {
    slidesPerView: 1.4,
    spaceBetween: 27,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 5000,
    },  
    breakpoints: {
      // when window width is >= 640px
      961: {
        slidesPerView: 2.6,
        spaceBetween: 40,
      }
    },
    pagination: {
      el: ".swiper-paginationKids",
    },
  });
</script>

</body>
</html>