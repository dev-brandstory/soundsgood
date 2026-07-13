<?php $title = "Contact Us — Book a Hearing Consultation | Sounds Good Hearing Care"; ?>
<?php $description = "Book a clinic visit or doorstep consultation with Sounds Good Hearing Care. Find your nearest branch across Tamil Nadu and start your journey to better hearing."; ?>
<?php $canonical = "http://localhost/soundsgood/contact.php"; ?>
<?php $keywords = "contact Sounds Good, book hearing appointment, hearing clinic Madurai, doorstep consultation, hearing care Tamil Nadu"; ?>
<?php $pageclass = "contactPage"; ?>
<?php
$branch_param = isset($_GET['branch']) ? strtolower(trim($_GET['branch'])) : '';
$branches = [
	[
		'id' => 'madurai-east-veli',
		'label' => 'Madurai - East Veli Street',
		'slug' => 'madurai',
		'address' => 'No. 42, East Veli Street, Near Periyar Bus Stand, Madurai, Tamil Nadu 625001',
		'phones' => ['0452-2345678', '98765 43210'],
		'map' => 'https://www.google.com/maps?q=East+Veli+Street+Madurai&output=embed',
	],
	[
		'id' => 'madurai-anna-nagar',
		'label' => 'Madurai - Anna Nagar',
		'slug' => 'madurai-anna-nagar',
		'address' => 'Anna Nagar Main Road, Madurai, Tamil Nadu 625020',
		'phones' => ['0452-2456789', '98765 43211'],
		'map' => 'https://www.google.com/maps?q=Anna+Nagar+Madurai&output=embed',
	],
	[
		'id' => 'theni',
		'label' => 'Theni',
		'slug' => 'theni',
		'address' => 'Near Bus Stand, Theni, Tamil Nadu 625531',
		'phones' => ['04546-234567', '98765 43212'],
		'map' => 'https://www.google.com/maps?q=Theni+Tamil+Nadu&output=embed',
	],
	[
		'id' => 'coimbatore',
		'label' => 'Coimbatore',
		'slug' => 'coimbatore',
		'address' => 'DB Road, R.S. Puram, Coimbatore, Tamil Nadu 641002',
		'phones' => ['0422-2345678', '98765 43213'],
		'map' => 'https://www.google.com/maps?q=RS+Puram+Coimbatore&output=embed',
	],
	[
		'id' => 'tirupur',
		'label' => 'Tirupur',
		'slug' => 'tirupur',
		'address' => 'Avinashi Road, Tirupur, Tamil Nadu 641602',
		'phones' => ['0421-2345678', '98765 43214'],
		'map' => 'https://www.google.com/maps?q=Tirupur+Tamil+Nadu&output=embed',
	],
	[
		'id' => 'ramanathapuram',
		'label' => 'Ramanathapuram',
		'slug' => 'ramanathapuram',
		'address' => 'Bharathi Nagar, Ramanathapuram, Tamil Nadu 623501',
		'phones' => ['04567-234567', '98765 43215'],
		'map' => 'https://www.google.com/maps?q=Ramanathapuram+Tamil+Nadu&output=embed',
	],
	[
		'id' => 'tuticorin',
		'label' => 'Tuticorin',
		'slug' => 'tuticorin',
		'address' => 'Palayamkottai Road, Tuticorin, Tamil Nadu 628002',
		'phones' => ['0461-2345678', '98765 43216'],
		'map' => 'https://www.google.com/maps?q=Tuticorin+Tamil+Nadu&output=embed',
	],
	[
		'id' => 'tirunelveli',
		'label' => 'Tirunelveli',
		'slug' => 'tirunelveli',
		'address' => 'Near Junction, Tirunelveli, Tamil Nadu 627001',
		'phones' => ['0462-2345678', '98765 43217'],
		'map' => 'https://www.google.com/maps?q=Tirunelveli+Tamil+Nadu&output=embed',
	],
	[
		'id' => 'nagercoil',
		'label' => 'Nagercoil',
		'slug' => 'nagercoil',
		'address' => 'Court Road, Nagercoil, Tamil Nadu 629001',
		'phones' => ['04652-234567', '98765 43218'],
		'map' => 'https://www.google.com/maps?q=Nagercoil+Tamil+Nadu&output=embed',
	],
];

