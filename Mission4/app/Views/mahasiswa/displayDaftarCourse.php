<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
</head>
<body>    
    <h2>Daftar Mata Kuliah</h2>
    <form id="enrollForm" action="<?= base_url('mahasiswa/enroll') ?>" method="post">
    <table id="courseTable">
        <thead>
        <tr>
            <th>Aksi</th>
            <th>ID</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
        </tr>
        </thead>
        <tbody>
        </tbody> 
    </table>
    <div style="margin-top: 20px;">
            <h4>Total SKS yang dipilih: <span id="totalSks">0</span></h4>
            <button type="submit" class="btn btn-add">Enroll Course</button>
        </div>
    </form>
    <script>
        // Data dikirim dari controller sebagai JSON
        const coursesData = <?= $coursesJson  ?>;
    </script>
    </body>
</html>
