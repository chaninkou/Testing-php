<html>
<head><title>Testing</title></head>
<body>
<?php
#array
$people = array("Alex", "michael","emily");

#loop
foreach ($people as $person){
	echo $person . ' ' . "</br>";
}

#print stuf
echo "Hi there " . $people[2] . "</br>";

#true or false on login
$loggedIn = true;
if($loggedIn == true){
	echo "You are logged in" . "</br>";
} else{
	echo "log in please" . "</br>";
}

#time
date_default_timezone_set('UTC');
echo date('h:i:s:u a, l F jS Y e') . "</br>";

#From the html
$usersName = $_POST['username'];
$moviesName = $_POST['movie'];
$age = $_POST['age'];

echo $usersName . "</br>";
echo $moviesName . "</br>";
echo $age . "</br>";

#Using EOD to print a long string
$str = <<<EOD
The customers name is
$usersName and they watch $moviesName
with the age of $age</br>
EOD;

echo $str;

#define is for a number that won't change
define('PI', 3.14);

echo "PI is " . PI;

#adding
echo "</br> 5 + 2.3 = " . (integer) (5+2.5);

#shortcut
$randomNumber = 6;

echo "</br>++randomNumber = " . ++$randomNumber . "</br>";
echo "randomNumber++ = " . $randomNumber++ . "</br>";







?>
</body>
</html>