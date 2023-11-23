<?php

namespace App\Controllers;


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

    public function item_unit()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Satuan',
            'sub_title' => 'Master',
            'page_title' => 'Satuan',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/item/unit', $data);
    }

    public function item_cat()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Jenis',
            'sub_title' => 'Master',
            'page_title' => 'Jenis',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/item/category', $data);
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

    public function customer_group_list()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Grup Pelanggan',
            'sub_title' => 'Master',
            'page_title' => 'Grup Pelanggan',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/customer/customer_group', $data);
    }

    public function supplier_list()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Supplier',
            'sub_title' => 'Master',
            'page_title' => 'Daftar Supplier',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/supplier/supplier', $data);
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

    public function supplier_add()
    {
        // $masteritem = new Master_model();

        $data = [
            'title' => 'Tambah Supplier',
            'sub_title' => 'Master',
            'page_title' => 'Tambah Supplier',
            // 'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/supplier/supplier_add', $data);
    }
}
