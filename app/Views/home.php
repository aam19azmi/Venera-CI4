<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/css/foundation.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
	<link rel="stylesheet" href="./style.css">
	<!--<link rel="stylesheet" href="./style.css">-->


	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<!-- Link buat Emote Bootstrap -->
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

	<!-- Link CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />

	<title>Venera Store | Home</title>
</head>

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center">
		<div class="container container-xl d-flex align-items-center justify-content-between">
			<a href="#" class="logo d-flex align-items-center">

				<img src="assets/img/logo/logo-putih.png" alt="logo">

				<h1>Venera<span>.</span></h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a id="home" href="#" class="active">Home</a></li>
					<li><a id="about" href="#">Tentang Kami</a></li>
					<li><a id="product" href="#">Produk</a> </li>
					<li><a id="contact" href="#">Kontak kami</a></li>
				</ul>
			</nav>
			<!-- .navbar -->
		</div>
	</header>
	<!-- Akhir Header -->

	<!-- Landing Page -->
	<section id="hero" class="hero">
		<div class="gambar" style="background-image: url(assets/img/background/bg1.jpg)"></div>
		<div class="info d-flex align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<img src="assets/img/logo/logo-putih.png" alt="logo" class="logo">
						<h2 data-aos="fade-down">Selamat Datang di <span>Buah Tangan Venera</span></h2>
						<p data-aos="fade-up">Tag Line UMKM VENERA.</p>
						<a data-aos="fade-up" data-aos-delay="200" href="#produk" class="btn-get-started">Dapatkan
							Produk</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir landing page -->


	<!-- partial:index.partial.html -->
	<section id="produk">


		<div class="col">
			<div class="news-carousel card-body p-0">
				<!-- partial:index.partial.html -->
				<main class="main-content">
					<section class="slider">
						<div class="slider-inner">
							<div class="slides">
								<div class="slide is-active ">
									<div class="slide-content">
										<div class="caption">
											<a href="#1" class="aligner">

											</a>
										</div>
									</div>
									<div class="image-container">
										<img src="SC.jpg" alt="" class="image" />
									</div>
								</div>
								<div class="slide">
									<div class="slide-content">
										<div class="caption">
											<a href="#2" class="aligner">

											</a>
										</div>
									</div>
									<div class="image-container">
										<img src="SC1.jpg" alt="" class="image" />
									</div>
								</div>
								<div class="slide">
									<div class="slide-content">
										<div class="caption">
											<a href="#3" class="aligner">

											</a>
										</div>
									</div>
									<div class="image-container">
										<img src="SC2.jpg" alt="" class="image" />
									</div>
								</div>
								<div class="slide">
									<div class="slide-content">
										<div class="caption">
											<a href="#4" class="aligner">

											</a>
										</div>
									</div>
									<div class="image-container">
										<img src="SC3.jpg" alt="" class="image" />
									</div>
								</div>
							</div>
							<div class="pagination">
								<div class="arrow prev">
									<span class="svg svg-arrow-left">
										<svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
											height="20px" viewBox="0 0 14 26" enable-background="new 0 0 14 26"
											xml:space="preserve">
											<path
												d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
										</svg>
										<span class="alt sr-only"></span>
									</span>
								</div>
								<div class="item is-active">
									<span class="icon">1</span>
								</div>
								<div class="item">
									<span class="icon">2</span>
								</div>
								<div class="item">
									<span class="icon">3</span>
								</div>
								<div class="item">
									<span class="icon">4</span>
								</div>
								<div class="arrow next">
									<span class="svg svg-arrow-right">
										<svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
											height="20px" viewBox="0 0 14 26" enable-background="new 0 0 14 26"
											xml:space="preserve">
											<path
												d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
										</svg>
										<span class="alt sr-only"></span>
									</span>
								</div>
							</div>
						</div>
					</section>
				</main>
				<!-- partial -->
			</div>
		</div>
		<div class="flexible-view snapshot-gallery">
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);">
					</a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="data-troop equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>

								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-30 text-left">Produk 1</p>
									<!-- Button -->
									<div class="container p-l-30 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-1">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-9">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-17">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-1">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-9">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-17">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							
							</div>
							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-2" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-2"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-2"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-2"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-2"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 2</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-2">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-10">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-18">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-2">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-10">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-18">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 3</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-3">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-11">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-19">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-3">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-11">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-19">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 4</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-4">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-12">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-20">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-4">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-12">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-20">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 5</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-5">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-13">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-21">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-5">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-13">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-21">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 6</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-6">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-14">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-22">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-6">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-14">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-22">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 7</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-7">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-15">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-23">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-7">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-15">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-23">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
			<div class="image-cell">
				<div class="thumbnail-container">
					<div class='main'>
						<img class='tokenImage' src="assets/images/Foto.jpg" alt="NFT" />
						<div class="overflow">
							<h3>Nama Produk</h3>
							<p class='description'>lorem ipsum</p>
							<div class="offers">
								<div class='normal'>
									<div class="price">
										<p>Rp.500.000</p>
									</div>
									<div class="pricecut">
										<p>- 50%</p>
									</div>
								</div>
								<div class='discount'>
									<div class="price">
										<p>Rp.250.000</p>
									</div>
									<div class="duration">
										<p>◷11 days left</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<a class="trigger open-details" href="javascript:void(0);"></a>
					<a class="trigger close-details" href="javascript:void(0);"></a>
				</div>
				<div class="fluid detail-container">
					<div class="grid-container">
						<div class="equalizer grid-x grid-margin-x p-y-60" data-equalizer>

							<span class="show-prev"><i class="fa fa-chevron-left"></i></span>
							<span class="show-next"><i class="fa fa-chevron-right"></i></span>
							<span class="close-details"><i class="fas fa-times"></i></span>

							<div class="desc-imager cell medium-4 image-container main-image text-center"
								data-equalizer-watch>
								<div id="carousel-1" class="carousel slide" data-ride="carousel">

									<div class="drower carousel-indicators">
										<img class="demo cursor active" src="SC.jpg" data-target="#carousel-1"
											data-slide-to="0" alt="The Woods">
										<img class="demo cursor" src="SC1.jpg" data-target="#carousel-1"
											data-slide-to="1" alt="Cinque Terre">
										<img class="demo cursor" src="SC2.jpg" data-target="#carousel-1"
											data-slide-to="2" alt="Mountains and fjords">
										<img class="demo cursor" src="SC3.jpg" data-target="#carousel-1"
											data-slide-to="3" alt="Northern Lights">
									</div>


									<div class="carousel-inner" role="listbox">

										<div style="background-image: url(SC.jpg);" class="carousel-item active">
										</div>

										<div style="background-image: url(SC1.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC2.jpg);" class="carousel-item">
										</div>

										<div style="background-image: url(SC3.jpg);" class="carousel-item">
										</div>

									</div><!-- e carousel-inner -->
								</div><!-- e carousel -->
							</div>
							<div class="desc-details cell medium-7 text-container grid-x p-l-0 s-p-l-0"
								data-equalizer-watch>
								<div class="nama-dan-button">
									<!-- Nama Produk -->
									<p class="p-l-20 text-left">Produk 8</p>
									<!-- Button -->
									<div class="container p-l-20 align-left tombol">
										<div class="row p-0">
											<button type="button" class="btn btn-success col-2 mt-3 ms-3 me-2">
												Beli
											</button>
											<button type="button" class="btn btn-primary col-2 mt-3 me-2">
												Pricing
											</button>
											<button type="button" class="btn btn-danger col-2 mt-3">
												Order
											</button>
										</div>
									</div>
								</div>
								<!-- Deskripsi Produk -->
								<div class="container deskripsi">
									<ul class="nav nav-tabs row g-2 d-flex">
										<li class="nav-item p-0 col-4">
											<a class="nav-link active show" data-bs-toggle="tab"
												data-bs-target="#tab-8">
												<p>Deskripsi</p>
											</a>
										</li>
										<!-- End tab nav item -->

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-16">
												<p class="">Komentar</p>
											</a><!-- End tab nav item -->
										</li>

										<li class="nav-item p-0 col-4">
											<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-24">
												<p>Pricing</p>
											</a>
										</li>
										<!-- End tab nav item -->
									</ul>

									<div class="tab-content">
										<div class="tab-pane active show" id="tab-8">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
													data-aos-delay="100">
													<h3>Voluptatem dignissimos provident</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														ullamco laboris nisi ut aliquip ex ea commodo consequat.
														Duis aute irure dolor in reprehenderit in voluptate velit
														esse cillum dolore eu fugiat nulla pariatur. Excepteur
														sint occaecat cupidatat non proident, sunt in culpa qui
														officia deserunt mollit anim id est laborum.

													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-16">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Neque exercitationem debitis</h3>
													<p class="fst-italic">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit,
														sed do eiusmod tempor incididunt ut labore et dolore magna
														aliqua.
													</p>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
										<div class="tab-pane" id="tab-24">
											<div class="row">
												<div class="order-2 order-lg-1 mt-3 mt-lg-0">
													<h3>Rp.500.000</h3>
												</div>
											</div>
										</div>
										<!-- End tab content item -->
									</div>
								</div>
							</div>

							<!-- content -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer" class="footer">

		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">

					<div class="col-lg-6 col-md-6">
						<div class="footer-info">
							<h3>Buah Tangan Venera</h3>
							<p>
								Jl. Diponegoro X no. 99 <br>
								Kec. Banyumanik, Kota Semarang<br>
								Jawa Tengah 50131<br><br>
								<strong>WA:</strong> +628 227 008 473<br>
								<strong>Email:</strong> info@example.com<br>
							</p>
							<div class="social-links d-flex mt-3">
								<a href="#" class="d-flex align-items-center justify-content-center"><i
										class="bi bi-twitter"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i
										class="bi bi-facebook"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i
										class="bi bi-instagram"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i
										class="bi bi-tiktok"></i></a>
							</div>
						</div>
					</div><!-- Akhir footer kolom info-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Link Bantuan</h4>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Produk</a></li>
							<li><a href="#">Syarat & Ketentuan</a></li>
							<li><a href="#">Kebijakan</a></li>
						</ul>
					</div><!-- Akhir footer kolom link-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Pelatihan</h4>
						<ul>
							<li><a href="#">Tutorial HandCraft</a></li>
						</ul>
					</div><!-- Akhir footer kolom link-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Produk Kami</h4>
						<ul>
							<li><a href="#">HandCraft</a></li>
						</ul>
					</div><!-- Akhir footer kolom link-->

				</div>
			</div>
		</div>

		<div class="footer-legal text-center position-relative">
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>Buah Tangan Venera</span></strong>.
				</div>
				<div class="credits">
					Didesain Oleh Punokawan</a>
				</div>
			</div>
		</div>

	</footer>

	<!-- partial -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/foundation.min.js'></script>
	<script src="assets/js/script.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>