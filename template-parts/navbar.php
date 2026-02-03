<?php
/**
 * Sticky Navbar - Minimal, accent links. Mobile: hamburger opens sidebar.
 *
 * @package My_Portfolio
 */
?>

<nav id="sticky-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-out -translate-y-full opacity-0">
    <div class="bg-black/90 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <button type="button" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="flex items-center gap-2 text-white font-semibold hover:text-accent transition-colors" aria-label="Back to top">
                    Aryan Lohia
                </button>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#projects" class="nav-link text-gray-400 hover:text-accent transition-colors text-sm font-medium">Projects</a>
                    <a href="#teaching" class="nav-link text-gray-400 hover:text-accent transition-colors text-sm font-medium">Teaching</a>
                    <a href="#gallery" class="nav-link text-gray-400 hover:text-accent transition-colors text-sm font-medium">Moments</a>
                    <a href="#about" class="nav-link text-gray-400 hover:text-accent transition-colors text-sm font-medium">About</a>
                    <a href="#contact" class="nav-link text-gray-400 hover:text-accent transition-colors text-sm font-medium">Contact</a>
                </div>
                <?php
                $whatsapp = function_exists('portfolio_get_field') ? portfolio_get_field('cta_whatsapp_number', '917864955155') : '917864955155';
                $whatsapp_link = 'https://api.whatsapp.com/send?phone=' . $whatsapp . '&text=Hi%20Aryan!%20I%27d%20like%20to%20discuss%20a%20project.';
                ?>
                <a href="#contact" class="hidden md:inline-flex nav-link items-center gap-2 px-4 py-2 bg-accent text-black font-semibold rounded-lg text-sm hover:scale-[1.02] hover:shadow-accent/20 transition-all duration-300 ease-out">
                    Get in Touch
                </a>
                <button type="button" id="nav-mobile-toggle" class="md:hidden p-2 text-gray-400 hover:text-accent transition-colors rounded-lg focus:outline-none focus:ring-2 focus:ring-accent/50" aria-label="Open menu" aria-expanded="false" aria-controls="nav-mobile-sidebar">
                    <svg class="w-6 h-6 nav-mobile-open-icon" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg class="w-6 h-6 nav-mobile-close-icon hidden" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile sidebar overlay (visible when open) -->
<div id="nav-mobile-overlay" class="nav-mobile-overlay fixed inset-0 bg-black/60 backdrop-blur-sm md:hidden opacity-0 pointer-events-none transition-opacity duration-300" aria-hidden="true"></div>

<!-- Mobile sidebar panel: top padding clears appbar (h-16 = 4rem) so first link is visible -->
<div id="nav-mobile-sidebar" class="nav-mobile-sidebar fixed top-0 right-0 h-full w-64 max-w-[85vw] bg-black/95 backdrop-blur-md border-l border-gray-800 shadow-xl md:hidden transition-transform duration-300 ease-out" aria-label="Mobile menu" aria-hidden="true">
    <div class="flex flex-col h-full px-6 pb-8 nav-mobile-sidebar-inner">
        <!-- <button type="button" id="nav-mobile-close" class="absolute top-5 right-6 p-2 text-gray-400 hover:text-accent transition-colors rounded-lg focus:outline-none focus:ring-2 focus:ring-accent/50" aria-label="Close menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button> -->
        <nav class="flex flex-col gap-2" aria-label="Primary">
            <a href="#projects" class="nav-mobile-link nav-link py-3 px-4 text-gray-300 hover:text-accent hover:bg-white/5 rounded-lg transition-colors text-base font-medium">Projects</a>
            <a href="#teaching" class="nav-mobile-link nav-link py-3 px-4 text-gray-300 hover:text-accent hover:bg-white/5 rounded-lg transition-colors text-base font-medium">Teaching</a>
            <a href="#gallery" class="nav-mobile-link nav-link py-3 px-4 text-gray-300 hover:text-accent hover:bg-white/5 rounded-lg transition-colors text-base font-medium">Moments</a>
            <a href="#about" class="nav-mobile-link nav-link py-3 px-4 text-gray-300 hover:text-accent hover:bg-white/5 rounded-lg transition-colors text-base font-medium">About</a>
            <a href="#contact" class="nav-mobile-link nav-link py-3 px-4 text-gray-300 hover:text-accent hover:bg-white/5 rounded-lg transition-colors text-base font-medium">Contact</a>
        </nav>
        <a href="#contact" class="mt-6 inline-flex items-center justify-center gap-2 px-4 py-3 bg-accent text-black font-semibold rounded-lg text-sm hover:scale-[1.02] hover:shadow-accent/20 transition-all duration-300 ease-out w-full">
            Get in Touch
        </a>
    </div>
</div>
