<?php
$b1=$_GET["n1"];
$el=$_GET["n2"];
$ch=$_GET["op"];
$b=explode(",",$b1);

echo "Array element are:";
foreach($b as $c)
echo $c."\t";
echo"<br>";
echo"<br>";

switch($ch)
       {
       case 1:
             echo "Array with pushed element is:";
             array_push($b,$el);
             break;  
       case 2:
             echo "Array with poped element is:";
             array_pop($b);
             break; 
       case 3:
             echo "Content of stack is:";
             break; 
       case 4:
             echo "Array with insert element is:";
             array_unshift($b,"$el");
             break; 
       case 5:
             echo "Array with deleted element is:";
             array_shift($b);
             break;  
       case 6:
             echo "Content of queue is:";
             break;      
}
foreach($b as $c)
        echo $c,"\t";
?>
