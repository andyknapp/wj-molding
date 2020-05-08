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
        <h1 class="heading-hero"><?php the_title(); ?></h1>
    </div>
</section>

<section class="intro">
    <div class="container-small">
        <h2 class="heading-1">Innovation in Injection Molding</h2>
        <p class="copy-1">With over 30 years of experience in custom injection molding, WJ Molding, Inc. is your source for high-quality, complex manufactured injection molded components. Our team combines expert advice in engineering and molding with innovative solutions, and the highest level of support to exceed your expectations, every time.</p>
    </div>

    <aside class="industries">
        <ul class="container-med">
            <li>
                <svg class="silo">
                    <use xlink:href="#icon-silo"></use>
                </svg>
                <span class="heading-4">Agriculture</span>
            </li>
            <li>
                <svg class="car">
                    <use xlink:href="#icon-car"></use>
                </svg>
                <span class="heading-4">Automotive</span>
            </li>
            <li>
                <svg class="television">
                    <use xlink:href="#icon-television"></use>
                </svg>
                <span class="heading-4">Consumer</span>
            </li>
            <li>
                <svg class="medical">
                    <use xlink:href="#icon-medical"></use>
                </svg>
                <span class="heading-4">Medical</span>
            </li>
        </ul>
    </aside>
</section>

<?php include('template-parts/cta-block.php'); ?>

<section class="closing">
    <div class="closing-content">
        <h3 class="heading-2">The WJ Molding Difference</h3>
        <p class="copy-2">Our strategy of continuous improvement—in process, workforce, quality, and technology—allows us to pass that improvement onto your products and offer you competitive costs. We believe in quality, on-time delivery, and efficiency in that order.</p>
        <a href="/about" class="text-link">Learn More</a>
    </div>
</section>

<?php
get_footer();
