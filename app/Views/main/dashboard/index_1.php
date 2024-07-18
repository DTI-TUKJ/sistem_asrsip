<?= $this->extend('partials/navbar' ) ?>

<?= $this->section('content') ?>

<div class="page-content" >
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h4 class="mt-0">Hello ! Matt Rosales</h4>  
                                                <p class="text-muted">Good morning ! Have a nice day.</p>
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
                                                <table id="datatable" class="table table-bordered">
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">        
                                            <h4 class="mt-0 header-title">Area Chart</h4>
                                            <p class="text-muted mb-4 d-inline-block text-truncate w-100">Create an area chart using
                                                Morris.Area(options). Area charts take all the same options as line
                                                charts.
                                            </p>        
                                            <div id="morris-area-example" class="aa " style="height: 300px"></div>
                                        </div>
                                    </div>
                                   
                                </div>                               
                            </div>

                            <!-- <div class="row">
                                <div class="col-12">
                                 
                                    <div class="card">
                                        <div class="card-body">            
                                            <h4 class="mt-0 header-title">Line Chart</h4>
                                            <p class="text-muted mb-4 d-inline-block text-truncate w-100">A line chart is a way of plotting data
                                                points on a line. Often, it is used to show trend data, and the
                                                comparison of two data sets.
                                            </p>            
                                            <canvas id="lineChart" height="300"></canvas>            
                                        </div>
                                    </div>
                                </div>                               
                            </div> -->

                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                   <script src="<?php echo base_url('') ?>/assets/vendor/raphael/raphael.min.js"></script>
                <script src="<?php echo base_url('') ?>/assets/vendor/morris/morris.min.js"></script>
              
                <script type="text/javascript">
                   



                      var $areaData = [
                          {y: '2009', a: 10},
                          {y: '2010', a: 75},
                          {y: '2011', a: 50},
                          {y: '2012', a: 75},
                          {y: '2013', a: 50},
                          {y: '2014', a: 75},
                          {y: '2015', a: 90},
                          {y: '2016', a: 90}
                      ];
                     $(document).ready(function(){
                        
                     })

                var grafikline = Morris.Area({

                             element: 'morris-area-example',
                              pointSize: 3,
                              lineWidth: 2,
                              data: $areaData,
                              xkey: 'y',
                              ykeys:  ['a'],
                              labels: ['Series A'],
                              resize: true,
                              hideHover: 'auto',
                              gridLineColor: '#eef0f2',
                              lineColors: ['#3f89af']

                    // element: 'morris-area-example',
                    // data: $areaData,
                    // // ymax: 100000,
                    // xkey: 'period',
                    // ykeys:keydepartemen,
                    // labels:labeldepartemen,
                    // pointSize: 3,
                    // xLabelFormat: function (x) {
                    //         var index = parseInt(x.src.period);
                    //         return monthNames[index];
                    //     },
                    // //ymax: 100000000, 
                    // fillOpacity: 0,
                    // parseTime: false,
                    // numLines: 26,
                    // resize: true,
                    // behaveLikeLine: true,
                    // lineWidth: 3,
                    // // barSizeRatio: 0.25,
                    // hideHover: 'auto',
                    // yLabelFormat:function (y) {
                    //     return 'Rp '+ number_format(y);
                    // },

                });
                 $('.button-menu-mobile').on('click', function (event) {

                    $('#morris-area-example').resize(function () {
                       grafikline.redraw();
                    });
                   
                });
               </script>
<?= $this->endSection() ?>


<?= $this->extend('partials/script' ) ?>