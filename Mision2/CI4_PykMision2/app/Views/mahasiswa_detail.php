<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <style>
        body { font-family: 'new courier', monospace; }
        h1 
        {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .card {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        ul 
        {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li 
        {
            padding: 12px 10px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <div class="card">
    <ul>
        <li>NIM: <?= $mhs['nim'] ?></li>
        <li>Nama: <?= $mhs['nama'] ?></li>
        <li>Jenis Kelamin: <?= $mhs['jenis_kelamin'] ?></li>
        <li>Tanggal Lahir: <?= $mhs['tanggal_lahir'] ?></li>
        <li><a href="/mahasiswa">Kembali ke Daftar</a></li>
    </ul>    
    </div>
</body>
</html>
