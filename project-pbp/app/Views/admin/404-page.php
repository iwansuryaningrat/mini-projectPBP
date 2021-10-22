<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/favicon-sfj.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
					"simple-line-icons"
				],
				urls: ['/assets/css/fonts.min.css']
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.css">

	<!-- custom -->
	<link rel="stylesheet" href="/assets/css/sumber-jaya-styles.css">
</head>

<body class="page-not-found" style="background-image: url(/assets/img/bg-404-page.jpg);">
	<div class="wrapper not-found">
		<h1 class="animated fadeIn">404</h1>
		<div class="desc animated fadeIn">
			<span>Something's missing</span>
			<h3 class="desc_error">Halaman ini masih dalam pengerjaan, mohon maaf atas ketidaknyamannya &#128591;</h3>
		</div>
		<a href="/" class="btn btn-primary btn-back-home mt-4 animated fadeInUp">
			<span class="btn-label mr-2">
				<i class="flaticon-home"></i>
			</span>
			Back To Dashboard
		</a>

		<footer class="text-center position-absolute fixed-bottom">
			<p>Copyright &copy; 2021 | <span class="fw-bold">Sumber Jaya Furniture</span>. Jaya Jaya Jaya!</p>
		</footer> <!-- end footer -->
	</div>
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
</body>

</html>