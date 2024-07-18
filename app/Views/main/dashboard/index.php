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
                                                <img src="<?php echo base_url('') ?>/assets/images/dash.svg" alt="" class="img-fluid">
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
                                        <h4 class="header-title mt-0">Mothly Disbursement</h4>                                         
                                        <div class="chart-demo dash-apex-chart">
                                            <div id="d2_overview" class="apex-charts"></div>
                                        </div>                                      
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div> <!--end col-->                               
                        </div><!--end row-->  

                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>

<?= $this->endSection() ?>


<?= $this->extend('partials/script' ) ?>