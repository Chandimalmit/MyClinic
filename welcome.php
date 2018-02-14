<?php
 session_start();
 require 'includes/header.php';
 include 'includes/header-section.php';

 if (!isset($_SESSION["login_user"]))
	   {  
	      header("location: index.php");
   }
 ?>
    <div class="main-content">
		<div class="link-section">
			<h2>Welcome</h2>
			<a class="register-btn" href="member.php">Existing Members</a> |
			<a class="register-btn" href="register.php">Create New Member</a> |
			<a class="register-btn" href="controllers/logout.php">Logout</a>
		</div>
    </div>
	<?php 
require 'includes/footer.php';
?>