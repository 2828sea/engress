<?php get_header(); ?>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>
<div class="l-single-blog p-single-blog">
  <div class="p-single-blog__inner l-inner">

    <div class="p-single-blog__container p-area">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="p-area__label">
            <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
            <?php if ($terms) { ?>
              <?php foreach ($terms as $term) {
                echo $term->name;
              } ?>
            <?php } ?>
          </div>
          <h1 class="p-area__title"><?php the_title(); ?></h1>
          <div class="p-area__body">
            <time class="p-area__date"><?php echo get_the_date('Y-m-d'); ?></time>
        <?php
          the_content();
        endwhile;
      endif;
        ?>
          </div>


          <div class="p-area__pickup p-pickup">
            <div class="p-pickup__title">おすすめの記事</div>
            <div class="p-pickup__items">

              <?php
              $args = [
                'post_type' => 'blog', // 検索したいカスタム投稿タイプ
                'tax_query' => [
                  [
                    'taxonomy' => 'blog_tag', // 絞り込みたいカスタムタクソノミー
                    'field' => 'slug', // スラッグで検索。idでも検索できます
                    'terms' => 'pickup', // 検索する文字列（fieldがidならidが入ります）
                  ]
                ],
                'post_count' => 3,
                'paged'      => get_query_var('paged') ? intval(get_query_var('paged')) : 1,
              ];

              $the_query = new WP_Query($args);

              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

                  <a href="<?php the_permalink(); ?>" class="p-pickup__item p-pickup-article">
                    <figure class="p-pickup-article__img">
                      <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                      <?php } else { ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/common/feature02.jpg')); ?>" alt="">
                      <?php } ?>
                      <span class="p-pickup-article__label"><?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                        <?php if ($terms) { ?>
                          <?php foreach ($terms as $term) {
                            echo $term->name;
                          } ?>
                        <?php } ?></span>
                    </figure>
                    <div class="p-pickup-article__body">
                      <time class="p-pickup-article__date"><?php echo get_the_date('Y-m-d'); ?></time>
                      <h3 class="p-pickup-article__title"><?php the_title(); ?></h3>
                      <!-- <p class="p-sub-blog__text"><?php the_excerpt(); ?></p> -->
                    </div>
                    <!-- /.p-pickup-article__body -->
                  </a>
                  <!-- /.p-sub-blog__item -->

              <?php endwhile;
              endif;
              wp_reset_postdata(); ?>



            </div>
            <!-- /.p-pickup__items -->
          </div>

    </div>
    <!-- /.p-area__container -->

    <div class="p-area__sidebar p-sidebar">
      <div class="p-sidebar__title">関連記事</div>
      <div class="p-sidebar__items">






        <?php
        global $post;
        $term = array_shift(get_the_terms($post->ID, 'blog_category')); //←ここが追加
        $args = array(
          'numberposts' => 3, //3件表示(デフォルトは５件)
          'post_type' => 'blog', //カスタム投稿タイプ名
          'taxonomy' => 'blog_category', //タクソノミー名
          'term' => $term->slug, //ターム名 ←ここが追加
          'orderby' => 'rand', //ランダム表示
          'post__not_in' => array($post->ID) //表示中の記事を除外
        );
        ?>
        <?php $myPosts = get_posts($args);
        if ($myPosts) : ?>
          <?php foreach ($myPosts as $post) : setup_postdata($post); ?>

            <a href="<?php the_permalink(); ?>" class="p-sidebar__item">
              <figure class="p-sidebar__img">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('./images/common/feature02.jpg')); ?>" alt="">
                <?php } ?>
              </figure>
              <div class="p-sidebar__text"><?php the_title(); ?></div>
            </a>

          <?php endforeach; ?>
        <?php endif;
        wp_reset_postdata(); ?>




      </div>
      <!-- /.p-sidebar__items -->

      <div class="p-sidebar__title">カテゴリー</div>
      <div class="p-sidebar__box p-sidebar-category">
        <ul class="p-sidebar-category__items">
          <?php
          $terms = get_terms('blog_category');
          foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
          }
          ?>
        </ul>
        <!-- /.p-sidebar-category__items -->
      </div>
      <!-- /.p-sidebar__box -->
    </div>
    <!-- /.p-area__sidebar -->

  </div>
  <!-- /.p-area__inner -->
</div>
<?php get_template_part('template-part/parts', 'contact'); ?>

<?php get_footer(); ?>