
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    
   
    <style>
       
        #parent_id_1 {
            
            height: 780;
         
        }
        #parent_id_2 {
            
            height: 440;
           
          }

          #parent_id_3 { 
            height: 480;
           
          }

        </style>

          <link rel="stylesheet" type="text/css" href="{{ asset('css/apexcharts.css') }}">        
          <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">    
         <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">          
          <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-menu.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/widgets.css') }}">
          <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard-analytics.css') }}">      
          <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css"> 

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    
  

</head>



<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   @include('layouts.navbar');


                     <div>
                         
                         @yield('content')

                    </div>
    
                     <div> 
                     
                          @yield('demoChat')
                     
                     </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>






 
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
            
             <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
             <script src="https://d3js.org/d3-color.v1.min.js"></script>
             <script src="https://d3js.org/d3-interpolate.v1.min.js"></script>
            <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>      
            <script src="{{asset('js/color-generator.js')}}"></script>
            
             <script src="{{asset('js/vendors.min.js')}}"></script>
             <script src="{{asset('js/dragula.min.js')}}"></script>
             <script src="{{asset('js/apexcharts.min.js')}}"></script>          
             <script src="{{asset('js/LivIconsEvo.defaults.js')}}"></script>
             <script src="{{asset('js/LivIconsEvo.tools.js')}}"></script>
             <script src="{{asset('js/app-menu.js')}}"></script>
             <script src="{{asset('js/app.js')}}"></script>
            <script src="{{asset('js/components.js')}}"></script>
             <script src="{{asset('js/footer.js')}}"></script>
             <script src="{{asset('js/dashboard-analytics.js')}}"></script>

             
            
             
             <script src="{{asset('js/myscript.js')}}"></script>
          <script src="https://code.jquery.com/jquery-2.2.4.js" ></script>
        <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js" ></script>
      <script src="https://mdbootstrap.com/docs/b4/jquery/getting-started/cdn/"></script>

               
   
   
</body>

</html>
