<?php
$crypto = trim(json_encode($_GET['crypto']), '"'); //clear quotes from json encode variable



if (is_string($crypto)) {
	include 'header.php';
	$page_type = 'single-crypto';

	foreach ($cryptocurrencys as $cryptocurrency) {
		if ($cryptocurrency['slug'] == strtoupper($crypto)) {
			$crypto_fullname = $cryptocurrency['name'];
		}
	}


	?>
	<main data-crypto="<?php echo $crypto; ?>" id="main">
		<div class="col-12 bg-light" id="uphead">
			<div class="row">
				<div class="col-12 col-md-8 order-2 order-md-1 ">
					<div class="heading">
						<h2 class="page-title"> Szczegółowe informacje </h2>
						<h3 class="subtitle"> Aktualizowane na bieżąco informacje nt. danej kryptowaluty </h3><small><i
								class="fa fa-refresh"></i> Aktualizacja co 20 sekund</small>
					</div>
				</div>
				<?php include 'parts/traditional-currencies.php'; ?>

			</div>
		</div>

		<div class="row" ;>
			<div class="col-md-8" id="content">
				<div class="row">
					<div id="head-indyvidualpage" class="col-6">
						<h1> <img src="assets/img/<?php echo strtoupper($crypto); ?>.png" alt="Ikona Kryptowaluty">
							<?php
							echo $crypto_fullname;
							?>
						</h1>
					</div>
				</div>

				<div class="jumbotron jumbotron-fluid jumbotron-ind">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-12">
									<h4> Aktualny kurs
										<?php echo strtoupper($crypto); ?>
									</h4> <span>Aktualizacja danych co 20 sekund </span>
								</div>
								<div class="col-12"> <span data-name="price-pln"> </span> </div>
								<div id="well_price" class="col-12">
									<span data-name="price-usd"> usd price </span> <br>
									<span data-name="price-eur"> eur price </span><br>

								</div>

							</div>

						</div>
						<div class="col-12 col-md-6 jumb-right">
							<div id="well_general">
								<span><i class="fa fa-signal" style="color:green"> </i> Kapitalizacja: </span> <span
									data-name="capital" class="value-ind-right bold"> kapital</span> <br>
								<span><i class="fa fa-money" style="color:green;"> </i> Wolumen(24h): </span> <span
									data-name="wolumen" class="value-ind-right bold"> wolumen </span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-md-3 ">
							<hr>
							<h6><i class="fa fa-level-up"> </i>High 24h </h6> <span data-name="high" class="bold"> high
							</span>
						</div>
						<div class="col-6 col-md-3 ">
							<hr>
							<h6><i class="fa fa-level-down"> </i>Low 24h </h6> <span data-name="low" class="bold"> low
							</span>
						</div>
						<div class="col-6 col-md-3 ">
							<hr>
							<h6><i class="fa fa-calculator"> </i> 1000 PLN </h6> <span data-name="calc" class="bold">
								calc</span>
						</div>
						<div class="col-6 col-md-3 ">
							<hr>
							<h6><i class="fa fa-percent"> </i> Zmiana(24h) </h6> <span data-name="change" class="bold">
								change </span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="accordion col-12" id="accordionExample">
						<div class="card">
							<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseOne"
								aria-expanded="true" aria-controls="collapseOne">
								<i class="fa fa-history"></i><b> </i>Analiza tygodnia</b> <i>(Kliknij aby schować/pokazać)
								</i>
							</button>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-parent="#accordionExample">


								<script type="text/javascript">
									baseUrl = "https://widgets.cryptocompare.com/";
									var scripts = document.getElementsByTagName("script");
									var embedder = scripts[scripts.length - 1];
									var cccTheme = { "General": { "background": "#F8F9FB", "borderColor": "#F8F9FB" } };
									(function () {
										var appName = encodeURIComponent(window.location.hostname);
										if (appName == "") { appName = "local"; }
										var s = document.createElement("script");
										s.type = "text/javascript";
										s.async = true;
										var theUrl = baseUrl + 'serve/v1/coin/histo_week?fsym=<?php echo $crypto; ?>&tsym=PLN';
										s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
										embedder.parentNode.appendChild(s);
									})();
								</script>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-12 newsy-ind">
						<h4> <i class="fa fa-newspaper-o"> </i> Ostatnie wiadomości </h4> <small> Artykuły związane z daną
							kryptowalutą</small>
					</div>
					<div id="accordion">
					</div>
				</div>

				<H5> <i class="fa fa-info-circle"> </i> Informacje </H5>
				<p> Statystyki coinów wyliczane są na podstawie średniej ważonej z ponad 100 giełd kryptowalut co wpływa na
					ich precyzyjność. Dodatkowo dla każdej kryptowaluty udostępniamy gazetkę z najnowszymi informacjami na
					jej temat. </p>
			</div>
			<?php include 'sidebar.php'; ?>
		</div>
	</main>
	<?php
	include 'footer.php';
} else {
	header("Location: /");
	die();
}
?>