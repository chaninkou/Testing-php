<html>
<head><title>Testing</title></head>
<body>
<?php
#array
$people = array("Alex", "michael","emily");

#loop
foreach ($people as $person){
	echo $person . ' ';
}

#print stuf
echo "Hi there " . $people[2];

$loggedIn = true;
if($loggedIn == true){
	echo "You are logged in";
} else{
	echo "log in please";
}
?>
</body>
</html>