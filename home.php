<?php get_header(); ?>
<div class="l-eye-catch p-eye-catch">
  <figure class="p-eye-catch__img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/news-img.jpg" alt="">
  </figure>
  <h1 class="p-eye-catch__title"><?php echo get_the_title(11); ?></h1>
</div>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>

<section class="l-sub-news p-sub-news">
  <div class="p-sub-news__inner l-inner">
    <h2 class="p-sub-news__title"><?php echo get_the_title(11); ?>一覧</h2>
    <div class="p-sub-news__items">

      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-sub-news__item">
            <time class="p-sub-news__date"><?php echo get_the_date('Y-m-d'); ?></time>
            <p class="p-sub-news__text"><?php the_title(); ?></p>
          </a>
      <?php endwhile; endif; ?>

    </div>
    <!-- /.p-sub-news__contents -->

    <div class="l-pagenavi p-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>

  </div>
  <!-- /.p-sub-news__inner -->
</section>

<?php get_template_part('template-part/parts', 'contact'); ?>


<?php get_footer(); ?>