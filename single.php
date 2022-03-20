<?php get_header(); ?>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>
<div class="l-single p-single">
  <div class="p-single__inner l-inner">
<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1 class="p-single__title"><?php the_title(); ?></h1>
      <time class="p-single__date"><?php echo get_the_date('Y-m-d'); ?></time>
      <div class="p-single__body">
      <?php 
      the_content();
    endwhile; endif;
?>
    </div>
  </div>
</div>
<?php get_template_part('template-part/parts', 'contact'); ?>

<?php get_footer(); ?>