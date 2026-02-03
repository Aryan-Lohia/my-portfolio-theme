<?php
/**
 * Timeline Section – Work history
 *
 * @package My_Portfolio
 */

$events = function_exists('portfolio_get_field') ? portfolio_get_field('timeline_events') : null;
if (!$events) {
    $events = array(
        array(
            'event_title' => 'Software Engineering Journey Begins',
            'event_role' => 'Junior Full Stack Developer',
            'event_impact' => 'Started building web applications, mastering React, Node.js, and modern JavaScript. Delivered first production applications.',
            'event_image' => get_template_directory_uri() . '/assets/images/7.jpeg',
            'event_year' => '2020',
        ),
        array(
            'event_title' => 'Senior Developer & Tech Lead',
            'event_role' => 'Full Stack Developer',
            'event_impact' => 'Led scalable microservices, CI/CD pipelines, mentored junior developers.',
            'event_image' => get_template_directory_uri() . '/assets/images/11.jpeg',
            'event_year' => '2022',
        ),
        array(
            'event_title' => 'Cloud & AI Systems',
            'event_role' => 'Cloud & AI Solutions',
            'event_impact' => 'Designed cloud-native apps on AWS; AI powered workflows, Ollama, Hugging Face.',
            'event_image' => get_template_directory_uri() . '/assets/images/4.jpeg',
            'event_year' => '2023',
        ),
        array(
            'event_title' => 'Tech Consultant & Advisor',
            'event_role' => 'Full Stack Developer & Tech Consultant',
            'event_impact' => 'Strategic consulting, architecture reviews, full-stack services for startups and enterprises.',
            'event_image' => get_template_directory_uri() . '/assets/images/9.jpeg',
            'event_year' => '2024–Present',
        ),
    );
}
?>

<section id="timeline" class="section-reveal section-timeline relative section-padding section-alt">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">Work <span class="gold">history</span></h2>
        </div>
        <p class="text-gray-300 text-base md:text-lg max-w-2xl mb-12">From junior developer to tech consultant—building scalable solutions.</p>
        <div class="timeline-events space-y-0">
            <?php foreach ($events as $index => $event) :
                $title = is_array($event) ? $event['event_title'] : '';
                $role = is_array($event) ? $event['event_role'] : '';
                $impact = is_array($event) ? $event['event_impact'] : '';
                $image = is_array($event) ? $event['event_image'] : '';
                $year = is_array($event) ? $event['event_year'] : '';
                $image_url = is_array($image) ? (isset($image['url']) ? $image['url'] : '') : $image;
                $is_left = $index % 2 === 0;
            ?>
                <div class="timeline-event-card flex flex-col <?php echo $is_left ? 'md:flex-row' : 'md:flex-row-reverse'; ?> gap-6 md:gap-10 items-stretch mb-12 last:mb-0">
                    <div class="timeline-content md:w-1/2 flex flex-col justify-center">
                        <div class="timeline-card rounded-xl border border-gold-subtle bg-surface-elevated p-5 md:p-6 shadow-card hover:border-accent/40 transition-colors duration-300">
                            <span class="timeline-year text-xs font-bold text-accent uppercase tracking-wider"><?php echo esc_html($year); ?></span>
                            <h3 class="text-lg md:text-xl font-bold text-white mt-2 mb-1"><?php echo esc_html($title); ?></h3>
                            <p class="text-accent font-medium text-sm mb-3"><?php echo esc_html($role); ?></p>
                            <p class="text-gray-300 text-sm leading-relaxed"><?php echo esc_html($impact); ?></p>
                        </div>
                    </div>
                    <div class="timeline-dot-wrap flex-shrink-0 flex items-center justify-center md:justify-center relative z-10">
                        <div class="timeline-dot w-4 h-4 rounded-full border-2 border-accent bg-color-bg"></div>
                    </div>
                    <div class="timeline-image md:w-1/2 flex-shrink-0">
                        <?php if ($image_url) : ?>
                            <div class="rounded-xl overflow-hidden border border-gold-subtle aspect-video max-h-56 md:max-h-64">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-full object-cover" width="560" height="315" loading="lazy" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
