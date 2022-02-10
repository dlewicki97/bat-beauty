<main>
	<section class="about" style="padding-bottom: 8rem">
		<div class="container py-5 px-4">
			<div class="row text-center px-4 px-sm-3" >
				<div class="col-12">
					<h2><?= $about->title ?></h2>
					<div class="about-description"><?= $about->description ?></div>
					<img class="img-fluid lazy" style="padding: 5rem 0rem" data-src="<?= file_url(). $about->photo ?>" alt="<?= $about->alt ?>">
				</div>
			</div>

			<div class="row px-4 px-sm-3" >
				<div class="col-12 col-lg-4 mb-4 mb-lg-0">
					<img class="img-fluid lazy" data-src="<?= file_url(). $owner->photo ?>" alt="<?= $owner->alt ?>">
				</div>
				<div class="col-12 col-lg-8 owner-content-col">
					<div class="d-flex flex-column justify-content-center h-100">
						<div>
							<h2 class="mb-4"><?= $owner->title ?></h2>
							<?= $owner->description ?>
						</div>
						<div class="mt-4">
							<a href="<?= base(). 'kontakt' ?>">
								<button class="button"><?= $owner->button_name ?></button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>