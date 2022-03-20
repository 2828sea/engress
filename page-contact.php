<?php get_header(); ?>
<div class="l-eye-catch p-eye-catch">
  <figure class="p-eye-catch__img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/sub-contact.jpg" alt="">
  </figure>
  <h1 class="p-eye-catch__title"><?php the_title(); ?></h1>
</div>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>

<div class="l-sub-contact p-sub-contact">
  <div class="p-sub-contact__inner">
    <p class="p-sub-contact__text">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>


    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="p-sub-contact__form">
          <?php the_content(); ?>

        </div>
    <?php endwhile;
    endif;
    ?>

  </div>
  <!-- /.p-sub-contact__inner -->
</div>


<?php get_footer(); ?>