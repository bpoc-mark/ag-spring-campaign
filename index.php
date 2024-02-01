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
        <a href="#sec11" class="header--request">
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
              <div class="close-btn__center">
                <ul> 
                  <li><a href="index.php">TOP</a></li>
                  <li><a href="#sec2">バレッドキッズとは？</a></li>
                  <li><a href="#sec5">バレッドキッズの3つの特長</a></li>
                  <li><a href="#sec7">独自のカリキュラム</a></li>
                  <li><a href="#sec9">体験参加者・受講生の声</a></li>
                  <li><a href="#sec10">よくある質問</a></li>
                </ul>
                <div>
                  <a href="#sec11" class="btn_01">無料体験・<br class="sp">お問い合 わせはこちら</a>
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
        <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          <img draggable="false"  src="./images/sec1/mv_ttl-1.png" alt="幼児・小学校低学年から始められる！ | 子どもたちが社会を生きぬく力を身につける | プログラミング教室">
        </h1>
        <div class="flex">
          <div class="left">
            <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <img draggable="false"  src="./images/sec1/mv_ttl-2.png" alt="入会キャンペーン実施中！ | ※キャンペーンは、PC-ITCコースのみ対象になります。">
            </figure>
          </div>
          <div class="right">
            <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
              <img draggable="false"  src="./images/sec1/mv_ttl-3.png" alt="各教室にて | 無料体験! | 受付中!">
            </figure>
          </div>
        </div>
      </div>
      <div class="sp">
        <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          <img src="/images/sec1/mv_ttl-1_sp_1.png" alt="">
        </figure>
        <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          <img src="/images/sec1/mv_ttl-1_sp_2.png" alt="">
        </figure>
        <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          <img src="/images/sec1/mv_ttl-1_sp_3.png" alt="">
        </figure>
      </div>
      <div class="btnWrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
        <a href="#sec11" class="btn_01">無料体験・お問い合わせはこちら</a>
        <div class="sp">
          <a href="#sec1">
            <svg id="_000_top_bottom" data-name="000_top_bottom" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
              <g id="Rectangle_71528" data-name="Rectangle 71528" fill="none" stroke="#007abc" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                <rect width="48" height="48" rx="3" stroke="none"/>
                <rect x="1.5" y="1.5" width="45" height="45" rx="1.5" fill="none"/>
              </g>
              <path id="Path_6283" data-name="Path 6283" d="M-9677.269-8696.342l9.084,9.084-9.084,9.084" transform="translate(8711.258 -9649.727) rotate(-90)" fill="none" stroke="#007abc" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="border-bottom"></div>
</section>
<section id="sec2">
  <div class="mar-style">
    <div class='section2Container'>
      <div class='childrenContainer' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <img src="/images/sec2/children.png" alt="バレッドキッズとは？">
      </div>
      <div class="sect2DescContainer">
        <h2 class='sect2-title' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">バレッドキッズとは？</h2>
        <div class="header--dot sect2-dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
        <div class='sect2-decript' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">

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
        <img src="/images/sec3/sect3Title.png" alt="お子さまにこんな想い…ありませんか？" class='sect3-title pc' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <img src="/images/sec3/sect3Title2360.png" alt="お子さまにこんな想い…ありませんか？" class='sect3-title sp' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>
      <div class="sect3familyCon">
        <div class='familyContainer' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
          <img src="/images/sec3/family.png" alt="お子さまにこんな想い…ありませんか？">
        </div>
        <div class='checkListContainer'>
          <div class='sect3Decript1' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>どんな習い事をやらせてあげればいいのかわからない</p>
          </div>
          <div class='sect3Decript1' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>子どもが夢中になって続けられるものを見つけたい</p>
          </div>
          <div class='sect3Decript1' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>社会に出て生かせるスキルを身につけさせたい</p>
          </div>
          <div class='sect3Decript1' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="900">
            <img src="/images/sec3/check.png" alt="お子さまにこんな想い…ありませんか？" class='checkImage'>
            <p>楽しみながら役に立つことを学ばせたい</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<section id="sec4" class="sec4"> 
  <div class="mar-style pic-wrapper">
    <div class="pic-container2 sp">
    <img src="images/sec4/Group 2366.png" alt="top-left" class="top-left"/>
    </div>
   <div class="componentHeader">
      <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">お近くの教室で、<br>実際の授業を体験できます！</h2>
      <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
        <span class="header--dot__clr1"></span>
        <span class="header--dot__clr2"></span>
        <span class="header--dot__clr3"></span>
        <span class="header--dot__clr4"></span>
      </div>
    </div>
    <p class="sec4_desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">楽しく学べるプログラミング教室<br class="sp">バレッドキッズ<br>お子さまとご一緒に、<br class="sp">ぜひ無料体験へお越しください。</p>
    <div class="pic-container pc">
      <img src="images/sec4/Group 2360.png" alt="top-left" class="top-left"/>
      <img src="images/sec4/Group 2361.png" alt="top-right" class="top-right"/>
    </div>
    <div class="red-button-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma02.png" alt="bear-logo" class="bear-logo-hover"/>
      <img src="images/sec4/kuma5.png" alt="bear-logo" class="bear-logo"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="red-button-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma5.png" alt="upper-bear-logo" class="upper-bear-logo"/>
      <img src="images/sec4/kuma52.png" alt="upper-bear-hands" class="upper-bear-hands"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="bottom-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/009_cta_campaign.png" alt="bottom-message" class="bottom-message"/>
    </div>
    <div class="bottom-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/cta_campaign_sp.png" alt="bottom-message" class="bottom-message"/>
    </div>
  </div>
