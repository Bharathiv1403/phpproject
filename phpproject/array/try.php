<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sample Page</title>
</head>
<body>
    <p class="top">Bharathi message</p>
    <button id="btnq" onclick="myFunction()">Click me</button>

    <?php
    echo "Sample PHP code";
    ?>

    <style>
        .top {
            color: blue;
            background-color: wheat;
            display: inline;
            
        }
    </style>

    <script>
        function myFunction() {
            alert("Your Network is poor");
        }
    </script>
    
</body>
</html>
