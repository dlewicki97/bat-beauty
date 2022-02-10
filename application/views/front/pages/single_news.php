<main>
	<section class="single-news">
		<div class="container p-5" style="padding-bottom: 8rem!important">
			<div class="row mb-4">
				<div class="col-12 col-lg-8 pr-0 pr-lg-4">
					<div class="bg-picture lazy" style="height: 400px" data-bg="<?= file_url(). $info->photo ?>"></div>
				</div>
				<div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
					<div class="">
						<h2><?= $info->title ?></h2>
						<p><?= $info->short_description ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?= $info->description ?>
				</div>
			</div>

			<div class="row">
				<?php foreach($gallery as $photo): ?>
					<div class="col-12 col-lg-4 p-3">
						<a href="<?= file_url(). $photo->photo ?>" data-lightbox="photo-1">
							<div class="bg-picture news-photo lazy" data-bg="<?= file_url(). $photo->photo ?>"></div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>