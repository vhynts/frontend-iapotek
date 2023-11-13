<?php

namespace App\Controllers;

class Sale extends BaseController
{
    public function sales_list()
    {
        $data = [
            'title' => 'Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Faktur Penjualan'
        ];
        return view('zsales/sales_list', $data);
    }

    public function sales_invoice()
    {
        $data = [
            'title' => 'Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Faktur Penjualan'
        ];
        return view('zsales/sales_invoice', $data);
    }

    public function sales_order()
    {
        $data = [
            'title' => 'Pesanan Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Pesanan Penjualan'
        ];
        return view('zsales/sales_order', $data);
    }

    public function sales_return()
    {
        $data = [
            'title' => 'Retur Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Retur Penjualan'
        ];
        return view('zsales/sales_return', $data);
    }
}
