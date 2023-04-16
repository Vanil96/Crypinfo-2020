<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Crypinfo</title>
	<meta name="description" content="Portal skupiający informacje odnośnie kryptowalut">
	<meta name="keywords" content="kryptowaluty, bitcoin, newsy, kurs, klkulator ">
	<meta name="author" content="Crypinfo">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.ico" />
	<!--  Bootstrap connection -->
	<link rel="stylesheet" href="assets/lib/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<?php include 'config.php'; ?>
</head>

<body class="bg-light">
	<main>
		<div class="container" id="primary">
			<header>
				<nav class="navbar navbar-expand-md navbar navbar-light" id="nav" ;>
					<a class="navbar-brand" href="<?php echo $url; ?>"><img src="favicon.ico"> Crypinfo</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link" href="<?php echo $url; ?>"><i class="fa fa-home"></i> Główna
								<span class="sr-only">(current)</span></a>
							<a class="nav-item nav-link" href="<?php echo $url; ?>/news.php"><i
									class="fa fa-newspaper-o"> </i> Gazeta</a>

							<a class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-line-chart"></i> Kryptowaluty
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<?php
                                    foreach ($cryptocurrencys as $cryptocurrency) {
	                                    $slug = $cryptocurrency['slug'];
	                                    $name = $cryptocurrency['name']; ?>
									<a class="dropdown-item"
										href="<?php echo $url; ?>/cryptocurrency.php?crypto=<?php echo strtolower($slug); ?>"><img
											src="assets/img/<?php echo strtoupper($slug); ?>.png">
										<?php echo $name; ?>
									</a>
									<?php } ?>

								</div>
							</a>
							<a class="nav-item nav-link" href="<?php echo $url; ?>/calculator.php"><i
									class="fa fa-calculator"> </i>
								Kalkulator</a>
						</div>
					</div>
				</nav>

			</header>