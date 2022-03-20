<?php get_header(); ?>
<div class="l-eye-catch p-eye-catch">
  <figure class="p-eye-catch__img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/news-img.jpg" alt="">
  </figure>
  <h1 class="p-eye-catch__title"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>

<section class="l-sub-blog p-sub-blog">
  <div class="p-sub-blog__inner l-inner">
    <h2 class="p-sub-blog__title">新着一覧</h2>
    <div class="p-sub-blog__items">

      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-sub-blog__item p-sub-article">
                  <figure class="p-sub-article__img">
                    <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('./images/common/feature02.jpg')); ?>" alt="">
                <?php } ?>
                    <span class="p-sub-article__label"><?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                  <?php if ($terms) { ?>
                    <?php foreach ($terms as $term) {
                      echo $term->name;
                    } ?>
                  <?php } ?></span>
                  </figure>
                  <div class="p-sub-article__body">
                    <time class="p-sub-article__date"><?php echo get_the_date('Y-m-d'); ?></time>
                    <h3 class="p-sub-article__title"><?php the_title(); ?></h3>
                    <p class="p-sub-blog__text"><?php the_excerpt(); ?></p>
                  </div>
                  <!-- /.p-sub-article__body -->
                </a>
                <!-- /.p-sub-blog__item -->
      <?php endwhile; endif; ?>

    </div>
    <!-- /.p-sub-blog__items -->

    <div class="l-pagenavi p-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>

  </div>
  <!-- /.p-sub-news__inner -->
</section>

<?php get_template_part('template-part/parts', 'contact'); ?>


<?php get_footer(); ?>