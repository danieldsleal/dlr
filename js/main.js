(function ($) {
  // USE STRICT
  "use strict";
  try {

    $(document).ready(() => {
      $.getJSON('../datagraph.php', (data) => {
        let voltage = [], current = [], temperature = [];

        data.forEach(element => {
          voltage.push(element.voltage);
          current.push(element.current);
          temperature.push(element.anode_temp);
        });

        voltage.reverse();
        current.reverse();
        temperature.reverse();
        var period = 10000; //variable to choose the period of time to receive data

        let voltage1 = voltage.slice(54,61);
        let current1 = current.slice(54,61);
        let temperature1 = temperature.slice(54,61);
        let voltage5 = voltage.slice(30,61);
        let current5 = current.slice(30,61);
        let temperature5 = temperature.slice(30,61);
        let voltage10 = voltage;
        let current10= current;
        let temperature10 = temperature;
        
        var time = Array(6);
        var time5 = Array(31);
        var time10 = Array(61);
     
        var voltagecolor = "rgb(34, 139, 34)"
        var temperaturecolor = "rgb(204,204,0)"
        var currentcolor = "rgb(199,21,133)"
      
        var d = new Date(); // variables to have the previous hours. JS has some limitations regarding the time, so this a good way to do it,
        
        var date10SecondsAgo = new Date(d.getTime() - 10*1000);
        var date20SecondsAgo = new Date(d.getTime() - 20*1000);
        var date30SecondsAgo = new Date(d.getTime() - 30*1000);
        var date40SecondsAgo = new Date(d.getTime() - 40*1000);
        var date50SecondsAgo = new Date(d.getTime() - 50*1000);
        var date1MinuteAgo = new Date(d.getTime() - 60*1000);
        var date1M30SAgo = new Date(d.getTime() - 90*1000);
        var date2MinutesAgo = new Date(d.getTime() - 120*1000);
        var date2M30SAgo = new Date(d.getTime() - 150*1000);
        var date3MinutesAgo = new Date(d.getTime() - 180*1000);
        var date3M30SAgo = new Date(d.getTime() - 210*1000);
        var date4MinutesAgo = new Date(d.getTime() - 240*1000);
        var date4M30SAgo = new Date(d.getTime() - 270*1000);
        var date5MinutesAgo = new Date(d.getTime() - 300*1000);
        var date5M30SAgo = new Date(d.getTime() - 330*1000);
        var date6MinutesAgo = new Date(d.getTime() - 360*1000);
        var date6M30SAgo = new Date(d.getTime() - 390*1000);
        var date7MinutesAgo = new Date(d.getTime() - 420*1000);
        var date7M30SAgo = new Date(d.getTime() - 450*1000);
        var date8MinutesAgo = new Date(d.getTime() - 480*1000);
        var date8M30SAgo = new Date(d.getTime() - 510*1000);
        var date9MinutesAgo = new Date(d.getTime() - 540*1000);
        var date9M30SAgo = new Date(d.getTime() - 570*1000);
        var date10MinutesAgo = new Date(d.getTime() - 600*1000);

        var time = [d.getHours()+':'+date1MinuteAgo.getMinutes()+':'+ d.getSeconds() ,
                    d.getHours()+':'+d.getMinutes()+':'+ date50SecondsAgo.getSeconds(),
                    d.getHours()+':'+d.getMinutes()+':'+ date40SecondsAgo.getSeconds(),
                    d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds(),
                    d.getHours()+':'+d.getMinutes()+':'+ date20SecondsAgo.getSeconds(),
                    d.getHours()+':'+d.getMinutes()+':'+ date10SecondsAgo.getSeconds(),
                    d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds()]

        var time5 = [d.getHours()+':'+date5MinutesAgo.getMinutes()+':'+ date5MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date4M30SAgo.getMinutes()+':'+ date4M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date4MinutesAgo.getMinutes()+':'+ date4MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date3M30SAgo.getMinutes()+':'+ date3M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date3MinutesAgo.getMinutes()+':'+ date3MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date2M30SAgo.getMinutes()+':'+ date2M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date2MinutesAgo.getMinutes()+':'+ d.getSeconds(),'','',
                    d.getHours()+':'+date1M30SAgo.getMinutes()+':'+ date1M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date1MinuteAgo.getMinutes()+':'+ date1MinuteAgo.getSeconds(),'','',
                    d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds(),'','',
                    d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds()
                    ];
          

        var time10 = [ d.getHours()+':'+date10MinutesAgo.getMinutes()+':'+ date10MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date9M30SAgo.getMinutes()+':'+ date9M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date9MinutesAgo.getMinutes()+':'+ date9MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date8M30SAgo.getMinutes()+':'+ date8M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date8MinutesAgo.getMinutes()+':'+ date8MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date7M30SAgo.getMinutes()+':'+ date7M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date7MinutesAgo.getMinutes()+':'+ date7MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date6M30SAgo.getMinutes()+':'+ date6M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date6MinutesAgo.getMinutes()+':'+ date6MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date5M30SAgo.getMinutes()+':'+ date5M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date5MinutesAgo.getMinutes()+':'+ date5MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date4M30SAgo.getMinutes()+':'+ date4M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date4MinutesAgo.getMinutes()+':'+ date4MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date3M30SAgo.getMinutes()+':'+ date3M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date3MinutesAgo.getMinutes()+':'+ date3MinutesAgo.getSeconds(),'','',
                    d.getHours()+':'+date2M30SAgo.getMinutes()+':'+ date2M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date2MinutesAgo.getMinutes()+':'+ d.getSeconds(),'','',
                    d.getHours()+':'+date1M30SAgo.getMinutes()+':'+ date1M30SAgo.getSeconds(),'','',
                    d.getHours()+':'+date1MinuteAgo.getMinutes()+':'+ date1MinuteAgo.getSeconds(),'','',
                    d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds(),'','',
                    d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds()
                    ];

        var ctx = document.getElementById("fuelcell");
        if (ctx) {
          ctx.height = 150;
          var config = {
            type: 'line',
            data: {
              labels: time,
              defaultFontFamily: "Poppins",
              
              datasets: [
                {
                  label: "Voltage",
                  borderColor: voltagecolor,
                  backgroundColor: voltagecolor,
                  borderWidth: "3",
                  fill: "false",
                  yAxisID: "A",
                  data: voltage1
                },
                {
                  label: "Current",
                  borderColor: currentcolor,
                  backgroundColor: currentcolor,
                  borderWidth: "3",
                  fill: "false",
                  yAxisID: "B",
                  data: current1
                },
                {
                  label: "Cell Temperature",
                  borderColor: temperaturecolor,
                  backgroundColor: temperaturecolor,
                  borderWidth: "3",
                  fill: "false",
                  yAxisID: "C",
                  data: temperature1
                }
              ]
            },

            options: {
              scales: {
                yAxes: [{
                  id: "A",
                  type: "linear",
                  position: "right",
                  scaleLabel: {
                    labelString: "Cell Voltage / mV",
                    display: 'true',
                    fontStyle: 'bold',
                    fontSize: 15,
                    fontColor: voltagecolor,
                  },
                  ticks: {
                    max: 1000,
                    min: 0,
                    fontColor: voltagecolor,
                    fontStyle: 'bold',
                    fontSize: 12
                  }
              },{
                  id: "B",
                  type: "linear",
                  position: "left",
                  scaleLabel: {
                    labelString: "Current / A",
                    display: true,
                    fontStyle: 'bold',
                    fontColor: currentcolor,
                    fontSize : 15,
                  },
                  ticks: {
                    max: 100,
                    min: 0,
                    fontSize: 12
                  }
                },
                {
                  id: "C",
                  display: true,
                  gridLines: {display: false,color: 'transparent'},
                  ticks: {display: false},
                  scaleLabel : {
                    display : true,
                    labelString : "Temperature / ºC",
                    fontStyle : 'bold',
                    fontSize :    15,
                    fontColor: temperaturecolor
                  },
                  ticks: {
                    display: false,
                    max: 100,
                    min: 0,
                  }
                }
              ],

              xAxes: [{
                scaleLabel : {
                  display: true,
                  labelString: "Time [HH:MM:SS]",
                  fontStyle: "bold",
                  fontSize: 20
                }
              }]
              },
              legend: {
                position: "bottom",
                labels: {
                  fontFamily: "Poppins" 
                }
    
              },
              title: {
                display: true,
                text: 'Fuel Cell Test Bench Monitoring',
                fontSize: 24
              },
              maintainAspectRatio: true,
              responsive: true,
              tooltips: {
                mode: 'index',
                intersect: false
              },
              hover: {
                mode: 'nearest',
                intersect: true
              },
              elements: { 
                line: {
                    tension: 0 // Draw straightline instead of a curve
                }
              },
            },
          }
        }
        var myChart = new Chart(ctx,config);

        document.getElementById("1minute").onclick = function(){
          var data = myChart.config.data;
          
          data.labels = time;
          data.datasets[0].data = voltage1;
          data.datasets[1].data = current1;
          data.datasets[2].data = temperature1;
          myChart.update();
        };

        document.getElementById("5minutes").onclick = function(){
          var data = myChart.config.data;
          
          data.labels = time5;
          data.datasets[0].data = voltage5;
          data.datasets[1].data = current5;
          data.datasets[2].data = temperature5;
          myChart.update();
        };

        document.getElementById("10minutes").onclick = function(){
          var data = myChart.config.data;
      
          data.labels = time10;
          data.datasets[0].data = voltage10;
          data.datasets[1].data = current10;
          data.datasets[2].data = temperature10;
          myChart.update();
        };

        setInterval(function(){
          $.getJSON("../datagraph2.php", (data) => {
          
          d = new Date();
          date10SecondsAgo = new Date(d.getTime() - 10*1000);
          date20SecondsAgo = new Date(d.getTime() - 20*1000);
          date30SecondsAgo = new Date(d.getTime() - 30*1000);
          date40SecondsAgo = new Date(d.getTime() - 40*1000);
          date50SecondsAgo = new Date(d.getTime() - 50*1000);
          var date1MinuteAgo = new Date(d.getTime() - 60*1000);
          var date1M30SAgo = new Date(d.getTime() - 90*1000);
          var date2MinutesAgo = new Date(d.getTime() - 120*1000);
          var date2M30SAgo = new Date(d.getTime() - 150*1000);
          var date3MinutesAgo = new Date(d.getTime() - 180*1000);
          var date3M30SAgo = new Date(d.getTime() - 210*1000);
          var date4MinutesAgo = new Date(d.getTime() - 240*1000);
          var date4M30SAgo = new Date(d.getTime() - 270*1000);
          var date5MinutesAgo = new Date(d.getTime() - 300*1000);
          var date5M30SAgo = new Date(d.getTime() - 330*1000);
          var date6MinutesAgo = new Date(d.getTime() - 360*1000);
          var date6M30SAgo = new Date(d.getTime() - 390*1000);
          var date7MinutesAgo = new Date(d.getTime() - 420*1000);
          var date7M30SAgo = new Date(d.getTime() - 450*1000);
          var date8MinutesAgo = new Date(d.getTime() - 480*1000);
          var date8M30SAgo = new Date(d.getTime() - 510*1000);
          var date0MinutesAgo = new Date(d.getTime() - 540*1000);
          var date9M30SAgo = new Date(d.getTime() - 570*1000);
          var date10MinutesAgo = new Date(d.getTime() - 600*1000);
          

          time[0] = d.getHours()+':'+d.getMinutes()+':'+ date1MinuteAgo.getSeconds();
          time[1] = d.getHours()+':'+d.getMinutes()+':'+ date50SecondsAgo.getSeconds();
          time[2] = d.getHours()+':'+d.getMinutes()+':'+ date40SecondsAgo.getSeconds();
          time[3] = d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds();
          time[4] = d.getHours()+':'+d.getMinutes()+':'+ date20SecondsAgo.getSeconds();
          time[5] = d.getHours()+':'+d.getMinutes()+':'+ date10SecondsAgo.getSeconds();
          time[6] = d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds();

          time5[0] = d.getHours()+':'+date5MinutesAgo.getMinutes()+':'+ date5MinutesAgo.getSeconds();
          time5[3] = d.getHours()+':'+date4M30SAgo.getMinutes()+':'+ date4M30SAgo.getSeconds(),'','',
          time5[6] = d.getHours()+':'+date4MinutesAgo.getMinutes()+':'+ date4MinutesAgo.getSeconds(),'','',
          time5[9] = d.getHours()+':'+date3M30SAgo.getMinutes()+':'+ date3M30SAgo.getSeconds(),'','',
          time5[12] = d.getHours()+':'+date3MinutesAgo.getMinutes()+':'+ date3MinutesAgo.getSeconds(),'','',
          time5[15] = d.getHours()+':'+date2M30SAgo.getMinutes()+':'+ date2M30SAgo.getSeconds(),'','',
          time5[18] = d.getHours()+':'+date2MinutesAgo.getMinutes()+':'+ d.getSeconds(),'','',
          time5[21] = d.getHours()+':'+date1M30SAgo.getMinutes()+':'+ date1M30SAgo.getSeconds(),'','',
          time5[24] = d.getHours()+':'+date1MinuteAgo.getMinutes()+':'+ date1MinuteAgo.getSeconds(),'','',
          time5[27] = d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds(),'','',
          time5[30] = d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds();

          time10[0] = d.getHours()+':'+date10MinutesAgo.getMinutes()+':'+ date10MinutesAgo.getSeconds(),'','',
          time10[3] = d.getHours()+':'+date9M30SAgo.getMinutes()+':'+ date9M30SAgo.getSeconds(),'','',
          time10[6] = d.getHours()+':'+date9MinutesAgo.getMinutes()+':'+ date9MinutesAgo.getSeconds(),'','',
          time10[9] = d.getHours()+':'+date8M30SAgo.getMinutes()+':'+ date8M30SAgo.getSeconds(),'','',
          time10[12] = d.getHours()+':'+date8MinutesAgo.getMinutes()+':'+ date8MinutesAgo.getSeconds(),'','',
          time10[15] = d.getHours()+':'+date7M30SAgo.getMinutes()+':'+ date7M30SAgo.getSeconds(),'','',
          time10[18] = d.getHours()+':'+date7MinutesAgo.getMinutes()+':'+ date7MinutesAgo.getSeconds(),'','',
          time10[21] = d.getHours()+':'+date6M30SAgo.getMinutes()+':'+ date6M30SAgo.getSeconds(),'','',
          time10[24] = d.getHours()+':'+date6MinutesAgo.getMinutes()+':'+ date6MinutesAgo.getSeconds(),'','',
          time10[27] = d.getHours()+':'+date5M30SAgo.getMinutes()+':'+ date5M30SAgo.getSeconds(),'','',
          time10[30] = d.getHours()+':'+date5MinutesAgo.getMinutes()+':'+ date5MinutesAgo.getSeconds(),'','',
          time10[33] = d.getHours()+':'+date4M30SAgo.getMinutes()+':'+ date4M30SAgo.getSeconds(),'','',
          time10[36] = d.getHours()+':'+date4MinutesAgo.getMinutes()+':'+ date4MinutesAgo.getSeconds(),'','',
          time10[39] = d.getHours()+':'+date3M30SAgo.getMinutes()+':'+ date3M30SAgo.getSeconds(),'','',
          time10[42] = d.getHours()+':'+date3MinutesAgo.getMinutes()+':'+ date3MinutesAgo.getSeconds(),'','',
          time10[45] = d.getHours()+':'+date2M30SAgo.getMinutes()+':'+ date2M30SAgo.getSeconds(),'','',
          time10[48] = d.getHours()+':'+date2MinutesAgo.getMinutes()+':'+ d.getSeconds(),'','',
          time10[51] = d.getHours()+':'+date1M30SAgo.getMinutes()+':'+ date1M30SAgo.getSeconds(),'','',
          time10[54] = d.getHours()+':'+date1MinuteAgo.getMinutes()+':'+ date1MinuteAgo.getSeconds(),'','',
          time10[57] = d.getHours()+':'+d.getMinutes()+':'+ date30SecondsAgo.getSeconds(),'','',
          time10[60] = d.getHours()+':'+d.getMinutes()+':'+ d.getSeconds();
         

        
          var retirar = 60; // This variable defines the last index of the array of values. It's 60 values, so it's the 59 position
          voltage1.shift(); //takes the first element out of the array
          voltage1.splice(retirar,0,data.voltage); // puts a new element in position "retirar". 0 means it will not take replace any element
          current1.shift();
          current1.splice(retirar,0,data.current);
          temperature1.shift();
          temperature1.splice(retirar,0,data.anode_temp);

          voltage5.shift(); //takes the first element out of the array
          voltage5.splice(retirar,0,data.voltage); // puts a new element in position "retirar". 0 means it will not take replace any element
          current5.shift();
          current5.splice(retirar,0,data.current);
          temperature5.shift();
          temperature5.splice(retirar,0,data.anode_temp);

          voltage10.shift(); //takes the first element out of the array
          voltage10.splice(retirar,0,data.voltage); // puts a new element in position "retirar". 0 means it will not take replace any element
          current10.shift();
          current10.splice(retirar,0,data.current);
          temperature10.shift();
          temperature10.splice(retirar,0,data.anode_temp);
         
        
   
          myChart.update();
        });
        }, period);
      
      });
  
    });
  
  var ctx2 = document.getElementById("polcurve");
        if (ctx2) {
          ctx2.height = 150;
          var config = {
            type: 'line',
            data: {
              labels: [0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1.0],
              defaultFontFamily: "Poppins",
              
              datasets: [
                {
                  label: "BoT",
                  borderColor: 'rgb(168,168,168)',
                  backgroundColor: 'rgb(168,168,168)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [932.5,888.5,868, 850, 837,826.5,787,763.5,741,702,661.5,610]
                },
                {
                  label: "1st Period",
                  borderColor: 'rgb(255,0,0)',
                  backgroundColor: 'rgb(255,0,0)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [909.5,867.5,843.5, 825.5,810,798.5, 756, 726, 700, 648.5,571.5,475]
                },
                {
                  label: "1st Refresh",
                  borderColor: 'rgb(86, 142, 226)',
                  backgroundColor: 'rgb(86, 142, 226)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [915.5,872.5,847,828,815.5,802.5,757.5,728,701,640.5,563.5,460]
                
                },
                {
                  label: "2nd Period",
                  borderColor: 'rgb(35, 170, 47)',
                  backgroundColor: 'rgb(35, 170, 47)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [895,847,823.5,805.5,790,777.5,729,691.5,652.5,564,440,265]
                },
                {
                  label: "2nd Refresh",
                  borderColor: 'rgb(118, 12, 142)',
                  backgroundColor: 'rgb(118, 12, 142)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [898.5,849.5,823,803.5,790.5,778.5,729,689.5,650,556.5,430,240]
                },
                {
                  label: "3rd Period",
                  borderColor: 'rgb(142, 131, 12)',
                  backgroundColor: 'rgb(142, 131, 12)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [781.5,767,755,744,731,719,657,609,553,403,161.5]
                },
                {
                  label: "EoT",
                  borderColor: 'rgb(18, 153, 148)',
                  backgroundColor: 'rgb(18, 153, 148)',
                  borderWidth: "2",
                  fill: "false",
                  yAxisID: "B",
                  data: [780,765.5,751.5,738,727.5,714,643.5,600,548.5,404.5,141.5]
                }
              ]
            },

            options: {
              scales: {
                yAxes: [{
                  id: "B",
                  type: "linear",
                  position: "left",
                  scaleLabel: {
                    labelString: "Cell Voltage / mV",
                    display: true,
                    fontStyle: 'bold',
                    fontSize : 20,
                  },
                  ticks: {
                    max: 1000,
                    min: 0,
                    fontSize: 12
                  }
                }],
              xAxes: [{
                scaleLabel : {
                  display: true,
                  labelString: "Current density / A cm-2",
                  fontStyle: "bold",
                  fontSize: 20
                }
              }]
              },
              legend: {
                position: "bottom",
                labels: {
                  fontFamily: "Poppins" 
                }
    
              },
              title: {
                display: true,
                text: 'Polarization Curve for the Fuel Cell Dynamic Driving Cycle',
                fontSize: 20
              },
              maintainAspectRatio: true,
              responsive: true,
              tooltips: {
                mode: 'index',
                intersect: false
              },
              hover: {
                mode: 'nearest',
                intersect: true
              },
              elements: { 
                line: {
                    tension: 0 // Draw straightline instead of a curve
                }
              },
            },
          }
        }
        var myChart = new Chart(ctx2,config);
  } catch (error) {
    console.log(error);
  }

  
 
})(jQuery);

