<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Biodata</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
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
    </style>
</head>
<body style="font-family: Courier New, monospace;">
    <?php
        include 'koneksi-db.php';
        $query = "SELECT * FROM biodata";
        $sql = mysqli_query($conn, $query);
    ?>    
    <h2 align="center">List mahasiswa</h2> <br><br>
    <table align="center">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Tanggal lahir</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".($row['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan')."</td>";
            echo "<td>".$row['tanggal_lahir']."</td>";
            echo "<td><a href='detail-biodata.php?nim=".$row['nim']."'>Detail</a></td>";
            echo "</tr>";
        }
        ?>

    </table>   
</body>
</html>