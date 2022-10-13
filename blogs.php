<?php 
/*
Template Name: Blogs
*/
?>
<?php get_header(); ?>
  <section class="blogs">
    <div class="blogs__inner">
      <div class="blogs__inner__main_content">

      <?php
        $args = array(
          'post_type'=>'post', 
          'posts_per_page'  => -1,
          'post_status' => 'publish',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
      ?>

        <div class="blogs__inner__main_content__item">
          <div class="blogs__inner__main_content__item__info">
            <h1><?php the_title(); ?></h1>
            <div class="blogs__inner__main_content__item__info__text">
              <?php the_content(); ?>
            </div>
            <p class="blogs__inner__main_content__item__info__date"><?php the_time('Y-m-d'); ?></p>
          </div>
          <div class="blogs__inner__main_content__item__images">
            <?php $image1 = get_field("image_1"); if ($image1): ?>
              <figure><img src="<?php echo $image1; ?>" alt="イメージ画像1"></figure>
            <?php endif; ?>
            <?php $image2 = get_field("image_2"); if ($image2): ?>
              <figure><img src="<?php echo $image2; ?>" alt="イメージ画像2"></figure>
            <?php endif; ?>
          </div>
        </div>

        <?php endwhile; endif ?>

      </div>
    </div>
  </section>
<?php get_footer(); ?>
