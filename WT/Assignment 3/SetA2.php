<?php
$str=$_GET['s'];
$ch=$_GET['op'];
echo $str;
echo $ch;
switch($ch)
{
  case 1:length($str);
         break;
  case 2:vowel($str);
         break;
  case 3:Lowercase($str);
         break;
  case 4:padding($str);
         break;
  case 5:remove_whitespace($str);
         break;
  case 6:reverse($str);
         break;
}

function length($str)
{

   $i=0;
   while($str[$i]!=NULL)
        {
           $i++;
        }
   echo"Length of string is:$i";
}


function vowels(string $x)
{
   $k=0;
   while($x[$i]!='')
   {
     if($x[$i]=='a' or $x[$i]=='e' or $x[$i]=='i' or $x[$i]=='o' or $x[$i]=='u' or  $x[$i]=='A' or $x[$i]=='E' or $x[$i]=='I' or $x[$i]=='O' or $x[$i]=='U')
      {
        $k++;
      }
    $i++;
   }
    echo"<br> total no. of vowel are: $k<br>";
}  
  
function Lowercase($str)
{
 $l=strtolower($str);
 echo"\n Lower case:$l";
 $u=UcWords($str);
 
}

function paddding($str)
{
 $d=str_pad($str,15,"*",STR_PAD_BOTH);
 echo"padding both side:$d";
}

function whitespace($x)
{
  $t=ltrim($x);
  echo"Removed Whitespace: $t<br>";
  len($t);
}

function reverse($str)
{
 $l=strrev($str);
 echo"Reverse of string:$l";
}

?>


  
