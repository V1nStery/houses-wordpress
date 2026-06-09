<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<main class="main">
<section class="top _section-1">
    <div class="container">
        <div class="top__inner">
            <div class="top__swiper swiper">
    <div class="top__swiper-wrapper swiper-wrapper">
        
        <?php
        $gallery = get_field('top_swiper'); 
        if ( $gallery ) : 
            foreach ( $gallery as $image ) : ?>
                <div class="top__swiper-slide swiper-slide">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" 
                        alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                        class="top__image _img">
                </div>
            <?php endforeach; 
        endif; ?>

    </div>
                <div class="top__swiper-pagination swiper-pagination _pagination-btn"></div>
                <div class="top__swiper-button swiper-button">
                    <div class="top__swiper-button-next swiper-button-next _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                    <div class="top__swiper-button-prev swiper-button-prev _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                </div>
            </div>
                <div class="top__text">
                    <h1 class="top__title _title-1"><?php the_field('top_title') ?></h1>
                    <p class="top__subtitle"><?php the_field('top_desc') ?></p>
                    <a href="#form-bottom" data-fancybox class="top__button _btn _btn-primary _btn-large">Забронировать домик <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.6489 3.95483H17.3156V3.02142C17.3156 2.46631 16.8613 2.01221 16.3062 2.01221C15.7511 2.01221 15.2972 2.46631 15.2972 3.02142V3.95483H8.70321V3.02142C8.70321 2.46631 8.24911 2.01221 7.694 2.01221C7.13889 2.01221 6.68479 2.46631 6.68479 3.02142V3.95483H4.35144C3.3961 3.95483 2.61877 4.73198 2.61877 5.68731V18.4854C2.61877 19.4407 3.39593 20.2178 4.35144 20.2178H18.1008C19.91 20.2178 21.3814 18.7464 21.3814 16.9373V5.68731C21.3814 4.73198 20.6043 3.95483 19.6489 3.95483ZM4.35144 5.33612H6.686C6.69929 5.87983 7.14718 6.32064 7.694 6.32064C8.24064 6.32064 8.68836 5.87983 8.70182 5.33612H15.2984C15.3118 5.87983 15.7594 6.32064 16.3062 6.32064C16.853 6.32064 17.3009 5.87983 17.3144 5.33612H19.6489C19.8396 5.33612 20.0001 5.49704 20.0001 5.68731V8.38498H4.00007V5.68731C4.00007 5.49687 4.16099 5.33612 4.35144 5.33612ZM4.00007 18.4854V9.7447H20.0001V15.7986H17.1776L17.1569 18.8366H4.35144C4.16099 18.8366 4.00007 18.6756 4.00007 18.4854ZM18.5387 18.7835L18.5498 17.1799H19.9827C19.8817 17.9669 19.2984 18.6033 18.5387 18.7835Z" fill="white"/>
