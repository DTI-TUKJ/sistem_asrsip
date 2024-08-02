<div class="container-fluid" id="subBodyContent">
    <div class="page-wrapper-img-inner">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box" style="height: 90px;">

                    <h4 class="page-title mb-2"><i class="mdi mdi-file-cabinet"
                            style="margin-right: 5px;"></i><?php echo $titlePage ?></h4>
                    <div class="">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Darsy</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);"><?php echo $titlePage ?></a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body ">
                    <div class="button-items mb-2">

                        <button type="button" class="btn btn-dark btn-round  waves-effect waves-light"
                            data-toggle="modal" data-animation="bounce" data-target="#modalTambahCat"><i
                                class="fa-solid fa-plus" style="margin-right: 10px;"></i>Insert Data Category</button>

                    </div>
                    <div class="table-rep-plugin ">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="dataDoc" class="table table-bordered nowrap"
                                style="border-collapse: collapse; border-spacing: 0;width: 100%;border-radius: 10px;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Category Name</th>
                                        <th>Category Type</th>
                                        <th>Main Category</th>
                                        <th>Category Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- container -->

<div class="modal fade bs-example-modal-lg" id="modalTambahCat" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 5px;">
            <div class="modal-header" style="background-color: #e8e8e8;">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Form Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="mainAddCategory">
                <form id="frmAddCat">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label" for="nip">Category Name</label>
                                <div class="form-control-wrap">
                                <input type="text" name="category_name" class="form-control" value="" placeholder="Masukan Nama Kategori">
                                </div>
                                <div id="category_name-error">

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label" for="userType">Category Type</label>
                                <div class="form-control-wrap">
                                    <select class="select2 form-control custom-select" id="catType" name="category_type"  style="width: 100%; height:36px;"
                                        onchange="">
                                        <option value="">-Pilih Type-</option>
                                        <option value="Main Category">Main Category</option>
                                        <option value="Sub Category">Sub Category</option>
                                        
                                    </select>
                                </div>
                                <div id="category_type-error">

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 none-view" id="selectMainCat">
                            <div class="form-group">
                                <label class="form-label" for="userType">Main Category</label>
                                <div class="form-control-wrap">
                                    <select class="select2 form-control custom-select" id="maincatType" name="main_category_type"  style="width: 100%; height:36px;"
                                        onchange="">
                                        <option value="">-Pilih Type-</option>
                                       
                                        
                                    </select>
                                </div>
                                <div id="main_category_type-error">

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <div class="spinner" id="loaderAdmin" style="display:none;margin-right: 10px;"></div>

                <button type="button" onclick="insertDataCat()" id="buttonsaveAdmin"
                    class="btn btn-round btn-success waves-effect waves-light">Save</button>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<footer class="footer text-center text-sm-left">
    <span class="text-muted d-none d-sm-inline-block float-right">Develop with <i class="mdi mdi-heart text-danger"></i>
        by Dukungan Teknologi Informasi</span>
</footer>

<!-- select2 -->

<script type="text/javascript">
function calldata() {
    $("#maincatType").select2({
        dropdownParent: $("#modalTambahCat"),
        ajax: {
            url: "getMainCategory",
            dataType: 'json',
            type: 'POST',
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(data) {
                return {
                    results: data
                };
            }
        },
        minimumInputLength: -1,

    }).on('select2:open', function(e) {
        $('.select2-search__field').attr('placeholder', 'Search Name');
    });

    $('#dataDoc').DataTable({
        scrollX: false,
        "processing": true,
        "serverSide": true,
        "order": false,
        "lengthMenu": [30, 60, 90, 120],
        "pageLength": 30,
        "ajax": {
            url: '<?php echo base_url('callCategoryDoc') ?>',
            type: "POST",
            // success : function(e) {
            //         // $('#loader_front').hide()
            //         // $('#loader_container').hide()
            // },
            // data : function(data){
            //     // data.periode =document.getElementById('bulan').value;
            // }

        },
        "columnDefs": [{
            "targets": '_all',
            "orderable": false,
            // render: $.fn.dataTable.render.html()
        }],
        "language": {
            "processing": "<div class=\"spinner\"  style=\"margin-left: 40%;\"></div>",
        }
    });


}

