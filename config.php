<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$cryptocurrencys = array(
	array('name' => 'Bitcoin', 'slug' => 'BTC', 'newsCategories' => array('btc', 'bitcoin')),
	array('name' => 'Bitcoin Cash', 'slug' => 'BCH', 'newsCategories' => array('bch', 'bitcoincash')),
	array('name' => 'Ethereum', 'slug' => 'ETH', 'newsCategories' => array('eth', 'ethereum')),
	array('name' => 'Monero', 'slug' => 'XMR', 'newsCategories' => array('xmr', 'monero')),
	array('name' => 'DASH', 'slug' => 'DASH', 'newsCategories' => array('dash', 'digitalcash')),
	array('name' => 'Lite Coin', 'slug' => 'LTC', 'newsCategories' => array('ltc', 'litecoin')),
	array('name' => 'Zcash', 'slug' => 'ZEC', 'newsCategories' => array('zcash', 'zec')),
	array('name' => 'Decred', 'slug' => 'DCR', 'newsCategories' => array('btc', 'bitcoin')),
	array('name' => 'Binance Coin', 'slug' => 'BNB', 'newsCategories' => array('binance', 'altcoin', 'altcoins')),
	array('name' => 'Bitcoin gold', 'slug' => 'BTG', 'newsCategories' => array('market', 'altcoins', 'bitcoin')),
	array('name' => 'Ethereum Classic', 'slug' => 'ETC', 'newsCategories' => array('etc', 'ethereumclassic')),
	array('name' => 'Lisk coin', 'slug' => 'LSK', 'newsCategories' => array('market', 'altcoin', 'altcoins')),
);
?>

<script>
	const apiKey = '<?php echo $_ENV['CRYPTOCURRENCY_API_KEY'];?>'
	const cryptocurrencys = <?php echo json_encode($cryptocurrencys); ?>;
</script>