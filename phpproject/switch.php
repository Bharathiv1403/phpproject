<!DOCTYPE HTML>
<html>
    <head>
        <title>Operators methods for PHP</title>
    </head>

    <body>
        <?php
            $a=90;
            switch($a)
            {
                case ($a>=90):
                    echo "Grade A";
                    break;
                case ($a>=70):
                    echo "Grade B";
                    break;
                case ($a>=50):
                    echo "Grade C";
                    break;
                case ($a>=35):
                    echo "Grade D";
                    break;
                default:
                    echo "Fail";
            }

        ?>
    </body>
</html>