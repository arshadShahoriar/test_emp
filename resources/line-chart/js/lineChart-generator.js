
	function getRandomNumber(min, max) {
      return Math.round(Math.random() * (max - min) + min);
    }
	
	function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
    }
	
		

    function createChart(chartId , colorScale, colorRangeInfo,numberOfColors,numberOfLine) {

		
		var arr=[];
		var i=0;
	
        
		for(var j =0;j<(numberOfLine+5);j++){
          arr[j]=getRandomNumber(0,10);
		}

		var unique = arr.filter(onlyUnique);
		
		
		var ctx = document.getElementById('lineChart').getContext('2d');

 
	
 
		var COLORS = interpolateColors(numberOfColors, colorScale, colorRangeInfo);
 

		var myChart = new Chart(ctx, {
          type: 'line',
          data: {
           labels: ["S", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
           //labels:["1","2","3","4","5","6","7","8","9","10" ],
            datasets: [{ 
                data: [86,114,106,106,107,111,133],
                label: "student",
                fill : false,
                 borderColor: COLORS[unique[i]],
                 backgroundColor: COLORS[unique[i++]], 
              }, { 
                data: [70,90,44,60,83,90,100],
                label: "businessman",
                fill : false,
				borderColor: COLORS[unique[i]],
				backgroundColor: COLORS[unique[i++]],
            
              },{ 
                data: [20,50,84,80,53,19,10],
                label: "Job Holder",
                fill : false,
				borderColor: COLORS[unique[i]],
               backgroundColor: COLORS[unique[i++]],
            
              // },{ 
              //   data: [60,95,48,66,38,09,100],
              //   label: "Pending",
              //   fill : false,
              
              //   borderColor: COLORS[unique[i]],
              //  backgroundColor: COLORS[unique[i++]],
            
              }
            ]
          },
          options: {
          responsive: true,
          legend: {
            display: false,
          }
          
        },
        
        });

     return myChart;
    }

//testdata
    const colorScale = d3.interpolateInferno;

    const colorRangeInfo = {
      colorStart: 0,
      colorEnd: 1,
      useEndAsStart: false,
    };

	let numberOfColors=10;
	let numberOfLine= 4;
    createChart('lineChart', colorScale, colorRangeInfo,numberOfColors,numberOfLine);

  