<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="light" data-menu-color="light">

<head>
    <?php
    #$title = "Apotek Sari Husada";
    #include 'partials/title-meta.php'; 
    ?>

    <?= $this->include('partials/title-meta') ?>



    <?= $this->renderSection('addcss'); ?>


    <?php #include 'partials/head-css.php'; 
    ?>
    <?= $this->include('partials/head-css') ?>
</head>

<body style="
    width:210mm;">
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <?= $this->renderSection('content'); ?>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php #include 'partials/right-sidebar.php'; 
    ?>
    <?= $this->include('partials/right-sidebar') ?>

    <?php #include 'partials/footer-scripts.php'; 
    ?>
    <?= $this->include('partials/footer-scripts') ?>


    <?= $this->renderSection('addjs'); ?>






</body>

</html>