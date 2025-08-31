<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    //while
    echo "while<br>";
    $i = 1;
    while ($i < 6) 
    {
        echo $i . "<br>";
        $i++;
    }

    //do...while
    echo "<br> do...while<br>";    
    $j = 1;
    do 
    {
        echo $j . "<br>";
        $j++;
    } while ($j < 6);

    //for
    echo "<br> for<br>";    
    for ($k = 1; $k < 6; $k++) 
    {
        echo "The number is: $k <br>";
    }

    //foreach
    echo "<br> foreach<br>"; 
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) 
    {
        echo "$value <br>";
    }

    ?>
</body>
</html>