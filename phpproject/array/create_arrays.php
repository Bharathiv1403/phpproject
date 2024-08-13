<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$names = array("vglug", "foundation", "villupuram",567);
var_dump($names).'<br>';

//Multiple line array
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
  ];
  var_dump($cars).'<br>';

  //Trailing Comma
  $cars = [
    "Volvo",
    "BMW",
    "Tata",
  ];
  var_dump($cars).'<br>';

  //Array Keys
  $furits = [
    0 => "apple",
    1 => "banana",
    2 =>"orange",
    3 =>4586,
  ];
  
  var_dump($furits).'<br>';

  $myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];
  
  var_dump($myCar).'<br>';

  //Declare Empty Array

  $cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars).'<br>';

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

var_dump($myCar).'<br>';

//Mixing Array Keys
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr).'<br>';
?>  

</pre>
</body>
</html>