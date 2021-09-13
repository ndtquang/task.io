<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- 対策系 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- SEO関係 -->
    <title><?php wp_title();?></title>
    <meta name="description" content="ページの詳細、120字以内に収める。最初の40字は大事。ページごとにそのページの詳細を記載する。">
    <link rel="canonical" href="http://example.com">



    <!-- Font Awesome 5のcssの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

    <!-- プラグインのcssの読み込み -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css"/>
    <!-- 書き出したcssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  

   

    
</head>

<!-- .l-body | サイト全体 -->

<body class="l-body page-top">

    <!-- .l-header | ヘッダー -->
    <header class="l-header">
        <div class="c-logo">
        <a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
            
        </div>
        <div class="c-navhead">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) );?>./service">サービスについて</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) );?>./service/renovation-large">マンション修繕工事</a> </li>
                <li><a href="">よくあるご質問</a> </li>
                <li><a href="">施工事例</a> </li>
                <li> <a href="<?php echo esc_url( home_url( '/' ) );?>./sitemap">コラム</a> </li>
                <li class="s-last"><i class="fas fa-envelope"></i><a href="<?php echo esc_url( home_url( '/' ) );?>./contact"> お問い合わせ</a> </li>
            </ul>
        </div>      
        <div class="c-togglebar" onclick="togglebar()">
            <span id="span-bar"></span>
            <div class="s-change" id="close">
                <p class="s-menu" >MENU</p>
                <p class="s-close">CLOSE</p>
            </div>
           
         
        </div>
        <div class="c-navhead375" id="header-nav">
            <ul>
                <li>やまとのマンション管理について </li>
                <li class="s-sub">修繕工事 </li>
                <li class="s-sub">理事長代行・管理組合アドバイス </li>
                <li class="s-sub">マンション管理業務 </li>
                <li>マンション修繕工事について </li>
                <li class="s-sub">大規模修繕について </li>
                <li class="s-sub">屋上防水工事 </li>
                <li class="s-sub">外壁塗装工事 </li>
                <li class="s-sub">設備・部分的修繕 </li>
                <li>施工事例 </li>
                <li class="s-sub2">やまとのマンション管理コラム </li>
                <li>よくあるご質問 </li>
                <li>お問い合わせ </li>
                <li>会社概要 </li>
                <li>プライバシーポリシー </li>
                <li>サイトマップ </li>
              
            </ul>
        </div>
   
    </header>

    <!-- .l-main | メインコンテンツ -->
    <main class="l-main p-top">