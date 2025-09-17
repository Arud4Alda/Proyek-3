<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
    <style>
         body { font-family: 'New Courier', monospace; margin:0; padding:0; }
        .header { background-color: #36816c; color:#fff; padding:15px; text-align:center; }
        .menu { background:#f5f2e7; padding:10px; text-align:center; }
        .menu a { margin:0 10px; text-decoration:none; color:#36816c; }
        .content { padding:20px; min-height:300px; }
        .footer { background:#36816c; color:#fff; text-align:center; padding:10px; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Website Akademik Polban</h1>
    </div>

    <?php
        $role = session()->get('role');
    ?>
    <div class="menu">
        <?php if ($role === 'admin'): ?>
            <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
            <a href="<?= base_url('admin/mahasiswa') ?>">Daftar Mahasiswa</a>
            <a href="<?= base_url('admin/course') ?>">Daftar Course</a>
            <a href="<?= base_url('logout') ?>">Logout</a>
        <?php elseif ($role === 'students'): ?>
            <a href="<?= base_url('mahasiswa/dashboard') ?>">Dashboard</a>
            <a href="<?= base_url('mahasiswa/courses') ?>">Daftar Course</a>
            <a href="<?= base_url('mahasiswa/mycourses') ?>">Mycourse</a>
            <a href="<?= base_url('logout') ?>">Logout</a>
        <?php endif; ?>
    </div>

    <div class="content">
        <?= $content ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> Politeknik Negeri Bandung <br> Teknik Komputer Dan Informatika<br>2025</p>
    </div>

</body>
</html>