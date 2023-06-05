<?php
	include_once 'pdo.php';
	session_start();
	$name = $_POST['uname'];
	$email = $_POST['email'];
	$issue = $_POST['issue'];
	$comment = $_POST['comment'];
	
	if(isset($_POST['submit'])) {
		//Validate inputs
		if ($name === '' || $email === '' || $issue === '') {
			echo "<script>alert('All fields are required')</script>";
		} 
		elseif ($email !== '' && strpos($email,'@') === false) {
			echo "<script>alert('Please enter a valid email')</script>";
		}
		else {
			//echo "<script>alert('All fine!')</script>";
			$sql = "INSERT INTO user_info (name, email, issue, comment) VALUES (:nm, :em, :iss, :com)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
				':nm' => $name,
				':em' => $email,
				':iss' => $issue,
				':com' => $comment
			));
			if($sql) {
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['issue'] = $issue;
				$_SESSION['comment'] = $comment;
				echo "<script>alert('success')</script>";
				header('location: success.php');
			}
		}
		
	}
	