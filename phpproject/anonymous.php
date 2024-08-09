<!DOCTYPE HTML>
<html>
    <head>
        <title>anonymous for PHP</title>
    </head>

    <body>
        <?php
            $name = function($first, $last)
            {
                return("$first $last");
            };
            echo $name ("Bharathi","ragav").'<br>';


            function add ($a, $b) //user function
            {
                $c=$a + $b;
                return $c;
            }
            echo "5+5= ".add(5,5).'<br>';
            echo "100+500 = ".add(100,500).'<br>';

            function mark($tamil,$eng,$math,$sci,$s_sci) //user function
            {
                $total_mark = $tamil+$eng+$math+$sci+$s_sci;
                return $total_mark;
            };
            echo "John 10th Mark = ".mark(89,69,89,95,96).'<br>';
            echo "dummy 10th Mark = ".mark(85,77,82,86,93).'<br>';

            function hsc_mark($tamil, $eng, $math, $chy, $phy, $comp) //user function
            {
                $total_marks = $tamil+ $eng+ $math+ $chy+ $phy+ $comp;
                return $total_marks;
            };
            echo "kangu 12th Mark = ".hsc_mark(86,79,95,70,85,92).'<br>';

            $number=5;
            function mul(&$num)
            {
                $num *=10;
                $num+=1;
            }
            $multiplication = mul ($number);
            echo $number .'<br>';

            $sample=35;
            function mult(&$nump)
            {
                $nump*=7;
            };
            $multip = mult($sample);
            echo $sample .'<br>';

            $dummpy=35;
            function divc(&$value)
            {
                $value/=7;
            };
            $multip = divc($dummpy);
            echo $dummpy .'<br>';
        ?>
    </body>
</html>