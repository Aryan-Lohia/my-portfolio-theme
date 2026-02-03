<?php
/**
 * Testimonials Section – Cards with avatar initials
 *
 * @package My_Portfolio
 */

$testimonials = function_exists('portfolio_get_field') ? portfolio_get_field('testimonials') : null;
if (!$testimonials) {
    $testimonials = array(
        array('testimonial_name' => 'Kunal Sharma', 'testimonial_role' => 'Full-Stack Developer', 'testimonial_company' => 'Blackspektro', 'testimonial_quote' => 'I got the oppourtunity to work with Aryan many times while in Enactus SMIT and also as a team for other activities. He impressed me as a committed team player with great problem solving skills. Because of Aryan\'s professional demeanor and contributions to our projects, I would suggest them'),
        array('testimonial_name' => 'Abhinav Raj Jha', 'testimonial_role' => 'Data Engineer', 'testimonial_company' => 'SMIT', 'testimonial_quote' => 'Aryan went beyond imaginable limits with his ability to coordinate all Technical activities. He could report to work very early in the morning to check on all departments to see to it that all is in place and also ensure smooth flow of work throughout the day. He solved all departmental problems with intelligence, calm and confidence.'),
        array('testimonial_name' => 'Abhishek Banerjee', 'testimonial_role' => 'Director of Campus Life', 'testimonial_company' => 'NEXIS School of Business', 'testimonial_quote' => 'Aryan is a dedicated and hardworking employee who has always been a valuable asset to our team. He is a quick learner and has a great attitude towards work. He is a great team player and has a great sense of humor. He is a great leader and has a great sense of humor. He is a great leader and has a great sense of humor.'),
    );
}
?>

<section id="testimonials" class="section-reveal section-testimonials section-alt relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">What people <span class="gold">say</span></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php foreach ($testimonials as $t) :
                $name = is_array($t) ? $t['testimonial_name'] : '';
                $role = is_array($t) ? $t['testimonial_role'] : '';
                $company = is_array($t) ? $t['testimonial_company'] : '';
                $quote = is_array($t) ? $t['testimonial_quote'] : '';
                $initial = $name ? strtoupper(mb_substr(trim($name), 0, 1)) : '?';
            ?>
                <div class="testimonial-card flex flex-col">
                    <p class="quote">"<?php echo esc_html($quote); ?>"</p>
                    <p class="author mt-auto"><?php echo esc_html($name); ?></p>
                    <p class="role"><?php echo esc_html($role); ?><?php if ($company) echo ', ' . esc_html($company); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
