<footer>
	<?php if($this->uri->segment(1) == ''): ?>
		<section class="contact">
			<div class="container-fluid px-0 px-sm-5">

				<div class="row ">
					<div class="col-12 col-lg-6 px-0 px-sm-5 pb-5 pb-lg-0">
						<h2 class="contact-header"><?= $contact_descriptions->title ?></h2>
						<div class="mb-4"><?= $contact_descriptions->subtitle ?></div>
						<div class="d-flex align-items-center contact-icons">
							<img class="img-fluid lazy" data-src="<?= file_url(). $contact_icons[0]->photo ?>" alt="">
							<p class="m-0"><?= $contact_settings->name ?></p>
						</div>
						<div class="d-flex align-items-center contact-icons">
							<img class="img-fluid lazy" data-src="<?= file_url(). $contact_icons[1]->photo ?>" alt="">
							<p class="m-0"><a class="contact-link" href="mailto: <?= $contact_settings->email1 ?>"><?= $contact_settings->email1 ?></a></p>
							<p class="m-0"><a class="contact-link" href="mailto: <?= $contact_settings->email2 ?>"><?= $contact_settings->email2 ?></a></p>
						</div>
						<div class="d-flex align-items-center contact-icons">
							<img class="img-fluid lazy" data-src="<?= file_url(). $contact_icons[2]->photo ?>" alt="">
							<p class="m-0"><a class="contact-link" href="tel: <?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a></p>
							<p class="m-0"><a class="contact-link" href="tel: <?= $contact_settings->phone2 ?>"><?= $contact_settings->phone2 ?></a></p>
						</div>
						<div class="d-flex align-items-center contact-icons">
							<img class="img-fluid lazy" data-src="<?= file_url(). $contact_icons[3]->photo ?>" alt="">
							<p class="m-0"><a class="contact-link" href="https://www.google.com/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' ,'. $contact_settings->city ?>/data=!4m2!3m1!1s0x4708ac1707f6fcf1:0xa6fa778b57a4be89?sa=X&ved=2ahUKEwjn4ZHr743sAhXI2aQKHdJiBbQQ8gEwAHoECAsQAQ">ul. <?= $contact_settings->address. ' '. $contact_settings->zip_code. ', '. $contact_settings->city ?></a></p>
						</div>
						<a href="<?= $settings->fb_link ?>"><i class="fab fa-facebook-f"></i></a>
						<a href="<?= $settings->inst_link ?>"><i class="fab fa-instagram"></i></a>
					</div>
					<div class="col-12 col-lg-6 d-flex justify-content-center position-relative contact-form-col flex-column ">
						<form id="contact-form" method="POST" action="<?= base(). 'mailer/send' ?>" class="contact-form px-0 px-sm-5">
							<div class="card">
								<h3 class="text-center contact-form-header"><?= $contact_descriptions->title_form ?></h3>
								<input required type="text" class="form-control contact-input" placeholder="<?= $contact_descriptions->name ?>" name="name">
								<input required type="number" class="form-control contact-input" placeholder="<?= $contact_descriptions->phone ?>" name="phone">
								<input required type="email" class="form-control contact-input" placeholder="<?= $contact_descriptions->email ?>" name="email">
								<textarea required rows="4" class="form-control contact-input" placeholder="<?= $contact_descriptions->message ?>" name="message"></textarea>
								<button type="submit" class="button"><?= $contact_descriptions->button_name ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="footer">
		<div style="height: 1.15rem; margin-top: -2.3rem"></div>
		<!-- <div class="footer-pink-line"></div> -->
		<div class="pricelist-pink-line-container" style="<?php if($this->uri->segment(1) == '' || $this->uri->segment(1) == 'kontakt') echo 'justify-content: flex-start' ?>">
			<div class="pricelist-pink-line"></div>
		</div>
		<div class="container-fluid p-5">
			<div class="row mb-4 ">
				<div class="col-12 px-0 px-sm-5">
					<a href="<?= base()  ?>">
						<img class="img-fluid footer-logo lazy" data-src="<?= file_url(). $settings->logo ?>" alt="Bat Beauty Logo">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-6 px-0 px-sm-5">
					<div class="row m-0">
						<div class="col-12 col-lg-4">
							<h3 class="m-0 footer-list-title">Menu</h3>
							<ul class="footer-subpages">
								<?php foreach ($subpages as $page): ?>
									<li><a class="footer-link" href="<?= base(). $page->page ?>"><?= $page->title ?></a></li>
								<?php endforeach ?>
							</ul>
						</div>
						<div class="col-12 col-lg-4">
							<h3 class="m-0 footer-list-title">Oferta</h3>
							<ul class="footer-subpages">
								<?php foreach($footer_offers as $footer_offer): ?>
								<li>
									<a class="footer-link" href="<?= base(). 'oferta/'. $footer_offer->id. '/'. slug($footer_offer->title) ?>"><?= $footer_offer->title ?></a>
								</li>
							<?php endforeach; ?>
							</ul>
						</div>
						<div class="col-12 col-lg-4">
							<h3 class="m-0 footer-list-title"><?= $contact_settings->company ?></h3>
							<ul class="footer-subpages">
								<li><?= $contact_settings->name ?></li>
								<li><a class="footer-link" href="mailto: <?= $contact_settings->email1 ?>"><?= $contact_settings->email1 ?></a></li>
								<li><a class="footer-link" href="mailto: <?= $contact_settings->email2 ?>"><?= $contact_settings->email2 ?></a></li>
								<li><a class="footer-link" href="tel: <?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a></li>
								<li><a class="footer-link" href="tel: <?= $contact_settings->phone2 ?>"><?= $contact_settings->phone2 ?></a></li>
								<li><a class="footer-link" target="_blank" href="https://www.google.com/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' ,'. $contact_settings->city ?>/data=!4m2!3m1!1s0x4708ac1707f6fcf1:0xa6fa778b57a4be89?sa=X&ved=2ahUKEwjn4ZHr743sAhXI2aQKHdJiBbQQ8gEwAHoECAsQAQ">ul. <?= $contact_settings->address. ', '. $contact_settings->zip_code. ' '. $contact_settings->city ?></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 d-flex justify-content-lg-end align-items-end px-0 px-sm-5">
					<p class="ad-awards">Projekt i wdrożenie: <a class="text-white" href="https://agencjamedialna.pro/"><span class="font-weight-bold ad-awards-name">AdAwards</span></a></p>
				</div>
			</div>
		</div>
	</section>
