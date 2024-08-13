<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just try for php</title>
    <style>
        .error{color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $nameError = $emailError = $genderError = $websiteError = '';
    $name = $email = $gender = $comment = $website ='';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $nameError = "Name is required";
        }else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])){
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])){
            $website = '';
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])){
            $comment = '';
        } else{
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])){
            $genderError = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Validation Page</h2>
    <p><span class="error">* required faild</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name : <input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br>

        E-mail : <input type="text" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br><br>

        Website : <input type="text" name="website">
        <span class="error">* <?php echo $websiteError;?></span>
        <br><br>

        Comment : <textarea name="comment" rows="10" cols="50"></textarea>
        <br><br>

        Gender : 
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="other"> Other
        <span class="error"><?php echo $genderError;?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2> Your Details</h2>";
    echo $name.'<br>';
    echo $email.'<br>';
    echo $website.'<br>';
    echo $comment.'<br>';
    echo $gender.'<br>';
    ?>


</body>
</html>