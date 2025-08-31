<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan tabel dengan html dan php</title>
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
        <h1>Data Mahasiswa</h1><br>
        <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                    <th>Jurusan</th>
                </tr>
                
                <?php $no = 1; ?>
                <?php foreach ($mahasiswa as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <?php foreach ($row as $cell): ?>
                            <td><?= $cell ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
        </table>    
</body>
</html>