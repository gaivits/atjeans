<?php
	class HomeModel extends CI_Model
	{
		public function shows()
		{
			$query = $this->db->get('customers');
			return $query;
		}
		public function creates($data)
		{
			$this->db->insert('customers',$data);
		}
		public function show_tokyo()
		{
			$query = $this->db->query("select * from employees inner join offices on offices.officeCode=employees.officeCode where city='Tokyo' ");
			return $query;
		}
		public function show_price()
		{
			$query = $this->db->query("select *, sum(quantityOrdered*priceEach) as sums from orderdetails left join orders on orderdetails.orderNumber=orders.orderNumber");
			return $query;
		}
		 public function edits($id)
    	{
        	$query = $this->db->get_where('customers', ['customerNumber'=>$id]);
        	return $query;
        	
       	}
     	public function updates($id,$data)
     	{
     		$query = $this->db->where('customerNumber',$id)->update('customers',$data);
     		return $query;
     	}
	
	}
?>