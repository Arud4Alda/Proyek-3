<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <div class="form-box">
    <h3 style="text-align: center;">Form Edit Mata Kuliah</h3>
    <form id="courseEditForm" method="post" action="<?= site_url('admin/course/update/'.$course['courses_id']) ?>" novalidate>   
        <div id="formStatusMessage"></div>
        <div class="formlabel">
        <div class="forminput"> 
        <label for="courses_name">Nama Mata Kuliah:</label><br>
        <input type="text" name="courses_name" id="courses_name" value="<?= $course['courses_name'] ?>" required><br><br>

        <label for="credits">SKS:</label><br>
        <input type="number" name="credits" id="credits" value="<?= $course['credits'] ?>" required><br><br>

        <button type="submit" class="btn btn-edit">Update</button>
        </div>
        </div>
    </form>
    </div>
</body>
</html>
