<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
      <a href="admin_page.php" style="color:#000;" class="logo"><span style="font-size: 2rem;">कर्मण्यता College Activity Portal</span></a>

         <nav class="navbar">
            <a href="user_page.php">Home</a>
            <a href="act1.php">Curricular</a>
            <a href="act2.php">Co-Curricular</a>
            <a href="act3.php">Extension</a>
         </nav>

         <div class="icons">
            <a href="profile.php"><div class="fas fa-user"></div></a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="index.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>