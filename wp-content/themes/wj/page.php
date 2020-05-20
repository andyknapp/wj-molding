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

<section class="text-block gray-cone">
    <div class="text-block-content">
        <h1 class="heading-2">Precision </br>Injection Molding</h1>
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

    </div>
</section>

<?php include('template-parts/cta-block.php'); ?>

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





<?php
get_footer();
