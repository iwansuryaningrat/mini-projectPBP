<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Delete Barang | Sumber Jaya Furniture</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/favicon-sfj.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">

	<!-- custom -->
	<link rel="stylesheet" href="/assets/css/sumber-jaya-styles.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="/assets/img/title-logo.svg" alt="navbar brand" class="navbar-brand" style="height: 30px;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> <!-- end search hidden -->

						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a> <!-- end navlink -->

							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div> <!-- quick actions header -->

								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="index.html">
												<div class="quick-actions-item">
													<div class="avatar-item bg-success rounded-circle">
														<i class="fas fa-home"></i>
													</div>
													<span class="text">Dashboard</span>
												</div>
											</a> <!-- end data barang -->

											<a class="col-6 col-md-4 p-0" href="data_transaksi.html">
												<div class="quick-actions-item">
													<div class="avatar-item bg-warning rounded-circle">
														<i class="fas fa-shopping-cart"></i>
													</div>
													<span class="text">Data Transaksi</span>
												</div>
											</a> <!-- end data transaksi -->

											<a class="col-6 col-md-4 p-0" href="index.html">
												<div class="quick-actions-item">
													<div class="avatar-item bg-info rounded-circle">
														<i class="fas fa-file-signature"></i>
													</div>
													<span class="text">Laporan Bulanan</span>
												</div>
											</a> <!-- end transaksi bulanan -->
										</div> <!-- end row -->
									</div> <!-- end quick items -->
								</div> <!-- quick actions scroll -->
							</div> <!-- end dropdown menu quick actions -->
						</li> <!-- end quick actions -->

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="/assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="/assets/img/ava-musa.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Musa</h4>
												<p class="text-muted">musaalfianmaulana@students.undip.ac.id</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/logout">Logout</a>
									</li>
								</div>
							</ul>
						</li> <!-- end profil -->
					</ul> <!-- end navbar top navbar -->
				</div> <!-- end container fluid -->
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Musa
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div> <!-- end info -->
					</div> <!-- end user -->

					<ul class="nav nav-primary">
						<li class="nav-item">
							<a  href="index.html">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.html">
											<span class="sub-item">Dashboard</span>
										</a>
									</li>
								</ul>
							</div>
						</li> <!-- end nav item -->

						<li class="nav-item active">
							<a href="data_barang.html">
								<i class="fas fa-box-open"></i>
								<p>Data Barang</p>
							</a>
						</li> <!-- end nav data barang -->

						<li class="nav-item">
							<a href="data_transaksi.html">
								<i class="fas fa-shopping-cart"></i>
								<p>Data Transaksi</p>
							</a>
						</li> <!-- end nav data transaksi -->
					</ul> <!-- end nav primary -->
				</div> <!-- end sidebar content -->
			</div> <!-- end sidebar wripper -->
		</div>
		
		<!-- detail barang -->
		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Hapus Barang</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="index.html">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="data_barang.html">Data Barang</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="form-delete-barang.html">Hapus Barang</a>
							</li>
						</ul>
					</div> <!-- end page header -->

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-12 row image-gallery">
											<a href="/assets/img/productimg/chair-prod.png">
												<img src="/assets/img/productimg/chair-prod.png" class="img-fluid">
											</a>
										</div> <!-- end pictures -->

										<div class="col-md-6 com-sm-12">
											<p>1290901 ID</p>
											<h1 class="fs_big fw-bold">Chair Coffea Shop</h1>
											<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Accusantium corrupti odio in nostrum voluptatem perspiciatis eveniet reiciendis enim minus minima, inventore rem aspernatur molestias asperiores maxime similique ratione repellendus ad!</p>

											<table class="table">
												<thead>
													<tr>
														<td class="fw-bold">Kategori</td>
														<td>Home Furniture</td>
													</tr>
													<tr>
														<td class="fw-bold">Harga</td>
														<td>IDR 1,799,000</td>
													</tr>
													<tr>
														<td class="fw-bold">Berat</td>
														<td>4,0 Kg</td>
													</tr>
													<tr>
														<td class="fw-bold">Stok</td>
														<td>32</td>
													</tr>
													<tr>
														<td class="fw-bold">Tanggal Masuk</td>
														<td>20/8/2021</td>
													</tr>
													<tr>
														<td class="fw-bold">Tanggal Update</td>
														<td>20/10/2021</td>
													</tr>
												</thead>
											</table>
										</div> <!-- end desc -->
									</div> <!-- end row -->
								</div> <!-- end card body -->

								<div class="card-body">
									<div class="d-flex justify-content-end px-lg-4 px-sm-2">
										<a href="data_barang.html" class="btn btn-info" role="button" style="border-radius: 30px;">Kembali</a>
										<a href="#" class="btn btn-danger ml-4" role="button" style="border-radius: 30px;">Hapus Data</a>
									</div>
								</div>
							</div> <!-- end card -->
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end page inner -->
			</div> <!-- end container -->

			<footer class="footer text-center">	
				<p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span>. Jaya Jaya Jaya!</p>	
			</footer> <!-- end footer -->
		</div>
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Moment JS -->
	<script src="/assets/js/plugin/moment/moment.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- DateTimePicker -->
	<script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 -->
	<script src="/assets/js/plugin/select2/select2.full.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- jQuery Validation -->
	<script src="/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<!-- Atlantis JS -->
	<script src="/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/assets/js/setting-demo2.js"></script>
	<script>
		$('#birth').datetimepicker({
			format: 'MM/DD/YYYY'
		});

		$('#state').select2({
			theme: "bootstrap"
		});

		/* validate */

		// validation when select change
		$("#state").change(function(){
			$(this).valid();
		})

		// validation when inputfile change
		$("#uploadImg").on("change", function(){
			$(this).parent('form').validate();
		})

		$("#exampleValidation").validate({
			validClass: "success",
			rules: {
				gender: {required: true},
				confirmpassword: {
					equalTo: "#password"
				},
				birth: {
					date: true
				},
				uploadImg: {
					required: true, 
				},
			},
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			},
		});

		// This will create a single gallery from all elements that have class "gallery-item"
		$('.image-gallery').magnificPopup({
			delegate: 'a', 
			type: 'image',
			removalDelay: 300,
			gallery:{
				enabled:true,
			},
			mainClass: 'mfp-with-zoom', 
			zoom: {
				enabled: true, 
				duration: 300,
				easing: 'ease-in-out',
				opener: function(openerElement) {
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});
	</script>
</body>
</html>