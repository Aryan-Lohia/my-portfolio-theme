<?php
/**
 * Single Post Template
 * 
 * @package My_Portfolio
 */

get_header();
?>

<main class="min-h-screen bg-black text-white py-24 px-4">
    <div class="max-w-4xl mx-auto">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="text-gray-400 text-sm mb-8">
                        <?php echo get_the_date(); ?> • By <?php the_author(); ?>
                    </div>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="rounded-xl overflow-hidden border border-gray-700 mb-8">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                        </div>
                    <?php endif; ?>
                </header>
                
                <div class="prose prose-invert prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
                
                <?php if (has_tag()) : ?>
                    <div class="mt-12 pt-8 border-t border-gray-800">
                        <span class="text-gray-400 text-sm">Tags: </span>
                        <?php the_tags('<span class="text-yellow-400">', ', ', '</span>'); ?>
                    </div>
                <?php endif; ?>
            </article>
            
            <nav class="mt-12 pt-8 border-t border-gray-800 flex justify-between">
                <div>
                    <?php previous_post_link('%link', '← %title'); ?>
                </div>
                <div>
                    <?php next_post_link('%link', '%title →'); ?>
                </div>
            </nav>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>

