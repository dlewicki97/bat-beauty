<main>
	<section class="gallery">
		<div class="container" style="padding: 5rem 0rem; padding-bottom: 8rem">
			<div class="row">
				<?php foreach($gallery_page as $photo): ?>
					<div class="col-12 col-lg-4 gallery-photo position-relative p-4" style="padding-top: 0!important">
						
						<div class="bg-picture lazy" data-bg="<?= file_url(). $photo->photo ?>"></div>
						<a href="<?= file_url(). $photo->photo ?>" data-lightbox="lightbox">
							<div class="gallery-photo-mask">
								<p class=""><?= $photo->title ?></p>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>