$active_index = 0;
foreach ($branches as $i => $b) {
	if ($branch_param !== '' && (
		$branch_param === $b['slug']
		|| $branch_param === $b['id']
		|| strpos($b['slug'], $branch_param) !== false
		|| strpos($b['id'], $branch_param) !== false
	)) {
		$active_index = $i;
		break;
	}
}
$active_branch = $branches[$active_index];
$branch_chips = ['Madurai - Anna Nagar', 'Theni', 'Coimbatore', 'Tirupur', 'Ramanathapuram', 'Tuticorin', 'Tirunelveli', 'Nagercoil'];
?>
<?php include "includes/header.php"; ?>

<!-- ===== Booking Hero — Start Your Journey ===== -->
<section class="contact-booking section" aria-labelledby="contact-booking-heading">
	<div class="container">
		<header class="contact-booking__intro text-center" data-aos="fade-up">
			<h1 id="contact-booking-heading" class="contact-booking__title">Start Your Journey to Better Hearing</h1>
			<p class="contact-booking__lead">Book an appointment at your nearest branch or schedule a convenient at-home consultation with our experts.</p>
		</header>

		<div class="contact-booking__card" data-aos="fade-up" data-aos-delay="80">
			<div class="contact-booking__body">
				<!-- Left: clinic panel -->
				<aside class="contact-booking__aside" aria-label="In-clinic care">
					<span class="contact-booking__badge">
						<span class="contact-booking__badge-dot" aria-hidden="true"></span>
						In-Clinic Care
					</span>

					<p class="contact-booking__aside-label">Our Branches</p>
					<ul class="contact-booking__chips">
						<?php foreach ($branch_chips as $chip) : ?>
							<li><?php echo htmlspecialchars($chip); ?></li>
						<?php endforeach; ?>
					</ul>

					<p class="contact-booking__aside-headline">We Are Closer To You Than You Think!</p>

					<figure class="contact-booking__doctor">
						<img src="<?php echo BASE_URL; ?>assets/images/contact/doctor.webp" alt="Sounds Good hearing care specialist" width="360" height="420" loading="eager">
					</figure>
				</aside>

				<!-- Right: clinic visit form -->
				<div class="contact-booking__form-wrap">
					<form class="contact-booking__form" action="<?php echo BASE_URL; ?>contact.php" method="post" novalidate>
						<div class="row g-3">
							<div class="col-12">
								<label class="contact-booking__label" for="contact_name">Name</label>
								<input class="contact-booking__input" type="text" id="contact_name" name="name" placeholder="Enter your name" required autocomplete="name">
							</div>
							<div class="col-12">
								<label class="contact-booking__label" for="contact_mobile">Mobile Number</label>
								<input class="contact-booking__input" type="tel" id="contact_mobile" name="mobile" placeholder="Enter mobile number" required autocomplete="tel">
							</div>
							<div class="col-12">
								<label class="contact-booking__label" for="contact_email">Email</label>
								<input class="contact-booking__input" type="email" id="contact_email" name="email" placeholder="Enter email address" required autocomplete="email">
							</div>
							<div class="col-12">
								<label class="contact-booking__label" for="contact_concerns">Hearing Concerns</label>
								<textarea class="contact-booking__input contact-booking__textarea" id="contact_concerns" name="hearing_concerns" rows="3" placeholder="Tell us about your hearing concerns"></textarea>
							</div>
						</div>

						<div class="contact-booking__details">
							<h2 class="contact-booking__details-title">Appointment Details</h2>
							<div class="row g-3">
								<div class="col-12">
									<label class="contact-booking__label" for="contact_branch">Select Branch</label>
									<select class="contact-booking__input contact-booking__select" id="contact_branch" name="branch" required>
										<option value="" disabled <?php echo $branch_param === '' ? 'selected' : ''; ?>>Select Branch</option>
										<?php foreach ($branches as $b) : ?>
											<option value="<?php echo htmlspecialchars($b['slug']); ?>" <?php echo ($active_branch['id'] === $b['id'] && $branch_param !== '') ? 'selected' : ''; ?>><?php echo htmlspecialchars($b['label']); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col-md-6">
									<label class="contact-booking__label" for="contact_date">Date</label>
									<div class="contact-booking__field-icon">
										<input class="contact-booking__input" type="date" id="contact_date" name="date" required>
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.75"/><path d="M3 10h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
									</div>
								</div>
								<div class="col-md-6">
									<label class="contact-booking__label" for="contact_time">Time</label>
									<div class="contact-booking__field-icon">
										<input class="contact-booking__input" type="time" id="contact_time" name="time" required>
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.75"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary btn-pill contact-booking__submit">Book Clinic Visit</button>
					</form>
				</div>
			</div>

			<!-- Card footer: visit options -->
			<div class="contact-booking__foot">
				<div class="contact-booking__foot-item">
					<strong>Visit Our Clinic</strong>
					<p>Walk into any Sounds Good branch for a complete hearing assessment with our audiologists.</p>
				</div>
				<div class="contact-booking__foot-item">
					<strong>Doorstep Consultation</strong>
					<p>Prefer care at home? Our specialists can visit you for testing and fitting support.</p>
				</div>
				<a href="#contact_name" class="btn btn-outline btn-pill contact-booking__home-btn">Book Home Visit</a>
			</div>
		</div>
	</div>
