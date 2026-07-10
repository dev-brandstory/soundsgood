<?php $title = "Sounds Good Hearing Care — Expert Hearing Solutions"; ?>
<?php $description = "Sounds Good Hearing Care offers expert hearing assessments, modern hearing aids, and lifelong support across Tamil Nadu. Trusted since 1996."; ?>
<?php $canonical = "http://localhost/soundsgood/"; ?>
<?php $keywords = "hearing care, hearing aids, audiologist, hearing loss, Sounds Good"; ?>
<?php $pageclass = "homePage"; ?>
<?php include "includes/header.php"; ?>

<!-- ===== Hero Banner ===== -->
<section class="hero-banner section-none" aria-label="Hero banner">
	<div class="hero-banner__slider" id="heroSlider">
		<article class="hero-banner__slide is-active" data-slide="0">
			<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-1.jpg" alt="Family enjoying outdoor time together" width="1440" height="759" loading="eager">
			<div class="hero-banner__overlay"></div>
			<div class="container">
				<div class="hero-banner__content" data-aos="fade-up">
					<div class="hero-banner__badge">
						<img src="<?php echo BASE_URL; ?>assets/images/icons/hero-avatars.svg" alt="" width="74" height="28" aria-hidden="true">
						<span>Trusted by 5k+ people</span>
					</div>
					<h1>Get Your Life Back</h1>
					<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-pill">Begin Your Journey</a>
				</div>
			</div>
		</article>
		<article class="hero-banner__slide" data-slide="1">
			<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-2.jpg" alt="Senior couple sharing a joyful moment" width="1440" height="759" loading="lazy">
			<div class="hero-banner__overlay"></div>
			<div class="container">
				<div class="hero-banner__content" data-aos="fade-up">
					<div class="hero-banner__badge">
						<img src="<?php echo BASE_URL; ?>assets/images/icons/hero-avatars.svg" alt="" width="74" height="28" aria-hidden="true">
						<span>Trusted by 5k+ people</span>
					</div>
					<h1>Decades of Care. Moments Made Clear.</h1>
					<a href="<?php echo BASE_URL; ?>about.php" class="btn btn-primary btn-pill">Trust Our Experience</a>
				</div>
			</div>
		</article>
		<article class="hero-banner__slide" data-slide="2">
			<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-3.jpg" alt="Person receiving personalized hearing care" width="1440" height="759" loading="lazy">
			<div class="hero-banner__overlay"></div>
			<div class="container">
				<div class="hero-banner__content" data-aos="fade-up">
					<div class="hero-banner__badge">
						<img src="<?php echo BASE_URL; ?>assets/images/icons/hero-avatars.svg" alt="" width="74" height="28" aria-hidden="true">
						<span>Trusted by 5k+ people</span>
					</div>
					<h1>Thoughtful Solutions, Just for You</h1>
					<a href="<?php echo BASE_URL; ?>hearing-aid.php" class="btn btn-primary btn-pill">Find Your Solution</a>
				</div>
			</div>
		</article>
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
				<img src="<?php echo BASE_URL; ?>assets/images/home/about-video.jpg" alt="Audiologist consulting with a patient at Sounds Good Hearing Care" width="1240" height="520" loading="lazy">
			</div>
		</div>
	</div>
</section>

