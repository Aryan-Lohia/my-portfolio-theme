<?php
/**
 * Gallery Section - Masonry grid with hover text overlay
 *
 * @package My_Portfolio
 */

$images = array(
    array('src' => '1.jpeg', 'title' => 'SMIT Global Alumni Meet 2023', 'caption' => 'Alumni Representative 2023'),
    array('src' => '2.jpeg', 'title' => 'Coding Workshopes', 'caption' => 'Lead at GDSC SMIT'),
    array('src' => '3.jpeg', 'title' => 'Kaalrav SMIT 2024', 'caption' => 'Head of Stage Operations'),
    array('src' => '4.jpeg', 'title' => 'B.Tech in CSE', 'caption' => 'Sikkim Manipal Institute of Technology'),
    array('src' => '5.jpeg', 'title' => 'Freelance Projects', 'caption' => 'Bangalore'),
    array('src' => '6.jpeg', 'title' => 'StartupParty Bangalore', 'caption' => 'Became best buds with 7 Times TEDx Speaker Vimal Geethanadan'),
    array('src' => '7.jpeg', 'title' => 'Guest at BNI', 'caption' => 'Founder of WebBees'),
    array('src' => '8.jpeg', 'title' => 'NEXIS School of Business', 'caption' => 'Worked with the best founders & team at NEXIS'),
    array('src' => '9.jpeg', 'title' => 'AI Lectures', 'caption' => 'NEXIS School of Business'),
    array('src' => '10.jpeg', 'title' => 'AI Training Sessions', 'caption' => '50+ workshops conducted at NEXIS'),
    array('src' => '11.jpeg', 'title' => 'Build & ship', 'caption' => 'Scalable systems'),
);
$base = get_template_directory_uri() . '/assets/images/';
?>

<section id="gallery" class="section-reveal section-gallery section-alt relative section-padding">
    <div class="section-inner max-w-6xl mx-auto text-left">
        <div class="section-header">
            <h2 class="section-title">Work & <span class="gold">moments</span></h2>
        </div>
        <div class="masonry-gallery">
            <?php foreach ($images as $i => $img) : ?>
                <div class="masonry-item">
                    <img src="<?php echo esc_url($base . $img['src']); ?>" alt="<?php echo esc_attr($img['title']); ?>" width="400" height="300" loading="lazy" />
                    <div class="overlay">
                        <span class="overlay-title"><?php echo esc_html($img['title']); ?></span>
                        <span class="overlay-caption"><?php echo esc_html($img['caption']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