</footer>
<script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/sidebar/sidebar.js"></script>
<script src="<?= assets(). 'js/cookies/pallete.js' ?>" type="text/javascript"></script>
<script src="<?= assets(). 'js/captcha/form.js' ?>" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>
<script src="<?= assets() ?>js/lightbox/lightbox-plus-jquery.min.js"></script>
<script src="<?= assets() ?>js/seo/rel.js"></script>
<script src="<?= assets(). 'js/lazy/lazy.js' ?>" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/3353bb36d2.js" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>" async></script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<script>
	runPallete('<?= file_url(). $settings->privace ?>');
	function resizer(offer) {
		if($(document).width() <= 992) {
			console.log('dupa')
			offer.classList.remove('offer-left-bg');
			offer.classList.add('treatments-right-background');
		}else {
			offer.classList.add('offer-left-bg');
			offer.classList.remove('treatments-right-background');
		}
	}

	document.getElementsByClassName('offer-left-bg').forEach(offer => {
		resizer(offer);
		window.addEventListener('resize', () => {
			resizer(offer)
		})

	})
</script>
<script>
	

	document.getElementsByClassName('gallery-photo').forEach(photo => {
		photo.addEventListener('mouseover', () => photo.getElementsByClassName('gallery-photo-mask')[0].getElementsByTagName('p')[0].classList.add('gallery-photo-text'))
		photo.addEventListener('mouseout', () => photo.getElementsByClassName('gallery-photo-mask')[0].getElementsByTagName('p')[0].classList.remove('gallery-photo-text'))
	})


</script>
</body>
</html>