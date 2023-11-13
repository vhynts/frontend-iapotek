<?php

namespace App\Controllers;

class Purchase extends BaseController
{
    public function purchase_list()
    {
        $data = [
            'title' => 'Pembelian',
            'sub_title' => 'Pembelian',
            'page_title' => 'Daftar Pembelian'
        ];
        return view('zpurchases/purchase_list', $data);
    }


    public function purchase_invoice()
    {
        $data = [
            'title' => 'Pembelian',
            'sub_title' => 'Pembelian',
            'page_title' => 'Faktur Pembelian'
        ];
        return view('zpurchases/purchase_invoice', $data);
    }
}
