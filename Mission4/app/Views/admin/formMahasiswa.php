<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <div class="form-box">
    <h3 style="text-align: center;">Form Tambah Mahasiswa</h3>
    <form id="mahasiswaForm" method="post" action="<?= site_url('admin/mahasiswa/simpan') ?>" novalidate>
        <div id="formStatusMessage"></div>
        <div class="formlabel">
        <div class="forminput">
        <label for="student_id">NIM:</label><br>
        <input type="text" name="student_id" id="student_id" required><br><br>

        <label for="full_name">Nama Lengkap:</label><br>
        <input type="text" name="full_name" id="full_name" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"required><br><br>

        <label for="entry_year">Tahun Masuk:</label><br>
        <input type="number" name="entry_year" id="entry_year" required><br><br>

        <!-- role otomatis "student" -->
        <input type="hidden" name="role" value="students">

        <button type="submit"  class="btn btn-edit">Simpan</button>
        </div>
        </div>
    </form>
</body>
</html>
