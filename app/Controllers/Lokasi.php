<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Lokasi extends BaseController
{
    protected $lokasiModel;

    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    { {
            $lokasi['lokasi'] = $this->lokasiModel->findAll();
            return view('tam_lokasi', $lokasi);
        }
    }


    public function getAllProduct()
    {
        $model = new LokasiModel();
        $lokasi['lokasi'] = $model->findAll();
        return json_encode($lokasi);
    }
}
