<?php
/*
Template Name: about-us
*/
?>

<?php get_header(); ?>

<main class="main">
<section class="about-us-top _section-1 ">
    <div class="container">
        <div class="about-us-top__inner">
            <img src="<?php the_field('about-us_img-top') ?>" alt="" class="about-us-top__img _img">
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <div class="container">
                    <?php custom_breadcrumbs(); ?>
                </div>
            </nav>
            <h1 class="about-us-top__title _title-2"><?php the_field('about-us_title') ?></h1>
        </div>
    </div>
</section>
<section class="about-us-desc _section-1 _block-mt">
    <div class="container">
        <div class="about-us-desc__inner">
            <div class="about-us-desc__text">
                <?php the_field('about-us_text-1') ?>
            </div>
            <div class="about-us-desc__img _block-mt">
                <div class="about-us-desc__pict">
                    <img src="<?php the_field('about-us_img-1') ?>" alt="" class="_image">
                </div>
                <span class="about-us-desc__description"><?php the_field('about-us_desc-1') ?></span>
            </div>
            <div class="about-us-desc__text _block-mt">
                <?php the_field('about-us_text-2') ?>
            </div>
            <div class="about-us-desc__swiper swiper _block-mt">
                <div class="about-us-desc__swiper-wrapper swiper-wrapper">
                    <?php
                    $gallery = get_field('about-us_swiper'); 
                    if ( $gallery ) : 
                        foreach ( $gallery as $image ) : ?>
                            <div class="about-us-desc__swiper-slide swiper-slide">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" 
                                    alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                    class="about-us-desc__image _img">
                            </div>
                        <?php endforeach; 
                    endif; ?>
                </div>
                <div class="about-us-desc__swiper-pagination swiper-pagination _pagination-btn"></div>
                <div class="about-us-desc__swiper-button swiper-button">
                    <div class="about-us-desc__swiper-button-next swiper-button-next _btn _btn-secondary _btn-stroke _btn-secondary-stroke _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                    <div class="about-us-desc__swiper-button-prev swiper-button-prev _btn _btn-secondary _btn-stroke _btn-secondary-stroke _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                </div>
            </div>
            <span class="about-us-desc__description _block-mt"><?php the_field('about-us_desc-2') ?></span>
            <h2 class="about-us-desc__title title-3 _block-mt"><?php the_field('about-us_title-2') ?></h2>
            <div class="about-us-desc__text">
                <?php the_field('about-us_text-3') ?>
            </div>
            <div class="about-us-desc__video _block-mt">
                <div class="about-us-desc__video-pict video-xl">
                    <img src="<?php the_field('about-us_video-1') ?>" alt="" class="_img">
                    <a href="<?php the_field('about-us_link-1') ?>" data-fancybox data-type="iframe" data-width="800" data-height="450" class="play-btn">
                        <div class="play _btn _btn-secondary">
    <span class="play-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 5.72318V18.2768C6 19.0446 6.82948 19.526 7.49614 19.1451L18.4806 12.8682C19.1524 12.4843 19.1524 11.5157 18.4806 11.1318L7.49614 4.85494C6.82948 4.47399 6 4.95536 6 5.72318Z" stroke="#3B9254" stroke-width="2"/>
</svg>
</span>
</div>
                    </a>
                </div>
                <span class="about-us-desc__description"><?php the_field('about-us_desc-3') ?></span>
            </div>
            <div class="about-us-desc__text _block-mt">
                <?php the_field('about-us_text-4') ?>
            </div>
            <h2 class="about-us-desc__title title-3 _block-mt"><?php the_field('about-us_title-3') ?></h2>
            <div class="about-us-desc__text">
                <?php the_field('about-us_text-5') ?>
            </div>
            <div class="about-us-desc__video _block-mt">
                <div class="about-us-desc__video-pict video-md">
                    <img src="<?php the_field('about-us_video-2') ?>" alt="" class="_img">
                    <a href="<?php the_field('about-us_link-2') ?>" data-fancybox data-type="iframe" data-width="800" data-height="450" class="play-btn">
                        <div class="play _btn _btn-secondary">
    <span class="play-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 5.72318V18.2768C6 19.0446 6.82948 19.526 7.49614 19.1451L18.4806 12.8682C19.1524 12.4843 19.1524 11.5157 18.4806 11.1318L7.49614 4.85494C6.82948 4.47399 6 4.95536 6 5.72318Z" stroke="#3B9254" stroke-width="2"/>
</svg>
</span>
</div>
                    </a>
                </div>
            </div>
            <span class="about-us-desc__description"><?php the_field('about-us_desc-4') ?></span>
            <div class="about-us-desc__text _block-mt">
                <?php the_field('about-us_text-6') ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/form', 'bottom') ?>

<?php get_template_part( 'template-parts/consultation') ?>

<?php get_template_part( 'template-parts/about') ?>
<div class="_section-mt"></div>
</main>

<?php get_footer(); ?>