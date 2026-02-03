<?php
/**
 * Hero Section
 * Full Stack Developer & Tech Consultant
 *
 * @package My_Portfolio
 */

$hero_image = function_exists('portfolio_get_field') ? portfolio_get_field('hero_image') : null;
$hero_image_url = ($hero_image && isset($hero_image['url'])) ? $hero_image['url'] : get_template_directory_uri() . '/assets/images/5.jpeg';
$linkedin_url = function_exists('portfolio_get_field') ? portfolio_get_field('linkedin_url', 'https://www.linkedin.com/in/aryan-lohia') : 'https://www.linkedin.com/in/aryan-lohia';
$email = 'aryanlohia2346@gmail.com';
$whatsapp = '917864955155';
$whatsapp_link = 'https://api.whatsapp.com/send?phone=' . $whatsapp . '&text=Hi%20Aryan!%20I%27d%20like%20to%20discuss%20a%20project.';
?>

<section class="hero-section relative min-h-screen w-full flex items-center justify-center px-4 pt-16 pb-8 sm:pt-20 sm:pb-12 overflow-x-hidden md:justify-start">
    <div class="hero-golden-glow"></div>
    <div class="bg-decorative-grid"></div>
    <div class="relative z-10 max-w-6xl mx-auto w-full">
        <div class="hero-inner flex flex-col-reverse lg:flex-row items-center md:items-center gap-10 lg:gap-16 lg:justify-between">
            <div class="hero-content flex-1 flex flex-col sm:items-center lg:items-start text-center lg:text-left w-full lg:w-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-2 tracking-tight text-white">
                    Aryan Lohia
                </h1>
                <p class="text-lg md:text-xl text-accent font-semibold mb-4">
                    Full Stack Developer & Tech Consultant
                </p>
                <p class="text-xl md:text-2xl text-gray-200 mb-4 font-medium leading-snug">
                    I build scalable web & mobile products for SaaS.
                </p>
                <p class="text-sm text-gray-400 mb-8">
                    React • Flutter • Node.js • AI Systems • AWS
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-8 justify-center lg:justify-start w-full sm:w-auto">
                    <a href="#projects" class="btn-primary btn-shimmer px-6 py-3 bg-accent text-black font-semibold rounded-lg transition-all duration-300 ease-out hover:scale-[1.02] hover:shadow-accent/20 w-full sm:w-fit text-base inline-flex items-center justify-center gap-2 overflow-hidden relative">
                        <span class="relative z-10">View Work</span>
                        <!-- <span class="relative z-10" aria-hidden="true">→</span> -->
                    </a>
                    <a href="<?php echo esc_url($whatsapp_link); ?>" target="_blank" rel="noopener noreferrer" class="px-6 py-3 glass-effect border-2 border-gray-300 font-semibold rounded-lg text-white hover:border-accent hover:text-accent transition-all duration-300 ease-out hover:scale-[1.02] w-full sm:w-fit text-base inline-flex items-center justify-center gap-2">
                        Get in Touch
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="hero-contact-links flex flex-wrap items-center justify-center lg:justify-start gap-6 text-sm">
                    <a href="https://github.com/Aryan-Lohia" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition-colors" aria-label="GitHub">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                        GitHub
                    </a>
                    <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition-colors" aria-label="LinkedIn">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                    <a href="mailto:<?php echo esc_attr($email); ?>" class="flex items-center gap-2 hover:text-accent transition-colors" aria-label="Email">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <?php echo esc_html($email); ?>
                    </a>
                    <a href="<?php echo esc_url($whatsapp_link); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition-colors" aria-label="WhatsApp">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        +91 78649 55155
                    </a>
                </div>
            </div>
            <div class="hero-image flex-shrink-0 flex justify-center lg:justify-end">
                <div class="hero-image-wrapper relative max-w-xs sm:max-w-sm md:max-w-md aspect-square rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 group transition-all duration-500 ease-out hover:scale-[1.02] hover:border-accent/30 hover:shadow-accent/20 hero-float">
                    <img src="<?php echo esc_url($hero_image_url); ?>" alt="Aryan Lohia" class="w-full h-full object-cover relative z-10" width="400" height="400" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent z-[1]"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 z-10" aria-hidden="true">
        <span class="scroll-indicator-label sr-only">Scroll to explore</span>
        <div class="scroll-indicator-mouse">
            <div class="scroll-indicator-wheel"></div>
        </div>
    </div>
</section>
