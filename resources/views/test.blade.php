
<html>
<head>
          <link rel="stylesheet" type="text/css" href="{{ asset('css/mycss.css') }}">      
          <link rel="stylesheet" type="text/css" href="{{ asset('css/apexcharts.css') }}">        
          <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">    
         <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">          
          <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-menu.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/widgets.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard-analytics.css') }}">      
          <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css"> 

  
                   
            
</head>

<body>

<!-- <div class="row-6">

<div class="col-3">
<div class="dragdrop">
<canvas  id="lineChart" ></canvas>
</div>
</div>

<div class="col-3">
<canvas class="dragdrop" id="lineChart" draggable="true" ></canvas>
</div>

<div class="col-3">

<canvas id="lineChart" class="dragdrop" draggable="true" ></canvas>

</div>

<div class="col-3">

<canvas class="dragdrop" id="lineChart" draggable="true" ></canvas>

</div>

<div class="col-3">

<canvas class="dragdrop" id="lineChart" ></canvas>

</div>



<div class="col-3">


    <canvas  id="lineChart" ></canvas>



</div>

</div> -->
<div>
  <div class="dragdrop" draggable="true">    <canvas  id="lineChart" ></canvas></div>
  <div class="dragdrop" sdraggable="true">    <canvas  id="lineChart" ></canvas></div>
  <div class="dragdrop" draggable="true">    <canvas  id="lineChart" ></canvas></div>
  <div class="dragdrop" draggable="true">4</div>
  <div class="dragdrop" draggable="true">5</div>
  <div class="dragdrop"draggable="true">6</div>
</div>


                  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
                 
                  <script src="https://d3js.org/d3-color.v1.min.js"></script>
                  <script src="https://d3js.org/d3-interpolate.v1.min.js"></script>
                  <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>

                  <script src="{{asset('js/color-generator.js')}}"></script>

                  <script src="http://blog.pengoworks.com/index.cfm/2008/9/24/A-quick-and-dirty-swap-method-for-jQuery"></script>
                  <!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->

                  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>



<!-- 
<script>

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
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{ 
                data: [86,114,106,106,107,111,133],
                label: "Total",
                fill : false,
               
                // hoverBackgroundColor: COLORS[unique[i++]],
                 borderColor: COLORS[unique[i]],
                 backgroundColor: COLORS[unique[i++]],
                
              }, { 
                data: [70,90,44,60,83,90,100],
                label: "Accepted",
                fill : false,
              
                borderColor: COLORS[unique[i]],
               backgroundColor: COLORS[unique[i++]],
            
              },{ 
                data: [20,50,84,80,53,19,10],
                label: "Not Accepted",
                fill : false,
              
                borderColor: COLORS[unique[i]],
               backgroundColor: COLORS[unique[i++]],
            
              },{ 
                data: [60,95,48,66,38,09,100],
                label: "Pending",
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
        hover: {
            onHover: function(e) {
              var point = this.getElementAtEvent(e);
              e.target.style.cursor = point.length ? 'pointer' : 'default';
            },
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

  </script>   -->

<!-- 
<script>

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

      const dataLength = 10;
 
    var COLORS = interpolateColors(dataLength, colorScale, colorRangeInfo);
 
    var x=new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: [COLORS[unique[i++]], COLORS[unique[i++]],COLORS[unique[i++]],COLORS[unique[i++]],COLORS[unique[i++]]],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
   
});
return x;
    }
const colorScale = d3.interpolateInferno;

const colorRangeInfo = {
  colorStart: 0,
  colorEnd: 1,
  useEndAsStart: false,
};

/* Create Chart */
createChart('bar-chart', colorScale, colorRangeInfo);


</script>  -->

<!-- 

<script>


$('#imgBox').draggable();

console.log('This is drag and drop utility');

const imgBox = document.querySelector('.imgBox');
const whiteBoxes = document.getElementsByClassName('whiteBox');

// Event listeners for draggable element imgBox
imgBox.addEventListener('dragstart', (e) => {
    console.log('DragStart has been triggered');
    e.target.className += ' hold'; //for hold
    setTimeout(() => {
        e.target.className = 'hide'; //for hide
    }, 0);

});

imgBox.addEventListener('dragend', (e) => {
    console.log('DragEnd has been triggered');
    e.target.className = 'imgBox';
});

for (whiteBox of whiteBoxes) {
    whiteBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        console.log('DragOver has been triggered');
    });

    whiteBox.addEventListener('dragenter', (e) => {
        console.log('DragEnter has been triggered');
        e.target.className += ' dashed'; 
    })

    whiteBox.addEventListener('dragleave', (e) => {
        console.log('DragLeave has been triggered');
        e.target.className = 'whiteBox'
    })

    whiteBox.addEventListener('drop', (e) => {
        console.log('Drop has been triggered');
        e.target.append(imgBox);
    })
}

</script> -->

<script>
jQuery.fn.swap = function(b){ 
    // method from: http://blog.pengoworks.com/index.cfm/2008/9/24/A-quick-and-dirty-swap-method-for-jQuery
    b = jQuery(b)[0]; 
    var a = this[0]; 
    var t = a.parentNode.insertBefore(document.createTextNode(''), a); 
    b.parentNode.insertBefore(a, b); 
    t.parentNode.insertBefore(b, t); 
    t.parentNode.removeChild(t); 
    return this; 
};


$( ".dragdrop" ).draggable({ revert: true, helper: "clone" });

$( ".dragdrop" ).droppable({
   // accept: ".dragdrop",
    activeClass: "ui-state-hover",
    hoverClass: "ui-state-active",
    drop: function( event, ui ) {
    //  dragdrop
        var draggable = ui.draggable, droppable = $(this),
            dragPos = draggable.position(), dropPos = droppable.position();
        
        draggable.css({
            left: dropPos.left+'px',
            top: dropPos.top+'px'
        });

        droppable.css({
            left: dragPos.left+'px',
            top: dragPos.top+'px'
        });
        draggable.swap(droppable);
    }
});
</script>

</html>