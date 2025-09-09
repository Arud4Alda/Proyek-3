<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;
class Formulir extends BaseController
{
     public function index()
    {
        $pageData = [
            'title'   => 'Form Biodata',
            'content' => view('displayFormulir')
        ];

        return view('template', $pageData);
    }

    public function create()
    {
        $model = new MahasiswaModel();

        $data = [
            'nim'           => $this->request->getPost('nim'),
            'nama'          => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ];

        if ($model->insert($data)) {
            return redirect()->to('/mahasiswa')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }
    
        
}