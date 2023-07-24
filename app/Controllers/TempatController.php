<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TempatModel;

class TempatController extends BaseController
{
    protected $TempatModel;

    public function __construct()
    {
        $this->TempatModel = new TempatModel();
    }

    public function index()
    {
        $data['lokasi'] = $this->TempatModel->findAll();
        return view('lokasi', $data);
    }

    public function create()
    {
        return view('create_lokasi');
    }

    public function store()
    {
        $alamat = $this->request->getPost('alamat');
        $kota = $this->request->getPost('kota');

        // Validasi input tidak boleh kosong
        if (empty($alamat) || empty($kota)) {
            return redirect()->back()->withInput()->with('error', 'Alamat dan kota harus diisi');
        }

        $data = [
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
        ];


        $this->TempatModel->insert($data);

        return redirect()->to('/lokasi')->with('success', 'Data lokasi berhasil disimpan');
    }

    // public function store()
    // {
    //     $data = [
    //         'alamat' => $this->request->getPost('alamat'),
    //         'kota' => $this->request->getPost('kota'),
    //     ];

    //     $this->TempatModel->insert($data);

    //     return redirect()->to('/lokasi');
    // }

    public function edit($id)
    {
        $data['lokasi'] = $this->TempatModel->find($id);
        return view('edit_lokasi', $data);
    }

    public function update($id)
    {
        $data = [
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
        ];

        $this->TempatModel->update($id, $data);

        return redirect()->to('/lokasi')->with('success', 'Data lokasi berhasil diperbarui');
    }

    // public function update($id)
    // {
    //     $data = [
    //         'alamat' => $this->request->getPost('alamat'),
    //         'kota' => $this->request->getPost('kota'),
    //     ];

    //     $this->TempatModel->update($id, $data);

    //     return redirect()->to('/lokasi');
    // }

    // public function delete($id)
    // {
    //     $this->TempatModel->delete($id);

    //     return redirect()->to('/lokasi');
    // }
    public function delete($id)
    {
        $this->TempatModel->delete($id);
        return redirect()->to('/lokasi')->with('success', 'Data lokasi berhasil dihapus');
    }
}
