<?php $title = "Sounds Good Hearing Care — Expert Hearing Solutions"; ?>
<?php $description = "Sounds Good Hearing Care offers expert hearing assessments, modern hearing aids, and lifelong support across Tamil Nadu. Trusted since 1996."; ?>
<?php $canonical = "http://localhost/soundsgood/"; ?>
<?php $keywords = "hearing care, hearing aids, audiologist, hearing loss, Sounds Good"; ?>
<?php $pageclass = "homePage"; ?>
<?php include "includes/header.php"; ?>

<!-- ===== Hero Banner ===== -->
<section class="hero-banner section-none" aria-label="Hero banner">
	<div class="hero-banner__viewport">
		<div class="hero-banner__slider" id="heroSlider">
			<article class="hero-banner__slide is-active" data-slide="0">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo BASE_URL; ?>assets/images/home/mobile-hero-banner1.webp">
					<source media="(max-width: 1024px)" srcset="<?php echo BASE_URL; ?>assets/images/home/tablet-hero-banner1.webp">
					<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/banner-img1.webp" alt="Family enjoying outdoor time together" width="1440" height="759" loading="eager">
				</picture>
				<div class="container">
					<div class="hero-banner__content" data-aos="fade-up">
						<div class="hero-banner__badge">
							<img src="<?php echo BASE_URL; ?>assets/images/home/trusted-people.svg" alt="" width="74" height="28" aria-hidden="true">
							<span>Trusted by 5k+ people</span>
						</div>
						<h1>Get Your Life Back</h1>
						<a href="<?php echo BASE_URL; ?>contact" class="btn btn-primary btn-pill">Begin Your Journey</a>
					</div>
				</div>
			</article>
			<article class="hero-banner__slide" data-slide="1">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo BASE_URL; ?>assets/images/home/mobile-hero-banner2.webp">
					<source media="(max-width: 1024px)" srcset="<?php echo BASE_URL; ?>assets/images/home/tablet-hero-banner2.webp">
					<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/banner-img2.webp" alt="Senior couple sharing a joyful moment" width="1440" height="759" loading="lazy">
				</picture>
	
				<div class="container">
					<div class="hero-banner__content" data-aos="fade-up">
						<div class="hero-banner__badge">
							<img src="<?php echo BASE_URL; ?>assets/images/home/trusted-people.svg" alt="" width="74" height="28" aria-hidden="true">
							<span>Trusted by 5k+ people</span>
						</div>
						<h1>Decades of Care. Moments Made Clear.</h1>
						<a href="<?php echo BASE_URL; ?>about" class="btn btn-primary btn-pill">Trust Our Experience</a>
					</div>
				</div>
			</article>
			<article class="hero-banner__slide" data-slide="2">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo BASE_URL; ?>assets/images/home/mobile-hero-banner3.webp">
					<source media="(max-width: 1024px)" srcset="<?php echo BASE_URL; ?>assets/images/home/tablet-hero-banner3.webp">
					<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/banner-img3.webp" alt="Personalized hearing care solutions" width="1440" height="759" loading="lazy">
				</picture>

				<div class="container">
					<div class="hero-banner__content" data-aos="fade-up">
						<div class="hero-banner__badge">
							<img src="<?php echo BASE_URL; ?>assets/images/home/trusted-people.svg" alt="" width="74" height="28" aria-hidden="true">
							<span>Trusted by 5k+ people</span>
						</div>
						<h1>Thoughtful Solutions, Just for You</h1>
						<a href="<?php echo BASE_URL; ?>contact" class="btn btn-primary btn-pill">Begin Your Journey</a>
					</div>
				</div>
			</article>
		</div>
	</div>
	<div class="hero-banner__dots" role="tablist" aria-label="Hero slides">
		<button type="button" class="hero-banner__dot is-active" data-slide="0" aria-label="Slide 1" aria-selected="true"></button>
		<button type="button" class="hero-banner__dot" data-slide="1" aria-label="Slide 2" aria-selected="false"></button>
		<button type="button" class="hero-banner__dot" data-slide="2" aria-label="Slide 3" aria-selected="false"></button>
	</div>
</section>

