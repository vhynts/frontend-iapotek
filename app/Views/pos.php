<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="light" data-menu-color="light">

<head>
    <?php
    $title = "Apotek Sari Husada";
    include 'partials/title-meta.php'; ?>

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/css/vendor/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-jvectormap-1.2.2.css">

    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <!-- <div class="wrapper" style="position:fixed"> -->
    <div class="wrapper">

        <?php #include 'partials/topbar-pos.php';
        ?>
        <?php #include 'partials/topbar-pos2.php';
        ?>
        <?= $this->include('partials/topbar-pos2') ?>


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <!-- <div class="content-page"> -->
        <div class="content">
            <div class="card m-0">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col border">

                            <div class="m-1">
                                <label class="form-label">CUSTOMER</label>
                                <div class="input-group">
                                    <input type="text" id="customer" class="form-control" placeholder="REGULAR">
                                    <button class="btn btn-success" type="button"><i class="bi bi-search"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class="col border">
                            <div class="m-1">
                                <label class="form-label">SALES</label>
                                <div class="input-group">
                                    <input type="text" id="sales" class="form-control" placeholder="Internal">
                                    <button class="btn btn-success" type="button"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 border p-2 bg-light">
                            <h1 class="text-end" style="font-size: 50px;">Rp. 2.500.000 ,-</h>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4 border">
                            <div class="m-1">
                                <label class="form-label" style="font-size:12px;">ITEM COCDE</label>
                                <div class="input-group">
                                    <input type="text" id="code" class="form-control border-0" placeholder="Enter ITEM CODE">
                                    <button class="btn btn-success" type="button"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm border">
                            <div class="m-1">
                                <label for="qty" class="form-label" style="font-size:12px;">QTY</label>
                                <input class="form-control border-0" id="qty" type="number" name="number" value=0>
                            </div>
                        </div>
                        <div class="col border">
                            <div class="m-1">
                                <label for="example-select" class="form-label" style="font-size:12px;">UNIT</label>
                                <select class="form-select border-0" id="unit">
                                    <option>BOX</option>
                                    <option>STR</option>
                                    <option>TAB</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm border">
                            <div class="m-1">
                                <label for="example-number" class="form-label" style="font-size:12px;">PRICE</label>
                                <input class="form-control border-0" id="price" type="number" name="number" value=0>
                            </div>
                        </div>
                        <div class="col-sm border">
                            <div class="m-1">
                                <label for="simpleinput" class="form-label" style="font-size:12px;">DISC (%)</label>
                                <input type="number" id="disc" class="form-control border-0" value=0>
                            </div>
                        </div>
                        <div class="col-sm border">
                            <div class="m-1">
                                <label for="example-number" class="form-label" style="font-size:12px;">SUB TOTAL</label>
                                <input class="form-control border-0" id="subtotal" type="number" name="number" value=0>
                            </div>
                        </div>
                    </div>


                    <div class="row border">
                        <!-- <div class="table-responsive" style="max-height: 300px; height: 300px;"> -->
                        <div class="table-responsive p-0" style="max-height: 400px; height: 400px;">
                            <table class="table mb-0">
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


                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 border">
                            <label class="form-label" style="font-size:12px;"> INFO</label>
                            <input class="form-control mb-1 border-0" id="info" placeholder="Enter Info"></input>
                        </div>
                        <div class="col ">
                            <div class="row ">
                                <div class="col p-0 border">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-secondary btn-sm btn-block"><i class="bi bi-trash-fill"></i> Clear</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row border">
                                <div class="col p-0 ">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-warning btn-sm-2 btn-block p-2"><i class="bi bi-search"></i> Search Transaction</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border">
                            <label for="simpleinput" class="form-label" style="font-size:12px;">DISC (%)</label>
                            <input type="number" id="disc2" class="form-control border-0" value=0>
                        </div>

                        <div class="col border">
                            2 of 2
                        </div>
                        <div class="col border">
                            2 of 2
                        </div>
                        <div class="col border">
                            2 of 2
                        </div>
                        <div class="col-sm-4 p-0 border">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-success btn-lg btn-block p-3">
                                    <i class="mdi mdi-floppy"></i> Save Transaction</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- </div> -->







        <!-- Start Content-->
        <!-- <div class="container-fluid">
                <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Input Types</h4>

                                    


                                </div>
                            </div>
                        </div>
                </div>
            </div> -->



        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


        <!-- END wrapper -->




        <?php #include 'partials/right-sidebar.php'; 
        ?>

        <?php #include 'partials/footer-scripts.php';
        ?>




        <!-- App js -->
        <!-- <script src="assets/js/app.min.js"></script> -->

        <script type="text/javascript">
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();

                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 1);
        </script>


        <script type='text/javascript'>
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.getElementById('date').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
            // document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        </script>



</body>

</html>