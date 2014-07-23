<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
		
			$this->load-> model('Service_model');
			
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function add_new()
	{
         $data['content']='service/add';
		
         $this->load->view('admin_panel',$data);
	}
	
	public function view()
	{		
         $data['content']='service/view';
		 $data['patients']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
	}
	
		public function data($id)
	{
         $data['content']='service/data';
		 $data['patient']= $this->Service_model->get_service($id);
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
		  $data['error']=$this->Service_model->delete($id);
		 $data['content']='service/view';
         $data['patients']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
	}
	
	 public function edit($id)
	{
         $data['content']='service/edit';
		 $data['patient']= $this->Service_model->get_service($id);
         $this->load->view('admin_panel',$data);
	}
	
		 
		 
    public function save_edit($id)
	 {
  
		if($this->Service_model->save_edit($id))
		{
		 $data['content']='service/view';
		 $data['patients']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
		}
		else
		{
		 $data['content']='service/view';
		 $data['patients']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
		}
	}
	
	
	
	public function add_new_service()
	{
    
		if($this->Service_model->add_new_patient())
		{
			   $mydata['content']='service/add';
			   $mydata['error']="good";
               $this->load->view('admin_panel',$mydata);
		}
		else
		{
		     $mydata['content']='service/add';
			 $mydata['error']="error";
             $this->load->view('admin_panel',$mydata);
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */