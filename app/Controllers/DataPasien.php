<?php

namespace App\Controllers;

use App\Models\DataPasienModel;

class DataPasien extends BaseController
{
    //protected $datapasienModel;

    // public function __construct()
    // {
    //     $this->datapasienModel = new DataPasienModel();
    // }

    public function index()
    {
        // $data = [
        //     'title' => "Data Pasien"
        // ];
        $datapasienmodel = new DataPasienModel();
        $all_data_datapasien = $datapasienmodel->findAll();
        return view('datapasien/index', ['all_data_datapasien' => $all_data_datapasien]);
        //$datapasien = $this->datapasienModel->findAll();

        // $data = [
        //     'title' => 'Data Pasien',
        //     'datapasien' => $this->datapasienModel->getDataPasien()
        // ];


        // return view('datapasien/index', $data);
    }

    public function detail($nik)
    {
        // $data = [
        //     'title' => "Detail"
        // ];
        $datapasienmodel = new DataPasienModel();
        $all_data_datapasien = $datapasienmodel->find($nik);
        return view('datapasien/detail', ['all_data_datapasien' => $all_data_datapasien]);
    }

    public function create()
    {
        // $data = [
        //     'title' => 'Form Tambah Data Pasien'
        // ];

        return view('datapasien/create');
    }

    public function save()
    {
        $datapasienmodel = new DataPasienModel();
        $datapasienmodel->insert($this->request->getPost());
        return redirect()->to(base_url('datapasien/index'));
        // $model = new DataPasienModel();
        // $data = array(
        //     'nik' => $this->request->getPost('nik'),
        //     'nama_pasien' => $this->request->getPost('nama_pasien'),
        //     'usia_pasien' => $this->request->getPost('usia_pasien'),
        //     'tb_bb_pasien' => $this->request->getPost('tb_bb_pasien'),
        //     'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        // );
        // $model->saveDataPasien($data);
        // echo '<script>
        // alert("Sukses Tambah Data Pasien");
        // window.location="' . base_url('datapasien') . '"
        // </script>';


        // $nik = url_title($this->request->getVar('nama_pasien'), '-', true);
        //$this->datapasienModel->save([
        //     'nik' => $nik,
        //     'nama_pasien' => $this->request->getVar('nama_pasien'),
        //     'usia_pasien' => $this->request->getVar('usia_pasien'),
        //     'tb_bb_pasien' => $this->request->getVar('tb_bb_pasien'),
        //     'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),

        // ]);


        // session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        // return redirect()->to('/datapasien');
    }

    public function edit($nik = false)
    {
        $datapasienmodel = new DataPasienModel();
        $data_pasien = $datapasienmodel->find($nik);
        return view('datapasien/edit', ['data_pasien' => $data_pasien]);
        // $model = new DataPasienModel;
        // $getDataPasien = $model->getDataPasien($nik)->getRow();
        // if (isset($getDataPasien)) {
        //     $data['datapasien'] = $getDataPasien;
        //     $data['title'] = 'Edit' . $getDataPasien->nama_pasien;
        // } else {
        //     echo '<script>
        // alert("NIK Pasien ' . $nik . ' Tidak ditemukan");
        // window.location="' . base_url('datapasien') . '"
        // </script>';
        // }
    }

    public function update()
    {
        $datapasienmodel = new DataPasienModel();
        $datapasienmodel->update($this->request->getPost('nik'), $this->request->getPost());
        return redirect()->to(base_url('datapasien/index'));
        // $model = new DataPasienModel;
        // $nik = $this->request->getPost('nik');
        // $data = array(
        //     'nik' => $this->request->getPost('nik'),
        //     'nama_pasien' => $this->request->getPost('nama_pasien'),
        //     'usia_pasien' => $this->request->getPost('usia_pasien'),
        //     'tb_bb_pasien' => $this->request->getPost('tb_bb_pasien'),
        //     'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),

        // );
        // $model->editDataPasien($data, $nik);
        // echo '<script>
        // alert("Sukses Edit Data Pasien");
        // window.location="' . base_url('datapasien') . '"
        // </script>';
    }

    public function delete($nik = false)
    {
        $datapasienmodel = new DataPasienModel();
        $datapasienmodel->delete($nik);
        return redirect()->to(base_url('datapasien/index'));
    }
}
