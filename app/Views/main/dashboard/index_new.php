<?= $this->extend('partials/header_layout' ) ?>

<?= $this->section('content') ?>
	        <div class="nk-content ">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Asset Used</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>Hubung admin untuk info asset</p>
                                        </div> 
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                       <!--  <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li> 
                                                        
                                                        <input type="text" class="form-control"  name="search_loan" id="search_loan" placeholder="Search Asset in loan">
                                                    </li>
                                                    <li>
                                                    <select class="form-select" id="s_cat_loan" name="s_cat_loan" onchange="">
                                                         <option value="All">All</option>
                                                         <option value="Ruangan">Ruangan</option>
                                                            <option value="Kendaraan">Kendaraan</option>
                                                         <option value="Zoom">Zoom</option>

                                                    </select>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <ul class="nav nav-tabs mt-n3">
                                                <li class="nav-item nav-item-loan">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1_used " onclick="tabShow('','Loan')">All</a>
                                                </li>
                                                <li class="nav-item nav-item-loan">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem2_used" onclick="tabShow('_car','Loan')">Kendaraan</a>
                                                </li>
                                                <li class="nav-item nav-item-loan">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem3_used" onclick="tabShow('_room','Loan')">Ruangan</a>
                                                </li>
                                                <li class="nav-item nav-item-loan">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem4_used" onclick="tabShow('_zoom','Loan')">Zoom</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                  <div class="toggle-wrap nk-block-tools-toggle mb-2">
                                                       
                                                            <ul class="nk-block-tools g-3">
                                                                  <li> 
                                                                    
                                                                    <input type="text" class="form-control"  name="search_loan" id="search_loan" placeholder="Search Available Asset">
                                                                </li>   
                                                               
                                                            </ul>
                                                     
                                                      </div>
                                                <div class="tab-pane active" id="tabItem1_used">
                                                    <div class="row g-gs kontenproduk_loan"  id="kontenproduk_loan" style="justify-content: center;">
                                                                
                                                            
                                                         
                                                      </div>
                                                         <div class="row g-gs" id="loader_container_loan" style="justify-content: center;">
                                                                    <span class="loader_front" id="loader_front_loan" style="display: none;"></span>
                                                         </div>
                                                     <nav class="mt-4 pagination-wrap_loan" id="pagination-wrap_loan">
                                   
                                                      </nav>
                                                </div>
                                                <div class="tab-pane" id="tabItem2_used">
                                                        <div class="row g-gs kontenproduk_loan_car"  id="kontenproduk_loan_car" style="justify-content: center;">
                                                                
                                                            
                                                         
                                                      </div>
                                                         <div class="row g-gs" id="loader_container_loan_car" style="justify-content: center;">
                                                                    <span class="loader_front" id="loader_front_loan_car" style="display: none;"></span>
                                                         </div>
                                                     <nav class="mt-4 pagination-wrap_loan_car" id="pagination-wrap_loan_car">
                                   
                                                      </nav>
                                                </div>
                                                <div class="tab-pane" id="tabItem3_used">
                                                      <div class="row g-gs kontenproduk_loan_room"  id="kontenproduk_loan_room" style="justify-content: center;">
                                                                
                                                            
                                                         
                                                      </div>
                                                         <div class="row g-gs" id="loader_container_loan_room" style="justify-content: center;">
                                                                    <span class="loader_front" id="loader_front_loan_room" style="display: none;"></span>
                                                         </div>
                                                     <nav class="mt-4 pagination-wrap_loan_room" id="pagination-wrap_loan_room">
                                   
                                                      </nav>
                                                </div>
                                                <div class="tab-pane" id="tabItem4_used">
                                                      <div class="row g-gs kontenproduk_loan_zoom"  id="kontenproduk_loan_zoom" style="justify-content: center;">
                                                                
                                                            
                                                         
                                                      </div>
                                                         <div class="row g-gs" id="loader_container_loan_zoom" style="justify-content: center;">
                                                                    <span class="loader_front" id="loader_front_loan_zoom" style="display: none;"></span>
                                                         </div>
                                                     <nav class="mt-4 pagination-wrap_loan_zoom" id="pagination-wrap_loan_zoom">
                                   
                                                      </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- <div class="row g-gs" id="loader_container_status" style="justify-content: center;">
                                    <span class="loader_front" id="loader_front_status" style="margin-top:5%;display: none;"></span>
                                </div>
                                <div class="row g-gs kontenproduk_loan"  id="kontenproduk_loan" style="justify-content: center;">
                              
                                  
                                </div>
                                 <nav class="mt-4 pagination-wrap_loan" id="pagination-wrap_loan">
                                   
                                 </nav> -->
                            </div>
                        </div>
                         <div class="nk-content-body" style="margin-top:30px">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Available Asset</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>Hubung admin untuk info asset</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                       <!--  <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                      <li> 
                                                        
                                                        <input type="text" class="form-control"  name="search_available" id="search_available" placeholder="Search Available Asset">
                                                    </li>
                                                    <li>
                                                    <select class="form-select" id="s_cat_available" name="s_cat_available">
                                                         <option value="All">All</option>
                                                         <option value="Ruangan">Ruangan</option>
                                                            <option value="Kendaraan">Kendaraan</option>
                                                         <option value="Zoom">Zoom</option>

                                                    </select>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <!-- <div class="row g-gs" id="loader_container" style="justify-content: center;">
                                    <span class="loader_front" id="loader_front" style="margin-top:5%;display: none;"></span>
                                </div> -->
                                  <div class="card card-bordered card-preview">
                                        <div class="card-inner" >
                                            <ul class="nav nav-tabs mt-n3">
                                                <li class="nav-item nav-item-available ">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1" onclick="tabShow('','Available')">All</a>
                                                </li>
                                                <li class="nav-item nav-item-available">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem2" onclick="tabShow('_car','Available')">Kendaraan</a>
                                                </li>
                                                <li class="nav-item nav-item-available">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem3" onclick="tabShow('_room','Available')">Ruangan</a>
                                                </li>
                                                <li class="nav-item nav-item-available">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem4" onclick="tabShow('_zoom','Available')">Zoom</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                 <div class="toggle-wrap nk-block-tools-toggle mb-2">
                                                    
                                                            <ul class="nk-block-tools g-3">
                                                                  <li> 
                                                                    
                                                                    <input type="text" class="form-control"  name="search_All" id="search_All" placeholder="Search Available Asset">
                                                                </li>   
                                                               
                                                            </ul>
                                                       
                                                      </div>
                                                <div class="tab-pane active" id="tabItem1">
                                                         
                                                      <div class="row g-gs kontenproduk"  id="kontenproduk" style="justify-content: center;">
                                                                
                                                            
                                                         
                                                      </div>
                                                         <div class="row g-gs" id="loader_container" style="justify-content: center;">
                                                                    <span class="loader_front" id="loader_front" style="display: none;"></span>
                                                         </div>
                                                     <nav class="mt-4 pagination-wrap" id="pagination-wrap">
                                   
                                                      </nav>
                                                </div>
                                                <div class="tab-pane" id="tabItem2">

                                                      <div class="row g-gs kontenproduk_car"  id="kontenproduk_car" style="justify-content: center;">
                                                              
                                                          
                                                         
                                                     </div>
                                                            <div class="row g-gs" id="loader_container_car" style="justify-content: center;">
                                                                <span class="loader_front" id="loader_front_car" style="display: none;"></span>
                                                            </div>
                                                      <nav class="mt-4 pagination-wrap_car" id="pagination-wrap_car">
                                     
                                                      </nav>
                                                </div>
                                                <div class="tab-pane" id="tabItem3">
                                                
                                                      <div class="row g-gs kontenproduk_room"  id="kontenproduk_room" style="justify-content: center;">
                                                    
                                                         
                                                     </div>
                                                      <div class="row g-gs" id="loader_container_room" style="justify-content: center;">
                                                                <span class="loader_front" id="loader_front_room" style="display: none;"></span>
                                                      </div>
                                                       <nav class="mt-4 pagination-wrap_room" id="pagination-wrap_room">
                                   
                                                      </nav>                                                
                                                 </div>
                                                <div class="tab-pane" id="tabItem4">
                                                

                                                      <div class="row g-gs kontenproduk_zoom"  id="kontenproduk_zoom" style="justify-content: center;">
                                  
                                                            
                                                         
                                                     </div>
                                                      <div class="row g-gs" id="loader_container_zoom" style="justify-content: center;">
                                                                <span class="loader_front" id="loader_front_zoom" style="display: none;"></span>
                                                            </div>
                                                     <nav class="mt-4 pagination-wrap_zoom" id="pagination-wrap_zoom">
                                   
                                                      </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               <!--  <nav class="mt-4 pagination-wrap" id="pagination-wrap">
                                  
                                 </nav> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<div class="modal fade " role="dialog" aria-hidden="true" id="modalcheck">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Check Schedule</h5>
            </div>
            <div class="modal-body" id="maincheck">


        </div>

    </div>
