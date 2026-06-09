<?php
/**
 * Слайдер «Услуги BriVillage».
 * Выводит все записи типа service в Swiper-карусель.
 */
$services_query = new WP_Query( [
    'post_type'      => 'service',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
] );
if ( ! $services_query->have_posts() ) return;
?>

<section class="services-swiper _section-2 _section-mt">
    <div class="container">
        <div class="services-swiper__text">
            <h2 class="services-swiper__title _title-2">Услуги BriVillage</h2>
            <div class="services-swiper__swiper-button swiper-button">
                <div class="services-swiper__swiper-button-next swiper-button-next _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
                <div class="services-swiper__swiper-button-prev swiper-button-prev _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <div class="services-swiper__swiper md-swiper swiper">
            <div class="services-swiper__swiper-wrapper md-swiper__wrapper swiper-wrapper">
                <?php while ( $services_query->have_posts() ) : $services_query->the_post();
                    $img_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: '';
                    $img_alt = get_the_title();
                    $link    = get_permalink();
                ?>
                    <article class="services-swiper__swiper-slide md-swiper__slide swiper-slide">
                        <?php if ( $img_url ) : ?>
                            <div class="services-swiper__pict">
                                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" class="_image">
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( $link ); ?>" class="services-swiper__slide-text">
                            <?php the_title(); ?>
                        </a>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>