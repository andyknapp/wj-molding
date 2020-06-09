<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WJ_Molding
 */

get_header();
?>

<section class="hero hero-small">
    <div class="hero-content">

        <?php
            if( get_field( 'custom_title' ) ) {
                $title = get_field('custom_title');
            } else {
                $title = get_the_title();
            }
        ?>

        <h1 class="heading-2"><?php echo $title; ?></h1>
    </div>
</section>

<section class="text-block plain wide sub-page">
    <div class="text-block-content">

        <?php if( have_rows( 'intro' ) ) : ?>
            <?php while( have_rows( 'intro' ) ) : the_row(); ?>

            <?php
                $copy = get_sub_field('copy');
                $img_id = get_sub_field('image');
                $attachment = get_post( $img_id );
                $caption = $attachment->post_excerpt;
            ?>

                <header class="text-block-header">
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

        <div class="text-block-body">
            <aside class="sub-section">
                <h2 class="heading-3">Our Core Competencies</h2>
                <ul>
                    <li>Straight Injection Molding</li>
                    <li>Insert Molding</li>
                    <li>Pre-Mold & Over Molding</li>
                    <li>Wire Harness Molding</li>
                    <li>Multi-Component Assembly</li>
                    <li>Sonic & Vibration Welding</li>
                    <li>Automation Development & Integration</li>
                </ul>
            </aside>

            <h3 class="heading-1">Tooling</h3>
            <p class="copy-1">Our in-house tooling capabilities and relationships with local suppliers means we’re able to meet the needs of any injection molding project. From quote to production, our customer-centric approach ensures on-time delivery of your tooling requirements. Our dedicated engineers provide full project management to ensure the optimal launch of your tooling.</p>
            <p class="copy-1">In addition to new builds, our system successfully launches transfer tools with minimal contingencies. Please contact us so we can provide a seamless transition.</p>

            <h3 class="heading-1">Equipment</h3>
            <p class="copy-1">WJ Molding currently offers tonnage ranging from 80 to 250 horizontal and 80-ton vertical rotary. All machines have dedicated equipment, including grinders, dryers, and sprue pickers. </p>

        </div><!-- /text-block-body -->
    </div><!-- /text-block-content -->
</section>

<?php include('template-parts/fixed-bg-block.php'); ?>

<?php
get_footer();
