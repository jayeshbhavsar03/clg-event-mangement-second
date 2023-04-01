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
    <title>products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">


</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- show products  -->
    <section class="products">

<h1 class="title">all extension activitys</h1>

<div class="box-container">
<div class="row22">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Activity Name</th>
                            <th>Duration</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>About</th>
                            <th>Date</th>
                            <th>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					$i = 1;
					$query="SELECT * FROM `activity` WHERE `act_type`='3'";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['act_name']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['place']; ?></td>
                        <td><?php echo $row['about']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><a href="upload.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['act_name']; ?>">upload documents</a></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
</div>


</section>

        


    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>