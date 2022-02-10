<main>
	<section class="news">
		<div class="container py-5" style="padding-bottom: 8rem!important">
			<div class="row">
				<?php foreach($news as $info): ?>
					<div class="col-12 col-lg-6 p-4">
						<div class="bg-picture lazy news-photo mb-4" data-bg="<?= file_url(). $info->photo  ?>"></div>
						<div class="treatments-content p-0 ">
							<div>
								<h2 class="mb-3 news-title"><?= $info->title ?></h2>
								<p class="font-weight-normal news-short-desc"><?= strip_tags(substr($info->short_description,0, 150)). '...' ?></p>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<p class="news-author m-0"><?= $info->author ?> | <?= date("d.m.Y", strtotime($info->created)) ?></p>

								<a href="<?= base(). 'aktualnosci/'. $info->id. '/'. slug($info->title) ?>"><button class="button"><?= $info->button_name ?></button></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>