<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?></title>
    <link rel="stylesheet" href="<?php echo esc_attr(get_template_directory_uri()); ?>/slick/slick.css">
  <link rel="stylesheet" href="<?php echo esc_attr(get_template_directory_uri()); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_attr(get_template_directory_uri()); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
      <div class="header-box">
          <h1><a href="#">タカグルメ</a></h1>
          
          <nav>
              <button type="button" class="menu-btn">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              <ul class="header-nav menu">
                  <li class="menu_item"><a href="#PICKUP">PICKUP</a></li>
                  <li class="menu_item"><a href="#SHOP">SHOP</a></li>
                  <li class="menu_item"><a href="#RANKING">RANKING</a></li>
                  <li class="menu_item"><a href="#AREA">AREA</a></li>
              </ul>
          </nav>
        </div>
    </header> 