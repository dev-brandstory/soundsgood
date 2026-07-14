<?php $title = "About Sounds Good Hearing Care — Our Story & Philosophy"; ?>
<?php $description = "Learn about Sounds Good Hearing Care — Tamil Nadu’s trusted hearing care network since 1996. Our story, philosophy, and commitment to bringing life back to every sound."; ?>
<?php $canonical = "http://localhost/soundsgood/about.php"; ?>
<?php $keywords = "about Sounds Good, hearing care Tamil Nadu, audiologist, hearing aids Madurai, Sounds Good story"; ?>
<?php $pageclass = "aboutPage"; ?>
<?php include "includes/header.php"; ?>

<!-- ===== About Page Banner ===== -->
<section class="hero-banner section-none" aria-label="About Sounds Good">
	<div class="hero-banner__viewport">
		<div class="hero-banner__slider">
			<article class="hero-banner__slide is-active" data-slide="0">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo BASE_URL; ?>assets/images/about/about-hero-mobile.webp">
					<source media="(max-width: 1024px)" srcset="<?php echo BASE_URL; ?>assets/images/about/about-hero-tab.webp">
					<img class="hero-banner__bg" src="<?php echo BASE_URL; ?>assets/images/about/about-hero.webp" alt="Three friends enjoying a conversation outdoors" width="1440" height="759" loading="eager">
				</picture>
				<div class="hero-banner__overlay"></div>
				<div class="hero-banner__pins" aria-hidden="true">
					<img class="hero-banner__pin hero-banner__pin--left" src="<?php echo BASE_URL; ?>assets/images/icons/hero-pin.svg" alt="" width="78" height="104">
					<img class="hero-banner__pin hero-banner__pin--right" src="<?php echo BASE_URL; ?>assets/images/icons/hero-pin.svg" alt="" width="49" height="65">
				</div>
				<div class="container">
					<div class="hero-banner__content" data-aos="fade-up">
						<div class="hero-banner__badge">
							<img src="<?php echo BASE_URL; ?>assets/images/home/trusted-people.svg" alt="" width="74" height="28" aria-hidden="true">
							<span>Trusted by 5k+ people</span>
						</div>
						<h1>About Sounds Good</h1>
						<a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-pill">Begin Your Journey</a>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- ===== Bringing Life Back — Intro + Gallery Carousel ===== -->
<section class="about-bringing section bg-pale" aria-labelledby="bringing-heading">
	<div class="container">
		<div class="about-bringing__intro" data-aos="fade-up">
			<h2 id="bringing-heading" class="section-title">Bringing Life Back to Every Sound</h2>
			<p>What began as a humble vision has grown into one of Tamil Nadu's most trusted hearing care networks. From Madurai, Tirunelveli, Tirupur, Coimbatore, Theni, Nagercoil, Tuticorin to Ramanathapuram, we have expanded our reach while maintaining the warmth and familiarity of Indian hospitality.</p>
			<p>Our goal has always been more than providing hearing aids - it's about bringing life back to every sound. By integrating cutting-edge hearing technology with personalised care, we ensure no one feels unseen, unheard, or undervalued.</p>
		</div>

		<div class="about-carousel" data-aos="fade-up" data-aos-delay="100" id="aboutCarousel">
			<div class="about-carousel__track" id="aboutCarouselTrack">
				<div class="about-carousel__grid" id="aboutCarouselGrid">
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/clinic-exterior.webp" alt="Sounds Good Hearing Care clinic storefront" width="406" height="290" loading="lazy">
					</figure>
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-2.webp" alt="Sounds Good clinic waiting and reception area" width="406" height="290" loading="lazy">
					</figure>
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-6.webp" alt="Hearing test booth at Sounds Good Hearing Care" width="406" height="290" loading="lazy">
					</figure>
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-8.webp" alt="Sounds Good Hearing Care centre interior" width="406" height="290" loading="lazy">
					</figure>
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-7.webp" alt="Patient consultation at Sounds Good" width="406" height="290" loading="lazy">
					</figure>
					<figure class="about-carousel__item">
						<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-4.webp" alt="Modern hearing care facility at Sounds Good" width="406" height="290" loading="lazy">
					</figure>
				</div>
			</div>

			<div class="about-carousel__controls" role="group" aria-label="Gallery navigation">
				<button type="button" class="about-carousel__btn about-carousel__btn--prev" id="aboutCarouselPrev" aria-label="Previous gallery images" disabled>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
				<span class="about-carousel__status" id="aboutCarouselStatus" aria-live="polite">1 of 2</span>
				<button type="button" class="about-carousel__btn about-carousel__btn--next" id="aboutCarouselNext" aria-label="Next gallery images">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</button>
			</div>
		</div>
	</div>
</section>

<!-- ===== Feature Image ===== -->
<section class="about-feature section" aria-label="Hearing care in action">
	<div class="container">
		<div class="rounded-xl overflow-hidden" data-aos="fade-up">
			<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-1.webp" alt="Audiologist providing a hearing examination at Sounds Good" width="1240" height="550" loading="lazy">
		</div>
	</div>
</section>

