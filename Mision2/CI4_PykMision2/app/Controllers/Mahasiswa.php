<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;
class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('mahasiswa_list', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->find($nim);
        if (!$data['mhs']) 
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
        }

        return view('mahasiswa_detail', $data);
    }
    
    public function hello()
    {
        echo "Hello, World!";
    }

    public function tabel1()
    {
        echo view('tabel1');
    }

    public function tabel2()
    {
        $data = [
            ["241511001", "Aldi Pratama", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
            ["241511002", "Muezza Haura Nasheed", "Perempuan", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
            ["241511003", "Rizki Putra Ramadhan", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
            ["241511004", "Siti Nurjanah", "Perempuan", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
            ["241511005", "Fauzan Aditya", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
        ];

        return view('tabel2', ['mahasiswa' => $data]);
    }
}