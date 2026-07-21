<!-- ===== Footer Location CTA (desktop) ===== -->
<section class="footer-location d-none d-md-block" aria-labelledby="footer-location-heading">
	<div class="container">
		<div class="footer-location__card" data-aos="fade-up">
			<span class="footer-location__map-glow" aria-hidden="true"></span>
			<div class="footer-location__content">
				<h2 id="footer-location-heading">We Are Closer To You Than You Think!</h2>
				<p>Locate your nearest Soundsgood clinic to book a professional hearing check-up today.</p>
			</div>
			<div class="footer-location__map">
				<div class="footer-location__map-stage" id="footerMapPins">
					<img class="footer-location__map-img" src="<?php echo BASE_URL; ?>assets/images/footer/location-map.svg" alt="Map of Sounds Good clinic locations across Tamil Nadu" width="460" height="290" loading="lazy">

					<?php
					$desktop_pins = [
						['class' => 'footer-location__pin1', 'branch' => 'coimbatore', 'city' => 'Coimbatore', 'x' => '20%', 'y' => '37%', 'active' => false],
						['class' => 'footer-location__pin2', 'branch' => 'tirupur', 'city' => 'Tirupur', 'x' => '30%', 'y' => '28%', 'active' => false],
						['class' => 'footer-location__pin3', 'branch' => 'theni', 'city' => 'Theni', 'x' => '30%', 'y' => '52%', 'active' => false],
						['class' => 'footer-location__pin4', 'branch' => 'madurai', 'city' => 'Madurai', 'x' => '42%', 'y' => '52%', 'active' => false],
						['class' => 'footer-location__pin5', 'branch' => 'ramanathapuram', 'city' => 'Ramanathapuram', 'x' => '60%', 'y' => '63%', 'active' => false],
						['class' => 'footer-location__pin6', 'branch' => 'tuticorin', 'city' => 'Tuticorin', 'x' => '47%', 'y' => '70%', 'active' => false],
						['class' => 'footer-location__pin7', 'branch' => 'tirunelveli', 'city' => 'Tirunelveli', 'x' => '33%', 'y' => '76%', 'active' => false],
						['class' => 'footer-location__pin8', 'branch' => 'nagercoil', 'city' => 'Nagercoil', 'x' => '29%', 'y' => '88%', 'active' => false],
					];
					foreach ($desktop_pins as $pin) :
						$active = !empty($pin['active']) ? ' is-active' : '';
					?>
					<a class="footer-location__pin <?php echo $pin['class'] . $active; ?>" href="<?php echo BASE_URL; ?>contact?branch=<?php echo $pin['branch']; ?>" style="--pin-x: <?php echo $pin['x']; ?>; --pin-y: <?php echo $pin['y']; ?>;" data-city="<?php echo htmlspecialchars($pin['city']); ?>">
						<span class="footer-location__pin-spin" aria-hidden="true">
							<img class="footer-location__pin-icon footer-location__pin-icon--front" src="<?php echo BASE_URL; ?>assets/images/footer/map-pin.svg" alt="" width="42" height="42">
							<img class="footer-location__pin-icon footer-location__pin-icon--back" src="<?php echo BASE_URL; ?>assets/images/footer/map-pin.svg" alt="" width="42" height="42">
						</span>
						<span class="footer-location__tab"><?php echo htmlspecialchars($pin['city']); ?> <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===== Footer Location CTA (mobile) ===== -->
<section class="footer-location-mobile d-md-none" aria-labelledby="footer-location-mobile-heading">
	<div class="container">
		<div class="footer-location-mobile__card">
			<div class="footer-location-mobile__content">
				<h2 id="footer-location-mobile-heading">We Are Closer To You Than You Think!</h2>
				<p>Locate your nearest Soundsgood clinic to book a professional hearing check-up today.</p>
			</div>
			<div class="footer-location-mobile__map">
				<div class="footer-location__map-stage" id="footerMapPinsMobile">
					<img class="footer-location__map-img" src="<?php echo BASE_URL; ?>assets/images/footer/location-map.svg" alt="Map of Sounds Good clinic locations across Tamil Nadu" width="340" height="280" loading="lazy">

					<?php
					$mobile_pins = [
						['class' => 'footer-location__pin1', 'branch' => 'coimbatore', 'city' => 'Coimbatore', 'x' => '22%', 'y' => '28%', 'active' => false],
						['class' => 'footer-location__pin2', 'branch' => 'tirupur', 'city' => 'Tirupur', 'x' => '32%', 'y' => '22%', 'active' => false],
						['class' => 'footer-location__pin3', 'branch' => 'theni', 'city' => 'Theni', 'x' => '30%', 'y' => '42%', 'active' => false],
						['class' => 'footer-location__pin4', 'branch' => 'madurai', 'city' => 'Madurai', 'x' => '48%', 'y' => '46%', 'active' => false],
						['class' => 'footer-location__pin5', 'branch' => 'ramanathapuram', 'city' => 'Ramanathapuram', 'x' => '68%', 'y' => '52%', 'active' => false],
						['class' => 'footer-location__pin6', 'branch' => 'tuticorin', 'city' => 'Tuticorin', 'x' => '52%', 'y' => '68%', 'active' => false],
						['class' => 'footer-location__pin7', 'branch' => 'tirunelveli', 'city' => 'Tirunelveli', 'x' => '42%', 'y' => '76%', 'active' => false],
						['class' => 'footer-location__pin8', 'branch' => 'nagercoil', 'city' => 'Nagercoil', 'x' => '38%', 'y' => '88%', 'active' => false],
					];
					foreach ($mobile_pins as $pin) :
						$active = !empty($pin['active']) ? ' is-active' : '';
					?>
					<a class="footer-location__pin <?php echo $pin['class'] . $active; ?>" href="<?php echo BASE_URL; ?>contact?branch=<?php echo $pin['branch']; ?>" style="--pin-x: <?php echo $pin['x']; ?>; --pin-y: <?php echo $pin['y']; ?>;" data-city="<?php echo htmlspecialchars($pin['city']); ?>">
						<span class="footer-location__pin-spin" aria-hidden="true">
							<img class="footer-location__pin-icon footer-location__pin-icon--front" src="<?php echo BASE_URL; ?>assets/images/footer/map-pin.svg" alt="" width="32" height="32">
							<img class="footer-location__pin-icon footer-location__pin-icon--back" src="<?php echo BASE_URL; ?>assets/images/footer/map-pin.svg" alt="" width="32" height="32">
						</span>
						<span class="footer-location__tab"><?php echo htmlspecialchars($pin['city']); ?> <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
