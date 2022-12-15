<html>
    <body>
<?php
$a = $b = $c = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['a']){
         $a = myfun($_POST['a']);
    }
    if($_POST['b']){
        $b = myfun($_POST['b']);
   }
  if($_POST['c']){
        $c = myfun($a + $b);
  }
}
function myfun($data){
    return $data;
}
?>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="a" value="<?php echo $a; ?>">
    <input type="text" name="b" value="<?php echo $b; ?>">
    <br>
    <input type="submit" value="Submit" name="submit"><br>
    <input type="text" name="c" value="<?php echo $c; ?>">
   </form>
   
    </body>
</html>