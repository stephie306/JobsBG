<html>
 <head>
  <title>PHP Test</title>
  <link rel="stylesheet" href="../style/navbar.css">
  <link rel="stylesheet" href="../style/upload.css">
 </head>
 <body>

 <div class="navbar">
        <a href="../index.php">Home</a>
        <a href="./static/upload.php">Upload</a>
        <a class="right-bar" href="../auth/login.php">Log-in</a>
</div>

<div class="container">
  <div class="R">
    <img class="img" src="../img/job1.jpg">
  </div>
  <div class="L">

<?php
    require('../db.php');
    if (isset($_REQUEST['title'])) {
        $title = stripslashes($_REQUEST['title']);
        $title = mysqli_real_escape_string($con, $title);
        $company = stripslashes($_REQUEST['company']);
        $company = mysqli_real_escape_string($con, $company);
        $salary = stripslashes($_REQUEST['salary']);
        $salary = mysqli_real_escape_string($con, $salary);
        $description = stripslashes($_REQUEST['description']);
        $description = mysqli_real_escape_string($con, $description);
        $query    = "INSERT into `submission` (title, company, salary, description)
                     VALUES ('$title', '$company', '$salary', '$description')";
        mysqli_query($con, $query);

        
    } else {
?>


  <form action="" method="post">
   
   <label class="label"><b>Title</b></label>
   <input type="text" placeholder="Enter Title" name="title" required>

   <label class="label"><b>Company</b></label>
   <input type="text" placeholder="Enter Company" name="company" required>

   <label class="label"><b>Salary</b></label>
   <input type="text" placeholder="Enter Salary" name="salary" required>

   <label class="label"><b>Description</b></label>
   <input type="description" placeholder="Enter Description" name="description" required>
   
   <div class="clearfix">
     <button type="submit" class="uploadbtn">Upload</button>
   </div>
  </form>

  
<?php
    }
?>

</div>
</div>



</body>
</html>