function reloadtable() {

    $('#example').dataTable().fnDraw(false)

}

$(document).ready(function() {
    calldata();
    $("#catType").select2({
        dropdownParent: $("#modalTambahCat"),
        minimumResultsForSearch: Infinity
    })

    $('#catType').on('change', function() {
       if ($(this).val()!='Main Category'){
             $("#selectMainCat").removeClass("none-view");                       
         }else{
           $("#selectMainCat").addClass("none-view");
        }
                                        
    });


})


function insertDataCat() {
    var form_data = new FormData($('#frmAddCat')[0]);

    $.ajax({
        url: "<?php echo base_url('insertDataCat') ?>",
        global: false,
        async: true,
        type: 'post',
        processData: false,
        contentType: false,
        dataType: 'json',
        enctype: "multipart/form-data",
        data: form_data,
        beforeSend: function() {
            $('#buttonsaveAdmin').hide()

            $('#loaderAdmin').show()
        },
        success: function(e) {
            if (e.status == 'ok;') {
                $('#buttonsaveAdmin').show()

                $('#loaderAdmin').hide()
                let timerInterval

                Swal.fire({
                    icon: 'success',
                    title: ' Data has been Saved',
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

            } else {



                $.each(e.dataname, function(key, value) {

                    document.getElementById(key + "-error").innerHTML = "";
                });
                $.each(e.data, function(key, value) {


                    document.getElementById(key + "-error").innerHTML =
                        `<span class="badge badge-danger" style="">` + value + `
                                        </span>`;
                });



                $('#buttonsaveAdmin').show()

                $('#loaderAdmin').hide()
            }
        },
        error: function(xhr, status, error) {
            $('#buttonsaveMyUnit').show()

            $('#loaderMyUnit').hide()
            alert(xhr.responseText);
        }

    });
}

function updateMyunit() {
    var form_data = new FormData($('#frmMyunit')[0]);

    $.ajax({
        url: "<?php echo base_url('updateMyunit') ?>",
        global: false,
        async: true,
        type: 'post',
        processData: false,
        contentType: false,
        dataType: 'json',
        enctype: "multipart/form-data",
        data: form_data,
        beforeSend: function() {
            $('#buttonsaveMyUnit').hide()

            $('#loaderMyUnit').show()
        },
        success: function(e) {
            if (e.status == 'ok;') {
                $('#buttonsave').show()
                $('#buttonclose').show()
                $('#loaderMyUnit').hide()
                let timerInterval

                Swal.fire({
                    icon: 'success',
                    title: ' Data has been Saved',
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

            } else {



                $.each(e.dataname, function(key, value) {

                    document.getElementById(key + "-error").innerHTML = "";
                });
                $.each(e.data, function(key, value) {


                    document.getElementById(key + "-error").innerHTML =
                        `<span class="badge badge-danger" style="">` + value + `
                                        </span>`;
                });



                $('#buttonsaveMyUnit').show()

                $('#loaderMyUnit').hide()
            }
        },
        error: function(xhr, status, error) {
            $('#buttonsaveMyUnit').show()

            $('#loaderMyUnit').hide()
            alert(xhr.responseText);
        }

    });
}

function deletedata(id) {
    Swal.fire({
        title: 'Yakin Ingin menghapus data ?',
        text: "Data tidak akan bisa kembali",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?php echo base_url('categoryDel') ?>",
                global: false,
                async: true,
                type: 'post',
                dataType: 'json',
                data: ({
                    id: id

                }),
                success: function(e) {
                    if (e.status == 'ok;') {

                        let timerInterval
                        Swal.fire({
                            icon: 'success',
                            title: ' Data has been Deleted',
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
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        }
    })
}
</script>