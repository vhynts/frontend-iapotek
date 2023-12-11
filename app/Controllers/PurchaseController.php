<?php

namespace App\Controllers;

class PurchaseController extends BaseController
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

    public function return_list()
    {
        $data = [
            'title' => 'Retur Pembelian',
            'sub_title' => 'Pembelian',
            'page_title' => 'Retur Pembelian'
        ];
        return view('zpurchases/return_list', $data);
    }

    public function purchase_return_create()
    {
        $data = [
            'title' => 'Retur Pembelian',
            'sub_title' => 'Pembelian',
            'page_title' => 'Tambah Retur Pembelian'
        ];
        return view('zpurchases/purchase_return_add', $data);
    }
}
