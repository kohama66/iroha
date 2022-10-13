<?php 
/*
Template Name: Product
*/
?>
<?php get_header(); ?>
  <section class="product_detail">
    <div class="product_detail__inner">
      <div class="product_detail__inner__main_content">

      <?php
        $args = array(
          'post_type'=>'furniture', 
          'posts_per_page'  => -1,
          'post_status' => 'publish',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
      ?>

        <div class="product_detail__inner__main_content__item">
          <figure class="product_detail__inner__main_content__item__image">
            <img src="<?php echo the_field("image"); ?>" alt="イメージ画像">
          </figure>
          <div class="product_detail__inner__main_content__item__detail">
            <h2 class="product_detail__inner__main_content__item__detail__title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>

        <?php endwhile; endif ?>

      </div>
    </div>
  </section>
<?php get_footer(); ?>
