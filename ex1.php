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
	
$a = [];
for ($i=1; $i <= 100 ; $i++) { 
	$a[] = $i ;
}
echo implode($a, ' ') ;

echo "<br>";
echo "<br>";



$number2 = range(0, 100);
echo "<pre>" ;
print_r($number2);
echo "</pre>" ;

echo "<br>";
echo "<br>";

$b = [];
for ($i=0; $i <= 100 ; $i++) { 
	if ($i % 2 <> 0) {
		$b[] = $i ;
	}
}
echo implode($b, ' ');

echo "<br>";
echo "<br>";


$c = [];
for ($i=0; $i <= 100 ; $i++) { 
		if ($i % 3 == 0) {
			$c[] = '('.$i.')' ; 
		}
			else {
				$c[] = $i ;
			}
		}
echo implode($c, ' ')	
	
?>



</body>
</html>
