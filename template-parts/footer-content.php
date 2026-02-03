<?php
/**
 * Footer - Complete branding, links, CTA
 *
 * @package My_Portfolio
 */

$linkedin_url = function_exists('portfolio_get_field') ? portfolio_get_field('linkedin_url', 'https://www.linkedin.com/in/aryan-lohia') : 'https://www.linkedin.com/in/aryan-lohia';
$email = 'aryanlohia2346@gmail.com';
$phone = '+917864955155';
$whatsapp = '917864955155';
$whatsapp_link = 'https://api.whatsapp.com/send?phone=' . $whatsapp . '&text=Hi%20Aryan!%20I%27d%20like%20to%20discuss%20a%20project.';
$email_subject = rawurlencode('Project Inquiry');
?>

<footer id="footer" class="footer-section relative border-t border-gray-800">
    <div class="footer-inner max-w-6xl mx-auto px-6 sm:px-8 lg:px-10 py-16 md:py-20 mt-16 mb-16 text-center">
        <div class="footer-cta mb-12 md:mb-16 flex flex-col items-center">
            <span class="inline-block text-accent text-sm font-bold tracking-wider uppercase border border-accent/30 px-4 py-2 rounded-full mb-6">Let's build something</span>
            <h2 class="text-white font-bold text-2xl md:text-4xl lg:text-5xl mb-4">Available for serious work—<span class="text-accent">product builds</span>, <span class="text-accent">consulting</span>, <span class="text-accent">workshops.</span></h2>
            <p class="text-gray-400 text-base md:text-lg max-w-2xl">I work with founders, teams, and organizations who need reliable systems and someone who can own problems end-to-end.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="<?php echo esc_url($whatsapp_link); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary px-8 py-4 bg-accent text-black font-semibold rounded-lg inline-flex items-center justify-center gap-2 hover:scale-[1.02] hover:shadow-accent/20 transition-all duration-300">
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Message on WhatsApp
            </a>
            <a href="mailto:<?php echo esc_attr($email); ?>?subject=<?php echo esc_attr($email_subject); ?>" class="px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-black font-semibold rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                Send Email
            </a>
            <a href="tel:<?php echo esc_attr($phone); ?>" class="px-8 py-4 border border-gray-400 text-white hover:bg-gray-800 font-semibold rounded-lg transition-all duration-300 hover:border-gray-300 inline-flex items-center justify-center">
                Call Me
            </a>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center text-gray-400 text-sm mb-12">
            <a href="tel:<?php echo esc_attr($phone); ?>" class="flex items-center gap-2 hover:text-accent transition-colors"><?php echo esc_html($phone); ?></a>
            <span class="hidden sm:block text-gray-600">|</span>
            <a href="mailto:<?php echo esc_attr($email); ?>?subject=<?php echo esc_attr($email_subject); ?>" class="flex items-center gap-2 hover:text-accent transition-colors"><?php echo esc_html($email); ?></a>
        </div>
        <div class="pt-10 border-t border-gray-800/50 mb-12">
            <p class="text-accent text-sm mb-6">Trusted by leading organizations</p>
            <div class="flex flex-wrap gap-8 justify-center items-center opacity-60">
                <span class="text-gray-400 font-semibold text-lg">TEDx</span>
                <span class="text-gray-400 font-semibold text-lg">SMIT</span>
                <span class="text-gray-400 font-semibold text-lg">NEXIS</span>
            </div>
        </div>
        <div class="footer-bottom flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-gray-500">
            <p>© <?php echo esc_html(date('Y')); ?> Aryan Lohia. All rights reserved.</p>
            <span class="hidden sm:block text-gray-600">|</span>
            <a href="https://github.com/Aryan-Lohia" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition-colors">GitHub</a>
        </div>
    </div>
</footer>
