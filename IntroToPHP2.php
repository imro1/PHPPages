<!DOCTYPE html>
<html>
<!-- don't ever do this again: mix M, V, and C -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="" method="post">
	<label>First Name</label>
	<input type="text" name="fistName"><br>
	<label>Last Name</label>
	<input type="text" name="lastName"><br>
	<label>NewsLaetter</label>
	<input type="checkbox" name="newsLetter">Yes! I want to receive the newsletter!<br>
	<input type="submit" name="action" value="Send">
</form>
</body>
</html>
<?php

///get input data from the HTTP request
//data sent through the GET method
if(isset($_GET['name']))
echo $_GET['name'];

echo '<pre>';
echo $_GET['name'] ?? '';

foreach($_GET as $key => $value){
	echo "$key=>$value<br>";
}
var_dump($_GET);

//get to the POST data with $_POST
//POST data is sent in the http headers

echo 'POST DATA:<br>';
var_dump($_POST);


echo "REQUEST_METHOD:", $_SERVER ["REQUEST_METHOD"];

if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo " THIS WAS SENT THROUGH THE HTTP HEADERS!";
}