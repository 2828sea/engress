<?php 
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$price = esc_url(home_url('/price/'));
$news = esc_url(home_url('/news/'));
$blog = esc_url(home_url('/blog/'));
$contact = esc_url(home_url('/contact/'));
?>

<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <nav class="p-footer__nav">
      <ul class="p-footer__items">
        <li class="p-footer__item"><a href="<?php echo $home; ?>">ホーム</a></li>
        <li class="p-footer__item"><a href="<?php echo $news; ?>">お知らせ</a></li>
        <li class="p-footer__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
        <li class="p-footer__item"><a href="<?php echo $price; ?>">コース・料金</a></li>
      </ul>
    </nav>
    <div class="p-footer__contents">
      <div class="p-footer__bg">
        <div class="p-footer__logo">
          <a href="<?php echo $home; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo.svg" alt="">
        </a>
        </div>
      </div>
      <div class="p-footer__tel">
        <a href="tel:0123-456-7890">0123-456-7890</a>
      </div>
      <p class="p-footer__time">平日08:00~20:00</p>
    </div>
    <!-- /.p-footer__contents -->
  </div>
  <!-- /.p-footer__inner -->
</footer>
<?php wp_footer(); ?>
<div class="l-copyright p-copyright">
  <div class="p-copyright__inner l-inner">
    © 2020 Engress.
  </div>
</div>
</body>

</html>