	<?php
	require 'includes/header.php';
	require 'config/config.php';
	include 'includes/header-section.php';
	if (!isset($_SESSION["login_user"]))
	   {  
	   	  echo $_SESSION["login_user"];
	      header("location: index.php");
	   }
	?>
	 <div class="main-content">
	 	<div class="search-container">
	 	<div class="inline-element pull-left">
		 	<form method="post" action="" class="search-form">
		 			<input type="text" name="keyword" placeholder="Search here by clinic Number" required/>
		 			<input type="submit" value="search" class="btn">
		 	</form>
	   </div>
	 	<div class="inline-element pull-right">
	 		<a href="users.php">Get All Users</a> |
	 		<a href="welcome.php">Go back</a> |
	 		<a href="controllers/logout.php">Log out</a>
	    </div>
	    </div><hr>
	    <div class="list-container">
	    	<?php
	    	$keyword = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            	$keyword = check_input($_POST["keyword"]);
	    	    $sql = "SELECT * FROM user WHERE clinic_number = '$keyword'";
                $result = $conn->query($sql);

			if ($result->num_rows > 0) { ?>
			    <h3>Search Results For: <?php echo $keyword; ?></h3>
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
			    ?> </table><?php
			} else {
			    echo "<p class='msg'>0 results found</p>"; 
			}
			$conn->close();
		   }
            ?>
	    </div>
	    </div>

	 </div>
	 <?php 
require 'includes/footer.php';
?>
