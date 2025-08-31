<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    //while
    $i = 1;
    while ($i < 6) 
    {
        echo $i"<br>";
        $i++;
    }

    //do...while
    $j = 1;
    do 
    {
        echo $j"<br>";
        $j++;
    } while ($j < 6);

    //for
    for ($k = 1; $k < 6; $k++) 
    {
        echo "The number is: $k <br>";
    }

    //foreach
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) 
    {
        echo "$value <br>";
    }

    ?>
</body>
</html>