<!-- ===== Why We Are the Best ===== -->
<section class="about-intro section bg-pale" aria-labelledby="about-intro-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Why We Are the Best</span>
			<h2 id="about-intro-heading" class="section-title">We Are Dedicated to Supporting You</h2>
			<p class="section-desc mx-auto">With decades of experience and a deep understanding of individual hearing needs, Sounds Good Hearing Care stands by you at every step from diagnosis to long-term care.</p>
		</div>
		<div class="about-intro__media" data-aos="fade-up" data-aos-delay="100">
			<div class="about-intro__video rounded-xl overflow-hidden">
				<img src="<?php echo BASE_URL; ?>assets/images/home/home-intro-img.webp" alt="Audiologist consulting with a patient at Sounds Good Hearing Care" width="100%" height="100%" loading="lazy">
			</div>
		</div>
	</div>
</section>

<!-- ===== Stats Grid (desktop) ===== -->
<section class="stats-section section d-none d-md-block" aria-labelledby="stats-heading">
	<div class="container">
		<h2 id="stats-heading" class="sr-only">Our achievements</h2>
		<div class="stats-grid">
			<article class="stat-card stat-card--customers" data-aos="fade-up">
				<div class="stat-card__content">
					<p class="stat-card__number">3 Lakh+</p>
					<p class="stat-card__label">Happy Customers</p>
				</div>
			</article>
			<article class="stat-card stat-card--trusted" data-aos="fade-up" data-aos-delay="50">
				<div class="stat-card__content">
					<p class="stat-card__number">1996</p>
					<p class="stat-card__label">Trusted Since</p>
				</div>
			</article>

			<!-- Stacked pair: 30+ Years + Audiologists -->
			<div class="stats-stack" data-aos="fade-up" data-aos-delay="100">
				<article class="stat-card stat-card--experience">
					<div class="stat-card__content">
						<p class="stat-card__number">30+</p>
						<p class="stat-card__label">Years of Experience</p>
					</div>
				</article>
				<article class="stat-card stat-card--audiologists">
					<div class="stat-card__content">
						<p class="stat-card__title">Well-Trained Audiologists</p>
					</div>
				</article>
			</div>

			<article class="stat-card stat-card--branches" data-aos="fade-up" data-aos-delay="200">
				<div class="stat-card__content">
					<p class="stat-card__number">12+</p>
					<p class="stat-card__label">Branches</p>
				</div>
			</article>
			<article class="stat-card stat-card--cities" data-aos="fade-up" data-aos-delay="250">
				<div class="stat-card__content">
					<p class="stat-card__number">9+</p>
					<p class="stat-card__label">Cities</p>
				</div>
				<ol class="stat-card__cities">
					<li>Madurai</li>
					<li>Thirunelveli</li>
					<li>Coimbatore</li>
					<li>Theni</li>
					<li>Nagercoil</li>
					<li>Ramanathapuram</li>
					<li>Thoothukudi</li>
					<li>Tirupur</li>
					<li>Palayamkottai</li>
				</ol>
			</article>
		</div>
	</div>
</section>

<?php include 'includes/home-stats-mobile.php'; ?>

