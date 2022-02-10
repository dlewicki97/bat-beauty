<main>
	<section class="pricelist pricelist-page bg-picture lazy" data-bg="<?= file_url(). $pricelist_descriptions->photo ?>">
		
		<div class="pricelist-mask" style="background-color: rgb(255 255 255 / 78%);"></div>
		<div class="container-fluid py-5 px-4 position-relative">
			<div class="row justify-content-center mb-4">
				<div class="col-12">
					<div class="d-flex justify-content-center wings">
						<img class="img-fluid" src="<?= assets() ?>img/black_left_wing.png" alt="">
						<h2 class="pricelist-header"><?= $pricelist_descriptions->title ?></h2>
						<img class="img-fluid" src="<?= assets() ?>img/black_right_wing.png" alt="">
					</div>
					<p class="text-center pricelist-subheader"><?= $pricelist_descriptions->subtitle ?></p>
				</div>
			</div>
			<div class="row px-5">
				<?php foreach ($pricelist as $list): ?>

					<div class="pricelist-table mb-5">
						<div class="row pricelist-table-head"><?= $list->title ?></div>
						<?php foreach ($pricelist_items[$list->id] as $price): ?>

							<div class="row pricelist-table-row px-0">
								<div class="col-lg-11 col-6 d-flex flex-column justify-content-center">
									<p><?= $price->title ?></p>

								</div>
								<div class="col-lg-1 col-6 text-right d-flex flex-column justify-content-center">
									<p class="font-weight-bold"><?= $price->price ?> zł</p>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>

	</section>
</main>