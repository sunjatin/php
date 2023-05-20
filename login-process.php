<?php
session_start();

$users = [
	[
		"email" => "fulan@mail.com",
		"password" => "1212",
		"name" => "fulan"
	],
	[
		"email" => "fulanbinfulan@mail.com",
		"password" => "1213",
		"name" => "fulan bin fulan"
	]
];

if(isset($_SESSION['isLoggedIn'])){
	$isLoggedIn = $_SESSION['isLoggedIn'] ? true : false;
}else{
	$isLoggedIn = false;
}



if($isLoggedIn){
	echo "User already login"; 
}else{
	
	$postedEmail= isset($_POST['email']) ? $_POST['email'] : null;
	$postedPassword= isset($_POST['password']) ? $_POST['password'] : null;
	
	foreach($users as $user){
		
		if($postedEmail == $user['email']){
			$passwordValid = $postedPassword ==  $user['password'];
			
			if($passwordValid){
				$_SESSION["email"] = $user['email'];
				$_SESSION["name"] = $user['name'];
				$_SESSION["isLoggedIn"] = true;
				
				echo "Login Success";
			}else{
				echo "incorrect password";
			}
			
			break;
		}else{
			echo "incorrect email </br>";
		}
	}
}