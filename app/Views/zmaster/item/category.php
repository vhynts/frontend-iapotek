<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Datatables css -->
<link href="<?= base_url('assets/css/vendor/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/responsive.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedColumns.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
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

                    <button type="button" class="btn btn-primary float-end mb-2 mt-2" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-plus-circle"></i> Tambah Jenis</button>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <button type="button" class="btn btn-success rounded-pill float-end m-0"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                        </div> -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-item" class="table table-striped dt-responsive nowrap w-100">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Aksi</th>
                                            <th>Jenis</th>
                                            <th>Keterangan</th>

                                        </tr>
                                    </thead>


                                    <tbody>

                                        <tr>
                                            <!-- <td><a class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a></td> -->
                                            <td> <a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-pencil-square text-primary"></i></a></td>
                                            <td>A</td>
                                            <td>A</td>

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

<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Jenis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal needs-validation" method="post" action="#" novalidate>
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis</label>
                                <input type="text" name="udepan" id="udepan" class="form-control" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Jenis harus diisi.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="ublkg" id="ublkg" class="form-control" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Keterangan harus diisi.
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-block-default btn-success" name="submit" value="Submit">
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->endSection(); ?>

<?= $this->section('addjs'); ?>
<!-- Datatables css -->
<!-- Datatables js -->

<script src="<?= base_url('assets/js/vendor/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/responsive.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/fixedColumns.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.php5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.flash.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.keyTable.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.select.min.js'); ?>"></script>



<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
<?= $this->endSection(); ?>