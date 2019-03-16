<!DOCTYPE html>
<html>
<head>
	<title>ex1.php</title>
</head>
<body>
	<h1>This is my first php test</h1>
<?php 
for ($x=0; $x <=100 ; $x++) { 
	echo " ".$x." " ;
}

echo "<br>";
echo "<br>";

for ($x=0; $x <=100 ; $x++) { 
	echo "$x <br>";
}

echo "<br>";
echo "<br>";

for ($x=1; $x <=99 ; $x++) { 
	if ($x % 2 <> 0) {
		echo " ".$x." " ;
	}
}

echo "<br>";
echo "<br>";
for ($x=1; $x <= 100 ; $x++) { 
	if ($x % 3 == 0) {
		echo " (".$x.") " ;
	}	else {
			echo " ".$x." " ;
		}
	}	
	
?>



</body>
</html>
