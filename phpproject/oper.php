<html>
    <head>
        <title>Operators methods for PHP</title>
    </head>

    <body>
        <?php
            /*Operators: 
                1. Arithmetic operator
                2. Relational operator 
                3. Logical operator
                4. Increment and Decrement operator
                5. Short-hand assignment operator */

                /*1. Arithmetic operator:
                    Addition +
                    Subtraction -
                    Multiplication *
                    Division /
                    Modulus % */

                /* 2. Relational operator:
                    Greater than >
                    Less than <
                    Greater than equal to >=
                    Less than equal to <=
                    Equal to ==
                    Not equal to != */

                /* 3. Logical operator:
                    AND &&
                    OR ||
                    NOT ! */

                /* 4. Increment and Decrement operator:
                    a++
                    ++a
                    a--
                    --a */

                /* 5. Short-hand assignment operator:
                    This is used to simplify the coding
                    a+=10
                    a=+10 */ 

                print_r("1 => Arithmetic operator".'<br>');
                
                $a = 5431294;
                $b = 2541496;

                $c = $a + $b. '<br>';
                $c.=$a - $b. '<br>';
                $c.=$a * $b. '<br>';
                $c.=$a / $b. '<br>';
                $c.=$a % $b. '<br>';
                echo $c ;

                print_r(" 2 => Relational operator:".'<br>');

                $a = 544;
                $b = 254;

                if ($a>$b)
                {
                    echo "$a is Greater than  is $b".'<br>';
                }
                else
                {
                    echo "$b is greaer than $a".'<br>';
                } 


                $a = 100;
                $b = 254;

                if ($a<$b)
                {
                    echo "$a is Less than  is $b".'<br>';
                }
                else
                {
                    echo "$b is less than $a".'<br>';
                }


                $a = 100;
                $b = 100;

                if ($a==$b)
                {
                    echo "$a and $b is Equal".'<br>';
                }
                else
                {
                    echo "$b and $a is Not Equal".'<br>';
                }

                $a = 100;
                $b = 500;

                if ($a!=$b)
                {
                    echo "$a and $b is  Not Equal".'<br>';
                }
                else
                {
                    echo "$b and $a is Equal".'<br>';
                } 

                print_r("3 => Logical operator".'<br>');

                $a = 25;
                $b = 55;

                if ($a>=55 && $b>=55)
                {
                    echo "Welcome Computer".'<br>';
                }
                else
                {
                    echo "Bye Computer".'<br>';
                } 

                $a = 25;
                $b = 55;

                if ($a>=55 || $b>=55)
                {
                    echo "Welcome Computer".'<br>';
                }
                else
                {
                    echo "Bye Computer".'<br>';
                }

                print_r("4 => Increment and Decrement operator.<br>");

                $value = 5;               
                $value++;
                echo $value. '<br>';
                ++$value;
                echo $value.'<br>';

                $number=$value++ *2;
                echo $number .'<br>';
                echo $value .'<br>';

                $number=++$value *2;
                echo $number. '<br>';

                $number=$value-- *2;
                echo $number. '<br>';
                echo $value. '<br>';

                $number=--$value *2;
                echo $number. '<br>';
                echo $value. '<br>';

                print_r("5 => Short-hand assignment operator".'<br>');

                $a = 25;

                $a+=2;
                    echo $a. '<br>';
                $a-=2;
                    echo $a. '<br>';
                $a*=2;
                    echo $a. '<br>';
                $a/=2;
                    echo $a. '<br>';
        ?>
    </body>
</html>