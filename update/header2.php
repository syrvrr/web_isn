
<div class="wrapper">
  	<!--=== Header ===-->
	<nav class="one-page-header navbar navbar-default navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
		<div class="container">
			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url().$this->uri->segment(0); ?>">
					<img src="<?php echo base_url(); ?>assets/img/isnputih.png" alt="ALT">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li class="page-scroll">
							<a href="<?php echo base_url(''); ?>"><span data-hover="Beranda">Beranda</span></a>
						</li>
						<li class="page-scroll">
							<a href="<?php echo base_url().$this->uri->segment(0); ?>front/profil"><span data-hover="Profile">Profil</span></a>
						</li>
						<li class="page-scroll">
							<a href="<?php echo base_url().$this->uri->segment(0); ?>front/service"><span data-hover="Layanan">Layanan</span></a>
						</li>
						<li class="page-scroll">
							<a href="<?php echo base_url().$this->uri->segment(0); ?>front/portofolio"><span data-hover="Portofolio">Portofolio</span></a>
						</li>
						<li class="page-scroll">
							<a href="<?php echo base_url().$this->uri->segment(0); ?>front/contact"><span data-hover="Contact">Contact</span></a>
						</li>
						<li class="page-scroll">
							<a href="<?php echo base_url().$this->uri->segment(0); ?>front/galeri"><span data-hover="Gallery">Gallery</span></a>
						</li>
						<li class="page-scroll">
							<a href="http://bit.ly/isnregistrasi" target="_blank"><span data-hover="Daftar">Daftar</span></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!--=== End Header ===-->