<!-- ===== Stats Grid ===== -->
<section class="stats-section section" aria-labelledby="stats-heading">
	<div class="container">
		<h2 id="stats-heading" class="sr-only">Our achievements</h2>
		<div class="stats-grid">
			<article class="stat-card stat-card--customers" data-aos="fade-up">
				<p class="stat-card__number">3 Lakh+</p>
				<p class="stat-card__label">Happy Customers</p>
				<div class="stat-card__bubble stat-card__bubble--left">Hearing better now. Thank you!</div>
				<div class="stat-card__bubble stat-card__bubble--right">Happy to support you.</div>
			</article>
			<article class="stat-card stat-card--trusted" data-aos="fade-up" data-aos-delay="50">
				<p class="stat-card__number">1996</p>
				<p class="stat-card__label">Trusted Since</p>
				<div class="stat-card__badge">Trusted since 1996</div>
			</article>
			<article class="stat-card stat-card--experience" data-aos="fade-up" data-aos-delay="100">
				<p class="stat-card__number">30+</p>
				<p class="stat-card__label">Years of Experience</p>
			</article>
			<article class="stat-card stat-card--audiologists" data-aos="fade-up" data-aos-delay="150">
				<p class="stat-card__title">Well-Trained Audiologists</p>
				<p class="stat-card__sub">10+ Experienced in this field</p>
			</article>
			<article class="stat-card stat-card--branches" data-aos="fade-up" data-aos-delay="200">
				<p class="stat-card__number">12+</p>
				<p class="stat-card__label">Branches</p>
				<div class="stat-card__map">
					<p class="stat-card__map-title">Sounds Good Branches</p>
					<p class="stat-card__map-sub">Open Mon to Sat</p>
					<a href="<?php echo BASE_URL; ?>contact.php" class="stat-card__map-link">View All Location</a>
				</div>
			</article>
			<article class="stat-card stat-card--cities" data-aos="fade-up" data-aos-delay="250">
				<p class="stat-card__number">9+</p>
				<p class="stat-card__label">Cities</p>
				<div class="stat-card__tags">
					<span>Chennai</span><span>Madurai</span><span>Coimbatore</span>
					<span>Trichy</span><span>Salem</span><span>Tirunelveli</span>
					<span>Erode</span><span>Vellore</span><span>Thanjavur</span>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- ===== Why Choose Us — Tabs ===== -->
<section class="moments-section section bg-pale" aria-labelledby="moments-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Why Choose us</span>
			<h2 id="moments-heading" class="section-title">Your Moments Matter</h2>
		</div>
		<div class="moments-tabs" data-aos="fade-up" data-aos-delay="100">
			<div class="moments-tabs__nav" role="tablist" aria-label="Hearing care services">
				<button type="button" class="moments-tabs__btn is-active" role="tab" aria-selected="true" aria-controls="tab-panel-1" id="tab-1" data-tab="1">Family Gatherings</button>
				<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="tab-panel-2" id="tab-2" data-tab="2">Work &amp; Meetings</button>
				<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="tab-panel-3" id="tab-3" data-tab="3">Outdoor Life</button>
				<button type="button" class="moments-tabs__btn" role="tab" aria-selected="false" aria-controls="tab-panel-4" id="tab-4" data-tab="4">Daily Conversations</button>
			</div>
			<div class="moments-tabs__panels">
				<div class="moments-tabs__panel is-active" role="tabpanel" id="tab-panel-1" aria-labelledby="tab-1">
					<div class="row align-items-center g-4">
						<div class="col-lg-6">
							<h3>Stay Connected With Loved Ones</h3>
							<p>Hearing clearly during family meals, celebrations, and everyday conversations helps you stay emotionally connected. Our solutions are tuned for real-life listening environments.</p>
						</div>
						<div class="col-lg-6">
							<img class="rounded-xl w-full" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-1.jpg" alt="Family gathering with clear conversation" width="600" height="400" loading="lazy">
						</div>
					</div>
				</div>
				<div class="moments-tabs__panel" role="tabpanel" id="tab-panel-2" aria-labelledby="tab-2" hidden>
					<div class="row align-items-center g-4">
						<div class="col-lg-6">
							<h3>Confidence in Every Meeting</h3>
							<p>From video calls to in-person discussions, we help you hear speech clearly so you can participate fully in professional and social settings.</p>
						</div>
						<div class="col-lg-6">
							<img class="rounded-xl w-full" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-2.jpg" alt="Professional conversation with confidence" width="600" height="400" loading="lazy">
						</div>
					</div>
				</div>
				<div class="moments-tabs__panel" role="tabpanel" id="tab-panel-3" aria-labelledby="tab-3" hidden>
					<div class="row align-items-center g-4">
						<div class="col-lg-6">
							<h3>Enjoy Life Outdoors</h3>
							<p>Whether at a park, event, or travel, modern hearing technology adapts to changing environments so you never miss the sounds that matter.</p>
						</div>
						<div class="col-lg-6">
							<img class="rounded-xl w-full" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-3.jpg" alt="Enjoying outdoor activities with better hearing" width="600" height="400" loading="lazy">
						</div>
					</div>
				</div>
				<div class="moments-tabs__panel" role="tabpanel" id="tab-panel-4" aria-labelledby="tab-4" hidden>
					<div class="row align-items-center g-4">
						<div class="col-lg-6">
							<h3>Everyday Clarity</h3>
							<p>Phone calls, TV, and one-on-one chats become easier with professionally fitted hearing aids and ongoing audiologist support.</p>
						</div>
						<div class="col-lg-6">
							<img class="rounded-xl w-full" src="<?php echo BASE_URL; ?>assets/images/home/journey.jpg" alt="Daily conversations made clearer" width="600" height="400" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Journey Section ===== -->
