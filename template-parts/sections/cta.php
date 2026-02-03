<?php
/**
 * CTA Section
 * Converted from components/sections/cta-section.tsx
 * 
 * @package My_Portfolio
 */

// Get CTA fields from ACF
$headline = portfolio_get_field('cta_headline', 'Ready to build something amazing?');
$description = portfolio_get_field('cta_description', "Whether you need a full-stack application, API development, cloud architecture, or technical consulting, let's turn your vision into reality.");
$whatsapp = portfolio_get_field('cta_whatsapp_number', '917864955155');
$email = portfolio_get_field('cta_email', 'aryanlohia2346@gmail.com');
$phone = portfolio_get_field('cta_phone', '+917864955155');
$linkedin_url = portfolio_get_field('linkedin_url', 'https://www.linkedin.com/in/aryan-lohia');

                    $whatsapp_link = "https://api.whatsapp.com/send?phone={$whatsapp}&text=Hi%20Aryan!%20I%27d%20like%20to%20discuss%20a%20software%20development%20project.";
// Simple mailto link for better compatibility across all email clients
$email_link = "mailto:" . $email . "?subject=Event%20Opportunity%20Inquiry";
?>

<section id="cta" class="relative py-32 px-4 bg-gradient-to-b from-gray-900 to-black overflow-hidden">
    <!-- Enhanced Animated accents -->
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl float-animation float-delay-1"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-yellow-400/5 rounded-full blur-3xl float-animation float-delay-2"></div>
    
    <!-- Decorative Grid -->
    <div class="bg-decorative-grid"></div>
    
    <!-- Spotlight Effects -->
    <div class="spotlight-effect" style="top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
    
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="mb-8">
            <span class="inline-block text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full animate-pulse">
                Let's Work Together
            </span>
        </div>
        
        <h2 class="text-5xl md:text-6xl font-bold mb-6 text-pretty text-white">
            Ready to build something <span class="text-yellow-400">amazing?</span>
        </h2>

        <p class="text-xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
            <?php echo esc_html($description); ?>
        </p>

        <!-- CTA buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="<?php echo esc_url($whatsapp_link); ?>" 
               target="_blank" 
               rel="noopener noreferrer"
               class="group px-8 py-4 bg-yellow-400 text-black hover:bg-yellow-300 font-semibold rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-yellow-400/50 hover:scale-105 flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Message on WhatsApp
            </a>
            <a href="<?php echo esc_url($email_link); ?>" 
               class="px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-black font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                Send Email
            </a>
            <a href="tel:<?php echo esc_attr($phone); ?>" 
               class="px-8 py-4 border border-gray-400 text-white hover:bg-gray-800 font-semibold rounded-lg transition-all duration-300 hover:border-gray-300">
                Call Me
            </a>
        </div>

        <!-- Contact Info -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center text-gray-400 text-sm mb-8">
            <a href="tel:<?php echo esc_attr($phone); ?>" class="hover:text-yellow-400 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <?php echo esc_html($phone); ?>
            </a>
            <span class="hidden sm:block text-gray-600">|</span>
            <a href="<?php echo esc_url($email_link); ?>" class="hover:text-yellow-400 transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <?php echo esc_html($email); ?>
            </a>
        </div>

   

        <!-- Social proof -->
        <div class="pt-10 border-t border-gray-800/50">
            <p class="text-yellow-400 text-sm mb-6">Technologies I work with</p>
            <div class="flex flex-wrap gap-8 justify-center items-center opacity-60">
                <?php 
                $techs = array('React', 'Node.js', 'Python', 'AWS', 'TypeScript', 'Docker');
                foreach ($techs as $tech) : 
                ?>
                    <div class="text-gray-400 font-semibold text-lg hover:text-yellow-400 transition-colors">
                        <?php echo esc_html($tech); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

