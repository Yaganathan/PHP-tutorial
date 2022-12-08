<?php
$conn= new mysqli("127.0.0.1","root","","tutorial");
if($conn->connect_error===TRUE){
    die("data is not connected");
}

$sql="select * from users";
$result=$conn->query($sql);
// print_r($run->num_rows());

if ($result->num_rows > 0) {
    echo "<table border=1>
    <tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();

?>