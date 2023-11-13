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
                    <h4 class="page-title mt-3"><?php isset($page_title) ? print $page_title : ''; ?></h4>
                </div>

                <div class="col-sm">
                    <a href="sales-invoice" class="btn btn-primary  float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Penjualan</a>
                </div>
                <!-- <div class="col-12">
                    <button type="button" class="btn btn-success rounded-pill float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                </div> -->

            </div>




            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="Cari No. Transaksi">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- <div class="input-group"> -->
                                    <!-- <div class="input-group-text"><i class="bi bi-calendar-date"></i></div> -->
                                    <!-- <input type="text" id="range-datepicker" class="form-control" placeholder="Tanggal Transaksi"> -->
                                    <div class="mb-1 position-relative" id="datepicker4">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                                            <input type="text" class="form-control" placeholder="Tanggal Awal" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- <div class="input-group"> -->
                                    <!-- <div class="input-group-text"><i class="bi bi-calendar-date"></i></div> -->
                                    <!-- <input type="text" id="range-datepicker" class="form-control" placeholder="Tanggal Transaksi"> -->
                                    <div class="mb-1 position-relative" id="datepicker5">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                                            <input type="text" class="form-control" placeholder="Tanggal Akhir" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker5">
                                        </div>
                                    </div>

                                </div>


                                <div class="col-sm">
                                    <button type="button" class="btn btn-success ">Submit</button>
                                </div>
                            </div>

                            <!-- <div class="col-lg-4">
                                <div class="m-0">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="m-0">

                                <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                            </div> -->

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-centered mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Aksi</th>
                                            <th>No. Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Sales</th>
                                            <th>Keterangan</th>
                                            <th>Total</th>
                                            <th>User Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bei bi-pencil-square text-primary"></i></a></td>
                                            <td>238291/JL/0723</td>
                                            <td>31/10/2023</td>
                                            <td>SONY RIZMAWAN ADI</td>
                                            <td>TAUFIQI</td>
                                            <td>-</td>
                                            <td>490.502</td>
                                            <td>SONY</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->




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

<?= $this->endSection(); ?>