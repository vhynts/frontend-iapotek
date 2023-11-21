<?= $this->extend('partials/template2'); ?>

<?= $this->section('addcss'); ?>

<style>
    @font-face {
        font-family: "fakereceipt";
        src: url('assets/fonts/fakereceipt.otf');
    }

    /* body {
        font-family: "fakereceipt";
    } */

    div {
        font-family: "fakereceipt";
    }

    /* p {
        font-family: "fakereceipt";
    } */
</style>

<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="content-page pb-0" style="
    width:80mm;">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div>
                        <table border="0">
                            <tr>
                                <td width="80"><img src="assets/images/logo-dss.png" class="report-logo" width="70"></td>
                                <td align="center">
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td align="center" class="border-bottom"><b>Apotek Sari Husada Karangawen</b></td>

                                            </tr>


                                            <tr>
                                                <td align="center" class="fs-10">
                                                    <div>Jl. Raya Karangawen No.113, Karangawen, <br>Pundenarum, Kec. Karangawen, <br>Kab Demak, Jawa Tengah 59566</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="medHeader">0291-862240 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table><br>
                        <table>
                            <tbody>
                                <tr>
                                    <td># SI-GPOS/11/2023/19307 (ASLI)</td>
                                </tr>
                                <tr>
                                    <td># 21-11-2023 08:09</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <td width="40%">Kasir</td>
                                    <td> : </td>
                                    <td>DIAH PUSPITASARI</td>
                                </tr>
                                <tr>
                                    <td>Pelanggan</td>
                                    <td> : </td>
                                    <td>SONNY RIZMAWAN</td>
                                </tr>
                                <tr>
                                    <td>Pembayaran</td>
                                    <td> : </td>
                                    <td>CASH</td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" class="mt-3 mb-3">
                            <tbody>
                                <tr>
                                    <td colspan="2 text-truncate"><span>ACETYLCYSTEINE NULAB 200 MG BOX 10 </span></td>
                                </tr>
                                <tr>
                                    <td align="right">10 TAB x<span> 1.494</span></td>
                                    <td align="right">14.943</td>
                                </tr>
                                <tr>
                                    <td colspan="2 text-truncate"><span>ACETYLCYSTEINE NULAB 200 MG BOX 10 </span></td>
                                </tr>
                                <tr>
                                    <td align="right">10 TAB x<span> 1.494</span></td>
                                    <td align="right">14.943</td>
                                </tr>

                            </tbody>
                        </table>
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td width="15%"></td>
                                    <td>Total Nilai</td>
                                    <td> : </td>
                                    <td align="right">24.500</td>
                                </tr>
                                <tr>
                                    <td width="15%"></td>
                                    <td>Pembayaran</td>
                                    <td> : </td>
                                    <td align="right">24.500</td>
                                </tr>
                                <tr>
                                    <td width="15%"></td>
                                    <td>Kembalian</td>
                                    <td> : </td>
                                    <td align="right">0</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="3"><u>Keterangan</u><br></td>
                                </tr>
                                <tr>
                                    <!-- <td width="30%">CASH</td>
                                    <td width="5"> : </td>
                                    <td>CASH<span></span></td>
                                    <td align="right"><span>0</span></td> -->
                                    <td align="tex-right"><span>0</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center"><br><span>*Harga Sudah Termasuk PPN</span><br><span class=" msg1"><span class="msg1">*Barang yang sudah dibeli<br> tidak dapatditukar atau dikembalikan<br>*WA LAYANAN PELANGGAN <br>0821-3816-7092<br></span></span><br></div>

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