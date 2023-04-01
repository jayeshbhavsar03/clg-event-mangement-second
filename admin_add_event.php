<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['add_event'])){

   $act_name = mysqli_real_escape_string($conn, $_POST['act_name']);
   $duration = $_POST['duration'];
   $time = $_POST['time'];
   $place = $_POST['place'];
   $about = $_POST['about'];
   $date = $_POST['date'];
   $act_type = $_POST['act_type'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select_event_name = mysqli_query($conn, "SELECT act_name FROM `activity` WHERE act_name = '$act_name'") or die('query failed');

   if(mysqli_num_rows($select_event_name) > 0){
      $message[] = 'event name already added';
   }else{
      $add_event_query = mysqli_query($conn, "INSERT INTO `activity`(act_name, duration, time, place, about, date, act_type, image) VALUES('$act_name', '$duration', '$time', '$place', '$about', '$date', '$act_type', '$image')") or die('query failed');

      if($add_event_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'event added successfully!';
         }
      }else{
         $message[] = 'event could not be added!';
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-products">
        <form action="" method="post" enctype="multipart/form-data">
            <h1 class="title">ADD ACTIVITYS</h1>
            <input type="text" name="act_name" class="box" placeholder="enter activity name" required>
            <input type="text" name="duration" class="box" placeholder="enter duration" required>
            <input type="time" name="time" class="box" required>
            <input type="text" name="place" class="box" placeholder="enter a place" required>
            <input type="textarea" name="about" class="box" placeholder="description about the activity" required>
            <input type="date" name="date" class="box" required>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
            <select name="act_type" placeholder="Enter type" class="form-control box">
                <option value="1">Curricular</option>
                <option value="2">Co-curricular</option>
                <option value="3">Extension</option>
            </select>
            <input type="submit" style="margin-top: 5rem;" value="add product" name="add_event" class="btn">
        </form>

    </section>

    <!-- product CRUD section ends -->



    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>