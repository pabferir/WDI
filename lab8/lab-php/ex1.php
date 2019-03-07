<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <title>PHP example 1</title>
</head>
<body>
<h1>PHP example 1</h1>
<?php
    $s1 = "This is a ";
    $s2 = "short sentence.";
    $break = "<br/>";

    // this shows you how to concatenate strings:
    $s3 = $s1.$s2.$break;
    echo $s3;

    // the previous line is equivalent to the following one:
    echo $s1.$s2.$break;
	
	// Fill in your own code where you see // >>>
	// You will need to edit out "// >>>" to run the code)

    //Task 1: Using the substr function, write a piece of code that displays the first four characters of the string variable $s1.
    // >>> echo ...
	echo substr($s1, 1, 4);
    echo $break;
    //Task 2: Using the substr function, write a piece of code that displays the third and fourth character of the string variable $s2.
    // >>> echo ...
	echo substr($s2, 3, 4);
    echo $break;
    //Task 3: Using the strtoupper function, write a piece of code that displays the string $s3 in upper case.
    // >>> echo ...
	echo strtoupper($s3);
    echo $break;
    //Task 4: Using the strlen function, write a piece of code that displays the number of characters of $s3. How do you explain the value displayed? If you can't explain it, ask your tutor.
    //echo ...
	echo strlen($s3);
    echo $break;
    //Task 5: Using the function ucwords, write a piece of code that displays $s3 where all first letters of each word in $s3 has been capitalised.
    // >>> echo ...
	echo ucwords($s3);
    echo $break;
    //Task 6: Using the function str_replace, write a piece of code that displays $s3 in which each �s� have been replaced with a �z�.
    // >>> echo ...
	echo str_replace('s', 'z', $s3);
?>
</body>
</html>