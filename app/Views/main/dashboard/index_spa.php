<div class="container-fluid" id="subBodyContent">
    <div class="page-wrapper-img-inner">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box" style="height: 90px;">

                    <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard"></i> <?php echo $titlePage ?></h4>
                    <div class="">
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
                                                <i class=" font-24 text-secondary fa-solid fa-file-circle-check"></i>
                                            </div>
                                            <span class="badge badge-info">Total Verification Documents</span>
                                            <h3 class="font-weight-bold" id="totalDoc">
                                                <?php echo $dataSum['jumlah_ver'] ?></h3>
                                            <p class="mb-0 text-muted text-truncate"><span class="text-success"
                                                    id="totalDocToday"><?php echo $dataSum['jumlah_ver_today'] ?></span>
                                                New Document Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="font-24 text-secondary fa-solid fa-hourglass-start"></i>
                                            </div>
                                            <span class="badge badge-success">Processsed Documents</span>
                                            <h3 class="font-weight-bold" id="processeedDoc">
                                                <?php echo $dataSum['jumlah_procesed_ver'] ?></h3>
                                            <p class="mb-0 text-muted text-truncate"><span class="text-success"
                                                    id="processeedDocToday"><?php echo $dataSum['jumlah_procesed_ver_today'] ?></span>
                                                New processed Document today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i
                                                    class="font-24 text-secondary  fa-solid fa-file-circle-exclamation"></i>
                                            </div>
                                            <span class="badge badge-warning">Documents Under Revision</span>
                                            <h3 class="font-weight-bold" id="underRev">
                                                <?php echo $dataSum['jumlah_rev'] ?></h3>
                                            <p class="mb-0 text-muted text-truncate"><span class="text-danger"
                                                    id="underRevToday"><?php echo $dataSum['jumlah_rev_today'] ?></span>
                                                Revision today</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 align-self-center">
                        <img src="<?php echo base_url('assets/images/gambar_gedung.png ') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12 align-self-center pt-3" style="display:flex;justify-content:center">
                            <img src="<?php echo base_url('assets/images/flow_chart.png ') ?>" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                    </div>
                </div>
                <!--end card-body-->

            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0">Document under Verified</h4>
                    <div class="table-responsive dash-social">
                        <table id="dataStatusDoc" class="table table-bordered "
                            style="border-collapse: collapse; border-spacing: 0;width: 100%;border-radius: 10px; text-align: center;">
                            <thead>
                                <tr>
                                    <th>No Doc</th>
                                    <th>Create by</th>
                                    <th>Input Doc</th>
                                    <th>verifikasi cabang</th>
                                    <th>penyerahan fisik</th>
                                    <th>Verifikasi Pusat</th>
                                    <th>pencairan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->


    <?php if (session()->type!='staff') { ?>
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card">


                <div class="card-body">

                    <h4 class="mt-0 header-title">Monthly Disbursement</h4>
                    <p class="text-muted d-inline-block text-truncate w-100 mb-0">Grafik Pencairan document perbulan
                    </p>
                    <div class="button-items mb-2 row">
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input type="text" id="start_year" name="start_year" class="form-control datepicker"
                                    readonly style="background-color:transparent;text-align: center;">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                </div>
                            </div>
                            <!--  <input type="text" class="form-control datepicker" name="tgl_awal" readonly style="background-color:transparent;text-align: center;">
                                                    <i class=" font-24 text-secondary fa-solid fa-file-circle-check" style="margin-left:10px"></i> -->
                        </div>
                    </div>
                    <div id="body_chart">

                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <!-- <div class="col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-body">            
                                        <h4 class="mt-0 header-title">Unit Disbursement</h4>
                                        <p class="text-muted d-inline-block text-truncate w-100 mb-0">Grafik total Pencairan per unit
                                        </p> 
                                         <div class="col-lg-2">
                                                <div class="input-group">
                                                    <input type="text" id="start_year_dunout" name="start_year_dunout" class="form-control" readonly style="background-color:transparent;text-align: center;">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                   
                                            </div> 
                                            <div id="body_chart_donout">
                                                
                                            </div>           
                                        
                                    </div>
                                </div>
                            </div> -->


    </div> <!-- end row -->
    <?php } ?>

