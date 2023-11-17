<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Select2 css -->
<link href="<?= base_url('assets/css/vendor/select2.min.css'); ?>" rel="stylesheet" type="text/css" />

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



            <div class="row ">
                <div class="col-sm">
                    <h4 class="page-title mt-3"><?php isset($page_title) ? print $page_title : ''; ?></h4>
                </div>

                <div class="col-sm">
                    <a href="customer" type="button" class="btn btn-secondary  float-end mb-2 mt-2"><i class="bi bi-arrow-left"></i> &nbsp; Kembali</a>
                </div>
                <!-- <div class="col-12">
                    <button type="button" class="btn btn-success rounded-pill float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                </div> -->

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="header-title mb-0"> Basic Wizard</h4>
                        </div> -->
                        <div class="card-body">
                            <form>
                                <div class="row">


                                    <div class="col-sm m-1  rounded-3">
                                        <div class="row mb-2 mt-2">
                                            <label class="col-sm-3 col-form-label" for="code">Kode</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="code" name="code" value="" disabled>
                                            </div>

                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="name">Nama</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="name" name="name" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="address">Alamat</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="address" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="city">Kota</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="province">Provinsi</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="province" name="province" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="country">Negara</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="country" name="country" value="INDONESIA">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="postal-code">Kode Pos</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="postal-code" name="postal-code" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="fax">Fax</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="fax" name="fax" value="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm m-1  rounded-3">
                                        <div class="row mb-2 mt-2">
                                            <label class="col-sm-3 col-form-label" for="telp">Telepon</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="telp" name="telp" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="email">Email</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="email" name="email" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="contact">Kontak</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="contact" name="contact" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="account">No. Rek</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="account" name="account" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="account1">Rek. A/N</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="account1" name="account1" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="bank">Bank</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="bank" name="bank" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="npwp">NPWP</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="npwp" name="npwp" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="info">Keterangan</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="info" rows="3"></textarea>
                                            </div>
                                        </div>


                                    </div>




                                </div>
                            </form>

                        </div> <!-- end card-body -->
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
<!-- Bootstrap Wizard Form js -->
<script src="<?= base_url('assets/js/vendor/jquery.bootstrap.wizard.min.js') ?>"></script>

<!-- Wizard Form Demo js -->
<script src="<?= base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js') ?>"></script>


<?= $this->endSection(); ?>