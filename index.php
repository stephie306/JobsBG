<!DOCTYPE HTML>
<html>
<head>
    <title>JobsBG</title>
    <link rel="stylesheet" href="style/navbar.css" type="text/css">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main>
    <div class="navbar">
        <a href="./index.php">Home</a>
        <a href="./static/upload.php">Upload</a>
        <a class="right-bar" href="./auth/login.php">Log-in</a>
    </div>

    <div class="home">
        <h1>JobsBG</h1>
    </div>
</main>

<?php
    require('./db.php');
    $query    = "SELECT * FROM `users`";
    $result = mysqli_query($con, $query) or die($con->error);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo ($row['username'] . " at " . $row['email'] . "</a><br><hr>");
        }
    }

?>

</body>
</html>