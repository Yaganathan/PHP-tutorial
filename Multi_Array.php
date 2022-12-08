<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
 echo count($cars) ;
 echo "<br>";

for ($row = 0; $row < count($cars); $row++) {
  echo "<b>Row number $row</b>";
  echo "<ul>";
  for ($col = 0; $col < count($cars[$row]); $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}

foreach ($cars as $car) {
	function search($find,$car) {
		return (array_search($find,$car));
    	}
    	//$names=array("aaa","bbb","ccc","ddd");
  
    	$find="Saab";
		echo ($find." is at position ");
    	echo (search($find,$car));
}

?>

</body>
</html>
