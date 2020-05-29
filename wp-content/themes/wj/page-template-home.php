<?php
// Template Name: Home Page

get_header();
?>

    <section class="hero">
        <div class="hero-content">
            <h1 class="heading-hero">
                <span class="hero-a">Molding</span>
                <span class="hero-b">Your Vision</span>
            </h1>
        </div>
    </section>

    <section class="intro">
        <header class="container-small">
            <h2 class="heading-1">Innovation in Injection Molding</h2>
            <p class="copy-1">With over 30 years of experience in custom injection molding, WJ Molding, Inc. is your source for high-quality, complex manufactured injection molded components. Our team combines expert advice in engineering and molding with innovative solutions, and the highest level of support to exceed your expectations, every time.</p>

            <a href="<?php echo home_url(); ?>/injection-molding" class="text-link">Learn more about our injection molding process</a>
        </header>

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

    <?php include('template-parts/fixed-bg-button-block.php'); ?>

    <section class="text-block closing gray-cone">
        <div class="text-block-content">
            <h3 class="heading-2">The WJ Molding Difference</h3>
            <p class="copy-2">Our strategy of continuous improvement—in process, workforce, quality, and technology—allows us to pass that improvement onto your products and offer you competitive costs.</p>
            <p class="copy-2">We believe in quality, on-time delivery, and efficiency in that order.</p>
            <a href="/about" class="text-link">Learn More</a>
        </div>
    </section>

<?php

get_footer();