<!-- ===== Why Choose Us — Tabs (desktop) ===== -->
<section class="moments-section section d-none d-md-block" aria-labelledby="moments-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Why Choose us</span>
			<h2 id="moments-heading" class="section-title">Your Moments Matter</h2>
		</div>

		<div class="moments-tabs" id="momentsTabs" data-aos="fade-up" data-aos-delay="100">
			<div class="moments-tabs__shell">
				<div class="moments-tabs__nav" role="tablist" aria-label="Hearing care services">
					<button type="button" class="moments-tabs__btn is-active" role="tab" aria-selected="true" aria-controls="moments-panel" id="tab-1" data-tab="0">Testing</button>
					<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="moments-panel" id="tab-2" data-tab="1">Servicing</button>
					<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="moments-panel" id="tab-3" data-tab="2">Speech Therapy</button>
					<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="moments-panel" id="tab-4" data-tab="3">Maintenance and Follow-Up Care</button>
				</div>

				<div class="moments-tabs__stage" id="moments-panel" role="tabpanel" aria-labelledby="tab-1">
					<div class="moments-tabs__card">
						<div class="moments-tabs__pattern" aria-hidden="true"></div>

						<div class="moments-tabs__layout">
							<div class="moments-tabs__copy-window">
								<div class="moments-tabs__copy-reel" id="momentsCopyReel">
									<article class="moments-tabs__slide">
										<div class="moments-tabs__heading">
											<span class="moments-tabs__icon" aria-hidden="true">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5.5 3.5h9A1.5 1.5 0 0 1 16 5v11.5a.5.5 0 0 1-.8.4L12.5 14H5.5A1.5 1.5 0 0 1 4 12.5v-7A1.5 1.5 0 0 1 5.5 3.5Z" stroke="#009C43" stroke-width="1.5"/><path d="M7 7.5h6M7 10.5h4" stroke="#009C43" stroke-width="1.5" stroke-linecap="round"/></svg>
											</span>
											<h3>Testing</h3>
										</div>
										<p>Comprehensive hearing and balance tests by expert audiologists using advanced diagnostic equipment and modern facilities. Our testing services include Pure tone audiometry, Impedance Audiometry, BERA, ASSR, OAE, and VEMP.
										</p>
										<a href="<?php echo BASE_URL; ?>contact" class="moments-tabs__cta">Know More</a>
									</article>

									<article class="moments-tabs__slide">
										<div class="moments-tabs__heading">
											<span class="moments-tabs__icon" aria-hidden="true">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 14.5 14.5 4M8 4h6.5V10.5" stroke="#009C43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.5 8v6.5H11" stroke="#009C43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
											</span>
											<h3>Servicing</h3>
										</div>
										<p>The hearing aid service lab is in-house and is completely state-of-the-art to guarantee quicker turnaround time, proper diagnosis, and good support whenever you require it.</p>
										<a href="<?php echo BASE_URL; ?>contact" class="moments-tabs__cta">Know More</a>
									</article>

									<article class="moments-tabs__slide">
										<div class="moments-tabs__heading">
											<span class="moments-tabs__icon" aria-hidden="true">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3.5 13.5c2.2-1.8 4.3-2.7 6.5-2.7s4.3.9 6.5 2.7" stroke="#009C43" stroke-width="1.5" stroke-linecap="round"/><path d="M5.5 10.2c1.5-1.1 2.9-1.7 4.5-1.7s3 .6 4.5 1.7M7.8 6.8c.7-.5 1.4-.8 2.2-.8s1.5.3 2.2.8" stroke="#009C43" stroke-width="1.5" stroke-linecap="round"/></svg>
											</span>
											<h3>Speech Therapy</h3>
										</div>
										<p>We offer compassionate speech therapy for children and adults, supporting speech clarity, confidence, and communication at every age.
										</p>
										<a href="<?php echo BASE_URL; ?>contact" class="moments-tabs__cta">Know More</a>
									</article>

									<article class="moments-tabs__slide">
										<div class="moments-tabs__heading">
											<span class="moments-tabs__icon" aria-hidden="true">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="7" stroke="#009C43" stroke-width="1.5"/><circle cx="10" cy="10" r="3.5" stroke="#009C43" stroke-width="1.5"/><circle cx="10" cy="10" r="1.2" fill="#009C43"/></svg>
											</span>
											<h3>Maintenance and Follow-Up Care</h3>
										</div>
										<p>Regular check-ups, professional cleaning, and ongoing guidance are always available for you and your family, because long-term care matters.</p>
										<a href="<?php echo BASE_URL; ?>contact" class="moments-tabs__cta">Know More</a>
									</article>
								</div>
							</div>

							<div class="moments-tabs__media-window">
								<div class="moments-tabs__media-reel" id="momentsMediaReel">
									<figure class="moments-tabs__media-slide">
										<img src="<?php echo BASE_URL; ?>assets/images/home/tab-testing.png" alt="Audiologist performing a hearing test" width="580" height="376" loading="lazy">
									</figure>
									<figure class="moments-tabs__media-slide">
										<img src="<?php echo BASE_URL; ?>assets/images/home/tab-servicing.png" alt="Hearing aid servicing in our lab" width="580" height="376" loading="lazy">
									</figure>
									<figure class="moments-tabs__media-slide">
										<img src="<?php echo BASE_URL; ?>assets/images/home/tab-speechup.png" alt="Speech therapy session" width="580" height="376" loading="lazy">
									</figure>
									<figure class="moments-tabs__media-slide">
										<img src="<?php echo BASE_URL; ?>assets/images/home/tab-maintenance.png" alt="Follow-up hearing care appointment" width="580" height="376" loading="lazy">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/home-moments-mobile.php'; ?>

