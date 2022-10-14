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
    <header class="global_header">
      <div class="global_header__wrapper">
        <div class="global_header__wrapper__title">
          <a href="<?php echo home_url(); ?>">
            <h1>IROHAKAGU</h1>
          </a>
        </div>
        <div class="global_header__wrapper__pagelinks">
          <?php wp_nav_menu(array(
            'container' => false,
            'theme_location' => 'global',
            'menu_class' => 'global_header__wrapper__pagelinks__list',
            'add_li_class' => 'global_header__wrapper__pagelinks__list__item',
          )); ?>
        </div>

        <div class="global_header__wrapper__sns-icons">
          <ul class="global_header__wrapper__sns-icons__list">
            <li class="global_header__wrapper__sns-icons__list__item">
              <a href="<?php echo the_field("iroha_url", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/iroha-icon.svg" alt="イロハアイコン" /></a>
            </li>
            <li class="global_header__wrapper__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram.png" alt="インスタアイコン" /></a>
            </li>
            <li class="global_header__wrapper__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/pinta.svg" alt="ピンタレストアイコン" /></a>
            </li>
            <li class="global_header__wrapper__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/cart.svg" alt="カートアイコン" /></a>
            </li>
            <li class="global_header__wrapper__sns-icons__list__item">
              <a href="<?php echo home_url("/contact"); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/mail.svg" alt="メールアイコン" /></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="global_header__sp-wrapper">

      <button class="global_header__sp-wrapper__toggle" id="header-toggle-button">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="global_header__sp-wrapper__menus">
        <div class="global_header__sp-wrapper__menus__title">
          <a href="<?php echo home_url(); ?>">
            <h1>IROHAKAGU</h1>
          </a>
        </div>
        <div class="global_header__sp-wrapper__menus__pagelinks">
          <?php wp_nav_menu(array(
            'container' => false,
            'theme_location' => 'global',
            'menu_class' => 'global_header__sp-wrapper__menus__pagelinks__list',
            'add_li_class' => 'global_header__sp-wrapper__menus__pagelinks__list__item',
          )); ?>
        </div>

        <div class="global_header__sp-wrapper__menus__sns-icons">
          <ul class="global_header__sp-wrapper__menus__sns-icons__list">
            <li class="global_header__sp-wrapper__menus__sns-icons__list__item">
              <a href="<?php echo the_field("iroha_url", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/iroha-icon.svg" alt="イロハアイコン" /></a>
            </li>
            <li class="global_header__sp-wrapper__menus__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram.png" alt="インスタアイコン" /></a>
            </li>
            <li class="global_header__sp-wrapper__menus__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/pinta.svg" alt="ピンタレストアイコン" /></a>
            </li>
            <li class="global_header__sp-wrapper__menus__sns-icons__list__item">
              <a href="<?php echo the_field("image", 93); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/cart.svg" alt="カートアイコン" /></a>
            </li>
            <li class="global_header__sp-wrapper__menus__sns-icons__list__item">
              <a href="<?php echo home_url("/contact"); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/mail.svg" alt="メールアイコン" /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
