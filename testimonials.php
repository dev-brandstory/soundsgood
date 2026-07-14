<?php $title = "Patient Testimonials — Life Sounds Better | Sounds Good Hearing Care"; ?>
<?php $description = "Read real stories from Sounds Good Hearing Care patients across Tamil Nadu. Discover how better hearing has made everyday moments clearer and more connected."; ?>
<?php $canonical = "http://localhost/soundsgood/testimonials.php"; ?>
<?php $keywords = "hearing care testimonials, patient reviews, Sounds Good reviews, hearing aid success stories Tamil Nadu"; ?>
<?php $pageclass = "testimonialsPage"; ?>
<?php
$testimonials = [
	[
		'quote' => 'The audiologists took time to understand my lifestyle before suggesting a hearing aid. That personal touch mattered.',
		'name' => 'R. Lakshmi',
		'place' => 'Madurai, Tamil Nadu',
	],
	[
		'quote' => 'After years of struggling to follow conversations, Sounds Good helped me find the right hearing aid. I can finally hear my grandchildren clearly.',
		'name' => 'K. Venkatesh',
		'place' => 'Coimbatore, Tamil Nadu',
	],
	[
		'quote' => 'Professional, patient, and thorough. The audiologist explained every step and the follow-up care has been excellent.',
		'name' => 'Priya S',
		'place' => 'Tirunelveli, Tamil Nadu',
	],
	[
		'quote' => 'The home visit service was a blessing for my father. Caring team, transparent pricing, and real results.',
		'name' => 'Anitha R',
		'place' => 'Theni, Tamil Nadu',
	],
	[
		'quote' => 'I was nervous about trying hearing aids, but the team made the process simple and comfortable from day one.',
		'name' => 'Suresh M',
		'place' => 'Tirupur, Tamil Nadu',
	],
	[
		'quote' => 'From testing to fitting, everything felt personal. Everyday sounds feel natural again — conversations, music, and family moments.',
		'name' => 'Meena K',
		'place' => 'Nagercoil, Tamil Nadu',
	],
];

$faqs = [
	[
		'q' => 'What are the different types and styles of hearing aids?',
		'a' => 'Today’s hearing aids are smaller and designed to be discreet. Many are nearly undetectable even close up. One model actually sits completely in the canal of your ear and is practically invisible when worn. Alternately, fashionable, meant-to-be seen hearing aids in fun color combinations and exotic flowery flourishes are available.',
	],
	[
		'q' => 'What are the most common hearing loss causes?',
		'a' => 'Hearing loss can result from aging, prolonged noise exposure, ear infections, certain medications, genetics, or injury. An audiologist can help identify the cause and recommend the right care plan.',
	],
	[
		'q' => 'Wouldn’t I already know if I had hearing loss?',
		'a' => 'Not always. Hearing loss often develops gradually, so people adapt without noticing. Difficulty following conversations, turning up the TV, or asking others to repeat themselves are common early signs.',
	],
	[
		'q' => 'Doesn\'t hearing loss only affect old people?',
		'a' => 'No. While age-related hearing loss is common, people of all ages can experience hearing challenges due to noise exposure, medical conditions, or other factors. Early assessment helps protect long-term hearing health.',
	],
	[
		'q' => 'How do I know hearing aids will work for me?',
		'a' => 'A comprehensive hearing evaluation helps match you with the right device and settings. Most people notice clearer speech and greater comfort once aids are fitted and fine-tuned to their lifestyle.',
	],
];
?>
<?php include "includes/header.php"; ?>

<!-- ===== Testimonials Intro ===== -->
<section class="testimonials-intro" aria-labelledby="testimonials-page-heading">
	<div class="container">
		<div class="testimonials-intro__content" data-aos="fade-up">
			<p class="testimonials-intro__eyebrow">Trusted by Patients</p>
			<h1 id="testimonials-page-heading" class="testimonials-intro__title">Life Sounds Better</h1>
			<p class="testimonials-intro__lead">Discover how better hearing has made everyday moments clearer, more connected, and more meaningful.</p>
		</div>
	</div>
</section>

