
<?php
$startdate = strtotime("Friday");
$enddate = strtotime("+10 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d l", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>
<br><br>
<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<br><br>
<?php
$a = strtotime("May 05");
$b = ceil(($a - time()) / 60 / 60 / 24);
echo "We have " . $b . "days until May 05";
?>