<?php $title = "Hearing Loss — Signs, Causes & Care | Sounds Good Hearing Care"; ?>
<?php $description = "Learn to recognise early signs of hearing loss, understand causes and types, and discover why early intervention matters. Book a hearing check with Sounds Good."; ?>
<?php $canonical = "http://localhost/soundsgood/hearing-loss.php"; ?>
<?php $keywords = "hearing loss, early signs of hearing loss, causes of hearing loss, tinnitus, hearing test, Sounds Good"; ?>
<?php $pageclass = "hearingLossPage"; ?>
<?php
$early_signs = [
	[
		'title' => 'Difficulty following conversations',
		'text' => 'You may find it hard to keep up with group conversations, especially when there is background noise.',
		'img' => 'hearing-loss/early-signs-1.webp',
		'alt' => 'People conversing in a social setting',
	],
	[
		'title' => 'Phone conversations are unclear',
		'text' => 'Understanding speech over the phone becomes difficult, even in quiet environments.',
		'img' => 'hearing-loss/early-signs-2.webp',
		'alt' => 'Person listening carefully during conversation',
	],
	[
		'title' => 'People seem to be mumbling',
		'text' => 'You may often feel that others are not speaking clearly or ask them to repeat themselves.',
		'img' => 'hearing-loss/early-signs-3.webp',
		'alt' => 'Person watching television at home',
	],
	[
		'title' => 'Difficulty locating sounds',
		'text' => 'It becomes harder to tell where sounds are coming from.',
		'img' => 'hearing-loss/early-signs-4.webp',
		'alt' => 'Quiet conversation moment',
	],
	[
		'title' => 'Signs of tinnitus',
		'text' => 'You may notice ringing, buzzing, or other sounds in your ears.',
		'img' => 'hearing-loss/early-signs-5.webp',
		'alt' => 'Person resting after a long day',
	],
	[
		'title' => 'Turning up the TV too loud',
		'text' => 'Others may point out that the volume is louder than usual.',
		'img' => 'hearing-loss/early-signs-6.webp',
		'alt' => 'Social gathering environment',
	],
];

$causes = [
	'Age-related changes (presbycusis)',
	'Long-term noise exposure at work or leisure',
	'Ear infections or untreated ear conditions',
	'Certain medications that affect hearing',
	'Family history / genetic factors',
	'Head injury or sudden loud-noise trauma',
];

$protect_steps = [
	[
		'title' => '1. Limit exposure to loud environments',
		'img' => 'hearing-loss/protectin-hearing-1.webp',
		'icon' => 'hearing-loss/protectin-hearing-icon-1.svg',
		'alt' => 'Busy city street with people walking',
	],
	[
		'title' => '2. Use ear protection when needed',
		'img' => 'hearing-loss/protectin-hearing-2.webp',
		'icon' => 'hearing-loss/protectin-hearing-icon-2.svg',
		'alt' => 'Person wearing hearing protection',
	],
	[
		'title' => '3. Keep volume levels moderate on devices',
		'img' => 'hearing-loss/protectin-hearing-3.webp',
		'icon' => 'hearing-loss/protectin-hearing-icon-3.svg',
		'alt' => 'Speaker on a table at high volume',
	],
	[
		'title' => '4. Take breaks from continuous noise exposure',
		'img' => 'hearing-loss/protectin-hearing-4.webp',
		'icon' => 'hearing-loss/protectin-hearing-icon-4.svg',
		'alt' => 'Person relaxing indoors',
	],
];

$faqs = [
	[
		'q' => 'What are the different types and styles of hearing aids?',
		'a' => 'Today’s hearing aids are smaller and designed to be discreet. Many are nearly undetectable even close up. One model actually sits completely in the canal of your ear and is practically invisible when worn. Alternately, fashionable, meant-to-be seen hearing aids in fun color combinations are also available.',
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
		'q' => 'Doesn’t hearing loss only affect older people?',
		'a' => 'No. While age-related hearing loss is common, people of all ages can experience hearing challenges due to noise exposure, medical conditions, or other factors. Early assessment helps protect long-term hearing health.',
	],
	[
		'q' => 'How do I know hearing aids will work for me?',
		'a' => 'A comprehensive hearing evaluation helps match you with the right device and settings. Most people notice clearer speech and greater comfort once aids are fitted and fine-tuned to their lifestyle.',
	],
];
?>
<?php include "includes/header.php"; ?>

