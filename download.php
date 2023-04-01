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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <style>
    select {
        border: 1px solid;
        padding: 5px;
    }

    .input-sub {
        padding: 5px;
        background: var(--red);
        color: #7d22b9;
    }
    .image{
        width: 30%;
    display: flex;
    margin: auto;
    }
    p{
        margin: 2rem 0rem;
    font-size: 2rem;
    border: 2px solid;
    padding: 1rem;
    }
    </style>
</head>

<body>

    <?php include 'user_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">

        <h4 style="text-align: center;font-size: 1.5rem;text-transform: capitalize;padding: 1rem;">activity name</h4>
        <h1 class="title"><?php echo htmlspecialchars($_GET["name"]); ?></h1>

        <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;">activity details</h4>
        <div class="row2">

            <!-- Activity Details -->
            <div class="row22">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name of Activity.</th>
                            <th>Date of Events</th>
                            <th>No of Student Participted</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					$i = 1;
					$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] . "' ";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['act_name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <div class="box">
                                <?php 
                                    $select_messages = mysqli_query($conn, "SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "'") or die('query failed');
                                    $number_of_messages = mysqli_num_rows($select_messages);
                                 ?>
                                <?php echo $number_of_messages; ?>
                            </div>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- Activity Details -->

        <!-- Activity about -->
        <?php
					$i = 1;
					$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] . "' ";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>
        <p><?php echo $row['about']; ?></p>
        <?php } ?>
        <!-- Activity about -->

        <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;"><?php echo htmlspecialchars($_GET["name"]); ?> activity Photo</h4>
        <!-- Activity photo -->
        <?php
					$i = 1;
					$query="SELECT * FROM `activity` WHERE `id`='" . $_GET['id'] . "' ";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>
        <img class="image" src="uploaded_img/<?php echo $row['image']; ?>" alt="">
        <?php } ?>
        <!-- Activity photo --> 


        <!-- Registered Students List View -->
        <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;">registered student list in this
            activity</h4>
        <div class="row2">

            <div class="row22">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>PRN No.</th>
                            <th>Branch</th>
                            <th>Student Name</th>
                            <th>Year</th>
                            <th>Topic Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					$i = 1;
					$query="SELECT * FROM `reg` WHERE `id`='" . $_GET['id'] . "' ";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['prn']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['topic_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- Registered Students List View -->


         <!-- attendance of Students List View -->
         <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;">registered student attendance list in this
            activity</h4>
        <div class="row2">

            <div class="row22">
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Roll No.</th>
                            <th>PRN No.</th>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Attendances</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
					$i = 1;
					$query="SELECT * FROM `attendance` WHERE `act_id`='" . $_GET['id'] . "' ";
					$result=$conn->query($query);
					while($row = mysqli_fetch_array($result)) { ?>

                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['roll_no']; ?></td>
                        <td><?php echo $row['prn']; ?></td>
                        <td><?php echo $row['stu_name']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['att']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- attendance of Students List View -->
       

    </section>

    <div style="margin: 5rem;text-align: center;display: flex;flex-direction: column;">
        <a href="download_btn.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>&name=<?php echo htmlspecialchars($_GET["name"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Event Details Report</a>
        <a href="download_btn1.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>&name=<?php echo htmlspecialchars($_GET["name"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Student Registration Details Report</a>
        <a href="download_btn2.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>&name=<?php echo htmlspecialchars($_GET["name"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Attendances Report</a>
    </div>


    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>