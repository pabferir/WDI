<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <title>PHP example 3</title>
</head>
<body>
<h1>PHP example 3</h1>
<p>
<?php
    $array1 = array('Joe', 'John', 'Jack', 'Jim');
    $n2 = 20;

    // Note the use of print_r here. If you don't understand it, look it up in the PHP manual.
    print_r($array1);
    echo "<br/>";   
 
	// Fill in your own code where you see // >>>
	// You will need to edit out "// >>>" to run the code)
 
    //Task 1: Write a piece of code that outputs the value of the first element of $array1
    // >>> echo ...
	echo $array1[0];
    echo "<br/><br/>";
    //Task 2: Using a for loop write a piece of code that outputs all the elements of the array, one element per line.
    // >>> for (...; ...; ...){
		// >>> echo ...
		// >>> echo "<br/>";
    // >>> }
	for($i = 0; $i <= sizeof($array1; $i++) {
		echo $array1[$i]
		echo "<br/>";
	}
    echo "<br/>";
    //Task 3: Using a foreach loop, write a piece of code that outputs all the elements of the array, one element per line.
    // >>> foreach (...){
		// >>> echo ...
		// >>> echo "<br/>";
    // >>> }
	foreach($array1 as $v) {
		echo $v;
	}
    echo "<br/>";
    //Task 4: Do the same as above, but this time, using a while loop.
      $count = 0;
      while ($count < sizeof($array1)){
		  echo $array1[$count];
		  $count++;
		  echo "<br/>"; 
    }

    echo "<br/>";
    //Task 5: Create an array called $array2 that contains the following key-value pairs:
    $array2 = array(
		firstName => 'John',
		lastName => 'Smith',
		email => 'john@smith.org',
		phone => '+441234567890',
		country => 'UK');
    print_r($array2);
    echo "<br/>";


    //Task 6: Using the array_keys function, write a piece of code that outputs the keys used in $array2.
    print_r(array_keys($array2));

    echo "<br/>";
    //Task 7: As for Task 5, except that you should display values instead of keys, using the function array_values
    print_r(array_values($array2));
	
    echo "<br/>";
    //Task 8: Write a piece of code that outputs the keys and values of $array2 in a table:
    // >>> ...
    foreach ($array2 as $key => $value){
		echo "<tr>";
        echo "<td>" . ++$key . "</td>\n<td>" . $value . "</td>";
        echo "</tr>";
    }

    echo "<br/>";
    //Task 9: Write a piece of code that outputs whether a given name represented by the variable $query is present in the array $array1.
    //This can be done using a loop, but you are asked to complete the task using the function array_search and an if/else statement.
    $query = 'John';
    if(array_search($query, $array1) !== FALSE) echo "$query is present in the array1";
	else echo "$query is not present in the array1";

?>
</body>
</html>