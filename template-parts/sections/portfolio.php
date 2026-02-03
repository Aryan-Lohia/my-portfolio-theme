<?php
/**
 * Portfolio Section
 * Converted from components/sections/portfolio-section.tsx
 * 
 * @package My_Portfolio
 */

// Get portfolio projects from ACF repeater
$projects = portfolio_get_field('portfolio_projects');

// Default projects if ACF not set up yet
if (!$projects) {
    $projects = array(
        array(
            'project_title' => 'E-Commerce Platform',
            'project_role' => 'Full Stack Developer',
            'project_stats' => array(
                array('stat' => 'React, Node.js, MongoDB'),
                array('stat' => 'Payment integration & real-time updates'),
                array('stat' => 'AWS deployment with auto-scaling')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/1.jpeg',
            'project_link' => '#'
        ),
        array(
            'project_title' => 'RESTful API Microservices',
            'project_role' => 'Backend Architect',
            'project_stats' => array(
                array('stat' => 'Node.js, Express, PostgreSQL'),
                array('stat' => 'Docker containerization'),
                array('stat' => 'CI/CD with GitHub Actions')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/2.jpeg',
            'project_link' => '#'
        ),
        array(
            'project_title' => 'Real-Time Dashboard Application',
            'project_role' => 'Full Stack Developer',
            'project_stats' => array(
                array('stat' => 'React, TypeScript, WebSockets'),
                array('stat' => 'Real-time data visualization'),
                array('stat' => 'Cloud infrastructure on AWS')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/3.jpeg',
            'project_link' => '#'
        ),
        array(
            'project_title' => 'Cloud-Native SaaS Platform',
            'project_role' => 'Tech Lead & Consultant',
            'project_stats' => array(
                array('stat' => 'Microservices architecture'),
                array('stat' => 'Kubernetes orchestration'),
                array('stat' => 'Multi-tenant system design')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/4.jpeg',
            'project_link' => '#'
        )
    );
}
?>

<section id="portfolio" class="relative py-24 px-4 bg-gray-950 overflow-hidden">
    <!-- Enhanced Animated accent elements -->
    <div class="absolute top-20 right-10 w-96 h-96 bg-yellow-400 rounded-full blur-3xl opacity-10 float-animation"></div>
    <div class="absolute bottom-20 left-10 w-80 h-80 bg-white rounded-full blur-3xl opacity-5 float-animation float-delay-1"></div>
    <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-yellow-400/5 rounded-full blur-3xl float-animation float-delay-2"></div>
    
    <!-- Decorative Grid -->
    <div class="bg-decorative-grid"></div>
    
    <!-- Spotlight Effects -->
    <div class="spotlight-effect" style="top: 20%; right: 10%;"></div>
    
    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white animate-fade-in">
                Portfolio
                <span class="inline-block w-3 h-3 bg-yellow-400 rounded-full ml-2 animate-pulse"></span>
            </h2>
            <p class="text-gray-300 text-lg">Projects that showcase full-stack expertise and technical innovation</p>
        </div>

        <!-- Grid of projects -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($projects as $project) : 
                $title = is_array($project) ? $project['project_title'] : get_sub_field('project_title');
                $role = is_array($project) ? $project['project_role'] : get_sub_field('project_role');
                $stats = is_array($project) ? $project['project_stats'] : get_sub_field('project_stats');
                $image = is_array($project) ? $project['project_image'] : get_sub_field('project_image');
                $link = is_array($project) ? $project['project_link'] : get_sub_field('project_link');
                
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <div class="group relative overflow-hidden rounded-xl border border-gray-700 bg-gray-900/50 backdrop-blur-sm hover:border-yellow-400/50 transition-all duration-300 cursor-pointer hover:shadow-lg hover:shadow-yellow-400/10">
                    <!-- Image -->
                    <div class="relative h-96 overflow-hidden bg-gray-800">
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="<?php echo esc_attr($title); ?>" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 relative z-10">
                        <h3 class="text-2xl font-bold mb-2 text-white"><?php echo esc_html($title); ?></h3>
                        <p class="text-yellow-400 font-medium mb-4"><?php echo esc_html($role); ?></p>

                        <!-- Tech Stack Badges -->
                        <?php if ($stats) : ?>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($stats as $stat_item) : 
                                $stat = is_array($stat_item) ? $stat_item['stat'] : $stat_item;
                            ?>
                                <span class="tech-badge text-xs"><?php echo esc_html($stat); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Hover effect -->
                        <?php if ($link) : ?>
                            <div class="project-link mt-4">
                                <a href="<?php echo esc_url($link); ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer">
                                    View Details 
                                    <span>→</span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

