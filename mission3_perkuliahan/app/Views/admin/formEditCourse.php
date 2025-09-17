<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <style>
        body { 
            font-family: 'New Courier', monospace;
            background-color: #f5f2e7;
        }
        .login-box {
            max-width: 400px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #464444ff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            background-color: #f5f2e7;
        }
        label { display: block;  }
        input { width: 370px; padding: 5px; }
    </style>
</head>
<body>
    <div class="login-box">
    <h3 style="text-align: center;">Form Edit Mata Kuliah</h3>
    <form method="post" action="<?= site_url('admin/course/update/'.$course['courses_id']) ?>">    
        <label for="courses_name">Nama Mata Kuliah:</label><br>
        <input type="text" name="courses_name" id="courses_name" value="<?= $course['courses_name'] ?>" required><br><br>

        <label for="credits">SKS:</label><br>
        <input type="number" name="credits" id="credits" value="<?= $course['credits'] ?>" required><br><br>

        <button type="submit" style="background-color: #007bff; color: white; border: none; width: 100px; border-radius: 5px;">Update</button>
    </form>
    </div>
</body>
</html>
