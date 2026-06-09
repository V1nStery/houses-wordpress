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

                <?php
                        if( have_rows('review_swiper', 'option') ): ?>
                        <?php while( have_rows('review_swiper', 'option') ): the_row(); 
                    ?>
                        <div class="reviews__swiper-slide md-swiper__slide swiper-slide">
                            <div class="reviews__slide-header">
                                <div class="reviews__slide-pict">
                                    <img src="<?php echo get_sub_field('review_avatar', 'option'); ?>" alt="" class="_image">
                                </div>
                                <p class="reviews__slide-date"><?php echo get_sub_field('review_date', 'option'); ?></p>
                                <h4 class="reviews__slide-title"><?php echo get_sub_field('review_name', 'option'); ?></h4>
                            </div>
                            <div class="reviews__slide-content">
                                <?php echo get_sub_field('review_text', 'option'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</section>