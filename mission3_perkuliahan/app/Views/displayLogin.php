<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { 
            font-family: 'New Courier', monospace;
            background-color: #505050c8;
        }
        .login-box {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #464444ff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label { display: block; margin: 10px 0 5px; }
        input { width: 370px; padding: 8px; }
        .error { color: red; margin: 10px 0; }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: white; ">Sistem Akademik Sederhana</h1>
    <div class="login-box">
        <h2 style="text-align: center;">Login</h2>

        <?php if(session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <form action="<?= base_url('/login/auth') ?>" method="POST">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>

            <br><br>
            <input type="submit" value="Login" style="background-color: #007bff; color: white; border: none; width: 100px; border-radius: 5px;">
        </form>
    </div>
</body>
</html>
