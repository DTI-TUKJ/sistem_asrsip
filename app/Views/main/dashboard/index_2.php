<?= $this->extend('partials/navbar' ) ?>

<?= $this->section('content') ?>
    <div class="page-content ml-275" id="body-content">
                    <div class="container-fluid"> 
                        <div class="page-wrapper-img-inner" >
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box" style="height: 90px;">
                                            
                                            <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard"></i> <?php echo $titlePage ?></h4>  
                                        <div class="" >
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="javascript:void(0);">Advice</a></li>
                                                <li class="breadcrumb-item"><a href="javascript:void(0);"><?php echo $titlePage ?></a></li>
                                              
                                             </ol>
                                         </div>                                      
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h4 class="mt-0">Hello ! <?php echo session()->name_emp ?></h4>  
                                                <p class="text-muted">Have a nice day.</p>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-info">Total Incoming Documents</span>
                                                                <h3 class="font-weight-bold">24</h3>
                                                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>New Document Today</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-cart  font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-success">Accepted Documents</span>
                                                                <h3 class="font-weight-bold">10</h3>
                                                                <p class="mb-0 text-muted text-truncate"><span class="text-success">2</span> Accepted Document today</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card mb-0">
                                                            <div class="card-body">
                                                                <div class="float-right">
                                                                    <i class="dripicons-jewel font-20 text-secondary"></i>
                                                                </div> 
                                                                <span class="badge badge-warning">Documents Under Revision</span>
                                                                <h3 class="font-weight-bold">4</h3>
                                                                <p class="mb-0 text-muted text-truncate"><span class="text-danger">3 </span>Revision today</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-md-3 align-self-center">
                                                <img src="assets/images/dash.svg" alt="" class="img-fluid">
                                            </div>
                                        </div>                                                                              
                                    </div><!--end card-body--> 
                                 
                                </div><!--end card--> 
                            </div> <!--end col-->                          
                        </div><!--end row-->
                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0">Document under Verified</h4> 
                                            <div class="table-responsive dash-social">
                                                <table id="datatable" class="table table-bordered ">
                                                    <thead>
                                                    <tr>
                                                        <th style="min-width:250px;">No Doc</th>
                                                        <th>Input Doc</th>
                                                        <th style="max-width:55px;word-wrap: break-word">verifikasi cabang</th>                                                    
                                                        <th style="max-width:65px;word-wrap: break-word">penyerahan fisik</th>
                                                        <th style="max-width:55px;word-wrap: break-word">Verifikasi Pusat</th>
                                                        <th style="max-width:55px;word-wrap: break-word">pencairan</th>
                                                        <th>Action</th>
                                                    </tr><!--end tr-->
                                                    </thead>
                
                                                    <tbody>
                                                    <tr>
                                                        <td><i class="mdi mdi-google text-danger mr-1 font-18"></i>Google</td>
                                                        <td>4541</td>
                                                        <td>3.2%</td>
                                                        <td>3:20</td>
                                                        <td>57.8%</td>
                                                          <td>57.8%</td>

                                                        <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                                    </tr><!--end tr-->
                                                                                    
                                                    </tbody>
                                                </table>                    
                                            </div>                                         
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->                               
                            </div><!--end row-->

                           

                        <div class="row">
                            <div class="col-lg-12 col-xl-8">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Monthly Disbursement</h4>
                                        <p class="text-muted mb-4 d-inline-block text-truncate w-100">Grafik Pencairan document perbulan
                                        </p>            
                                        <canvas id="lineChart" height="300"></canvas>            
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Unit Disbursement</h4>
                                        <p class="text-muted mb-4 d-inline-block text-truncate w-100">Grafik total Pencairan per unit
                                        </p>            
                                        <canvas id="doughnut" height="300"></canvas>            
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!-- end col -->
    
                                                          
                        </div> <!-- end row -->        
        
                        
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>



                <script type="text/javascript">
                     $(document).ready(function(){
                            var ctx = $("#lineChart").get(0).getContext("2d");
                            // pointing parent container to make chart js inherit its width
                            var container = $($("#lineChart")).parent();
                             var ww = $("#lineChart").attr('width', $(container).width() );
                           var lineChart = {
                                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                                datasets: [{
                                    label: "Conversion Rate",
                                    fill: false,
                                    backgroundColor: '#00bcd4',
                                    borderColor: '#00bcd4',
                                    data: [90,50,70,20,35,20,10,50,30,80]
                                }]
                            };

                            var lineOpts = {
                                responsive: true,
                                // title:{
                                //     display:true,
                                //     text:'Chart.js Line Chart'
                                // },
                                tooltips: {
                                    mode: 'index',
                                    intersect: false
                                },
                                hover: {
                                    mode: 'nearest',
                                    intersect: true
                                },
                                scales: {
                                    xAxes: [{
                                        display: true,
                                        // scaleLabel: {
                                        //     display: true,
                                        //     labelString: 'Month'
                                        // },
                                        gridLines: {
                                            color: "rgba(0,0,0,0.1)"
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            color: "rgba(255,255,255,0.05)",
                                            fontColor: '#fff'
                                        },
                                        ticks: {
                                            max: 100,
                                            min: 0,
                                            stepSize: 20
                                        }
                                    }]
                                }
                            };

                              var generate = new Chart(ctx, {type: 'line', data: lineChart, options: lineOpts});
                               $(window).resize( generate );


                               var ctx2 = $("#doughnut").get(0).getContext("2d");
                            // pointing parent container to make chart js inherit its width
                            var container2 = $($("#doughnut")).parent();
                             var ww2 = $("#doughnut").attr('width', $(container2).width() );

                                var donutChart = {
                                labels: [
                                    "Bitcoin",
                                    "Ethereum",
                                    "Litecoin",
                                    "Dashcoin",
                                ],
                                datasets: [
                                    {
                                        data: [80, 50, 100,121],
                                        backgroundColor: [
                                            "#f7931a",
                                            "#1ecab8",
                                            "#e3eaef",
                                            "#1c75bc",
                                        ],
                                        hoverBackgroundColor: [
                                            "#f7931a",
                                            "#1ecab8",
                                            "#e3eaef",
                                            "#1c75bc",
                                        ],
                                        hoverBorderColor: "#fff"
                                    }]
                            };

                            var generate2 =new Chart(ctx2, {type: 'doughnut', data: donutChart});
                                 $(window).resize( generate2 );


                })


                </script>
<?= $this->endSection() ?>


<?= $this->extend('partials/script' ) ?>