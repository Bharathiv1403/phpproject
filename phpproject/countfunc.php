<!DOCTYPE HTML>
<html>
    <head>
        <title>countfunction for PHP</title>
    </head>

    <body>
        <?php
            $number = array(1,8,3,5,4,-5,6,7);
            $strubgs = array("dog","cat","bird","fish");
            $mixed = array(0,"john",-6.5,"andy",array(0,2),NULL,6);
            $url = "something.com/products/shoes/athletic/index.php";

            echo count($number).'<br>';
            echo count($strubgs).'<br>';
            echo count($mixed).'<br>';
            
            echo count($number).'<br>';
            echo strlen($url);
        ?>
    </body>
</html>