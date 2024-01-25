<?php

require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/monolog.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . "/contact/send_functions.php";

?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php include('./includes/in_side_head.php'); ?>

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
    <body class="page">
        <!-- Google Tag Manager (noscript) バレッドキッズ -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKHNPVK"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) バレッドキッズ -->
        <!-- Google Tag Manager (noscript) 夏休みLP -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDR23PM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) 夏休みLP -->



        <header class="page__top">
            <?php includeWithVariables('./includes/header.php'); ?>
            <div class="">
                <section id="sec12" class="confirmPage">
                    <div class="contactWrapper">
                        <div class="bdr-radius">
                            <?php
                            // お問い合わせフォーム
                            include('./includes/form.php'); ?>
                        </div>
                    </div>
                </section>
            </div>

            <!-- contents -->
            <?php include('./includes/footer.php'); ?>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
            <script src="../js/common.js" defer></script> 
            <script>
                $('.classroom label').matchHeight();

                // Get a reference to the reset button
                var resetButton = document.querySelector('input[type="reset"]');

                if(resetButton){
                    // Add a click event listener to the reset button
                    resetButton.addEventListener('click', function() {
                        // Use JavaScript to navigate back to the previous page
                        window.history.back();
                    });
                }
            </script>
    </body>

</html>
