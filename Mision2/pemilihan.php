<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        /*syntak pemilihan if
          if (condition) {
                code to be executed if condition is true;
          } else {
                code to be executed if condition is false;
                 }
        */

        $t = date("H");
        if ($t < "10") 
        {
            echo "Have a good morning!<br>";
        } 
            elseif ($t < "20") 
            {
            echo "Have a good day!<br>";
            } 
                else 
                {
                echo "Have a good night!<br>";
                }

        /*syntak pemilihan if
         switch (expression) 
         {
            case label1:
                //code block
                break;
            case label2:
                //code block;
                break;
            case label3:
                //code block
                break;
            default:
                //code block
         }
        */
        $favcolor = "red";
        switch ($favcolor)
         {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
         }
    ?>
</body>
</html>