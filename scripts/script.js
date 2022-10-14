jQuery(function () {
  let isMenuOpen = false;
  jQuery("#header-toggle-button").on("click", function () {
    if (!isMenuOpen) {
      jQuery(".global_header__sp-wrapper__menus").addClass("is-open");
      jQuery(".global_header__sp-wrapper").addClass("is-open");
    } else {
      jQuery(".global_header__sp-wrapper__menus").removeClass("is-open");
      jQuery(".global_header__sp-wrapper").removeClass("is-open");
    }

    isMenuOpen = !isMenuOpen;
  });
});
