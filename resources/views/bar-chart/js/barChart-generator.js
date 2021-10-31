
	function getRandomNumber(min, max) {
     return Math.round(Math.random() * (max - min) + min);
	}


    function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
    }

    

    function createChart(chartId , colorScale, colorRangeInfo,numberOfColors,numberOfColoumn) {
						
		var arr=[];
		
        for(var j =0;j<(numberOfColoumn+5);j++){
          arr[j]=getRandomNumber(1,15);
		}
		
		var unique = arr.filter(onlyUnique);
		var i=0;
 
		var COLORS = interpolateColors(numberOfColors, colorScale, colorRangeInfo);
 
		var x=new Chart(document.getElementById("bar-chart"), {
			type: 'bar',
			data: {
			  labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
			  datasets: [
				{
				  label: "Population (millions)",
				  backgroundColor: [COLORS[unique[i++]], COLORS[unique[i++]],COLORS[unique[i++]],COLORS[unique[i++]],COLORS[unique[i++]]],
				  data: [0,888,7,784,433]
				}
			  ]
			},
			options: {
				responsive: true,
			  legend: { display: false },
			  title: {
				display: true,
				text: 'Predicted world population (millions) in 2050'
			  },
			  scales: {
				xAxes: [{
						display: true,
						ticks: {
							beginAtZero: true,
							steps: 10,
							stepValue: .1,
							max: 10
						}
					}],
				yAxes: [{
						display: true,
						ticks: {
							beginAtZero: true,
							steps: Math.ceil((1000-0)/100),
							max: 1000
						}
					}]
			},
			}
   
		});
	
	return x;
    }
	
	//testdata
		
	const colorScale = d3.interpolateInferno;

	const colorRangeInfo = {
	  colorStart: 0,
	  colorEnd: 1,
	  useEndAsStart: false,
	};
	
	let numberOfColors=15;
	let numberOfColoumn=5;

	createChart('bar-chart', colorScale, colorRangeInfo,numberOfColors,numberOfColoumn);

