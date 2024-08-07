<html>
    <head>
        <title>Array methods for PHP</title>
    </head>

    <body>
        <?php
        //Array
            // $name = array("bharathi","Ragav");
            // $name=["bharathi","Ragav"];
            // $name[]="Computer";
            // print_r($name);
            // echo $name [1];

        //Associate array
            $name=[
                'name1'=> 'Bharathi',
                'name2'=>'Ragav'
            ];
            $name['name3']="dummy";
            // print_r($name)
            echo "{$name['name3']} computer education ";
            echo $name['name3']." computer education";

        ?>
    </body>
</html>