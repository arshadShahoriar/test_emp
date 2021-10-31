function calculatePoint(i, intervalSize, colorRangeInfo) {
  var { colorStart, colorEnd, useEndAsStart } = colorRangeInfo;
  return (useEndAsStart
    ? (colorEnd - (i * intervalSize))
    : (colorStart + (i * intervalSize)));
}

/* Must use an interpolated color scale, which has a range of [0, 1] */
function interpolateColors(dataLength, colorScale, colorRangeInfo) {
  var { colorStart, colorEnd } = colorRangeInfo;
  var colorRange = colorEnd - colorStart;
  var intervalSize = colorRange / dataLength;
  var i, colorPoint;
  var colorArray = [];

  for (i = 0; i < dataLength; i++) {
    colorPoint = calculatePoint(i, intervalSize, colorRangeInfo);
    colorArray.push(colorScale(colorPoint));
  }

  return colorArray;
}





function getRandomNumber(min, max) {
    return Math.round(Math.random() * (max - min) + min);
  }

  var arr=[];
      for(var i =0;i<10;i++)
        arr[i]=getRandomNumber(0,10);



  function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
                }

  var unique = arr.filter(onlyUnique);
  var i=0;


  function createChart(chartId , colorScale, colorRangeInfo) {
  var ctx = document.getElementById('lineChart').getContext('2d');

  const dataLength = 10;

  var COLORS = interpolateColors(dataLength, colorScale, colorRangeInfo);
   // console.log(COLORS);

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["10AM", "11AM", "12PM", "1PM", "2PM", "3PM", "4PM","5PM","6PM"],
          datasets: [
            // { 
            //   data: [86,114,106,106,107,111,133],
            //   label: "Total",
            //   fill : false,
             
            //   // hoverBackgroundColor: COLORS[unique[i++]],
            //    borderColor: COLORS[unique[i]],
            //    backgroundColor: COLORS[unique[i++]],
              
            // }, 
            { 
              data: [70,90,44,60,83,90,100],
              label: "Student",
              fill : false,
            
              borderColor: COLORS[unique[i]],
             backgroundColor: COLORS[unique[i++]],
          
            },{ 
              data: [20,50,84,80,53,19,10],
              label: "Job Holder",
              fill : false,
            
              borderColor: COLORS[unique[i]],
             backgroundColor: COLORS[unique[i++]],
          
            },{ 
              data: [60,95,48,66,38,09,100],
              label: "BusinessMan",
              fill : false,
            
              borderColor: COLORS[unique[i]],
             backgroundColor: COLORS[unique[i++]],
          
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


  const colorScale = d3.interpolateInferno;

  const colorRangeInfo = {
    colorStart: 0,
    colorEnd: 1,
    useEndAsStart: false,
  };

  /* Create Chart */
   createChart('lineChart', colorScale, colorRangeInfo);
  // createChart('lineChart', colorScale, colorRangeInfo);