<!-- ===== Hearing Loss Hero Banner ===== -->
<section class="page-banner hl-banner section-none" aria-label="Hearing loss awareness">
	<img class="page-banner__bg" src="<?php echo BASE_URL; ?>assets/images/hearing-loss/hearing-loss-hero.webp" alt="Two people enjoying an outdoor conversation" width="1440" height="650" loading="eager">
	<div class="page-banner__overlay" aria-hidden="true"></div>
	<div class="container">
		<div class="hl-banner__layout">
			<div class="hl-banner__content" data-aos="fade-up">
				<h1>Recognising Changes in the Way You Hear</h1>
				<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-pill">Check Your Hearing Today</a>
			</div>

			<div class="hl-banner__aside" data-aos="fade-up" data-aos-delay="100">
				<article class="hl-banner__card hl-banner__card--glass hl-banner__card--untreated">
					<span class="hl-banner__card-icon" aria-hidden="true">
						<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/hl-ear.svg" alt="" width="40" height="40">
					</span>
					<h2 class="hl-banner__card-title">Untreated Hearing Loss</h2>
					<p class="hl-banner__card-text">can affect communication, mental well-being, and overall quality of life.</p>
				</article>

				<article class="hl-banner__card hl-banner__card--aids">
					<span class="hl-banner__aid" aria-hidden="true">
						<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/hl-hearing-aid.svg" alt="" width="92" height="84">
					</span>
					<p class="hl-banner__card-title hl-banner__card-title--dark">Nearly 80% of hearing loss</p>
					<p class="hl-banner__card-text hl-banner__card-text--dark">problem can be solved by using Hearing aids</p>
				</article>

				<article class="hl-banner__card hl-banner__card--glass hl-banner__card--prevalence">
					<span class="hl-banner__people" aria-hidden="true">
						<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/hl-people.svg" alt="" width="46" height="46">
					</span>
					<p class="hl-banner__card-text hl-banner__card-text--single">1 out of 6 people has a hearing loss</p>
				</article>
			</div>
		</div>
	</div>
</section>

<!-- ===== Understanding Changes ===== -->
<section class="hl-understanding section" id="hl-understanding" aria-labelledby="hl-understanding-heading">
	<div class="container">
		<h2 id="hl-understanding-heading" class="hl-understanding__title" data-aos="fade-up">Understanding Changes in Auditory Perception</h2>

		<div class="hl-understanding__body">
			<figure class="hl-understanding__media" data-aos="fade-up">
				<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/hearing-loss-about.webp" alt="Hearing assessment with headphones in a clinical setting" width="400" height="272" loading="lazy">
			</figure>

			<div class="hl-understanding__copy" data-aos="fade-up" data-aos-delay="80">
				<p>Sound perception and hearing are crucial aspects in everyday life, whether you are talking to a beloved one or perceiving everything around you. Approximately one in six individuals experiences changes in hearing, often beginning subtly with missed tones, difficulty following conversations, or frequent requests for repetition.</p>
				<hr class="hl-understanding__rule" aria-hidden="true">
				<p>Early identification and hearing intervention are essential to maintaining effective communication, social engagement, and overall well-being. Recognising auditory changes early can prevent further complications and enhance your quality of life.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Early Signs of Hearing Loss ===== -->