<section class="journey-section section" aria-labelledby="journey-heading">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="journey-section__media rounded-xl overflow-hidden">
					<img src="<?php echo BASE_URL; ?>assets/images/home/journey.jpg" alt="Patient experiencing improved hearing at Sounds Good" width="580" height="465" loading="lazy">
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<h2 id="journey-heading" class="section-title">A Journey Back to the Sounds You Love</h2>
				<hr class="journey-section__divider">
				<p>At Sounds Good Hearing Care, we support people of all ages with thoughtful and reliable hearing care. Hearing loss can develop gradually or suddenly, and early attention makes a meaningful difference. Our experienced audiologists help identify the type and level of hearing concern with clarity and care.</p>
				<p>We offer a wide range of modern hearing aids, selected to match individual needs and comfort. Every solution is professionally fitted and supported with ongoing follow-up care. With centres across Tamil Nadu, quality hearing care is always close to you.</p>
			</div>
		</div>
	</div>
</section>

<!-- ===== Home Visit CTA ===== -->
<section class="home-visit section bg-secondary-pale" aria-labelledby="home-visit-heading">
	<div class="container">
		<div class="row align-items-center g-4">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="home-visit__media rounded-xl overflow-hidden">
					<img src="<?php echo BASE_URL; ?>assets/images/home/about-video.jpg" alt="Hearing care professional providing home visit support" width="580" height="400" loading="lazy">
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<h2 id="home-visit-heading" class="section-title">Hearing Care at Your Doorstep</h2>
				<p class="home-visit__help">We're Here to Help: <a href="tel:18002701996">1800-270-1996</a></p>
				<p class="text-muted-secondary">Book for Free Home Visit</p>
				<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-pill">Book Your Free Home Visit</a>
			</div>
		</div>
	</div>
</section>

<!-- ===== Testimonials ===== -->
<section class="testimonials-section section" aria-labelledby="testimonials-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Our Testimonials</span>
			<h2 id="testimonials-heading" class="section-title">What Our Patients Say</h2>
		</div>
		<div class="row g-4">
			<div class="col-md-4" data-aos="fade-up">
				<article class="card card-testimonial h-full">
					<div class="card-body">
						<p class="text-italic">"After years of struggling to follow conversations, Sounds Good helped me find the right hearing aid. I can finally hear my grandchildren clearly."</p>
					</div>
					<footer class="card-heading card_footer mb-0">
						<div>
							<p>R. Lakshmi</p>
							<span>Madurai</span>
						</div>
					</footer>
				</article>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
				<article class="card card-testimonial h-full">
					<div class="card-body">
						<p class="text-italic">"Professional, patient, and thorough. The audiologist explained every step and the follow-up care has been excellent."</p>
					</div>
					<footer class="card-heading card_footer mb-0">
						<div>
							<p>K. Venkatesh</p>
							<span>Chennai</span>
						</div>
					</footer>
				</article>
			</div>
			<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
				<article class="card card-testimonial h-full">
					<div class="card-body">
						<p class="text-italic">"The home visit service was a blessing for my father. Caring team, transparent pricing, and real results."</p>
					</div>
					<footer class="card-heading card_footer mb-0">
						<div>
							<p>Priya S</p>
							<span>Coimbatore</span>
						</div>
					</footer>
				</article>
			</div>
		</div>
	</div>
