<?php
 // echo "Hello World";
//Assignment No 1 =============================
echo" Assignment 1  <br> ";

for($number = 10000; $number <= 10050; $number++) 
{
   echo "{$number} ";
}

 echo"<br>";

 for($number = 10000; $number >= 9950; --$number) 
{
   echo "{$number} ";
}
echo" <br>  <br>";

 //Assignment No 2 =============================
 echo"  Assignment 2 <br>";

for($x = 1; $x <= 500; $x++)
{

    if($x%3==0 && $x%4==0)
       echo $x ." ";

} 

echo" <br>  <br>";
//==========================================

// Assignment No 3 ===========================

echo" Assignment 3 <br>";

for($tarif = 1; $tarif <= 100; $tarif=$tarif+3)
{
    
    if($tarif % 11 == 0)
    {
       echo "Found: ".$tarif;
       break;
    }
    else
    echo "Searching....";
}

// Assignment No 4 ===========================
 

echo" <br>  <br>";

echo" Assignment 4 <br>";
for($x = 1;$x<=10; $x++)
{
   echo $x*2 ." <br>";
}
echo" <br>  <br>";


for($x = 1;$x<=10; $x++)
{
   echo $x*3 ." <br>";
}
echo" <br>  <br>";

for($x = 1;$x<=10; $x++)
{
   echo $x*4 ." <br>";
}
echo" <br>  <br>";

for($x = 1;$x<=10; $x++)
{
   echo $x*5 ." <br>";
}
echo" <br>  <br>";


// Assignment No 5 ===========================

echo" Assignment 5 <br>";

for($x = 1; $x <= 100; $x=$x+6)
{

    if($x%5==0){
     
      echo $x;
      break;
    }
    else
    echo "Not Found..";
      
} 


?>