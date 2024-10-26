
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style-responsive.css">
    <!-- /* FontAwesomeリンク */ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Noel Riding Club</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <h1 class="logo">
            <a href="<?=home_url();?>">
                <img src="<?=get_template_directory_uri(); ?>/img/NoelRidingClub_logo.png" alt="ノエル乗馬クラブロゴ">
            </a>
        </h1>
        <!-- pc menu -->
         <div class="menu-pc">
            <ul class="menu-pc__inner">
                <li><a href="<?php echo esc_url(home_url());?>#about">会社概要</br>About</a></li>
                <li><a href="<?php echo esc_url(home_url());?>/news">新着情報</br>News</a></li>
                <li><a href="<?php echo esc_url(home_url());?>#membership">会員制度</br>MemberShip</a></li>
                <li><a href="<?php echo esc_url(home_url());?>#access">アクセス</br>Access</a></li>
                <li><a href="<?php echo esc_url(home_url());?>/contact">お問い合わせ</br>Contact</a></li>
            </ul>
        </div>
        <!-- sp menu -->
        <div id="hamburger" class="hamburger">
            <span class="bar bar1"></span>
            <span class="bar bar2"></span>
            <span class="bar bar3"></span>
        </div>
        </div>
        <ul class="menu-sp" id="menu-sp">
            <li><a class="menu-sp__link" href="<?php echo esc_url(home_url());?>#about">会社概要</a></li>
            <li><a class="menu-sp__link" href="<?php echo esc_url(home_url());?>/news">新着情報</a></li>
            <li><a class="menu-sp__link" href="<?php echo esc_url(home_url());?>#membership">会員制度</a></li>
            <li><a class="menu-sp__link" href="<?php echo esc_url(home_url());?>#access">アクセス</a></li>
            <li><a class="menu-sp__link" href="<?php echo esc_url(home_url());?>/contact">お問い合わせ</a></li>
        </ul>
    </header>