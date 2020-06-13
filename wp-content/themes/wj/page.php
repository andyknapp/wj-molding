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

        <?php
            include( 'template-parts/text-block-intro.php' ); 
            include( 'template-parts/text-block-body.php' );
        ?>

    </div><!-- /text-block-content -->
</section>

<?php
    if ( !is_page( 'contact-us' ) && !is_page( 'contact-us/confirmation' ) ) {
        include('template-parts/fixed-bg-block.php');

    } else {
        include('template-parts/fixed-bg-map-block.php');
    }
?>

<?php
get_footer();
