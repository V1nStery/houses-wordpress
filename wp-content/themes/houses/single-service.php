<?php get_header(); ?>
<main class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
            <?php custom_breadcrumbs(); ?>
        </div>
    </nav>

    <section class="service-top _section-1">
        <div class="container">
            <h2 class="service-top__title _title-2"><?php the_title(); ?></h2>
            <div class="service-top__inner">
                <div class="numbers-top__swiper swiper">
                    <div class="numbers-top__swiper-wrapper swiper-wrapper">
                        <?php 
                        // Галерея изображений из ACF-поля services_images
                        $gallery = get_field('services_images');
                        if ( $gallery ) : 
                            foreach ( $gallery as $image ) : ?>
                                <div class="numbers-top__swiper-slide swiper-slide">
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" 
                                        alt="<?php echo esc_attr( $image['alt'] ); ?>" 
                                        class="service-top__image _img">
                                </div>
                            <?php endforeach; 
                        else : ?>
                            <!-- Если галереи нет – показываем миниатюру записи -->
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="numbers-top__swiper-slide swiper-slide">
                                    <?php the_post_thumbnail( 'full', array( 'class' => 'service-top__image _img' ) ); ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="service-top__swiper-pagination swiper-pagination _pagination-btn"></div>
                    <div class="service-top__swiper-button swiper-button">
                        <div class="service-top__swiper-button-next swiper-button-next _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class="service-top__swiper-button-prev swiper-button-prev _btn-stroke _btn-secondary-stroke _btn _btn-secondary _arrow-normal">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="service-top__desc">
                    <?php the_field('services_description'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; endif; ?>

<?php get_template_part( 'template-parts/stock') ?>

<?php get_template_part( 'template-parts/consultation') ?>

<?php get_template_part( 'template-parts/reviews') ?>

</main>

<?php get_footer(); ?>