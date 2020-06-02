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
        <h1 class="heading-2">Precision Injection Molding</h1>
    </div>
</section>

<section class="text-block plain wide sub-page">
    <div class="text-block-content">
        <!-- <h1 class="heading-2">Precision </br>Injection Molding</h1> -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wj-molding-widget.jpg" alt="" class="alignright">
        <p class="copy-2">As an industry leader in custom injection molding for over 30 years, we take pride in our reputation for delivering high-quality, tight-tolerance, injection molded products.</p>
        <p class="copy-2">Our veteran engineers and manufactures bring experience with both engineering grade and commodity resins to meet your production needs and desired outcomes.</p>
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
    </div>
</section>

<?php //include('template-parts/cta-block.php'); ?>

<?php //include('template-parts/fixed-bg-button-block.php'); ?>


<?php
get_footer();
