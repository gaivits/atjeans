
<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Tokyo</title>  
   </head>  
   
<body> 
   <a href="<?php echo base_url('index.php/Home') ?>">HOME</a>
   <table border="1">  
      <tbody>  
         <tr>  
            <th>employeeNumber</th>  
            <th>lastName</th>
            <th>firstName</th>
            <th>extension</th>
            <th>email</th>
            <th>officeCode</th>
            <th>reportsTo</th>
            <th>jobTitle</th>
            <th>city</th>
            <th>phone</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>state</th>
            <th>country</th>
            <th>postalCode</th>
            <th>territory</th>
         </tr>
            <?php  
         foreach ($tokyo->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->employeeNumber;?></td>  
            <td><?php echo $row->lastName;?></td>
            <td><?php echo $row->firstName;?></td>
            <td><?php echo $row->extension;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->officeCode;?></td>
            <td><?php echo $row->reportsTo;?></td>
            <td><?php echo $row->jobTitle;?></td>
            <td><?php echo $row->city;?></td>
            <td><?php echo $row->phone;?></td>
            <td><?php echo $row->addressLine1;?></td>
            <td><?php echo $row->addressLine2;?></td>
            <td><?php echo $row->state;?></td>
            <td><?php echo $row->country;?></td>
            <td><?php echo $row->postalCode;?></td>
            <td><?php echo $row->territory;?></td>
            
            
            </tr>  
         <?php }  
         ?> 
      </tbody>  
   </table>   
</body>  
</html>  