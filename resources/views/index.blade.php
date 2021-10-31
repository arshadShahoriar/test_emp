@extends('layouts.app')
@section('title','Content | Central Dashboard')


@section('content')
    
    <div  class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper"  >
            <div class="content-header row">
            </div>
        
            <div class="content-body" >
                <!-- Dashboard Analytics Start -->
            
                <section id="dashboard-analytics"  >
                
                <!-- <form action="{{ route('showvalues') }}" enctype='multipart/form-data' method="POST"> -->
               <!--  @csrf -->
             <div id= "parent_sortable" >
                 <div id="parent_id_1">
                    <div id="row_1" class="row" >
                    <input type="hidden" name="content[]"  value="parent_id_1"> 
                        <!-- Website Analytics Starts-->
                        <div id="row_1_col_1" class="col-md-6 col-sm-12"   >
                            <input type="hidden" name="content[]"  value="row_1_col_1">
                            <div class="card" >
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Website Analytics</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                                        <div class="user-analytics mr-2">
                                            <i class="bx bx-user mr-25 align-middle"></i>
                                            <span class="align-middle text-muted">Users</span>
                                            <div class="d-flex">
                                                <div id="radial-success-chart"></div>
                                                <h3 class="mt-1 ml-50">61K</h3>
                                            </div>
                                        </div>
                                        <div class="sessions-analytics mr-2">
                                            <i class="bx bx-trending-up align-middle mr-25"></i>
                                            <span class="align-middle text-muted">Sessions</span>
                                            <div class="d-flex">
                                                <div id="radial-warning-chart"></div>
                                                <h3 class="mt-1 ml-50">92K</h3>
                                            </div>
                                        </div>
                                        <div class="bounce-rate-analytics">
                                            <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                            <span class="align-middle text-muted">Bounce Rate</span>
                                            <div class="d-flex">
                                                <div id="radial-danger-chart"></div>
                                                <h3 class="mt-1 ml-50">72.6%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <canvas id="lineChart"  draggable="true" width="400" height="400"></canvas> 
                                   
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression" id="row_1_col_2">
                            <div class="row">
                            <input type="hidden" name="content[]"  value="row_1_col_2">
                                <!-- Referral Chart Starts-->
                                <div class="col-xl-12 col-12"  >
                                    <div class="card"  draggable="true" >
                                        <div class="card-body text-center pb-0">
                                            <h2>$32,690</h2>
                                            <span class="text-muted">Referral 40%</span>
                                            <div id="success-line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Impression Radial Chart Starts-->
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-body donut-chart-wrapper">
                                            <div id="donut-chart" class="d-flex justify-content-center"></div>
                                            <ul class="list-inline d-flex justify-content-around mb-0">
                                                <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Social</li>
                                                <li> <span class="bullet bullet-xs bullet-info mr-50"></span>Email</li>
                                                <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Search</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12" id="row_1_col_3" >
                            <div class="row">
                                <!-- Conversion Chart Starts-->
                                <input type="hidden" name="content[]" value="row_1_col_3">
                                <div class="col-xl-12 col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                            <div class="conversion-title">
                                                <h4 class="card-title">Conversion</h4>
                                                <p>60%
                                                    <i class="bx bx-trending-up text-success font-size-small align-middle mr-25"></i>
                                                </p>
                                            </div>
                                            <div class="conversion-rate">
                                                <h2>89k</h2>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div id="bar-negative-chart" class="negative-bar-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 col-12">
                                    <div class="row">
                                    
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-user text-primary font-medium-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="total-amount">
                                                            <h5 class="mb-0">$38,566</h5>
                                                            <small class="text-muted">Conversion</small>
                                                        </div>
                                                    </div>
                                                    <div id="primary-line-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-dollar text-warning font-medium-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="total-amount">
                                                            <h5 class="mb-0">$53,659</h5>
                                                            <small class="text-muted">Income</small>
                                                        </div>
                                                    </div>
                                                    <div id="warning-line-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="content[]"  value="end"> 
                    </div>
                </div>
                    <!-- //row_1 -->
                <div id="parent_id_2">
                    <div id="row_2" class="row" >
                    <input type="hidden" name="content[]"  value="parent_id_2">
                        <!-- Activity Card Starts-->
                        <div class="col-xl-3 col-md-6 col-12 activity-card" id="row_2_col_1"> 
                            <!-- row_1_col_1 -->
                            <input type="hidden" name="content[]"  value="row_2_col_1">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Activity</h4>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="d-flex activity-content">
                                        <div class="avatar bg-rgba-primary m-0 mr-75">
                                            <div class="avatar-content">
                                                <i class="bx bx-bar-chart-alt-2 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="activity-progress flex-grow-1">
                                            <small class="text-muted d-inline-block mb-50">Total Sales</small>
                                            <small class="float-right">$8,125</small>
                                            <div class="progress progress-bar-primary progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50" style="width:50%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex activity-content">
                                        <div class="avatar bg-rgba-success m-0 mr-75">
                                            <div class="avatar-content">
                                                <i class="bx bx-dollar text-success"></i>
                                            </div>
                                        </div>
                                        <div class="activity-progress flex-grow-1">
                                            <small class="text-muted d-inline-block mb-50">Income Amount</small>
                                            <small class="float-right">$18,963</small>
                                            <div class="progress progress-bar-success progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width:80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex activity-content">
                                        <div class="avatar bg-rgba-warning m-0 mr-75">
                                            <div class="avatar-content">
                                                <i class="bx bx-stats text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="activity-progress flex-grow-1">
                                            <small class="text-muted d-inline-block mb-50">Total Budget</small>
                                            <small class="float-right">$14,150</small>
                                            <div class="progress progress-bar-warning progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" style="width:60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-75">
                                        <div class="avatar bg-rgba-danger m-0 mr-75">
                                            <div class="avatar-content">
                                                <i class="bx bx-check text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="activity-progress flex-grow-1">
                                            <small class="text-muted d-inline-block mb-50">Completed Tasks</small>
                                            <small class="float-right">106</small>
                                            <div class="progress progress-bar-danger progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="30" style="width:30%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profit Report Card Starts-->
                        <div class="col-xl-3 col-md-6 col-12 profit-report-card" id="row_2_col_2">
                          <input type="hidden" name="content[]"  value="row_2_col_2">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Profit Report</h4>
                                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                        </div>
                                        <div class="card-body d-flex justify-content-around">
                                            <div class="d-inline-flex mr-xl-2">
                                                <div id="profit-primary-chart"></div>
                                                <div class="profit-content ml-50 mt-50">
                                                    <h5 class="mb-0">$12k</h5>
                                                    <small class="text-muted">2020</small>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex">
                                                <div id="profit-info-chart"></div>
                                                <div class="profit-content ml-50 mt-50">
                                                    <h5 class="mb-0">$64k</h5>
                                                    <small class="text-muted">2019</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Registrations</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-end justify-content-around">
                                                <div class="registration-content mr-xl-1">
                                                    <h4 class="mb-0">56.3k</h4>
                                                    <i class="bx bx-trending-up success align-middle"></i>
                                                    <span class="text-success">12.8%</span>
                                                </div>
                                                <div id="registration-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sales Chart Starts-->
                        <div class="col-xl-3 col-md-6 col-12 sales-card" id="row_2_col_3">
                            <input type="hidden" name="content[]"  value="row_2_col_3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div class="card-title-content">
                                        <h4 class="card-title">Sales</h4>
                                        <small class="text-muted">Calculated in last 7 days</small>
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-body">
                                    <div id="sales-chart" class="mb-2"></div>
                                    <div class="d-flex justify-content-between my-1">
                                        <div class="sales-info d-flex align-items-center">
                                            <i class='bx bx-up-arrow-circle text-primary font-medium-5 mr-50'></i>
                                            <div class="sales-info-content">
                                                <h6 class="mb-0">Best Selling</h6>
                                                <small class="text-muted">Sunday</small>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">28.6k</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="sales-info d-flex align-items-center">
                                            <i class='bx bx-down-arrow-circle icon-light font-medium-5 mr-50'></i>
                                            <div class="sales-info-content">
                                                <h6 class="mb-0">Lowest Selling</h6>
                                                <small class="text-muted">Thursday</small>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">986k</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Growth Chart Starts-->
                        <div class="col-xl-3 col-md-6 col-12 growth-card" id="row_2_col_4">
                        <input type="hidden" name="content[]"  value="row_2_col_4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            2020
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2018</a>
                                        </div>
                                    </div>
                                    <div id="growth-Chart"></div>
                                    <h6 class="mt-2"> 62% Growth in 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="content[]"  value="end"> 
                </div>
                <div id="parent_id_3">
                    <div class="row" id="row_3">
                    <input type="hidden" name="content[]"  value="parent_id_3">
                        <!-- Task Card Starts -->
                        <div class="col-lg-7" id="row_3_col_1">
                        <input type="hidden" name="content[]"  value="row_3_col_1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card widget-todo">
                                        <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                                            <h4 class="card-title d-flex mb-25 mb-sm-0">
                                                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>All employee group by profession
                                            </h4>
                                         
                                        </div>
                                        <div class="card-body px-0 py-1">
                          

                            <table  class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th class="th-sm">ID
                                </th>
                                <th class="th-sm">phone
                                </th>
                                <th class="th-sm">First Name
                                </th>
                                <th class="th-sm">Last Name
                                </th>
                                <th class="th-sm">Profession
                                
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($emp_data_pos as $emp)
                                        <tr >
                                           
                          <td>
                           {{ $emp->id }}
                        </td>
                        <td>
                           {{ $emp->phone }}
                        </td>
                        <td>
                           {{ $emp->first_name }}
                        </td>
                        <td>
                           {{ $emp->last_name }}
                        </td>
                        <td>
                           {{ $emp->Profession }}
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                            
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-5" id="row_3_col_2">
                        <input type="hidden" name="content[]"  value="row_3_col_2">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">
                                       All Employee
                                    </h4>
                                </div>
                                <div class="card-body">
                              
      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search  Data" />
     </div>
  <thead>
    <tr>
      <th class="th-sm">ID
      </th>
      <th class="th-sm">phone
      </th>
      <th class="th-sm">First Name
      </th>
      <th class="th-sm">Last Name
      </th>
  
    </tr>
  </thead>
  <tbody>
   
    @foreach($emp_data as $emp)
                <tr >
                                            
                            <td>
                            {{ $emp->id }}
                         </td>
                         <td>
                            {{ $emp->phone }}
                         </td>
                         <td>
                            {{ $emp->first_name }}
                         </td>
                         <td>
                            {{ $emp->last_name }}
                         </td>
                        
    </tr>
    @endforeach
  </tbody>

</table>
                               
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="content[]"  value="end"> 
                    </div>
                </div>
                
              
              </div>

          
                </section>
       
              
            
            </div>
        </div>
    </div>
   
@endsection

@section('demoChat')
    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                    </div>
                    <div class="heading-elements">
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
 @endsection

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 

 <script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    // $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>


     
 </body>