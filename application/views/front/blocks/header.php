<body>
	<header>

		<nav class="px-5">
			<div class="d-flex justify-content-between">
				<div class="social-icons d-flex align-items-center">
					<div>
						<a target="_blank" href="<?= $settings->fb_link ?>"><i class="fab fa-facebook-f"></i></a>
						<a target="_blank" href="<?= $settings->inst_link ?>"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				<div class="logo">
					<a href="<?= base() ?>">
						<img class="img-fluid" src="<?= file_url(). $settings->logo ?>" alt="Bat Beauty Logo">
					</a>
				</div>
				<div class="d-flex align-items-center">
					<div class="menu" onclick="openSidebar()">
						<div class="menu-line"></div>
						<div class="menu-line menu-midline"></div>
						<div class="menu-line"></div>
					</div>
				</div>
			</div>
		</nav>
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
		<aside class="d-none">
			<div class="sidebar" style="<?php if($this->uri->segment(1) == '') echo 'height: 100%'; ?>">
				<div class="sidebar-content pr-5">
					<div class="close-sidebar-container">
						<span class="close-sidebar " onclick="closeSidebar()">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 27.581 27.581">
								<g id="Component_4_1" data-name="Component 4 – 1" transform="translate(1.414 1.414)">
									<g id="Group_2" data-name="Group 2" transform="translate(-723.37 -876.812) rotate(45)">
										<line id="Line_2" data-name="Line 2" x2="35.006" transform="translate(1131.5 108.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
									</g>
									<g id="Group_5" data-name="Group 5" transform="translate(-876.812 748.123) rotate(-45)">
										<line id="Line_2-2" data-name="Line 2" x2="35.006" transform="translate(1131.5 108.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
									</g>
								</g>
							</svg>
						</span>
					</div>
					<ul class="sidebar-subpages">
						<?php foreach ($subpages as $page): ?>
							<li><a class="header-link" href="<?= base(). $page->page ?>"><?= $page->title ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</aside>
		<?php if($this->uri->segment(1) == ''): ?>
			<div id="carousel-example-1z" class="carousel slide " data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $i=0; foreach ($slider as $slide): ?>
					<li data-target="#carousel-example-1z" data-slide-to="<?= $i ?>" class="<?php if($i == 0) echo 'active' ?>"></li>
					<?php $i++; endforeach ?>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php $i=0; foreach ($slider as $slide): ?>
					<div class="carousel-item <?php if($i == 0) echo 'active' ?>">
						<div class="bg-picture slider-img" style="background-image: url('<?= file_url(). $slide->photo ?>')"></div>
						<div class="slider-content">
							<h1><?= $slide->title ?></h1>
							<p><?= $slide->subtitle ?></p>
							<a href="<?= $slide->link ?>"><button class="slider-button button"><span><?= $slide->button_name ?></span></button></a>
						</div>
					</div>
					<?php $i++; endforeach ?>
				</div>
			</div>
			<?php else: ?>
				<div class="header-page bg-picture" style="background-image: url('<?= file_url(). $current_subpage->photo ?>')">
				</div>
				<div class="header-title"><?= $current_subpage->title ?></div>
			<?php endif; ?>

		</header>