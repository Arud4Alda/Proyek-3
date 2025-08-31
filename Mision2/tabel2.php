<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan tabel html dengan loop php</title>
    <style>
        body {
            font-family: 'new courier', monospace;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            padding: 10px;
        }
        th {
            text-align: center;
        }
        tr:nth-child(even) {
        background-color: #D6EEEE;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>Data Mahasiswa</h1><br>";
        echo "<table>";
            echo "<tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                    <th>Jurusan</th>
                  </tr>";

            $data = 
            [
                ["241511001", "Aldi Pratama", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
                ["241511002", "Muezza Haura Nasheed", "Perempuan", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
                ["241511003", "Rizki Putra Ramadhan", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
                ["241511004", "Siti Nurjanah", "Perempuan", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"],
                ["241511005", "Fauzan Aditya", "Laki-laki", "2C", "D3 Teknik Informatika", "Teknik Komputer dan Informatika"]
            ];
            $no = 1;
            foreach($data as $row) 
            {
                echo "<tr>";
                echo "<td>$no</td>";
                foreach($row as $cell) 
                {
                    echo "<td>$cell</td>";                    
                }
                $no++;
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>