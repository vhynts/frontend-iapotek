<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Datatables css -->
<link href="<?= base_url('assets/css/vendor/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/responsive.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedColumns.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedHeader.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/buttons.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/select.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
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
                    <a href="supplier-add" class="btn btn-primary  float-end mb-2 mt-2 disabled"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Supplier</a>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <button type="button" class="btn btn-success rounded-pill float-end m-0"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                        </div> -->

                        <div class="card-body">
                            <!-- <div class="table-responsive"></div> -->
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Telepon</th>

                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <!-- <td><a class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a></td> -->
                                        <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-pencil-square text-primary"></i></a></td>
                                        <td>0001</td>
                                        <td>PT. DEMAK SARANA SEHAT</td>
                                        <td>WIKU 1 RT 06/01</td>
                                        <td>DEMAK</td>
                                        <td>0821219591</td>

                                    </tr>



                                </tbody>
                            </table>

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
<!-- Datatables css -->
<!-- Datatables js -->

<script src="<?= base_url('assets/js/vendor/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/responsive.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/fixedColumns.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.fixedHeader.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.php5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.flash.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.keyTable.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.select.min.js'); ?>"></script>

<!-- Datatable Demo Aapp js -->
<script src="<?= base_url('assets/js/pages/datatable.init.js'); ?>"></script>

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
<?= $this->endSection(); ?>