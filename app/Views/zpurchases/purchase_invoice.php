<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Select2 css -->
<link href="<?= base_url('assets/css/vendor/select2.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Daterangepicker css -->
<link href="<?= base_url('assets/css/vendor/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Touchspin css -->
<link href="<?= base_url('assets/css/vendor/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Datepicker css -->
<link href="<?= base_url('assets/css/vendor/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Timepicker css -->
<link href="<?= base_url('assets/css/vendor/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Flatpickr Timepicker css -->
<link href="<?= base_url('assets/css/vendor/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />

<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <?php
            #$sub_title = "Master";
            #$page_title = "Daftar Item";
            #include 'partials/page-title.php'; 
            ?>

            <div class="row">
                <div class="col-sm">
                    <h4 class="page-title mt-3 mb-3"><?php isset($page_title) ? print $page_title : ''; ?></h4>
                </div>

                <!-- <div class="col-12">
                    <button type="button" class="btn btn-success rounded-pill float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                </div> -->

            </div>



            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body px">

                            <!-- <div class="container"> -->
                            <div class="row">
                                <div class="col-sm m-1 rounded-3 border">
                                    <div class="mt-1 mb-1">
                                        <label for="no-trans" class="form-label">No Transaksi</label>
                                        <input type="text" class="form-control" id="no-trans" disabled="" value="6204/BL/1023">
                                    </div>


                                    <div class="mb-1 position-relative" id="datepicker4">
                                        <label class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label">Supplier</label>
                                        <select class="form-control select2" data-toggle="select2">
                                            <option>-</option>

                                            <option value="">SONY</option>
                                            <option value="">RIZMAWAN</option>


                                        </select>
                                    </div>



                                </div>
                                <div class="col-sm m-1 rounded-3 border">
                                    <div class="mb-1 mt-1">

                                        <label for="pesanan" class="form-label">Pesanan</label>
                                        <div class="input-group mb-1">

                                            <input type="text" class="form-control" id="pesanan" disabled="" value="">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"><i class="bi bi-search"></i></button>

                                            <!-- MODALLL -->
                                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="modal1">Large modal</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label">Lokasi</label>
                                            <select class="form-control select2" data-toggle="select2">
                                                <option>-</option>

                                                <option value="">SONY</option>
                                                <option value="">RIZMAWAN</option>

                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="mb-1 col-sm-6">
                                                <label class="form-label">Jatuh Tempo</label>
                                                <input type="number" class="form-control" id="jt" value="0">
                                            </div>
                                            <div class="mb-1 col-sm-6">
                                                <label class="form-label">Tanggal Jatuh Tempo</label>
                                                <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4" disabled>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                                <div class="col-sm mt-1 mb-1 mx-1 rounded-3 border">
                                    <label for="example-textarea" class="form-label mt-1">Keterangan</label>
                                    <textarea class="form-control mb-2" id="keterangan" rows="4"></textarea>

                                    <div class="row ">
                                        <div class="col-sm mb-1">
                                            <label for="example-disable" class="form-label">User</label>
                                            <input type="text" class="form-control" id="user" disabled="" value="Admin">
                                        </div>
                                        <div class="col-sm mb-1">
                                            <label for="example-disable" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="lokasi" disabled="" value="Demak">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive p-0 mt-3">
                                        <table class=" table table-striped mb-0">
                                            <thead class="table-secondary" style="padding: 10px;">
                                                <tr>
                                                    <th style="font-size: 12px;">NO</th>
                                                    <!-- <th style="font-size: 12px;">ITEM CODE</th> -->
                                                    <th style="font-size: 12px;">ITEM NAME</th>
                                                    <th style="font-size: 12px;">QTY</th>
                                                    <th style="font-size: 12px;">UNIT</th>
                                                    <th style="font-size: 12px;">PRICE</th>
                                                    <th style="font-size: 12px;">DISC (%)</th>
                                                    <th style="font-size: 12px;">SUB TOTAL</th>
                                                    <th style="font-size: 12px;"> </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th scope=" row">#</th>
                                                    <!-- <td>10013164</td> -->
                                                    <td class="col-sm-4">
                                                        <div class="input-group mb-1">

                                                            <input type="text" class="form-control" id="example-disable" value="">
                                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"><i class="bi bi-search"></i></button>

                                                            <!-- MODALLL -->
                                                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                    </td>
                                                    <td class="col-sm-1">

                                                        <input type="number" class="form-control" id="qty" value="11">
                                                    </td>
                                                    <td class="col-sm-2">

                                                        <select class="form-control select2" data-toggle="select2">
                                                            <option>-</option>

                                                            <option value="">BOX</option>
                                                            <option value="">STR</option>
                                                        </select>
                                    </div>
                                    </td>
                                    <td class="col-sm-2">

                                        <input type="number" class="form-control" id="harga" value="0">
                                    </td>
                                    <td class="col-sm-1">

                                        <input type="number" class="form-control" id="disc" value="0">
                                    </td>
                                    <td class="col-sm-2">

                                        <input type="number" class="form-control" id="subtotal" disabled="" value="0">
                                    </td>
                                    <td> <a href="javascript: void(0);" class="fs-18 px-1"> <i class="bi bi-plus-square-fill text-success"></i></a>
                                    </td>
                                    </tr>

                                    <tr>
                                        <th scope=" row">1</th>
                                        <!-- <td>10013164</td> -->
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-trash-fill text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope=" row">1</th>
                                        <!-- <td>10013164</td> -->
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-trash-fill text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope=" row">1</th>
                                        <!-- <td>10013164</td> -->
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-trash-fill text-danger"></i></a></td>
                                    </tr>


                                    </tbody>
                                    </table>


                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-12">
                                <div class="row mt-4 ">
                                    <div class="col-sm-8 mb-1 ">
                                    </div>
                                    <div class="col-sm-1 mb-1">
                                        <label for="example-disable" class="form-label ">Total Qty</label>
                                        <input type="text" class="form-control" id="total-qty" disabled="" value="102">
                                    </div>
                                    <div class="col-sm-3 mb-1">
                                        <label for="example-disable" class="form-label">Sub Total</label>
                                        <input type="text" class="form-control" id="subtotal1" disabled="" value="100.000">
                                    </div>

                                </div>

                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-8 mb-1 ">
                                    </div>
                                    <div class="col-sm-1 mb-1">
                                        <label for="example-disable" class="form-label">Potongan</label>
                                        <input type="number" class="form-control" id="potongan" value="0">
                                    </div>
                                    <div class="col-sm-3 mb-1">
                                        <label for="example-disable" class="form-label">Total Potongan</label>
                                        <input type="text" class="form-control" id="total-potongan" disabled="" value="0">
                                    </div>


                                </div>

                            </div>
                            <div class="col-12">
                                <div class="row  ">
                                    <div class="col-sm-8 mb-1 ">
                                    </div>
                                    <div class="col-sm-1 mb-1">
                                        <label for="example-disable" class="form-label">Pajak</label>
                                        <input type="number" class="form-control" id="pajak" value="11">
                                    </div>
                                    <div class="col-sm-3 mb-1">
                                        <label for="example-disable" class="form-label">Total Pajak</label>
                                        <input type="text" class="form-control" id="total-pajak" disabled="" value="50.000">
                                    </div>


                                </div>

                            </div>
                            <div class="col-12  ">
                                <div class="row ">
                                    <div class="col-sm-8 mb-1 ">
                                    </div>
                                    <div class="col-sm-4 mb-3 ">
                                        <label for="example-disable" class="form-label">Total Akhir</label>
                                        <input type="text" class="form-control fw-bold fs-3" id="total-akhir" disabled="" value="150.000">
                                    </div>


                                </div>

                            </div>
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-sm-8 mb-1 ">
                                    </div>
                                    <div class="col-sm-2 mb-1  d-grid">
                                        <button type="button" class="btn btn-success btn-md">
                                            <i class="mdi mdi-floppy"></i> Simpan</button>
                                    </div>
                                    <div class="col-sm-2 mb-1 d-grid">
                                        <button type="button" class="btn btn-danger btn-md">
                                            <i class="bi bi-trash-fill"></i> Batal</button>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->

        <!-- <div class="row">
                <div class="col-12">
                    <div class="card">

                       
                        <div class="table-responsive p-0">
                            <table class=" table mb-0">
                                <thead class="table-secondary" style="padding: 10px;">
                                    <tr>
                                        <th style="font-size: 12px;">NO</th>
                                        <th style="font-size: 12px;">ITEM CODE</th>
                                        <th style="font-size: 12px;">ITEM NAME</th>
                                        <th style="font-size: 12px;">QTY</th>
                                        <th style="font-size: 12px;">UNIT</th>
                                        <th style="font-size: 12px;">PRICE</th>
                                        <th style="font-size: 12px;">DISC (%)</th>
                                        <th style="font-size: 12px;">SUB TOTAL</th>
                                        <th style="font-size: 12px;"> </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope=" row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>10013164</td>
                                        <td>TIDIFAR 400 MG BOX 10 STR @ 10 TAB</td>
                                        <td>5</td>
                                        <td>BOX</td>
                                        <td>98.000</td>
                                        <td>0</td>
                                        <td>490.000</td>
                                        <td><a class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>


                           
                        </div>
                    </div>
                </div>
            </div> -->





    </div>
    <!-- container -->

