const rounding = function (n, k) {
  var factor = Math.pow(10, k);
  return Math.round(n * factor) / factor;
}

function time_convert(num) {
  const minutes = num % 60;
  const hours = Math.floor(num / 60);
  const days = Math.floor(num / 60 / 24);

  if (num < 60) {
    return `${minutes} min. temu`;
  }
  else if (num > 60 && num < (60 * 24)) {
    return `${hours} godz. temu`;
  }
  else if (num >= (60 * 24)) {
    return `${days} dni temu`;
  }
}


//global info
(async function () {
  const apiUrl = "https://api.coinlore.com/api/global/?json"
  const req = await fetch(apiUrl);
  const res = await req.json();


  let capitalisation = res[0].total_mcap;
  let btcDomination = res[0].btc_d;
  let volume = res[0].total_volume;


  document.getElementById('kapitalizacja').textContent = capitalisation.toLocaleString() + " $";
  document.getElementById('btc_dominacja').textContent = btcDomination + "%";
  document.getElementById('volume').textContent = volume.toLocaleString() + " $";
  document.getElementById('progress_bar').setAttribute("style", "width:" + btcDomination + "%");
})();



//global news
(async function () {

  const req = await fetch("https://min-api.cryptocompare.com/data/v2/news/?lang=EN&limit=1&api_key=" + apiKey);
  const res = await req.json();

  let current = Date.now();
  let postDate = res.Data[0].published_on * 1000;
  let timeNw = (Math.round(((current - postDate) / 1000) / 60));


  document.getElementById('title').textContent = res.Data[0].title;
  document.getElementById("img").setAttribute("src", res.Data[0].imageurl);
  document.getElementById("url").setAttribute("href", res.Data[0].url);
  document.getElementById("time-nw").textContent = time_convert(timeNw);

})();


//fiat values
(async function () {

  const req = await fetch("http://api.nbp.pl/api/exchangerates/tables/A/?format=json");
  const res = await req.json();

  const eur_price = res[0].rates[7].mid;
  const usd_price = res[0].rates[1].mid;
  const chf_price = res[0].rates[9].mid;
  const gbp_price = res[0].rates[10].mid;


  const eur_cut = (rounding(eur_price, 2));
  const usd_cut = (rounding(usd_price, 2));
  const chf_cut = (rounding(chf_price, 2));
  const gbp_cut = (rounding(gbp_price, 2));

  document.getElementById('eur').textContent = eur_cut + " zł";
  document.getElementById('usd').textContent = usd_cut + " zł";
  document.getElementById('chf').textContent = chf_cut + " zł";
  document.getElementById('gbp').textContent = gbp_cut + " zł";


})();