</section>

<!-- ===== Our Branches — Locator ===== -->
<section class="contact-branches section bg-pale" aria-labelledby="contact-branches-heading" id="our-branches">
	<div class="container">
		<div class="contact-branches__layout" data-aos="fade-up">
			<aside class="contact-branches__list-wrap" aria-label="Branch list">
				<h2 id="contact-branches-heading" class="contact-branches__heading">Our Branches</h2>
				<ul class="contact-branches__list" id="contactBranchList" role="tablist" aria-orientation="vertical">
					<?php foreach ($branches as $i => $b) : ?>
						<li role="presentation">
							<button
								type="button"
								class="contact-branches__item <?php echo $i === $active_index ? 'is-active' : ''; ?>"
								role="tab"
								id="branch-tab-<?php echo htmlspecialchars($b['id']); ?>"
								aria-selected="<?php echo $i === $active_index ? 'true' : 'false'; ?>"
								aria-controls="branch-panel"
								data-branch-id="<?php echo htmlspecialchars($b['id']); ?>"
								data-label="<?php echo htmlspecialchars($b['label']); ?>"
								data-address="<?php echo htmlspecialchars($b['address']); ?>"
								data-phones="<?php echo htmlspecialchars(implode('|', $b['phones'])); ?>"
								data-map="<?php echo htmlspecialchars($b['map']); ?>"
							>
								<span class="contact-branches__item-label"><?php echo htmlspecialchars($b['label']); ?></span>
								<span class="contact-branches__item-icon" aria-hidden="true">
									<svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" fill="currentColor"/><path d="M10.5 8l5 4-5 4" stroke="#fff" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
								</span>
							</button>
						</li>
					<?php endforeach; ?>
				</ul>
			</aside>

			<div class="contact-branches__detail" id="branch-panel" role="tabpanel" aria-labelledby="branch-tab-<?php echo htmlspecialchars($active_branch['id']); ?>">
				<h3 class="contact-branches__detail-title" id="branchDetailTitle"><?php echo htmlspecialchars($active_branch['label']); ?></h3>

				<div class="contact-branches__map">
					<iframe
						id="branchMapFrame"
						title="Map of <?php echo htmlspecialchars($active_branch['label']); ?>"
						src="<?php echo htmlspecialchars($active_branch['map']); ?>"
						width="100%"
						height="360"
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						allowfullscreen
					></iframe>
				</div>

				<div class="contact-branches__meta">
					<div class="contact-branches__meta-item">
						<span class="contact-branches__meta-icon" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-5.4 7-11a7 7 0 10-14 0c0 5.6 7 11 7 11z" stroke="currentColor" stroke-width="1.75"/><circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="1.75"/></svg>
						</span>
						<div>
							<strong>Location</strong>
							<p id="branchDetailAddress"><?php echo htmlspecialchars($active_branch['address']); ?></p>
						</div>
					</div>
					<div class="contact-branches__meta-item">
						<span class="contact-branches__meta-icon" aria-hidden="true">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.24 11.4 11.4 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 014 5a1 1 0 011-1h3.5a1 1 0 011 1 11.4 11.4 0 00.57 3.58 1 1 0 01-.24 1L6.6 10.8z" stroke="currentColor" stroke-width="1.75"/></svg>
						</span>
						<div>
							<strong>Phone Number</strong>
							<p id="branchDetailPhones">
								<?php foreach ($active_branch['phones'] as $phone) : ?>
									<a href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
								<?php endforeach; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Footer Location CTA ===== -->
<?php include "includes/footer-location-cta.php"; ?>

<?php include "includes/footer.php"; ?>
