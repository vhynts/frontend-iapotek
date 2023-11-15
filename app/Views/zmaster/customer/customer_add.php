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


                                    <div class="col-sm m-1 border rounded-3">
                                        <div class="row mb-2 mt-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Kode</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="userName" name="userName" value="" disabled>
                                            </div>

                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Nama</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Alamat</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Kota</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Provinsi</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Negara</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="INDONESIA">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Kode Pos</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Fax</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm m-1 border rounded-3">
                                        <div class="row mb-2 mt-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Telepon</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Email</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Kontak</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">No. Rek</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Rek. A/N</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Bank</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">NPWP</label>
                                            <div class="col-md">
                                                <input type="text" class="form-control" id="userName" name="userName" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Keterangan</label>
                                            <div class="col-md">
                                                <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-sm m-1 border rounded-3">
                                        <div class="row mb-2 mt-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Limit Piutang</label>
                                            <div class="col-md">
                                                <input type="number" id="limit1" class="form-control" name="userName" value="">

                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Limit Hari Piutang</label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" id="userName" name="userName" value="">
                                                <p class="text-muted float-end"><small>0 = Tanpa Limit</small></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2 mt-1   ">
                                            <label class="col-sm-3 col-form-label" for="userName">Grup Pelanggan</label>
                                            <div class="col-md">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>-</option>

                                                    <option value="">SONY</option>
                                                    <option value="">RIZMAWAN</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Tipe Potongan</label>
                                            <div class="col-md">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>-</option>

                                                    <option value="">SONY</option>
                                                    <option value="">RIZMAWAN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2 mt-1   ">
                                            <label class="col-sm-3 col-form-label" for="userName">Wilayah</label>
                                            <div class="col-md">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>-</option>

                                                    <option value="">SONY</option>
                                                    <option value="">RIZMAWAN</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-form-label" for="userName">Sub Wilayah</label>
                                            <div class="col-md">
                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>-</option>

                                                    <option value="">SONY</option>
                                                    <option value="">RIZMAWAN</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm">
                                            <a href="customer-add" class="btn btn-success  float-end mb-2 mt-2"><i class="bi bi-send"></i> &nbsp; Simpan</a>
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