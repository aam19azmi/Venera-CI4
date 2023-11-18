
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title><?= $title ?></title>

		<!-- Icon title -->
		<link rel="shortcut icon" href="assets/images/logo-putih.png" type="image/x-icon">

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="assets/images/logo-putih.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="assets/images/logo-putih.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="assets/images/logo-putih.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
	<body class="login-page">
		<?= $this->include('layout/header_auth') ?>
		<?= $this->include('layout/navbar') ?>

		<?= $this->renderSection('content') ?>

		<?= $this->include('layout/footer') ?>
	</body>
</html>
