<!DOCTYPE html>
<html lang="en">

<head>

	<title>Semusik - Welcome Page</title>
	<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/templatemo-style.css">
</head>

<body>

	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>
		</div>
	</section>


	<!-- MENU -->
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="index.html" class="navbar-brand">Semusik</a>
			</div>

			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-nav-first">
					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#blog" class="smoothScroll">Product</a></li>
					<li><a href="#footer" class="smoothScroll">Contacts</a></li>
					<li><a href="<?= base_url('Transaksi/checkout'); ?>" class="smoothScroll">Checkout</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="section-btn"><a href="<?= base_url('Login/logout');?>">Logout</a>
					</li>
				</ul>
			</div>

		</div>
	</section>


	<!-- HOME -->
	<section id="home" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-12">
					<div class="home-info">
						<h1>We rent the best instrument for all musician.</h1>
						<a href="#about" class="btn section-btn smoothScroll">Start a project</a>
						<span>
							CALL US (+62) 821-4189-9381
							<small>For any inquiry</small>
						</span>
					</div>
				</div>

				
			</div>
		</div>
	</section>


	<!-- ABOUT -->
	<section id="about" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-5 col-sm-6">
					<div class="about-info">
						<div class="section-title">
							<h2>Let us introduce</h2>
							<span class="line-bar">...</span>
						</div>
						<p>Semusik is a website to help you rent a music instrument. You can choose it by yourself. Pick the store you want. We deliver it</p>
						<p>This site's made for completing our final project.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">

				</div>

				<div class="col-md-4 col-sm-12">
					<div class="about-image">
						<img src="<?=base_url();?>assets/images/about-image.jpg" class="img-responsive" alt="">
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- BLOG -->
	<section id="blog" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<div class="section-title">
						<h2>Our Product</h2>
						<span class="line-bar">...</span>
					</div>
				</div>


				<?php $count = 0; ?>
				<?php foreach ($data as $d ) : ?>
				<div class="col-md-6 col-sm-6">
					<!-- BLOG THUMB -->
					<div class="media blog-thumb">
						<div class="media-object media-left">
							<a href="blog-detail.html"><img src="<?=base_url();?>assets/images/<?= $d['gambar_barang'] ?>"
									class="img-responsive" alt=""></a>
						</div>
						<div class="media-body blog-info">
							<small><i class="fa fa-clock-o"></i> December 01, 2019</small>
							<h3><a href="blog-detail.html"><?= $d['nama_barang'] ?></a></h3>
							<p><?= $d['tarif'] ?></p>
							<input type="number" id="qty"> 
							<input type="button" class="form-control" name="submit" value="Add To Cart" onclick="tambahCart(<?= $d['id_barang'] ?>, '<?= $d['nama_barang'] ?>', <?= $d['tarif'] ?>, <?= $count ?>)">
						</div>
					</div>
				</div>
				<?php $count++; ?>
				<?php endforeach; ?>



			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row" id="footer">

				<div class="col-md-5 col-sm-12">
					<div class="footer-thumb footer-info">
						<h2>Semusik Ltd.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<div class="footer-thumb">
						
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<div class="footer-thumb">
						
					</div>
				</div>

				<div class="col-md-3 col-sm-4">
					<div class="footer-thumb">
						<h2>Find us</h2>
						<p>Jl. Danau Ranau <br> Kec. Kedungkandang, Malang</p>
					</div>
				</div>

				<div class="col-md-12 col-sm-12">
					<div class="footer-bottom">
						<div class="col-md-6 col-sm-5">
							<div class="copyright-text">
								<p>Copyright &copy; 2019 Your Company</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-7">
							<div class="phone-contact">
								<p>Call us <span>(+62) 821 4189 9381</span></p>
							</div>
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square"
										attr="facebook icon"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-instagram"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- MODAL -->

	<!-- SCRIPTS -->
	<script src="<?=base_url()?>assets/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>assets/js/smoothscroll.js"></script>
	<script src="<?=base_url()?>assets/js/custom.js"></script>
	<script>
	base_url = "<?= base_url('') ?>";

	function tambahCart(id_barang, nama_barang, tarif, qty) {

		// var fd = new FormData();
		
		$.ajax({
			url: base_url + "transaksi/addCart",
			method: "POST",
			data: {
				id_barang: id_barang,
				nama_barang: nama_barang,
				qty: this.qty[qty].value,
				tarif: tarif,
			},
			success: function (res) {
				console.log(res)
				window.location.reload();
			}
		});
	}
	</script>

</body>

</html>