</section>
<section id="sec5" class="sec5">
  <div class="mar-style">
    <div class="sec5-content">
      <div class="headerWrap">
        <div class="headerTtl">
          <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">他のプログラミング教室とここが違う!</p>
          <h3 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
            <figure class="pc">
              <img src="/images/sec5/sec5-ttl.png" alt="">
            </figure>
            <figure class="sp">
              <img src="/images/sec5/sec5-ttl_sp.png" alt="">
            </figure>
          </h3>
          <figure class="bearFloat pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
            <img src="/images/sec5/bear_img.png" alt="">
          </figure>
        </div>
      </div>
      <div class="point" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
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
            <div class="pointContentWrap-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
              <p>プログラミング的思考だけでなく</p>
              <h3>「情報活用能力」の<br class="sp">取得・育成</h3>
              <p>を目指します!!</p>
            </div>
            <p class="pointContentWrap-desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">文部科学省が定め、子どもたちの教科書や時間割の基になる学習指導要領には、「言語能力」「情報活用能力」「問題発見・解決能力」等の学習の基盤となる資質・能力を育成していくことが示されています。<br>「バレッドキッズ」ではこの中で、『情報活用能力』の取得・育成を目標とします。</p>
          </div>
          <div class="pointContent-point1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
            <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">学校の授業はもちろん、『情報活用能力』は一生もののスキル！<br>情報活用能力の取得・育成を通して、社会を生きぬく力を身につけていきます。</p>
            <figure data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
              <img src="/images/sec5/img01.png" alt="" class="pc">
              <img src="/images/sec5/img01_sp.png" alt="" class="sp">
            </figure>
          </div>
        </div>
      </div>
      <div class="point" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
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
            <div class="pointContentWrap-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <h3>社会に出てすぐに役立つ</h3>
              <p>能力とスキルが身につきます!!</p>
            </div>
            <p class="pointContentWrap-desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">幼児から小学生、中学生、高校生までの情報活用能力取得のためのカリキュラムを準備しています。多くのプログラミング教室は、ゲームを活用してプログラミングを組めることを目的としていますが、バレットキッズは、社会に出てすぐ役立つ能力・スキルの取得・育成を目的として、専用教材を学んでいきます。</p>
          </div>
          <div class="pointContent-point2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
            <figure class="pc">
              <img src="/images/sec5/img02.png" alt="">
            </figure>
            <div class="point-skills sp">
              <figure>
                <img src="/images/sec5/poin02-01.png" alt="">
              </figure>
              <figure>
                <img src="/images/sec5/poin02-02.png" alt="">
              </figure>
              <figure>
                <img src="/images/sec5/poin02-03.png" alt="">
              </figure>
              <figure>
                <img src="/images/sec5/poin02-04.png" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="point" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
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
            <div class="pointContentWrap-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <p>パソコンスキルを学ぶことで!!</p>
              <h3>考える力を身につけます!!</h3>
            </div>
            <p class="pointContentWrap-desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">パソコン操作だけを学ぶのではなく、プログラミング的思考、論理的思考力を身に付けることを目的とした教材を使用します。</p>
          </div>
          <div class="pointContent-point3">
            <div class="slide slide1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
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
              <div class="swiperPaginate">
                <div class="swiper-pagination swiper-paginationInfant"></div>
                <button class="isPause"></button>
              </div>
            </div>
            <div class="slide slide2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
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
              <div class="swiperPaginate">
                <div class="swiper-pagination swiper-paginationKids"></div>
                <button class="isPause"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec4" class="sec4"> 
  <div class="mar-style pic-wrapper">
    <div class="pic-container2 sp">
    <img src="images/sec4/Group 2366.png" alt="top-left" class="top-left"/>
    </div>
   <div class="componentHeader">
      <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">お近くの教室で、<br>実際の授業を体験できます！</h2>
      <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
        <span class="header--dot__clr1"></span>
        <span class="header--dot__clr2"></span>
        <span class="header--dot__clr3"></span>
        <span class="header--dot__clr4"></span>
      </div>
    </div>
    <p class="sec4_desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">楽しく学べるプログラミング教室<br class="sp">バレッドキッズ<br>お子さまとご一緒に、<br class="sp">ぜひ無料体験へお越しください。</p>
    <div class="pic-container pc">
      <img src="images/sec4/Group 2360.png" alt="top-left" class="top-left"/>
      <img src="images/sec4/Group 2361.png" alt="top-right" class="top-right"/>
    </div>
    <div class="red-button-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma02.png" alt="bear-logo" class="bear-logo-hover"/>
      <img src="images/sec4/kuma5.png" alt="bear-logo" class="bear-logo"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="red-button-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma5.png" alt="upper-bear-logo" class="upper-bear-logo"/>
      <img src="images/sec4/kuma52.png" alt="upper-bear-hands" class="upper-bear-hands"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="bottom-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/009_cta_campaign.png" alt="bottom-message" class="bottom-message"/>
    </div>
    <div class="bottom-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/cta_campaign_sp.png" alt="bottom-message" class="bottom-message"/>
    </div>
  </div>