<path d="M8.02724 13.0049C8.03414 12.3721 8.25981 11.9094 8.62206 11.6009C8.98448 11.2999 9.47691 11.1533 10.0101 11.1533C11.3912 11.1533 11.8493 12.0793 11.8493 12.5343C11.8493 13.6607 11.2201 13.6607 11.2201 13.6839V13.6992C11.2201 13.761 11.9995 13.761 11.9995 14.9569C11.9995 15.6127 11.562 16.6464 10.003 16.6464C7.86269 16.6464 7.85613 14.9489 7.89032 14.548H9.18925C9.18235 14.8336 9.24399 15.0493 9.37383 15.1883C9.50367 15.3656 9.70206 15.4276 9.94137 15.4276C10.3311 15.4276 10.5773 15.2656 10.5773 14.8258C10.5773 14.355 10.256 14.2702 9.94137 14.2702C9.74298 14.2702 9.64732 14.2935 9.54476 14.3091V13.2596C9.64732 13.2674 9.75679 13.2905 9.94137 13.2905C10.2287 13.2905 10.5909 13.2213 10.5909 12.8048C10.5909 12.4652 10.2491 12.334 9.96882 12.334C9.5995 12.334 9.29872 12.5576 9.31236 13.0051L8.02724 13.0049Z" fill="white"/>
<path d="M14.0312 13.4909H12.9166V12.38C13.6071 12.3956 14.291 12.1026 14.3318 11.2151H15.4532V16.5847H14.0312V13.4909Z" fill="white"/>
</svg>
</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-top _section-1">
    <div class="container">
        <div class="form-top__inner _section-1">
            <h3 class="form-top__title">Забронировать домик</h3>
            <form class="form-top__form universal-form">
                <input type="hidden" name="form_subject" value="Заявка с сайта Bri Village">
                <label class="form-top__label _calendar-label">
                    <span class="form-top__label-text">Заезд</span>
                    <span class="form-top__label-wrapper">
                        <input type="text" class="form-top__label-input _input _calendar" placeholder="22.10.2023" name="user_first-date">
                        <span class="form-top__icon _icon-black _icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.6489 3.95483H17.3156V3.02142C17.3156 2.46631 16.8613 2.01221 16.3062 2.01221C15.7511 2.01221 15.2972 2.46631 15.2972 3.02142V3.95483H8.70321V3.02142C8.70321 2.46631 8.24911 2.01221 7.694 2.01221C7.13889 2.01221 6.68479 2.46631 6.68479 3.02142V3.95483H4.35144C3.3961 3.95483 2.61877 4.73198 2.61877 5.68731V18.4854C2.61877 19.4407 3.39593 20.2178 4.35144 20.2178H18.1008C19.91 20.2178 21.3814 18.7464 21.3814 16.9373V5.68731C21.3814 4.73198 20.6043 3.95483 19.6489 3.95483ZM4.35144 5.33612H6.686C6.69929 5.87983 7.14718 6.32064 7.694 6.32064C8.24064 6.32064 8.68836 5.87983 8.70182 5.33612H15.2984C15.3118 5.87983 15.7594 6.32064 16.3062 6.32064C16.853 6.32064 17.3009 5.87983 17.3144 5.33612H19.6489C19.8396 5.33612 20.0001 5.49704 20.0001 5.68731V8.38498H4.00007V5.68731C4.00007 5.49687 4.16099 5.33612 4.35144 5.33612ZM4.00007 18.4854V9.7447H20.0001V15.7986H17.1776L17.1569 18.8366H4.35144C4.16099 18.8366 4.00007 18.6756 4.00007 18.4854ZM18.5387 18.7835L18.5498 17.1799H19.9827C19.8817 17.9669 19.2984 18.6033 18.5387 18.7835Z" fill="white"/>
<path d="M8.02724 13.0049C8.03414 12.3721 8.25981 11.9094 8.62206 11.6009C8.98448 11.2999 9.47691 11.1533 10.0101 11.1533C11.3912 11.1533 11.8493 12.0793 11.8493 12.5343C11.8493 13.6607 11.2201 13.6607 11.2201 13.6839V13.6992C11.2201 13.761 11.9995 13.761 11.9995 14.9569C11.9995 15.6127 11.562 16.6464 10.003 16.6464C7.86269 16.6464 7.85613 14.9489 7.89032 14.548H9.18925C9.18235 14.8336 9.24399 15.0493 9.37383 15.1883C9.50367 15.3656 9.70206 15.4276 9.94137 15.4276C10.3311 15.4276 10.5773 15.2656 10.5773 14.8258C10.5773 14.355 10.256 14.2702 9.94137 14.2702C9.74298 14.2702 9.64732 14.2935 9.54476 14.3091V13.2596C9.64732 13.2674 9.75679 13.2905 9.94137 13.2905C10.2287 13.2905 10.5909 13.2213 10.5909 12.8048C10.5909 12.4652 10.2491 12.334 9.96882 12.334C9.5995 12.334 9.29872 12.5576 9.31236 13.0051L8.02724 13.0049Z" fill="white"/>
<path d="M14.0312 13.4909H12.9166V12.38C13.6071 12.3956 14.291 12.1026 14.3318 11.2151H15.4532V16.5847H14.0312V13.4909Z" fill="white"/>
</svg>
</span>
                    </span>
                </label>
                <label class="form-top__label _calendar-label">
                    <span class="form-top__label-text">выезд</span>
                    <span class="form-top__label-wrapper">
                        <input type="text" class="form-top__label-input _input _calendar" placeholder="22.10.2023" name="user_last-date">
                        <span class="form-top__icon _icon _icon-black"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.6489 3.95483H17.3156V3.02142C17.3156 2.46631 16.8613 2.01221 16.3062 2.01221C15.7511 2.01221 15.2972 2.46631 15.2972 3.02142V3.95483H8.70321V3.02142C8.70321 2.46631 8.24911 2.01221 7.694 2.01221C7.13889 2.01221 6.68479 2.46631 6.68479 3.02142V3.95483H4.35144C3.3961 3.95483 2.61877 4.73198 2.61877 5.68731V18.4854C2.61877 19.4407 3.39593 20.2178 4.35144 20.2178H18.1008C19.91 20.2178 21.3814 18.7464 21.3814 16.9373V5.68731C21.3814 4.73198 20.6043 3.95483 19.6489 3.95483ZM4.35144 5.33612H6.686C6.69929 5.87983 7.14718 6.32064 7.694 6.32064C8.24064 6.32064 8.68836 5.87983 8.70182 5.33612H15.2984C15.3118 5.87983 15.7594 6.32064 16.3062 6.32064C16.853 6.32064 17.3009 5.87983 17.3144 5.33612H19.6489C19.8396 5.33612 20.0001 5.49704 20.0001 5.68731V8.38498H4.00007V5.68731C4.00007 5.49687 4.16099 5.33612 4.35144 5.33612ZM4.00007 18.4854V9.7447H20.0001V15.7986H17.1776L17.1569 18.8366H4.35144C4.16099 18.8366 4.00007 18.6756 4.00007 18.4854ZM18.5387 18.7835L18.5498 17.1799H19.9827C19.8817 17.9669 19.2984 18.6033 18.5387 18.7835Z" fill="white"/>
