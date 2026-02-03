<?php
/**
 * Main Index Template
 * Fallback for blog posts archive
 * 
 * @package My_Portfolio
 */

get_header();
?>

<main class="min-h-screen bg-black text-white py-24 px-4">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-12 text-white">Blog</h1>
        
        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-gray-900 rounded-xl border border-gray-700 overflow-hidden hover:border-yellow-400/50 transition-all duration-300'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="h-48 overflow-hidden">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-2 text-white">
                                <a href="<?php the_permalink(); ?>" class="hover:text-yellow-400 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="text-gray-400 text-sm mb-4">
                                <?php echo get_the_date(); ?> • <?php the_author(); ?>
                            </div>
                            
                            <div class="text-gray-300 mb-4">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="text-yellow-400 hover:text-yellow-300 font-semibold text-sm inline-flex items-center gap-2">
                                Read More <span>→</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="mt-12">
                <?php the_posts_pagination(array(
                    'class' => 'text-center',
                    'prev_text' => __('← Previous', 'my-portfolio'),
                    'next_text' => __('Next →', 'my-portfolio'),
                )); ?>
            </div>
        <?php else : ?>
            <p class="text-gray-400 text-lg">No posts found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

