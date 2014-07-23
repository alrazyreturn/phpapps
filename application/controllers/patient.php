<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('Patient_model');
			$this->load-> model('Contracts_model');
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function add_new()
	{
        $data['content']='patients/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);
		 /*
		 $data['content']='add';
		 $data['title']=' اضافة بيانات مريض';
		 $data['controller_name']='patient';
		 $contracts= $this->Contracts_model->get_contracts();
		 $data['column_data']=array(
		 array('alies'=>'صوره المريض','type'=>'upload'),
		 array('alies'=>'اسم المريض','type'=>'text','name'=>'name'),
		 array('alies'=>'كود المريض','type'=>'text','name'=>'code'),
		 array('alies'=>'الوظيفه','type'=>'text','name'=>'job'),
		 array('alies'=>'جهة التعاقد','type'=>'select','name'=>'contract','sub_values'=>$contracts),
		 array('alies'=>'الجنس \ النوع','type'=>'sex','name'=>'gender'),
		 array('alies'=>'تاريخ الميلاد','type'=>'date','name'=>'date'),
		 array('alies'=>'العمر','type'=>'text','name'=>'age'),
		 array('alies'=>'العنوان','type'=>'text','name'=>'address'),
		 array('alies'=>'المحمول','type'=>'text','name'=>'mobile'),
		 array('alies'=>'تليفون المنزل','type'=>'text','name'=>'phone'),
		 array('alies'=>'ملاحظات','type'=>'textarea','name'=>'notes'));
         $this->load->view('admin_panel',$data);*/
	}
	
	public function view_patients()
	{
		/* $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		
         $data['content']='patients/view';
		 $data['patients']= $this->Patient_model->get_all_patients();	
         $this->load->view('admin_panel',$data);
	}
	
		public function data($id)
	{
         $data['content']='patients/data';
		 $data['patient']= $this->Patient_model->get_patient_data($id);
         $this->load->view('admin_panel',$data);
		 
		  /*$data['content']='data';
		 $data['id']= $id;
		 $patients = $this->Patient_model->get_patient_data($id);
		 $patient=$patients[0];
		  $data['controller']='patient';
		  $data['row_data']=array(
		 array('alies'=>'img','data'=>$patient['pic']),
		 array('alies'=>'اسم المريض','data'=>$patient['patient_name']),
		 array('alies'=>'كود المريض','data'=>$patient['code']),
		 array('alies'=>'الوظيفه','data'=>$patient['job']),
		 array('alies'=>'جهة التعاقد','data'=>$patient['contract']),
		 array('alies'=>'الجنس \ النوع','data'=>$patient['sex']),
		 array('alies'=>'تاريخ الميلاد','data'=>$patient['birthdate']),
		 array('alies'=>'العمر','data'=>$patient['age']),
		 array('alies'=>'العنوان','data'=>$patient['address']),
		 array('alies'=>'المحمول','data'=>$patient['mobile']),
		 array('alies'=>'تليفون المنزل','data'=>$patient['phone']),
		 array('alies'=>'ملاحظات','data'=>$patient['patient_note']));
		
         $this->load->view('admin_panel',$data);*/
	}
	
	  public function delete($id)
	{
         $data['content']='patients/view';
		 
		$data['error']= $this->Patient_model->delete_patient($id);
		 $data['patients']= $this->Patient_model->get_all_patients();
         $this->load->view('admin_panel',$data);
	}
	
	 public function edit($id)
	{
        $data['content']='patients/edit';
	     $data['patient']= $this->Patient_model->get_patient_data($id);
         $this->load->view('admin_panel',$data);
		 
		/* $patients= $this->Patient_model->get_patient_data($id);
		 $patient = $patients[0];
		 $data['id']= $id;
		 $data['content']='edit';
		 $data['title']=' تعديل بيانات مريض';
		 $data['controller_name']='patient';
		 $contracts= $this->Contracts_model->get_contracts();
		 $data['column_data']=array(
		 array('alies'=>'صوره المريض','type'=>'upload','value'=>$patient['pic']),
		 array('alies'=>'اسم المريض','type'=>'text','name'=>'name','value'=>$patient['patient_name']),
		 array('alies'=>'كود المريض','type'=>'text','name'=>'code','value'=>$patient['code']),
		 array('alies'=>'الوظيفه','type'=>'text','name'=>'job','value'=>$patient['job']),
		 array('alies'=>'جهة التعاقد','type'=>'select','name'=>'contract','sub_values'=>$contracts, 'value'=>$patient['contract']),
		 array('alies'=>'الجنس \ النوع','type'=>'sex','name'=>'gender','value'=>$patient['sex']),
		 array('alies'=>'تاريخ الميلاد','type'=>'date','name'=>'date','value'=>$patient['birthdate']),
		 array('alies'=>'العمر','type'=>'text','name'=>'age','value'=>$patient['age']),
		 array('alies'=>'العنوان','type'=>'text','name'=>'address','value'=>$patient['address']),
		 array('alies'=>'المحمول','type'=>'text','name'=>'mobile','value'=>$patient['mobile']),
		 array('alies'=>'تليفون المنزل','type'=>'text','name'=>'phone','value'=>$patient['phone']),
		 array('alies'=>'ملاحظات','type'=>'textarea','name'=>'notes','value'=>$patient['patient_note']));
         $this->load->view('admin_panel',$data);*/
		 
	}
	
		 public function save_edit ($id)
	{
        $pic_name ='';
	  if (isset($_FILES['upload']['name'])) 
		{
          
            $count = count($_FILES['upload']['name']);
           
            $uploads = $_FILES['upload'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		
		if($this->Patient_model->save_edit_patient($id , $pic_name))
		{
		 $data['content']='patients/view';
		 $data['patients']= $this->Patient_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		 
		/* $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		}
		else
		{
		 $data['content']='patients/view';
		 $data['patients']= $this->Patient_model->get_all_patients();
         $this->load->view('admin_panel',$data);
		 /*
		 $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		}
	}
	
	
	
	public function add()
	{
    @$pic_name;
	  if (isset($_FILES['upload']['name'])) 
		{
          
            $count = count($_FILES['upload']['name']);
           
            $uploads = $_FILES['upload'];

            for ($i = 0; $i < $count; $i++) {
                if ($uploads['error'][$i] == 0) 
				{
                    move_uploaded_file($uploads['tmp_name'][$i], 'assests/images/patients/' . $uploads['name'][$i]);
                    $pic_name=$uploads['name'][$i] . "\n";
                }
            }
        }
		
		
		if($this->Patient_model->add_new_patient(@$pic_name))
		{
			   $mydata['content']='patients/add';
			   $mydata['error']=0;
               $this->load->view('admin_panel',$mydata);
			   /*
		  $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		}
		else
		{
			   $mydata['content']='patients/add';
			   $mydata['error']=1;
               $this->load->view('admin_panel',$mydata);
			/*
		 $data['content']='view_form'; //'view_patient';
		 $data['title']=  "عرض بيانات المرضى";
		 $data['tbl_rows']= $this->Patient_model->get_all_patients();
		 $data['tbl_columns'] = $this->Patient_model->get_patients_columns();
		 $data['tbl_column_alies'] = $this->Patient_model->get_patients_columns_alies();
		 $data['control_name']= 'patient';
         $this->load->view('admin_panel',$data);*/
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */