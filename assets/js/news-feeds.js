(async () => {

    const res = await fetch(`https://min-api.cryptocompare.com/data/news/feeds?extraParams=Crypinfo&api_key=${apiKey}`);
    const feeds = await res.json();
     
    feedsLimit = 25;
      
    const container = document.querySelector('#feed-list')
    for (let i = 0; i<=feedsLimit;i++){
        container.innerHTML += `
        <li class="list-group-item"><img class="card-img-top img-fluid" alt="feed_image" src="${feeds[i].img}"> <span> ${feeds[i].name} </span></li>
        `
    }

     })();