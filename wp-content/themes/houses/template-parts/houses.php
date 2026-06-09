<section class="houses _section-1 _section-mt">
    <div class="container">
        <div class="houses__text">
            <h2 class="houses__title _title-2">Лучшие домики на природе</h2>
            <div class="houses__swiper-button swiper-button">
                <div class="houses__swiper-button-next swiper-button-next _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12H19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 5L19 12L12 19" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
                <div class="houses__swiper-button-prev swiper-button-prev _btn-stroke _btn-primary-stroke _btn _btn-primary _arrow-normal"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 12H5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 19L5 12L12 5" stroke="#3B9254" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span></div>
            </div>
        </div>
        <?php
$slides = get_field( 'houses_slides'); // или без 'option', если на странице
if ( ! $slides ) return;
$mobile_images = [];
?>

<div class="houses__swiper swiper">
    <div class="houses__swiper-wrapper swiper-wrapper">
        <?php foreach ( $slides as $slide ) :
            $layout = $slide['layout'];
            if ( in_array( $layout, [ 'three_left', 'three_right' ] ) ) {
                $images = [];
                for ( $i = 1; $i <= 3; $i++ ) {
                    $img = $slide[ 'img' . $i ] ?? null;
                    if ( $img ) {
                        $images[] = $img;
                        $mobile_images[] = $img;
                    }
                }
                if ( empty( $images ) ) continue;
                $link_class = ( $layout === 'three_left' ) ? 'houses__left-img' : 'houses__right-img';
            ?>
                <div class="houses__swiper-slide swiper-slide houses__odd">
                    <?php foreach ( $images as $img ) : ?>
                        <a href="<?php echo esc_url( $img['url'] ); ?>" data-fancybox class="<?php echo esc_attr( $link_class ); ?>">
                            <img src="<?php echo esc_url( $img['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="_image">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php } elseif ( $layout === 'center' || $layout === 'single' ) {
                $img = $slide['img_single'] ?? null;
                if ( ! $img ) continue;
                $mobile_images[] = $img;
                if ( $layout === 'center' ) {
            ?>
                <div class="houses__swiper-slide swiper-slide houses__even">
                    <a href="<?php echo esc_url( $img['url'] ); ?>" data-fancybox class="houses__center">
                        <img src="<?php echo esc_url( $img['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="_image">
                    </a>
                </div>
            <?php } else { ?>
                <a href="<?php echo esc_url( $img['url'] ); ?>" data-fancybox class="houses__swiper-slide swiper-slide houses__odd">
                    <img src="<?php echo esc_url( $img['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="_image">
                </a>
            <?php } ?>
        <?php } endforeach; ?>
    </div>
</div>

<div class="houses__md-swiper md-swiper swiper">
    <div class="md-swiper__wrapper swiper-wrapper">
        <?php foreach ( $mobile_images as $img ) : ?>
            <a href="<?php echo esc_url( $img['url'] ); ?>" data-fancybox class="houses__md-swiper-slide md-swiper__slide swiper-slide">
                <img src="<?php echo esc_url( $img['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="_image">
            </a>
        <?php endforeach; ?>
    </div>
</div>
        
    </div>
</section>