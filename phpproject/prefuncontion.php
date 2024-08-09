<!DOCTYPE HTML>
<html>
    <head>
        <title>pre function contion for PHP</title>
    </head>

    <body>
        <?php
        
            // $name= " Conducting open week-end tech
            //     meetups to equip rural youth with coding
            //     and analytical skills through FOSS
            //     (Free and Open Source Softwares) technologies.
            //     Through this activity, we have equipped more than
            //     1000+ young minds. Through the coding activity we
            //     equip the rural youth and students to understand science,
            //     enhance their logical thinking to make them progressive.";

            // echo strlen($name).'<br>';
            // echo str_word_count($name).'<br>';

            // echo strlen("this is the php language").'<br>';
            // echo str_replace("study","learn","vglug is only study class and freedom class").'<br>';
            // echo str_replace("rural","youn rural",$name).'<br>';

            // $x='vglug foundation is the open source users';
            // echo ucwords($x).'<br>';
            // echo strtoupper($x).'<br>';

            // echo strtolower("VGLUG FOUNDATION").'<br>';

            // $emp_name=array("Bharathi",
            // "Senkathir",
            // "Tamil",
            // "Mohan");
            // sort($emp_name);

            // foreach($emp_name as $value) 
            // {
            //     echo "<li>$value</li>";
            // }

            $emp_name=array("Bharathi",
            "Senkathir",
            "Tamil",
            "Mohan");
            rsort($emp_name);

            foreach($emp_name as $value) 
            {
                echo "<li>$value</li>";
            }
        ?>
    </body>
</html>