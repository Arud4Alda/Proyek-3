<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
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
    <h3 style="text-align: center;">Form Edit Mahasiswa</h3>
    <form method="post" action="<?= site_url('admin/mahasiswa/update/'.$mahasiswa['student_id']) ?>">

        <label>NIM:</label><br>
        <input type="text" value="<?= $mahasiswa['student_id'] ?>" disabled><br><br>

        <label for="full_name">Nama Lengkap:</label><br>
        <input type="text" name="full_name" id="full_name" value="<?= $mahasiswa['full_name'] ?>" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" value="<?= $mahasiswa['username'] ?>" required><br><br>

        <label for="entry_year">Tahun Masuk:</label><br>
        <input type="number" name="entry_year" id="entry_year" value="<?= $mahasiswa['entry_year'] ?>" required><br><br>

        <button type="submit" style="background-color: #007bff; color: white; border: none; width: 100px; border-radius: 5px;">Update</button>
    </form>
    </div>
</body>
</html>
