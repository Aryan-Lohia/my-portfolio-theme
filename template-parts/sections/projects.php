<?php
/**
 * Featured Projects Section – All projects shown together (grid)
 *
 * @package My_Portfolio
 */

$projects = array(
    array(
        'title' => 'Roar by Chatterbox',
        'badge' => 'Flagship',
        'type' => 'Client • Public SaaS',
        'role' => 'Solo Developer',
        'link' => 'https://roar.chatterboxlive.in',
        'description' => 'Speech and posture analysis SaaS with AI feedback reports.',
        'tech' => array('React', 'Node.js', 'PostgreSQL', 'AWS', 'Deepgram', 'Gemini'),
        'image' => get_template_directory_uri() . '/assets/images/cb.jpeg',
    ),
    array(
        'title' => 'DigiSwasth – Medical Analysis',
        'badge' => null,
        'type' => 'Indian Army',
        'role' => 'Private / Secure',
        'link' => 'https://drive.google.com/file/d/1vuKi5SomcR8Y3VvYUJmdiLLpG98vY00X/view?usp=sharing',
        'description' => 'Medical data analysis, local AI (Ollama), offline-first at Oodlabari.',
        'tech' => array('React', 'Node.js', 'PostgreSQL', 'Ollama'),
        'image' => get_template_directory_uri() . '/assets/images/army.jpg',
    ),
    array(
        'title' => 'PipePassKar',
        'badge' => null,
        'type' => 'Rentals & Operations',
        'role' => 'Solo',
        'link' => 'https://pipepasskar.com',
        'description' => 'Full operations platform: rentals, inventory, GPS, payouts, live chat.',
        'tech' => array('Flutter', 'Node.js', 'PostgreSQL', 'AWS'),
        'image' => get_template_directory_uri() . '/assets/images/ppk.jpeg',
    ),
    array(
        'title' => 'Trading Algorithms (MT5)',
        'badge' => null,
        'type' => 'Serverlane Technologies',
        'role' => null,
        'link' => null,
        'description' => '5+ automated forex trading algorithms in C++ for MetaTrader 5.',
        'tech' => array('C++', 'MetaTrader 5'),
        'image' => get_template_directory_uri() . '/assets/images/mt5.png',
    ),
    array(
        'title' => 'CRM for Forex Brokers',
        'badge' => null,
        'type' => 'End-to-end CRM',
        'role' => null,
        'link' => null,
        'description' => 'End-to-end CRM: customers, payouts, integrations, broker operations.',
        'tech' => array('PHP', 'MySQL', 'AWS'),
        'image' => get_template_directory_uri() . '/assets/images/crm.png',
    ),
    array(
        'title' => 'Leave & Attendance Management System',
        'badge' => null,
        'type' => 'Freelance Project',
        'role' => null,
        'link' => null,
        'description' => 'Leave & Attendance Management System for Indian Army.',
        'tech' => array('React', 'Node.js', 'PostgreSQL', 'AWS'),
        'image' => get_template_directory_uri() . '/assets/images/army2.jpeg',
    ),
);
?>

<section id="projects" class="section-reveal section-projects relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header section-projects-header flex flex-col md:flex-row md:justify-between md:items-end gap-4 mb-8">
            <h2 class="section-title">Featured <span class="gold">projects</span></h2>
            <a href="https://github.com/Aryan-Lohia" target="_blank" rel="noopener noreferrer" class="view-more-link hidden md:inline-flex text-accent font-semibold hover:underline items-center gap-1 transition-colors shrink-0">
                View more <span aria-hidden="true">→</span>
            </a>
        </div>
        <div class="projects-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php foreach ($projects as $i => $p) : ?>
                <article class="project-card project-card-grid overflow-hidden">
                    <?php if ($p['link']) : ?>
                        <a href="<?php echo esc_url($p['link']); ?>" target="_blank" rel="noopener noreferrer" class="block group h-full flex flex-col">
                    <?php else : ?>
                        <div class="block group h-full flex flex-col">
                    <?php endif; ?>
                        <div class="project-card-image aspect-[4/3] overflow-hidden bg-gray-900">
                            <img src="<?php echo esc_url($p['image']); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-[1.03]" width="400" height="300" loading="lazy" />
                        </div>
                        <div class="project-card-body p-4 md:p-5">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <?php if ($p['badge']) : ?>
                                    <span class="text-xs font-semibold text-accent uppercase tracking-wider"><?php echo esc_html($p['badge']); ?></span>
                                <?php endif; ?>
                                <span class="text-xs text-gray-500"><?php echo esc_html($p['type']); ?></span>
                            </div>
                            <h3 class="text-base md:text-lg font-bold text-white mb-2 group-hover:text-accent transition-colors">
                                <?php echo esc_html($p['title']); ?>
                            </h3>
                            <p class="text-gray-300 text-sm leading-relaxed mb-3"><?php echo esc_html($p['description']); ?></p>
                            <?php if (!empty($p['tech'])) : ?>
                                <p class="text-xs text-gray-500 mt-auto"><?php echo esc_html(implode(' • ', $p['tech'])); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php if ($p['link']) : ?>
                        </a>
                    <?php else : ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center mt-8 md:hidden">
            <a href="https://github.com/Aryan-Lohia" target="_blank" rel="noopener noreferrer" class="view-more-link inline-flex text-accent font-semibold hover:underline items-center gap-1 transition-colors">
                View more <span aria-hidden="true">→</span>
            </a>
        </div>
    </div>
</section>
