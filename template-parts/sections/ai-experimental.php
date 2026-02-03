<?php
/**
 * AI & Experimental Work – Cards with image, title, description
 *
 * @package My_Portfolio
 */

$base = get_template_directory_uri() . '/assets/images/';
$ai_projects = array(
    array(
        'title' => 'Resume Builder App',
        'description' => 'AI powered resume builder with templates, export, and smart suggestions. Built with modern stack for NEXIS.',
        'url' => 'https://nexis-resume-builder.vercel.app/',
        'image' => $base . 'nexis.png',
    ),
    array(
        'title' => 'ME Circle – Teacher Community App',
        'description' => 'Community platform for educators—profiles, discussions, and resources. Connecting teachers and AI tools.',
        'url' => 'https://me-circle-nexis.lovable.app/',
        'image' => $base . 'ME.jpg',
    ),
);
?>

<section id="ai-experimental" class="section-reveal section-ai section-alt relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">AI & <span class="gold">experimental</span></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <?php foreach ($ai_projects as $p) : ?>
                <a href="<?php echo esc_url($p['url']); ?>" target="_blank" rel="noopener noreferrer" class="ai-project-card group block overflow-hidden rounded-xl border border-gray-800 bg-surface-elevated hover:border-accent/30 transition-all duration-300">
                    <div class="ai-project-image aspect-[16/9] overflow-hidden bg-gray-900">
                        <img src="<?php echo esc_url($p['image']); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.03]" width="600" height="338" loading="lazy" />
                    </div>
                    <div class="ai-project-card-body">
                        <h3 class="text-white font-bold text-lg mb-2 group-hover:text-accent transition-colors"><?php echo esc_html($p['title']); ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-3"><?php echo esc_html($p['description']); ?></p>
                        <span class="text-accent text-sm font-medium inline-flex items-center gap-1">
                            View project
                            <span aria-hidden="true">→</span>
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
