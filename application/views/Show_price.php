
<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>PRICE</title>  
   </head>  
   
<body> 
   <a href="<?php echo base_url('index.php/Home') ?>">HOME</a>
   <table border="1">  
      <tbody>  
         <tr>  
            <th>orderNumber</th>  
            <th>productCode</th>
            <th>quantityOrdered</th>
            <th>priceEach</th>
            <th>orderLineNumber</th>
            <th>orderDate</th>
            <th>requiredDate</th>
            <th>shippedDate</th>
            <th>status</th>
            <th>comments</th>
            <th>customerNumber</th>
            <th>sum($)</th>
            
         </tr>
            <?php  
         foreach ($price->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->orderNumber;?></td>  
            <td><?php echo $row->productCode;?></td>
            <td><?php echo $row->quantityOrdered;?></td>
            <td><?php echo $row->priceEach;?></td>
            <td><?php echo $row->orderLineNumber;?></td>
            <td><?php echo $row->orderDate;?></td>
            <td><?php echo $row->requiredDate;?></td>
            <td><?php echo $row->shippedDate;?></td>
            <td><?php echo $row->status;?></td>
            <td><?php echo $row->comments;?></td>
            <th><?php echo $row->customerNumber;?></th>
            <td><?php echo $row->sums;?></td>
            
            
            
            
            </tr>  
         <?php }  
         ?> 
      </tbody>  
   </table>   
</body>  
</html>  