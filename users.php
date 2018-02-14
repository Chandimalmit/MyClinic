<?php
session_start();
require("includes/header.php");
require("config/config.php");
include 'includes/header-section.php';

if (!isset($_SESSION["login_user"]))
	   {  
	      header("location: index.php");
   }
?>
<div class="main-content">
	<div class="search-container">
	 	<div class="inline-element pull-left">
		 	<form method="post" action="" class="search-form">
		 			<input type="text" name="keyword" placeholder=" Search here by Clinic Number" required/>
		 			<input type="submit" class="btn" value="Search">
		 	</form>
	   </div>
	 	<div class="inline-element pull-right">
	 		<a href="users.php">Get All Users</a> |
	 		<a href="welcome.php">Go back</a> |
			<a href="controllers/logout.php">Log out</a>
	    </div>
	    </div><hr>
	<?php

    $sql = "SELECT * FROM user";
 
      $result = $conn->query($sql);

			if ($result->num_rows > 0) { ?>
			<div class="list-container">
				<h3>List of All Members</h3>
				    <table>
				    	<tr>
				    	<th>User Id</th>
					    <th>Name</th>
					    <th>Gender</th> 
					    <th>Date of Birth</th>
					    <th>NIC Number</th>
					    <th>Clinic Number</th>
					    <th>Address</th>
					    <th>Contact Number</th>
					    <th>Contact Mobile Number</th>
					    <th>Email Address</th>
					    <th>Remarks</th>
                        </tr>
				    		<?php
			    while($row = $result->fetch_assoc()) { ?>
			    	    <tr>
                        <td><?php echo $row["id"]; ?></td> 
                        <td><?php echo $row["firstname"].$row["middlename"].$row["lastname"]; ?></td>
                        <td><?php echo $row["gender"] ?></td>
                        <td><?php echo $row["dob"]; ?></td>
                        <td><?php echo $row["nic"]; ?></td>
                        <td><?php echo $row["clinic_number"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["h_phone_num"]; ?></td>
                        <td><?php echo $row["m_phone_num"]; ?></td>
                        <td><?php echo $row["email_address"]; ?></td>
                        <td><?php echo $row["remarks"]; ?></td>
                        </tr>
			        <?php
			    }
			    ?>
			    </table></div><?php
			} else {
			    echo "<p class='msg'>0 results found</p>"; 
			}
			$conn->close();
		   
?>
</div>
<?php 
require 'includes/footer.php';
?>