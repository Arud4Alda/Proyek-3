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
    <h2>Daftar Mata Kuliah</h2>
    <div style="text-align:right; margin-bottom:10px;">
        <a href="<?= site_url('admin/course/tambah') ?>" class="btn btn-add">+ Tambah Course</a>
    </div>
    <table>
        <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($courses as $c): ?>
        <tr>
            <td><?= $c['courses_id'] ?></td>
            <td><?= $c['courses_name'] ?></td>
            <td><?= $c['credits'] ?></td>
            <td>
                <a href="<?= site_url('admin/course/edit/'.$c['courses_id']) ?>" class="btn btn-edit">Edit </a>
                <a href="<?= site_url('admin/course/hapus/'.$c['courses_id']) ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus data ini?')"> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