</section>

<!-- ===== Social / Instagram ===== -->
<section class="social-section section bg-pale" aria-labelledby="social-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<span class="section-label">Our Social Space</span>
			<h2 id="social-heading" class="section-title">Stories That Bring Us Together</h2>
		</div>
		<div class="social-section__profile card" data-aos="fade-up">
			<div class="flex items-center gap-4">
				<div class="social-section__avatar" aria-hidden="true">SG</div>
				<div>
					<p class="font-semibold">Sounds Good Hearing Care</p>
					<p class="text-sm text-muted-secondary">Trusted hearing care since 1996</p>
				</div>
			</div>
			<a href="https://instagram.com" class="btn btn-outline btn-pill btn-sm" target="_blank" rel="noopener noreferrer">View on Instagram</a>
		</div>
		<div class="social-section__grid" data-aos="fade-up" data-aos-delay="100">
			<img class="rounded-lg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-1.jpg" alt="Community moment shared on Instagram" width="271" height="271" loading="lazy">
			<img class="rounded-lg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-2.jpg" alt="Patient success story on social media" width="271" height="271" loading="lazy">
			<img class="rounded-lg" src="<?php echo BASE_URL; ?>assets/images/home/journey.jpg" alt="Hearing care awareness post" width="271" height="271" loading="lazy">
			<img class="rounded-lg" src="<?php echo BASE_URL; ?>assets/images/home/hero-slide-3.jpg" alt="Sounds Good team at community event" width="271" height="271" loading="lazy">
		</div>
	</div>
</section>

<!-- ===== Contact ===== -->
<section class="contact-section section" id="contact" aria-labelledby="contact-heading">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-5" data-aos="fade-right">
				<h2 id="contact-heading" class="section-title">Contact us</h2>
				<p class="text-muted-secondary">Book your hearing consultation with our expert audiologists.</p>
				<ul class="contact-section__info">
					<li><a href="tel:18002701996">1800 270 1996</a></li>
					<li><a href="tel:8489978689">8489978689</a></li>
					<li><a href="mailto:hello@soundsgood.in">hello@soundsgood.in</a></li>
				</ul>
			</div>
			<div class="col-lg-7" data-aos="fade-left">
				<form class="contact-form" action="<?php echo BASE_URL; ?>contact.php" method="post">
					<div class="row g-3">
						<div class="col-md-6">
							<label class="form-label-static" for="first_name">First Name</label>
							<input class="form-control-bordered" type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
						</div>
						<div class="col-md-6">
							<label class="form-label-static" for="last_name">Last Name</label>
							<input class="form-control-bordered" type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
						</div>
						<div class="col-12">
							<label class="form-label-static" for="email">Email</label>
							<input class="form-control-bordered" type="email" id="email" name="email" placeholder="Enter your email" required>
						</div>
						<div class="col-12">
							<label class="form-label-static" for="phone">Phone</label>
							<input class="form-control-bordered" type="tel" id="phone" name="phone" placeholder="Enter your phone number">
						</div>
						<div class="col-12">
							<label class="form-label-static" for="message">Message</label>
							<textarea class="form-control-bordered" id="message" name="message" rows="4" placeholder="Tell us how we can help"></textarea>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-pill">Book Your Hearing Consultation</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include "includes/footer.php"; ?>
