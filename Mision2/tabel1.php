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
    <?php
        echo "<h1>Data Mahasiswa</h1><br>";
        echo "<table>";
            echo "<tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                    <th>Jurusan</th>
                  </tr>";

            echo "<tr>
                    <td>241511001</td>
                    <td>Aldi Pratama</td>
                    <td>Laki-laki</td>
                    <td>2C</td>
                    <td>D3 Teknik Informatika</td>
                    <td>Teknik Komputer dan Informatika</td>
                  </tr>";

            echo "<tr>
                    <td>241511002</td>
                    <td>muezza Haura Nasheed</td>
                    <td>Perempuan</td>
                    <td>2C</td>
                    <td>D3 Teknik Informatika</td>
                    <td>Teknik Komputer dan Informatika</td>
                  </tr>";

            echo "<tr>
                    <td>241511003</td>
                    <td>Rizki Putra Ramadhan</td>
                    <td>Laki-laki</td>
                    <td>2C</td>
                    <td>D3 Teknik Informatika</td>
                    <td>Teknik Komputer dan Informatika</td>
                  </tr>";

            echo "<tr>
                    <td>241511004</td>
                    <td>Fauzan Aditya</td>
                    <td>Laki-laki</td>
                    <td>2C</td>
                    <td>D3 Teknik Informatika</td>
                    <td>Teknik Komputer dan Informatika</td>
                  </tr>";
        echo "</table>";
    ?>
</body>
</html>