</div>
</div>

<div class="modal fade " role="dialog" aria-hidden="true" id="modaldetail">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Detail Schedule</h5>
            </div>
            <div class="modal-body pt-0" id="maindetail">
             
        </div>

    </div>
</div>
</div>


<div class="modal fade " tabindex="-1" id="modalAdd">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Request Loan</h5>
            </div>
            <div class="modal-body" id="mainAdd">

                
       
        </div>  
      
    </div>
</div>
</div>
            <script type="text/javascript">
                 $(document).ready(function(){
                  // var param=document.getElementById('s_cat_available').value;
                  // var param_status=document.getElementById('s_cat_loan').value;
                  // console.log(param)
                  showproduk();
                  showprodukstatus();
                   //var type = $('.nav li.nav-item a.nav-link.active').text()
                       // console.log(type);
                })

         

                function tabShow(tabName, viewName){
                        if (viewName=='Available'){
                            document.getElementById("kontenproduk"+tabName).innerHTML = "";
                            document.getElementById("pagination-wrap"+tabName).innerHTML = "";
                            $('#loader_container'+tabName).show()
                        }else{
                            //console.log(viewName)
                            document.getElementById("kontenproduk_loan"+tabName).innerHTML = "";
                            document.getElementById("pagination-wrap_loan"+tabName).innerHTML = "";
                            $('#loader_container_loan'+tabName).show()
                        }
                       
                        var originalString = tabName;
                        var cat = originalString.replace(/_/g, '');
                        
                        if(cat=='car'){
                            cat='Kendaraan';
                        }else if(cat=='room'){
                             cat='Ruangan';
                        }else if(cat=='zoom'){
                            cat='Zoom';
                        }

                        (viewName=='Available')?showproduk(cat, tabName):showprodukstatus(cat, tabName);
                }

               

        



                  // let autorelod = setInterval(function () {
                  //       var param_status_new=document.getElementById('s_cat_loan').options[document.getElementById('s_cat_loan').selectedIndex].value
                  //       var param_new=document.getElementById('s_cat_available').options[document.getElementById('s_cat_available').selectedIndex].value
                  //       var paramName_new = document.getElementById('search_available').value;
                  //       var paramName_status = document.getElementById('search_loan').value;
                        
                        
                  //        var page_active = parseInt($('.pagination-wrap li.current-page.active').text())
                  //        var page_active_loan = parseInt($('.pagination-wrap_loan li.current-page.active').text())
                  //       console.log(page_active);

                  //       showprodukstatus(param_status_new,page_active_loan,paramName_status,'onreload' );
                  //       //showproduk(param_new, page_active ,paramName_new );
                  //  }, 5000)


         const source = document.getElementById('search_All');
         const source_status = document.getElementById('search_loan');


          const inputHandler = function(e) {
                        var type = $('.nav li.nav-item-available a.nav-link.active').text()
                             if(type=='All'){
                                var tabName='';
                             }else if (type=='Kendaraan'){
                                var tabName='_car';
                             }else if (type=='Ruangan'){
                                var tabName='_room'
                             }else{
                                var tabName='_zoom'
                             }

                        $('#loader_container'+tabName).show()
                        var page_active = 1
                        document.getElementById("kontenproduk"+tabName).innerHTML = "";
                        document.getElementById("pagination-wrap"+tabName).innerHTML = "";

              //showproduk(e.target.value);
                        
                        $.ajax({
                              url:"<?php echo base_url('showAsset') ?>",
                              global:false,
                              async:true,
                              type:'post',
                              dataType:'json',
                              data: ({
                               searchByName : e.target.value,
                               search : type,

                              }),
                              beforeSend: function () {
                                    $('#loader_front'+tabName).show()
                                   // $('.subkonten').hide()
                              },
                              success : function(e) {
                                  var html ='';
                                    $('#loader_front'+tabName).hide()
                                    $('#loader_container'+tabName).hide()
                                    // $('.subkonten').show()
                                    if (e.data.length!=0){
                                    $.each(e.data, function(key, value) {
                                      // console.log(`ini${value.amount_asset}`)
                                         var labelCap='Capacity';

                                        if(value.asset_type=='Kendaraan'){
                                            labelCap='Seat Capacity &emsp;&emsp;&emsp;&nbsp;&nbsp;'
                                        }else if(value.asset_type=='Zoom' || value.asset_type=='Ruangan'){
                                            labelCap='Participant Capacity'
                                        }
                                       html +=`
                                        <div class="col-md-4 subkonten" style="cursor: pointer;">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="row g-gs">
                                                            <div class="col-md-3">
                                                                <div class="image-item ">
                                                                  <img class="image-content" src="<?php echo base_url('').'/assets/images/item/' ?>${value.asset_image}" alt="" srcset="" class="profile-img" style="width: 110px;height: 100px;object-fit: cover;margin: 0 auto;">
                                                                  </div>
                                                                    
                                                            </div>
                                                            <div class="col-md-9" >
                                                         
                                                                    <div class="card-title-group align-start mb-0" style="margin-top: 10px;">
                                                                        <div class="card-title">
                                                                            <h6 class="subtitle">Asset Name</h6>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    <div class="card-amount">
                                                                        <span class="amount" style="font-size:20px">${value.asset_name}
                                                                        </span>
                                                                        
                                                                    </div>
                                                                  
                                                                    <div class="invest-data mt-1">
                                                                        <div class="invest-data-amount g-2">
                                                                            <div class="invest-data-history">
                                                                                <div class="title">Description</div>
                                                                                <div class="amount">${value.description}</div>
                                                                            </div>
                                                                       
                                                                        </div>
                                                                      
                                                                    </div> 
                                                                    <div class="invest-data mt-1">
                                                                        <div class="invest-data-amount g-2">
                                                                            
                                                                            <div class="invest-data-history">
                                                                                <div class="title">${labelCap}</div>
                                                                                 <div class="amount" style="display:flex"><p>  ${value.capacity}</p><i class="icon fa-solid fa-users " style="margin-left:15px"></i></div>
                                                                            </div>
                                                                    
                                                                        </div>

                                                                      
                                                                    </div>
                                                                       <div class="invest-data mt-0">
                                                                 
                                                                            <div class="invest-data-history" style="display:flex; justify-content:right" >
                                                                                
                                                                                <div class="amount" style="">
                                                                                <a class="btn btn-round btn-sm btn-primary" onclick="modalcheck('${value.id_asset}', '${value.id_owner}')">Check Schedule</a>
                                                                                </div>
                                                                            </div>
                                                                      
                                                                    </div> 
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->

                                            `;
                                    });
                                    }else{
                                        html +=` <div class="col-md-4 subkonten">
                                         <div class="card card-bordered card-full">
                                            <div class="card-inner" style="justify-content:center;display: flex;">
                                                <span>There's no Available Asset</span>
                                               
                                            </div>
                                        </div><!-- .card -->
                                    </div>`
                                    }  
                                     $('#kontenproduk'+tabName).html(html);
                                       //document.getElementById("kontenproduk_loan").innerHTML = "";
                                     document.getElementById("pagination-wrap"+tabName).innerHTML = "";
                                     produk_pagination_available(page_active, tabName);
                                    

                                      
                                  
                              },
                              error :function(xhr, status, error) {
                               alert(xhr.responseText);
                              }

                            })
                }

          const inputHandlerLoan = function(e) {
            var type = $('.nav li.nav-item-loan a.nav-link.active').text()
                             if(type=='All'){
                                var tabName='';
                             }else if (type=='Kendaraan'){
                                var tabName='_car';
                             }else if (type=='Ruangan'){
                                var tabName='_room'
                             }else{
                                var tabName='_zoom'
                             }

                        $('#loader_container_loan'+tabName).show()
                        
                          var page_active_loan = 1
                       document.getElementById("kontenproduk_loan"+tabName).innerHTML = "";
                       document.getElementById("pagination-wrap_loan"+tabName).innerHTML = "";
                        
                       
                        // console.log(type)
                        $.ajax({
                              url:"<?php echo base_url('showAssetStatus') ?>",
                              global:false,
                              async:true,
                              type:'post',
                              dataType:'json',
                              data: ({
                               searchByName : e.target.value,
                               search : type,

                              }),
                              beforeSend: function () {
                                    $('#loader_front_loan'+tabName).show()
                                   // $('.subkonten').hide()
                              },
                              success : function(e) {
                                  var html ='';
                                    $('#loader_front_loan'+tabName).hide()
                                    $('#loader_container_loan'+tabName).hide()
                                    // $('.subkonten').show()
                                    if (e.data.length!=0){
                                     var datenow=new Date('<?php echo date('Y-m-d H:i:s') ?>')
                                       
                                      $.each(e.data, function(key, value) {
                                         var date_start=new Date(value['tanggal_pinjam'])
                                         var date_end=new Date(value['tanggal_kembali'])
                                         if (datenow>=date_start && value.status==1 ){
                                         status=`<span class=" text-success">In Use  </span> until <b>${formatDate(date_end)}</b>`
                                         }else{
                                            if(value.status!=0){
                                                status=`<span class="text-info">Scheduled on</span><p ><b>${formatDate(date_start)} - ${formatDate(date_end)}</b></p>`
                                            }else{
                                                status=`<span class="text-warning"> Requested in </span><p ><b>${formatDate(date_start)} - ${formatDate(date_end)}</b></p>`
                                            }
                                         }
                                         html +=`
                                                
                                                    <div class="col-md-4 subkonten_loan" id="subkonten_loan" style="cursor:pointer">
                                                            <div class="card card-bordered card-full  shadow-cus">
                                                                <div class="card-inner shadow-cus">
                                                                    <div class="row g-gs">
                                                                        <div class="col-md-3">
                                                                            <div class="image-item ">
                                                                              <img class="image-content" src="<?php echo base_url('').'/assets/images/item/' ?>${value.asset_image}" alt="" srcset="" class="profile-img" style="width: 110px;height: 100px;object-fit: cover;margin: 0 auto;">
                                                                              </div>
                                                                                
                                                                        </div>
                                                                        <div class="col-md-9" >
                                                                     
                                                                                <div class="card-title-group align-start mb-0" style="margin-top: 10px;">
                                                                                    <div class="card-title">
                                                                                        <h6 class="subtitle">Asset Name</h6>
                                                                                    </div>
                                                                                  
                                                                                </div>
                                                                                <div class="card-amount">
                                                                                    <span class="amount" style="font-size:20px">${value.asset_name}
                                                                                    </span>
                                                                                    
                                                                                </div>
                                                                                
                                                                                <div class="invest-data ">
                                                                                    <div class="invest-data-amount g-2">
                                                                                        <div class="invest-data-history">
                                                                                            <div class="title">status</div>
                                                                                            <div class="amount">${status}</div>
                                                                                        </div>
                                                                                   
                                                                                    </div>
                                                                                  
                                                                                </div>   
                                                                                
                                                                                 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                              `;
                                      });
                                    }else{
                                        html +=` <div class="col-md-4 subkonten_loan">
                                         <div class="card card-bordered card-full">
                                            <div class="card-inner" style="justify-content:center;display: flex;">
                                                <span>There's no Available Asset</span>
                                               
                                            </div>
                                        </div><!-- .card -->
                                    </div>`
                                    } 
                                   // console.log(html)  
                                     $('#kontenproduk_loan'+tabName).html(html);

                                     document.getElementById("pagination-wrap_loan"+tabName).innerHTML = "";
                                     produk_pagination_loan(page_active_loan, tabName);
  
                                  
                              },
                              error :function(xhr, status, error) {
                               alert(xhr.responseText);
                              }

                            })
                }
                      
          source.addEventListener('input', inputHandler);
          source.addEventListener('propertychange', inputHandler);
          source_status.addEventListener('input', inputHandlerLoan);
          source_status.addEventListener('propertychange', inputHandlerLoan);

        function showprodukstatus(search='', tabName='', select=1, paramName=null){
            var status='';
                  $.ajax({
                    url:"<?php echo base_url('showAssetStatus') ?>",
                    global:false,
                    async:true,
                    type:'post',
                    dataType:'json',
                    data: ({
                     search : search,
                     searchByName:paramName
                    }),
                     beforeSend: function () {
              
                                        $('#loader_front_loan'+tabName).show()
                                    
                              },
                    success : function(e) {
                        var html ='';
                       
                            $('#loader_front_loam'+tabName).hide()
                             $('#loader_container_loan'+tabName).hide()
                          
                             
                         if (e.data.length!=0){
                            var datenow=new Date('<?php echo date('Y-m-d H:i:s') ?>')
                           
                          $.each(e.data, function(key, value) {
                             var date_start=new Date(value['tanggal_pinjam'])
                             var date_end=new Date(value['tanggal_kembali'])
                             if (datenow>=date_start && value.status==1 ){
                             status=`<span class=" text-success">In Use  </span> until <b>${formatDate(date_end)}</b>`
                             }else{
                                if(value.status!=0){
                                     status=`<span class="text-info">Scheduled on</span><p ><b>${formatDate(date_start)} - ${formatDate(date_end)}</b></p>`
                                }else{
                                     status=`<span class="text-warning">Requested in </span><p ><b>${formatDate(date_start)} - ${formatDate(date_end)}</b></p>`
                                }
                             }
                             html +=`
                                    
                                        <div class="col-md-4 subkonten_loan" id="subkonten_loan" style="cursor:pointer" onclick="detail_loan(${value.id_loan})">
                                                <div class="card card-bordered card-full  shadow-cus">
                                                    <div class="card-inner">
                                                        <div class="row g-gs">
                                                            <div class="col-md-3">
                                                                <div class="image-item ">
                                                                  <img class="image-content" src="<?php echo base_url('').'/assets/images/item/' ?>${value.asset_image}" alt="" srcset="" class="profile-img" style="width: 110px;height: 100px;object-fit: cover;margin: 0 auto;">
                                                                  </div>
                                                                    
                                                            </div>
                                                            <div class="col-md-9" >
                                                         
                                                                    <div class="card-title-group align-start mb-0" style="margin-top: 10px;">
                                                                        <div class="card-title">
                                                                            <h6 class="subtitle">Asset Name</h6>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    <div class="card-amount">
                                                                        <span class="amount" style="font-size:20px">${value.asset_name}
                                                                        </span>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="invest-data ">
                                                                        <div class="invest-data-amount g-2">
                                                                            <div class="invest-data-history">
                                                                                <div class="title">Status</div>
                                                                                <div class="amount">${status}</div>
                                                                            </div>
                                                                       
                                                                        </div>
                                                                      
                                                                    </div>   
                                                                    
                                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->

                                  `;
                          });
                        }else{
                            html +=` <div class="col-md-4 subkonten_loan">
                                         <div class="card card-bordered card-full">
                                            <div class="card-inner" style="justify-content:center;display: flex;">
                                                <span>There's no Available Asset</span>
                                               
                                            </div>
                                        </div><!-- .card -->
                                    </div>`
                        }

                           $('#kontenproduk_loan'+tabName).html(html);
                            //document.getElementById("pagination-wrap_loan").innerHTML = "";
                            produk_pagination_loan(select, tabName);
                            
                        
                    },
                    error :function(xhr, status, error) {
                     alert(xhr.responseText);
                    }

                  })

        }
        function detail_loan(id){
            var html=''
            $.ajax({
                    url:"<?php echo base_url('detailLoan') ?>",
                    global:false,
                    async:true,
                    type:'post',
                    dataType:'json',
                    data: ({
                     id_loan : id,
                   
                    }),
                    success : function(e) {
                                
                             var date_start=new Date(e.data.tanggal_pinjam)
                             var date_end=new Date(e.data.tanggal_kembali)
                             var driver=''
                                 if (e.data.asset_type=='Kendaraan'){
                                    if (e.data.driver==1){
                                        driver +=' ( With Driver )'
                                    }else{
                                         driver +='( Without Driver )'
                                    }
                                 }
                             html +=`  <div class="tab-pane " id="overview">
                                          <div class="invest-ov gy-2 pb-1 pt-1">
                                              <div class="subtitle mb-0 pb-0">Activity Name</div>
                                              <div class="invest-ov-details">
                                                  
                                                      <div class="amount">${e.data.activity}</div>
                                                
                                            
                                               </div>
                                             
                                           </div>
                                           <div class="invest-ov gy-2 pb-1 pt-1">
                                              <div class="subtitle mb-0 pb-0">Schedule Activity</div>
                                              <div class="invest-ov-details">
                                                  
                                                      <div class="amount"> <span class="badge badge-dim badge-md bg-info">${formatDate(date_start)}</span> - <span class="badge badge-dim badge-md bg-info">${formatDate(date_end)}</span></div>
                                                 
                                                  
                                            
                                               </div>
                                             <div class="amount">${driver}</div>
                                           </div>
                                           <div class="invest-ov gy-2 pb-1 pt-1">
                                              <div class="subtitle mb-0 pb-0">PIC Name</div>
                                              <div class="invest-ov-details">
                                                  
                                                      <div class="amount">${e.data.name} ( ${e.data.nip} )</div>
                                                 
                                                  
                                            
                                               </div>
                                             
                                           </div>
                                           <div class="invest-ov gy-2 pb-1 pt-1">
                                              <div class="subtitle mb-0 pb-0">Unit</div>
                                              <div class="invest-ov-details">
                                                  
                                                      <div class="amount">${e.data.unit}</div>
                                                 
                                                  
                                            
                                               </div>
                                             
                                           </div>
                                           <div class="invest-ov gy-2 pb-1 pt-1">
                                              <div class="subtitle mb-0 pb-0">PIC contact</div>
                                              <div class="invest-ov-details">
                                                  
                                                      <div class="amount">${e.data.no_telepon}<a href="https://wa.me/${convertphonenumber(e.data.no_telepon)}" class="btn btn-dim btn-success"><i class="icon fa-brands fa-whatsapp"></i></a></div>
                                                 
                                                
                                            
                                               </div>
                                             
                                           </div>
                                           
                                       </div>
                                     `;
                         
                    

                           $('#maindetail').html(html);
                           $('#modaldetail').modal('show');
                    
                        
                    },
                    error :function(xhr, status, error) {
                     alert(xhr.responseText);
                    }

                  })
        }

        function showproduk(search='', tabName='', select=1, paramName=null){
           
           
                  $.ajax({
                    url:"<?php echo base_url('showAsset') ?>",
                    global:false,
                    async:true,
                    type:'post',
                    dataType:'json',
                    data: ({
                     search : search,
                     searchByName:paramName
                    }),
                     beforeSend: function () {
                                    
                                   $('#loader_front'+tabName).show()
                                    
                              },
                    success : function(e) {
                        var html ='';
                             $('#loader_front'+tabName).hide()
                             $('#loader_container'+tabName).hide()
                         if (e.data.length!=0){
                          $.each(e.data, function(key, value) {
                                var labelCap='Capacity';
                                var emsp='';
                                if(value.asset_type=='Kendaraan'){
                                    labelCap='Seat Capacity'
                                 
                                }else if(value.asset_type=='Zoom' || value.asset_type=='Ruangan'){
                                    labelCap='Participant Capacity'
                                    
                                }
                             html +=`
                                        <div class="col-md-4 subkonten" id="subkonten">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="row g-gs">
                                                            <div class="col-md-3">
                                                                <div class="image-item ">
                                                                  <img class="image-content" src="<?php echo base_url('').'/assets/images/item/' ?>${value.asset_image}" alt="" srcset="" class="profile-img" style="width: 110px;height: 100px;object-fit: cover;margin: 0 auto;">
                                                                  </div>
                                                                    
                                                            </div>
                                                            <div class="col-md-9" >
                                                         
                                                                    <div class="card-title-group align-start mb-0" style="margin-top: 10px;">
                                                                        <div class="card-title">
                                                                            <h6 class="subtitle">Asset Name</h6>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    <div class="card-amount">
                                                                        <span class="amount" style="font-size:20px">${value.asset_name}
                                                                        </span>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="invest-data ">
                                                                        <div class="invest-data-amount g-2">
                                                                            <div class="invest-data-history">
                                                                                <div class="title">Description</div>
                                                                                <div class="amount">${value.description}</div>
                                                                            </div>
                                                                       
                                                                        </div>
                                                                      
                                                                    </div>   
                                                                    
                                                                     <div class="invest-data mt-1">
                                                                        <div class="invest-data-amount g-2">
                                                                            
                                                                            <div class="invest-data-history">
                                                                                <div class="title">${labelCap}</div>
                                                                                 <div class="amount" style="display:flex; height:17px"><p>  ${value.capacity}</p><i class="icon fa-solid fa-users " style="margin-left:15px"></i></div>
                                                                            </div>
                                                                        
                                                                        </div>  
                                                                        
                                                                    </div>
                                                                    <div class="invest-data mt-0">
                                                              
                                                                            <div class="invest-data-history" style="display:flex; justify-content:right" >
                                                                                
                                                                                <div class="amount" style="">
                                                                                <a class="btn btn-round btn-sm btn-primary" onclick="modalcheck('${value.id_asset}', '${value.id_owner}')">Check Schedule</a>
                                                                                </div>
                                                                            </div>
                                                                
                                                                    </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->

                                  `;
                          });
                        }else{
                            html +=` <div class="col-md-4 subkonten">
                                         <div class="card card-bordered card-full">
                                            <div class="card-inner" style="justify-content:center;display: flex;">
                                                <span>There's no Available Asset</span>
                                               
                                            </div>
                                        </div><!-- .card -->
                                    </div>`
                        }

                           $('#kontenproduk'+tabName).html(html);
                         
                           produk_pagination_available(select, tabName);
                            

                            
                        
                    },
                    error :function(xhr, status, error) {
                     alert(xhr.responseText);
                    }

                  })

        }

        function produk_pagination_available(pageShow, tabName) {
                $(function () {
                            var numberOfitem=$('.kontenproduk'+tabName+' .subkonten ').length;
                            var limitPerpage=9;
                            var totalPages=Math.ceil(numberOfitem/limitPerpage);
                            var paginationSize=5;
                            var currentPage;

                            function showPage_available(whichPage) {
                                if(whichPage<1 || whichPage>totalPages) return false;

                                currentPage = whichPage;

                                $('.kontenproduk'+tabName+' .subkonten ').hide().slice((currentPage-1)*limitPerpage, currentPage*limitPerpage).show();
                                $('.pagination-wrap'+tabName+' li').slice(1,-1).remove();

                                // var halaman=1;
                                // var cek=getPageList(totalPages, currentPage, paginationSize);
                                // console.log(cek);
                                getPageList(totalPages, currentPage, paginationSize).forEach(item => {

                                  $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                                  .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next");

                                });

                                 $(".prev").toggleClass("disable", currentPage === 1);
                                $(".next").toggleClass("disable", currentPage === totalPages);
                                return true;
                            }
                           //console.log(numberOfitem); 

                            $(".pagination-wrap"+tabName).append(
                                 $("<ul>").append(
                                    $("<li>").addClass("page-item").addClass("prev").append($("<a>").addClass('page-link').attr({href: "javascript:void(0)"}).append($("<i>").addClass("icon fa-solid fa-circle-arrow-left"))),
                                 $("<li>").addClass("page-item").addClass("next").append($("<a>").addClass('page-link').attr({href: "javascript:void(0)"}).append($("<i>").addClass("icon fa-solid fa-circle-arrow-right")))
                                    ).addClass("pagination justify-content-center"));

                            $(".kontenproduk"+tabName).show();
                            if(pageShow==''){
                                pageShow=1;
                            }
                            showPage_available(pageShow); 
                            $(document).on("click", ".pagination-wrap"+tabName+" li.current-page:not(.active)", function(){
                               // clearInterval(autorelod)
                                return showPage_available(+$(this).text());
                              });
                            
                              $(".next").on("click", function(){
                                
                                return showPage_available(currentPage + 1);
                              });
                            
                              $(".prev").on("click", function(){
                               
                                return showPage_available(currentPage - 1);
                              });      
                        });
            }

        function produk_pagination_loan(pageShow,tabName) {
                $(function () {
                            var numberOfitem=$('.kontenproduk_loan'+tabName+' .subkonten_loan ').length;
                            var limitPerpage=9;
                            var totalPages=Math.ceil(numberOfitem/limitPerpage);
                            var paginationSize=5;
                            var currentPage;

                            function showPage_loan(whichPage) {
                                if(whichPage<1 || whichPage>totalPages) return false;

                                currentPage = whichPage;

                                $('.kontenproduk_loan'+tabName+' .subkonten_loan').hide().slice((currentPage-1)*limitPerpage, currentPage*limitPerpage).show();
                                $('.pagination-wrap_loan'+tabName+' li').slice(1,-1).remove();

                                // var halaman=1;
                                // var cek=getPageList(totalPages, currentPage, paginationSize);
                                // console.log(cek);
                                getPageList(totalPages, currentPage, paginationSize).forEach(item => {

                                  $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                                  .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next_loan");

                                });

                                 $(".prev_loan").toggleClass("disable", currentPage === 1);
                                $(".next_loan").toggleClass("disable", currentPage === totalPages);
                                return true;
                            }
                           //console.log(numberOfitem); 

                            $(".pagination-wrap_loan"+tabName).append(
                                 $("<ul>").append(
                                    $("<li>").addClass("page-item").addClass("prev_loan").append($("<a>").addClass('page-link').attr({href: "javascript:void(0)"}).append($("<i>").addClass("icon fa-solid fa-circle-arrow-left"))),
                                    $("<li>").addClass("page-item").addClass("next_loan").append($("<a>").addClass('page-link').attr({href: "javascript:void(0)"}).append($("<i>").addClass("icon fa-solid fa-circle-arrow-right")))
                                ).addClass("pagination justify-content-center"));

                            $(".kontenproduk_loan"+tabName).show();
                             if(pageShow==''){
                                pageShow=1;
                            }
                            showPage_loan(pageShow); 

                            $(document).on("click", ".pagination-wrap_loan"+tabName+" li.current-page:not(.active)", function(){
                                return showPage_loan(+$(this).text());
                              });
                            
                              $(".next_loan").on("click", function(){
                                return showPage_loan(currentPage + 1);
                              });
                            
                              $(".prev_loan").on("click", function(){
                                return showPage_loan(currentPage - 1);
                              });      
                        });
            }

        function getPageList(totalPages, page, maxLength){
                  function range(start, end){
                    return Array.from(Array(end - start + 1), (_, i) => i + start);
                  }
                
                  var sideWidth = maxLength < 9 ? 1 : 2;
                  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                  var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                  //console.log(sideWidth);
                
                  if(totalPages <= maxLength){
                    return range(1, totalPages);
                  }
                
                  if(page <= maxLength - sideWidth - 1 - rightWidth){
                    return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                  }
                
                  if(page >= totalPages - sideWidth - 1 - rightWidth){
                    return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
                  }
                
                  return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
                }

        function formatDate(date) {
              var day = date.getDate().toString().padStart(2, '0');
              var month = (date.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based, so add 1
              var year = date.getFullYear();
              var hours = date.getHours().toString().padStart(2, '0');
              var minutes = date.getMinutes().toString().padStart(2, '0');
              var seconds = date.getSeconds().toString().padStart(2, '0');

               return `${day}/${month}/${year}  ${hours}:${minutes}`;
            }

        function modalcheck(id, owner){
            var html = `
                        <form id="frmcheck">
                              <div class="row g-0">

                                <div class="form-group">
                                       
                                        
                                        <label class="form-label" for="flatpickr-range">Loan Date</label>
                                    
                                            <input type="hidden" name="asset_name" value="${id}">
                                        <div class="form-control-wrap">
                                           <div class="form-control-wrap">   
                                                <div class="input-group">        
                                                    <div class="col-lg-5">    
                                                     <input type="text" class="form-control" id="flatpickr-range" name="loan_date_start" value="<?php echo set_value('loan_date') ?>" placeholder="Enter start date loan" onchange="formDate()"> 
                                                     </div> 
                                                         <div class="input-group-prepend">           
                                                         <span class="input-group-text">To</span>        
                                                         </div> 
                                                     <div class="col-lg-6">      
                                                      <input type="text" class="form-control" id="loan_date_end" name="loan_date_end" placeholder="Enter end date loan" readonly style="background-color: #F5F6FA">    
                                                     </div>
                                                </div>
                                           </div>
                                            <div id="loan_date_start-error">

                                            </div>
                                             <div id="loan_date_end-error">

                                            </div>
                                    </div>
                                        
                                </div>
                                

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-lg btn-primary" id="buttonsave" onclick="CheckSchedule('${owner}')">Check</button>
                                        <span class="loader" id="loader" style="display: none;"></span>

                                    </div>
                                </div>
                            </div>
                        </form>
                     `
                     $('#maincheck').html(html);
                     flatpickr('#flatpickr-range', {
                        // dateFormat: "F j, Y", 
                        // maxDate:'<?php echo date('Y-m-d', strtotime('+1 days', strtotime(date('Y-m-d')))) ?>',
                        minDate:'<?php echo date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 days')) ?>',
                        mode: 'range',
                        static:true,
                        enableTime: true,
                        time_24hr:true,
                        dateFormat: "d M Y H:i",
                        //  plugins: [
                        //     new minMaxTimePlugin({
                        //         table: {
                        //             '<?php echo date('Y-m-d') ?>':minmaxTime,
                        //         }
                        //     })
                        // ]

                    })

                    const waktuSekarang = new Date();

                    // Mendapatkan jam dari waktu saat ini
                    const jamSekarang = waktuSekarang.getHours();
                    if (jamSekarang >= 8 && jamSekarang <= 15) {
                         $("#modalcheck").modal('show');
                    } else {
                        Swal.fire({
                          icon: "error",
                          title: "Oops...",
                          text: "Request Peminjaman dapat dilakukan dari jam 08.00 - 16.00 WIB",
                         
                        });
                    }
        }

    function CheckSchedule(owner){
       var html='';
       var option='';
           var driver='';
           var destination=''
        var form_data = new FormData($('#frmcheck')[0]);
               $.ajax({
                 url:"<?php echo base_url('checkSchedule') ?>",
                 global: false,
                async: true,
                type: 'post',
                processData: false,
                contentType: false,
                dataType: 'json',
                enctype: "multipart/form-data",
                data: form_data,
                beforeSend: function () {
                    $('#buttonsave').hide()
                    $('#loader').show()
                  },
                 success : function(e) {
                   if(e.status == 'ok;') 
                   {  if (e.status_check!='unavailable'){
                        $('#buttonsave').show()
                         $('#loader').hide()
                        let timerInterval
                        Swal.fire({
                          title: 'Schedule Available',
                          icon: 'success',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Next'
                        }).then((result) => {
                             if (result.isConfirmed) {
                               $.each(e.data.data_asset, function(key, value) {
                                    if(value.id_asset==e.data.id_asset){
                                        option+=` <option value="${value.id_asset}">${value.asset_name}</option>`
                                        if(value.asset_type=='Kendaraan'){
                                            var disabled = '';
                                            var nb ='';
                                            if (!e.driver){
                                                disabled='disabled';
                                                nb ='<span class="badge badge-dim bg-warning" style="margin-left:15px">Driver sudah di booking di schedule yang anda pilih</span>'
                                            }
                                            driver +=`<div class="col-lg-6">
                                                <div class="form-group">
                                                  
                                                    <div class="custom-control custom-checkbox">
                                                         <input type="checkbox" class="custom-control-input" id="driver" name="driver" value="1" ${disabled}>    
                                                         <label class="custom-control-label" for="driver">Driver</label>
                                                         ${nb}
                                                    </div>
                                                    <div id="driver-error">

                                                    </div>
                                                </div>
                                            </div>`
                                            destination+=` <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="destination">Destination City</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" value="" name="destination" id="destination" placeholder="Enter destination" >
                                                    </div>
                                                    <div id="destination-error">

                                                    </div>
                                                </div>
                                            </div>`
                                        }
                                    }
                                });

                               html +=`
                                        <form id="frmAdd">
                                          <div class="row g-4"  >
                                         
                                             <input type="hidden" name="id_asset" value="${e.data.id_asset}">
                                             <input type="hidden" name="owner" value="${owner}">
                                             
                                           
                                            
                                             <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="asset_name_add">Asset Name</label>
                                                    <div class="form-control-wrap">
                                                         <select class="form-select" id="asset_name_add" name="asset_name_add" disabled>
                                                           ${option}
                                                        </select>
                                                    </div>
                                                    <div id="asset_name_add-error">

                                                    </div>
                                                     <div id="id_asset-error">

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="WhatsApp">Loan Date</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" value="${e.data.date_loan}" name="loan_date" id="WhatsApp" placeholder="Enter Amount" style="background-color:#F5F6FA;"  readonly>
                                                    </div>
                                                    <div id="loan_date-error">

                                                    </div>
                
                                                  
                                                </div>
                                            </div>
                                       
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="activity">Activity Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" value="" name="activity" id="activity" placeholder="Enter Activity" >
                                                    </div>
                                                    <div id="activity-error">

                                                    </div>
                                                      <div id="owner-error">

                                                    </div> 
                                                </div>
                                            </div>
                                            ${destination}
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                 <input type="hidden" name="max_req" value="${e.data.max_req}">
                                                    <label class="form-label" for="amount_loan">Amount Loan</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control" value="1" name="amount_loan" id="amount_loan" placeholder="Enter Amount" >
                                                    </div>
                                                    <div id="amount_loan-error">

                                                    </div>
                                                    <div id="max_req-error">

                                                    </div>
                                                </div>
                                            </div>
                                            ${driver}
                                          
                                           

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-lg btn-primary" id="buttonAddLoan" onclick="addLoan()">Save</button>
                                                    <span class="loader" id="loaderAddLoan" style="display: none;"></span>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                               `
                                $('#mainAdd').html(html);
                                $("#modaltambah").modal('hide');
                                 <?php  if (isset(session()->unit_emp)) { ?>
                                $("#modalAdd").modal('show');
                            <?php }else{ ?>

                                $("#modalcheck").modal('hide');
                                Swal.fire({
                     
                                  text: "Hubungi Helpdesk DTI untuk, Lengkapi data unit terlebih dahulu",
                                  icon: "warning",
                                  showCancelButton: false,
                                  confirmButtonColor: "#3085d6",
                                  cancelButtonColor: "#d33",
                                  confirmButtonText: "Ok!"
                                }).then((result) => {
                                  if (result.isConfirmed) {
                                    

                                    $("#modalunit").modal('show');
                                  }
                                });

                               
                             <?php } ?>
                          }
                        })
                    }else{
                         $('#buttonsave').show()
                        $('#loader').hide()
                        Swal.fire({
                          icon: 'error',
                          title: 'Schedule Unavailable',
                        })


                    }
                  } 
                  else{ 
                   // console.log(e.dataname);
                     $('#buttonsave').show()
                         $('#loader').hide()
                      $.each(e.dataname, function(key, value) {
                        document.getElementById(key+"-error").innerHTML ="";
                      });
                    $.each(e.data, function(key, value) {
                     
                      
                     document.getElementById(key+"-error").innerHTML = `<span class="badge badge-dim bg-danger" style="">`+value+`
                                                                        </span>`;
                  });
                       // document.getElementById("signature_m-error").innerHTML ="";
                       
                    $('#buttonsave').show()
                    $('#loader').hide()
                    $("#modaltambah").modal('show');
                 }
              },
              error :function(xhr, status, error) {
               alert(xhr.responseText);
            }

         });
    }


     function formDate() {

       var date= document.getElementById('flatpickr-range').value
      
        let dateArray = date.split(' to ');
      

        if (typeof dateArray[1] !== 'undefined') {
            console.log('Variabel sudah didefinisikan');
            document.getElementById('loan_date_end').value=dateArray[1];
            document.getElementById('flatpickr-range').value=dateArray[0];
        } else {
             console.log('Variabel belum didefinisikan');
            document.getElementById('flatpickr-range').value=dateArray[0];
            document.getElementById('loan_date_end').value='';
        }
       //console.log(dateArray)
    }

    function convertphonenumber(phoneNumber) {
      // Hapus karakter non-digit dari nomor telepon (seperti spasi, tanda "-", atau karakter lainnya)
      phoneNumber = phoneNumber.replace(/\D/g, '');

      // Periksa apakah nomor telepon sudah dimulai dengan '62'. Jika belum, tambahkan '62' di depan nomor.
      if (!phoneNumber.startsWith('62')) {
        phoneNumber = '62' + phoneNumber;
      }

      return phoneNumber;
    }

