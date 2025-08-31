<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
    <style>
        body { font-family: 'new courier', monospace; }
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td { padding: 10px; }
        th {text-align: center;}
        tr:nth-child(even) { background-color: #D6EEEE;}
        h1{text-align: center;}
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= $m['nim'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['jenis_kelamin'] ?></td>
            <td><?= $m['tanggal_lahir'] ?></td>
            <td><a href="/mahasiswa/detail/<?= $m['nim'] ?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
