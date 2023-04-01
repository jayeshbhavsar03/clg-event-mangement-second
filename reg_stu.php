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
    </style>
</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">

        <h4 style="text-align: center;font-size: 1.5rem;text-transform: capitalize;padding: 1rem;">activity name</h4>
        <h1 class="title"><?php echo htmlspecialchars($_GET["name"]); ?></h1>

        <h4 style="text-align: center;font-size: 2rem;color: var(--red);margin: 1rem;">registered student list in this
            activity</h4>
        <div class="row2">

            <!-- B.Sc. I.T. -->
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
        <!-- B.Sc. I.T. -->


    </section>

    <!-- <div style="margin: 5rem;text-align: center;display: flex;flex-direction: column;">
        <a href="download_btn.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>&name=<?php echo htmlspecialchars($_GET["name"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Event Details Report</a>
        <a href="download_btn1.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Student Registration Details Report</a>
        <a href="download_btn2.php?id=<?php echo htmlspecialchars($_GET["id"]); ?>" style="padding: 1.4rem;font-size: 2rem;background: var(--red);color: #7d22b9;margin: 1rem 30rem;">Download Attendances Report</a>
    </div> -->


    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>