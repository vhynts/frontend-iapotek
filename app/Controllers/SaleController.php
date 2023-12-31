<?php

namespace App\Controllers;

class SaleController extends BaseController
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

    public function sales_detail()
    {
        $data = [
            'title' => 'Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Faktur Penjualan'
        ];
        return view('zsales/sales_detail', $data);
    }

    public function print_si()
    {
        $data = [
            'title' => 'Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Faktur Penjualan'
        ];
        return view('zsales/print/print_si2', $data);
    }

    public function print_receipt()
    {
        $data = [
            'title' => 'Penjualan',
            'sub_title' => 'Penjualan',
            'page_title' => 'Struk Penjualan'
        ];
        return view('zsales/print/print_receipt', $data);
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
