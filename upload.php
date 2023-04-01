<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <div class="heading">
        <h1 style="    text-align: center;
    margin: 3rem 0rem;">View or Print <?php echo htmlspecialchars($_GET["name"]); ?> activity students list and upload
            attendence, image as well as report </h1>
    </div>

    <section class="about">
        <h3>Studnet List</h3>
        <?php
		$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] ."'";
		$result=$conn->query($query);
		while($row = mysqli_fetch_array($result)) { ?>
        <a href="reg_stu.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['act_name']; ?>">view list</a>
        <?php } ?>

        <h3>Upload Attendance</h3>
        <?php
		$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] ."'";
		$result=$conn->query($query);
		while($row = mysqli_fetch_array($result)) { ?>
        <a href="import.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['act_name']; ?>">Upload</a>
        <?php } ?>
        
        <h3>Upload Report</h3>
        <?php
		$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] ."'";
		$result=$conn->query($query);
		while($row = mysqli_fetch_array($result)) { ?>
        <a href="import_report.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['act_name']; ?>">Upload</a>
        <?php } ?>
    </section>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>