<aside class="col-md-4">

  <!-- GLOBAL STATISTIC -->
  <ul class="list-group">
    <li class="list-group-item list-group-item-primary"><i class="fa fa-signal"> </i><b> Kapitalizacja: </b> <span
        id="kapitalizacja"> </span></li>
    <li class="list-group-item" style="color:green"><i class="fa fa-bitcoin"> </i> Dominacja BTC: <span
        id="btc_dominacja"> </span>
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="progress_bar">
        </div>
      </div>
    </li>
    <li class="list-group-item"><i class="fa fa-money"> </i> Wolumen: <span id="volume"> </span></li>

  </ul>


  <!-- CHART  -->
  <?php if (isset($page_type) && strtolower($page_type) == 'single-crypto') { ?>

  <div id="chart">
    <script type="text/javascript">
      baseUrl = "https://widgets.cryptocompare.com/";
      var scripts = document.getElementsByTagName("script");
      var embedder = scripts[scripts.length - 1];
      (function () {
        var appName = encodeURIComponent(window.location.hostname);
        if (appName == "") { appName = "local"; }
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var theUrl = baseUrl + 'serve/v1/coin/chart?fsym=<?php echo strtoupper($crypto); ?>&tsym=PLN';
        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
        embedder.parentNode.appendChild(s);
      })();
    </script>

  </div>
  <!--CHART -->
  <?php } ?>

  <!-- NEWS CARD  -->
  <div class="card bg-light" id="lastnews">
    <div class="card-header">
      <h5> <i class="fa fa-newspaper-o  "> </i> Ostatni artykuł</h5>
    </div>
    <div class="card-body">
      <img class="card-img-top img-fluid" id="img">
      <p class="card-text" id="title"> </p>
      <span id="time-nw"> </span>
    </div>
    <a id="url" class="btn btn-info"><i class="fa fa-newspaper-o  "> </i> Czytaj Dalej</a>
  </div>


  <!-- Calculator Card -->
  <?php if (isset($page_type) && strtolower($page_type) !== 'calculator') { ?>
  <div class="card bg-light calculator-wrap" id="calculator">

    <div class="card-header">
      <h5> <i class="fa fa-calculator  "> </i> Kalkulator</h5>
    </div>
    <div class="card-body">
      <div class="form-row">
        <form action="" name="calculate">
          <div class="row">
            <span class="col-6"> Co chcesz przeliczyć:</span>
            <select name="fromValue" class=" col-4 ">
            </select>
            <input type="number" name="count" class="form-control" placeholder="ilosc" value="100" />
          </div>
          <div class="row">
            <span class="col-6"> Na co chcesz przeliczyć:</span>
            <select name="forValue" class="col-4">
            </select>
            <input type="text" class="form-control" name="calc-result" size="20" disabled="disabled" placeholder="=" />
          </div>

        </form>
      </div>
    </div>
    <button id="calculator-initializer" class="btn btn-info text-light"><i class="fa fa-calculator  "> </i>
      Oblicz</button>
  </div>
  <?php } ?>

  <?php if (isset($page_type) && strtolower($page_type) == 'news') { ?>
  <div class="card bg-light" id="feed-container">
    <div class="card-header">
      <h5> <i class="fa fa-list-ul  "> </i> Źródła artykułów</h5>
    </div>
    <ul class="list-group" id="feed-list">
       </ul>
  </div>
  <?php } ?>




</aside>