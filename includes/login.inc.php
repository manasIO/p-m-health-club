<?php

session_start();

if(isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	
$username_a = mysqli_real_escape_string($conn, $_POST['username_a']);
$password_a = mysqli_real_escape_string($conn, $_POST['password_a']);
 
 
 //error handlers
 //check if inputs are empty
 if(empty($username_a) || empty($password_a)) {
    header("Location: ../index.phph?login=empty");
    exit(); 
 
 } else {
   $sql = "SELECT * FROM login WHERE username_a='$username_a'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if($resultCheck < 1) {
	   
	   header("Location: ../index.phph?login=error");
       exit();   
   } else {
	   
	   if($row = mysqli_fetch_assoc($result)) {
		  //de=hashing the password
		  $hashedPwdCheck = password_verify($password_a, $row['password_a']) ;
	      if($hashedPwdCheck == false) {
			  
			  header("Location: ../index.phph?login=error");
              exit(); 
		  } elseif ($hashedPwdCheck == true) {
			  
			  //log in the user here
			//   $_SESSION['u_id'] = $row['user_id'];
			//   $_SESSION['u_first'] = $row['user_first'];
			//   $_SESSION['u_last'] = $row['user_last'];
			//   $_SESSION['u_email'] = $row['user_email'];
			//   $_SESSION['u_uid'] = $row['user_uid'];
			   header("Location: ../index.php?login=success");
              exit();  
			  
		  }
	   }
	   
   }
   
   
 }
 
} else {
	
header("Location: ../index.phph?login=error");
exit(); 
	
	}
