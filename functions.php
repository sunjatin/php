<?php
function pdo_connect_mysql() {
    $server="localhost";
	$username="root";
	$password="root";
	$database="phpcrud";
    try {
    	return new PDO('mysql:host=' . $server . ';dbname=' . $database . ';charset=utf8', $username, $password);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Title</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
            <a href="create.php"><i class="fas fa-pen"></i>Add</a>
            <a href="login-page.php"><i class="fas fa-contact"></i>Login</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>