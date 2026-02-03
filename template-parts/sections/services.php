<?php
/**
 * Services Section
 * Converted from components/sections/services-section.tsx
 * 
 * @package My_Portfolio
 */

// Get services from ACF
$services = portfolio_get_field('services');

// Default services if ACF not set up
if (!$services) {
    $services = array(
        array('service_title' => 'Full Stack Development', 'service_description' => 'End-to-end web application development from frontend to backend, delivering scalable and performant solutions', 'service_icon' => '💻'),
        array('service_title' => 'API Design & Integration', 'service_description' => 'RESTful and GraphQL API development with seamless third-party integrations and microservices architecture', 'service_icon' => '🔌'),
        array('service_title' => 'Cloud Architecture & DevOps', 'service_description' => 'AWS, Azure, and GCP deployments with CI/CD pipelines, containerization, and infrastructure as code', 'service_icon' => '☁️'),
        array('service_title' => 'Technical Consulting', 'service_description' => 'Strategic guidance on technology stack selection, architecture decisions, and code optimization strategies', 'service_icon' => '🎯'),
        array('service_title' => 'Code Review & Optimization', 'service_description' => 'Comprehensive code audits, performance tuning, and refactoring to ensure maintainable, efficient codebases', 'service_icon' => '⚡'),
        array('service_title' => 'System Architecture Design', 'service_description' => 'Scalable system design, database optimization, and distributed system architecture for enterprise applications', 'service_icon' => '🏗️')
    );
}
?>

<section class="relative py-24 px-4 bg-black overflow-hidden">
    <!-- Enhanced Animated background accents -->
    <div class="absolute top-10 left-10 w-96 h-96 bg-yellow-400/5 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-white/3 rounded-full blur-3xl float-animation float-delay-1"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-yellow-400/3 rounded-full blur-3xl float-animation float-delay-2"></div>
    
    <!-- Decorative Grid -->
    <div class="bg-decorative-grid"></div>
    
    <!-- Spotlight Effect -->
    <div class="spotlight-effect" style="top: 40%; right: 20%;"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full">What I Offer</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Services
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Comprehensive software development and technical consulting solutions
            </p>
        </div>

        <!-- Services grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($services as $index => $service) : 
                $title = is_array($service) ? $service['service_title'] : get_sub_field('service_title');
                $description = is_array($service) ? $service['service_description'] : get_sub_field('service_description');
                $icon = is_array($service) ? $service['service_icon'] : get_sub_field('service_icon');
                $color_class = $index % 2 === 0 ? 'from-yellow-400/20 to-yellow-400/5' : 'from-white/20 to-white/5';
            ?>
                <div class="service-card group relative p-8 rounded-2xl bg-gradient-to-br <?php echo $color_class; ?> backdrop-blur-sm border border-gray-800 hover:border-yellow-400/50 transition-all duration-500 cursor-pointer hover:scale-105 hover:shadow-2xl hover:shadow-yellow-400/10">
                    <!-- Glowing corner effect -->
                    <div class="absolute -top-px -right-px w-24 h-24 bg-gradient-to-bl from-yellow-400/30 via-yellow-400/10 to-transparent rounded-bl-full rounded-tr-2xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br <?php echo $color_class; ?> border-2 border-gray-700 group-hover:border-yellow-400 flex items-center justify-center text-3xl transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                            <?php echo $icon; ?>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 rounded-full bg-white/20 group-hover:bg-yellow-400 transition-all duration-300"></div>
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-bold mb-3 transition-colors duration-300 text-white group-hover:text-yellow-400">
                        <?php echo esc_html($title); ?>
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        <?php echo esc_html($description); ?>
                    </p>

                    <!-- Hover indicator line -->
                    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-yellow-400 via-white to-yellow-400 transition-all duration-500 rounded-b-2xl w-0 group-hover:w-full"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

