<?php
echo "<p> “Good morning, Dave” said HAL. </p>";
?>
<br>
<?php
echo "Area of a circle with radius 4: ";
$radius = 4;
$pi = 3.14;
$area = $pi*$radius*$radius;
echo $area;
?>
<br>

<?php
echo "Fahrenheit to Celsius: ";
$temp = 46;
$con= 5/9;
$cels = $temp - 32;
echo $cels;
?>
<br>

<?php
function countCharacters( $string )
{
   return preg_match_all( "/[A-Za-z]/", $string );
}
$string = " PHP is fun ";
echo "Number of characters in string \" PHP is fun \": ";
echo countCharacters ($string);
 ?>
<br>

<?php
$string = "WDWWLWWWLDDWDLL";
$s = strpos($string, "WWW");
$Seq = substr($string, $s+3, $s-4);
echo "First letter after sequence \"WWW\" in string \"WDWWLWWWLDDWDLL\": ";
echo $Seq;
 ?>
<br>

 <?php
 $string = "racecar";
 palindromeCheck($string);
 function palindromeCheck($string){
    echo "Is the string a palindrome? ";
   $string = strtolower($string);
   $rev = strrev($string);

   if ($string == $rev){
     echo "Yes!";
   }
   else{
     echo "No!";
   }
 }
 ?>
 <br>

 <?php
 $int = 7;
 checkEven($int);
 function checkEven($int){
 echo "The integer is ";
 if ($int % 2 ==0)
  echo "even!";
  else {
    echo "odd!";
  }
}
?>
<br>

<?php
leapyearCheck();
function leapyearCheck(){
  if (date('L') == 1)
    echo "It is a leap year!";
  else {
    echo "It is not a leap year!";
  }
}
 ?>
