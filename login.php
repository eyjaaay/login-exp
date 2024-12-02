<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
		session_destroy();
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
		session_destroy();
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
				
            	// Redirect based on user role
                if ($row['role'] === 'admin') {
                    header("Location: home.php");  // Redirect admin to home.php
                } else if ($row['role'] == 'teacher') {
                    header("Location: teacher.php");  // Redirect teacher to teacher.php
                } else if ($row['role'] == 'student') {
                    header("Location: student.php");  // Redirect student to student.php
                } else {
                    // If role is not recognized, log the user out and show an error
                    session_unset();
                    session_destroy();
                    header("Location: index.php?error=Unknown role");
                }
            }else{
				header("Location: index.php?error=Incorect User name or password");
				session_destroy();
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
			session_destroy();
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}