<?php if( have_rows( 'intro' ) ) : ?>
    <?php while( have_rows( 'intro' ) ) : the_row(); ?>

    <?php
        $copy = get_sub_field('copy');
        $img_id = get_sub_field('image');
        $attachment = get_post( $img_id );
        $caption = $attachment->post_excerpt;
        $layout = '';

        if ( !$img_id ) {
            $layout = 'no-img';
        }
    ?>

        <header class="text-block-header <?php echo $layout; ?>">
            <div class="header-content">
                <p class="copy-2"><?php echo $copy; ?></p>
            </div>

            <?php if( $img_id ) : ?>

                <figure>
                    <?php echo wp_get_attachment_image( $img_id, 'full' ); ?>

                    <?php if ( $caption ) : ?>

                        <figcaption>
                            <?php echo $caption; ?>
                        </figcaption>

                    <?php endif; ?>
                </figure>

            <?php endif; ?>

        </header>

    <?php endwhile; ?>
<?php endif; ?>