<path d="M8.02724 13.0049C8.03414 12.3721 8.25981 11.9094 8.62206 11.6009C8.98448 11.2999 9.47691 11.1533 10.0101 11.1533C11.3912 11.1533 11.8493 12.0793 11.8493 12.5343C11.8493 13.6607 11.2201 13.6607 11.2201 13.6839V13.6992C11.2201 13.761 11.9995 13.761 11.9995 14.9569C11.9995 15.6127 11.562 16.6464 10.003 16.6464C7.86269 16.6464 7.85613 14.9489 7.89032 14.548H9.18925C9.18235 14.8336 9.24399 15.0493 9.37383 15.1883C9.50367 15.3656 9.70206 15.4276 9.94137 15.4276C10.3311 15.4276 10.5773 15.2656 10.5773 14.8258C10.5773 14.355 10.256 14.2702 9.94137 14.2702C9.74298 14.2702 9.64732 14.2935 9.54476 14.3091V13.2596C9.64732 13.2674 9.75679 13.2905 9.94137 13.2905C10.2287 13.2905 10.5909 13.2213 10.5909 12.8048C10.5909 12.4652 10.2491 12.334 9.96882 12.334C9.5995 12.334 9.29872 12.5576 9.31236 13.0051L8.02724 13.0049Z" fill="white"/>
<path d="M14.0312 13.4909H12.9166V12.38C13.6071 12.3956 14.291 12.1026 14.3318 11.2151H15.4532V16.5847H14.0312V13.4909Z" fill="white"/>
</svg>
</span>
                    </span>
                </label>
                <label class="form-top__label">
                    <span class="form-top__label-text">количество гостей</span>
                    <span class="form-top__label-wrapper">
                        <input type="text" class="form-top__label-input _input _select" placeholder="2 взрослых, 0 детей" name="user_quantity">
                        <span class="form-top__icon _icon-stroke"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#1A3A27" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#1A3A27" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                        <div class="custom-select custom-select--hidden">
    <div class="custom-select__option" data-value="1">1 взрослый</div>
    <div class="custom-select__option" data-value="2">2 взрослых</div>
    <div class="custom-select__option" data-value="3">3 взрослых</div>
    <div class="custom-select__option" data-value="4">4 взрослых</div>
    <div class="custom-select__option" data-value="5">5 взрослых</div>
</div>
                    </span>
                </label>
                <button type="submit" class="form-top__button _btn _btn-dark _btn-normal">ЗAБРОНИРОВАТЬ</button>
            </form>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/houses') ?>

