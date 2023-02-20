<?php
    session_start();
    if(isset($_SESSION['message'])) {
       $message = $_SESSION['message'];
       echo "<article class='flash-message'>".$message."</article>";
   }
   unset($_SESSION['message']);
?>