<!-- ===== Testimonials Grid ===== -->
<section class="testimonials-grid section" aria-label="Patient testimonials">
	<div class="container">
		<div class="row g-4">
			<?php foreach ($testimonials as $i => $item) : ?>
				<div class="col-lg-4 col-md-6" data-aos="fade-up"<?php echo $i ? ' data-aos-delay="' . min(($i % 3) * 80, 160) . '"' : ''; ?>>
					<article class="testimonials-card h-full">
						<div class="testimonials-card__top">
							<span class="testimonials-card__avatar" aria-hidden="true">
								<svg width="42" height="42" viewBox="0 0 24 24" fill="none">
									<path d="M12 12a4.25 4.25 0 100-8.5 4.25 4.25 0 000 8.5z" stroke="#666666" stroke-width="1.5"/>
									<path d="M4.5 20.25c1.7-3.2 4.35-4.75 7.5-4.75s5.8 1.55 7.5 4.75" stroke="#666666" stroke-width="1.5" stroke-linecap="round"/>
								</svg>
							</span>
							<blockquote class="testimonials-card__quote">
								<p>“<?php echo htmlspecialchars($item['quote']); ?>”</p>
							</blockquote>
						</div>
						<footer class="testimonials-card__footer">
							<div class="testimonials-card__stars" aria-label="5 out of 5 stars">
								<?php for ($s = 0; $s < 5; $s++) : ?>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="#FFC107" aria-hidden="true"><path d="M12 2.5l2.9 5.88 6.49.94-4.7 4.58 1.11 6.47L12 17.77l-5.8 3.05 1.11-6.47-4.7-4.58 6.49-.94L12 2.5z"/></svg>
								<?php endfor; ?>
							</div>
							<div class="testimonials-card__author">
								<p class="testimonials-card__name"><?php echo htmlspecialchars($item['name']); ?></p>
								<p class="testimonials-card__place"><?php echo htmlspecialchars($item['place']); ?></p>
							</div>
						</footer>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== Success Story CTA ===== -->
<section class="testimonials-cta section-none" aria-labelledby="testimonials-cta-heading">
	<div class="container">
		<div class="testimonials-cta__panel" data-aos="fade-up">
			<div class="testimonials-cta__copy">
				<div class="testimonials-cta__heading">
					<h2 id="testimonials-cta-heading" class="testimonials-cta__title">Be the Next Success Story</h2>
					<p class="testimonials-cta__text">Get expert care or tell us about your experience with our services.</p>
				</div>
				<div class="testimonials-cta__actions">
					<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-pill testimonials-cta__btn testimonials-cta__btn--solid">Book Appointment</a>
					<a href="<?php echo BASE_URL; ?>contact.php#contact_name" class="btn btn-pill testimonials-cta__btn testimonials-cta__btn--outline">Share Your Feedback</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== FAQ — Hearing Loss ===== -->
<section class="testimonials-faq section" aria-labelledby="testimonials-faq-heading">
	<div class="container">
		<h2 id="testimonials-faq-heading" class="testimonials-faq__title text-center" data-aos="fade-up">FAQ - Hearing Loss</h2>

		<div class="testimonials-faq__list" id="testimonialsFaq" data-aos="fade-up" data-aos-delay="80">
			<?php foreach ($faqs as $i => $faq) :
				$is_open = $i === 0;
				$panel_id = 'faq-panel-' . ($i + 1);
				$btn_id = 'faq-btn-' . ($i + 1);
			?>
				<div class="testimonials-faq__item <?php echo $is_open ? 'is-open' : ''; ?>">
					<button
						type="button"
						class="testimonials-faq__trigger"
						id="<?php echo $btn_id; ?>"
						aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
						aria-controls="<?php echo $panel_id; ?>"
						aria-label="<?php echo $is_open ? 'Collapse: ' : 'Expand: '; ?><?php echo htmlspecialchars($faq['q']); ?>"
					>
						<span class="testimonials-faq__question"><?php echo htmlspecialchars($faq['q']); ?></span>
						<span class="testimonials-faq__icon" aria-hidden="true">
							<svg class="testimonials-faq__icon-plus" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 3v10M3 8h10" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
							<svg class="testimonials-faq__icon-minus" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
						</span>
					</button>
					<div
						class="testimonials-faq__panel"
						id="<?php echo $panel_id; ?>"
						role="region"
						aria-labelledby="<?php echo $btn_id; ?>"
						<?php echo $is_open ? '' : 'hidden'; ?>
					>
						<p><?php echo htmlspecialchars($faq['a']); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== Footer Location CTA ===== -->
<?php include "includes/footer-location-cta.php"; ?>

<?php include "includes/footer.php"; ?>
