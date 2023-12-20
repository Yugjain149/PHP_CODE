<html>
 <body>
 
 <?php
 /* First method to associate create array. */
 $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" =>
500);
 
 echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
 echo "Salary of qadir is ". $salaries['qadir']. "<br />";
 echo "Salary of zara is ". $salaries['zara']. "<br />";
 
 /* Second method to create array. */
 $salaries['mohammad'] = "high";
 $salaries['qadir'] = "medium";
 $salaries['zara'] = "low";
 
 echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
 echo "Salary of qadir is ". $salaries['qadir']. "<br />";
 echo "Salary of zara is ". $salaries['zara']. "<br />";
 ?>
 
 </body>
</html>
This will produce the following result −
Salary of mohammad is 2000
Salary of qadir is 1000
Salary of zara is 500
Salary of mohammad is high
Salary of qadir is medium
Salary of zara is low
Multidimensional Arrays
A multi-dimensional array each element in the main array can also be an array. And each 
element in the sub-array can be an array, and so on. Values in the multi-dimensional array are 
accessed using multiple index.
Example
In this example we create a two dimensional array to store marks of three students in three 
subjects −
This example is an associative array, you can create numeric array in the same fashion.
Live Demo
<html>
 <body>
 
 <?php
 $marks = array(
 "mohammad" => array (
 "physics" => 35,
 "maths" => 30,
 "chemistry" => 39
 ),
 
 "qadir" => array (
 "physics" => 30,
 "maths" => 32,
 "chemistry" => 29
 ),
 
 "zara" => array (
 "physics" => 31,
 "maths" => 22,
 "chemistry" => 39
 )
 );
 
 /* Accessing multi-dimensional array values */
 echo "Marks for mohammad in physics : " ;
 echo $marks['mohammad']['physics'] . "<br />";
 
 echo "Marks for qadir in maths : ";
 echo $marks['qadir']['maths'] . "<br />";
 
 echo "Marks for zara in chemistry : " ;
 echo $marks['zara']['chemistry'] . "<br />";
 ?>
 
 </body>
</html>