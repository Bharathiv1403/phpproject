<!DOCTYPE html>
<html>
<body>

<pre>
<?php  
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

var_dump($fruits);

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

var_dump($cars);

$fruits = array("Apple", "Banana", "Cherry");
//array_push($fruits, "Orange", "Kiwi", "Lemon");
$fruits[] = ["Orange", "Kiwi", "Lemon"];

var_dump($fruits);

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

var_dump($cars);
?>
</pre>

</body>
</html>
