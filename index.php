<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header class="top-header">
      <div class="top-header__wrapper">
        <div class="top-header__wrapper__pagelinks">
          <?php wp_nav_menu(array(
          'container' => false,
          'theme_location' => 'global',
          'menu_class' => 'top-header__wrapper__pagelinks__list',
          'add_li_class' => 'top-header__wrapper__pagelinks__list__item',
        )); ?>
        </div>

        <div class="top-header__wrapper__sns-icons">
          <ul class="top-header__wrapper__sns-icons__list">
            <li class="top-header__wrapper__sns-icons__list__item">
              <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/iroha-icon.svg" alt="イロハアイコン" /></a>
            </li>
            <li class="top-header__wrapper__sns-icons__list__item">
              <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram.png" alt="インスタアイコン" /></a>
            </li>
            <li class="top-header__wrapper__sns-icons__list__item">
              <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/pinta.svg" alt="ピンタレストアイコン" /></a>
            </li>
            <li class="top-header__wrapper__sns-icons__list__item">
              <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/cart.svg" alt="カートアイコン" /></a>
            </li>
            <li class="top-header__wrapper__sns-icons__list__item">
              <a href="<?php echo home_url("/contact"); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/mail.svg" alt="メールアイコン" /></a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <section class="top">
      <div class="top__main">
        <img
          src="<?php echo get_template_directory_uri() ?>/assets/images/iroha_main.svg"
          alt="メインイメージ"
          class="top__main__image"
        />
        <img
          src="<?php echo get_template_directory_uri() ?>/assets/images/title-logo.png"
          alt="メインイメージ"
          class="top__main__logo_image"
        />
      </div>
    </section>
  <?php get_footer(); ?>
