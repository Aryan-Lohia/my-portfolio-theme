<?php
/**
 * Default Page Template
 * 
 * @package My_Portfolio
 */

get_header();
?>

<main class="min-h-screen bg-black text-white py-24 px-4">
    <div class="max-w-4xl mx-auto">
        <?php while (have_posts()) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-white">
                    <?php the_title(); ?>
                </h1>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-xl overflow-hidden border border-gray-700 mb-8">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="prose prose-invert prose-lg max-w-none text-gray-300">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>