<section class="hl-signs section" aria-labelledby="hl-signs-heading">
	<div class="container">
		<header class="section-header text-center" data-aos="fade-up">
			<h2 id="hl-signs-heading" class="section-title">Early Signs of Hearing Loss</h2>
			<p class="section-desc mx-auto">Hearing changes often begin subtly. Recognising these early signs can help you take timely action.</p>
		</header>

		<div class="hl-signs__carousel" id="hlSignsCarousel" data-aos="fade-up" data-aos-delay="80">
			<div class="hl-signs__track" id="hlSignsTrack">
				<?php
				$chunks = array_chunk($early_signs, 3);
				foreach ($chunks as $si => $slide) :
				?>
					<div class="hl-signs__slide <?php echo $si === 0 ? 'is-active' : ''; ?>" data-slide="<?php echo $si; ?>" <?php echo $si === 0 ? '' : 'hidden'; ?>>
						<div class="row g-4">
							<?php foreach ($slide as $card) : ?>
								<div class="col-md-4">
									<article class="hl-signs__card h-full">
										<div class="hl-signs__card-body">
											<h3><?php echo htmlspecialchars($card['title']); ?></h3>
											<p><?php echo htmlspecialchars($card['text']); ?></p>
										</div>
										<figure class="hl-signs__card-media">
											<img src="<?php echo BASE_URL; ?>assets/images/<?php echo htmlspecialchars($card['img']); ?>" alt="<?php echo htmlspecialchars($card['alt']); ?>" width="380" height="220" loading="lazy">
										</figure>
									</article>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="hl-signs__controls" role="group" aria-label="Early signs navigation">
				<button type="button" class="hl-signs__btn hl-signs__btn--prev" id="hlSignsPrev" aria-label="Previous signs" disabled>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M12.5 15l-5-5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
				<span class="hl-signs__status" id="hlSignsStatus" aria-live="polite">1 of <?php echo count($chunks); ?></span>
				<button type="button" class="hl-signs__btn hl-signs__btn--next" id="hlSignsNext" aria-label="Next signs" <?php echo count($chunks) < 2 ? 'disabled' : ''; ?>>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7.5 15l5-5-5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
			</div>
		</div>
	</div>
</section>

<!-- ===== Check Your Hearing ===== -->
<section class="hl-check section" aria-labelledby="hl-check-heading">
	<div class="container">
		<header class="hl-check__header" data-aos="fade-up">
			<h2 id="hl-check-heading">Check Your Hearing</h2>
			<p>Not sure if your hearing has changed?</p>
		</header>

		<div class="hl-check__grid" data-aos="fade-up" data-aos-delay="80">
			<article class="hl-check__card">
				<span class="hl-check__icon" aria-hidden="true">
					<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/feeling-fatigued.svg" alt="" width="24" height="24">
				</span>
				<p>Feeling fatigued from listening</p>
			</article>

			<article class="hl-check__card">
				<span class="hl-check__icon" aria-hidden="true">
					<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/turning-up-volum.svg" alt="" width="24" height="24">
				</span>
				<p>Turning up the volume on devices</p>
			</article>

			<article class="hl-check__card">
				<span class="hl-check__icon" aria-hidden="true">
					<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/struggling-in-noisy.svg" alt="" width="24" height="24">
				</span>
				<p>Struggling in noisy spaces</p>
			</article>

			<article class="hl-check__card hl-check__card--cta">
				<p>Early assessment protects your hearing and keeps life connected.</p>
				<a href="<?php echo BASE_URL; ?>contact.php" class="hl-check__cta">Speak to an Audiologist</a>
			</article>
		</div>
	</div>
</section>

<!-- ===== Why Early Intervention Matters ===== -->
<section class="hl-intervention section" aria-labelledby="hl-intervention-heading">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<div class="col-lg-5" data-aos="fade-up">
				<figure class="hl-intervention__media">
					<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/early-intervention.webp" alt="Patient consultation with an audiologist" width="520" height="420" loading="lazy">
				</figure>
			</div>
			<div class="col-lg-7" data-aos="fade-up" data-aos-delay="80">
				<h2 id="hl-intervention-heading" class="hl-section-title">Why Early Intervention Matters</h2>
				<p>Addressing hearing changes early helps preserve speech understanding, reduces listening fatigue, and supports stronger social connection. The sooner you act, the more options you typically have — from simple strategies to modern hearing technology tailored to your lifestyle.</p>
				<p>Our audiologists guide you through assessment, counselling, and personalised recommendations so you can make confident decisions about your hearing health.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Untreated Hearing Loss Impact ===== -->
