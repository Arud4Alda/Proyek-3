<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <div class="form-box">
    <h3 style="text-align: center;">Form Edit Mahasiswa</h3>
    <form id="mahasiswaEditForm" method="post" action="<?= site_url('admin/mahasiswa/update/'.$mahasiswa['student_id']) ?>" novalidate>
        <div id="formStatusMessage"></div>
        <div class="formlabel">
        <div class="forminput">
        <label>NIM:</label><br>
        <input type="text" value="<?= $mahasiswa['student_id'] ?>" disabled><br><br>

        <label for="full_name">Nama Lengkap:</label><br>
        <input type="text" name="full_name" id="full_name" value="<?= $mahasiswa['full_name'] ?>" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" value="<?= $mahasiswa['username'] ?>" required><br><br>

        <label for="entry_year">Tahun Masuk:</label><br>
        <input type="number" name="entry_year" id="entry_year" value="<?= $mahasiswa['entry_year'] ?>" required><br><br>

        <button type="submit" class="btn btn-edit">Update</button>
        </div>
        </div>
    </form>
    </div>
</body>
</html>
