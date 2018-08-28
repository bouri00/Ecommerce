  var Currency = {
    rates: {"USD":1.0,"EUR":1.24083,"GBP":1.41763,"CAD":0.776451,"ARS":0.0496156,"AUD":0.768765,"BRL":0.300433,"CLP":0.00164864,"CNY":0.159178,"CYP":0.397899,"CZK":0.048689,"DKK":0.166543,"EEK":0.0706676,"HKD":0.12744,"HUF":0.00396606,"ISK":0.0102134,"INR":0.0154001,"JMD":0.00796811,"JPY":0.00948158,"LVL":1.57329,"LTL":0.320236,"MTL":0.293496,"MXN":0.0543903,"NZD":0.726923,"NOK":0.12967,"PLN":0.29465,"SGD":0.763442,"SKK":21.5517,"SIT":175.439,"ZAR":0.085836,"KRW":0.000930793,"SEK":0.121563,"CHF":1.0565,"TWD":0.0342272,"UYU":0.0353231,"MYR":0.257865,"BSD":1.0,"CRC":0.00176468,"RON":0.266631,"PHP":0.0190787,"AED":0.272294,"VEB":0.000100125,"IDR":7.27496e-05,"TRY":0.25104,"THB":0.0320309,"TTD":0.147001,"ILS":0.28688,"SYP":0.00194089,"XCD":0.370374,"COP":0.000359094,"RUB":0.0174095,"HRK":0.166743,"KZT":0.00313891,"TZS":0.000442188,"XPT":946.641,"SAR":0.266667,"NIO":0.0320102,"LAK":0.000120559,"OMR":2.60078,"AMD":0.00208216,"CDF":0.000636743,"KPW":0.0011112,"SPL":6.0,"KES":0.0099158,"ZWD":0.00276319,"KHR":0.000250565,"MVR":0.0638166,"GTQ":0.136287,"BZD":0.496206,"BYR":5.12823e-05,"LYD":0.75632,"DZD":0.00872421,"BIF":0.000567869,"GIP":1.41763,"BOB":0.144691,"XOF":0.00189163,"STD":5.05664e-05,"NGN":0.00277778,"PGK":0.310365,"ERN":0.0666667,"MWK":0.00138236,"CUP":0.0377358,"GMD":0.0211015,"CVE":0.0112527,"BTN":0.0154001,"XAF":0.00189163,"UGX":0.000272132,"MAD":0.109284,"MNT":0.000417452,"LSL":0.085836,"XAG":16.5378,"TOP":0.444606,"SHP":1.41763,"RSD":0.0104766,"HTG":0.0154131,"MGA":0.000312989,"MZN":0.0160929,"FKP":1.41763,"BWP":0.1057,"HNL":0.0423568,"PYG":0.000179825,"JEP":1.41763,"EGP":0.0567157,"LBP":0.00066335,"ANG":0.561015,"WST":0.394673,"TVD":0.768765,"GYD":0.00481791,"GGP":1.41763,"NPR":0.00958014,"KMF":0.00252218,"IRR":2.65183e-05,"XPD":974.907,"SRD":0.134468,"TMM":5.69801e-05,"SZL":0.085836,"MOP":0.123728,"BMD":1.0,"XPF":0.0103982,"ETB":0.0362713,"JOD":1.41044,"MDL":0.0607536,"MRO":0.00282887,"YER":0.0040008,"BAM":0.634426,"AWG":0.558659,"PEN":0.309792,"VEF":0.100125,"SLL":0.000130209,"KYD":1.21961,"AOA":0.00469001,"TND":0.417309,"TJS":0.1133,"SCR":0.0723816,"LKR":0.00640718,"DJF":0.00563922,"GNF":0.000110491,"VUV":0.00944737,"SDG":0.0548632,"IMP":1.41763,"GEL":0.412099,"FJD":0.491642,"DOP":0.0201188,"XDR":1.4583,"MUR":0.0303032,"MMK":0.000748519,"LRD":0.00758787,"BBD":0.5,"ZMK":0.00010352,"XAU":1345.22,"VND":4.38231e-05,"UAH":0.0378718,"TMT":0.2849,"IQD":0.000843898,"BGN":0.634426,"KGS":0.0146653,"RWF":0.00117449,"BHD":2.65957,"UZS":0.000122775,"PKR":0.00865805,"MKD":0.0202019,"AFN":0.0144334,"NAD":0.085836,"BDT":0.0120432,"AZN":0.588235,"SOS":0.00171821,"QAR":0.274725,"PAB":1.0,"CUC":1.0,"SVC":0.114286,"SBD":0.1279,"ALL":0.0094451,"BND":0.763442,"KWD":3.33002,"GHS":0.226759,"ZMW":0.10352,"XBT":8040.12,"NTD":0.0337206,"BYN":0.512823,"CNH":0.159569,"MRU":0.0282887,"STN":0.0505664},
    convert: function(amount, from, to) {
      return (amount * this.rates[from]) / this.rates[to];
    }
  };
