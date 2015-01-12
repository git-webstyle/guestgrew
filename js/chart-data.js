  //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  var lineChartData = {
      labels : ["July","August","September","October","November"],
      datasets : [
          {
              label: "My Second dataset",
              fillColor : "rgba(51,153,255,0.4)",
              strokeColor : "rgba(120,187,254,1)",
              pointColor : "rgba(151,187,205,1)",
              pointStrokeColor : "#fff",
              pointHighlightFill : "#fff",
              pointHighlightStroke : "rgba(151,187,205,1)",
              data: [28, 100, 150, 210, 300]
          }
      ]

  }


//barChartData
//var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : ["August 2014","September 2014","October 2014","November 2014"],
    datasets : [
      {
        fillColor : "rgba(220,98,99,1)",
        strokeColor : "rgba(220,98,99,1)",
        highlightFill: "rgba(220,98,99,1)",
        highlightStroke: "rgba(220,98,99,1)",
        data : [49,30,35,30]
      },
      {
        fillColor : "rgba(42,150,255,1)",
        strokeColor : "rgba(42,150,255,1)",
        highlightFill : "rgba(42,150,255,1)",
        highlightStroke : "rgba(42,150,255,1)",
        data : [80,60,70,50]
      },
      {
        fillColor : "rgba(186,213,94,1)",
        strokeColor : "rgba(186,213,94,1)",
        highlightFill : "rgba(186,213,94,1)",
        highlightStroke : "rgba(186,213,94,1)",
        data : [75,110,70,50]
      }
    ]

  }

  //Doughnut
  var doughnutData = [
      {
        value: 50,
        color:"#dc6263",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 40,
        color: "#ffa900",
        highlight: "#ffc552",
        label: "Dark Yellow"
      },
      {
        value: 30,
        color: "#ffe000",
        highlight: "#ffeb5e",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#bad55f",
        highlight: "#c8df7b",
        label: "Green"
      },
      {
        value: 40,
        color: "#00d0cf",
        highlight: "#01dddc",
        label: "Blue"
      },
      {
        value: 120,
        color: "#2a96ff",
        highlight: "#59abfb",
        label: "Dark Blue"
      }

    ];

  window.onload = function(){
  var ctx = document.getElementById("canvas_line_chart").getContext("2d");
  var ctxbar = document.getElementById("canvas_bar_chart").getContext("2d");
  var ctxdoughnut = document.getElementById("canvas_doughnut_chart").getContext("2d");
  window.myLine = new Chart(ctx).Line(lineChartData, {
      responsive: true,
      pointDot : false
  });
  window.myBar = new Chart(ctxbar).Bar(barChartData, {
      responsive : true
    });
  window.myDoughnut = new Chart(ctxdoughnut).Doughnut(doughnutData, {
    responsive : true
  });
  }