</div><!-- container -->

<div class="modal fade bs-example-modal-center" id="modalDetail" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header" style="background-color: #e8e8e8;">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Detail Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="mainDetail">

            </div>
            <div class="modal-footer">
                <div class="spinner" id="loaderEdit" style="display:none;margin-right: 10px;"></div>
                <button type="button" id="buttoncloseEdit" class="btn btn-round btn-secondary waves-effect"
                    data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<footer class="footer text-center text-sm-left">
    <span class="text-muted d-none d-sm-inline-block float-right">Develop with <i class="mdi mdi-heart text-danger"></i>
        by Dukungan Teknologi Informasi</span>
</footer>




<script type="text/javascript">
function calldata() {

    $('#dataStatusDoc').DataTable({
        scrollX: false,
        "processing": true,
        "serverSide": true,
        "order": false,
        "lengthMenu": [30, 60, 90, 120],
        "pageLength": 30,
        "ajax": {
            url: '<?php echo base_url('dataDash') ?>',
            type: "POST",
            // success : function(e) {
            //         $('#loaderbody').hide()

            // },
            // data : function(data){
            //     // data.periode =document.getElementById('bulan').value;
            // }

        },
        "columnDefs": [{
                "targets": '_all',
                "orderable": false,

                // render: $.fn.dataTable.render.html()
            }, {
                "targets": 0,
                "className": "text-left",

            }, {
                "targets": 1,
                "className": "text-left",

            }


        ],
        "language": {
            "processing": " <div class=\"spinner\"  style=\"margin-left: 40%;\"></div>",
        }
    });


}

function calldataSumary() {
    // console.log('hai')
    $.ajax({
        url: "<?php echo base_url('summaryDocs') ?>",
        global: false,
        async: true,
        type: 'post',
        dataType: 'json',
        success: function(e) {
            if (e.status == 'ok;') {
                $('#totalDoc').html(e.data.jumlah_ver)
                $('#processeedDoc').html(e.data.jumlah_procesed_ver)
                $('#underRev').html(e.data.jumlah_rev)
                $('#totalDocToday').html(e.data.jumlah_ver_today)
                $('#processeedDocToday').html(e.data.jumlah_procesed_ver_today)
                $('#underRevToday').html(e.data.jumlah_rev_today)


            }
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }

    });
}

function reloadtable() {
    $('#dataStatusDoc_processing').hide()
    $('#dataStatusDoc').dataTable().fnSettings().oFeatures.bProcessing = false;
    $('#dataStatusDoc').dataTable().fnDraw(false)


}


function mothlyDisbChart() {
    // console.log($('#start_year').val())

    $('#body_chart').html('')
    $.ajax({
        url: "<?php echo base_url('getMothlyDisb') ?>",
        global: false,
        async: true,
        type: 'post',
        dataType: 'json',
        data: ({
            year: $('#start_year').val()
        }),
        success: function(e) {
            if (e.status == 'ok;') {
                // var exam=[55000000,50,70,20,35,20,10,50,30,80,90,40];
                // console.log(exam)
                
                $('#body_chart').html('<canvas id="lineChart" height="350"></canvas>')

                var ctx = $("#lineChart").get(0).getContext("2d");
                var container = $($("#lineChart")).parent();
                var ww = $("#lineChart").attr('width', $(container).width());
                var lineChart = {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "november", "Desember"
                    ],
                    datasets: e.data
                };

                var lineOpts = {
                    responsive: true,
                    // animation: true,
                    // aspectRatio: 2,
                    // maintainAspectRatio: false,
                    legend: {
                        display: false // Set to false to hide legend labels
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var datasetLabel = data.datasets[tooltipItem.datasetIndex].label ||
                                    '';
                                return (
                                    datasetLabel + "  : Rp " +
                                    tooltipItem.yLabel.toString().replace(
                                        /\B(?=(\d{3})+(?!\d))/g, ",")
                                );
                            },
                        },

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
                                max: e.totalDisb == 0 ? 20000000 : Math.ceil((e.totalDisb) /
                                    10000000) * 10000000,
                                min: 0,
                                stepSize: 5000000,
                                callback: function(value, index, values) {
                                    return 'Rp ' + numeral(value).format('0,0');
                                }

                            }
                        }]
                    },

                };
                var generate = new Chart(ctx, {
                    type: 'line',
                    data: lineChart,
                    options: lineOpts
                });

            }
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }

    });



}

