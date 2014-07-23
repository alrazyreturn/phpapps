<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contracts extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
		
			$this->load-> model('Contracts_model');
			
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function add_new()
	{
         $data['content']='contracts/add';
		
         $this->load->view('admin_panel',$data);
	}
	
	public function view()
	{		
         $data['content']='contracts/view';
		 $data['patients']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);
	}
	
		public function data($id)
	{
         $data['content']='contracts/data';
		 $data['patient']= $this->Contracts_model->get_contract($id);
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
		 $data['error']= $this->Contracts_model->delete($id);
		 $data['content']='contracts/view';
		 $data['patients']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);
	}
	
	 public function edit($id)
	{
         $data['content']='contracts/edit';
		 $data['patient']= $this->Contracts_model->get_contract($id);
         $this->load->view('admin_panel',$data);
	}
	
		 
		 
    public function save_edit($id)
	 {
  
		if($this->Contracts_model->save_edit($id))
		{
		 $data['content']='contracts/view';
		 $data['patients']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);
		}
		else
		{
		 $data['content']='contracts/view';
		 $data['patients']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);
		}
	}
	
	
	
	public function add_new_contract()
	{
    
		if($this->Contracts_model->add_new_contract())
		{
			   $mydata['content']='contracts/add';
			   $mydata['error']="good";
               $this->load->view('admin_panel',$mydata);
		}
		else
		{
		     $mydata['content']='contracts/add';
			 $mydata['error']="error";
             $this->load->view('admin_panel',$mydata);
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */