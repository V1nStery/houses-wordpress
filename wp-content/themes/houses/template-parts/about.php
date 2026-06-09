<section class="about-alternative _section-1 _section-mt">
    <div class="container">
        <div class="about-alternative__inner">
            <div class="about__text">
                <h2 class="about-alternative__title _title-2"><?php the_field('about_title','option') ?></h2>
                <div class="about__description">
                    <?php the_field('about_description','option') ?>
                </div>
            </div>
            <div class="about-alternative__image">
                <img src="<?php the_field('about_img','option') ?>" alt="" class="_image">
            </div>
        </div>
    </div>
</section>