</section>
<section id="sec7" class="sec7">
  <div class="mar-style">
    <div>
      <div class="componentHeader">
        <div class="header1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
          <h1 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-center">子どもの可能性を引き出す</h1>
        </div>
        <div class="pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
          <img src="/images/sec7/headerpc.png" alt="Ballet Kids' unique curriculum">
        </div>
        <div class="sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
          <img src="/images/sec7/headersp.png" alt="Ballet Kids' unique curriculum">
        </div>

        <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>
      <div class="sect7--container">
        <div class="l-wrap">
          <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
            <div class="wrapper">
              <div class="pic">
                <img src="/images/sec7/card1.png" alt="幼児向けのオリジナル教材">
              </div>
              <div class="detail-box">
                <div class="tags">
                  <p class="text pink">幼児向け</p>
                </div>
                <p class="header-title">幼児向けのオリジナル教材</p>
                <p class="content">幼児のお子さまは、最適な、パソコン操作と知育を掛け合わせたオリジナル教材で学びます！<br />
                  またプレゼン資料の作成を通じて、表現する力も培います。<br class="sp">
                  小学校入学前に情報機器の使い方がわかると先取りにもなります。</p>
              </div>
            </div>
          </div>
          <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
            <div class="wrapper">
              <div class="pic">
                <img src="/images/sec7/card2.png" alt="多岐にわたるスキルが身につく授業内容">
              </div>
              <div class="detail-box">
                <div class="tags">
                  <p class="text orange">小学生向け</p>
                </div>
                <p class="header-title">多岐にわたるスキルが身につく授業内容</p>
                <p class="content">小学生のお子さまはパソコンソフトを活用してサッカーの走行距離を計算する、効果的なケーキ屋さんの案内を作成する、発表資料をつくるなどの課題に取り組むことができるので、データ・グラフの読み取り方など多岐にわたるスキルを身につけることができます。</p>
              </div>
            </div>
          </div>
          <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
            <div class="wrapper">
              <div class="pic">
                <img src="/images/sec7/card3.png" alt="お子さまの目的にあった商材をご提供">
              </div>
              <div class="detail-box">
                <div class="tags">
                  <p class="text green">中学生向け</p>
                  <p class="text blue">高校生向け</p>
                </div>
                <p class="header-title">お子さまの目的にあった商材をご提供</p>
                <p class="content">中学生・高校生のお子さまは、その子の目的にあった教材を学ぶことができます。<br />
                  テキストプログラミングの学習を深め、大学入試の『情報』科目の対策も早いうちから始められます。<br>
                  資格に挑戦するお子さまも多くいらっしゃいます！</p>
              </div>
            </div>
          </div>
          <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="900">
            <div class="wrapper">
              <div class="pic">
                <img src="/images/sec7/card4.png" alt="幼児から高校まで一貫して通える">
              </div>
              <div class="detail-box">
                <div class="tags">
                  <p class="text red">全 般</p>
                </div>
                <p class="header-title">幼児から高校まで一貫して通える</p>
                <p class="content">バレッドキッズは地域の子どもたちのためのプログラミング・パソコン教室です。<br />
                  幼児から高校生になるまで長く通う方や、ごきょうだい、ご家族が一緒に通われる方もたくさんいます。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec4" class="sec4"> 
  <div class="mar-style pic-wrapper">
    <div class="pic-container2 sp">
    <img src="images/sec4/Group 2366.png" alt="top-left" class="top-left"/>
    </div>
   <div class="componentHeader">
      <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">お近くの教室で、<br>実際の授業を体験できます！</h2>
      <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
        <span class="header--dot__clr1"></span>
        <span class="header--dot__clr2"></span>
        <span class="header--dot__clr3"></span>
        <span class="header--dot__clr4"></span>
      </div>
    </div>
    <p class="sec4_desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">楽しく学べるプログラミング教室<br class="sp">バレッドキッズ<br>お子さまとご一緒に、<br class="sp">ぜひ無料体験へお越しください。</p>
    <div class="pic-container pc">
      <img src="images/sec4/Group 2360.png" alt="top-left" class="top-left"/>
      <img src="images/sec4/Group 2361.png" alt="top-right" class="top-right"/>
    </div>
    <div class="red-button-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma02.png" alt="bear-logo" class="bear-logo-hover"/>
      <img src="images/sec4/kuma5.png" alt="bear-logo" class="bear-logo"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="red-button-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
      <img src="images/sec4/kuma5.png" alt="upper-bear-logo" class="upper-bear-logo"/>
      <img src="images/sec4/kuma52.png" alt="upper-bear-hands" class="upper-bear-hands"/>
      <a href="#sec11" class="btn_01">
        <span>無料体験・お問い合わせはこちら</span>
      </a>
    </div>
    <div class="bottom-container pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/009_cta_campaign.png" alt="bottom-message" class="bottom-message"/>
    </div>
    <div class="bottom-container sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <img src="images/sec4/cta_campaign_sp.png" alt="bottom-message" class="bottom-message"/>
    </div>
  </div>
