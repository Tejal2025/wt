<html>
<head>
   <title>PHP TABLE</title>
</head>
<body>
   <table border="1">
   <h1>Table Item</h1>
        <tr>
            <th>Item code</th>
            <th>Item Name</th>
            <th>unit sold</th>
            <th>Rate</th>
            <th>Total</th>
        </tr>
        <?php
             $lines=file("item.dat");
             $totalbill=0;
             foreach($lines as $line)  
             {
                $itemDetails=explode(",",$line);
                $iCode=trim($itemdetail[0]);      
                $iname=trim($itemdetail[1]);
                $usold=trim($itemdetail[2]);
                $rate=trim($itemdetail[3]);
                                      
                $total=$usold*$rate;
                
                echo "<tr>";
                echo "<td>$icode</td>";  
                echo "<td>$iname</td>";  
                echo "<td>$usold</td>";                 
                echo "<td>$rate</td>";   
                echo "<td>$total</td>";  
                echo "</tr>";
                
                $totalbill += $total;
             }
        ?>
        <tr>
            <td colspan="4">Total Bill</td>
            <td><?php echo $totalBill; ?></td>
        </tr>
   </table>
</body>
</html>

