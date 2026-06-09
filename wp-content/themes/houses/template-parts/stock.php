<section class="stock _section-1 _section-mt">
    <div class="container">
        <div class="stock__items">
            <?php
                        if( have_rows('stock', 'option') ): ?>
                        <?php while( have_rows('stock', 'option') ): the_row(); 
                    ?>
                            <div class="stock__item">
                                <div class="stock__item-icon">
                                    <img src="<?php echo get_sub_field('stock_icon', 'option'); ?>">
                                </div>
                                <h4 class="stock__title"><?php echo get_sub_field('stock_text', 'option'); ?></h4>
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</section>