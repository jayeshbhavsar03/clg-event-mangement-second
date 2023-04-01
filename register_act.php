<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
// $id = $_SESSION['id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['submit'])){

    $roll_no = $_POST['roll_no'];
    $prn = $_POST['prn'];
   $branch = $_POST['branch'];
   $name = $_POST['name'];
   $year = $_POST['year'];
   $topic_name = $_POST['topic_name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $id = $_POST['id'];
   $user_id = $_POST['user_id'];

   $check = mysqli_query($conn, "SELECT * FROM `reg` WHERE name = '$name' AND id = '$id'") or die('query failed');

   if(mysqli_num_rows($check) > 0){
      $message[] = 'already registered!';
   }else{
      mysqli_query($conn, "INSERT INTO `reg`(id, user_id, roll_no, prn, branch, name, year, topic_name, email, contact) VALUES('$id', '$user_id', '$roll_no', '$prn', '$branch', '$name', '$year', '$topic_name', '$email', '$contact')") or die('query failed');
      $message[] = 'Succesfully register!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <section class="products" style="padding:0;">
        <div class="form-container">
            <form action="" method="post">
                <h3>register now in <?php echo htmlspecialchars($_GET["name"]); ?> activity</h3>
                <input type="number" name="roll_no" placeholder="enter roll number" required class="box">
                <input type="number" name="prn" placeholder="enter prn number" required class="box">
                <input type="text" name="branch" placeholder="enter your branch name" required class="box">
                <input type="text" name="name" value="<?php echo $_SESSION['user_name']; ?>" placeholder="enter your name" required class="box">
                <input type="text" name="year" placeholder="enter your year" required class="box">
                <input type="text" name="topic_name" placeholder="enter your topic name" required class="box">
                <input type="email" name="email" placeholder="enter your email id" required class="box">
                <input type="number" name="contact" placeholder="enter your phone number" required class="box">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="submit" name="submit" value="register now" class="btn">
            </form>
        </div>
    </section>



    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>