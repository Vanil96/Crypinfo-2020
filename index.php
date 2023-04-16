<?php
include 'header.php';
$page_type = 'index';
?>
<div class="col-12 bg-light" id="uphead">
	<div class="row">
		<div class="col-12 col-md-8 order-2 order-md-1 ">
			<div class="heading">
				<h1 class="page-title"><i class="fa fa-line-chart"></i> Kursy Kryptowalut </h1>
				<h2 class="subtitle"> Sprawdź aktualizowane na bieżąco kursy. Wyszukaj swoją kryptowalutę i sprawdź jej
					szczegółowe
					statystyki. </h2><small><i class="fa fa-refresh"></i> Aktualizacja co 10 sekund</small>
			</div>
		</div>
		<?php include 'parts/traditional-currencies.php'; ?>
	</div>
</div>
<div class="row" ;>
	<div class="col-md-8" id="content">
		<div class="tabela table-responsive-lg  ">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><i class="fa fa-list-ul"> </i> Lista</th>
						<th><i class="fa fa-money"> </i> Cena</th>
						<th><i class="fa fa-percent"> </i> Zmiana(24h) </th>
						<th class="d-none d-lg-block"> <i class="fa fa-bank"> </i> Kapitalizacja </th>
					</tr>
				</thead>
				<tbody>

					<?php
					foreach ($cryptocurrencys as $cryptocurrency) {
						$slug = $cryptocurrency['slug']; ?>
						<tr>
							<td scope="row">
								<img src="assets/img/<?php echo $slug; ?>.png"> <a
									href="cryptocurrency.php?crypto=<?php echo strtolower($slug); ?>">
									<?php echo $slug; ?>
								</a>
							</td>
							<td><span id='<?php echo $slug; ?>pln'> </span> <br> </td>
							<td> <span id='<?php echo $slug; ?>pct'> </span> </td>
							<td class="d-none d-lg-block"> <span id="mkcap_<?php echo strtolower($slug); ?>" class="mk_cap">
									MkCap </span> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php include 'sidebar.php'; ?>
	<div class="col-12">
		<div class="row">
			<div class="col-12 col-md-12" id="down_panel">
				<H4><i class="fa fa-info-circle" aria-hidden="true"></i> Kilka słów o serwisie </H4>
				<p> Umożliwiamy łatwy i szybki dostęp do notowań popularnych kryptowalut w oparciu o aktualne dane
					statystyczne. Dzięki danym zgromadzonym na stronie oraz prostym przelicznikom, łatwiej będzie Ci
					zapoznać się ze światem walut kryptograficznych, oraz poznać cechy którymi ten rynek się
					charakteryzuje.
				</p>

				<p> W celu lepszej orientacji na rynku światowym, nasza strona poza notowaniami kryptowalut, oferuje
					również kursy popularnych walut tradycyjnych według Narodowego Banku Polskiego. Stworzone zostały
					również przeróżne przeliczniki, oraz prosty kalkulator którym możemy przeliczać przemiennie wartości
					po kursach walut tradycyjnych jak i kryptograficznych
				</p>
				<p> Oferujemy Ci również dostęp do świeżych nowinek ekonomicznych odnośnie wszystkich kryptowalut oraz
					blockchain. W zakładce <i>Gazeta</i> odnajdziesz aktualizowaną listę artykułów, posegregowaną od
					najnowszej, aktualizowaną co 2 minuty. Dane pobierane są z najpopularniejszych serwisów
					informacyjnych w świecie blockchain takich jak: <a href="https://bitcoinmagazine.com/"> Bitcoin
						Magazine</a>, <a href="https://cryptonewsreview.com/"> CryptoNewsReview</a>,<a
						href="https://www.cryptoglobe.com/"> CryptoGlobe</a>, <a href="https://cointelegraph.com/">
						CoinTelegraph</a> oraz wiele więcej.
				</p>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>