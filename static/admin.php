<!DOCTYPE HTML>
<html>
<head>
    <title>JobsBG</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/upload.css">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="../css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="site-wrapper">
    
    <div class="navbar">
            <a href="../index.php">Home</a>
            <a href="../static/upload.php">Upload</a>
            <a class="right-bar" href="../auth/login.php">Log-in</a>
    </div>

    <header class="site-header">
        <h1 class="site-title"><a href="#">Job Offers</a></h1>
    </header>

    <?php
        require('../db.php');
        $query    = "SELECT * FROM `submission`";
        $result = mysqli_query($con, $query) or die($con->error);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <ul class="jobs-listing">
                <li class="job-card">
                    <div class="job-primary">
                        <h2 class="job-title"><a href="#"><?php echo ($row['title']) ?></a></h2>
                        <div class="job-meta">
                            <a class="meta-company" href="#"><?php echo ($row['company']) ?></a>
                        </div>
                    </div>
                    <div class="job-edit">
                        <a href="#">Accept</a>
                        <a href="#">Delete</a>
                    </div>
                    
                </li>
            </ul>
    <?php
            }
        }
    ?>

</div>

</body>
</html>