</section>
<section id="sec9" class="sec9">
  <div class="mar-style">
    <div>
      <div class="componentHeader">
        <div class="pc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
          <img src="/images/sec9/Hsec9.png" alt="Ballet Kids' unique curriculum">
        </div>
        <div class="sp" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
          <img src="/images/sec9/Hsec9.png" alt="Ballet Kids' unique curriculum">
        </div>
        <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>

      <div class="sec9--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
          <div class="trial--title">
            <p class="trial--text">
              体験参加者
          </div>
        <div class="icon--img">
          <img src="/images/sec9/icon1.png" alt="体験参加者">
        </div>
        <p class="text">保護者の声</p>
        <p class="text title">子どもの将来に役立つことが分かりました。</p>
        <p class="broken-line"></p>
        <p class="text paragraph">プログラミングの必要性は、正直ぼんやりとしか感じていませんでした。<br>子どもがやってみたい！というのと、親では教えられないなと思ったので参加してみました。</p>
        <p class="text paragraph2 para">ちょっと難しそうなところも、<span class="text red">子どもは興味をもって取り組んでいた</span>ので、クリアできると嬉しそうにしていました。</p>
        <p class="text paragraph2 para2">先生のお話を伺って、プログラミングを学ぶことを通して、<span class="text red">子どもの将来に役立つこと、色々と身につくこと</span>が分かりました。</p>
        <p class="text secnd">お子さま（5歳）の声</p>
        <p class="broken-line"></p>
        <p class="text paragraph2 prgrph">自分がつなげたブロックで、キャラクターが動いたり、話したりするのが、<span class="text red">面白かったです！<br></span>キーボードも、もっと上手になって、<span class="text red">たくさん打てるようになりたいな</span>と思いました。</p>
      </div>

      <div class="sec9--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
        <div class="trial--title">
          <p class="trial--text">
            受講生
        </div>
        <div class="icon--img">
          <img src="/images/sec9/icon2.png" alt="保護者の声">
        </div>
        <p class="text">保護者の声</p>
        <p class="text title">安心して楽しく学べています。</p>
        <p class="broken-line"></p>
        <p class="text thrd">本人がプログラミングに興味を持ち、学習意欲が高まったタイミングで、通い始めました。</p>
        <p class="text paragraph2 frth">50分授業を2コマ続けて受講をしており、集中力が持続するか心配もありましたが、ロジカ講座はすごく楽しく学べているようで、<span class="text red">毎週の受講後は、楽しかった〜と帰ってきます。</span><br>難しい時や上手くできた時など、その都度先生が優しく声をかけて下さるので、安心して通わせています。</p>
        <p class="text secnd">お子様（小2）の声</p>
        <p class="broken-line"></p>
        <p class="text paragraph2 prgrph">タイピングで難しい時もあったけど、先生が優しく励ましてくれたり、できると褒めてくれるので頑張れます。<br>
          ロジカは<span class="text red">とても楽しく</span>て、ゲームみたいに進めていきながら、プログラミングの事が<span class="text red">とても分かりやすく覚えられる</span>所が良いです。</p>
      </div>
    </div>
  </div>
