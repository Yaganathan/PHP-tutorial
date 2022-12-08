<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            Name:<input type="text" name="name"><br>
            E-mail:<input type="email" name="email"><br>
            Password:<input type="password" name="pass"><br>
            <input type="submit">
        </form>
    </body>
</html>