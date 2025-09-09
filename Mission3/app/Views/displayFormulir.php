<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Mahasiswa</title>
    <style>
        body { font-family: 'New Courier', monospace; }
        form { max-width: 500px; margin: auto; }
        fieldset { padding: 20px; }
        label { display: block; margin: 10px 0 5px; }
        input[type="text"], input[type="date"] { width: 100%; padding: 5px; }
    </style>
</head>
<body>
    <form action="<?= base_url('formulir/create') ?>" method="POST">
        <fieldset>
            <legend>Form Biodata Mahasiswa</legend>

            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" placeholder="ex: 241511000" required>

            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" placeholder="ex: Azizah Salsa" required>

            <label>Jenis Kelamin :</label>
            <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="P" required> Perempuan

            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>

            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
