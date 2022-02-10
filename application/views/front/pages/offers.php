<main>
	<section class="treatments-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="treatments-background bg-picture lazy" data-bg="<?= file_url(). $offers[0]->photo ?>">
						<div class="treatments-content">
							<h2><?= $offers[0]->title ?></h2>
							<p><?= $offers[0]->subtitle ?></p>
							<a href="<?= base(). 'oferta/'. $offers[0]->id. '/'. slug($offers[0]->title) ?>">
								<button class="button"><?= $offers[0]->button_name ?></button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="col-12 h-50">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $offers[1]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div>
										<h2><?= $offers[1]->title ?></h2>
										<p><?= $offers[1]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $offers[1]->id. '/'. slug($offers[1]->title) ?>">
											<button class="button"><?= $offers[1]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 h-50">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $offers[2]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div>
										<h2><?= $offers[2]->title ?></h2>
										<p><?= $offers[2]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $offers[2]->id. '/'. slug($offers[2]->title) ?>">
											<button class="button"><?= $offers[2]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 treatments-2 py-0">
					<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $offers[3]->photo ?>">
						<div class="d-flex h-100 justify-content-end treatments-content">
							<div class="h-100 d-flex flex-column justify-content-lg-between">
								<div>
									<h2><?= $offers[3]->title ?></h2>
									<p><?= $offers[3]->subtitle ?></p>
								</div>
								<div>
									<a href="<?= base(). 'oferta/'. $offers[3]->id. '/'. slug($offers[3]->title) ?>"><button class="button"><?= $offers[3]->button_name ?></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 treatments-2 py-0">
					<div class="treatments-background offer-left-bg bg-picture lazy" data-bg="<?= file_url(). $offers[4]->photo ?>">
						<div class="d-flex h-100 justify-content-end treatments-content">
							<div class="h-100 d-flex flex-column justify-content-lg-between">
								<div class="text-right">
									<h2><?= $offers[4]->title ?></h2>
									<p><?= $offers[4]->subtitle ?></p>
								</div>
								<div class="text-right">
									<a href="<?= base(). 'oferta/'. $offers[4]->id. '/'. slug($offers[4]->title) ?>"><button class="button"><?= $offers[4]->button_name ?></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-12 col-lg-6">
					<div class="col-12 h-50">
						<div class="treatments-background offer-bg offer-left-bg bg-picture lazy" data-bg="<?= file_url(). $offers[5]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div >
										<h2><?= $offers[5]->title ?></h2>
										<p><?= $offers[5]->subtitle ?></p>
									</div>
									<div class="text-right">
										<a href="<?= base(). 'oferta/'. $offers[5]->id. '/'. slug($offers[5]->title) ?>">
											<button class="button"><?= $offers[5]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 h-50">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $offers[6]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-between">
									<div>
										<h2><?= $offers[6]->title ?></h2>
										<p><?= $offers[6]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $offers[6]->id. '/'. slug($offers[6]->title) ?>">
											<button class="button"><?= $offers[6]->button_name ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="treatments-background bg-picture lazy" style="background-color: #faf7ec; background-size: 80%; height: 55vw" data-bg="<?= file_url(). $offers[7]->photo ?>">
						<div class="treatments-content">
							<h2><?= $offers[7]->title ?></h2>
							<p><?= $offers[7]->subtitle ?></p>
							<a href="<?= base(). 'oferta/'. $offers[7]->id. '/'. slug($offers[7]->title) ?>">
								<button class="button"><?= $offers[7]->button_name ?></button>
							</a>
						</div>
					</div>
				</div>
				<?php for($i=8 ; $i<count($offers) ; $i++): ?>
					<div class="col-12 col-lg-6 treatments-2 py-0">
						<div class="treatments-right-background bg-picture lazy" data-bg="<?= file_url(). $offers[$i]->photo ?>">
							<div class="d-flex h-100 justify-content-end treatments-content">
								<div class="h-100 d-flex flex-column justify-content-lg-between">
									<div>
										<h2><?= $offers[$i]->title ?></h2>
										<p><?= $offers[$i]->subtitle ?></p>
									</div>
									<div>
										<a href="<?= base(). 'oferta/'. $offers[$i]->id. '/'. slug($offers[$i]->title) ?>"><button class="button"><?= $offers[$i]->button_name ?></button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>

			</div>
		</div>
	</section>
	<section class="more">
		<div class="treatments-content text-center" style="padding-bottom: 7rem">
			<div>
				<h2><?= $offers_pricelist->title ?></h2>
				<p><?= $offers_pricelist->subtitle ?></p>
			</div>
			<div>
				<a href="<?= base(). 'cennik' ?>"><button class="button"><?= $offers_pricelist->button_name ?></button></a>
			</div>
		</div>
	</section>
</main>