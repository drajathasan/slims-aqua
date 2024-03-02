<?php
section('meta', function() {
ob_start();
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?= _yield('title') ?></title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
<link rel="icon" href="<?= aquaUrl('assets/img/icon.ico') ?>" type="image/x-icon"/>

<!-- Fonts and icons -->
<script src="<?= aquaUrl('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
<script>
	WebFont.load({
		google: {"families":["Lato:300,400,700,900"]},
		custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= aquaUrl('assets/css/fonts.min.css') ?>']},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="<?= aquaUrl('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= aquaUrl('assets/css/atlantis.min.css') ?>">

<!-- CSS Just for demo purpose, don\'t include it in your project -->
<link rel="stylesheet" href="<?= aquaUrl('assets/css/demo.css') ?>">

<!--   Core JS Files   -->
<script src="<?= aquaUrl('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
<script src="<?= aquaUrl('assets/js/core/popper.min.js') ?>"></script>
<script src="<?= aquaUrl('assets/js/core/bootstrap.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?= aquaUrl('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
<script src="<?= aquaUrl('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?= aquaUrl('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

<!-- Chart JS -->
<script src="<?= aquaUrl('assets/js/plugin/chart.js/chart.min.js') ?>"></script>

<!-- jQuery Sparkline -->
<script src="<?= aquaUrl('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

<!-- Atlantis JS -->
<script src="<?= aquaUrl('assets/js/atlantis.min.js') ?>"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= aquaUrl('assets/js/setting-demo.js') ?>"></script>
<!-- <script src="<?= aquaUrl('assets/js/demo.js') ?>"></script> -->
<style>
	.logo-header .logo {
		display: flex !important;
	}

	.logo-header .nav-toggle {
		position: absolute;
		top: 0;
		right: 18px;
		z-index: 5;
		height: inherit;
		display: flex;
	}
</style>
<?php
return ob_get_clean();
});