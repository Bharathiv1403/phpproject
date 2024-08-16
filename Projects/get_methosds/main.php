<!-- 
<!DOCTYPE HTML>
<html>  
<body>

<form action="demo.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> -->



<!-- <!DOCTYPE html>
<html>
<body>

<a href="demo_phpfile.php?subject=PHP&web=vglug.org">Test $GET</a>

</body>
</html> -->

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
