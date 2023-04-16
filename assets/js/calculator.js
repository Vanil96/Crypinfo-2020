
(async function() {

    const initializer = document.querySelector('#calculator-initializer');
   if (initializer) { 

    const cryptoList = ['BTC','ETH','LSK','BTG','LTC','DASH','XMR','KZC','BCH','ZEC','DCR','BNB','ETC','XRP','EOS','ATOM','XTZ','NEO','XZC','STRAT','OMG','WAVES','LINK'];
    
    const api_cryp = `https://min-api.cryptocompare.com/data/pricemulti?fsyms=${cryptoList.join(',')}&tsyms=PLN&api_key=${apiKey}`;
    const api_fiat = "http://api.nbp.pl/api/exchangerates/tables/A/?format=json";
        
   
    const cryptoReq = await fetch(api_cryp);   
    const fiatReq = await fetch(api_fiat); 
    
    const cryptoRes = await cryptoReq.json();    
    const fiatRes = await fiatReq.json();  

let fiats = {};
const fromValueEl = document.querySelector('select[name="fromValue"]'); 
const forValueEl = document.querySelector('select[name="forValue"]'); 

for(let i = 0; i < fiatRes[0].rates.length; i++) {
    fiats[fiatRes[0].rates[i].code] = fiatRes[0].rates[i].mid;
}

for (const key in fiats){
    fromValueEl.innerHTML += `<option name="${key}" value="${fiats[key]}" class="calc-value fiat-value">${key}</option>`
    forValueEl.innerHTML += `<option name="${key}" value="${fiats[key]}" class="calc-value fiat-value">${key}</option>`
}

for (const key in cryptoRes) {
    fromValueEl.innerHTML += `<option name="${key}" value="${cryptoRes[key]['PLN']}" class="calc-value crypto-value">${key}</option>`
    forValueEl.innerHTML += `<option name="${key}" value="${cryptoRes[key]['PLN']}" class="calc-value crypto-value">${key}</option>`
}


const resultEl = document.querySelector('[name="calc-result"]')
initializer.addEventListener('click', ()=>{
    let valueCount = document.querySelector('[name="count"]').value;
    let result = ((fromValueEl.value / forValueEl.value)*valueCount).toLocaleString(); 
    let resultSlug = forValueEl.options[forValueEl.options.selectedIndex].getAttribute('name');
    resultEl.value = `${result} ${resultSlug}`;
})
} 
})();

    





      




