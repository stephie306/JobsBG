<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/upload.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="../css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <a href="../index.php">Home</a>
        <a href="../static/upload.php">Upload</a>
        <a class="right-bar" href="../auth/login.php">Log-in</a>
    </div>

	<div class="site-wrapper">
		<div class="job-single">
			<main class="job-main">

    <?php
        require('../db.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM `submission` WHERE `id`=$id";
        $result = mysqli_query($con, $query) or die($con->error);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <div class="job-card">
                    <div class="job-primary">
                        <header class="job-header">
                            <h2 class="job-title"><?php echo ($row['title']) ?></h2>
                            <div class="job-meta">
                                <a class="meta-company"><?php echo ($row['company']) ?></a>
                            </div>
                        </header>

                        <div class="job-body">
                        <?php echo ($row['description']) ?>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    ?>

			</main>
			<aside class="job-secondary">
				<div class="job-logo">
					<div class="job-logo-box">
						<img src="https://i.imgur.com/ZbILm3F.png" alt="">
					</div>
				</div>
				<a href="#" class="button button-wide">Apply now</a>
			</aside>
		</div>

	</div>

</body>
</html>