<section class="hl-untreated section" aria-labelledby="hl-untreated-heading">
	<div class="container">
		<div class="hl-untreated__inner" data-aos="fade-up">
			<h2 id="hl-untreated-heading">What Happens If Hearing Loss Is Left Untreated?</h2>
			<div class="hl-untreated__copy">
				<p>Untreated hearing loss can gradually affect more than just your ability to hear. Over time, it may impact communication, confidence, and social interactions, making everyday situations more challenging. Many individuals begin to withdraw from conversations or avoid environments where listening feels difficult.</p>
				<p>Research also shows a connection between untreated hearing loss and cognitive decline, increased listening fatigue, and reduced overall well-being. Addressing hearing changes early helps you stay connected, active, and engaged in daily life.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Causes of Gradual Hearing Loss ===== -->
<section class="hl-causes section" aria-labelledby="hl-causes-heading">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<div class="col-lg-6" data-aos="fade-up">
				<h2 id="hl-causes-heading" class="hl-section-title">Causes of Gradual Hearing Loss</h2>
				<ul class="hl-causes__list">
					<?php foreach ($causes as $cause) : ?>
						<li><?php echo htmlspecialchars($cause); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
				<figure class="hl-causes__media">
					<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/causes-of-gradual-hearing-loss.webp" alt="Person experiencing ear discomfort" width="560" height="420" loading="lazy">
				</figure>
			</div>
		</div>
	</div>
</section>

<!-- ===== Types of Auditory Challenges ===== -->
<section class="hl-challenges section" aria-labelledby="hl-challenges-heading">
	<div class="container">
		<header class="hl-challenges__header" data-aos="fade-up">
			<h2 id="hl-challenges-heading">Types of Auditory Challenges</h2>
			<p>Medical professionals classify sound perception loss into three main types</p>
		</header>

		<div class="hl-challenges__body">
			<figure class="hl-challenges__diagram" data-aos="fade-up">
				<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/auditory-challenges.svg" alt="Ear anatomy diagram showing conductive, sensorineural, and mixed hearing loss regions" width="607" height="538" loading="lazy">
			</figure>

			<div class="hl-challenges__aside" data-aos="fade-up" data-aos-delay="80">
				<div class="hl-challenges__cards">
					<article class="hl-challenges__card">
						<div class="hl-challenges__card-top">
							<span class="hl-challenges__icon" aria-hidden="true">
								<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/conductive-hearing-loss.svg" alt="" width="28" height="28">
							</span>
							<h3>Conductive Hearing Loss</h3>
						</div>
						<p>Difficulty transmitting sound through the outer or middle ear</p>
					</article>

					<article class="hl-challenges__card">
						<div class="hl-challenges__card-top">
							<span class="hl-challenges__icon" aria-hidden="true">
								<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/sensorineural-hearing-loss.svg" alt="" width="28" height="28">
							</span>
							<h3>Sensorineural Hearing Loss</h3>
						</div>
						<p>Damage to the inner ear or auditory nerve.</p>
					</article>

					<article class="hl-challenges__card">
						<div class="hl-challenges__card-top">
							<span class="hl-challenges__icon" aria-hidden="true">
								<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/mixed-hearing-loss.svg" alt="" width="28" height="28">
							</span>
							<h3>Mixed Hearing Loss</h3>
						</div>
						<p>A combination of conductive and sensorineural factors</p>
					</article>
				</div>

				<p class="hl-challenges__note">Regardless of type, any reduction in sound clarity can impact quality of life, communication, and personal safety.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Understanding Tinnitus ===== -->
<section class="hl-ear section" aria-labelledby="hl-ear-heading">
	<div class="container">
		<div class="hl-ear__body">
			<div class="hl-ear__content" data-aos="fade-up">
				<h2 id="hl-ear-heading" class="hl-section-title">Understanding Tinnitus and Its Impact</h2>
				<p>Tinnitus, experienced as ringing, buzzing, or clicking in the ears, affects 10–15% of people worldwide. It can be constant or occasional, mild or severe, and may disrupt concentration and everyday interactions.</p>
				<p>Recognising tinnitus alongside other changes in auditory perception is critical for maintaining communication, social engagement, and overall hearing health.</p>
			</div>
			<figure class="hl-ear__media" data-aos="fade-up" data-aos-delay="80">
				<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/understanding-tinnitus-and-its-impact.svg" alt="Person experiencing tinnitus illustrated with sound waves around the ear" width="560" height="420" loading="lazy">
			</figure>
		</div>
	</div>
