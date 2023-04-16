<?php
include 'header.php';
$page_type = 'calculator';
?>

<main data-crypto="<?php echo $crypto; ?>" id="main">
	<div class="col-12 bg-light" id="uphead">
		<div class="row">
			<div class="col-12 col-md-8 order-2 order-md-1 ">
				<div class="heading">
					<h1 class="page-title"><i class="fa fa-calculator"></i> Kalkulator <br> </h1>
					<h2 class="subtitle"> Został wzbogacony o wiele więcej pozycji kryptowalut oraz walut tradycyjnych z
						całego świata,
						od teraz nie ma wartości do niepoliczenia! </h2><small><i class="fa fa-list"></i> W dalszej
						części znajdziesz liste walut które obsługuje kalkulator</small>
				</div>
			</div>
			<?php include 'parts/traditional-currencies.php'; ?>
		</div>
	</div>
	<div class="row" ;>
		<div class="col-md-8" id="content">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="card bg-light calculator-wrap" id="calculator_pg">
						<div class="card-header">
							<h3> <i class="fa fa-calculator  "> </i> Oblicz</h3>
						</div>
						<div class="card-body">
							<div class="form-row">
								<form action="" name="calculate">
									<div class="row">
										<span class="col-6"> Co chcesz wymienić:</span>

										<select name="fromValue" class=" col-4 "> </select>
										<input type="number" name="count" class="form-control" placeholder="ilosc"
											value="100" />
									</div>
									<div class="row">
										<span class="col-6"> Na co wymieniamy:</span>
										<select name="forValue" class="col-4"> </select>
									</div>
									<input type="text" class="form-control" name="calc-result" size="20"
										disabled="disabled" placeholder="=" />
								</form>
							</div>
						</div>
						<button id="calculator-initializer" class="btn btn-info text-light"><i
								class="fa fa-calculator  "> </i> Oblicz</button>

					</div>

				</div>
			</div>

			<h3> Kalkulator obsługuje poniższe waluty: </h3>
			<div class="row" id="calpg-list">

				<div class="col-6">
					<div class="card bg-light" id="lastnews">
						<div class="card-header">
							<h5> <i class="fa fa-list-ul  "> </i> Waluty Fiat</h5>
						</div>
						<ul class="list-group" id="feed-list">
							<li class="list-group-item">PLN polski złoty</li>
							<li class="list-group-item">EUR Euro</li>
							<li class="list-group-item">USD dolar amerykański</li>
							<li class="list-group-item">GBP funt szterling</li>
							<li class="list-group-item">CHF frank szwajcarski</li>
							<!--Dodatkowe waluty tradycyjne-->
							<li class="list-group-item">HKD dolar hongkongu</li>
							<li class="list-group-item">CAD dolar kanadyjski</li>
							<li class="list-group-item">NZD dolar nowozelandzki </li>
							<li class="list-group-item">CZK korona czeska</li>
							<li class="list-group-item">SEK korona szwedzka</li>
							<li class="list-group-item">SGD dolar singapurski</li>
							<li class="list-group-item">HUF forint (Węgry)</li>
							<li class="list-group-item">UAH hrywna (Ukraina)</li>
							<li class="list-group-item">DKK korona duńska </li>
							<li class="list-group-item">HRK kuna (Chorwacja)</li>
							<li class="list-group-item">BGN lew (Bułgaria)</li>
							<li class="list-group-item">BRL real (Brazylia)</li>
							<li class="list-group-item">ILS szekel izraelski</li>
						</ul>
					</div>
				</div>
				<div class="col-6">
					<div class="card bg-light" id="lastnews">
						<div class="card-header">
							<h5> <i class="fa fa-list-ul  "> </i> Kryptowaluty</h5>
						</div>
						<ul class="list-group" id="feed-list">
							<li class="list-group-item">BTC Bitcoin </li>
							<li class="list-group-item">ETH Ethereum</li>
							<li class="list-group-item">XMR Monero</li>
							<li class="list-group-item">DASH</li>
							<li class="list-group-item">LTC Litecoin</li>
							<li class="list-group-item">BTG Bitcoin Gold</li>
							<li class="list-group-item">LSK Liskcoin</li>
							<li class="list-group-item">BCH Bitcoin Cash</li>
							<li class="list-group-item">ZEC Zcash</li>
							<li class="list-group-item">DCR Decred</li>
							<li class="list-group-item">BNB Binance Coin</li>
							<li class="list-group-item">ETC Ethereum Classic</li>
							<li class="list-group-item">XRP Ripple</li>
							<li class="list-group-item">EOS</li>
							<li class="list-group-item">ATOM Cosmos</li>
							<li class="list-group-item">XTZ Tezos</li>
							<li class="list-group-item">NEO</li>
							<li class="list-group-item">XZC Zcoin</li>
							<li class="list-group-item">STRAT Stratis</li>
							<li class="list-group-item">OMG OmiseGo</li>
							<li class="list-group-item">WAVES</li>
							<li class="list-group-item">LINK Chainlink</li>
						</ul>
					</div>
				</div>
			</div>
			<H5> <i class="fa fa-info-circle"> </i> Informacje </H5>
			<p> Przejrzysty, prosty w obsłudze i dobrze rozplanowany kalkulator. Zawiera bieżące dane na temat kursu
				kilkunastu kryptowalut oraz walut tradycyjnych z Europy i świata na których podstawie dokonuje szybkich
				obliczeń. </p>
			<p> Kursy walut tradycyjnych aktualizowane są na podstawie udostępnionych danych Narodowego Banku Polskiego
				które są aktualizowane każdego dnia. Ceny walut kryptograficznych są średnią wartością liczoną na
				podstawie cen ponad 100 giełd które mają je w swojej ofercie. </p>
		</div>

		<?php include 'sidebar.php'; ?>
	</div>
</main>
<?php
include 'footer.php'; ?>