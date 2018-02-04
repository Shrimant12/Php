//function in php example.

<?php

$i=$_GET['value'];
$j=$_GET['name'];

function addition()
{
  $var1=20;
  $var2=10;
  $var3=$var1+$var2;

 echo "Addition is : ".$var3;
}

function substraction()
{
  $var1=20;
  $var2=10;
  $var3=$var1-$var2;

 echo "Substraction  is : ".$var3;
}

function multiplication()
{
 $var1=20;
 $var2=10;
 $var3=$var1*$var2;

 echo "Multiplication is : ".$var3;
}

function division()
{
 $var1=20;
 $var2=10;
 $var3=$var1/$var2;

 echo "Division is : ".$var3;
}

function wishes($j)
{
    echo "<marquee> <font color=#ff0000 size=15 >";
    echo $j."  wishes you happy new year";
    echo "</font color>";
    echo "</marquee>";
}

switch ($i)
{
    case 1:
      addition();
        break;

    case 2:
      substraction();
        break;


    case 3:
      multiplication();
        break;


    case 4:
        division();
          break;

    case 5:
        wishes($j);
          break;

    default :
        echo "Invalid input";


}

?>