(function ($) {
    // USE STRICT
    "use strict";
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 200,
      outDuration: 200,
      linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])',
      loading: true,
      loadingParentElement: 'html',
      loadingClass: 'page-loader',
      loadingInner: '<div class="page-loader__spin"></div>',
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: ['animation-duration', '-webkit-animation-duration'],
      overlay: false,
      overlayClass: 'animsition-overlay-slide',
      overlayParentElement: 'html',
      transition: function (url) {
        window.location.href = url;
      }
    });
  
  
  })(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Map
  try {

    var vmap = $('#vmap');
    if(vmap[0]) {
      vmap.vectorMap( {
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: [ '#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Europe Map
  try {
    
    var vmap1 = $('#vmap1');
    if(vmap1[0]) {
      vmap1.vectorMap( {
        map: 'europe_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // USA Map
  try {
    
    var vmap2 = $('#vmap2');

    if(vmap2[0]) {
      vmap2.vectorMap( {
        map: 'usa_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true,
        selectedColor: null,
        hoverColor: null,
        colors: {
            mo: '#001BFF',
            fl: '#001BFF',
            or: '#001BFF'
        },
        onRegionClick: function ( event, code, region ) {
            event.preventDefault();
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Germany Map
  try {
    
    var vmap3 = $('#vmap3');
    if(vmap3[0]) {
      vmap3.vectorMap( {
        map: 'germany_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();

            alert( message );
        }
      });
    }
    
  } catch (error) {
    console.log(error);
  }
  
  // France Map
  try {
    
    var vmap4 = $('#vmap4');
    if(vmap4[0]) {
      vmap4.vectorMap( {
        map: 'france_fr',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Russia Map
  try {
    var vmap5 = $('#vmap5');
    if(vmap5[0]) {
      vmap5.vectorMap( {
        map: 'russia_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        hoverOpacity: 0.7,
        selectedColor: '#999999',
        enableZoom: true,
        showTooltip: true,
        scaleColors: [ '#C8EEFF', '#006491' ],
        normalizeFunction: 'polynomial'
      });
    }


  } catch (error) {
    console.log(error);
  }
  
  // Brazil Map
  try {
    
    var vmap6 = $('#vmap6');
    if(vmap6[0]) {
      vmap6.vectorMap( {
        map: 'brazil_br',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert( message );
        }
      });
    }

  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // Use Strict
  "use strict";
  try {
    var progressbarSimple = $('.js-progressbar-simple');
    progressbarSimple.each(function () {
      var that = $(this);
      var executed = false;
      $(window).on('load', function () {

        that.waypoint(function () {
          if (!executed) {
            executed = true;
            /*progress bar*/
            that.progressbar({
              update: function (current_percentage, $this) {
                $this.find('.js-value').html(current_percentage + '%');
              }
            });
          }
        }, {
            offset: 'bottom-in-view'
          });

      });
    });
  } catch (err) {
    console.log(err);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Scroll Bar
  try {
    var jscr1 = $('.js-scrollbar1');
    if(jscr1[0]) {
      const ps1 = new PerfectScrollbar('.js-scrollbar1');      
    }

    var jscr2 = $('.js-scrollbar2');
    if (jscr2[0]) {
      const ps2 = new PerfectScrollbar('.js-scrollbar2');

    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Select 2
  try {

    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    });

  } catch (error) {
    console.log(error);
  }


})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Dropdown 
  try {
    var menu = $('.js-item-menu');
    var sub_menu_is_showed = -1;

    for (var i = 0; i < menu.length; i++) {
      $(menu[i]).on('click', function (e) {
        e.preventDefault();
        $('.js-right-sidebar').removeClass("show-sidebar");        
        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = -1;
        }
        else {
          for (var i = 0; i < menu.length; i++) {
            $(menu[i]).removeClass("show-dropdown");
          }
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = jQuery.inArray(this, menu);
        }
      });
    }
    $(".js-item-menu, .js-dropdown").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
    });

  } catch (error) {
    console.log(error);
  }

  var wW = $(window).width();
    // Right Sidebar
    var right_sidebar = $('.js-right-sidebar');
    var sidebar_btn = $('.js-sidebar-btn');

    sidebar_btn.on('click', function (e) {
      e.preventDefault();
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
      right_sidebar.toggleClass("show-sidebar");
    });

    $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      right_sidebar.removeClass("show-sidebar");

    });
 

  // Sublist Sidebar
  try {
    var arrow = $('.js-arrow');
    arrow.each(function () {
      var that = $(this);
      that.on('click', function (e) {
        e.preventDefault();
        that.find(".arrow").toggleClass("up");
        that.toggleClass("open");
        that.parent().find('.js-sub-list').slideToggle("250");
      });
    });

  } catch (error) {
    console.log(error);
  }


  try {
    // Hamburger Menu
    $('.hamburger').on('click', function () {
      $(this).toggleClass('is-active');
      $('.navbar-mobile').slideToggle('500');
    });
    $('.navbar-mobile__list li.has-dropdown > a').on('click', function () {
      var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
      $(this).toggleClass('active');
      $(dropdown).slideToggle('500');
      return false;
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Load more
  try {
    var list_load = $('.js-list-load');
    if (list_load[0]) {
      list_load.each(function () {
        var that = $(this);
        that.find('.js-load-item').hide();
        var load_btn = that.find('.js-load-btn');
        load_btn.on('click', function (e) {
          $(this).text("Loading...").delay(1500).queue(function (next) {
            $(this).hide();
            that.find(".js-load-item").fadeToggle("slow", 'swing');
          });
          e.preventDefault();
        });
      })

    }
  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  try {
    
    $('[data-toggle="tooltip"]').tooltip();

  } catch (error) {
    console.log(error);
  }

  // Chatbox
  try {
    var inbox_wrap = $('.js-inbox');
    var message = $('.au-message__item');
    message.each(function(){
      var that = $(this);

      that.on('click', function(){
        $(this).parent().parent().parent().toggleClass('show-chat-box');
      });
    });
    

  } catch (error) {
    console.log(error);
  }

})(jQuery);