<?php
    include 'koneksi-db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Biodata Database</title>
    </head>
    <body>
        <form action="biodata-db.php" method="POST" align="center">
            <fieldset>
                <legend>Form Biodata Mahasiswa</legend><br><br>
                <label>NIM : </label>
                <input type="text" name="nim" id="nim" placeholder="ex: 241511000" required><br><br><br>

                <label>Nama : </label>
                <input type="text" name="nama" id="nama" placeholder="ex: Azizah salsa" required><br><br><br>

                <label>Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">Laki-laki
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan<br><br><br>

                <label>Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br><br>

                <input type="submit" value="Submit"><br><br>
            </fieldset>
        </form>

        <?php
            
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $jk = $_POST['jenis_kelamin'];
                $tgl_lahir = $_POST['tanggal_lahir'];
                $query = "INSERT INTO biodata (nim, nama, jenis_kelamin,tanggal_lahir) VALUES ('$nim','$nama', '$jk', '$tgl_lahir') ";
                $sql = mysqli_query($conn, $query);
                if($sql)
                {
                    echo "Data Berhasil Disimpan";
                }
                else
                {
                    echo "Data Gagal Disimpan";
                }                
            }
        ?>

    </body>
</html>