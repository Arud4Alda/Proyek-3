<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body style="background-color: #dadadac8;">
    <div class="login-box">
        <h2 style="text-align: center;">Login</h2>

        <?php //if(session()->getFlashdata('error')): ?>
            <!--<p class="error"><?//= session()->getFlashdata('error') ?></p>-->
        <?php //endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
             <div id="php-error-message" style="display:none;"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('success')): ?>
             <div id="php-success-message" style="display:none;"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form id="loginForm" action="<?= base_url('/login/auth') ?>" method="POST" nonvalidate>
        <div id="formStatusMessage"></div>    
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>

            <br><br>
            <input type="submit" value="Login" class="btn btn-edit">
        </form>
    </div>
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>
</html>
