<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <title>PHP example 1</title>
</head>
<body>
<h1>PHP example 0</h1>
<?php
    $s1 = "This is a ";
    $s2 = "short sentence.";
    $break = "<br/>";

    // this shows you how to concatenate strings:
    $s3 = $s1.$s2.$break;
    echo $s3;

    // the previous line is equivalent to the following one:
    echo $s1.$s2.$break;
	
	echo substr($s1, 1, 4);
    echo $break;
	
	echo substr($s2, 3, 4);
    echo $break;

	$s3 = strtoupper($s3);
	echo $s3; 
    echo $break;
?>
</body>
</html>