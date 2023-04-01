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
         <a href="home.php" class="logo">कर्मण्यता <span style="font-size: 2.6rem;">College Activity Portal</span></a>

         <nav class="navbar">
            <a href="about.php">About Us</a>
            <a href="login.php">Student Login</a>
            <a href="login.php">Admin Login</a>
            <a href="login.php">User Login</a>
         </nav>
      </div>
   </div>

</header>