<main>
	<section class="contact-page">

		<div class="container py-5">
			<?php if($this->session->flashdata('danger')): ?>
				<div class="alert alert-danger alert-dismissible">
					<?= $this->session->flashdata('danger') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissible">
					<?= $this->session->flashdata('success') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<div class="row" style="padding: 0rem 8rem">
				<div class="contact-description mb-4"><?= $contact->contact_description ?></div>
			</div>
			<div class="row justify-content-center" style="padding: 0rem 8rem">
				<div class="col-12 col-lg-3">
					<div class="text-center">
						
						<a class="btn-floating mx-auto btn-lg btn-default icon-bg d-flex align-items-center justify-content-center"><img class="img-fluid lazy " data-src="<?= assets().'img/user-contact.svg' ?>" alt=""></a>
						<p><?= $contact_settings->name  ?></p>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="text-center">
						<a href="mailto: <?= $contact_settings->email1 ?>" class="btn-floating mx-auto btn-lg btn-default icon-bg d-flex align-items-center justify-content-center"><img class="img-fluid lazy " data-src="<?= assets().'img/email-contact.svg' ?>" alt=""></a>
						<p><?= $contact_settings->email1  ?></p>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="text-center">
						<a href="tel: <?= $contact_settings->phone1 ?>" class="btn-floating mx-auto btn-lg btn-default icon-bg d-flex align-items-center justify-content-center"><img class="img-fluid lazy " data-src="<?= assets().'img/phone-contact.svg' ?>" alt=""></a>
						<p><?= $contact_settings->phone1  ?></p>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="text-center">
						<a href="https://www.google.com/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' ,'. $contact_settings->city ?>/data=!4m2!3m1!1s0x4708ac1707f6fcf1:0xa6fa778b57a4be89?sa=X&ved=2ahUKEwjn4ZHr743sAhXI2aQKHdJiBbQQ8gEwAHoECAsQAQ" class="btn-floating mx-auto btn-lg btn-default icon-bg d-flex align-items-center justify-content-center"><img class="img-fluid lazy " data-src="<?= assets().'img/navigation-contact.svg' ?>" alt=""></a>
						<p>ul. <?= $contact_settings->address. '<br>'. $contact_settings->zip_code. ' '. $contact_settings->city ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" style="margin: 3rem 0rem 4.5rem 0rem">
				<a class="mr-3" href="<?= $settings->fb_link ?>"><i class="fab fa-facebook-f"></i></a>
				<a href="<?= $settings->inst_link ?>"><i class="fab fa-instagram"></i></a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-6 text-center font-weight-normal mb-3 mb-lg-0">
					<h2 class="mb-0 column-title"><?= $contact->map_title ?></h2>
					<p class="mb-5 column-subtitle"><?= $contact->map_subtitle ?></p>

					<iframe src="<?= $contact_settings->map ?>" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="col-12 col-lg-6 position-relative contact-form-col text-center">
					<div class="position-relative font-weight-normal">
						<h2 class="mb-0 column-title"><?= $contact->form_title ?></h2>
						<p class="mb-5 column-subtitle"><?= $contact->form_subtitle ?></p>
					</div>
					<form id="contact-form" method="POST" action="<?= base(). 'mailer/send' ?>" class="contact-form px-0 px-sm-5" >
						<div class="card">
							<h3 class="text-center contact-form-header"><?= $contact_descriptions->title_form ?></h3>
							<input type="text" class="form-control contact-input" placeholder="<?= $contact_descriptions->name ?>" name="name" required>
							<input type="number" class="form-control contact-input" placeholder="<?= $contact_descriptions->phone ?>" name="phone" required>
							<input type="email" class="form-control contact-input" placeholder="<?= $contact_descriptions->email ?>" name="email" required>
							<textarea rows="4" class="form-control contact-input" placeholder="<?= $contact_descriptions->message ?>" name="message" required></textarea>
							<button type="submit" class="button"><?= $contact_descriptions->button_name ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>