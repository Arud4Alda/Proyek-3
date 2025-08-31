<!DOCTYPE html>
<html>
<body>
    <?php
        //php tidak bersifat sensitif di dalam penulisan perintah
        ECHO "hello world!<br>"; 
        echo "hello world!<br>"; 
        EcHo "hello world!<br>"; 

        //php sensitif di dalam penulisan variabel
        $nama = "alda";
        echo $nama."<br>";
        //echo $NAMA"<br>";
        //echo $NaMa"<br>";

        //variabel php tidak dideklarasika dengan tipe datanya
        $x = 5;
        $y = "alda";
        var_dump($x);
        echo "<br>";
        var_dump($y);
        echo "<br>";
        //variabel php seperti variabel lain yang bisa global, lokal dan static.

        //menampilakn ke layar
        echo "Hello<br>";
        echo("Hello<br>");
        print "Hello<br>";
        print("Hello<br>");
        echo "<h2>PHP is Fun!</h2><br>";
        print "<h2>PHP is Fun!</h2><br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        echo '<h2>' . $txt1 . '</h2><br>';
        echo "<p>Study PHP at $txt2</p><br>";
        print "<h2>$txt1</h2><br>";
        print '<p>Study PHP at ' . $txt2 . '</p><br>';

        //string php nisa kutip 1 atau 2
        $z = "lalala lilili";
        $w = "lululu";
        echo "bernyanyi $z<br>";
        echo 'bernyanyi $z<br>';

        echo strlen("Hello world!") . "<br>";         // panjang string
        echo str_word_count("Hello world!") . "<br>";// jumlah kata
        echo strpos("Hello world!", "world") . "<br>";// posisi kata
        echo strtoupper($z) . "<br>";
        echo strtolower($z) . "<br>";
        echo str_replace("lilili", "lululu", $z) . "<br>";
        echo strrev($z) . "<br>";
        echo trim($z) . "<br>";

        $zz = explode(" ", $z);
        print_r($zz);
        echo "<br>";

        $a = $z . " " . $w;
        echo $a . "<br>";
        $b = "$z $w";
        echo $b . "<br>";
        echo substr($z, 7, 6) . "<br>"; // ambil sebagian string
        echo substr($z, 7) . "<br>";
        //memasukan karakter secara legal bisa menggunakan tanda "\"

        //is_float mengecek apakah float
        //is_infinite mengecek apakah infinite
        //is_nan mengecek apakah bukan angka
        //is_numeric mengecek apakah numeric
        //intval mengembalikan nilai integer dari suatu variabel

        //math mengasilkan nilai phi
        echo(pi()) . "<br>";
        echo(min(0, 150, 30, 20, -8, -200)) . "<br>"; // minimum
        echo(max(0, 150, 30, 20, -8, -200)) . "<br>"; // maksimum
        echo(abs(-6.7)) . "<br>"; // absolut
        echo(sqrt(64)) . "<br>"; // akar kuadrat
        echo(round(0.60)) . "<br>"; // pembulatan
        echo(rand(0, 100)) . "<br>"; // random

        //constanta
        define("GREETING", "Welcome to POLBAN");
        echo GREETING . "<br>";
        const GREETING2 = "Welcome to POLBAN!";
        echo GREETING2 . "<br>";

        //untuk operator php sama seperti operator bahasa lainnya
    ?>
</body>
</html>