<!-- ===== Journey Section ===== -->
<section class="journey-section section" aria-labelledby="journey-heading">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6 d-none d-md-block" data-aos="fade-right">
				<div class="journey-section__media rounded-xl overflow-hidden">
					<img src="<?php echo BASE_URL; ?>assets/images/home/a-journey-back-img.webp" alt="Patient experiencing improved hearing at Sounds Good" width="580" height="465" loading="lazy">
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<h2 id="journey-heading" class="section-title">A Journey Back to the Sounds You Love</h2>
				<hr class="journey-section__divider d-none d-md-block">
				<div class="journey-section__media rounded-xl overflow-hidden d-block d-md-none mb-4">
					<img src="<?php echo BASE_URL; ?>assets/images/home/a-journey-back-img.webp" alt="Patient experiencing improved hearing at Sounds Good" width="580" height="465" loading="lazy">
				</div>
				<p>At Sounds Good Hearing Care, we support people of all ages with thoughtful and reliable hearing care. Hearing loss can develop gradually or suddenly, and early attention makes a meaningful difference. Our experienced audiologists help identify the type and level of hearing concern with clarity and care.</p>
				<p>We offer a wide range of modern hearing aids, selected to match individual needs and comfort. Every solution is professionally fitted and supported with ongoing follow-up care. With centres across Tamil Nadu, quality hearing care is always close to you.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Home Visit CTA (desktop) ===== -->
<section class="home-visit d-none d-md-block" aria-labelledby="home-visit-heading">
	<div class="home-visit__bg" aria-hidden="true"></div>
	<div class="container home-visit__container">
		<div class="home-visit__content" data-aos="fade-up">
			<h2 id="home-visit-heading">Hearing Care at Your Doorstep</h2>
			<p>Book for Free Home Visit</p>
			<a href="tel:18002701996" class="btn btn-primary btn-pill home-visit__cta">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
					<path d="M11.5 3.5c2.4.3 4.3 2.2 4.6 4.6M11.5 1c3.8.4 6.8 3.4 7.2 7.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
					<path d="M8.4 10.9c1.7 1.7 3.7 2.8 4.5 2.3l.9-.6c.4-.3 1-.2 1.3.2l1.2 1.6c.3.4.3 1.1-.2 1.4-1.1.8-3.3 1-5.9-.6-3-1.9-5-5.1-4.7-6.5.1-.5.5-.8 1-.7l1.8.4c.5.1.8.6.7 1.1l-.3 1.2c-.1.4.1.8.4 1z" fill="currentColor"/>
				</svg>
				<span>1800-270-1996</span>
			</a>
		</div>
	</div>
</section>

<?php include 'includes/home-visit-mobile.php'; ?>

