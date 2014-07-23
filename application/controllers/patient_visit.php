<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_visit extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('Patient_model');
			$this->load-> model('Contracts_model');
			$this->load-> model('Patientfile_model');
			$this->load-> model('Patientvisit_model');
			$this->load-> model('Service_model');
			
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	
		 
	public function get_visit($id)
	{
	  $data['visits']= $this->Patientvisit_model-> get_visit($id); 
	  $visit_num=sizeof($data['visits'])+1;
	  $output_string=$visit_num;
	  echo json_encode($output_string);
	}
	
	
	public function add_new()
	{
         $data['content']='patient_visit/add';
		 $data['patients']= $this->Patient_model->get_all_patients();
		 $data['service']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
	}
	
	public function view()
	{		
         $data['content']='patient_visit/view';
		 $data['patients']= $this->Patientvisit_model->get_all_patients();
         $this->load->view('admin_panel',$data);
	}
	
		public function data($id)
	{
         $data['content']='patient_visit/data';
		 $data['patient']= $this->Patientvisit_model->get_patient_data($id);
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
		 $this->Patientvisit_model->delete($id);
		 $data['content']='patient_visit/view';
		 $data['patients']= $this->Patientvisit_model->get_all_patients();
         $this->load->view('admin_panel',$data);
	}
	
	 public function edit($id)
	{
         $data['content']='patient_visit/edit';
		 $data['patients']= $this->Patient_model->get_all_patients();
	     $data['patient']= $this->Patientvisit_model->get_patient_data($id);
		 $data['service']= $this->Service_model->get_all_services();
         $this->load->view('admin_panel',$data);
	}
	
		 
		 
    public function save_edit_patient($id)
	 {
  
		if($this->Patientvisit_model->save_edit_patient($id))
		{
		 $data['content']='patient_visit/view';
		 $data['patients']= $this->Patientvisit_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		}
		else
		{
		 $data['content']='patient_visit/view';
		 $data['patients']= $this->Patientvisit_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		};
	}
	
	
	
	public function add_new_patient()
	{
    
		if($this->Patientvisit_model->add_new_patient())
		{
			   $mydata['content']='patient_visit/add';
			   $mydata['error']="good";
			   $mydata['patients']= $this->Patient_model->get_all_patients();
               $this->load->view('admin_panel',$mydata);
		}
		else
		{
		     $mydata['content']='patient_visit/add';
			 $mydata['error']="error";
			 $mydata['patients']= $this->Patient_model->get_all_patients();
             $this->load->view('admin_panel',$mydata);
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */