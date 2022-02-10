<main>
	<section class="treatments-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="treatments-background bg-picture lazy" data-bg="<?= file_url(). $treatments_1[0]->photo ?>">
						<div class="treatments-content">
							<h2><?= $treatments_1[0]->title ?></h2>
							<p><?= $treatments_1[0]->subtitle ?></p>
							<a href="<?= base(). 'oferta/'. $treatments_1[0]->id. '/'. slug($treatments_1[0]->title) ?>">
								<button class="button"><?= $treatments_1[0]->button_name ?></button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="col-12 h-50">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $treatments_1[1]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div>
										<h2><?= $treatments_1[1]->title ?></h2>
										<p><?= $treatments_1[1]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $treatments_1[1]->id. '/'. slug($treatments_1[1]->title) ?>">
											<button class="button"><?= $treatments_1[1]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 h-50">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $treatments_1[2]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div>
										<h2><?= $treatments_1[2]->title ?></h2>
										<p><?= $treatments_1[2]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $treatments_1[2]->id. '/'. slug($treatments_1[2]->title) ?>">
											<button class="button"><?= $treatments_1[2]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bloomea">
		<div class="bloomea-content">
			<div class="bloomea-banner bg-picture lazy" data-bg="<?= file_url(). $bloomea->photo2 ?>">
				<div class="bloomea-mask"></div>
				<h1 class="bloomea-text pl-3 pl-sm-5"><?= $bloomea->bg_title ?></h1>
			</div>
			<div class="bloomea-pink-line"></div>
		</div>
		<div class="container-fluid px-3 px-sm-5">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="treatments-content">
						<h2 class="mb-3"><?= $bloomea->title ?></h2>
						<?= $bloomea->description ?>
						<a href="<?= $bloomea->link ?>">
							<button class="button"><?= $bloomea->button_name ?></button>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-6 position-relative bloomea-img-col">
					<img class="img-fluid bloomea-img lazy" data-src="<?= file_url(). $bloomea->photo ?>" alt="<?= $bloomea->alt ?>">
				</div>
			</div>
		</div>
	</section>
	<section class="treatments-2">
		<div class="container-fluid">
			<div class="row">
				<?php foreach ($treatments_2 as $treatment): ?>
				
				<div class="col-12 col-lg-6">
					<div class="offer-bg offer-left-bg bg-picture lazy" data-bg="<?= file_url(). $treatment->photo ?>">
						<div class="d-flex h-100 justify-content-end treatments-content">
							<div class="h-100 d-flex flex-column justify-content-lg-between">
								<div>
									<h2><?= $treatment->title ?></h2>
									<p><?= $treatment->subtitle ?></p>
								</div>
								<div>
									<a href="<?= base(). 'oferta/'. $treatment->id. '/'. slug($treatment->title) ?>"><button class="button"><?= $treatment->button_name ?></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
			</div>
		</div>
	</section>
	<section class="attributes">
		<div class="container-fluid px-4 px-sm-5">
			<div class="row justify-content-center mb-4">
				<div class="attributes-content">
					<h2><?= $attributes_descriptions->title ?></h2>
					<?= $attributes_descriptions->description ?>
				</div>
			</div>
			
			<div class="row attributes-row">
				<?php foreach ($attributes as $attribute): ?>
				<div class="col-12 col-lg-4">
					<div class="attributes-col-wrapper">
						<div class="attributes-col-content">
							<img class="img-fluid lazy" data-src="<?= file_url(). $attribute->photo ?>" alt="<?= $attribute->alt ?>">
							<h2><?= $attribute->title ?></h2>
							<?= $attribute->description ?>
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
			</div>
		</div>
	</section>
	<section class="pricelist bg-picture lazy" data-bg="<?= file_url(). $pricelist_descriptions->photo ?>">
		
		<div class="pricelist-pink-line-container">
			<div class="pricelist-pink-line"></div>
		</div>
		<div class="pricelist-mask"></div>
		<div class="container-fluid py-5 px-4 position-relative">
			<div class="row justify-content-center mb-4">
				<div class="col-12">
					<div class="d-flex justify-content-center wings">
						<img class="img-fluid" src="<?= assets() ?>img/left-wing.png" alt="">
						<h2 class="pricelist-header"><?= $pricelist_descriptions->title ?></h2>
						<img class="img-fluid" src="<?= assets() ?>img/right-wing.png" alt="">
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
							<p><?= $price->price ?> zł</p>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="pricelist-pink-line"></div>
		<div style="height: 1.15rem; margin-top: -2.3rem"></div>
	</section>
	<section class="facebook">
		<div class="container-fluid px-5">
			<div class="row justify-content-center">
				<h2 class="facebook-header"><?= $facebook_descriptions->title ?></h2>
			</div>
			<div class="d-flex justify-content-center flex-wrap facebook-row">
				<?php foreach ($facebook as $post): ?>
				
					<div class="fb-post px-3" data-href="<?= $post->link ?>"  data-width="100%"></div>
				<?php endforeach ?>
				
			</div>
			<div class="row justify-content-center mt-5">
				<a href="<?= $settings->fb_link ?>"><button class="button"><?= $facebook_descriptions->button_name ?></button></a>
			</div>
		</div>
	</section>
</main>