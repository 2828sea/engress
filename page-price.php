<?php get_header(); ?>
<div class="l-eye-catch p-eye-catch">
  <figure class="p-eye-catch__img">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/sub-price-img.jpg" alt="">
  </figure>
  <h1 class="p-eye-catch__title"><?php the_title(); ?></h1>
</div>
<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>

<section class="l-sub-price p-sub-price">
  <div class="p-sub-price__inner l-inner">
    <h2 class="p-sub-price__title">料金体系</h2>
    <div class="p-sub-price__items">
      <div class="p-sub-price__item"><?php the_field('price-admission'); ?></div>
      <div class="p-sub-price__plus"></div>
      <div class="p-sub-price__item"><?php the_field('price-monthly'); ?></div>
    </div>
    <!-- /.p-sub-price__items -->
    <p class="p-sub-price__text"><?php the_field('price-text'); ?></p>
  </div>
  <!-- /.p-sub-price__inner -->
</section>

<section class="l-sub-plan p-sub-plan">
  <div class="p-sub-plan__inner l-inner">
    <h2 class="p-sub-plan__title">料金表</h2>
    <div class="p-sub-plan__scroll js-scrollable">

      <div class="p-sub-plan__items">
        <div class="p-sub-plan__item p-table">
          <h3 class="p-table__title">基礎プラン</h3>
          <div class="p-table__body">
            <div class="p-table__price"><?php the_field('plan-price1'); ?>円~</div>
            <div class="p-table__text">*月額（税抜価格）</div>
            <ul class="p-table__items">
              <li class="p-table__item">カリキュラム作成</li>
              <li class="p-table__item">TOEFL学習サポート</li>
              <li class="p-table__item">週一回のビデオMTG</li>
            </ul>
          </div>
          <!-- /.p-table__body -->
        </div>
        <!-- /.p-sub-plan__item -->
        <div class="p-sub-plan__item p-table">
          <h3 class="p-table__title">演習プラン</h3>
          <div class="p-table__body">
            <div class="p-table__price"><?php the_field('plan-price2'); ?>円~</div>
            <div class="p-table__text">*月額（税抜価格）</div>
            <ul class="p-table__items">
              <li class="p-table__item">カリキュラム作成</li>
              <li class="p-table__item">TOEFL学習サポート</li>
              <li class="p-table__item">週一回のビデオMTG</li>
              <li class="p-table__item">月二回の模試（解説付き）</li>
            </ul>
          </div>
          <!-- /.p-table__body -->
        </div>
        <!-- /.p-sub-plan__item -->
        <div class="p-sub-plan__item p-table">
          <span class="p-table__suggest">おすすめ</span>
          <h3 class="p-table__title">志望校対策プラン</h3>
          <div class="p-table__body">
            <div class="p-table__price"><?php the_field('plan-price3'); ?>円~</div>
            <div class="p-table__text">*月額（税抜価格）</div>
            <ul class="p-table__items">
              <li class="p-table__item">カリキュラム作成</li>
              <li class="p-table__item">TOEFL学習サポート</li>
              <li class="p-table__item">週一回のビデオMTG</li>
              <li class="p-table__item">月二回の模試（解説付き）</li>
              <li class="p-table__item">週一の英語面接対策</li>
            </ul>
          </div>
          <!-- /.p-table__body -->
        </div>
        <!-- /.p-sub-plan__item -->
        <div class="p-sub-plan__item p-table">
          <h3 class="p-table__title">基礎プラン</h3>
          <div class="p-table__body">
            <div class="p-table__price"><?php the_field('plan-price4'); ?>円~</div>
            <div class="p-table__text">*月額（税抜価格）</div>
            <ul class="p-table__items">
              <li class="p-table__item">＊別途ご相談ください</li>
            </ul>
          </div>
          <!-- /.p-table__body -->
        </div>
        <!-- /.p-sub-plan__item -->
      </div>
      <!-- /.p-sub-plan__items -->
    </div>
    <!-- /.p-sub-plan__scroll -->
  </div>
  <!-- /.p-sub-plan__inner -->
</section>

<?php get_template_part('template-part/parts', 'contact'); ?>


<?php get_footer(); ?>