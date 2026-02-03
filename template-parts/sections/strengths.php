<?php
/**
 * Strengths Section
 * Converted from components/sections/strengths-section.tsx
 * 
 * @package My_Portfolio
 */

// Get strengths from ACF
$strengths = portfolio_get_field('strengths');

// Default strengths if ACF not set up
if (!$strengths) {
    $strengths = array(
        array('strength_number' => '01', 'strength_title' => 'Problem-Solving Excellence', 'strength_description' => 'Breaking down complex challenges into elegant solutions with clean, maintainable code.'),
        array('strength_number' => '02', 'strength_title' => 'Scalable Architecture Design', 'strength_description' => 'Building systems that grow with your business, from MVP to enterprise-scale applications.'),
        array('strength_number' => '03', 'strength_title' => 'Modern Tech Stack Mastery', 'strength_description' => 'Expertise in React, Node.js, Python, cloud platforms, and cutting-edge frameworks.'),
        array('strength_number' => '04', 'strength_title' => 'Performance Optimization', 'strength_description' => 'Delivering lightning-fast applications through code optimization, caching, and efficient algorithms.'),
        array('strength_number' => '05', 'strength_title' => 'Security-First Development', 'strength_description' => 'Implementing best practices, secure authentication, and protecting against vulnerabilities.'),
        array('strength_number' => '06', 'strength_title' => 'Agile & Collaborative Approach', 'strength_description' => 'Working seamlessly with teams, stakeholders, and clients to deliver value iteratively.')
    );
}
?>

<section class="relative py-24 px-4 bg-black overflow-hidden">
    <!-- Enhanced Animated background accents -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400/5 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-white/3 rounded-full blur-3xl float-animation float-delay-1"></div>
    <div class="absolute top-1/2 right-1/2 w-64 h-64 bg-yellow-400/3 rounded-full blur-3xl float-animation float-delay-2"></div>
    
    <!-- Decorative Grid -->
    <div class="bg-decorative-grid"></div>
    
    <!-- Spotlight Effects -->
    <div class="spotlight-effect" style="top: 30%; left: 10%;"></div>
    <div class="spotlight-effect" style="bottom: 20%; right: 15%; animation-delay: 3s;"></div>
    
    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full">Core Strengths</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Why Teams Trust Me
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                The skills that transform ideas into production-ready software solutions
            </p>
        </div>

        <!-- Strengths grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($strengths as $index => $strength) : 
                $number = is_array($strength) ? $strength['strength_number'] : get_sub_field('strength_number');
                $title = is_array($strength) ? $strength['strength_title'] : get_sub_field('strength_title');
                $description = is_array($strength) ? $strength['strength_description'] : get_sub_field('strength_description');
            ?>
                <div class="strength-card group relative p-8 rounded-2xl bg-gradient-to-br from-gray-900/80 to-gray-950/80 transition-all duration-500 hover:shadow-2xl hover:shadow-yellow-400/10 cursor-pointer backdrop-blur-sm">
                    <!-- Corner accent -->
                    <div class="corner-accent absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-yellow-400/20 to-transparent rounded-bl-3xl rounded-tr-2xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    
                    <!-- Number -->
                    <div class="flex items-start justify-between mb-4">
                        <span class="text-6xl font-bold transition-colors duration-300 text-white group-hover:text-yellow-400">
                            <?php echo esc_html($number); ?>
                        </span>
                        <div class="w-2 h-2 rounded-full transition-all duration-300 bg-white/20 group-hover:bg-yellow-400 group-hover:scale-150"></div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        <?php echo esc_html($title); ?>
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-gray-400 leading-relaxed transition-all duration-300 group-hover:text-gray-300">
                        <?php echo esc_html($description); ?>
                    </p>

                    <!-- Bottom line accent -->
                    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-yellow-400 to-white transition-all duration-500 w-0 group-hover:w-full"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

