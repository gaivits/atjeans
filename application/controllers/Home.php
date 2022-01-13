<?php
	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		public function index()  
      	{  
          $this->load->database();  
         $this->load->model('HomeModel');  
        $data['cus']=$this->HomeModel->shows();  
        $this->load->view('Home', $data);  
      	}
      	public function show_tokyos()  
      	{  
          $this->load->database();  
          $this->load->model('HomeModel');  
          $data['tokyo']=$this->HomeModel->show_tokyo();  
          $this->load->view('Show_tokyo', $data);  
      	}
      	public function show_prices()  
      	{  
          $this->load->database();  
          $this->load->model('HomeModel');  
          $data['price']=$this->HomeModel->show_price();  
          $this->load->view('Show_price', $data);  
      	}
      	public function creates()
      	{
      		$this->load->database();  
        	$this->load->model('HomeModel');
        	$data = [
        		'customerNumber' => $this->input->post('customerNumber'),
        		'customerName' => $this->input->post('customerName'),
        		'contactLastName'=>$this->input->post('contactLastName'),
        		'contactFirstName' => $this->input->post('contactFirstName'),
        		'phone' => $this->input->post('phone'),
        		'addressLine1'=>$this->input->post('addressLine1'),
        		'addressLine2' => $this->input->post('addressLine2'),
        		'city' => $this->input->post('city'),
        		'state' => $this->input->post('state'),
        		'postalCode' => $this->input->post('postalCode'),
        		'country'=> $this->input->post('country'),
        		'salesRepEmployeeNumber' => $this->input->post('salesRepEmployeeNumber'),
        		'creditLimit' => $this->input->post('creditLimit'),
        	];
        	$this->HomeModel->creates($data);
        	redirect('Home','refresh');
      	}
      	public function deletes($id)
    	{
    		$this->load->database();  
        	$this->load->model('HomeModel');
        	$this->db->where('customerNumber', $id);
        	$this->db->delete('customers');
        	redirect('Home');
    	}
    	public function edits($id)
    	{
    		$this->load->database();  
        	$this->load->model('HomeModel');
        	$data['cuss'] = $this->HomeModel->edits($id);
        	$this->load->view('Edits',$data);
    	}
  		
	}
?>