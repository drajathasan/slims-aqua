<?php
section('meta', function() {
return '<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>' . _yield('title') . '</title>
	<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
	<link rel="icon" href="' . aquaUrl('assets/img/icon.ico') . '" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="' . aquaUrl('assets/js/plugin/webfont/webfont.min.js') . '"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [\'' . aquaUrl('assets/css/fonts.min.css') . '\']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="' . aquaUrl('assets/css/bootstrap.min.css') . '">
	<link rel="stylesheet" href="' . aquaUrl('assets/css/atlantis.min.css') . '">

	<!-- CSS Just for demo purpose, don\'t include it in your project -->
	<link rel="stylesheet" href="' . aquaUrl('assets/css/demo.css') .'">
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
    </style>';
});