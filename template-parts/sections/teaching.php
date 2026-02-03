<?php
/**
 * Teaching & Leadership – Bento design, stats, partner logos
 *
 * @package My_Portfolio
 */

$base = get_template_directory_uri() . '/assets/images/';
$teaching_photos = array(
	array( 'src' => '6.jpeg', 'caption' => 'Workshops • 200+ sessions' ),
	array( 'src' => '7.jpeg', 'caption' => 'AI & ML sessions' ),
	array( 'src' => '9.jpeg', 'caption' => 'Teaching • Sikkim Manipal • BNI' ),
	array( 'src' => '10.jpeg', 'caption' => 'Consulting & leadership' ),
	array( 'src' => '11.jpeg', 'caption' => 'Build & ship' ),
);
?>

<section id="teaching" class="section-reveal section-teaching relative section-padding">
	<div class="section-inner max-w-6xl mx-auto text-left">
		<div class="section-header">
			<h2 class="section-title">Teaching & <span class="gold">leadership</span></h2>
		</div>

		<div class="teaching-bento">
			<!-- Stats row - prominent large-type features -->
			<div class="teaching-bento-stats bento-cell">
				<div class="teaching-stat">
					<span class="teaching-stat-number">200+</span>
					<span class="teaching-stat-label">Workshops</span>
				</div>
				<div class="teaching-stat">
					<span class="teaching-stat-number">75+</span>
					<span class="teaching-stat-label">Student sessions</span>
				</div>
				<div class="teaching-stat">
					<span class="teaching-stat-number">3000+</span>
					<span class="teaching-stat-label">Attendees</span>
				</div>
			</div>

			<!-- Intro + Role card -->
			<div class="teaching-bento-intro bento-cell">
				<p class="teaching-body">I lead workshops, teach AI & software development, and mentor teams. From corporate sessions to university classrooms—focusing on practical, hands-on learning.</p>
			</div>

			<div class="teaching-bento-role bento-cell">
				<p class="bento-label">Current role</p>
				<p class="teaching-role-title">Founding COO & AI Faculty</p>
				<p class="teaching-role-org">NEXIS School of AI</p>
				<div class="teaching-partners">
					<span class="partners-label">Partners</span>
					<div class="partners-logos">
						<span class="partner-logo partner-logo-lions" title="Lions Club">
							SMIT
						</span>
						<span class="partner-logo partner-logo-bni" title="BNI">
							TEDx
						</span>
	
						<span class="partner-logo partner-logo-smit" title="Sikkim Manipal Institute of Technology">
							WebBees
						</span>
					</div>
				</div>
			</div>

			<!-- In Action photos -->
			<div class="teaching-bento-gallery bento-cell bento-cell-full">
				<p class="bento-label">In action</p>
				<div class="teaching-photo-grid">
					<?php foreach ( $teaching_photos as $img ) : ?>
						<div class="teaching-photo-item group">
							<div class="teaching-image-container aspect-[3/4] overflow-hidden">
								<img src="<?php echo esc_url( $base . $img['src'] ); ?>" alt="<?php echo esc_attr( $img['caption'] ); ?>" class="teaching-image w-full h-full object-cover" width="280" height="373" loading="lazy" />
							</div>
							<div class="teaching-photo-caption">
								<span><?php echo esc_html( $img['caption'] ); ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
