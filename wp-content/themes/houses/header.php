<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/icons/favicon.svg" type="image/x-icon" />
    <meta content="<?php bloginfo('template_url'); ?>/assets/images/logo.webp" property="og:image" />
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="header _section-1">
        <div class="header__inner">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.webp" alt="" class="logo-img">
          </a>
          <nav class="nav">
            <?php
              wp_nav_menu( array(
                  'theme_location' => 'header_menu',
                  'container'      => false,                 // убираем обёртку div
                  'menu_class'     => 'nav__menu',        // класс для ul
                  'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                  'fallback_cb'    => false,
                  'depth'          => 1,
                  'walker'         => new Custom_Walker_Nav_Menu() // если нужен свой walker (см. ниже)
              ) );
            ?>
            <div class="header__contacts">
              <a href="tel:<?php the_field('number_link','option') ?>" class="header__tel _link _link-padding"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 4C20 1.8 18.2 0 16 0H8C5.8 0 4 1.8 4 4V20C4 22.2 5.8 24 8 24H16C18.2 24 20 22.2 20 20V4ZM13 22H11C10.4 22 10 21.6 10 21C10 20.4 10.4 20 11 20H13C13.6 20 14 20.4 14 21C14 21.6 13.6 22 13 22ZM18 17C18 17.6 17.6 18 17 18H7C6.4 18 6 17.6 6 17V5C6 4.4 6.4 4 7 4H17C17.6 4 18 4.4 18 5V17Z" fill="#1A3A27"/>
</svg> <?php the_field('number','option') ?></a>
              <a href="#form-top" data-fancybox class="header__button _btn _btn-primary _btn-normal">ЗАБРОНИРОВАТЬ</a>
            </div>
            <div class="burger _btn _btn-primary">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
        <div class="mobile-menu _bg">
    <div class="mobile-menu__top">
        <p class="mobile-menu__top-text">МЕНЮ</p>
        <button class="mobile-menu__close _btn _btn-secondary  _arrow-medium"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 6L6 18" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6 6L18 18" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
    </div>
    <div class="mobile-menu__bar">
        <?php
          wp_nav_menu( array(
              'theme_location' => 'header_menu',
              'container'      => false,
              'menu_class'     => 'mobile-menu__inner',
              'items_wrap'     => '<div class="%2$s">%3$s</div>',
              'fallback_cb'    => false,
              'depth'          => 1,
              'walker'         => new Mobile_Menu_Walker() // можно создать отдельный walker для мобильных классов
          ) );
          ?>
        <div class="mobile-menu__contacts header__contacts">
                <a href="tel:+79953831616" class="mobile-menu__tel _link _link-padding"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 4C20 1.8 18.2 0 16 0H8C5.8 0 4 1.8 4 4V20C4 22.2 5.8 24 8 24H16C18.2 24 20 22.2 20 20V4ZM13 22H11C10.4 22 10 21.6 10 21C10 20.4 10.4 20 11 20H13C13.6 20 14 20.4 14 21C14 21.6 13.6 22 13 22ZM18 17C18 17.6 17.6 18 17 18H7C6.4 18 6 17.6 6 17V5C6 4.4 6.4 4 7 4H17C17.6 4 18 4.4 18 5V17Z" fill="#1A3A27"/>
</svg>
 +7 995 383 16 16</a>
                <a href="#" class="mobile-menu__button _btn _btn-primary _btn-normal">ЗАБРОНИРОВАТЬ</a>
            </div>
    </div>
</div>
<div class="menu-overlay"></div>
</header>