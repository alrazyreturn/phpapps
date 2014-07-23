<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_file extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('Patient_model');
			$this->load-> model('Contracts_model');
			$this->load-> model('Patientfile_model');
			$this->load-> model('admin/Medicines_model');
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function add_new()
	{
         $data['content']='patient_file/add';
		 $data['patients']= $this->Patient_model->get_all_patients();
		 $data['medicine']= $this->Medicines_model->get_all_medicines();
         $this->load->view('admin_panel',$data);
	}
	
	public function view_patients()
	{
		 /*$data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		
         $data['content']='patient_file/view';
		 $data['patients']= $this->Patientfile_model->get_all_patients();
         $this->load->view('admin_panel',$data);
	}
	
		public function data($id)
	{
         $data['content']='patient_file/data';
		 $data['patient']= $this->Patientfile_model->get_patient_data($id);
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='patient_file/view';
		 $this->Patientfile_model->delete($id);
		 $data['patients']= $this->Patientfile_model->get_all_patients();
         $this->load->view('admin_panel',$data);
	}
	
	 public function edit($id)
	{
         $data['content']='patient_file/edit';
		 $data['patients']= $this->Patient_model->get_all_patients();
	     $data['patient']= $this->Patientfile_model->get_patient_data($id);
		 $mid_id=$data['patient'][0]['midicne'];
		 $data['medicine']= $this->Medicines_model->get_Medicines_data($id);
         $this->load->view('admin_panel',$data);
	}
	
		 
		 
    public function save_edit_patient($id)
	 {
    @$pic_name1;
	@$pic_name2;
	@$pic_name3;
	  if (isset($_FILES['upload1']['name'])) 
		{
          
            $count = count($_FILES['upload1']['name']);
           
            $uploads = $_FILES['upload1'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name1=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		if (isset($_FILES['upload2']['name'])) 
		{
          
            $count = count($_FILES['upload2']['name']);
           
            $uploads = $_FILES['upload2'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name2=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		if (isset($_FILES['upload3']['name'])) 
		{
          
            $count = count($_FILES['upload3']['name']);
           
            $uploads = $_FILES['upload3'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name3=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		
		if($this->Patientfile_model->save_edit_patient($id , @$pic_name1,@$pic_name2,@$pic_name3))
		{
		 $data['content']='patient_file/view';
		 $data['patients']= $this->Patientfile_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		 
	/*	  $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		}
		else
		{
		 $data['content']='patient_file/view';
		 $data['patients']= $this->Patientfile_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		};
	}
	
	
	
	public function add_new_patient()
	{
    @$pic_name1;
	@$pic_name2;
	@$pic_name3;
	  if (isset($_FILES['upload1']['name'])) 
		{
          
            $count = count($_FILES['upload1']['name']);
           
            $uploads = $_FILES['upload1'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name1=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		if (isset($_FILES['upload2']['name'])) 
		{
          
            $count = count($_FILES['upload2']['name']);
           
            $uploads = $_FILES['upload2'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name2=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		if (isset($_FILES['upload3']['name'])) 
		{
          
            $count = count($_FILES['upload3']['name']);
           
            $uploads = $_FILES['upload3'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name3=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		
		if($this->Patientfile_model->add_new_patient(@$pic_name1,@$pic_name2,@$pic_name3))
		{
			   $mydata['content']='patient_file/add';
			   $mydata['error']=0;
               $this->load->view('admin_panel',$mydata);
		}
		else
		{
		     $mydata['content']='patient_file/add';
			   $mydata['error']=1;
               $this->load->view('admin_panel',$mydata);
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */