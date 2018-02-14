<?php 
	session_start();
	require 'includes/header.php';
	include 'includes/header-section.php';
	if (!isset($_SESSION["login_user"]))
	   {  
	   	  echo $_SESSION["login_user"];
	      header("location: index.php");
	   }
?>

<div class="main-content">
	<div class="inline-element pull-right">
	 		<a href="welcome.php">Go back</a> |
	 		<a href="controllers/logout.php">Log out</a>
	</div>
	<div class="form-container">
		<h2>Register Here</h2>
	<form action="controllers/register_controller.php" method="post">
		<fieldset>
		 <div class="form-group">	
		<label>Title</label>
			<select name="title">
				<option value="mr">Please Select Title</option>
				<option value="Dr">Dr</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Rev">Rev</option>
			</select>
	    </div>

        <div class="form-group">
		    <label>First Name</label>
			<input type="text" name="firstname" required />
	    </div>

        <div class="form-group">
		    <label>Middle Name</label>
			<input type="text" name="middlename" />
	    </div>

         <div class="form-group">
		    <label>Last Name</label>
			<input type="text" name="lastname" required />
        </div>
        
        <div class="form-group">
        <select name="gender" required>
           <label>Gender</label>
        	<option>Male</option>
        	<option>Female</option>
        </select> 
    </div>

        <div class="form-group">
        	 <label>Date of Birth</label>
        	<input type="date" name="date" id="datepicker" required />
        </div>

        <div class="form-group">
        	<label>NIC Number</label>
        	<input type="text" name="nic_name" required />
        </div>

        <div class="form-group">
        	<label>Clinic Number</label>
        	<input type="text" name="clinic_number" required />
        </div>

         <div class="form-group">
        	<label>Permanant Address</label>
        	<input type="text" name="p_address" required />
        </div>

         <div class="form-group">
        	<label>Home Phone Number</label>
        	<input type="text" name="home_phone_number" />
        </div>

        <div class="form-group">
        	<label>Mobile Phone Number</label>
        	<input type="text" name="mobile_form_number" />
        </div> 

        <div class="form-group">
        	<label>Email Address</label>
        	<input type="email" name="email" required />
        </div>

         <div class="form-group">
        	<label>Remarks</label>
        	<textarea name="remarks"></textarea>
        </div>

        <div class="form-group">
        	<br><br><input type="submit" name="submit" class="btn" value="Submit" />
        </div>
      </fieldset>
	</form>
   </div>

</div>
<div class="sticky-footer">
 <?php 
require 'includes/footer.php';
?>
</div>