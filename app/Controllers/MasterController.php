<?php

namespace App\Controllers;

use App\Models\Master_model;

class MasterController extends BaseController
{


    public function index()
    {
        $masteritem = new Master_model();

        $data = [
            'title' => 'Item',
            'sub_title' => 'Master',
            'page_title' => 'Daftar Item',
            'master_item' => $masteritem->findAll()
        ];

        // dd($data['master_item']);
        return view('zmaster/item', $data);
    }
}
