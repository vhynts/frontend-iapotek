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
                                            <label class="col-sm-3 col-form-label" for="kode">Kode</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="kode" name="kode" value="" disabled>
                                            </div>

                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="nama">Nama</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="nama" name="nama" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="alamat">Alamat</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="alamat" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="kota">Kota</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="kota" name="kota" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="provinsi">Provinsi</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="provinsi" name="provinsi" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="negara">Negara</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="negara" name="negara" value="INDONESIA">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="kode-pos">Kode Pos</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="kode-pos" name="kode-pos" value="">
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
                                            <label class="col-sm-3 col-form-label" for="kontak">Kontak</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="kontak" name="kontak" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="rekening">No. Rek</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="rekening" name="rekening" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="rekening2">Rek. A/N</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="rekening2" name="rekening2" value="">
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
                                            <label class="col-sm-3 col-form-label" for="keterangan">Keterangan</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="keterangan" rows="3"></textarea>
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