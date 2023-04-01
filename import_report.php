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
    <title>Upload Attendance</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <div class="heading">
        <h1 style="    text-align: center;
    margin: 3rem 0rem;">Upload <?php echo htmlspecialchars($_GET["name"]); ?> activity report</h1>
    </div>

    <section class="about">
        <form class="form-input" action="" method="post" enctype="multipart/form-data">
            <input type="file" class="input-form" name="excel" required value="">
            <button type="submit" class="input-btn" name="import">Import</button>
        </form>
        <?php
		if(isset($_POST["import"])){
			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = 'upload.php';
			</script>
			";
		}
		?>
    </section>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>