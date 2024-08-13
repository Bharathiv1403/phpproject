<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);


$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);


$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);


$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[2]);
var_dump($cars);


$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);


$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);


$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);


$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
?>  

</pre>
</body>
</html>
