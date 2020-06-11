<?php if( have_rows( 'fixed_background' ) ) : ?>
    <?php while( have_rows( 'fixed_background' ) ) : the_row(); ?>
        <?php
            $img_id = get_sub_field( 'background_image' );
            $button = get_sub_field( 'button' );
        ?>

        <section class="fixed-bg-block big">

            <?php if ( $button ) : ?>
                <a href="<?php echo home_url(); ?>/contact" class="button button-alt">Request a quote</a>
            <?php endif; ?>

            <div class="container">

                <?php if ( $img_id ) : ?>
                    <?php echo wp_get_attachment_image( $img_id, 'full' ); ?>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
