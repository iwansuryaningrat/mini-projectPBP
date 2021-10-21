<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Data Transaksi | Sumber Jaya Furniture</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/favicon-sfj.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: { "families": ["Lato:300,400,700,900"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.6.1/font/bootstrap-icons.min.css"
		integrity="sha512-9a1QYep56cYgIPFq0JYfsh9xRYYmPBxKaD6/ZfVAtplQ6y9ZUSk7GxgC2dmwtxK9T2cGQOxCV6J2Ll51nrvP2w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">

	<!-- custom styles -->
	<link rel="stylesheet" href="assets/css/data_transaksi-styles.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="index.html" class="logo">
					<img src="assets/img/title-logo.svg" alt="navbar brand" class="navbar-brand" style="height: 30px;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
			</div> <!-- End Logo Header -->

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
					</div> <!-- end collapse -->

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
								aria-expanded="false" aria-controls="search-nav">
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
											<a class="col-6 col-md-4 p-0" href="data_barang.html">
												<div class="quick-actions-item">
													<div class="avatar-item bg-danger rounded-circle">
														<i class="fas fa-box-open"></i>
													</div>
													<span class="text">Data Barang</span>
												</div>
											</a> <!-- end data barang -->

											<a class="col-6 col-md-4 p-0" href="index.html">
												<div class="quick-actions-item">
													<div class="avatar-item bg-success rounded-circle">
														<i class="fas fa-home"></i>
													</div>
													<span class="text">Dashboard</span>
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/ava-musa.jpg"
													alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Musa</h4>
												<p class="text-muted">musaalfianmaulana@students.undip.ac.id</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li> <!-- end profil -->
					</ul> <!-- end navbar topbar -->
				</div> <!-- end container fluid -->
			</nav> <!-- End Navbar -->
		</div> <!-- end main header -->

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">

			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/ava-musa.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Musa
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.html">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.html">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a href="data_barang.html">
								<i class="fas fa-box-open"></i>
								<p>Data Barang</p>
								<!-- <span class="badge badge-info">99+</span> -->
							</a>
						</li> <!-- end nav data barang -->

						<li class="nav-item active">
							<a href="data_transaksi.html">
								<i class="fas fa-shopping-cart"></i>
								<p>Data Transaksi</p>
								<!-- <span class="badge badge-info">99+</span> -->
							</a>
						</li> <!-- end nav data transaksi -->
					</ul>
				</div>
			</div>
		</div> <!-- end sidebar -->

		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Transaksi</h4>
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
								<a href="data_transaksi.html">Data Transaksi</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Transaksi Penjualan</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No Invoice</th>
													<th>Waktu Pemesanan</th>
													<th>Nama Barang</th>
													<th>Nama Pembeli</th>
													<th>Jumlah</th>
													<th>Harga Total</th>
													<th>Status</th>
													<th>Update Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>INV101</td>
													<td>01-01-2001</td>
													<td>Kursi Lipat</td>
													<td>Sutejo</td>
													<th>3</th>
													<th>900,000</th>
													<td><span class="badge badge-warning">Belum Transfer</span></td>
													<td style="text-align: center;">
														<a href="form-edit-transaksi.html">
															<button type="button" class="btn">
																<i class="bi bi-pencil-square"></i>
															</button>
														</a>
													</td>
												</tr>
												<tr>
													<td>INV102</td>
													<td>02-01-2001</td>
													<td>Lemari Olympic</td>
													<td>Musa Alfian</td>
													<th>1</th>
													<th>1,499,000</th>
													<td><span class="badge badge-danger">Dibatalkan</span></td>
													<td style="text-align: center;">
														<a href="form-edit-transaksi.html">
															<button type="button" class="btn">
																<i class="bi bi-pencil-square"></i>
															</button>
														</a>
													</td>
												</tr>
												<tr>
													<td>INV103</td>
													<td>19-01-2001</td>
													<td>Meja Kerja</td>
													<td>Kipli</td>
													<th>8</th>
													<th>6,999,000</th>
													<td><span class="badge badge-primary">Dikirim</span></td>
													<td style="text-align: center;">
														<a href="form-edit-transaksi.html">
															<button type="button" class="btn">
																<i class="bi bi-pencil-square"></i>
															</button>
														</a>
													</td>
												</tr>
												<tr>
													<td>INV104</td>
													<td>21-03-2001</td>
													<td>Meja Kerja</td>
													<td>Rahma</td>
													<th>10</th>
													<th>4,499,000</th>
													<td><span class="badge badge-success">Sukses</span></td>
													<td style="text-align: center;">
														<a href="form-edit-transaksi.html">
															<button type="button" class="btn">
																<i class="bi bi-pencil-square"></i>
															</button>
														</a>
													</td>
												</tr>
												<tr>
													<td>INV105</td>
													<td>24-03-2001</td>
													<td>Meja Belajar</td>
													<td>Bejo</td>
													<th>8</th>
													<th>5,999,000</th>
													<td><span class="badge" style="background-color: grey;">Belum Dikirim</span></td>
													<td style="text-align: center;">
														<a href="form-edit-transaksi.html">
															<button type="button" class="btn">
																<i class="bi bi-pencil-square"></i>
															</button>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
					tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<!-- Form Modal -->
								<form action="" method="POST">
									<div class="col-12">
										<!-- Mengambil database -->
										<div class="form-group">
											<label for="invoice">ID Invoice</label>
											<input type="text" class="form-control" id="invoice" name="invoice"
												disabled>
										</div>
										<div class="form-group">
											<label for="namaProduk">Nama Produk</label>
											<input type="text" class="form-control" id="namaProduk" name="nama_produk"
												disabled>
										</div>
										<div class="form-group">
											<label for="namaPembeli">Nama Pembeli</label>
											<input type="text" class="form-control" id="namaPembeli" name="nama_pembeli"
												disabled>
										</div>
										<div class="form-group">
											<label for="waktuPemesanan">Waktu Pemesanan</label>
											<input type="date" class="form-control" id="waktuPemesanan"
												name="waktu_pemesanan" disabled>
										</div>
										<div class="form-group">
											<label for="Status">Status</label>
											<input type="text" class="form-control" id="namaProduk" name="status"
												disabled>
										</div>
										<!-- Merubah status -->
										<div class="form-group">
											<label class="form-label">Update Status</label>
											<div class="selectgroup selectgroup-pills d-flex">
												<label class="selectgroup-item">
													<input type="radio" name="update_status" value="belum_Transfer"
														class="selectgroup-input">
													<span class="selectgroup-button">Belum Transfer</span>
												</label>
												<label class="selectgroup-item">
													<input type="radio" name="update_status" value="dikirim"
														class="selectgroup-input">
													<span class="selectgroup-button">Dikirim</span>
												</label>
												<label class="selectgroup-item">
													<input type="radio" name="update_status" value="dibatalkan"
														class="selectgroup-input bg-red">
													<span class="selectgroup-button">Dibatalkan</span>
												</label>
												<label class="selectgroup-item">
													<input type="radio" name="update_status" value="selesai"
														class="selectgroup-input bg-red">
													<span class="selectgroup-button">Selesai</span>
												</label>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Perbarui</button>
							</div>
						</div>
					</div>
				</div> <!-- Modal End -->
			</div> <!-- end container -->

			<footer class="footer text-center">
				<p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span> . Jaya Jaya Jaya!</p>
			</footer>
		</div> <!-- end main panel -->
	</div> <!-- end wrapper -->


	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
	<script>
		$(document).ready(function () {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every(function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function (d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function () {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

</html>