<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>

<?php include 'profile_header.php'; ?>


<div class="heading">
   <h3>Profile Page</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/profile.png" style="border-radius: 50%;" alt="">
      </div>

      <div class="content" style="    flex: 0 0 16rem;">
         <h3><?php echo $_SESSION['user_name']; ?></h3>
         <h4 style="font-size:2rem;"><?php echo $_SESSION['user_email']; ?></h4>
         <a href="index.php" class="delete-btn">logout</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>