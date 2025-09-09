<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;
class Mahasiswa extends BaseController
{
     public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        $pagedata = 
        [
            'title'=>'Daftar Mahsiswa',
            'content'=>view('mahasiswa_list', $data)
        ];

        return view('template',$pagedata);
    }


    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->find($nim);
        if (!$data['mhs']) 
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
        }

        $pagedata = 
        [
            'title'=>'Detail',
            'content'=>view('mahasiswa_detail', $data)
        ];

        return view('template', $pagedata);
    }
        
}