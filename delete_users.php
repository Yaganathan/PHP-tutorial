<?php
$id = $_GET['id'];
echo $id;

$conn = new mysqli("127.0.0.1", "root", "", "tutorial");
if($conn->connect_error===true){
    echo "Data is not connected" . $conn->connect_error;
}
$sql = "delete from users where id=$id";
$result=$conn->query($sql);
if($result){
    echo "deleted";
}else{
    echo "not deleted";
}

?>