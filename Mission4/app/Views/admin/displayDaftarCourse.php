<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <div style="text-align:right; margin-bottom:10px;">
        <a href="<?= site_url('admin/course/tambah') ?>" class="btn btn-add" id="tambahCourseBtn">+ Tambah Course</a>
    </div>
    <table id="courseTable">
        <thead>
        <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
        const coursesData = <?= $courses ?>;
    </script>
</body>
</html>
