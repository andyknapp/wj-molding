<div class="text-block-body">

    <?php if ( is_page( 'injection-molding' ) ) : ?>

        <?php if ( have_rows( 'core_competencies' ) ) : ?>

            <aside class="sub-section">
                <h2 class="heading-3">Our Core Competencies</h2>
                <ul>
                    <?php while ( have_rows( 'core_competencies' ) ) : the_row() ; ?>

                        <li><?php echo get_sub_field( 'list_item' ); ?></li>

                    <?php endwhile; ?>
                </ul>
            </aside>

        <?php endif; ?>

    <?php elseif ( is_page( 'engineering' ) ) : ?>

        <?php if ( have_rows( 'engineering_services' ) ) : ?>

            <aside class="sub-section">
                <h2 class="heading-3">Engineering Services</h2>
                <ul>
                    <?php while ( have_rows( 'engineering_services' ) ) : the_row() ; ?>

                        <li><?php echo get_sub_field( 'list_item' ); ?></li>

                    <?php endwhile; ?>
                </ul>
            </aside>

        <?php endif; ?>

    <?php elseif ( is_page( 'quality' ) ) : ?>

        <?php if ( have_rows( 'quality_commitment' ) ) : ?>

            <aside class="sub-section">
                <h2 class="heading-3">Our Commitment to you</h2>
                <ul>
                    <?php while ( have_rows( 'quality_commitment' ) ) : the_row() ; ?>

                        <li><?php echo get_sub_field( 'list_item' ); ?></li>

                    <?php endwhile; ?>
                </ul>
            </aside>

        <?php endif; ?>

    <?php elseif ( is_page( 'contact-us' ) ) : ?>

        <aside class="sub-section contact-info">
            <h2 class="heading-3">Contact Information</h2>
            <ul>
                <?php if ( get_field( 'phone' ) ) : ?>

                    <li>Phone: <?php echo get_field( 'phone' ); ?></a></li>

                <?php endif; ?>

                <?php if ( get_field( 'fax' ) ) : ?>

                    <li>Fax: <?php echo get_field( 'fax' ); ?></li>

                <?php endif; ?>

                <?php if ( get_field( 'email' ) ) : ?>
                    <li>
                        <a href="mailto:<?php echo get_field( 'email' ); ?>" target="_blank"><?php echo get_field( 'email' ); ?></a>
                    </li>
                <?php endif; ?>

            </ul>
        </aside>

        <?php gravity_form( 1, false, false, false, '', false ); ?>

    <?php endif; ?>

    <?php if ( have_rows( 'secondary_content' ) ) : ?>
        <?php while ( have_rows( 'secondary_content' ) ) : the_row(); ?>

            <?php if ( get_sub_field( 'headline' ) ) : ?>
                <h3 class="heading-1"><?php echo get_sub_field( 'headline' ); ?></h3>
            <?php endif; ?>

            <?php if ( get_sub_field( 'copy' ) ) : ?>
                <p class="copy-1"><?php echo get_sub_field( 'copy' ); ?></p>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- /text-block-body -->