function unitDisbChart() {
    $('#body_chart_donout').html('')
    $.ajax({
        url: "<?php echo base_url('getUnitDisb') ?>",
        global: false,
        async: true,
        type: 'post',
        dataType: 'json',
        data: ({
            year: $('#start_year_dunout').val()
        }),
        success: function(e) {
            // console.log(e.dataUnit)
            // console.log(e.data)
            $('#body_chart_donout').html('<canvas id="doughnut" height="300"></canvas>')
            var ctx2 = $("#doughnut").get(0).getContext("2d");
            // pointing parent container to make chart js inherit its width
            var container2 = $($("#doughnut")).parent();
            var ww2 = $("#doughnut").attr('width', $(container2).width());

            var donutChart = {
                labels: e.dataUnit,
                datasets: [{
                    data: e.data,
                    backgroundColor: ["#616161", "#A3674F", "#FC4710", "#FBD60F", "#E7E07B",
                        "#7AEC03", "#E9D3BA", "#11D8A8", "#6DDBCC", "#3A68BA", "#24AD96",
                        "#D1EE11", "#4055ED", "#727EF9"
                    ],
                    hoverBackgroundColor: ["#616161", "#A3674F", "#FC4710", "#FBD60F",
                        "#E7E07B", "#7AEC03", "#E9D3BA", "#11D8A8", "#6DDBCC", "#3A68BA",
                        "#24AD96", "#D1EE11", "#4055ED", "#727EF9"
                    ],
                    hoverBorderColor: "#fff"
                }]
            };

            var generate2 = new Chart(ctx2, {
                type: 'doughnut',
                data: donutChart
            });
            $(window).resize(generate2);
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }

    });


}

$(document).ready(function() {

    calldata();

    var activeYear = '<?php echo date('Y') ?>'
    var session = '<?php echo session()->type ?>'
    $(".datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
    }).datepicker("setDate", new Date());
    $("#start_year_dunout").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
    }).datepicker("setDate", new Date());
    
    if (session == 'admin keuangan'){
            mothlyDisbChart();
    }
    // unitDisbChart()
    $(".datepicker").on("change", function() {
        // console.log('mantap')
        
        mothlyDisbChart();


    })
    var interval = setInterval(function() {
        calldataSumary()
        reloadtable()
        // chartLine()

    }, 3500)

    $('.menu-clear').on('click', function() {

        clearInterval(interval)
    })



})

function getDetail(id) {
    var html = ''
    $.ajax({
        url: "<?php echo base_url('detailDocs') ?>",
        global: false,
        async: true,
        type: 'post',
        dataType: 'json',
        data: ({
            id_doc: id,

        }),
        success: function(e) {
            if (e.data.doc_net_amount != null) {
                var nominal = formatAsIndonesiaCurrency(e.data.doc_net_amount)
            } else {
                var nominal = `<span class="badge badge-warning badge-lg">Unsubmitted </span>`
            }
            html += `<div class="col-12">
                                        <div class="subtitle-detail mb-0 pb-0"><strong>No doc</strong></div>
                                    
                                       
                                         <div class="data-detail">${e.data.no_doc} </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <div class="subtitle-detail mb-0 pb-0"><strong>Created by</strong></div>
                                    
                                       
                                         <div class="data-detail">${e.data.name_emp} </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <div class="subtitle-detail mb-0 pb-0"><strong>Unit</strong></div>
                                    
                                       
                                         <div class="data-detail">${e.data.unit_emp} </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <div class="subtitle-detail mb-0 pb-0"><strong>Description</strong></div>
                                    
                                       
                                         <div class="data-detail">${e.data.desc_doc} </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <div class="subtitle-detail mb-0 pb-0"><strong>Nominal</strong></div>

                                         <div class="data-detail">${nominal}</div>
                                        
                                    </div>`;

            $('#mainDetail').html(html);
            $('#modalDetail').modal('show');


        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }

    })
}
</script>