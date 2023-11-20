<?= $this->extend('partials/template2'); ?>

<?= $this->section('addcss'); ?>


<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="content-page pb-0">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div>
                        <table cellpadding="1" cellspacing="0" border="0">
                            <tr>
                                <td rowspan="4" class="td-logo"><img src="assets/images/logo-dss.png" height="70" class="images-logo"></td>
                                <td rowspan="4" class="wd-8 p-2"></td>
                                <td width="70%"><b class=" fs-15">Apotek Sari Husada Unit Gajah</b></td>
                                <td width="30%" class="text-end"><b class=" fs-15">Faktur Penjualan</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Jl Raya Gajah Dempet RT05/05 <br>Kel Gajah Kec Gajah Kab Demak <br>Jawa Tengah 59581</div>
                                </td>
                            </tr>
                        </table>

                        <!-- <table width=" 100%" cellpadding="1" cellspacing="0" border="0">
                            <tr>
                                <td rowspan=4"><img src="assets/images/logo-dss.png" height="70"></td>
                                <td rowspan="4" class="wd-8 border"></td>
                                <td class="">
                                    <h5>PT. Demak Sarana Sehat (Perseroda)</h5>
                                </td>
                                <td class="">
                                    <h5>Faktur Penjualan</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>Jl Raya Gajah Dempet RT05/05 <br>Kel Gajah Kec Gajah Kab Demak <br>Jawa Tengah 59581</div>
                                </td>
                            </tr>
                        </table> -->

                        <hr class="hr mb-0" />

                        <table width="100%" cellpadding="2" cellspacing="0" border="0">
                            <tr>
                                <td width="18%"><b>No. Faktur</b></td>
                                <td width="1%"><b>:</b></td>
                                <td width="32%">SI-GPOS/11/2023/18493</td>
                                <td width="18%"><b>Pelanggan</b></td>
                                <td width="1%"><b>:</b></td>
                                <td>REGULAR</td>
                            </tr>
                            <tr>
                                <td><b>Tipe Pembayaran</b></td>
                                <td width="1%"><b>:</b></td>
                                <td>CASH / CASH</td>
                                <td rowspan="3" valign="top"><b>Alamat</b></td>
                                <td width="1%"><b>:</b></td>
                                <td rowspan="3" valign="top">Indonesia</td>
                            </tr>
                            <tr>
                                <td width="17%"><b>Tgl. Transaksi</b></td>
                                <td width="1%"><b>:</b></td>
                                <td>20-Nov-2023</td>
                            </tr>
                            <tr>
                                <td><b>Tgl. Jatuh Tempo</b></td>
                                <td width="1%"><b>:</b></td>
                                <td>20-Nov-2023</td>
                            </tr><br>
                        </table>


                        <!-- <table width="100%" cellpadding="1" cellspacing="0" class=" table table-sm table-centered mb-0 mt-3 ">
                            <tr class="border-top border-bottom bg-secondary-subtle border-light">
                                <td width="4%" align="center"><b>No</b></td>
                                <td width="30%" align="center"><b>Nama Barang</b></td>
                                <td width="4%" align="center"><b>Qty</b></td>
                                <td width="5%" align="center"><b>Satuan</b></td>
                                <td width="20%" align="center"><b>Batch &amp; ED</b></td>
                                <td width="8%" align="center"><b>Harga</b></td>
                                <td width="7%" align="center"><b>Diskon</b></td>
                                <td width="11%" align="center"><b>Sub Total</b></td>
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td> &nbsp;<span>NR: PIROCAM 20MG BOX 10 STR @10 TAB</span></td>
                                <td align="center">10</td>
                                <td align="center">TAB</td>
                                <td align="center"></td>
                                <td align="right">349&nbsp;</td>
                                <td align="right">0&nbsp;</td>
                                <td align="right">3.490&nbsp;</td>

                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td> &nbsp;<span>NR: PIROCAM 20MG BOX 10 STR @10 TAB</span></td>
                                <td align="center">10</td>
                                <td align="center">TAB</td>
                                <td align="center"></td>
                                <td align="right">349&nbsp;</td>
                                <td align="right">0&nbsp;</td>
                                <td align="right">3.490&nbsp;</td>

                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td> &nbsp;<span>NR: PIROCAM 20MG BOX 10 STR @10 TAB</span></td>
                                <td align="center">10</td>
                                <td align="center">TAB</td>
                                <td align="center"></td>
                                <td align="right">349&nbsp;</td>
                                <td align="right">0&nbsp;</td>
                                <td align="right">3.490&nbsp;</td>

                            </tr>

                            <tr>
                                <td colspan="5" rowspan="5" align="left">&nbsp;Terbilang : DUA PULUH SATU RIBU TUJUH RATUS RUPIAH</td>
                                <td colspan="2" align="right">Total QTY&nbsp;</td>
                                <td width="150" align="right">60&nbsp;</td>
                            </tr>
                        </table><br><br> -->

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <table class="table table-sm table-centered mb-0 mt-3">
                                        <thead class="border-top  bg-secondary-subtle ">
                                            <tr>
                                                <th width="4%">#</th>
                                                <th width="30%">Item</th>
                                                <th width="4%">Qty</th>
                                                <th width="5%">Satuan</th>
                                                <th width="8%">Harga</th>
                                                <th width="5%">Pot.</th>
                                                <th class="text-end" width="8%">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">1</td>
                                                <td>
                                                    <b>08912</b> <br />
                                                    ANAKONIDIN SYR 160ML
                                                </td>
                                                <td>1</td>
                                                <td>BTL</td>
                                                <td>15.000</td>
                                                <td>0</td>
                                                <td class="text-end">15.000</td>
                                            </tr>
                                            <tr>
                                                <td class="">1</td>
                                                <td>
                                                    <b>08912</b> <br />
                                                    ANAKONIDIN SYR 160ML
                                                </td>
                                                <td>1</td>
                                                <td>BTL</td>
                                                <td>15.000</td>
                                                <td>0</td>
                                                <td class="text-end">15.000</td>
                                            </tr>







                                        </tbody>


                                    </table>

                                    <table width="100%" cellpadding="1" cellspacing="0" border="0" class="mt-3">

                                        <tr>
                                            <td colspan="4" rowspan="4" align="left"><b>Keterangan :</b></br> DUA PULUH SATU RIBU TUJUH RATUS RUPIAH</td>

                                            <td colspan="2" align="right"><b>Total Qty&nbsp;</b></td>
                                            <td width=" 150" align="right">60&nbsp;</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" align="right"><b>Potongan&nbsp;</b></td>
                                            <td width="150" align="right">0&nbsp;</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" align="right"><b>DPP&nbsp;</b></td>
                                            <td width="150" align="right">19.500&nbsp;</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="right"><b>PPN&nbsp;</b></td>
                                            <td width="150" align="right">2.145&nbsp;</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="right"><b>Total Nilai&nbsp;</b></td>
                                            <td width="150" align="right" class="fs-15"> <b><u>21.700&nbsp;</u></b></td>
                                        </tr>
                                    </table>



                                </div>
                            </div>
                        </div>


                        <table cellspacing="0" cellpadding="2" width="100%" class="mt-3">
                            <tr>
                                <td width=" 25%" align="center"><b>Dibuat Oleh</b></td>
                                <td width="25%" align="center"><b>Dikonfirmasi Oleh</b></td>
                                <td width="25%" align="center"><b>Pelanggan</b></td>
                            </tr>
                        </table><br><br>
                        <table cellspacing="0" cellpadding="2" width="100%" class="mt-3">
                            <tr>
                                <td width="25%" align="center">(KASIR_NISTIAN BALADRAF) </td>
                                <td width="25%" align="center">................................</td>
                                <td width="25%" align="center">(REGULAR)</td>
                            </tr>
                        </table><br>
                    </div>



                    <div class="d-print-none mt-4">
                        <div class="text-center">
                            <button onclick="history.back()" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</button>
                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line"></i> Print</a>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


</div>

</div>





</div>





<?= $this->endSection(); ?>


<?= $this->section('addjs'); ?>

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>


<?= $this->endSection(); ?>