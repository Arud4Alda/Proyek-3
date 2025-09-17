<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
    <style>
        body { font-family: 'new courier', monospace; 
            background-color: #f5f2e7;
        }
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td { padding: 10px; }
        th {text-align: center;}
        tr:nth-child(even) { background-color: #c3c3c3ff;}
        h2{text-align: center;}
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <div style="text-align:right; margin-bottom:10px;">
        <a href="<?= site_url('admin/mahasiswa/tambah') ?>" class="btn btn-add">+ Tambah Mahasiswa</a>
    </div>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Tahun Masuk</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= $m['student_id'] ?></td>
            <td><?= $m['full_name'] ?></td>
            <td><?= $m['username'] ?></td>
            <td><?= $m['entry_year'] ?></td>
            <td>
                <a href="<?= site_url('admin/mahasiswa/edit/'.$m['student_id']) ?>" class="btn btn-edit">Edit</a>
                <a href="<?= site_url('admin/mahasiswa/hapus/'.$m['student_id']) ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>      