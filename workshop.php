<?php 
/*
Template Name: WorkShop
*/
?>
<?php get_header(); ?>
  <section class="workshop">
    <div class="workshop__inner">
      <section class="workshop__inner__main_image">
        <figure>
          <img loading="eager" src="<?php echo get_template_directory_uri() ?>/assets/images/workshop.svg" alt="工房紹介メインイメージ">
        </figure>
      </section>

      <section class="workshop__inner__images">
        <figure><img src="<?php echo the_field("image_1"); ?>" alt="イメージ画像1"></figure>
        <figure><img src="<?php echo the_field("image_2"); ?>" alt="イメージ画像2"></figure>
        <figure><img src="<?php echo the_field("image_3"); ?>" alt="イメージ画像3"></figure>
        <figure><img src="<?php echo the_field("image_4"); ?>" alt="イメージ画像4"></figure>
        <figure><img src="<?php echo the_field("image_5"); ?>" alt="イメージ画像5"></figure>
        <figure><img src="<?php echo the_field("image_6"); ?>" alt="イメージ画像6"></figure>
      </section>

      <section class="workshop__inner__info">
        <div class="workshop__inner__info__wrapper">
          <div>
            <!-- <h2 class="workshop__inner__info__wrapper__title">
              工房で出来ること
            </h2>
            <ul class="workshop__inner__info__wrapper__list">
              <li><?php echo the_field("text_1"); ?></li>
            </ul>

            <h3 class="workshop__inner__info__wrapper__title">
              工房を借りてみませんか?※事前予約
            </h3>
            <ul class="workshop__inner__info__wrapper__reserve">
            <li><?php echo the_field("text_2"); ?></li>
            </ul> -->

            <p class="workshop__inner__info__wrapper__address">
              〒613-0046 京都府久世郡久御山町大橋辺13-11<br />
              駐車1代のみ (建物に寄せて駐車してください) 近隣パーキング有り
            </p>
          </div>
        </div>
        <figure>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/map.svg" alt="地図画像">
        </figure>
      </section>
    </div>
  </section>
<?php get_footer(); ?>
