<?php
session_start();
require("../config/config.php");

$name = $password = $title = $firstname = $middlename = $lastname = $gender = $date = $nic_number = $clinic_number = $p_address = $home_phone_number = $mobile_form_number = $email = $remarks = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = check_input($_POST["title"]);
    $firstname = check_input($_POST["firstname"]); 
    $middlename = check_input($_POST["middlename"]); 
    $lastname = check_input($_POST["lastname"]); 
    $gender = check_input($_POST["gender"]); 
    $date_of_birth = check_input($_POST["date"]); 
    $nic_number = check_input($_POST["nic_name"]); 
    $clinic_number = check_input($_POST["clinic_number"]); 
    $p_address = check_input($_POST["p_address"]); 
    $home_phone_number = check_input($_POST["home_phone_number"]); 
    $mobile_form_number = check_input($_POST["mobile_form_number"]); 
    $email = check_input($_POST["email"]); 
    $remarks = check_input($_POST["remarks"]); 


    $sql = "INSERT INTO user (title, firstname, middlename, lastname, gender, dob, nic, clinic_number, address, 	h_phone_num, m_phone_num, email_address, remarks) VALUES('$title', '$firstname', '$middlename', '$lastname', '$gender', '$date_of_birth', '$nic_number', $clinic_number, '$p_address', '$home_phone_number', '$mobile_form_number', '$email', '$remarks')";  

        if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
              header("location: ../users.php");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
      
    // If result matched $myusername and $mypassword, table row must be 1 row
		
    $conn->close();
  
}


