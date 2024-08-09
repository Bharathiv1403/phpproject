<!DOCTYPE HTML>
<html>
    <head>
        <title>While & Do while methods for PHP</title>
    </head>

    <body>
        <?php
            // for ($a=1; $a<=10; ++$a)
            // {
            //     echo $a. '<br>';
            // }
            $name = 'SagaSoft is the company location is Villupuram';

            for ($i = 0; $i < strlen($name); $i++) 
            {
            echo $name[$i] . '<br>';
            }

        ?>
    </body>
</html>