<!-- ========== Horizontal Menu Start ========== -->
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="index.php" id="topnav-dashboards" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-dashboard-3-line"></i>Dashboards
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-pages-line"></i>Master Data <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-box2-heart"></i>
                                    &nbsp; Item <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="item" class="dropdown-item">Daftar Item</a>
                                    <a href="#" class="dropdown-item disabled">Kartu Stok</a>
                                    <a href="item-unit" class="dropdown-item">Satuan</a>
                                    <a href="item-cat" class="dropdown-item">Jenis</a>
                                    <!-- <a href="daftar-item" class="dropdown-item">Satuan</a>
                                    <a href="daftar-item" class="dropdown-item">Jenis</a> -->
                                    <a href="item-detail"></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-people"></i>
                                    &nbsp; Pelanggan <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="customer" class="dropdown-item">Daftar Pelanggan</a>
                                    <a href="customer-group" class="dropdown-item">Grup Pelanggan</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="supplier" class="dropdown-item"><i class="bi bi-shop-window"></i> &nbsp; Supplier</a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-building-gear"></i>
                                    &nbsp; Lain-lain <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="dept" class="dropdown-item">Dept/Gudang</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-archive"></i> &nbsp; Pembelian <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">



                            <a href="purchase-list" class="dropdown-item"><i class="bi bi-basket"></i> &nbsp; Faktur Pembelian</a>
                            <a href="purchase-return" class="dropdown-item"><i class="bi bi-arrow-left-square"></i> &nbsp; Retur Pembelian</a>
                            <a href="#" class="dropdown-item disabled"><i class="bi bi-cash-coin"></i> &nbsp; Daftar Pembayaran</a>
                            <a href="purchase-invoice"></a>
                            <!-- <a href="daftar-item" class="dropdown-item">Satuan</a>
                                    <a href="daftar-item" class="dropdown-item">Jenis</a> -->


                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-cart3"></i> &nbsp; Penjualan <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">


                            <a href="sales-order" class="dropdown-item"><i class="bi bi-cart"></i> &nbsp; Pesanan Penjualan</a>
                            <a href="sales-list" class="dropdown-item"><i class="bi bi-cart-plus"></i> &nbsp; Faktur Penjualan</a>
                            <a href="sales-return" class="dropdown-item"><i class="bi bi-arrow-left-square"></i> &nbsp; Retur Penjualan</a>
                            <a href="#" class="dropdown-item disabled"><i class="bi bi-cash-coin"></i> &nbsp; Daftar Pembayaran</a>
                            <a href="sales-invoice"></a>
                            <!-- <a href="daftar-item" class="dropdown-item">Satuan</a>
                                    <a href="daftar-item" class="dropdown-item">Jenis</a> -->


                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-file-text"></i>Laporan <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-file-text"></i>
                                    &nbsp; Master <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="#" class="dropdown-item disabled">Daftar Item</a>
                                    <a href="#" class="dropdown-item disabled">Daftar Supplier</a>
                                    <a href="#" class="dropdown-item disabled">Daftar Pelanggan</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-file-text"></i>
                                    &nbsp; Pembelian <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="#" class="dropdown-item disabled">Pesanan Pembelian</a>
                                    <a href="#" class="dropdown-item disabled">Pembelian</a>
                                    <a href="#" class="dropdown-item disabled">Retur Pembelian</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-file-text"></i>
                                    &nbsp; Penjualan <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="#" class="dropdown-item disabled">Pesanan Penjualan</a>
                                    <a href="#" class="dropdown-item disabled">Penjualan</a>
                                    <a href="#" class="dropdown-item disabled">Retur Penjualan</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-file-text"></i>
                                    &nbsp; Hutang <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="#" class="dropdown-item disabled">Hutang Beredar</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-file-text"></i>
                                    &nbsp; Piutang <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="#" class="dropdown-item disabled">Piutang Beredar</a>
                                </div>
                            </div>


                        </div>
                    </li>


                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-briefcase-line"></i>Components <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Base UI 1 <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                    <a href="ui-accordions.php" class="dropdown-item">Accordions</a>
                                    <a href="ui-alerts.php" class="dropdown-item">Alerts</a>
                                    <a href="ui-avatars.php" class="dropdown-item">Avatars</a>
                                    <a href="ui-badges.php" class="dropdown-item">Badges</a>
                                    <a href="ui-breadcrumb.php" class="dropdown-item">Breadcrumb</a>
                                    <a href="ui-buttons.php" class="dropdown-item">Buttons</a>
                                    <a href="ui-cards.php" class="dropdown-item">Cards</a>
                                    <a href="ui-carousel.php" class="dropdown-item">Carousel</a>
                                    <a href="ui-dropdowns.php" class="dropdown-item">Dropdowns</a>
                                    <a href="ui-embed-video.php" class="dropdown-item">Embed Video</a>
                                    <a href="ui-grid.php" class="dropdown-item">Grid</a>
                                    <a href="ui-list-group.php" class="dropdown-item">List Group</a>
                                    <a href="ui-links.php" class="dropdown-item">Links</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Base UI 2 <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                    <a href="ui-modals.php" class="dropdown-item">Modals</a>
                                    <a href="ui-notifications.php" class="dropdown-item">Notifications</a>
                                    <a href="ui-offcanvas.php" class="dropdown-item">Offcanvas</a>
                                    <a href="ui-placeholders.php" class="dropdown-item">Placeholders</a>
                                    <a href="ui-pagination.php" class="dropdown-item">Pagination</a>
                                    <a href="ui-popovers.php" class="dropdown-item">Popovers</a>
                                    <a href="ui-progress.php" class="dropdown-item">Progress</a>
                                    <a href="ui-spinners.php" class="dropdown-item">Spinners</a>
                                    <a href="ui-tabs.php" class="dropdown-item">Tabs</a>
                                    <a href="ui-tooltips.php" class="dropdown-item">Tooltips</a>
                                    <a href="ui-typography.php" class="dropdown-item">Typography</a>
                                    <a href="ui-utilities.php" class="dropdown-item">Utilities</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Extended UI <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                    <a href="extended-portlets.php" class="dropdown-item">Portlets</a>
                                    <a href="extended-scrollbar.php" class="dropdown-item">Scrollbar</a>
                                    <a href="extended-range-slider.php" class="dropdown-item">Range Slider</a>
                                    <a href="extended-scrollspy.php" class="dropdown-item">Scrollspy</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                    <a href="form-elements.php" class="dropdown-item">Basic Elements</a>
                                    <a href="form-advanced.php" class="dropdown-item">Form Advanced</a>
                                    <a href="form-validation.php" class="dropdown-item">Form Validation</a>
                                    <a href="form-wizard.php" class="dropdown-item">Form Wizard</a>
                                    <a href="form-fileuploads.php" class="dropdown-item">File Uploads</a>
                                    <a href="form-editors.php" class="dropdown-item">Form Editors</a>
                                    <a href="form-image-crop.php" class="dropdown-item">Image Crop</a>
                                    <a href="form-x-editable.php" class="dropdown-item">X Editable</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex.php" class="dropdown-item">Apex Charts</a>
                                    <a href="charts-chartjs.php" class="dropdown-item">Chartjs</a>
                                    <a href="charts-sparklines.php" class="dropdown-item">Sparkline Charts</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                    <a href="tables-basic.php" class="dropdown-item">Basic Tables</a>
                                    <a href="tables-datatable.php" class="dropdown-item">Data Tables</a>
                                    <a href="tables-editable.php" class="dropdown-item">Editable Tables</a>
                                    <a href="tables-responsive.php" class="dropdown-item">Responsive Table</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-remixicons.php" class="dropdown-item">Remix Icons</a>
                                    <a href="icons-bootstrap.php" class="dropdown-item">Bootstrap Icons</a>
                                    <a href="icons-mdi.php" class="dropdown-item">Material Design Icons</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                    <a href="maps-google.php" class="dropdown-item">Google Maps</a>
                                    <a href="maps-vector.php" class="dropdown-item">Vector Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-layout-line"></i>Layouts <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                            <a href="layouts-horizontal.php" class="dropdown-item" target="_blank">Horizontal</a>
                            <a href="layouts-light-sidebar.php" class="dropdown-item" target="_blank">Light Sidebar</a>
                            <a href="layouts-sm-sidebar.php" class="dropdown-item" target="_blank">Small Sidebar</a>
                            <a href="layouts-collapsed-sidebar.php" class="dropdown-item" target="_blank">Collapsed Sidebar</a>
                            <a href="layouts-unsticky-layout.php" class="dropdown-item" target="_blank">Unsticky Layout</a>
                            <a href="layouts-boxed.php" class="dropdown-item" target="_blank">Boxed Layout</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ========== Horizontal Menu End ========== -->