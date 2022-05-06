<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<nav id="main-navbar" class="hidden-xs hidden-sm">
		<div class="nav hidden-xs">
			<div class="main-reorder pull-right">
				<a href="#">
					<i class="fa fa-bars"></i>
				</a>
			</div>

			<div class="logo pull-left">
				<a href="<?php echo base_url(); ?>">
					<figure>
						<img src="<?php echo base_url(); ?>img/logo1.png" class="light-logo" alt="" />
						<img src="<?php echo base_url(); ?>img/logo2.png" class="dark-logo" alt="" />
					</figure>
				</a>
			</div>
			
			<div class="main-nav">
				<ul class="pull-right">

					<li>
					<a href=<?php echo base_url("masano/masa/").$this->session->userdata("masaid"); ?>>home</a>
					</li>
					<li>
						<a href="<?php echo base_url("menu"); ?>" class="">Menü</a>
					</li>

					<li>
						<a href="<?php echo base_url("sepet"); ?>" class="">Sepet</a>
					</li>
					<li>
						<a href="<?php echo base_url("hesap"); ?>" class="">Hesap</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<div id="mobile-nav" class="visible-xs visible-sm">
		<header>
			<div class="container-fluid">
				<ul class="menu-header">
					<li class="pull-left">
						<a href="index.html" class="logo">
							<figure>
								<img src="<?php echo base_url(); ?>img/logo2.png" alt="" />
							</figure>
						</a>
					</li>
					
					<li class="reorder pull-right"><a href="#" title=""><i class="fa fa-bars"></i></a></li>
					
				</ul>
			
			</div>
			
		</header>
		
		<div class="" id="flyout-container">
			<ul id="mobile-navbar" class="nav flyout-menu main-nav nav-height">
				<li class="nav-item">
					<a href=<?php echo base_url("masano/masa/").$this->session->userdata("masaid"); ?>>home</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url("menu"); ?>">Menü</a>
				</li>
				
				<li class="nav-item">
					<a title="" href="<?php echo base_url("sepet"); ?>">Sepet</a>
				</li>
				<li class="nav-item">
					<a title="" href="<?php echo base_url("hesap"); ?>">Hesap</a>
				</li>

			</ul>
		</div>
	</div>
</body>

</html>