</section>

<!-- ===== Protecting Your Hearing ===== -->
<section class="hl-journey section" aria-labelledby="hl-journey-heading">
	<div class="container">
		<header class="hl-journey__header" data-aos="fade-up">
			<h2 id="hl-journey-heading">Protecting Your Hearing</h2>
			<p>Simple steps can help protect your hearing over time</p>
		</header>

		<div class="hl-journey__grid" data-aos="fade-up" data-aos-delay="80">
			<?php foreach ($protect_steps as $step) : ?>
				<article class="hl-journey__card">
					<img class="hl-journey__bg" src="<?php echo BASE_URL; ?>assets/images/<?php echo htmlspecialchars($step['img']); ?>" alt="<?php echo htmlspecialchars($step['alt']); ?>" width="295" height="284" loading="lazy">
					<span class="hl-journey__overlay" aria-hidden="true">
						<span class="hl-journey__overlay-layer hl-journey__overlay-layer--1"></span>
						<span class="hl-journey__overlay-layer hl-journey__overlay-layer--2"></span>
						<span class="hl-journey__overlay-layer hl-journey__overlay-layer--3"></span>
					</span>
					<span class="hl-journey__icon" aria-hidden="true">
						<img src="<?php echo BASE_URL; ?>assets/images/<?php echo htmlspecialchars($step['icon']); ?>" alt="" width="24" height="24">
					</span>
					<h3><?php echo htmlspecialchars($step['title']); ?></h3>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== Connect With Our Specialists ===== -->
<section class="hl-connect section-none" aria-labelledby="hl-connect-heading">
	<div class="hl-connect__bg" aria-hidden="true">
		<img src="<?php echo BASE_URL; ?>assets/images/hearing-loss/connect-with-our-specialist.svg" alt="" width="1440" height="400">
	</div>
	<div class="container">
		<div class="hl-connect__copy" data-aos="fade-up">
			<h2 id="hl-connect-heading">Connect With Our Specialists</h2>
			<p>Contact us today to schedule a hearing evaluation and take the first step towards clearer hearing.</p>
			<a href="<?php echo BASE_URL; ?>contact.php" class="hl-connect__cta">Get Started</a>
		</div>
	</div>
</section>

<!-- ===== FAQ — Hearing Loss ===== -->
<section class="testimonials-faq hl-faq section" aria-labelledby="hl-faq-heading">
	<div class="container">
		<h2 id="hl-faq-heading" class="testimonials-faq__title text-center" data-aos="fade-up">FAQ - Hearing Loss</h2>

		<div class="testimonials-faq__list" id="hearingLossFaq" data-aos="fade-up" data-aos-delay="80">
			<?php foreach ($faqs as $i => $faq) :
				$is_open = $i === 0;
				$panel_id = 'hl-faq-panel-' . ($i + 1);
				$btn_id = 'hl-faq-btn-' . ($i + 1);
			?>
				<div class="testimonials-faq__item hl-faq__item <?php echo $is_open ? 'is-open' : ''; ?>">
					<span class="hl-faq__accent" aria-hidden="true"></span>
					<div class="hl-faq__content">
						<button
							type="button"
							class="testimonials-faq__trigger hl-faq__trigger"
							id="<?php echo $btn_id; ?>"
							aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
							aria-controls="<?php echo $panel_id; ?>"
							aria-label="<?php echo $is_open ? 'Collapse: ' : 'Expand: '; ?><?php echo htmlspecialchars($faq['q']); ?>"
						>
							<span class="testimonials-faq__question"><?php echo htmlspecialchars($faq['q']); ?></span>
							<span class="testimonials-faq__icon hl-faq__icon" aria-hidden="true">
								<svg class="testimonials-faq__icon-plus" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M10 4.17v11.66M4.17 10h11.66" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
								</svg>
								<svg class="testimonials-faq__icon-minus" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M4.17 10h11.66" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
								</svg>
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
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===== Footer Location CTA ===== -->
<?php include "includes/footer-location-cta.php"; ?>

<?php include "includes/footer.php"; ?>