<!-- ===== Testimonials (desktop) ===== -->
<section class="testimonials-section section d-none d-lg-block" aria-labelledby="testimonials-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Our Testimonials</span>
			<h2 id="testimonials-heading" class="section-title">Voices of Happy Ears</h2>
		</div>

		<div class="testimonials" id="testimonialsCarousel" data-aos="fade-up" data-aos-delay="100">
			<div class="testimonials__viewport">
				<div class="testimonials__track">
					<!-- Slide 1 -->
					<div class="testimonials__slide is-active" data-slide="0">
						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“The audiologists took time to understand my lifestyle before suggesting a hearing aid. That personal touch mattered.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>

						<div class="testimonials__video-wrap">
							<video
								class="testimonials__video"
								playsinline
								loop
								preload="none"
								poster="<?php echo BASE_URL; ?>assets/images/home/video-thumbnail.png"
								data-src="<?php echo BASE_URL; ?>assets/videos/testi-video1.mp4"
							></video>
							<button type="button" class="testimonials__mute-btn" aria-label="Mute video" aria-pressed="false">
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--on" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M15.5 8.5a5 5 0 0 1 0 7M18.5 6a8.5 8.5 0 0 1 0 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--off" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m16 9 6 6M22 9l-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
							</button>
						</div>

						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“My father’s hearing improved so much after coming here. The follow-up support made all the difference. Thanks to the team.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>
					</div>

					<!-- Slide 2 -->
					<div class="testimonials__slide" data-slide="1">
						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“I can finally hear my grandchildren clearly again. The team was patient, kind, and explained everything so well.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>

						<div class="testimonials__video-wrap">
							<video
								class="testimonials__video"
								playsinline
								loop
								preload="none"
								poster="<?php echo BASE_URL; ?>assets/images/home/video-thumbnail.png"
								data-src="<?php echo BASE_URL; ?>assets/videos/testi-video2.mp4"
							></video>
							<button type="button" class="testimonials__mute-btn" aria-label="Mute video" aria-pressed="false">
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--on" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M15.5 8.5a5 5 0 0 1 0 7M18.5 6a8.5 8.5 0 0 1 0 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--off" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m16 9 6 6M22 9l-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
							</button>
						</div>

						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“Professional, patient, and thorough. The audiologist explained every step and the follow-up care has been excellent.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>
					</div>

					<!-- Slide 3 -->
					<div class="testimonials__slide" data-slide="2">
						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“The home visit service was a blessing for my mother. Highly recommend Sounds Good Hearing Care.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>

						<div class="testimonials__video-wrap">
							<video
								class="testimonials__video"
								playsinline
								loop
								preload="none"
								poster="<?php echo BASE_URL; ?>assets/images/home/video-thumbnail.png"
								data-src="<?php echo BASE_URL; ?>assets/videos/testi-video3.mp4"
							></video>
							<button type="button" class="testimonials__mute-btn" aria-label="Mute video" aria-pressed="false">
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--on" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M15.5 8.5a5 5 0 0 1 0 7M18.5 6a8.5 8.5 0 0 1 0 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
								<span class="testimonials__mute-btn-icon testimonials__mute-btn-icon--off" aria-hidden="true">
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M11 5 6 9H3v6h3l5 4V5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="m16 9 6 6M22 9l-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
								</span>
							</button>
						</div>

						<article class="testimonials__card">
							<div class="testimonials__stars" aria-label="5 out of 5 stars">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="#FFC107" aria-hidden="true"><path d="M9 1.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7L9 12.2l-4.2 2.3.8-4.7L2.2 6.5l4.7-.7L9 1.5z"/></svg>
							</div>
							<p>“After years of struggling to follow conversations, Sounds Good helped me find the right hearing aid.”</p>
							<footer>
								<strong>Name</strong>
								<span>Root Canal</span>
							</footer>
						</article>
					</div>
				</div>
			</div>

			<div class="testimonials__controls about-carousel__controls" role="group" aria-label="Testimonials navigation">
				<button type="button" class="about-carousel__btn about-carousel__btn--prev" id="testimonialsPrev" aria-label="Previous testimonials" disabled>
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M12.5 4.5 7 10l5.5 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
				<span class="about-carousel__status" id="testimonialsStatus" aria-live="polite">1 of 3</span>
				<button type="button" class="about-carousel__btn about-carousel__btn--next" id="testimonialsNext" aria-label="Next testimonials">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7.5 4.5 13 10l-5.5 5.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/home-testimonials-mobile.php'; ?>

<!-- ===== Social / Instagram ===== -->
<section class="social-section section" aria-labelledby="social-heading" id="socialSection">
	<div class="container">
		<div class="social-section__header text-center" data-aos="fade-up">
			<span class="social-section__label">Our Social Space</span>
			<h2 id="social-heading" class="social-section__title">Stories That Bring Us Together</h2>
		</div>

		<?php $ig_profile = 'https://www.instagram.com/soundsgoodhearingcare/'; ?>

		<div class="social-section__profile" data-aos="fade-up">
			<div class="social-section__profile-main">
				<div class="social-section__avatar">
					<img src="<?php echo BASE_URL; ?>assets/images/logo/sounds-good-logo.svg" alt="" width="68" height="38" loading="lazy">
				</div>
				<div class="social-section__profile-copy">
					<p class="social-section__profile-name">Sounds Good Hearing Care</p>
					<div class="social-section__profile-meta">
						<span>3,881 followers</span>
						<span>639 posts</span>
					</div>
				</div>
			</div>
			<a href="<?php echo htmlspecialchars($ig_profile); ?>" class="social-section__ig-btn" target="_blank" rel="noopener noreferrer" aria-label="View on Instagram">
				<span class="social-section__ig-btn-text">View in Instagram</span>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="1.5"/>
					<circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/>
					<circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
				</svg>
			</a>
		</div>

		<div class="social-section__embed" data-aos="fade-up">
			<iframe
				src="https://www.instagram.com/soundsgoodhearingcare/embed"
				title="Sounds Good Hearing Care on Instagram"
				width="100%"
				height="780"
				loading="lazy"
				referrerpolicy="strict-origin-when-cross-origin"
				allowtransparency="true"
			></iframe>
		</div>
	</div>
