<footer class="col-12" id="footer">
   <p>Nie stanowimy „rekomendacji” w rozumieniu przepisów Rozporządzenia
      Ministra Finansów z dnia 19 października 2005 r. w sprawie informacji stanowiących rekomendacje dotyczące
      instrumentów finansowych, lub ich emitentów (Dz.U. z 2005 r. Nr 206, poz. 1715). Zawarte w serwisie treści nie
      spełniają wymogów stawianych rekomendacjom w rozumieniu w/w ustawy, nie zawierają konkretnej wyceny żadnego
      instrumentu finansowego, nie opierają się na żadnej metodzie wyceny, a także nie określają ryzyka inwestycyjnego.
      Portal nie ponosi odpowiedzialności za wszelkie decyzje, podjęte pod wpływem danych prezentowanych w serwisie.
   </p>
   <span><i class="fa fa-copyright"></i> Copyright by <img src="favicon.ico">Crypinfo</span>


</footer>
</div> <!-- end container -->
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
   integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="assets/lib/bootstrap.min.js"></script>


<script src="assets/js/theme.js" async> </script>
<script src="assets/js/calculator.js" async> </script>

<?php
if (isset($page_type) && strtolower($page_type) == 'index') { ?>
   <script src="assets/js/table-prices.js" async> </script>
<?php }

if (isset($page_type) && strtolower($page_type) == 'single-crypto') { ?>
   <script src="assets/js/single-crypto.js" async> </script>
<?php }

if (isset($page_type) && strtolower($page_type) == 'news') { ?>
   <script src="assets/js/news.js" async> </script>
   <script src="assets/js/news-feeds.js" async> </script>

<?php } ?>
</body>

</html>