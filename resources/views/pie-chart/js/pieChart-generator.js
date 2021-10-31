  function createChart(chartId, chartData, colorScale, colorRangeInfo) {
     
      const chartElement = document.getElementById(chartId);

      const dataLength = chartData.data.length;

   
      var COLORS = interpolateColors(dataLength, colorScale, colorRangeInfo);


   
      const myChart = new Chart(chartElement, {
        type: 'doughnut',
        data: {
          labels: chartData.labels,
          datasets: [
            {
              backgroundColor: COLORS,
              hoverBackgroundColor: COLORS,
              data: chartData.data
            }
          ],
        },
        options: {
          responsive: true,
          legend: {
            display: false,
          },
        
        }
      });

      return myChart;
    }

	
	
	function getRandomNumber(min, max) {
			return Math.round(Math.random() * (max - min) + min);
		}
   
	
	 
		 
		 
		

		const arrayLength = 10;
		const min = 20;
		const max = 110;

		var i;
		var data = [];
		var labels = [];

		for (i = 0; i < arrayLength; i++) {
		  data.push(getRandomNumber(min, max));
		  labels.push(`Label ${i + 1}`);
		}

		const chartData = {
		  labels: labels,
		  data: data,
		};
	
	
	
	 //test_data

	  
    const colorScale = d3.interpolateInferno;

    const colorRangeInfo = {
      colorStart: 0,
      colorEnd: 1,
      useEndAsStart: false,
    };

   
    createChart('pie-chart', chartData, colorScale, colorRangeInfo);