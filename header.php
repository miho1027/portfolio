<!DOCTYPE html>
<html lang="ja">
<head>
<meta property="og:title" content="打田美穂のポートフォリオ" >
<meta property="og:type" content="website" >
<meta property="og:url" content="https://miho-uchida.com/portfolio/" >
<meta property="og:image" content="https://miho-uchida.com/portfolio.png" >
<meta property="og:site_name" content="打田美穂のポートフォリオ" >
  <meta charset="UTF-8">
  <meta name="description" content="フリーランスとして活動している打田美穂のポートフォリオサイトです。Webサイト制作やデザインを行っております。">
  <meta name="keywords" content="打田美穂,Sora-Full,web制作,フリーランス,フリーランスエンジニア,プログラミング">
  <title>Miho Uchida</title>
  <link rel="icon" href="favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name ="twitter:site" content="@mihou_prog0">
  <!-- Font Awesome -->
  <link
  href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
  rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <!-- css -->
  <title>Miho Uchida</title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- back-to-top -->
  <div id="back-to-top"></div>
  <!-- /back-to-top -->

  <header class="header">
    <div class="header__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="site-logo" alt="ロゴです">
    </div>
    <div class="header__nav">
      <nav>
        <ul class="header__list">
          <li class="header__list-item"><a href="#service" class="nav__link">service</a></li>
          <li class="header__list-item"><a href="#skill" class="nav__link">skill</a></li>
          <li class="header__list-item"><a href="#works" class="nav__link">works</a></li>
          <li class="header__list-item"><a href="#about" class="nav__link">about</a></li>
          <li class="header__list-item"><a href="#contact" class="nav__link">contact</a></li>
          <li class="header__list-item"><a href="https://www.instagram.com/miho_un1210" class="nav__link"><i class="fab fa-instagram"></i></a></li>
          <li class="header__list-item"><a href="https://twitter.com/mihou_prog0" class="nav__link"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </nav>
    </div>

    <div class="hamburger">
      <span class="h-span"></span>
      <span class="h-span"></span>
      <span class="h-span"></span>
    </div>
  </header>