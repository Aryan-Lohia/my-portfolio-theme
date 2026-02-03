<?php
/**
 * Front Page Template
 * Single-page vertical story
 *
 * @package My_Portfolio
 */

get_header();
?>

<main class="min-h-screen text-white">
    <?php
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/about-and-contact');
    get_template_part('template-parts/sections/what-i-do');
    get_template_part('template-parts/sections/tech-stack');
    get_template_part('template-parts/sections/projects');
    get_template_part('template-parts/sections/ai-experimental');
    get_template_part('template-parts/sections/teaching');
    get_template_part('template-parts/sections/gallery');
    get_template_part('template-parts/sections/testimonials');
    get_template_part('template-parts/footer-content');
    ?>
</main>

<?php get_footer(); ?>
