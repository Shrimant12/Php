//Associative array in php example

<?php

$student1['name'] = "Shirmant";
  $student1['Percentage'] = "71";
    $student1['Contact'] = "9702287506";


$student2['name'] = "Steve";
  $student2['Percentage'] = "72";
    $student2['Contact'] = "9702287504";


$student3['name'] = "Elon";
  $student3['Percentage'] = "74";
    $student3['Contact'] = "9702287503";

$student4['name'] = "Mark";
  $student4['Percentage'] = "75";
    $student4['Contact'] = "9702287507";

$student5['name'] = "Billy";
  $student5['Percentage'] = "78";
    $student5['Contact'] = "9702287501";

print_r($student1);
  echo"<br><br>";

print_r($student2);
  echo"<br><br>";

print_r($student3);
  echo"<br><br>";

print_r($student4);
  echo"<br><br>";

print_r($student5);
  echo"<br><br>";

//Shrimant
echo $student1['name']."'s Percentage is : ".$student1['Percentage'];
  echo "<br>";
    echo $student1['name']."'s Contact number is : ".$student1['Contact'];
      echo "<br><br>";

//Steve
echo $student2['name']."'s Percentage is : ".$student2['Percentage'];
  echo "<br>";
    echo $student2['name']."'s Contact number is : ".$student2['Contact'];
      echo "<br><br>";

//Elon
echo $student3['name']."'s Percentage is : ".$student3['Percentage'];
  echo "<br>";
    echo $student3['name']."'s Contact number is : ".$student3['Contact'];
      echo "<br><br>";

//Mark
echo $student4['name']."'s Percentage is : ".$student4['Percentage'];
  echo "<br>";
    echo $student4['name']."'s Contact number is : ".$student4['Contact'];
      echo "<br><br>";

//Billy
echo $student5['name']."'s Percentage is : ".$student5['Percentage'];
  echo "<br>";
    echo $student5['name']."'s Contact number is : ".$student5['Contact'];
      echo "<br><br>";

?>
