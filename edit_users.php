<?php
$id = $_GET['id'];
echo $id;

$conn = new mysqli("127.0.0.1", "root", "", "tutorial");
if($conn->connect_error===true){
    echo "Data is not connected" . $conn->connect_error;
}

$sql="select * from users where id=".$id;
$result=$conn->query($sql);
$run=($result->fetch_assoc());


$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
      
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  
    $sql="update users set name='$name',email='$email',website='$website',comment='$comment',gender='$gender' where id=$id";
      // echo $sql;
      $insert = $conn->query($sql);
      if($insert){
        echo "data is updated";
      }else{
        echo "data is not updated";
      }
  }
  
  
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
$checked = "";

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=".$id;?>">  
  Name: <input type="text" name="name" value="<?php echo $run['name']; ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $run['email']; ?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $run['website']; ?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" ><?php echo $run['comment']; ?> </textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?= ($run['gender']=='female') ? "checked" : ""; ?> value="female">Female
  <input type="radio" name="gender" <?= ($run['gender']=='male') ? "checked" : ""; ?> value="male">Male
  <input type="radio" name="gender" <?= ($run['gender']=='other') ? "checked" : ""; ?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>