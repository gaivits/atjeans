
<!DOCTYPE html>
<html>
<head>
   <title>Edit</title>
</head>
<body>
   <center>
      
      <h3>Edit Data</h3>
    
   </center>
   <a href="<?php echo base_url('index.php/Home') ?>">HOME</a>
   <?php foreach($cuss->result() as $row){ ?>
   <form method="post" action="<?php echo base_url() . "index.php/Home/updates/" . $row->customerNumber; ?>">
   
   <input type="number" name="customerNumber" placeholder="customerNumber" value="<?php echo $row->customerNumber ;?>" >
   <input type="text" name="customerName" placeholder="customerName" value="<?php echo $row->customerName ;?>">
   <input type="text" name="contactLastName" placeholder="contactLastName" value="<?php echo $row->contactLastName ;?>">
   <input type="text" name="contactFirstName" placeholder="contactFirstName" value="<?php echo $row->contactFirstName ;?>">
   <input type="text" name="phone" placeholder="phone" value="<?php echo $row->phone ;?>">
   <input type="text" name="addressLine1" placeholder="addressLine1" value="<?php echo $row->addressLine1 ;?>">
   <input type="text" name="addressLine2" placeholder="addressLine2" value="<?php echo $row->addressLine2 ;?>"> 
   <input type="text" name="city" placeholder="city" value="<?php echo $row->city ;?>">
   <input type="text" name="state" placeholder="state" value="<?php echo $row->state ;?>">
   <input type="text" name="postalCode" placeholder="postalCode" value="<?php echo $row->postalCode ;?>">
   <input type="text" name="country" placeholder="country" value="<?php echo $row->country ;?>">
   <input type="text" name="salesRepEmployeeNumber" placeholder="salesRepEmployeeNumber" value="<?php echo $row->salesRepEmployeeNumber ;?>">
   <input type="number" step=0.01 name="creditLimit" placeholder="creditLimit" value="<?php echo $row->creditLimit ;?>">
   <input type="submit" name="update">

   </form>
   <?php } ?>
</body>
</html>