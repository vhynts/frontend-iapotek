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



            <div class="row">
                <div class="col-sm">
                    <h4 class="page-title mt-3"><?php isset($page_title) ? print $page_title : ''; ?></h4>
                </div>

                <!-- <div class="col-sm">
                    <button type="button" class="btn btn-primary  float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                </div> -->
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
                                <div id="basicwizard">

                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                        <li class="nav-item">
                                            <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="bi bi-file-text fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Data Umum</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="bi bi-gear fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Satuan</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="bi bi-tags fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Harga Jual</span>
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab5" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab6" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li> -->
                                    </ul>

                                    <div class="tab-content b-0 mb-0">
                                        <div class="tab-pane" id="basictab1">
                                            <div class="row ">
                                                <!-- <div class="col-6 border">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="userName">Kode Item</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="userName" name="userName" value="12394">
                                                        </div>
                                                    </div>

                                                </div> -->

                                                <div class="col-sm m-1">
                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Tipe Item</label>
                                                        <div class="col-md-8">
                                                            <div class="mt-2">
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" id="customRadio1" name="customRadio1" class="form-check-input" checked disabled>
                                                                    <label class="form-check-label" for="customRadio1">Barang (INV)</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" id="customRadio2" name="customRadio2" class="form-check-input" disabled>
                                                                    <label class="form-check-label" for="customRadio2">Rakitan (ASM)</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" id="customRadio3" name="customRadio3" class="form-check-input" disabled>
                                                                    <label class="form-check-label" for="customRadio3">Non Inventory (NON-INV)</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" id="customRadio4" name="customRadio4" class="form-check-input" disabled>
                                                                    <label class="form-check-label" for="customRadio4">Jasa (SRV)</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Kode Item</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="userName" name="userName" value="12394">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label" for="userName">Nama Item</label>
                                                        <div class="col-md">
                                                            <input type="text" class="form-control" id="userName" name="userName" value="12394">
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-sm m-1">
                                                    <div class="row mb-2 mt-1   ">
                                                        <label class="col-sm-3 col-form-label" for="userName">Jenis</label>
                                                        <div class="col-md">
                                                            <select class="form-control select2" data-toggle="select2">
                                                                <option>-</option>

                                                                <option value="">SONY</option>
                                                                <option value="">RIZMAWAN</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Merek</label>
                                                        <div class="col-md">
                                                            <select class="form-control select2" data-toggle="select2">
                                                                <option>-</option>

                                                                <option value="">SONY</option>
                                                                <option value="">RIZMAWAN</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Rak</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="userName" name="userName" value="12394">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Gudang</label>
                                                        <div class="col-md">
                                                            <select class="form-control select2" data-toggle="select2">
                                                                <option>-</option>

                                                                <option value="">SONY</option>
                                                                <option value="">RIZMAWAN</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm m-1 ">
                                                    <div class="row mt-1">
                                                        <label class="col-sm-3 col-form-label" for="userName">Keterangan</label>
                                                        <div class="col-md">
                                                            <textarea class="form-control mt-2" id="example-textarea" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Status Jual</label>
                                                        <div class="col-md-8 mt-2">
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="customRadio5" name="customRadio5" class="form-check-input" checked>
                                                                <label class="form-check-label" for="customRadio5">Masih dijual</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="customRadio6" name="customRadio6" class="form-check-input">
                                                                <label class="form-check-label" for="customRadio5">Tidak dijual</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <label class="col-sm-3 col-form-label" for="userName">Pilihan</label>
                                                        <div class="col-md-6 mt-2">

                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">Serial</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">Konsinyasi</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <ul class="list-inline wizard mb-0">
                                                <li class="next list-inline-item float-end">
                                                    <a href="javascript:void(0);" class="btn btn-info">Satuan<i class="ri-arrow-right-line ms-1"></i></a>

                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="basictab2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="email">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <ul class="pager wizard mb-0 list-inline">
                                                <li class="previous list-inline-item">
                                                    <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Data Umum</button>
                                                </li>
                                                <li class="next list-inline-item float-end">
                                                    <button type="button" class="btn btn-info">Harga Jual <i class="ri-arrow-right-line ms-1"></i></button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" id="basictab3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="ri-check-double-line"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <ul class="pager wizard mb-0 list-inline mt-1">
                                                <li class="previous list-inline-item">
                                                    <button type="button" class="btn btn-light"><i class="ri-arrow-left-line me-1"></i> Back to Profile</button>
                                                </li>
                                                <li class="next list-inline-item float-end">
                                                    <button type="button" class="btn btn-info">Submit</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div> <!-- tab-content -->
                                </div> <!-- end #basicwizard-->
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