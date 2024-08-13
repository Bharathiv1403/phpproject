
<!-- sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->

<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
// sort($cars);
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}


$numbers = array(4, 6, 2, 22, 11);
// sort($numbers);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
// ksort(($age));
// rsort($age); not working names so this place no use function

foreach($age as $x => $x_value) {
  echo "Name=" . $x . ", age=" . $x_value;
  echo "<br>";
}


$age = array("Bharathi"=>"21", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>

