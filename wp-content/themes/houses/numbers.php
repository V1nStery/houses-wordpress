<?php
/*
Template Name: numbers
*/
?>
<?php get_header(); ?>

<main class="main">
<nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</nav>
<section class="numbers-top _section-1">
    <div class="container">
        <h2 class="numbers-top__title _title-2"><?php the_field('numbers_title') ?></h2>
        <div class="numbers-top__inner">
            <div class="numbers-top__swiper swiper">
                <div class="numbers-top__swiper-wrapper swiper-wrapper">

                <?php
                    $gallery = get_field('numbers_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <div class="numbers-top__swiper-slide swiper-slide">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" 
                                    alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                    class="numbers-top__image _img">
                            </div>
                        <?php endforeach; 
                    endif; ?>
                </div>
                <div class="numbers-top__swiper-pagination swiper-pagination _pagination-btn"></div>
                <div class="numbers-top__swiper-button swiper-button">
                    <div class="numbers-top__swiper-button-next swiper-button-next _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                    <div class="numbers-top__swiper-button-prev swiper-button-prev _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                </div>
            </div>
            <div class="numbers-top__characteristics">
                <?php
                        if( have_rows('numbers_characteristic') ): ?>
                        <?php while( have_rows('numbers_characteristic') ): the_row(); 
                    ?>
                        <div class="numbers-top__characteristic">
                            <p><?php echo get_sub_field('numbers_characteristic-text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="numbers-top__desc">
                <?php the_field('numbers_desc') ?>
            </div>
        </div>
    </div>
</section>
<section class="facilities _section-1 _section-mt">
    <div class="container">
        <div class="facilities__inner">
            <h2 class="facilities__title _title-3"><?php echo get_sub_field('facilities_title'); ?></h2>
            <div class="facilities__items">
                <ul class="facilities__list">

                <?php
                        if( have_rows('facilities_card-1') ): ?>
                        <?php while( have_rows('facilities_card-1') ): the_row(); 
                    ?>
                    <li class="facilities__item">
                        <span class="facilities__icon">
                            <img src="<?php echo get_sub_field('facilities_icon-1'); ?>" alt="">
                        </span>
                        <p class="facilities__text"><?php echo get_sub_field('facilities_text-1'); ?></p>
                    </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                </ul>
                <ul class="facilities__list">

                <?php
                        if( have_rows('facilities_card-2') ): ?>
                        <?php while( have_rows('facilities_card-2') ): the_row(); 
                    ?>
                    <li class="facilities__item">
                        <span class="facilities__icon">
                            <img src="<?php echo get_sub_field('facilities_icon-2'); ?>" alt="">
                        </span>
                        <p class="facilities__text"><?php echo get_sub_field('facilities_text-2'); ?></p>
                    </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                </ul>
                <ul class="facilities__list">
                    <?php
                        if( have_rows('facilities_card-3') ): ?>
                        <?php while( have_rows('facilities_card-3') ): the_row(); 
                    ?>
                    <li class="facilities__item">
                        <span class="facilities__icon">
                            <img src="<?php echo get_sub_field('facilities_icon-3'); ?>" alt="">
                        </span>
                        <p class="facilities__text"><?php echo get_sub_field('facilities_text-3'); ?></p>
                    </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                </ul>
                <ul class="facilities__list">

                <?php
                        if( have_rows('facilities_card-4') ): ?>
                        <?php while( have_rows('facilities_card-4') ): the_row(); 
                    ?>
                    <li class="facilities__item">
                        <span class="facilities__icon">
                            <img src="<?php echo get_sub_field('facilities_icon-4'); ?>" alt="">
                        </span>
                        <p class="facilities__text"><?php echo get_sub_field('facilities_text-4'); ?></p>
                    </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="price _section-1 _section-mt">
    <div class="container">
        <div class="price__inner">
            <div class="price__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/price-img.webp" alt="" class="_image">
            </div>
            <div class="price__text">
                <ul class="price__list">
                    <li class="price__item">
                        <h4 class="price__title">Цена проживания</h4>
                        <div class="price__wrapper">
                            <span class="price__desc"><?php the_field('price-1','option') ?></span>
                            <span class="price__desc"><?php the_field('price-2','option') ?></span>
                        </div>
                    </li>
                    <li class="price__item">
                        <h4 class="price__title">Способы оплаты</h4>
                        <div class="price__wrapper">
                            <span class="price__desc">Оплата картой</span>
                            <span class="price__desc">Перевод на карту</span>
                            <span class="price__desc">Оплата наличными</span>
                        </div>
                    </li>
                    <li class="price__item">
                        <h4 class="price__title">Время заезда</h4>
                        <div class="price__wrapper">
                            <span class="price__desc"><?php the_field('check-in','option') ?></span>
                        </div>
                    </li>
                    <li class="price__item">
                        <h4 class="price__title">Способы добраться:</h4>
                        <div class="price__wrapper">
                            <div class="price__way">
                                <span class="price__way-icon"><svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.4444 0C20.9778 0 25.3333 1.71875 25.3333 3.90625V6.25C26.1938 6.25 26.8889 6.94824 26.8889 7.8125V10.9375C26.8889 11.8018 26.1938 12.5 25.3333 12.5V20.3125C25.3333 21.1768 24.6382 21.875 23.7778 21.875V23.4375C23.7778 24.3018 23.0826 25 22.2222 25H20.6667C19.8062 25 19.1111 24.3018 19.1111 23.4375V21.875H9.77778V23.4375C9.77778 24.3018 9.08264 25 8.22222 25H6.66667C5.80625 25 5.11111 24.3018 5.11111 23.4375V21.875C4.25215 21.875 3.55556 21.1768 3.55556 20.3125V12.5C2.6966 12.5 2 11.8018 2 10.9375V7.8125C2 6.94824 2.6966 6.25 3.55556 6.25V3.90625C3.55556 1.71875 7.91111 0 14.4444 0ZM6.66667 12.5C6.66667 13.3643 7.36181 14.0625 8.22222 14.0625H13.6667V6.25H8.22222C7.36181 6.25 6.66667 6.94824 6.66667 7.8125V12.5ZM15.2222 14.0625H20.6667C21.5271 14.0625 22.2222 13.3643 22.2222 12.5V7.8125C22.2222 6.94824 21.5271 6.25 20.6667 6.25H15.2222V14.0625ZM7.44444 19.5312C8.30486 19.5312 9 18.833 9 17.9688C9 17.1045 8.30486 16.4062 7.44444 16.4062C6.58403 16.4062 5.88889 17.1045 5.88889 17.9688C5.88889 18.833 6.58403 19.5312 7.44444 19.5312ZM21.4444 19.5312C22.3049 19.5312 23 18.833 23 17.9688C23 17.1045 22.3049 16.4062 21.4444 16.4062C20.584 16.4062 19.8889 17.1045 19.8889 17.9688C19.8889 18.833 20.584 19.5312 21.4444 19.5312ZM18.3333 3.125H10.5556C10.1278 3.125 9.77778 3.47461 9.77778 3.90625C9.77778 4.33789 10.1278 4.6875 10.5556 4.6875H18.3333C18.7611 4.6875 19.1111 4.33789 19.1111 3.90625C19.1111 3.47461 18.7611 3.125 18.3333 3.125Z" fill="#3B9254"/>
</svg>
</span>
                                <span class="price__way-title">Автобус</span>
                            </div>
                            <div class="price__way">
                                <span class="price__way-icon"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.93408 11.6094L4.65234 6.70166C5.31006 4.82129 7.08398 3.5625 9.07617 3.5625H17.9238C19.916 3.5625 21.6885 4.82129 22.3477 6.70166L24.0664 11.6094C25.1992 12.0781 26 13.1963 26 14.5V23.875C26 24.7393 25.3018 25.4375 24.4375 25.4375H22.875C22.0107 25.4375 21.3125 24.7393 21.3125 23.875V21.5312H5.6875V23.875C5.6875 24.7393 4.98779 25.4375 4.125 25.4375H2.5625C1.69971 25.4375 1 24.7393 1 23.875V14.5C1 13.1963 1.79883 12.0781 2.93408 11.6094ZM6.32715 11.375H20.6729L19.3984 7.73242C19.1787 7.10742 18.5879 6.6875 17.9238 6.6875H9.07617C8.41211 6.6875 7.82129 7.10742 7.60156 7.73242L6.32715 11.375ZM5.6875 14.5C4.82471 14.5 4.125 15.1982 4.125 16.0625C4.125 16.9268 4.82471 17.625 5.6875 17.625C6.55176 17.625 7.25 16.9268 7.25 16.0625C7.25 15.1982 6.55176 14.5 5.6875 14.5ZM21.3125 17.625C22.1768 17.625 22.875 16.9268 22.875 16.0625C22.875 15.1982 22.1768 14.5 21.3125 14.5C20.4482 14.5 19.75 15.1982 19.75 16.0625C19.75 16.9268 20.4482 17.625 21.3125 17.625Z" fill="#3B9254"/>
</svg>
</span>
                                <span class="price__way-title">Каршеринг</span>
                            </div>
                            <div class="price__way">
                                <span class="price__way-icon"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_0_1289)">
<path d="M20.2857 2C22.8884 2 25 4.09863 25 6.6875V19.1875C25 21.4873 23.2714 23.4697 21.0174 23.8213L23.2763 26.0674C23.6201 26.4092 23.3746 27 22.8442 27H20.9388C20.5214 27 20.1187 26.834 19.8241 26.541L17.1429 23.875H10.8571L8.17589 26.541C7.87978 26.834 7.48004 27 7.06362 27H5.11357C4.62348 27 4.37795 26.4092 4.72464 26.0674L6.98455 23.8213C4.72759 23.4697 3 21.4873 3 19.1875V6.6875C3 4.09863 5.11063 2 7.71429 2H20.2857ZM6.14286 11.375C6.14286 12.2393 6.84656 12.9375 7.71429 12.9375H20.2857C21.1549 12.9375 21.8571 12.2393 21.8571 11.375V6.6875C21.8571 5.82471 21.1549 5.125 20.2857 5.125H7.71429C6.84656 5.125 6.14286 5.82471 6.14286 6.6875V11.375ZM14 20.75C15.3013 20.75 16.3571 19.7002 16.3571 18.4062C16.3571 17.1123 15.3013 16.0625 14 16.0625C12.6987 16.0625 11.6429 17.1123 11.6429 18.4062C11.6429 19.7002 12.6987 20.75 14 20.75Z" fill="#3B9254"/>
</g>
<defs>
<clipPath id="clip0_0_1289">
<rect width="22" height="25" fill="white" transform="translate(3 2)"/>
</clipPath>
</defs>
</svg>
</span>
                                <span class="price__way-title">Электричка</span>
                            </div>
                            <div class="price__way">
                                <span class="price__way-icon"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.2776 3C18.0458 3 18.6665 3.61574 18.6665 4.375V5.75V5.75645C20.3418 5.84926 21.8045 6.93121 22.3644 8.51289L23.8921 12.8313C24.8991 13.2438 25.6109 14.2277 25.6109 15.375V23.625C25.6109 24.3855 24.9902 25 24.222 25H22.8331C22.0649 25 21.4442 24.3855 21.4442 23.625V21.5625H7.55534V23.625C7.55534 24.3855 6.93468 25 6.16645 25H4.77756C4.01063 25 3.38867 24.3855 3.38867 23.625V15.375C3.38867 14.2277 4.09874 13.2438 5.10786 12.8313L6.6352 8.51289C7.1951 6.93121 8.65777 5.84926 10.3331 5.75645V5.75V4.375C10.3331 3.61574 10.9538 3 11.722 3H17.2776ZM10.5675 8.5C9.97721 8.5 9.45204 8.86953 9.25673 9.41953L8.12392 12.625H20.8757L19.7428 9.41953C19.5475 8.86953 19.0224 8.5 18.4321 8.5H10.5675ZM7.55534 18.125C8.32357 18.125 8.94423 17.5105 8.94423 16.75C8.94423 15.9895 8.32357 15.375 7.55534 15.375C6.78711 15.375 6.16645 15.9895 6.16645 16.75C6.16645 17.5105 6.78711 18.125 7.55534 18.125ZM21.4442 15.375C20.676 15.375 20.0553 15.9895 20.0553 16.75C20.0553 17.5105 20.676 18.125 21.4442 18.125C22.2125 18.125 22.8331 17.5105 22.8331 16.75C22.8331 15.9895 22.2125 15.375 21.4442 15.375Z" fill="#3B9254"/>
</svg>
</span>
                                <span class="price__way-title">Такси</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="price__buttons">
                    <a href="#form-top" data-fancybox class="price__button _btn _btn-primary _btn-normal">Забронировать</a>
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
<?php get_template_part( 'template-parts/consultation') ?>

<?php get_template_part( 'template-parts/services', 'swiper' ) ?>
</main>

<?php get_footer(); ?>