function addLoan()
    {
        var form_data = new FormData($('#frmAdd')[0]);

       $.ajax({
         url:"<?php echo base_url('addLoan') ?>",
         global:false,
         async:true,
         type:'post',
        processData: false,
         contentType: false,
         dataType:'json',
         enctype: "multipart/form-data",
         data: form_data,
         beforeSend: function () {
                    $('#buttonAddLoan').hide()
                    $('#loaderAddLoan').show()
                  },
         success : function(e) {
           if(e.status == 'ok;') 
           {
            $('#buttonAddLoan').show()
            $('#loaderAddLoan').hide()
             let timerInterval
              Swal.fire({
                icon: 'success',
                title: ' Request has been send',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: () => {
                  timerInterval = setInterval(() => {

                  }, 100)
                },
                willClose: () => {
                  clearInterval(timerInterval)
                }
              }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                  location.reload();
                }
              })
          } 
          else{ 
             $('#buttonAddLoan').show()
            $('#loaderAddLoan').hide()
            var msgeror='';
             $.each(e.dataname, function(key, value) {
                document.getElementById(key+"-error").innerHTML ="";
              });

            $.each(e.data, function(key, value) {
             document.getElementById(key+"-error").innerHTML = `<span class="badge badge-dim bg-danger">`+value+`
                                                                </span>`;
          });
            $('#buttonAddLoan').show()
            $('#loaderAddLoan').hide()
            $("#modalAdd").modal('show');
         }
      },
      error :function(xhr, status, error) {
       alert(xhr.responseText);
    }

 });
}
        
    </script>

<?= $this->endSection() ?>


<?= $this->extend('partials/footer_layout' ) ?>
