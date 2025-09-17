<!DOCTYPE html>
<html>
<head>
    <title>Daftar List Mahasiswa</title>
    <style>
        body { font-family: 'new courier', monospace;         
            background-color: #f5f2e7;
        }
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td { padding: 10px; }
        th {text-align: center;}
        tr:nth-child(even) { background-color: #c3c3c3ff;}
        h2{text-align: center;}
    </style>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
        </tr>
        <?php foreach ($course as $c): ?>
        <tr>
            <td><?= $c['courses_id'] ?></td>
            <td><?= $c['courses_name'] ?></td>
            <td><?= $c['credits'] ?></td>
            <td>
                <a href="<?= base_url('mahasiswa/enroll/'.$c['courses_id']) ?>">
                    Enroll
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    </body>
</html>
