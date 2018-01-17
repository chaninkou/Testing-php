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

# using if statement
if(5==5){
	echo '5 = 5';
}else{
	echo '5 != 5';
}

# elseif 
echo "</br>";
$apple = 5;
$orange = 10;
if(($apple > 25) && ($orange > 9)){
	echo '30% Discount';
} elseif(($apple > 30) || ($orange > 8)){
	echo '15% Discount';
} elseif(!(($apple < 4))){
	echo '5% Discount';
}else{
	echo 'nothing';
}

// condition ? value if true : value if false

$smallestNumber = (10 < 15) ? 10 : 15;

echo "</br>" . $smallestNumber . "</br>";

// switch statement
switch($usersName){
	case "Mike" :
		echo "Hello Mike" . "</br>";
		break;
	default :
		echo "Hello Valued Customer" . "</br>";
		break;
}

// while loop
$num = 0;

while($num < 5){
	echo ++$num . ',';
}

echo "</br>";
for($num = 0; $num <= 5; $num++)
{
	echo $num;
	if($num != 5){
		echo ', ';
	} else{
		break;
	}
}

//array
$friend = array('Alex', 'michael', 'emily');

echo 'emily is ' . $friend[2];

$friend[4] = 'jeff';

//foreach
foreach($friend as $person){
	echo $person . ',';
}

// sort($yourarray)
// SORT_NUMERIC or , SORT_STRING
// asort($yourarray)
// ksort($yourarray)
$randomString = "            Random sentence         ";

// useful tools
echo "</br>" . strlen("$randomString") . "</br>";
echo strlen(ltrim("$randomString")) . "</br>";
echo strlen(rtrim("$randomString")) . "</br>";
echo strlen(trim("$randomString")) . "</br>";



?>
</body>
</html>