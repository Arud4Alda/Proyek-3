<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class MahasiswaModel extends Model
    {
        protected $table = 'biodata';
        protected $primaryKey = 'nim';
        protected $allowedFields = ['nim', 'nama', 'jenis_kelamin', 'tanggal_lahir'];
        
    }
?>