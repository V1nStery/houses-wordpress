<?php
/*
Template Name: services-page
*/
?>

<?php get_header(); ?>

<main class="main-services">
<nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</nav>

<?php get_template_part( 'template-parts/services', 'tabs' ) ?>

<?php get_template_part( 'template-parts/stock') ?>

<?php get_template_part( 'template-parts/about') ?>

<?php get_template_part( 'template-parts/consultation') ?>

<section class="services-houses _section-2 _section-mt">
    <div class="container">
        <div class="services-houses__text">
            <h2 class="services-houses__title _title-2"><?php the_field('services-houses_title') ?></h2>
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
                    $gallery = get_field('services-houses_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <a href="<?php echo esc_url( $image['url'] ); ?>" data-fancybox class="services-houses__swiper-slide md-swiper__slide swiper-slide">
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
</main>

<?php get_footer(); ?>