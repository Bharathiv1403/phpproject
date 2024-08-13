<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2].'<br>';

//Double or Single Quotes
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"].'<br>';

//Excecute a Function Item
function dummy() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, "dummy");
  
  echo $myArr[2]().'<br>';
  echo $myArr[0].'<br>';


function myFunction() {
    echo "I come from a function!".'<br>';
    echo "this is my car name is Volvo <br>";
}
  
$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");
  
$myArr["message"]();
$myArr["car"];



//Loop Through an Associative Array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

//Loop Through an Indexed Array
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>  

</body>
</html>