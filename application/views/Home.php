<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Homes</title>  
   </head>  
   
<body> 

<form method="post" action="creates">
   <input type="number" name="customerNumber" placeholder="customerNumber">
   <input type="text" name="customerName" placeholder="customerName">
   <input type="text" name="contactLastName" placeholder="contactLastName">
   <input type="text" name="contactFirstName" placeholder="contactFirstName">
   <input type="text" name="phone" placeholder="phone">
   <input type="text" name="addressLine1" placeholder="addressLine1">
   <input type="text" name="addressLine2" placeholder="addressLine2"> 
   <input type="text" name="city" placeholder="city">
   <input type="text" name="state" placeholder="state">
   <input type="text" name="postalCode" placeholder="postalCode">
   <input type="text" name="country" placeholder="country">
   <input type="text" name="salesRepEmployeeNumber" placeholder="salesRepEmployeeNumber">
   <input type="number" step=0.01 name="creditLimit" placeholder="creditLimit">
   <input type="submit" value='save'>
</form>

<a href="<?php echo base_url() . "index.php/Home/show_tokyos"; ?>">TOKYO</a> /
<a href="<?php echo base_url() . "index.php/Home/show_prices"; ?>">PRICE</a>
<table border="1">  
      <tbody>  
         <tr>  
            <th>customerNumber</th>  
            <th>customerName</th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>city</th>
            <th>state</th>
            <th>postalCode</th>
            <th>country</th>
            <th>salesRepEmployeeNumber</th>
            <th>creditLimit</th>
            <th colspan="2">ลบ/แก้</th>
         </tr>  
         <?php  
         foreach ($cus->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->customerNumber;?></td>  
            <td><?php echo $row->customerName;?></td>
            <td><?php echo $row->contactLastName;?></td>
            <td><?php echo $row->contactFirstName;?></td>
            <td><?php echo $row->phone;?></td>
            <td><?php echo $row->addressLine1;?></td>
            <td><?php echo $row->addressLine2;?></td>
            <td><?php echo $row->city;?></td>
            <td><?php echo $row->state;?></td>
            <td><?php echo $row->postalCode;?></td>
            <td><?php echo $row->country;?></td>
            <td><?php echo $row->salesRepEmployeeNumber;?></td>
            <td><?php echo $row->creditLimit;?></td>

            <td><a href="<?php echo base_url() . "index.php/Home/deletes/" . $row->customerNumber; ?>" onclick="return confirm('ยืนยัน');">DEL</a></td>
            <td><a href="<?php echo base_url() . "index.php/Home/edits/" . $row->customerNumber; ?>">แก้</a></td>
            
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>   
</body>  
</html>  