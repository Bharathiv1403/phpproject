<!DOCTYPE HTML>
<html>
    <head>
        <title>Operators methods for PHP</title>
    </head>

    <body>
        <?php
            $a=9;
            if ($a>=10)
            {
                echo "The number is".$a;
            }
            echo "Condition is Fail"; 

            echo '<br>';

            $b=11;
            if ($b>=10)
            {
                echo "The number is".$a;
                echo '<br>';
            }
            else
            {
                echo "Condition is Fail"; 
                echo '<br>';
            }
            
            $b = 18;
            if ($b>=18)
            {
                echo "The person eligible for voteing";
                echo '<br>';
            }
            else{
                echo "The person Not eligible for Voting";
                echo '<br>';
            }


            $day = 3;
            if ($day == 1)
            {
                echo "Monday";
            }
            elseif ($day == 2)
            {
                echo "Tuesday";
            }
            elseif ($day == 3)
            {
                echo "Wednesday";
            }
            else{
                echo "Days Not Matching";
            }


        ?>
    </body>
</html>