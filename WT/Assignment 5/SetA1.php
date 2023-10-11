<?php
$fnm=$_GET["t1"];
echo "File name is <br>",$fnm;
echo "<br><br>";
$fp=fopen($fnm,"r");
if(!$fp)
echo "File does not exist....";
else
   {
    $fs=filesize($fnm);
    echo "Contents of file :<br>";
    echo fread($fp,$fs);
    echo "<br><br>";
    echo "File size is :<br>".$fs;
   }
?>
