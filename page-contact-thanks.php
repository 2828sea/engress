<?php get_header(); ?>

<?php get_template_part('template-part/parts', 'breadcrumbs'); ?>

<div class="l-thanks p-thanks">
  <div class="p-thanks__inner l-inner">
    <p class="p-thanks__text">お問い合わせいただきありがとうございます</p>
    <p class="p-thanks__text">内容を確認した後、担当者よりご連絡いたします</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-thanks__link">ホームへ戻る</a>
  </div>
</div>


<?php get_footer(); ?>