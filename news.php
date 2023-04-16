<?php
include 'header.php';
$page_type = 'news';
?>

<main data-crypto="<?php echo $crypto; ?>" id="main">
	<div class="col-12 bg-light" id="uphead">
		<div class="row">

			<div class="col-12 col-md-8 order-2 order-md-1 ">
				<div class="heading">
					<h1 class="page-title"><i class="fa fa-calculator"></i> Newsy </h1>
					<h2 class="subtitle"> Obserwuj aktualizowane wiadomości ze świata kryptowalut. </h2> <small><i
							class="fa fa-refresh"></i> Aktualizacja co 120 sekund</small>
				</div>

			</div>
			<?php include 'parts/traditional-currencies.php'; ?>

		</div>
	</div>
	<div class="row" ;>
		<div class="col-md-8" id="content">
			<div id="accordion">
			</div>

		</div>

		<?php include 'sidebar.php'; ?>
	</div>
</main>
<?php
include 'footer.php';
?>