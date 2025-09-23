<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <div class="form-box">
    <h3 style="text-align: center;">Form Tambah Mata Kuliah</h3>
    <form id="courseForm" method="post" action="<?= site_url('admin/course/simpan') ?>" novalidate>
        <div id="formStatusMessage"></div>
        <div class="formlabel">
        <div class="forminput">
        <label for="courses_id">Kode Mata Kuliah:</label><br>
        <input type="text" name="courses_id" id="courses_id" required><br><br>

        <label for="courses_name">Nama Mata Kuliah:</label><br>
        <input type="text" name="courses_name" id="courses_name" required><br><br>

        <label for="credits">SKS:</label><br>
        <input type="number" name="credits" id="credits" required><br><br>

        <button type="submit" class="btn btn-edit">Simpan</button>
        </div>
        </div>
    </form>
  </body>
</html>
