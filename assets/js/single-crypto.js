
const cryptoSlug = document.querySelector('main[data-crypto]').getAttribute('data-crypto').toUpperCase();
let currentCrypto;
cryptocurrencys.forEach(e => { if (e.slug == cryptoSlug) { currentCrypto = e; } })
if (currentCrypto.slug) {

  (async () => {
    const res = await fetch(`https://min-api.cryptocompare.com/data/pricemultifull?fsyms=${currentCrypto.slug}&tsyms=USD,PLN,EUR,GBP&api_key=${apiKey}`);
    const data = await res.json();
    let parsed;
    eval("with (cryptoSlug) {parsed = (data.RAW." + currentCrypto.slug + ")}");

    const cryptoStats = {
      pricePln: parsed.PLN.PRICE,
      priceUsd: parsed.USD.PRICE,
      priceEur: parsed.EUR.PRICE,
      low: parsed.PLN.LOW24HOUR,
      high: parsed.PLN.HIGH24HOUR,
      change: parsed.PLN.CHANGEPCT24HOUR,
      kapital: parsed.USD.MKTCAP,
      wolumen: parsed.USD.VOLUME24HOUR,
    }


    const single = {
      pricePln: document.querySelector('[data-name="price-pln"]'),
      priceUsd: document.querySelector('[data-name="price-usd"]'),
      priceEur: document.querySelector('[data-name="price-eur"]'),
      high: document.querySelector('[data-name="high"]'),
      low: document.querySelector('[data-name="low"]'),
      calc: document.querySelector('[data-name="calc"]'),
      change: document.querySelector('[data-name="change"]'),
      capital: document.querySelector('[data-name="capital"]'),
      wolumen: document.querySelector('[data-name="wolumen"]'),
    }

    single.pricePln.textContent = cryptoStats.pricePln.toLocaleString() + " zł";
    single.priceUsd.textContent = cryptoStats.priceUsd.toLocaleString() + " USD";
    single.priceEur.textContent = cryptoStats.priceEur.toLocaleString() + " EUR";
    single.high.textContent = cryptoStats.high.toLocaleString() + " zł";
    single.low.textContent = cryptoStats.low.toLocaleString() + " zł";
    single.change.textContent = cryptoStats.change.toLocaleString() + "%";
    single.capital.textContent = cryptoStats.kapital.toLocaleString() + " $";
    single.wolumen.textContent = cryptoStats.wolumen.toLocaleString() + " $";
    single.calc.textContent = ((1 / cryptoStats.pricePln) * 1000).toLocaleString() + cryptoSlug;


    if (cryptoStats.change > 0) { single.change.setAttribute("style", "color:green;") }
    else if (cryptoStats.change < 0) { single.change.setAttribute("style", "color:red;"); }
    else { single.change.setAttribute("style", "color:purple;"); };

  })();


  //news
  (async function () {

    let newsLimit = 15;
    const newsUrl = `https://min-api.cryptocompare.com/data/v2/news/?lang=EN&categories=${currentCrypto.newsCategories.join(',')}&limit=${newsLimit++}&api_key=${apiKey}`;

    const req = await fetch(newsUrl);
    const res = await req.json();
    const news = res.Data;

    const currentDate = Date.now();
    const container = document.querySelector('#accordion');
    for (let i = 0; i <= newsLimit; i++) {
      let timelast = (Math.round(((currentDate - (news[i].published_on * 1000)) / 1000) / 60));
      let status;
      if (i === 0) { status = 'show' } else { status = 'hide' };
      container.innerHTML += ` 
  <div class="card">
  <div class="card-header" id="heading-${i}">
    <h5 class="mb-0">
      <img src="${news[i].imageurl}" class="card-img-top img-fluid img-acordion" > 
    <span class="text-primary title" data-toggle="collapse" data-target="#collapse${i}"> ${news[i].title} </span>
  </h5> <span class="col-12 timenews"> ${time_convert(timelast)}   </span>
  </div>
  
  <div id="collapse${i}" class="collapse ${status}" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body" >
    <p> ${news[i].body}  </p>
    <a href="${news[i].url} " target="_blank" class="btn btn-outline-primary"><i class="fa fa-newspaper-o"></i>Czytaj artykuł</a>
    <br> <span class="news-category"><b>Kategorie:</b> <span>${news[i].categories} </span> </span>
    </div>
  </div>
  </div>
  `;

    }

  })();

}



