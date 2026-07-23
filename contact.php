<?php $title = "Contact Us — Book a Hearing Consultation | Sounds Good Hearing Care"; ?>
<?php $description = "Book a clinic visit or doorstep consultation with Sounds Good Hearing Care. Find your nearest branch across Tamil Nadu and start your journey to better hearing."; ?>
<?php $canonical = "http://localhost/soundsgood/contact"; ?>
<?php $keywords = "contact Sounds Good, book hearing appointment, hearing clinic Madurai, doorstep consultation, hearing care Tamil Nadu"; ?>
<?php $pageclass = "contactPage"; ?>
<?php
$branch_param = isset($_GET['branch']) ? strtolower(trim($_GET['branch'])) : '';
$branches = [
	[
		'id' => 'madurai-east-veli',
		'label' => 'Madurai - East Veli Street',
		'slug' => 'madurai',
		'address' => 'No:318, New LIC Colony, Near Ulavar Santhai, Anna Nagar, Madurai – 625020.',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31440.31503873535!2d78.100463917509!3d9.930678470937188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5a59b32b2fd%3A0xb8be4588369f7c!2sSounds%20Good%20Hearing%20Care!5e0!3m2!1sen!2sin!4v1784800757123!5m2!1sen!2sin',
	],
	[
		'id' => 'madurai-anna-nagar',
		'label' => 'Madurai - Anna Nagar',
		'slug' => 'madurai-anna-nagar',
		'address' => 'Anna Nagar Main Road, Madurai, Tamil Nadu 625020',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.1195220290942!2d78.14546257361287!3d9.924002790177568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5a59b32b2fd%3A0xb8be4588369f7c!2sSounds%20Good%20Hearing%20Care!5e0!3m2!1sen!2sin!4v1784801052049!5m2!1sen!2sin',
	],
	[
		'id' => 'madurai-ponmeni',
		'label' => 'Madurai - Ponmeni Bypass Road',
		'slug' => 'madurai-ponmeni',
		'address' => 'Ponmeni Bypass Road, Madurai, Tamil Nadu 625016',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31441.572335213114!2d78.06113101562498!3d9.917583000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf6735b2ee11%3A0x9149fce32b97e384!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784800918405!5m2!1sen!2sin',
	],
	[
		'id' => 'theni',
		'label' => 'Theni',
		'slug' => 'theni',
		'address' => 'Near Bus Stand, Theni, Tamil Nadu 625531',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31433.305543932136!2d77.45967166759137!3d10.003375366520158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0714af5a3436fb%3A0xe1ab930eb49b4754!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784800951998!5m2!1sen!2sin',
	],
	[
		'id' => 'coimbatore',
		'label' => 'Coimbatore',
		'slug' => 'coimbatore',
		'address' => 'DB Road, R.S. Puram, Coimbatore, Tamil Nadu 641002',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.349072113753!2d76.94762327363301!3d11.01241478915105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8591d777c2ad1%3A0x428f3248c2da2d72!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784800985266!5m2!1sen!2sin',
	],
	[
		'id' => 'coimbatore-peelamedu',
		'label' => 'Coimbatore - Peelamedu',
		'slug' => 'coimbatore-peelamedu',
		'address' => 'Peelamedu, Coimbatore, Tamil Nadu 641004',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62659.53398785592!2d76.93245103125!3d11.022048200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859ee57ee1523%3A0x4818f2ded3c8984a!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784801108363!5m2!1sen!2sin',
	],
	[
		'id' => 'tirupur',
		'label' => 'Tirupur',
		'slug' => 'tirupur',
		'address' => 'Avinashi Road, Tirupur, Tamil Nadu 641602',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.911076187586!2d77.32987487363509!3d11.1200004890504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85a3cea82d425%3A0x77cfaa76479e5d73!2sSounds%20Good%20Hearing%20Care!5e0!3m2!1sen!2sin!4v1784801163084!5m2!1sen!2sin',
	],
	[
		'id' => 'thoothukudi',
		'label' => 'Thoothukudi',
		'slug' => 'thoothukudi',
		'address' => 'Palayamkottai Road, Thoothukudi, Tamil Nadu 628002',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252363.66350942873!2d77.76129455364826!3d8.768918232410755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b03efb36068162d%3A0xc10f2b7c5a90027c!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784801226470!5m2!1sen!2sin',
	],
	[
		'id' => 'tirunelveli',
		'label' => 'Tirunelveli',
		'slug' => 'tirunelveli',
		'address' => 'Near Junction, Tirunelveli, Tamil Nadu 627001',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63097.35435105789!2d77.66009519370591!3d8.730930777508402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b041183dd9af3a3%3A0x427e1de57ab24a4a!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784801281195!5m2!1sen!2sin',
	],
	[
		'id' => 'tirunelveli-palayamkottai',
		'label' => 'Tirunelveli - Palayamkottai',
		'slug' => 'tirunelveli-palayamkottai',
		'address' => 'Palayamkottai, Tirunelveli, Tamil Nadu 627002',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.708470093196!2d77.72977387359307!3d8.719208691330305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04132082f5dfd1%3A0xf766ef20f2afcc04!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)%20-%20Palayamkottai!5e0!3m2!1sen!2sin!4v1784802308274!5m2!1sen!2sin',
	],
	[
		'id' => 'nagercoil',
		'label' => 'Nagercoil',
		'slug' => 'nagercoil',
		'address' => 'Court Road, Nagercoil, Tamil Nadu 629001',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.192871851197!2d77.42627102358513!3d8.183316591848044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f126546173c9%3A0xc0b4ad976b98c3a8!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784802353347!5m2!1sen!2sin',
	],
	[
		'id' => 'ramanathapuram',
		'label' => 'Ramanathapuram',
		'slug' => 'ramanathapuram',
		'address' => 'Bharathi Nagar, Ramanathapuram, Tamil Nadu 623501',
		'phones' => ['+91 84899 78679', '+91 84899 78679'],
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.6034396154464!2d78.83399967360349!3d9.368315490707166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b01bd7e8497509f%3A0x358996e47199b96c!2sSounds%20Good%20Hearing%20Care%20(Unit%20of%20Hero%20Electronic)!5e0!3m2!1sen!2sin!4v1784802385815!5m2!1sen!2sin',
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
$branch_chips = [
	'Madurai - Anna Nagar',
	'Madurai - Ponmeni Bypass Road',
	'Theni',
	'Coimbatore',
	'Tirupur',
	'Coimbatore - Peelamedu',
	'Thoothukudi',
	'Tirunelveli - Palayamkottai',
	'Tirunelveli',
	'Ramanathapuram',
	'Nagercoil',
];
?>
<?php include "includes/header.php"; ?>

<!-- ===== Booking Hero — Start Your Journey ===== -->
<section class="contact-booking section" aria-labelledby="contact-booking-heading">
	<div class="container">
		<header class="contact-booking__intro text-center" data-aos="fade-up">
			<h1 id="contact-booking-heading" class="contact-booking__title">Start Your Journey to Better Hearing</h1>
			<p class="contact-booking__lead">Book an appointment at your nearest branch or let our experts come to you for a comfortable, at-home experience.</p>
		</header>

		<!-- Frame 2147240466 -->
		<div class="contact-booking__card" id="contactBookingCard" data-mode="clinic" data-aos="fade-up" data-aos-delay="80">
			<!-- Frame 2147240485 — left column -->
			<div class="contact-booking__left">
				<!-- Frame 2147240488 — in-clinic panel -->
				<aside class="contact-booking__clinic" aria-label="In-clinic care">
					<div class="contact-booking__clinic-hero" id="bookingClinicHero">
						<div class="contact-booking__hero" role="img" aria-label="Sounds Good hearing care specialist">
							<span class="contact-booking__badge">
								<span class="contact-booking__badge-dot" aria-hidden="true"></span>
								In-Clinic Care
							</span>

							<div class="contact-booking__branches">
								<p class="contact-booking__aside-label">Our Branches</p>
								<ul class="contact-booking__chips">
									<?php foreach ($branch_chips as $chip) : ?>
										<li><?php echo htmlspecialchars($chip); ?></li>
									<?php endforeach; ?>
								</ul>
							</div>

							<p class="contact-booking__aside-headline">We Are Closer To You Than You Think!</p>
						</div>
					</div>

					<div class="contact-booking__clinic-copy">
						<strong>Visit Our Clinic</strong>
						<p>Expert hearing check-ups and consultations at your nearest branch.</p>
						<button type="button" class="contact-booking__switch-btn contact-booking__switch-btn--clinic" data-booking-mode="clinic" aria-controls="contactBookingCard">
							Book Clinic Visit
						</button>
					</div>
				</aside>

				<!-- Frame 2147240489 — doorstep panel -->
				<div class="contact-booking__home" aria-label="Doorstep consultation">
					<div class="contact-booking__home-media" id="bookingHomeMedia">
						<img
							src="<?php echo BASE_URL; ?>assets/images/contact/contact-roll-up.webp"
							alt="Hearing care specialist providing at-home consultation"
							width="582"
							height="371"
							loading="lazy"
						>
						<span class="contact-booking__badge contact-booking__badge--home">
							<span class="contact-booking__badge-dot" aria-hidden="true"></span>
							At-Home Care
						</span>
					</div>

					<div class="contact-booking__home-copy">
						<strong>Doorstep Consultation</strong>
						<p>Expert hearing care at home with testing, consultation, and guidance.</p>
					</div>

					<button type="button" class="contact-booking__switch-btn contact-booking__switch-btn--home" data-booking-mode="home" aria-controls="contactBookingCard">
						Book Home Visit
					</button>
				</div>
			</div>

			<!-- Forms — clinic + home (roll) -->
			<div class="contact-booking__forms" id="contactBookingForms">
				<div class="contact-booking__forms-track">
					<!-- Clinic visit form -->
					<form class="contact-booking__form contact-booking__form--clinic" action="<?php echo BASE_URL; ?>contact" method="post" novalidate data-form="clinic" aria-label="Book clinic visit">
						<input type="hidden" name="visit_type" value="clinic">

						<div class="contact-booking__field">
							<label class="contact-booking__label" for="clinic_name">Name</label>
							<input class="contact-booking__input" type="text" id="clinic_name" name="name" placeholder="Enter your full name" required autocomplete="name">
						</div>

						<div class="contact-booking__row">
							<div class="contact-booking__field">
								<label class="contact-booking__label" for="clinic_mobile">Mobile Number</label>
								<input class="contact-booking__input" type="tel" id="clinic_mobile" name="mobile" placeholder="Enter your mobile number" required autocomplete="tel">
							</div>
							<div class="contact-booking__field">
								<label class="contact-booking__label" for="clinic_email">Email</label>
								<input class="contact-booking__input" type="email" id="clinic_email" name="email" placeholder="Enter your email address" required autocomplete="email">
							</div>
						</div>

						<div class="contact-booking__field">
							<label class="contact-booking__label" for="clinic_concerns">Hearing Concerns</label>
							<textarea class="contact-booking__input contact-booking__textarea" id="clinic_concerns" name="hearing_concerns" rows="3" placeholder="Tell us about your hearing concerns (optional)"></textarea>
						</div>

						<div class="contact-booking__appt">
							<p class="contact-booking__appt-title">Appointment Details</p>

							<div class="contact-booking__field">
								<label class="contact-booking__label" for="clinic_branch">Select Branch</label>
								<select class="contact-booking__input contact-booking__select" id="clinic_branch" name="branch" required>
									<option value="" disabled <?php echo $branch_param === '' ? 'selected' : ''; ?>>Choose your nearest branch</option>
									<?php foreach ($branches as $b) : ?>
										<option value="<?php echo htmlspecialchars($b['slug']); ?>" <?php echo ($active_branch['id'] === $b['id'] && $branch_param !== '') ? 'selected' : ''; ?>><?php echo htmlspecialchars($b['label']); ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="contact-booking__row">
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="clinic_date">Date</label>
									<div class="contact-booking__field-icon">
										<input class="contact-booking__input" type="date" id="clinic_date" name="date" required>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M3 10h18M8 3v4M16 3v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
									</div>
								</div>
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="clinic_time">Time</label>
									<div class="contact-booking__field-icon">
										<input class="contact-booking__input" type="time" id="clinic_time" name="time" required>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" class="contact-booking__submit">Book Clinic Visit</button>
					</form>

					<!-- Home visit form -->
					<form class="contact-booking__form contact-booking__form--home" action="<?php echo BASE_URL; ?>contact" method="post" novalidate data-form="home" aria-label="Book home visit" inert>
						<input type="hidden" name="visit_type" value="home">

						<div class="contact-booking__field">
							<label class="contact-booking__label" for="home_name">Name</label>
							<input class="contact-booking__input" type="text" id="home_name" name="name" placeholder="Enter your full name" required autocomplete="name" disabled>
						</div>

						<div class="contact-booking__row">
							<div class="contact-booking__field">
								<label class="contact-booking__label" for="home_mobile">Mobile Number</label>
								<input class="contact-booking__input" type="tel" id="home_mobile" name="mobile" placeholder="Enter your mobile number" required autocomplete="tel" disabled>
							</div>
							<div class="contact-booking__field">
								<label class="contact-booking__label" for="home_email">Email</label>
								<input class="contact-booking__input" type="email" id="home_email" name="email" placeholder="Enter your email address" required autocomplete="email" disabled>
							</div>
						</div>

						<div class="contact-booking__field">
							<label class="contact-booking__label" for="home_concerns">Hearing Concerns</label>
							<textarea class="contact-booking__input contact-booking__textarea" id="home_concerns" name="hearing_concerns" rows="3" placeholder="Tell us about your hearing concerns (optional)" disabled></textarea>
						</div>

						<div class="contact-booking__address">
							<div class="contact-booking__address-head">
								<p class="contact-booking__appt-title">Address</p>
								<button type="button" class="contact-booking__locate" id="homeUseLocation">Use my current location</button>
							</div>

							<div class="contact-booking__row">
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="home_flat">Flat / House Number</label>
									<input class="contact-booking__input" type="text" id="home_flat" name="flat" placeholder="Flat / House No." required autocomplete="address-line1" disabled>
								</div>
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="home_street">Street Address</label>
									<input class="contact-booking__input" type="text" id="home_street" name="street" placeholder="Street, area, locality" required autocomplete="address-line2" disabled>
								</div>
							</div>

							<div class="contact-booking__row">
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="home_landmark">Landmark (Optional)</label>
									<input class="contact-booking__input" type="text" id="home_landmark" name="landmark" placeholder="Nearby landmark" disabled>
								</div>
								<div class="contact-booking__field">
									<label class="contact-booking__label" for="home_pincode">Pincode</label>
									<input class="contact-booking__input" type="text" id="home_pincode" name="pincode" placeholder="Enter pincode" required inputmode="numeric" autocomplete="postal-code" disabled>
								</div>
							</div>
						</div>

						<button type="submit" class="contact-booking__submit" disabled>Book Home Visit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Our Branches — Locator ===== -->
<section class="contact-branches section" aria-labelledby="contact-branches-heading" id="our-branches">
	<div class="container">
		<div class="contact-branches__panel" data-aos="fade-up">
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
									<img src="<?php echo BASE_URL; ?>assets/images/contact/arrow_icon.svg" alt="" width="24" height="24">
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
						height="400"
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						allowfullscreen
					></iframe>
				</div>

				<div class="contact-branches__meta">
					<div class="contact-branches__meta-card">
						<span class="contact-branches__meta-icon" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 21.5C12 21.5 19.5 15.2 19.5 9.5C19.5 5.36 16.14 2 12 2C7.86 2 4.5 5.36 4.5 9.5C4.5 15.2 12 21.5 12 21.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
								<circle cx="12" cy="9.5" r="2.5" stroke="currentColor" stroke-width="1.5"/>
							</svg>
						</span>
						<span class="contact-branches__meta-label">Location</span>
						<div class="contact-branches__meta-body">
							<p id="branchDetailAddress"><?php echo htmlspecialchars($active_branch['address']); ?></p>
						</div>
					</div>
					<div class="contact-branches__meta-card">
						<span class="contact-branches__meta-icon" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</span>
						<span class="contact-branches__meta-label">Phone Number</span>
						<div class="contact-branches__meta-body">
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
