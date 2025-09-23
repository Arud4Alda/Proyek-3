<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mata Kuliah Yang Telah Di Ambil</h2>
    <table id="mycourseTable">
        <thead>
        <tr>
            <th>NIM</th>
            <th>Mata Kuliah</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
    const myCoursesData = '<?= $myCoursesData ?>';
    </script>
</body>
</html>
