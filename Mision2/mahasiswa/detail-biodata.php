<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
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

        if (isset($_GET['nim'])) {
            $nim = $_GET['nim'];
            $query = "SELECT * FROM biodata WHERE nim = '$nim'";
            $sql = mysqli_query($conn, $query);

            if (mysqli_num_rows($sql) > 0) {
                $data = mysqli_fetch_assoc($sql);
            } else {
                echo "<p align='center'> Data tidak ditemukan.</p>";
                exit;
            }
        } else {
            echo "<p align='center'>NIM tidak ditemukan di URL.</p>";
            exit;
        }
    ?>    

    <h2 align="center">Detail Mahasiswa</h2> <br><br>
    <table align="center">
        <tr>
            <th>NIM</th>
            <td><?php echo $data['nim']; ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo $data['nama']; ?></td>    
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo ($data['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'); ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $data['tanggal_lahir']; ?></td>
        </tr>

        <tr>
            <th>Aksi</th>
            <td><a href="list-biodata.php">Kembali ke List Biodata</a></td>
        </tr>
    </table>

    
</body>
</html>
