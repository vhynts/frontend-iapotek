<?php

namespace App\Controllers;

use App\Models\Master_model;

class MasterController extends BaseController
{


    public function item_list()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Item',
            'sub_title' => 'Master',
            'page_title' => 'Daftar Item',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/item/item', $data);
    }

    public function customer_list()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Pelanggan',
            'sub_title' => 'Master',
            'page_title' => 'Daftar Pelanggan',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/customer/customer', $data);
    }

    

    public function item_add()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Data Item',
            'sub_title' => 'Master',
            'page_title' => 'Data Item',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/item/item_add', $data);
    }

    public function customer_add()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Tambah Pelanggan',
            'sub_title' => 'Master',
            'page_title' => 'Tambah Pelanggan',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/customer/customer_add', $data);
    }
}