<section class="rent _section-1 _section-mt">
    <div class="container">
        <h2 class="rent__title _title-2"><?php the_field('rent_title') ?></h2>
        <div class="rent__inner">
            <div class="rent__swiper swiper">
                <div class="rent__swiper-wrapper swiper-wrapper">

                <?php
                    $gallery = get_field('rent_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <div class="rent__swiper-slide swiper-slide">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" 
                                    alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                    class="rent__image _img">
                            </div>
                        <?php endforeach; 
                    endif; ?>
                </div>
                <div class="rent__swiper-pagination swiper-pagination _pagination-btn"></div>
                <div class="rent__swiper-button swiper-button">
                    <div class="rent__swiper-button-next swiper-button-next _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                    <div class="rent__swiper-button-prev swiper-button-prev _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                </div>
            </div>
            <div class="rent__text">
                <div class="rent__wrapper">
                    <div class="rent__prices">
                        <div class="rent__price">
                            <p><?php the_field('price-1','option') ?></p>
                        </div>
                        <div class="rent__price">
                            <p><?php the_field('price-2','option') ?></p>
                        </div>
                    </div>
                    <p class="rent__desc"><?php the_field('rent_desc') ?></p>
                </div>
                <a href="#form-bottom" data-fancybox class="rent__btn _btn _btn-primary _btn-normal">Подробнее</a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/services', 'tabs' ) ?>

<?php get_template_part( 'template-parts/stock') ?>

<section class="infrastructure _section-2 _section-mt">
    <div class="container">
        <div class="infrastructure__text">
            <h2 class="infrastructure__title _title-2"><?php the_field('infrastructure_text') ?></h2>
            <div class="infrastructure__swiper-button swiper-button">
                <div class="infrastructure__swiper-button-next swiper-button-next _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                <div class="infrastructure__swiper-button-prev swiper-button-prev _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
            </div>
        </div>
        <div class="infrastructure__swiper md-swiper swiper">
            <div class="infrastructure__swiper-wrapper md-swiper__wrapper swiper-wrapper">
                <?php
                        if( have_rows('infrastructure_swiper') ): ?>
                        <?php while( have_rows('infrastructure_swiper') ): the_row(); 
                    ?>
                            <a href="<?php echo get_sub_field('infrastructure_img'); ?>" data-fancybox class="infrastructure__swiper-slide md-swiper__slide swiper-slide">
                                <img src="<?php echo get_sub_field('infrastructure_img'); ?>" alt="" class="_img">
                                <p class="infrastructure__slide-text"><?php echo get_sub_field('infrastructure_title'); ?></p>
                            </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="about _section-1 _section-mt">
    <div class="container">
        <div class="about__inner">
            <div class="about__text">
                <h2 class="about__title _title-2"><?php the_field('about_title','option') ?></h2>                
                    <div class="about__description">
                        <?php the_field('about_description','option') ?>
                    </div>
                    <a href="<?php the_field('about_link') ?>" target="_blank" class="about__button _btn _btn-secondary _btn-normal">Читать Подробнее</a>
            </div>
            <div class="about__swiper swiper">
                <div class="about__swiper-wrapper swiper-wrapper">

                <?php
                    $gallery = get_field('about_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <div class="about__swiper-slide swiper-slide">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" 
                                    alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                    class="about__image _img">
                            </div>
                        <?php endforeach; 
                    endif; ?>
                </div>
                <div class="about__swiper-pagination swiper-pagination _pagination-btn"></div>
                <div class="about__swiper-button swiper-button">
                    <div class="about__swiper-button-next swiper-button-next _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                    <div class="about__swiper-button-prev swiper-button-prev _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages _section-1 _section-mt">
    <div class="container">
        <div class="advantages__cards" id="advantages-cards">
            <?php
            if ( have_rows('advantages__card') ) :
                $counter = 0;
                while ( have_rows('advantages__card') ) : the_row();
                    $counter++;
                    // Скрываем все карточки начиная с 7-й
                    $hidden_class = ( $counter > 6 ) ? ' advantages__card--hidden' : '';
            ?>
                <div class="advantages__card<?php echo $hidden_class; ?>"<?php if ( $counter > 6 ) echo ' style="display:none;"'; ?>>
                    <img src="<?php echo esc_url( get_sub_field('advantages__icon') ); ?>" alt="">
                    <h4 class="advantages__card-title"><?php echo esc_html( get_sub_field('advantages__title') ); ?></h4>
                </div>
            <?php
                endwhile;
                // Кнопка нужна только если карточек больше 6
                if ( $counter > 6 ) :
            ?>
            </div>
            <div class="advantages__buttons">
                <button class="advantages__button _btn _btn-secondary _btn-large" id="show-all-advantages">
                    Больше преимуществ
                </button>
            </div>
            <?php endif; ?>
            <?php endif; ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('show-all-advantages');
    if (!btn) return;

    btn.addEventListener('click', function() {
        const hiddenCards = document.querySelectorAll('.advantages__card--hidden');
        hiddenCards.forEach(card => card.style.display = '');
        btn.style.display = 'none';
    });
});
</script>

<?php get_template_part( 'template-parts/consultation') ?>
<?php get_template_part( 'template-parts/form', 'bottom') ?>

<?php get_template_part( 'template-parts/reviews') ?>
</main>
<?php get_footer(); ?>