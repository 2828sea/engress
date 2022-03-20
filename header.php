<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- css -->
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('./css/styles.css')); ?>">
  <!-- JavaScript -->
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo esc_url(get_theme_file_uri('./js/script.js')); ?>"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php 
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$price = esc_url(home_url('/price/'));
$news = esc_url(home_url('/news/'));
$blog = esc_url(home_url('/blog/'));
$contact = esc_url(home_url('/contact/'));
?>


  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="<?php echo $home; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo.svg" alt="">
        </a>
      </h1>
      <!-- PC用のメニュー SPでは非表示 -->
      <nav class="p-header__nav">
        <ul class="p-header__item">
          <li class="p-header__list"><a href="<?php echo $home ?>">ホーム</a></li>
          <li class="p-header__list"><a href="<?php echo $news ?>">お知らせ</a></li>
          <li class="p-header__list"><a href="<?php echo $blog ?>">ブログ</a></li>
          <li class="p-header__list"><a href="<?php echo $price ?>">コース・料金</a></li>
        </ul>
        <ul class="p-header__contents">
          <li class="p-header__content p-header__content--tel"><a href="tel:0123-456-7890"><span>平日08:00〜20:00</span>0123-456-7890</a></li>
          <li class="p-header__content p-header__content--orange"><a href="<?php echo $contact ?>">資料請求</a></li>
          <li class="p-header__content p-header__content--contact"><a href="<?php echo $contact ?>">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- ここまでPC用のメニュー -->
    </div>

    <!-- スマホサイズでハンバーガーメニュー PCでは非表示-->
    <div class="p-hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="p-globalMenuSp js-globalMenuSp">
      <ul id="menu">
        <li class="p-globalMenuSp__link">
          <a href="#">Menu1だお</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="#">Menu2だお</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="#">Menu3だお</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="#">Menu4だお</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="#">Menu5だお</a>
        </li>
      </ul>
    </nav>
    <!-- ここまでハンバーガーメニュー -->
  </header>