</div>
<!-- content -->

<?php #include 'partials/footer.php';
?>
<?= $this->include('partials/footer') ?>


</div>





<?= $this->endSection(); ?>


<?= $this->section('addjs'); ?>

<!--  Select2 Plugin Js -->
<script src="<?= base_url('assets/js/vendor/select2.min.js'); ?>"></script>

<!-- Daterangepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/daterangepicker.js'); ?>"></script>

<!-- Bootstrap Datepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-datepicker.min.js'); ?>"></script>

<!-- Bootstrap Timepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-timepicker.min.js'); ?>"></script>

<!-- Input Mask Plugin js -->
<script src="<?= base_url('assets/js/vendor/jquery.mask.min.js'); ?>"></script>

<!-- Bootstrap Touchspin Plugin js -->
<script src="<?= base_url('assets/js/vendor/jquery.bootstrap-touchspin.min.js'); ?>"></script>

<!-- Bootstrap Maxlength Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-maxlength.min.js'); ?>"></script>

<!-- Typehead Plugin js -->
<script src="<?= base_url('assets/js/vendor/handlebars.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/typeahead.bundle.min.js'); ?>"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/flatpickr.min.js'); ?>"></script>

<!-- Typehead Demo js -->
<script src="<?= base_url('assets/js/pages/typehead.init.js'); ?>"></script>

<!-- Timepicker Demo js -->
<script src="<?= base_url('assets/js/pages/timepicker.init.js'); ?>"></script>

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>


<!-- <script>
    const exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        const modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = `New message to ${recipient}`
        modalBodyInput.value = recipient
    })
</script> -->

<?= $this->endSection(); ?>