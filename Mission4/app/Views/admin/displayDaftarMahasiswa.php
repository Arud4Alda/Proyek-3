<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <div style="text-align:right; margin-bottom:10px;">
        <a href="<?= site_url('admin/mahasiswa/tambah') ?>" class="btn btn-add" id="tambahMahasiswaBtn">+ Tambah Mahasiswa</a>
    </div>
    <table id="mahasiswaTable">
        <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Tahun Masuk</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
        const mahasiswaData = <?= $mahasiswa ?>;
    </script>
</body>
</html>      