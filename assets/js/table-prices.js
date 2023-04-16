




// #F8F9FB  -bg light kolor
let apikey = "&api_key=a19ca4952f0fe76f7457c50e3df9029c473e710c3e29360c97d2afb621b25816";
const hrf_priceall = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XMR,LTC,DASH,BTG,LSK,BCH,ZEC,DCR,BNB,ETC&tsyms=USD,PLN" + apikey;
const hrf_ticker = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LSK,BTG,LTC,DASH,XMR,BCH,ZEC,DCR,BNB,ETC&tsyms=PLN" + apikey;

(async () => {
  const response = await fetch(hrf_ticker);
  const data = await response.json();
  document.getElementById('BTCpln').textContent = data.BTC.PLN + " zł";
  document.getElementById('ETHpln').textContent = data.ETH.PLN + " zł";
  document.getElementById('LSKpln').textContent = data.LSK.PLN + " zł";
  document.getElementById('LTCpln').textContent = data.LTC.PLN + " zł";
  document.getElementById('BTGpln').textContent = data.BTG.PLN + " zł";
  document.getElementById('DASHpln').textContent = data.DASH.PLN + " zł";
  document.getElementById('XMRpln').textContent = data.XMR.PLN + " zł";
  document.getElementById('BCHpln').textContent = data.BCH.PLN + " zł";
  document.getElementById('ETCpln').textContent = data.ETC.PLN + " zł";
  document.getElementById('ZECpln').textContent = data.ZEC.PLN + " zł";
  document.getElementById('DCRpln').textContent = data.DCR.PLN + " zł";
  document.getElementById('BNBpln').textContent = data.BNB.PLN + " zł";
})();
(async () => {
  const response = await fetch(hrf_priceall);
  const data = await response.json();

  document.getElementById('mkcap_btc').textContent = data.RAW.BTC.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_bch').textContent = data.RAW.BCH.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_eth').textContent = data.RAW.ETH.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_xmr').textContent = data.RAW.XMR.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_dash').textContent = data.RAW.DASH.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_ltc').textContent = data.RAW.LTC.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_zec').textContent = data.RAW.ZEC.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_dcr').textContent = data.RAW.DCR.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_bnb').textContent = data.RAW.BNB.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_btg').textContent = data.RAW.BTG.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_etc').textContent = data.RAW.ETC.USD.MKTCAP.toLocaleString() + " $";
  document.getElementById('mkcap_lsk').textContent = data.RAW.LSK.USD.MKTCAP.toLocaleString() + " $";

  function Round(n, k) {
    var factor = Math.pow(10, k);
    return Math.round(n * factor) / factor;
  }
  const btc_cut = data.RAW.BTC.PLN.CHANGEPCT24HOUR;
  const eth_cut = data.RAW.ETH.PLN.CHANGEPCT24HOUR;
  const xmr_cut = data.RAW.XMR.PLN.CHANGEPCT24HOUR;
  const ltc_cut = data.RAW.LTC.PLN.CHANGEPCT24HOUR;
  const dash_cut = data.RAW.DASH.PLN.CHANGEPCT24HOUR;
  const btg_cut = data.RAW.BTG.PLN.CHANGEPCT24HOUR;
  const lsk_cut = data.RAW.LSK.PLN.CHANGEPCT24HOUR;
  const bch_cut = data.RAW.BCH.PLN.CHANGEPCT24HOUR;
  const zec_cut = data.RAW.ZEC.PLN.CHANGEPCT24HOUR;
  const dcr_cut = data.RAW.DCR.PLN.CHANGEPCT24HOUR;
  const bnb_cut = data.RAW.BNB.PLN.CHANGEPCT24HOUR;
  const etc_cut = data.RAW.ETC.PLN.CHANGEPCT24HOUR;

  const btc_pct = (Round(btc_cut, 2));
  const eth_pct = (Round(eth_cut, 2));
  const xmr_pct = (Round(xmr_cut, 2));
  const ltc_pct = (Round(ltc_cut, 2));
  const dash_pct = (Round(dash_cut, 2));
  const btg_pct = (Round(btg_cut, 2));
  const lsk_pct = (Round(lsk_cut, 2));
  const bch_pct = (Round(bch_cut, 2));
  const zec_pct = (Round(zec_cut, 2));
  const dcr_pct = (Round(dcr_cut, 2));
  const bnb_pct = (Round(bnb_cut, 2));
  const etc_pct = (Round(etc_cut, 2));


  if (btc_pct > 0) { document.getElementById('BTCpct').setAttribute("style", "color:green;") }
  else if (btc_pct < 0) { document.getElementById('BTCpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('BTCpct').setAttribute("style", "color:purple;"); };

  if (eth_pct > 0) { document.getElementById('ETHpct').setAttribute("style", "color:green;") }
  else if (eth_pct < 0) { document.getElementById('ETHpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('ETHpct').setAttribute("style", "color:purple;"); };

  if (xmr_pct > 0) { document.getElementById('XMRpct').setAttribute("style", "color:green;"); }
  else if (xmr_pct < 0) { document.getElementById('XMRpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('XMRpct').setAttribute("style", "color:purple;"); };

  if (ltc_pct > 0) { document.getElementById('LTCpct').setAttribute("style", "color:green;"); }
  else if (ltc_pct < 0) { document.getElementById('LTCpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('LTCpct').setAttribute("style", "color:purple;"); };

  if (dash_pct > 0) { document.getElementById('DASHpct').setAttribute("style", "color:green;"); }
  else if (dash_pct < 0) { document.getElementById('DASHpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('DASHpct').setAttribute("style", "color:purple;"); };

  if (btg_pct > 0) { document.getElementById('BTGpct').setAttribute("style", "color:green;"); }
  else if (btg_pct < 0) { document.getElementById('BTGpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('BTGpct').setAttribute("style", "color:purple;"); };

  if (lsk_pct > 0) { document.getElementById('LSKpct').setAttribute("style", "color:green;"); }
  else if (lsk_pct < 0) { document.getElementById('LSKpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('LSKpct').setAttribute("style", "color:purple;"); };

  if (etc_pct > 0) { document.getElementById('ETCpct').setAttribute("style", "color:green;"); }
  else if (etc_pct < 0) { document.getElementById('ETCpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('ETCpct').setAttribute("style", "color:purple;"); };

  if (bch_pct > 0) { document.getElementById('BCHpct').setAttribute("style", "color:green;"); }
  else if (bch_pct < 0) { document.getElementById('BCHpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('BCHpct').setAttribute("style", "color:purple;"); };

  if (dcr_pct > 0) { document.getElementById('DCRpct').setAttribute("style", "color:green;"); }
  else if (dcr_pct < 0) { document.getElementById('DCRpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('DCRpct').setAttribute("style", "color:purple;"); };

  if (bnb_pct > 0) { document.getElementById('BNBpct').setAttribute("style", "color:green;"); }
  else if (bnb_pct < 0) { document.getElementById('BNBpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('BNBpct').setAttribute("style", "color:purple;"); };


  if (zec_pct > 0) { document.getElementById('ZECpct').setAttribute("style", "color:green;"); }
  else if (zec_pct < 0) { document.getElementById('ZECpct').setAttribute("style", "color:red;"); }
  else { document.getElementById('ZECpct').setAttribute("style", "color:purple;"); }
  ;
  document.getElementById('BTCpct').textContent = btc_pct + "%";
  document.getElementById('ETHpct').textContent = eth_pct + "%";
  document.getElementById('XMRpct').textContent = xmr_pct + "%";
  document.getElementById('LTCpct').textContent = ltc_pct + "%";
  document.getElementById('DASHpct').textContent = dash_pct + "%";
  document.getElementById('BTGpct').textContent = btg_pct + "%";
  document.getElementById('LSKpct').textContent = lsk_pct + "%";

  document.getElementById('ETCpct').textContent = etc_pct + "%";
  document.getElementById('BCHpct').textContent = bch_pct + "%";
  document.getElementById('ZECpct').textContent = zec_pct + "%";
  document.getElementById('DCRpct').textContent = dcr_pct + "%";
  document.getElementById('BNBpct').textContent = bnb_pct + "%";
})();