</section>
<section id="sec10" class="sec10">
  <div class="mar-style">
    <div>
      <div class="componentHeader">
        <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">よくある質問</h2>
        <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
          <span class="header--dot__clr1"></span>
          <span class="header--dot__clr2"></span>
          <span class="header--dot__clr3"></span>
          <span class="header--dot__clr4"></span>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            どういうお子さんが学んでいるの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>年中～高校３年生までの方が学んでいらっしゃいます。長く通っている方では、６年以上継続している方もいます。プログラミングやパソコンの基礎から応用、検定取得のサポートまでできるので、着実にレベルアップを目指していただけます。お友達同士、ごきょうだいで通う方も多くいらっしゃいます。
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            未経験で家にもパソコンがないけど大丈夫なの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>教室では週１・２回、各５０分ひとり１台のパソコンを使って練習しますので、しっかりスキルアップできます。ご自宅にパソコンがなくても大丈夫ですので、ご安心ください。もしご自宅でも取り組みたい場合は専用サイトからタイピング練習なども可能です。
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            他のプログラミング教室何が違うの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>プログラミングに加え、タイピングやパソコンの操作や知識も併せて総合的に学べます。将来、どんな職業についても必要な総合的なスキルをバランスよく育みます。
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            無料体験は何ができるの？費用は、かからないの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>プログラミングとパソコン操作の両方の要素が入った課題で体験ができます。費用はかかりませんので、お気軽に無料体験をご予約ください。
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="900">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            入会するタイミングは？いつでもできるの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>教室の空き状況にもよりますが、月途中からでもご入会が可能です。
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="1000">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            １回の授業は何分？月何回通うの？
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
        </a>
        <div class="sec10--drop-down">
          <p>
            <span>A.</span>１回の授業は５０分です。コースによって、月４回～８回受講いただけます。<br>
          ＊教室の授業カレンダーにより回数が変動する月もございます
          </p>
        </div>
      </div>
      <div class="sec10--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="1100">
        <a href="" class="sec10--drop-button">
          <div>
            <span>Ｑ.</span>
            <p>
            人気のコースを教えてください。
            </p>
          </div>
          <img src="/images/common/arrow_grey.svg" alt="">
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
      <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">お問い合わせ</h2>
      <div class="header--dot" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
        <span class="header--dot__clr1"></span>
        <span class="header--dot__clr2"></span>
        <span class="header--dot__clr3"></span>
        <span class="header--dot__clr4"></span>
      </div>
    </div>
    <p class="sec11_desc" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">初めてのプログラミングでも安心！<br>まずは、お気軽に無料体験にご参加ください！</p>
    <div class="sec11_content" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
      <div class="sec11_content-head">
        <h3>無料体験・お問い合わせを希望する教室名を選択ください。</h3>
        <p>教室を選択後、バレッドキッズ公式ホームページの<span>教室詳細ページに遷移</span>します。<br>お問い合わせは各教室へご連絡ください。<br>無料体験は<span>教室詳細ページ下部のカレンダーよりお申し込み</span>ください。</p>
      </div>
      <div class="sec11_content-body">
        <div class="sec11_content-bodyWrap">
          <div class="prefecture">
            <h4 for="">都道府県を選択</h4>
            <div>
              <select name="" id="selectPrefecture">
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
              <div class="prefectureItemWrap" data-target="北海道">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/hokkaido/dou_ou/sapporo-hassamu/" target="_blank">
                      <h6>札幌発寒 教室</h6>
                      <p>西区発寒14条2丁目3-1　</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="秋田県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/akita/nishi-senboku/" target="_blank">
                      <h6>西仙北 教室</h6>
                      <p>大仙市強首字上野台89-1</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="宮城県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/miyagi/ishinomaki/" target="_blank">
                      <h6>石巻 教室</h6>
                      <p>石巻市湊町1-5-24</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/miyagi/tsurugaoka/" target="_blank">
                      <h6>鶴が丘 教室</h6>
                      <p>仙台市泉区松森字台95-5</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/miyagi/toyosato/" target="_blank">
                      <h6>豊里 教室</h6>
                      <p>登米市豊里町浦軒84-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/miyagi/shidugawa/" target="_blank">
                      <h6>志津川 教室</h6>
                      <p>本吉郡南三陸町志津川字新井田34-187</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="福島県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/fukushima/aidu-higashiyama/" target="_blank">
                      <h6>住まいるプラザ会津東山 教室</h6>
                      <p>会津若松市東山町大字石山字天寧91</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/fukushima/iwaki/" target="_blank">
                      <h6>いわき 教室</h6>
                      <p>いわき市平作町1-1-1 プランドールKS101</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tohoku/fukushima/yatsuyamada/" target="_blank">
                      <h6>八山田 教室</h6>
                      <p>郡山市八山田2-188</p>
                    </a>
                  </li> 
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="栃木県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tochigi/shimoguri/" target="_blank">
                      <h6>下栗 教室</h6>
                      <p>宇都宮市下栗町2937-13　エボルブジム</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tochigi/utsunomiya-izumigaoka/" target="_blank">
                      <h6>宇都宮泉が丘 教室</h6>
                      <p>宇都宮市泉が丘5-4-11</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tochigi/otawara/" target="_blank">
                      <h6>大田原 教室</h6>
                      <p>新富町1-3-26 吉田ビル2F</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="群馬県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/gunma/takasaki-misato/" target="_blank">
                      <h6>高崎箕郷 教室</h6>
                      <p>高崎市箕郷町東明屋710-5</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="埼玉県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/higashi-kawaguchi/" target="_blank">
                      <h6>東川口 教室</h6>
                      <p>川口市東川口1-3-2　秋元ビル１F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/minami-hatogaya/" target="_blank">
                      <h6>南鳩ヶ谷 教室</h6>
                      <p>川口市南鳩ヶ谷1-25-14</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/kawagoe/" target="_blank">
                      <h6>川越 教室</h6>
                      <p>川越市東田町8-12　佐賀ビル202</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/musashiurawa-ekimae/" target="_blank">
                      <h6>武蔵浦和駅前 教室</h6>
                      <p>さいたま市南区別所7-9-5 アルクトスビル2階</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/omiya/" target="_blank">
                      <h6>ユリウス大宮 教室</h6>
                      <p>さいたま市大宮区桜木町1-4-1　吉田ビル5F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/urawa/" target="_blank">
                      <h6>浦和 教室</h6>
                      <p>さいたま市浦和区岸町4-26-1　コスタ・タワー浦和１F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/sakado/" target="_blank">
                      <h6>坂戸 教室</h6>
                      <p>鶴ヶ島市脚折町2丁目29番3　高沢コーポ202号室</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/saitama/nodera/" target="_blank">
                      <h6>野寺 教室</h6>
                      <p>新座市片山3-18-12</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="千葉県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/chiba/globo-soga/" target="_blank">
                      <h6>GLOBO蘇我 教室</h6>
                      <p>千葉市中央区川崎町1−34　GLOBOショッピングセンター内1F</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="東京都">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/nishinippori/" target="_blank">
                      <h6>西日暮里 教室</h6>
                      <p>荒川区西日暮里5-31-5 西日暮里STビル3F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/haneda/" target="_blank">
                      <h6>羽田 教室</h6>
                      <p>大田区羽田3-8-18</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/takasago-sumiyoshi/" target="_blank">
                      <h6>南綾瀬 教室</h6>
                      <p>葛飾区堀切5-40-16-107（氷川神社前）</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/takasago-sumiyoshi/" target="_blank">
                      <h6>高砂住吉 教室</h6>
                      <p>葛飾区高砂7-3-12　2階</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/ariake/" target="_blank">
                      <h6>有明 教室</h6>
                      <p>東京都江東区有明3-7-18　有明セントラルタワー2F　キッズルームひかり内</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/ochiai2/" target="_blank">
                      <h6>落合第二 教室</h6>
                      <p>新宿区上落合2-1-7 ブルーノート102</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/yamano-kouen/" target="_blank">
                      <h6>山野公園 教室</h6>
                      <p>世田谷区砧6-10-6</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/nihonbashi/" target="_blank">
                      <h6>日本橋 教室</h6>
                      <p>中央区日本橋大伝馬町2-2-1301</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/sugamo/" target="_blank">
                      <h6>ユリウス巣鴨 教室</h6>
                      <p>巣鴨1-12-1　冠城（かぶらぎ）ビル5F　ユリウス巣鴨教室内</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/sugamo-otsuka/" target="_blank">
                      <h6>巣鴨大塚 教室</h6>
                      <p>豊島区北大塚1-21-8-101</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/nakamurabashi/" target="_blank">
                      <h6>中村橋 教室</h6>
                      <p>練馬区中村3丁目25-16 外山ビル1F-102</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/machida-ekimae/" target="_blank">
                      <h6>町田駅前 教室</h6>
                      <p>町田市原町田5-5-2　キャピタルオシダ401</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/tokyo/minami-tsukushino/" target="_blank">
                      <h6>南つくし野 教室</h6>
                      <p>町田市南つくし野4-10-10</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="神奈川県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/isehara/" target="_blank">
                      <h6>伊勢原 教室</h6>
                      <p>伊勢原市桜台2-24-14セレッサビル1F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/sakae-cho/" target="_blank">
                      <h6>栄町 教室</h6>
                      <p>小田原市栄町3-10-11</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/shinkawasaki/" target="_blank">
                      <h6>ユリウス新川崎 教室</h6>
                      <p>川崎市幸区新川崎5-2　シンカモール3階　メディカルフロア内</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/kamakuradai/" target="_blank">
                      <h6>鎌倉台 教室</h6>
                      <p>鎌倉市台3-1-10 デ・クール鎌倉103</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/kawasakiekimae/" target="_blank">
                      <h6>ユリウス川崎 教室</h6>
                      <p>川崎市幸区大宮町２−８ イクス川崎ザ・タワー 2F ユリウス川崎教室内</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/shingaku-sugao/" target="_blank">
                      <h6>進学サポート塾菅生 教室</h6>
                      <p>川崎市宮前区菅生6-32-20 コリーヌ山中109号</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/tana-kita/" target="_blank">
                      <h6>田名北 教室</h6>
                      <p>相模原市中央区田名3258-4</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/kisawa/" target="_blank">
                      <h6>吉沢 教室</h6>
                      <p>平塚市めぐみが丘2-8-11</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/shonan/" target="_blank">
                      <h6>湘南 教室</h6>
                      <p>藤沢市藤沢607-1 ミナパーク5階</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/honmoku/" target="_blank">
                      <h6>本牧 教室</h6>
                      <p>横浜市中区本郷町2-32　ヒロハシビル2Ｆ</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/kanagawa/tsurumi/" target="_blank">
                      <h6>鶴見 教室</h6>
                      <p>横浜市鶴見区鶴見中央4-44-5</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="長野県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/nagano/higashi-haruchika/" target="_blank">
                      <h6>東春近 教室</h6>
                      <p>伊那市東春近2507-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kanto/nagano/azumino-matsukawa/" target="_blank">
                      <h6>安曇野松川 教室</h6>
                      <p>北安曇郡松川村細野5268-331</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="岐阜県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/ikeda/" target="_blank">
                      <h6>池田 教室</h6>
                      <p>揖斐郡池田町下東野328</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/akasaka/" target="_blank">
                      <h6>赤坂 教室</h6>
                      <p>岐阜県大垣市赤坂大門3-88</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/e-higashi/" target="_blank">
                      <h6>江東 教室</h6>
                      <p>大垣市釜笛2-9-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/kinryu/" target="_blank">
                      <h6>金竜 教室</h6>
                      <p>関市山田1345-6 パークタウン203号室</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/takayama-kita/" target="_blank">
                      <h6>高山北 教室</h6>
                      <p>高山市下岡本町1858-7</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/koizumi/" target="_blank">
                      <h6>小泉 教室</h6>
                      <p>多治見市小泉町8-103</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/sumiyoshi/" target="_blank">
                      <h6>住吉 教室</h6>
                      <p>多治見市住吉町7-29-1　ファインビル住吉Ⅲ　201号室</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/rakuna-toki/" target="_blank">
                      <h6>ラクーナ土岐 教室</h6>
                      <p>土岐市泉岩畑町1-9-1 エルシェハート2F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/honden/" target="_blank">
                      <h6>本田 教室</h6>
                      <p>瑞穂市本田2093-9</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/gifu/yoro/" target="_blank">
                      <h6>養老 教室</h6>
                      <p>養老郡養老町養老1238-6</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="静岡県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/gomyo/" target="_blank">
                      <h6>五明 教室</h6>
                      <p>掛川市五明1823</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/osato-higashi/" target="_blank">
                      <h6>大里東 教室</h6>
                      <p>静岡市駿河区下島808-1</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/yui/" target="_blank">
                      <h6>由比 教室</h6>
                      <p>静岡市清水区由比町屋原３３５－５</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/subashiri/" target="_blank">
                      <h6>須走 教室</h6>
                      <p>駿東郡小山町須走135-17</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/hamamatsu/" target="_blank">
                      <h6>浜松 教室</h6>
                      <p>浜松市南区卸本町19スズヤビル東3F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/keta/" target="_blank">
                      <h6>気田 教室</h6>
                      <p>浜松市天竜区春野町気田872-1 まほろば文庫様隣</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/toyooka/" target="_blank">
                      <h6>豊岡 教室</h6>
                      <p>浜松市北区大原町439-5</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/fujieda-takasu/" target="_blank">
                      <h6>藤枝高洲 教室</h6>
                      <p>藤枝市与左衛門207番地</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/mishima-kita/" target="_blank">
                      <h6>三島北 教室</h6>
                      <p>三島市大宮町3-8-38</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/shizuoka/oigawa-minami/" target="_blank">
                      <h6>大井川南 教室</h6>
                      <p>焼津市高新田1917</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="愛知県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kitayamadai/" target="_blank">
                      <h6>北山台 教室</h6>
                      <p>愛知郡東郷町北山台2-4-9</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/anjo-seibu/" target="_blank">
                      <h6>安城西部 教室</h6>
                      <p>安城市福釜町東湫22</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/minami-anjo/" target="_blank">
                      <h6>南安城 教室</h6>
                      <p>安城市法連町6-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/hagiwara/" target="_blank">
                      <h6>萩原 教室</h6>
                      <p>一宮市萩原町串作字東田面33-1　</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kusakabe/" target="_blank">
                      <h6>日下部 教室</h6>
                      <p>稲沢市日下部西町1-54</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/osato/" target="_blank">
                      <h6>大里 教室</h6>
                      <p>稲沢市日下部西町2丁目104-4</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/owari-asahi/" target="_blank">
                      <h6>尾張旭・旭 教室</h6>
                      <p>尾張旭市東大道町山の内2392-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/iwanaridai-nishi/" target="_blank">
                      <h6>岩成台西 教室</h6>
                      <p>春日井市岩成台10-4-15</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/shiotsu/" target="_blank">
                      <h6>塩津 教室</h6>
                      <p>蒲郡市竹谷町浜家30-1</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/konan/" target="_blank">
                      <h6>江南 教室</h6>
                      <p>江南市野白町西千丸65</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/shinano/" target="_blank">
                      <h6>品野 教室</h6>
                      <p>品野町5-27</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/nakayama/" target="_blank">
                      <h6>中山 教室</h6>
                      <p>田原市中山町八軒屋59-1</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/goyu/" target="_blank">
                      <h6>御油 教室</h6>
                      <p>豊川市御油町古御堂101-3</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kanaya/" target="_blank">
                      <h6>金屋 教室</h6>
                      <p>豊川市中央通5-76　中尾マンション1階</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kou/" target="_blank">
                      <h6>国府 教室</h6>
                      <p>豊川市国府町上坊入8-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/umetsubo/" target="_blank">
                      <h6>梅坪 教室</h6>
                      <p>豊田市上原町西山398番地12</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/nakano/" target="_blank">
                      <h6>中野 教室</h6>
                      <p>豊橋市中浜町219-27</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/ikeshita/" target="_blank">
                      <h6>星ヶ丘 教室</h6>
                      <p>名東区名東本町170番地　ライオンズマンション虹が丘A913号室</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kasadera-shuzan/" target="_blank">
                      <h6>大磯 教室</h6>
                      <p>名古屋市南区戸部町1-22</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/meieki/" target="_blank">
                      <h6>名駅 教室</h6>
                      <p>名古屋市中村区椿町20-15名古屋国鉄会館502（名古屋駅太閤通口から徒歩スグ）</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/noritake/" target="_blank">
                      <h6>則武 教室</h6>
                      <p>名古屋市中村区松原町3-21-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/obata-ryokuchimae/" target="_blank">
                      <h6>小幡緑地前 教室</h6>
                      <p>名古屋市守山区小幡北102 白沢マンション1F</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/isshiki-chuo/" target="_blank">
                      <h6>一色中央 教室</h6>
                      <p>西尾市一色町前野新田71-1</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/koda/" target="_blank">
                      <h6>幸田 教室</h6>
                      <p>額田郡幸田町高力神山25-1</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/aichi/kodakara/" target="_blank">
                      <h6>子宝 教室</h6>
                      <p>弥富市子宝2丁目58番地</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="三重県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/mie/owase/" target="_blank">
                      <h6>尾鷲 教室</h6>
                      <p>尾鷲市中央町7番5号</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/mie/oyamada-kita/" target="_blank">
                      <h6>大山田北 教室</h6>
                      <p>桑名市大山田4-7-10</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/mie/matsusaka-hanaoka/" target="_blank">
                      <h6>松阪花岡 教室</h6>
                      <p>松阪市大黒田町600-2</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/mie/asahi/" target="_blank">
                      <h6>朝日 教室</h6>
                      <p>三重郡朝日町縄生635</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/tokai/mie/nakamachi-shingaku/" target="_blank">
                      <h6>中町進学 教室</h6>
                      <p>四日市市中町9-6</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="石川県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/hokuriku/ishikawa/kibikino-katsuramachi" target="_blank">
                      <h6>木曳野桂町 教室</h6>
                      <p>金沢市桂町ホ31-2</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="京都府">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/kyoto/kyotango-mineyama/" target="_blank">
                      <h6>京丹後峰山 教室</h6>
                      <p>京丹後市峰山町泉10</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/kyoto/fukuchiyama/" target="_blank">
                      <h6>福知山 教室</h6>
                      <p>駅前町 3 銀鈴ビル２Fスマホのちどり福知山店</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="大阪府">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/osaka/anashi/" target="_blank">
                      <h6>穴師 教室</h6>
                      <p>泉大津市池浦町5-1-20</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/osaka/izumi-chuo/" target="_blank">
                      <h6>和泉中央 教室</h6>
                      <p>大阪府和泉市いぶき野5丁目4番7号（和泉シティプラザ</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/osaka/tezukayama/" target="_blank">
                      <h6>帝塚山 教室</h6>
                      <p>大阪市住吉区帝塚山東４-７-２</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/osaka/minoo-makiochi/" target="_blank">
                      <h6>箕面牧落 教室</h6>
                      <p>箕面市牧落3-4-20　クオリティ牧落101</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="兵庫県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/hyogo/uozumi-minami/" target="_blank">
                      <h6>魚住南 教室</h6>
                      <p>明石市魚住町西岡100番地</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/hyogo/shirakawadai/" target="_blank">
                      <h6>白川台 教室</h6>
                      <p>神戸市須磨区白川台1-25-3</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/hyogo/joyo/" target="_blank">
                      <h6>城陽 教室</h6>
                      <p>姫路市北条永良町16番地２F　（有）中川建工内</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kansai/hyogo/midorigaoka-higashi/" target="_blank">
                      <h6>緑が丘東 教室</h6>
                      <p>三木市緑が丘町西2丁目13-20</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="島根県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/chugoku/shimane/yasugitokami/" target="_blank">
                      <h6>安来十神 教室</h6>
                      <p>安来市安来町1639　やすぎ懐古館一風亭内</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="岡山県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/chugoku/okayama/tamashima-tomita/" target="_blank">
                      <h6>玉島富田 教室</h6>
                      <p>倉敷市玉島道口123-4</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="山口県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/chugoku/yamaguchi/yasuoka/" target="_blank">
                      <h6>安岡 教室</h6>
                      <p>下関市安岡1465-29</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="福岡県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/fukuoka/koga/" target="_blank">
                      <h6>古賀 教室</h6>
                      <p>古賀市美明3-3-8</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="長崎県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/nagasaki/isahayakaizugaoka/" target="_blank">
                      <h6>諌早貝津ヶ丘 教室</h6>
                      <p>諫早市貝津が丘５９４－３４</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="熊本県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/kumamoto/sunshop-usuba/" target="_blank">
                      <h6>サンショップ薄場 教室熊本市南区薄場3丁目1-23サンショップ</h6>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="prefectureItemWrap" data-target="沖縄県">
                <ul>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/okinawa/ishigaki/" target="_blank">
                      <h6>石垣 教室</h6>
                      <p>石垣市字石垣491-15</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/okinawa/ishigaki-shinkawa/" target="_blank">
                      <h6>石垣新川 教室</h6>
                      <p>石垣市新川2187</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/okinawa/oac-nago/" target="_blank">
                      <h6>ＯＡＣ名護 教室</h6>
                      <p>名護市宇茂佐915-11</p>
                    </a>
                  </li>
                  <li>
                    <a href="https://kids.valed.jp/location/kyushuokinawa/okinawa/wakasa/" target="_blank">
                      <h6>若狭 教室</h6>
                      <p>那覇市若狭2-20-18</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<a href="#sec1" class="goUp" id="goUp">
  <svg id="_000_top_bottom" data-name="000_top_bottom" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
    <g id="Rectangle_71528" data-name="Rectangle 71528" fill="none" stroke="#007abc" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
      <rect width="48" height="48" rx="3" stroke="none"/>
      <rect x="1.5" y="1.5" width="45" height="45" rx="1.5" fill="none"/>
    </g>
    <path id="Path_6283" data-name="Path 6283" d="M-9677.269-8696.342l9.084,9.084-9.084,9.084" transform="translate(8711.258 -9649.727) rotate(-90)" fill="none" stroke="#007abc" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
  </svg>
