<?php
/**
 * What I Do Section – Three columns with icons
 *
 * @package My_Portfolio
 */

$cards = array(
    array(
        'title' => 'What I Build',
        'icon' => 'build',
        'items' => array('Scalable SaaS platforms', 'Web & mobile applications', 'AI powered analysis systems', 'Internal tools & CRMs'),
    ),
    array(
        'title' => 'How I Work',
        'icon' => 'work',
        'items' => array('End-to-end ownership', 'System-first thinking', 'Clean APIs & data flows', 'Practical AI over demos'),
    ),
    array(
        'title' => 'What You Get',
        'icon' => 'get',
        'items' => array('Reliable architecture', 'Scalable systems', 'Clear communication', 'Long-term maintainability'),
    ),
);
?>

<section id="what-i-do" class="section-reveal section-what relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">What I <span class="gold">do</span></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <?php foreach ($cards as $card) : ?>
                <div class="what-i-do-card">
                    <div class="what-i-do-icon mb-4">
                        <?php if ($card['icon'] === 'build') : ?>
                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        <?php elseif ($card['icon'] === 'work') : ?>
                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <?php else : ?>
                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <?php endif; ?>
                    </div>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <ul>
                        <?php foreach ($card['items'] as $item) : ?>
                            <li><?php echo esc_html($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
