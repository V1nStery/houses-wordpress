<?php
/*
Template Name: contacts-page
*/
?>

<?php get_header(); ?>

<main class="main-contacts">
<nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</nav>
<section class="contacts _section-1">
    <div class="container">
        <h1 class="contacts__title _title-2"><?php the_field('contacts_title') ?></h1>
        <div class="contacts__inner">
            <div class="contacts__info">
                <div class="contacts__info-pict">
                    <img src="<?php the_field('contacts_img') ?>" alt="" class="_image">
                </div>
                <a href="tel:<?php the_field('number_link','option') ?>" class="contacts__info-tel"><?php the_field('number','option') ?></a>
                <p class="contacts__info-address"><?php the_field('address','option') ?></p>
                <a href="mailto:bri.village@mail.ru" class="contacts__info-mail"><?php the_field('email','option') ?></a>
                <div class="contacts__info-socials">
                    <a href="<?php the_field('link_telegram','option') ?>" target="_blank" class="contacts__info-link"><svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.3749 7.31846C6.74359 4.91938 10.3236 3.33777 12.1148 2.57361C17.2292 0.391776 18.2919 0.0127698 18.9846 0.00012133C19.1369 -0.00249777 19.4776 0.0362266 19.6982 0.219862C19.8845 0.37492 19.9358 0.584381 19.9603 0.731393C19.9848 0.878405 20.0154 1.2133 19.9911 1.47498C19.714 4.46174 18.5147 11.7098 17.9046 15.055C17.6465 16.4705 17.1382 16.9451 16.6461 16.9916C15.5766 17.0925 14.7645 16.2667 13.7287 15.5702C12.1078 14.4805 11.1921 13.8021 9.61879 12.7387C7.80053 11.5097 8.97923 10.8343 10.0154 9.73042C10.2866 9.44153 14.9987 5.04555 15.0899 4.64677C15.1013 4.59689 15.1119 4.41098 15.0042 4.31282C14.8965 4.21465 14.7376 4.24822 14.6229 4.27492C14.4604 4.31276 11.871 6.06814 6.85486 9.54107C6.11988 10.0587 5.45416 10.3109 4.8577 10.2977C4.20015 10.2831 2.93528 9.91638 1.99498 9.60288C0.84166 9.21836 -0.074973 9.01506 0.00484519 8.36203C0.0464194 8.0219 0.503103 7.67404 1.3749 7.31846Z" fill="url(#paint0_linear_8129_527)" />
  <defs>
    <linearGradient id="paint0_linear_8129_527" x1="10" y1="0" x2="10" y2="17" gradientUnits="userSpaceOnUse">
      <stop stop-color="#37AFE3" />
      <stop offset="1" stop-color="#1E94D3" />
    </linearGradient>
  </defs>
</svg></a>
                    <a href="<?php the_field(' link_vk','option') ?>" target="_blank" class="contacts__info-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.1954 17.999H19.0065C18.1783 17.999 17.9288 17.3216 16.4443 15.8212C15.1469 14.5584 14.5989 14.4014 14.2707 14.4014C13.8168 14.4014 13.693 14.5274 13.693 15.1583V17.1471C13.693 17.685 13.5203 18 12.1288 18C10.7789 17.9084 9.46987 17.4942 8.3095 16.7916C7.14913 16.0889 6.17065 15.1179 5.45465 13.9584C3.75457 11.8214 2.57166 9.31315 2 6.63323C2 6.30177 2.12475 6.00132 2.75043 6.00132H4.93837C5.50071 6.00132 5.70319 6.25428 5.92391 6.8387C6.98621 9.99635 8.79894 12.7431 9.53498 12.7431C9.81711 12.7431 9.93994 12.6171 9.93994 11.9066V8.65401C9.84685 7.17017 9.06668 7.04514 9.06668 6.50821C9.07655 6.36655 9.14071 6.23436 9.24553 6.13971C9.35035 6.04506 9.48758 5.99542 9.62806 6.00132H13.0674C13.5376 6.00132 13.693 6.2378 13.693 6.80575V11.1962C13.693 11.6702 13.8946 11.8272 14.0366 11.8272C14.3187 11.8272 14.5356 11.6702 15.0528 11.1487C16.1615 9.78312 17.0673 8.26165 17.7417 6.63226C17.8107 6.43663 17.9412 6.26918 18.1133 6.15543C18.2853 6.04169 18.4895 5.98791 18.6946 6.00228H20.8835C21.5399 6.00228 21.679 6.33375 21.5399 6.80672C20.7438 8.6079 19.7587 10.3176 18.6015 11.9066C18.3654 12.2701 18.2714 12.4591 18.6015 12.8855C18.8184 13.217 19.5861 13.8644 20.1014 14.4799C20.8518 15.2358 21.4746 16.1101 21.9458 17.0676C22.1339 17.684 21.8201 17.999 21.1954 17.999Z" fill="#0077FF"/>
</svg>
</a>
                    <a href="<?php the_field('link_whatsapp','option') ?>" target="_blank" class="contacts__info-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19 4.875C17.125 3 14.625 2 12 2C6.5 2 2 6.5 2 12C2 13.75 2.50001 15.5 3.37501 17L2 22L7.25002 20.625C8.75002 21.375 10.375 21.875 12 21.875C17.5 21.875 22 17.375 22 11.875C22 9.25 20.875 6.75 19 4.875ZM12 20.25C10.5 20.25 9.00001 19.875 7.75001 19.125L7.49999 19L4.37499 19.875L5.25001 16.875L4.99999 16.5C4.12499 15.125 3.74999 13.625 3.74999 12.125C3.74999 7.625 7.5 3.875 12 3.875C14.25 3.875 16.25 4.75 17.875 6.25C19.5 7.875 20.25 9.875 20.25 12.125C20.25 16.5 16.625 20.25 12 20.25ZM16.5 14C16.25 13.875 15 13.25 14.75 13.25C14.5 13.125 14.375 13.125 14.25 13.375C14.125 13.625 13.625 14.125 13.5 14.375C13.375 14.5 13.25 14.5 13 14.5C12.75 14.375 12 14.125 11 13.25C10.25 12.625 9.75001 11.75 9.62501 11.5C9.50001 11.25 9.62502 11.125 9.75002 11C9.87502 10.875 10 10.75 10.125 10.625C10.25 10.5 10.25 10.375 10.375 10.25C10.5 10.125 10.375 10 10.375 9.875C10.375 9.75 9.87501 8.5 9.62501 8C9.50001 7.625 9.25002 7.625 9.12502 7.625C9.00002 7.625 8.87498 7.625 8.62498 7.625C8.49998 7.625 8.24998 7.625 7.99998 7.875C7.74998 8.125 7.12501 8.75 7.12501 10C7.12501 11.25 7.99999 12.375 8.12499 12.625C8.24999 12.75 9.87498 15.375 12.375 16.375C14.5 17.25 14.875 17 15.375 17C15.875 17 16.875 16.375 17 15.875C17.25 15.25 17.25 14.75 17.125 14.75C17 14.125 16.75 14.125 16.5 14Z" fill="url(#paint0_linear_7993_530)"/>
<defs>
<linearGradient id="paint0_linear_7993_530" x1="12" y1="2" x2="12" y2="22" gradientUnits="userSpaceOnUse">
<stop stop-color="#57D163"/>
<stop offset="1" stop-color="#23B33A"/>
</linearGradient>
</defs>
</svg>
</a>
                    <a href="<?php the_field('link_instagram','option') ?>" target="_blank" class="contacts__info-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.87727 2.06C8.94364 2.01091 9.28364 2 12 2C14.7164 2 15.0564 2.01182 16.1218 2.06C17.1873 2.10818 17.9145 2.27818 18.5509 2.52455C19.2173 2.77636 19.8218 3.17 20.3218 3.67909C20.8309 4.17818 21.2236 4.78182 21.4745 5.44909C21.7218 6.08545 21.8909 6.81273 21.94 7.87636C21.9891 8.94455 22 9.28455 22 12C22 14.7164 21.9882 15.0564 21.94 16.1227C21.8918 17.1864 21.7218 17.9136 21.4745 18.55C21.2236 19.2174 20.8303 19.822 20.3218 20.3218C19.8218 20.8309 19.2173 21.2236 18.5509 21.4745C17.9145 21.7218 17.1873 21.8909 16.1236 21.94C15.0564 21.9891 14.7164 22 12 22C9.28364 22 8.94364 21.9882 7.87727 21.94C6.81364 21.8918 6.08636 21.7218 5.45 21.4745C4.78266 21.2236 4.17802 20.8302 3.67818 20.3218C3.16944 19.8224 2.77574 19.2181 2.52455 18.5509C2.27818 17.9145 2.10909 17.1873 2.06 16.1236C2.01091 15.0555 2 14.7155 2 12C2 9.28364 2.01182 8.94364 2.06 7.87818C2.10818 6.81273 2.27818 6.08545 2.52455 5.44909C2.77611 4.78189 3.17011 4.17756 3.67909 3.67818C4.17822 3.16955 4.78225 2.77586 5.44909 2.52455C6.08545 2.27818 6.81364 2.10909 7.87727 2.06ZM16.0409 3.86C14.9864 3.81182 14.67 3.80182 12 3.80182C9.33 3.80182 9.01364 3.81182 7.95909 3.86C6.98364 3.90455 6.45455 4.06727 6.10182 4.20455C5.63545 4.38636 5.30182 4.60182 4.95182 4.95182C4.62004 5.27459 4.36471 5.66753 4.20455 6.10182C4.06727 6.45455 3.90455 6.98364 3.86 7.95909C3.81182 9.01364 3.80182 9.33 3.80182 12C3.80182 14.67 3.81182 14.9864 3.86 16.0409C3.90455 17.0164 4.06727 17.5455 4.20455 17.8982C4.36455 18.3318 4.62 18.7255 4.95182 19.0482C5.27455 19.38 5.66818 19.6355 6.10182 19.7955C6.45455 19.9327 6.98364 20.0955 7.95909 20.14C9.01364 20.1882 9.32909 20.1982 12 20.1982C14.6709 20.1982 14.9864 20.1882 16.0409 20.14C17.0164 20.0955 17.5455 19.9327 17.8982 19.7955C18.3645 19.6136 18.6982 19.3982 19.0482 19.0482C19.38 18.7255 19.6355 18.3318 19.7955 17.8982C19.9327 17.5455 20.0955 17.0164 20.14 16.0409C20.1882 14.9864 20.1982 14.67 20.1982 12C20.1982 9.33 20.1882 9.01364 20.14 7.95909C20.0955 6.98364 19.9327 6.45455 19.7955 6.10182C19.6136 5.63545 19.3982 5.30182 19.0482 4.95182C18.7254 4.62006 18.3325 4.36474 17.8982 4.20455C17.5455 4.06727 17.0164 3.90455 16.0409 3.86ZM10.7227 15.0827C11.4361 15.3797 12.2303 15.4197 12.9699 15.1961C13.7095 14.9725 14.3485 14.499 14.7778 13.8566C15.2071 13.2142 15.4001 12.4426 15.3237 11.6737C15.2473 10.9049 14.9064 10.1863 14.3591 9.64091C14.0102 9.29225 13.5884 9.02528 13.1239 8.85922C12.6595 8.69317 12.164 8.63215 11.6732 8.68056C11.1823 8.72897 10.7083 8.88562 10.2853 9.13921C9.86223 9.3928 9.50068 9.73704 9.22664 10.1471C8.9526 10.5572 8.7729 11.023 8.70047 11.5109C8.62804 11.9988 8.66468 12.4966 8.80776 12.9687C8.95084 13.4407 9.1968 13.8751 9.52793 14.2407C9.85906 14.6062 10.2671 14.8938 10.7227 15.0827ZM8.36545 8.36545C8.84275 7.88816 9.40938 7.50955 10.033 7.25124C10.6566 6.99293 11.325 6.85998 12 6.85998C12.675 6.85998 13.3434 6.99293 13.967 7.25124C14.5906 7.50955 15.1573 7.88816 15.6345 8.36545C16.1118 8.84275 16.4905 9.40938 16.7488 10.033C17.0071 10.6566 17.14 11.325 17.14 12C17.14 12.675 17.0071 13.3434 16.7488 13.967C16.4905 14.5906 16.1118 15.1573 15.6345 15.6345C14.6706 16.5985 13.3632 17.14 12 17.14C10.6368 17.14 9.3294 16.5985 8.36545 15.6345C7.40151 14.6706 6.85998 13.3632 6.85998 12C6.85998 10.6368 7.40151 9.3294 8.36545 8.36545ZM18.28 7.62545C18.3983 7.51388 18.493 7.37971 18.5585 7.23089C18.624 7.08206 18.6589 6.92161 18.6613 6.75903C18.6637 6.59645 18.6334 6.43504 18.5723 6.28437C18.5111 6.1337 18.4204 5.99683 18.3054 5.88185C18.1904 5.76688 18.0536 5.67614 17.9029 5.61502C17.7522 5.55389 17.5908 5.52361 17.4282 5.52598C17.2657 5.52835 17.1052 5.56332 16.9564 5.62882C16.8076 5.69431 16.6734 5.789 16.5618 5.90727C16.3448 6.1373 16.226 6.44284 16.2306 6.75903C16.2352 7.07522 16.3629 7.37716 16.5865 7.60077C16.8101 7.82437 17.1121 7.95203 17.4282 7.95664C17.7444 7.96125 18.05 7.84245 18.28 7.62545Z" fill="url(#paint0_linear_7993_538)"/>
<defs>
<linearGradient id="paint0_linear_7993_538" x1="12" y1="2" x2="12" y2="22" gradientUnits="userSpaceOnUse">
<stop stop-color="#046BE3"/>
<stop offset="0.130208" stop-color="#D726BB"/>
<stop offset="0.463542" stop-color="#FF0474"/>
<stop offset="0.739583" stop-color="#FE7C01"/>
<stop offset="1" stop-color="#FFD169"/>
</linearGradient>
</defs>
</svg>
</a>
                </div>
                <p class="contacts__info-wanted">Запрещенная на территории Российской Федерации организация</p>
            </div>
            <div class="contacts__map">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<section class="services-houses _section-2 _section-mt">
    <div class="container">
        <div class="services-houses__text">
            <h2 class="services-houses__title _title-2"><?php the_field('contacts_swiper-title') ?></h2>
            <div class="services-houses__swiper-button swiper-button">
                <div class="services-houses__swiper-button-next swiper-button-next _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                <div class="services-houses__swiper-button-prev swiper-button-prev _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
            </div>
        </div>
        <div class="services-houses__swiper md-swiper swiper">
            <div class="services-houses__swiper-wrapper md-swiper__wrapper swiper-wrapper">
                <?php
                    $gallery = get_field('contacts_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <a href="<?php echo esc_url( $image['url'] ); ?>" data-fancybox class="route__swiper-slide md-swiper__slide swiper-slide">
                                <img src="<?php echo esc_url( $image['url'] ); ?>"
                                    alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                    class="_img">
                            </a>
                        <?php endforeach; 
                    endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="form-bottom _section-1 _section-mt">
    <div class="container">
        <div class="form-bottom__inner">
            <h2 class="form-bottom__title _title-3">Забронировать домик</h2>
            <form action="#" class="form-bottom__form">
                <label class="form-bottom__label">
                    <input type="text" class="_input _input-large" placeholder="Как вас зовут?">
                </label>
                <label class="form-bottom__label">
                    <input type="tel" class="_input _input-large" placeholder="+7 (999) 999 99 99">
                </label>
                <button type="submit" class="form-bottom__button _btn _btn-normal _btn-primary">Забронировать</button>
                <span class="form-bottom__privaty">Оставляя заявку Вы принимаете условия <br> <a href="#!">соглашения</a> об обработке персональных данных</span>
            </form>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/consultation') ?>
<section class="reviews _section-1 _section-mt">
    <div class="container">
        <div class="reviews__inner">
            <div class="reviews__text">
            <h2 class="reviews__title _title-2">Отзывы наших гостей</h2>
            <div class="reviews__swiper-button swiper-button">
                <div class="reviews__swiper-button-next swiper-button-next _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                <div class="reviews__swiper-button-prev swiper-button-prev _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
            </div>
        </div>
        <div class="reviews__swiper md-swiper swiper">
            <div class="reviews__swiper-wrapper md-swiper__wrapper swiper-wrapper">
                <div class="reviews__swiper-slide md-swiper__slide swiper-slide">
                    <div class="reviews__slide-header">
                        <div class="reviews__slide-pict">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/review-1.webp" alt="" class="_image">
                        </div>
                        <p class="reviews__slide-date">18.10.2023</p>
                        <h4 class="reviews__slide-title">Анна Семенова</h4>
                    </div>
                    <div class="reviews__slide-content">
                        <p>Я провела незабываемый отдых в глэмпинге Bri Village! Домик был очень уютным и комфортабельным, современным и со всем необходимым для приятного проживания. Персонал был очень дружелюбным и готовым помочь нам в любых вопросах и пожеланиях. Мы также наслаждались разнообразными развлечениями, такими как рыбалка, прогулки на велосипедах и барбекю. Я очень рекомендую глэмпинг Bri Village для тех, кто хочет насладиться природой и комфортом. Это был незабываемый отдых, и я обязательно вернусь сюда еще раз!</p>
                    </div>
                </div>
                <div class="reviews__swiper-slide md-swiper__slide swiper-slide">
                    <div class="reviews__slide-header">
                        <div class="reviews__slide-pict">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/review-2.webp" alt="" class="_image">
                        </div>
                        <p class="reviews__slide-date">3.10.2023</p>
                        <h4 class="reviews__slide-title">Сергей Рахманинов</h4>
                    </div>
                    <div class="reviews__slide-content">
                        <p>Я провела незабываемый отдых в глэмпинге Bri Village! Домик был очень уютным и комфортабельным, современным и со всем необходимым для приятного проживания. Персонал был очень дружелюбным и готовым помочь нам в любых вопросах и пожеланиях. Мы также наслаждались разнообразными развлечениями, такими как рыбалка, прогулки на велосипедах и барбекю. Я очень рекомендую глэмпинг Bri Village для тех, кто хочет насладиться природой и комфортом. Это был незабываемый отдых, и я обязательно вернусь сюда еще раз!</p>
                    </div>
                </div>
                <div class="reviews__swiper-slide md-swiper__slide swiper-slide">
                    <div class="reviews__slide-header">
                        <div class="reviews__slide-pict">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/review-1.webp" alt="" class="_image">
                        </div>
                        <p class="reviews__slide-date">18.10.2023</p>
                        <h4 class="reviews__slide-title">Анна Семенова</h4>
                    </div>
                    <div class="reviews__slide-content">
                        <p>Я провела незабываемый отдых в глэмпинге Bri Village! Домик был очень уютным и комфортабельным, современным и со всем необходимым для приятного проживания. Персонал был очень дружелюбным и готовым помочь нам в любых вопросах и пожеланиях. Мы также наслаждались разнообразными развлечениями, такими как рыбалка, прогулки на велосипедах и барбекю. Я очень рекомендую глэмпинг Bri Village для тех, кто хочет насладиться природой и комфортом. Это был незабываемый отдых, и я обязательно вернусь сюда еще раз!</p>
                    </div>
                </div>
                <div class="reviews__swiper-slide md-swiper__slide swiper-slide">
                    <div class="reviews__slide-header">
                        <div class="reviews__slide-pict">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/review-2.webp" alt="" class="_image">
                        </div>
                        <p class="reviews__slide-date">3.10.2023</p>
                        <h4 class="reviews__slide-title">Сергей Рахманинов</h4>
                    </div>
                    <div class="reviews__slide-content">
                        <p>Я провела незабываемый отдых в глэмпинге Bri Village! Домик был очень уютным и комфортабельным, современным и со всем необходимым для приятного проживания. Персонал был очень дружелюбным и готовым помочь нам в любых вопросах и пожеланиях. Мы также наслаждались разнообразными развлечениями, такими как рыбалка, прогулки на велосипедах и барбекю. Я очень рекомендую глэмпинг Bri Village для тех, кто хочет насладиться природой и комфортом. Это был незабываемый отдых, и я обязательно вернусь сюда еще раз!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="about-alternative _section-1 _section-mt">
    <div class="container">
        <div class="about-alternative__inner">
            <div class="about__text">
                <h2 class="about-alternative__title _title-2">О нашем глэмпинге<br> BriVillage</h2>
                <div class="about__description">
                    <p>Bri Village - это уютный глэмпинг, расположенный в экологически чистом районе недалеко от Казани. Мы предлагаем незабываемый отдых в комфортабельных домиках среди живописных лесов и озер. Наш глэмпинг идеально подходит для тех, кто хочет насладиться природой, не отказываясь от удобств современной жизни.</p>
                    <p>Мы гарантируем экологически чистый район, где вы сможете <br> насладиться свежим воздухом и красотой природы. Наши комфортабельные домики оборудованы всем необходимым для приятного проживания.</p>
                </div>
            </div>
            <div class="about-alternative__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about-alternative-img.webp" alt="" class="_image">
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>