<?php

namespace App\Models;

use CodeIgniter\Model;

class Master_model extends Model
{
    protected $table      = 'tbl_item';
    protected $primaryKey = 'kodeitem';


    protected $allowedFields = ['kodeitem', 'namaitem', 'satuan', 'hargapokok'];
}
