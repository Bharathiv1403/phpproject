<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$phone = array("Oppo", "Vivo", "Apple_iphone");
$phone[1] = "Sumsung";
var_dump($phone);

$history = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$history["year"] = 2024;
var_dump($history);

$furit = array("Apple", "Orange", "Mango");
foreach ($furit as &$x) {
  $x = "Giwi";
}
unset($x);
var_dump($furit);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);
?>  

</pre>
</body>
</html>