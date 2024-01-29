/*スマホ用とPC用の画像の変更*/

$(function(){
	var wid = $(window).width();
	if( wid < 768 ){
		$('.imgChange').each(function(){
			$(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
		});
	}
});

function showTabContent(tabIndex) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => content.classList.remove('active'));

     // Hide all tabs
     const tabs = document.querySelectorAll('.tab-btn');
    tabs.forEach(tab => tab.classList.remove('active'));

      // Show the selected tab and its content
        const selectedTab = document.querySelector(`.tab-btn:nth-child(${tabIndex + 1})`);
      selectedTab.classList.add('active');

    // Show the selected tab content
    const selectedContent = document.getElementById(`content-${tabIndex}`);
    selectedContent.classList.add('active');
  }

    // Show the default tab content on page load
      window.onload = function() {
      showTabContent(0);
};

/*page-top動き*/
$(function() {
    var topBtn = $('#page-top');    
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
		scrollHeight = $(document).height(); //ドキュメントの高さ 
        scrollPosition = $(window).height() + $(window).scrollTop(); //現在地 
        footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
        if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
            $("#page-top").css({
                "position":"absolute", //pisitionをabsolute（絶対値）に変更
                "bottom": footHeight - 30//下からの位置に配置
            });
        } else { //それ以外の場合は
            $("#page-top").css({
                "position":"fixed", //固定表示
                "bottom": "20px" //下から20px上げた位置に
            });
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

/*内部リンクの動き*/
$(function(){
    $('a[href^="#"]').click(function() {
        var speed = 400;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 110;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});

/*メニュー表示*/


/*ヘッダー伸ばしたり縮めたりの表示*/
/*function init() {
var px_change   = 50;
window.addEventListener('scroll', function(e){
if ( $(window).scrollTop() > px_change ) {
$("header").removeClass("bigger").addClass("smaller");
} else if ( $("header").hasClass("smaller") ) {
$("header").removeClass("smaller").addClass("bigger");
}
});
}
window.onload = init();*/




(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 250) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
		 $('#global-nav a').click(function(){
            $header.removeClass('open');
        });
    });
})(jQuery);


$(document).ready(function() {
    // Get the necessary elements
    const $menuBtn = $(".header--menu__btn");
    const $hamMenu = $(".header--ham_menu");
    // const $closeBtn = $(".close-btn");

    // Add a click event listener to the menu button
    $menuBtn.on("click", function(event) {
      event.preventDefault(); // Prevent the default link behavior
      $(this).toggleClass('isActive');
      $hamMenu.toggleClass("isActive");
    });

    // Add a click event listener to the close button
    // $closeBtn.on("click", function(event) {
    //   event.preventDefault(); // Prevent the default link behavior
    //   $hamMenu.removeClass("isActive");
    // });

    // Add a click event listener to the request link
    $(".close-btn__center a").on("click", function() {
        $hamMenu.removeClass("isActive");
        $menuBtn.removeClass('isActive')
    });
  });

  $(document).ready(function() {
    $(".sec10--drop-button").on("click", function(event) {
      event.preventDefault();
      var $dropDown = $(this).next(".sec10--drop-down");
      $dropDown.slideToggle();

      var $image = $(this).find("img");
      $image.toggleClass("rotate"); // Just toggle the class without checking
    });
  });

