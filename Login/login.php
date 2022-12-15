<html>
<body>

     <?php

    // $conn = new mysqli("127.0.0.1", "root", "", "tutorial");
    // if($conn->connect_error){
    //     echo "Server is not connectd" . $conn->connect_error;
    // }

    // $sql = "CREATE tabl ";
    // if ($conn->query($sql)){
    //     echo "Table is created";
    // }else{
    //     echo "Table is not created";
    // } 
    // if($conn->query($sql)===true){
    //     echo "DB is created";
    // }else{
    //     echo "DB is not connected" . $conn->error;
    // }
    // $conn->close();

    // $connec = new mysqli("127.0.0.1", "root", "", "userlogin");
    // if($connec->connect_error){
    //     echo "DB is connected" . $connec->connect_error;
    // }

    // $email = $password = "";

    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     if(empty($_POST["email"])){
    //         echo "Email is Required";
    //     }else{
    //         $email = $_POST["email"];
    //     }
    //     if(empty($_POST["password"])){
    //         echo "Password is Required";
    //     }else{
    //         $email = $_POST["password"];
    //     }
    // }
    ?>

    <form method="post" action="get_login.php">
        Email: <input type="email" name="email" >
        Password: <input type="password" name="password" ><br>
        <input type="submit" name="Submit">
    </form>
</body>
</html>