<!DOCTYPE html>
<html>
<head>
   <title>Edit</title>
</head>
<body>
   <center>
      
      <h3>Edit Data</h3>
    
   </center>

   <?php foreach($cuss->result() as $row){ ?>
   <form method="post" action="Home/updates/<?php echo $row->customerNumber;?>" >

   <input type="number" name="customerNumberU" placeholder="customerNumber" value="<?php echo $row->customerNumber ;?>" >
   <input type="text" name="customerNameU" placeholder="customerName" value="<?php echo $row->customerName ;?>">
   <input type="text" name="contactLastNameU" placeholder="contactLastName" value="<?php echo $row->contactLastName ;?>">
   <input type="text" name="contactFirstNameU" placeholder="contactFirstName" value="<?php echo $row->contactFirstName ;?>">
   <input type="text" name="phoneU" placeholder="phone" value="<?php echo $row->phone ;?>">
   <input type="text" name="addressLine1U" placeholder="addressLine1" value="<?php echo $row->addressLine1 ;?>">
   <input type="text" name="addressLine2U" placeholder="addressLine2" value="<?php echo $row->addressLine2 ;?>"> 
   <input type="text" name="cityU" placeholder="city" value="<?php echo $row->city ;?>">
   <input type="text" name="stateU" placeholder="state" value="<?php echo $row->state ;?>">
   <input type="text" name="postalCodeU" placeholder="postalCode" value="<?php echo $row->postalCode ;?>">
   <input type="text" name="countryU" placeholder="country" value="<?php echo $row->country ;?>">
   <input type="text" name="salesRepEmployeeNumberU" placeholder="salesRepEmployeeNumber" value="<?php echo $row->salesRepEmployeeNumber ;?>">
   <input type="number" step=0.01 name="creditLimitU" placeholder="creditLimit" value="<?php echo $row->creditLimit ;?>">
   <input type="submit" value="แก้ไข">
</form>
   <?php } ?>
</body>
</html>