</a>
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

  var slide1 = new Swiper(".infantSwiper", {
    slidesPerView: 1.2,
    spaceBetween: 14,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
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

  var slide2 = new Swiper(".kidsSwiper", {
    slidesPerView: 1.4,
    spaceBetween: 27,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
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

  $('#selectPrefecture').change(function(){
    var selectedPrefecture = $(this).val();
    $('.prefectureContents .prefectureItemWrap').hide();
    $('[data-target="' + selectedPrefecture + '"]').show();
  });

  $(document).ready(function() {
    $(window).scroll(function() {
        var sec2 = $('#sec2');

        if ($(window).scrollTop() > sec2.offset().top) {
          $('#goUp').addClass('isScroll')
        }else{
          $('#goUp').removeClass('isScroll')
        }
    });
  });

  $('.slide1 .swiperPaginate button').click(function(){
    $(this).toggleClass('isPause')
    if($(this).hasClass('isPause')){
      slide1.autoplay.resume();
    }else{
      slide1.autoplay.pause();
    }
  })

  $('.slide2 .swiperPaginate button').click(function(){
    $(this).toggleClass('isPause')
    if($(this).hasClass('isPause')){
      slide2.autoplay.resume();
    }else{
      slide2.autoplay.pause();
    }
  })
</script>

</body>
</html>