<!-- ===== Our Story & Philosophy ===== -->
<section class="about-story section" aria-labelledby="story-heading">
	<div class="container">
		<div class="about-story__block" data-aos="fade-up">
			<div class="row g-4 g-lg-5">
				<div class="col-lg-3">
					<h2 id="story-heading" class="about-story__title">Our Story</h2>
				</div>
				<div class="col-lg-9">
					<p class="about-story__text">What began as a humble vision has grown into one of Tamil Nadu’s most trusted hearing care networks. From Madurai, Tirunelveli, Tirupur, Coimbatore, Theni, Nagercoil, Tuticorin to Ramanathapuram, we have expanded our reach while maintaining the warmth and familiarity of Indian hospitality. Our goal has always been more than providing hearing aids – it’s about bringing life back to every sound. By integrating cutting-edge hearing technology with personalised care, we ensure no one feels unseen, unheard, or undervalued.</p>
				</div>
			</div>
		</div>

		<hr class="about-story__divider" aria-hidden="true">

		<div class="about-story__block" data-aos="fade-up" data-aos-delay="50">
			<div class="row g-4 g-lg-5">
				<div class="col-lg-3">
					<h2 id="philosophy-heading" class="about-story__title">Our Philosophy</h2>
				</div>
				<div class="col-lg-9">
					<p class="about-story__text">At Sounds Good, people come first. Hearing loss can impact daily life, relationships, and self-confidence. Our expert audiologists provide thorough assessments and recommend personalised solutions tailored to each individual’s needs.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Don’t Miss a Beat — Get in Touch ===== -->
<section class="about-touch section bg-pale" aria-labelledby="touch-heading">
	<div class="container">
		<div class="section-header text-center" data-aos="fade-up">
			<h2 id="touch-heading" class="section-title">Don’t Miss a Beat – Get in Touch</h2>
			<p class="section-desc mx-auto">Experience care that listens, understands, and stays with you. Our team is ready to help you choose the right solution for your hearing needs.</p>
		</div>

		<div class="about-touch__gallery" data-aos="fade-up" data-aos-delay="100">
			<figure class="about-touch__item about-touch__item--side">
				<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-3.webp" alt="Hearing assessment room at Sounds Good" width="364" height="367" loading="lazy">
			</figure>
			<figure class="about-touch__item about-touch__item--center">
				<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-5.webp" alt="Family sharing a warm moment together" width="364" height="401" loading="lazy">
			</figure>
			<figure class="about-touch__item about-touch__item--side">
				<img src="<?php echo BASE_URL; ?>assets/images/about/gallery-2.webp" alt="Welcoming Sounds Good clinic interior" width="364" height="367" loading="lazy">
			</figure>
		</div>

		<hr class="about-touch__divider" aria-hidden="true">

		<p class="about-touch__footer-text text-center" data-aos="fade-up">Begin your journey today, and experience care that listens, understands, and stays with you.</p>
	</div>
</section>

<!-- ===== Contact Us CTA ===== -->
<section class="about-contact section" aria-labelledby="about-contact-heading">
	<div class="container">
		<div class="about-contact__inner" data-aos="fade-up">
			<h2 id="about-contact-heading" class="about-contact__title">Contact us</h2>

			<form class="about-contact__form" action="<?php echo BASE_URL; ?>contact.php" method="post">
				<div class="row g-4">
					<div class="col-md-6">
						<label class="about-contact__label" for="about_name">Name</label>
						<input class="about-contact__input" type="text" id="about_name" name="name" placeholder="Enter Name" required autocomplete="name">
					</div>
					<div class="col-md-6">
						<label class="about-contact__label" for="about_phone">Phone</label>
						<input class="about-contact__input" type="tel" id="about_phone" name="phone" placeholder="Enter Phone Number" required autocomplete="tel">
					</div>
					<div class="col-md-6">
						<label class="about-contact__label" for="about_email">Email</label>
						<input class="about-contact__input" type="email" id="about_email" name="email" placeholder="Enter Email" required autocomplete="email">
					</div>
					<div class="col-md-6">
						<label class="about-contact__label" for="about_branch">Our Branches</label>
						<select class="about-contact__input about-contact__select" id="about_branch" name="branch" required>
							<option value="" disabled selected>Select Branch</option>
							<option value="madurai">Madurai</option>
							<option value="chennai">Chennai</option>
							<option value="coimbatore">Coimbatore</option>
							<option value="trichy">Trichy</option>
							<option value="salem">Salem</option>
							<option value="tirunelveli">Tirunelveli</option>
							<option value="erode">Erode</option>
							<option value="vellore">Vellore</option>
							<option value="thanjavur">Thanjavur</option>
						</select>
					</div>
					<div class="col-md-6">
						<label class="about-contact__label" for="about_location">Patient Location</label>
						<input class="about-contact__input" type="text" id="about_location" name="patient_location" placeholder="Enter Patient Location" required>
					</div>
					<div class="col-md-6">
						<label class="about-contact__label" for="about_for_whom">Hearing aids for whom?</label>
						<input class="about-contact__input" type="text" id="about_for_whom" name="for_whom" placeholder="Type" required>
					</div>
					<div class="col-12">
						<label class="about-contact__label" for="about_message">Your message</label>
						<textarea class="about-contact__input about-contact__textarea" id="about_message" name="message" rows="4" placeholder="Type..."></textarea>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-primary btn-pill about-contact__submit">Book Your Hearing Consultation</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include "includes/footer-location-cta.php"; ?>

<?php include "includes/footer.php"; ?>
