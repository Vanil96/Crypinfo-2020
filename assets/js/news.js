
(async () => {
    const res = await fetch(`https://min-api.cryptocompare.com/data/v2/news/?lang=EN&api_key=${apiKey}`);
    const data = await res.json();
    const news = data.Data;

    const newsLimit = 15;
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
