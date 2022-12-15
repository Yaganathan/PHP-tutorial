<!-- <html>
    <body>
        Email: <?php echo ($_POST["email"]); ?><br>
        Password: <?php echo ($_POST["password"]); ?><br>
    </body>
</html> -->
<?php

$conn = new mysqli("127.0.0.1", "root", "", "tutorial");
if($conn->connect_error===true){
    die("DB is not connected");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "select * from users where email='" . $_POST["email"] . "' and Password ='" . md5($_POST["password"])."'";
    // echo $sql;
$run = $conn->query($sql);
if ($run->num_rows > 0){
    echo "user available";
  } else {
    echo "user not available";
  }
}

  $conn->close();

?>