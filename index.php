<!DOCTYPE HTML>
<html>
<head>
    <title>JobsBG</title>
    <link rel="stylesheet" href="style/navbar.css" type="text/css">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="./css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="./index.php">Home</a>
    <a href="./static/upload.php">Upload</a>
    <a class="right-bar" href="./auth/login.php">Log-in</a>
</div>

<div class="site-wrapper">

    <header class="site-header">
        <h1 class="site-title">Job Offers</h1>
    </header>

    <?php
        require('./db.php');
        $query = "SELECT * FROM `submission`";
        $result = mysqli_query($con, $query) or die($con->error);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            while($row = $result->fetch_assoc()) { 
                if($row['state'] == 'accepted'){ ?>
                    <ul class="jobs-listing">
                    <li class="job-card">
                        <div class="job-primary">
                            <h2 class="job-title"><a href="./static/single.php"><?php echo ($row['title']) ?></a></h2>
                            <div class="job-meta">
                                <a class="meta-company"><?php echo ($row['company']) ?></a>
                            </div>
                        </div>
                    </li>
                </ul>
<?php
                }
            }
        }
    ?>

</div>



</body>
</html>