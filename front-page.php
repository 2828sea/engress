<?php get_header(); ?>

<main>
  <div class="l-mv p-mv">
    <div class="p-mv__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/fv.jpg" alt="">
    </div>
    <!-- /.p-mv__img -->
    <div class="p-mv__contents">
      <h2 class="p-mv__title">TOEFL対策は<?php bloginfo('name'); ?></h2>
      <!-- <p class="p-mv__text">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p> -->
      <p class="p-mv__text"><?php bloginfo('description'); ?></p>
      <div class="p-mv__button"><a href="<?php echo esc_url(home_url('$contact')); ?>" class="c-button">資料請求</a></div>
      <div class="p-mv__link"><a href="<?php echo esc_url(home_url('$contact')); ?>">お問い合わせ</a></div>
    </div>
    <!-- /.p-mv__contents -->
  </div>

  <section class="l-about p-about">
    <div class="p-about__inner l-inner">
      <div class="p-about__contents">
        <h2 class="p-about__title">TOEFL学習でこんな悩みありませんか？</h2>
        <ul class="p-about__items">
          <li class="p-about__item">勉強の習慣が<br class="u-desktop">身についていない</li>
          <li class="p-about__item">勉強しているはず<br class="u-desktop">なのに点数が伸びない</li>
          <li class="p-about__item">正しい勉強方法が<br class="u-desktop">わからない</li>
        </ul>
      </div>
      <!-- /.p-about__contents -->
      <div class="p-about__wrapper">
        <div class="p-about__box">
          <h3 class="p-about__copy">Engressは<br><span>TOEFLに特化したスクール</span>です</h3>
          <p class="p-about__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
        </div>
        <!-- /.p-about__box -->
      </div>
    </div>
    <!-- /.p-about__inner -->
  </section>

  <section class="l-service p-service">
    <div class="p-service__inner l-inner">
      <h2 class="p-service__title">TOEFL対策に特化したEngress3つの強み</h2>
      <div class="p-service__contents">
        <div class="p-service__content">
          <div class="p-service__label">特長 １</div>
          <h3 class="p-service__copy"><?php the_field('service-title1'); ?></h3>
          <p class="p-service__text"><?php the_field('service-text1'); ?></p>
        </div>
        <!-- /.p-service__content -->
        <div class="p-service__img">
          <img src="<?php the_field('service-img1'); ?>" alt="">
        </div>
        <!-- /.p-service__img -->
      </div>
      <!-- /.p-service__contents -->

      <div class="p-service__contents p-service__contents--revers">
        <div class="p-service__content">
          <div class="p-service__label">特長 ２</div>
          <h3 class="p-service__copy"><?php the_field('service-title2'); ?></h3>
          <p class="p-service__text"><?php the_field('service-text2'); ?></p>
        </div>
        <!-- /.p-service__content -->
        <div class="p-service__img">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/common/feature02.jpg" alt=""> -->
          <img src="<?php the_field('service-img2'); ?>" alt="">
        </div>
        <!-- /.p-service__img -->
      </div>
      <!-- /.p-service__contents -->

      <div class="p-service__contents">
        <div class="p-service__content">
          <div class="p-service__label">特長 ３</div>
          <h3 class="p-service__copy"><?php the_field('service-title3'); ?></h3>
          <p class="p-service__text"><?php the_field('service-text3'); ?></p>
        </div>
        <!-- /.p-service__content -->
        <div class="p-service__img">
          <img src="<?php the_field('service-img3'); ?>" alt="">
        </div>
        <!-- /.p-service__img -->
      </div>
      <!-- /.p-service__contents -->
    </div>
    <!-- /.p-service__inner -->
  </section>

  <section class="l-price p-price">
    <div class="p-price__inner l-inner">
      <div class="p-price__contents">
        <h2 class="p-price__title">Engressの料金プランはこちら</h2>
        <div class="p-price__button">
          <a href="#" class="c-button">料金を見てみる</a>
        </div>
      </div>
      <!-- /.p-price__contents -->
    </div>
    <!-- /.p-price__inner -->
  </section>

  <section class="l-case p-case">
    <div class="p-case__inner l-inner">
      <h2 class="p-case__title">TOEFL成功事例</h2>
      <div class="p-case__items">
        <div class="p-case__item">
          <p class="p-case__text"><?php the_field('case-text1'); ?></p>
          <div class="p-case__bg">
            <div class="p-case__img">
              <img src="<?php the_field('case-img1'); ?>" alt="">
            </div>
            <!-- /.p-case__img -->
          </div>
          <!-- /.p-case__bg -->
          <div class="p-case__body">
            <div class="p-case__work"><?php the_field('case-work1'); ?></div>
            <div class="p-case__name"><?php the_field('case-name1'); ?></div>
          </div>
          <!-- /.p-case__body -->
          <div class="p-case__score"><?php the_field('case-score1'); ?></div>
        </div>
        <!-- /.p-case__item -->

        <div class="p-case__item">
          <p class="p-case__text"><?php the_field('case-text2'); ?></p>
          <div class="p-case__bg">
            <div class="p-case__img">
              <img src="<?php the_field('case-img2'); ?>" alt="">
            </div>
            <!-- /.p-case__img -->
          </div>
          <!-- /.p-case__bg -->
          <div class="p-case__body">
            <div class="p-case__work"><?php the_field('case-work2'); ?></div>
            <div class="p-case__name"><?php the_field('case-name2'); ?></div>
          </div>
          <!-- /.p-case__body -->
          <div class="p-case__score"><?php the_field('case-score2'); ?></div>
        </div>
        <!-- /.p-case__item -->

        <div class="p-case__item">
          <p class="p-case__text"><?php the_field('case-text3'); ?></p>
          <div class="p-case__bg">
            <div class="p-case__img">
              <img src="<?php the_field('case-img3'); ?>" alt="">
            </div>
            <!-- /.p-case__img -->
          </div>
          <!-- /.p-case__bg -->
          <div class="p-case__body">
            <div class="p-case__work"><?php the_field('case-work3'); ?></div>
            <div class="p-case__name"><?php the_field('case-name3'); ?></div>
          </div>
          <!-- /.p-case__body -->
          <div class="p-case__score"><?php the_field('case-score3'); ?></div>
        </div>
        <!-- /.p-case__item -->
      </div>
      <!-- /.p-case__items -->
    </div>
    <!-- /.p-case__inner -->
  </section>

  <section class="l-flow p-flow">
    <div class="p-flow__inner l-inner">
      <h2 class="p-flow__title">ご利用の流れ</h2>
      <ul class="p-flow__items">
        <li class="p-flow__item">
          <div class="p-flow__box">
            <div class="p-flow__number">01</div>
            <h3 class="p-flow__lead">お問い合わせ</h3>
          </div>
          <!-- /.p-flow__box -->
          <p class="p-flow__text">まずはフォームまたはお電話からお申し込みください。</p>
        </li>
        <li class="p-flow__item">
          <div class="p-flow__box">
            <div class="p-flow__number">02</div>
            <h3 class="p-flow__lead">ヒアリング</h3>
          </div>
          <!-- /.p-flow__box -->
          <p class="p-flow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
        </li>
        <li class="p-flow__item">
          <div class="p-flow__box">
            <div class="p-flow__number">03</div>
            <h3 class="p-flow__lead">学習プランのご提供</h3>
          </div>
          <!-- /.p-flow__box -->
          <p class="p-flow__text">目標達成のために最適な学習プランをご提案致します。</p>
        </li>
        <li class="p-flow__item">
          <div class="p-flow__box">
            <div class="p-flow__number">04</div>
            <h3 class="p-flow__lead">ご入会</h3>
          </div>
          <!-- /.p-flow__box -->
          <p class="p-flow__text">お申込み完了後、レッスンがスタートします。</p>
        </li>
      </ul>
    </div>
    <!-- /.p-flow__inner -->
  </section>

  <section class="l-faq p-faq">
    <div class="p-faq__inner l-inner">
      <h2 class="p-faq__title">よくある質問</h2>
      <dl class="p-faq__menu">
        <dt class="p-faq__question js-accordion">Engressはサラリーマンでも学習を続けられるでしょうか？<span></span></dt>
        <dd class="p-faq__answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。<span></span></dd>
        <dt class="p-faq__question js-accordion">教材はオリジナルのものを使用しているのでしょうか？<span></span></dt>
        <dd class="p-faq__answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。<span></span></dd>
        <dt class="p-faq__question js-accordion">講師に日本人はいますか？<span></span></dt>
        <dd class="p-faq__answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。<span></span></dd>
        <dt class="p-faq__question js-accordion">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？<span></span></dt>
        <dd class="p-faq__answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。<span></span></dd>
      </dl>
    </div>
    <!-- /.p-faq__inner -->
  </section>

  <div class="l-flex-container p-flex-container">
    <div class="p-flex-container__inner l-inner">
      <div class="l-blog p-blog">
        <div class="p-blog__inner">
          <h2 class="p-blog__title">ブログ</h2>
          <div class="p-blog__items">


            <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => '3'
            );
            $the_query = new WP_query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="p-blog__item p-article">
                  <figure class="p-article__img">
                    <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('./images/common/feature02.jpg')); ?>" alt="">
                <?php } ?>
                    <span class="p-article__label"><?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                  <?php if ($terms) { ?>
                    <?php foreach ($terms as $term) {
                      echo $term->name;
                    } ?>
                  <?php } ?></span>
                  </figure>
                  <div class="p-article__body">
                    <h3 class="p-article__title"><?php the_title(); ?></h3>
                    <time class="p-article__date"><?php echo get_the_date('Y-m-d'); ?></time>
                  </div>
                  <!-- /.p-article__body -->
                </a>
                <!-- /.p-blog__item -->
              <?php endwhile; ?>
            <?php wp_reset_postdata(); endif; ?>


          </div>
          <!-- /.p-blog__items -->
        </div>
        <!-- /.p-blog__inner -->
      </div>
      <!-- /.l-blog -->
      <div class="l-news p-news">
        <div class="p-blog__inner">
          <h2 class="p-news__title">お知らせ</h2>
          <div class="p-news__items">

          <?php
      $news_query = new WP_Query(
        array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
        )
      );
      ?>
      <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="p-news__item p-info">
          <time class="p-info__date"><?php echo get_the_date('Y-m-d'); ?></time>
          <p class="p-info__title"><?php the_title(); ?></p>
        </a>
        <!-- /.p-news__item -->
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>


          </div>
          <!-- /.p-news__items -->
        </div>
        <!-- /.p-news__inner -->
      </div>
      <!-- /.l-news -->
    </div>
    <!-- p-flex-container__inner -->
  </div>

  <section class="l-contact p-contact">
    <div class="p-contact__inner">
      <h2 class="p-contact__title">まずは無料で資料請求から</h2>
      <div class="p-contact__button">
        <a href="<?php echo esc_url(home_url('$contact')); ?>" class="c-button">資料請求</a>
      </div>
      <a href="<?php echo esc_url(home_url('$contact')); ?>" class="p-contact__link">お問い合わせ</a>
    </div>
    <!-- /.p-contact__inner -->
    <div class="p-contact__box">
      <p class="p-contact__text">お電話でのお問い合わせはこちら</p>
      <a href="tel:0123-456-789" class="p-contact__tel">0123-456-7890</a>
      <div class="p-contact__time">平日 08:00~20:00</div>
    </div>
    <!-- /.p-contact__box -->
  </section>
</main>


<?php get_footer(); ?>