</section>

<!-- ===== Trusted Brands ===== -->
<section class="brands-section section" aria-labelledby="brands-heading">
	<div class="container">
		<div class="brands-section__card" data-aos="fade-up">
			<img class="brands-section__element" src="<?php echo BASE_URL; ?>assets/images/home/brand-element.png" alt="" width="225" height="222" loading="lazy" aria-hidden="true">

			<h2 id="brands-heading" class="brands-section__title">Trusted Brands We Work With</h2>

			<div class="brands-section__logos">
				<div class="brands-section__row">
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo1.svg" alt="Signia" width="147" height="81" loading="lazy">
					</div>
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo2.svg" alt="Phonak" width="147" height="81" loading="lazy">
					</div>
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo3.svg" alt="Oticon" width="147" height="81" loading="lazy">
					</div>
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo4.svg" alt="Unitron" width="147" height="81" loading="lazy">
					</div>
				</div>
				<div class="brands-section__row brands-section__row--bottom">
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo5.svg" alt="Hansaton" width="147" height="81" loading="lazy">
					</div>
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo6.svg" alt="ReSound" width="147" height="81" loading="lazy">
					</div>
					<div class="brands-section__logo">
						<img src="<?php echo BASE_URL; ?>assets/images/home/band-logo7.svg" alt="Novax" width="147" height="81" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Contact ===== -->
<section class="contact-section section" id="contact" aria-labelledby="contact-heading">
	<div class="container">
		<div class="contact-section__inner" data-aos="fade-up">
			<h2 id="contact-heading" class="contact-section__title">Contact us</h2>

			<form class="contact-form" action="<?php echo BASE_URL; ?>contact" method="post">
				<div class="contact-form__grid">
					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_name">Name</label>
						<input class="contact-form__input" type="text" id="contact_name" name="name" placeholder="Enter Name" required>
					</div>
					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_phone">Phone</label>
						<input class="contact-form__input" type="tel" id="contact_phone" name="phone" placeholder="Enter Phone Number" required>
					</div>

					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_email">Email</label>
						<input class="contact-form__input" type="email" id="contact_email" name="email" placeholder="Enter Email" required>
					</div>
					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_branch">Our Branches</label>
						<select class="contact-form__input contact-form__select" id="contact_branch" name="branch" required>
							<option value="" disabled selected>Select Branch</option>
							<option value="madurai">Madurai - East Veli Street</option>
							<option value="madurai-anna-nagar">Madurai - Anna Nagar</option>
							<option value="theni">Theni</option>
							<option value="coimbatore">Coimbatore</option>
							<option value="tirupur">Tirupur</option>
							<option value="ramanathapuram">Ramanathapuram</option>
							<option value="tuticorin">Tuticorin</option>
							<option value="tirunelveli">Tirunelveli</option>
							<option value="nagercoil">Nagercoil</option>
						</select>
					</div>

					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_location">Patient Location</label>
						<input class="contact-form__input" type="text" id="contact_location" name="patient_location" placeholder="Enter Patient Location">
					</div>
					<div class="contact-form__field">
						<label class="contact-form__label" for="contact_for_whom">Hearing aids for whom?</label>
						<input class="contact-form__input" type="text" id="contact_for_whom" name="for_whom" placeholder="Type">
					</div>

					<div class="contact-form__field contact-form__field--full">
						<label class="contact-form__label" for="contact_message">Your message</label>
						<textarea class="contact-form__input contact-form__textarea" id="contact_message" name="message" rows="4" placeholder="Type..."></textarea>
					</div>
				</div>

				<div class="contact-form__actions">
					<button type="submit" class="btn btn-primary btn-pill contact-form__submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</section>

<!-- ----cta-map--- -->
<?php include "includes/footer-location-cta.php"; ?>

<?php include "includes/footer.php"; ?>

