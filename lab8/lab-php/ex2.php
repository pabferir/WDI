<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <title>PHP example 2</title>
</head>
<body>
<h1>PHP example 2</h1>
<p>
<?php
    $n1 = 10;
    $n2 = 20;

    echo 'In this example, we are using two variables: $n1 and $n2';
    echo "<br/>";
    echo "and their values are: $n1 and $n2";
    echo "<br/>";
    echo "As you can see, in the first sentence (above), variables included in single quotes are NOT evaluated.";
	echo "In the second sentence, variables are included within double quotes. So they ARE evaluated.";
    		
	// Fill in your own code where you see // >>>
	// You will need to edit out "// >>>" to run the code)
	
    echo "<br/>";
    //Task 1: write a piece of code that displays the value of the first variable. The output should be: The value of n1 is: 10
    // >>> echo ...
	echo $n1;
    echo "<br/>";
    //Task 2: write a piece of code that displays the value of the second variable. The ouptut should be: The value of n2 is: 20
    // >>> echo ...
	echo $n2;
    echo "<br/>";
    //Task 3: write a piece of code that calculates and displays the sum of the two variables. 
    //The output should be: the sum of n1 and n2 is: 30. 
    //Hint: you will have to concatenate the output message with the value of ($n1 + $n2).
    // >>> echo ...
	echo $n1 + $n2;
?>
</p>
</body>
</html>