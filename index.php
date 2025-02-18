<?php

//class Person {  public $name;  public $age; }
//$person = new Person(); 
//$person->name = "Alice"; 
//$person->age = 25; 

//print_r($person);
////QUESTION1 Person Object ( [name] => Alice [age] => 25 )

//var_dump('Hello'); 
//var_dump([1,2,3]); 
//var_dump($person);
////QUESTION2 string(5) "Hello" array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } object(Person)#1 (2) { ["name"]=> string(5) "Alice" ["age"]=> int(25) }
//$name = 'Brad';  
//$age = 40;  
//$hasKids = true;  
//$cashOnHand = 10.5;  

//var_dump($cashOnHand);
////QUESTION3 float(10.5)
//echo "$name is $age years old"; 
//echo "${name} is ${age} years old"; 
//echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

////Question 4: What character is used to concatenate strings? "."

//Question 5: What is the output of echo HOST;?
////localhost

//Question 6: How will you define in PHP the variable PI with value 3.1416?
////define('PI', 3.1416);

//Question 7: What is the output of echo $numbers[3] + $numbers[4];? 
////4 5

//$colors = ["red", "green", "blue"];
//echo $colors[2];

//Question 8: What is the output of echo $colors[3];? 
////error
//$person = [ 
//    "first_name" => "John", 
//    "last_name" => "Doe", 
//    "age" => 30 
//   ]; 
//   echo $person["first_name"]; 
   
//Question 9: What are the keys in $person array? 
////"first_name", "last_name", "age"
//$colors = [ 
//    1 => 'red', 
//    2 => 'green', 
//    3 => 'blue', 
//   ]; 
//   $colors[2] = 'white';
//   echo $colors[2];
//Question 10: In PHP, how will you change the green into white in $colors  array? 
////$colors[2] = 'white';

//$hex = [ 
//    'red' => '#f00', 
//    'green' => '#0f0', 
//    'blue' => '#00f', 
//   ]; 
//   echo $hex['red'];
//Question 11: What is the output of echo $hex['red'];? 
////#f00

//$matrix = [ 
//    [1, 2, 3], 
//    [4, 5, 6], 
//    [7, 8, 9] 
//   ]; 
//   echo $matrix[1][2];
//Question 12: What is the output of echo $matrix[1][2];? 
////6

//$person1 = [ 
//    'first_name' => 'Maeve', 
//    'last_name' => 'Reid', 
//    'email' => 'reid@gmail.com', 
//   ]; 
//   // Array of people 
//   $people = [ 
//    $person1, // [...$person1] 
//    [ 
//    'first_name' => 'John', 
//    'last_name' => 'Doe', 
//    'email' => 'john@gmail.com', 
//    ], 
//    [ 
//    'first_name' => 'Jane', 
//    'last_name' => 'Doe', 
//    'email' => 'jane@gmail.com', 
//    ], 
//   ]; 
//   
//Question 13: What is the output of echo $people[0]['first_name'];?
////maeve

//Question 14: What is the output of echo $people[2]['email'];?
////jane@gmail.com

//$fruits = ['apple', 'banana', 'orange'];
//$chunkedArray = array_chunk($fruits, 2);
//var_dump($chunkedArray)
//Question 15: What is the output of var_dump($chunkedArray);
////array(2) { [0]=> array(2) { [0]=> string(5) "apple" [1]=> string(6) "banana" } [1]=> array(1) { [0]=> string(6) "orange" } }

$posts = [1]; 
if (!empty($posts[0])) { 
    echo $posts[0]; 
   } else { 
    echo 'There are no posts'; 
   } 
   
?>