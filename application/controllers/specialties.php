<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class specialties extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('admin/Specialties_model');
			$this->load-> model('admin/Days_model');
			$this->load-> model('admin/Doctors_model');
			$this->load-> model('admin/Patient_model');
			$this->load-> model('admin/Services_model');
			$this->load-> model('admin/Contracts_model');
			$this->load-> model('admin/Reserve_status_model');
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function add_new()
	{
        /* $data['content']='admin/specialties/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافة تخصص';
		 $data['controller_name']='specialties';
		 
		 $data['column_data']=array(
		 array('alies'=>'اسم التخصص','type'=>'text','name'=>'name'),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes'));
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_specialties';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Specialties_model->get_all_specialties();
		 $data['tbl_columns'] = $this->Specialties_model->get_specialties_columns();
		 $data['tbl_column_alies'] = $this->Specialties_model->get_specialties_columns_alies();
		 $data['control_name']= 'specialties';
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/specialties/view';
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		
	public function view_true ()
	{
		 $data['content']='admin/new_view'; //'view_specialties';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Specialties_model->get_all_specialties();
		 $data['tbl_columns'] = $this->Specialties_model->get_specialties_columns();
		 $data['tbl_column_alies'] = $this->Specialties_model->get_specialties_columns_alies();
		 $data['control_name']= 'specialties';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/specialties/view';
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		
	public function view_false ()
	{
		 $data['content']='admin/new_view'; //'view_specialties';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Specialties_model->get_all_specialties();
		 $data['tbl_columns'] = $this->Specialties_model->get_specialties_columns();
		 $data['tbl_column_alies'] = $this->Specialties_model->get_specialties_columns_alies();
		 $data['control_name']= 'specialties';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/specialties/view';
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function data($id)
	{
        /* $data['content']='admin/specialties/data';
		 $data['specialties']= $this->Specialties_model->get_specialties_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/data';
		 $data['title']='عرض بيانات الدواء';
		 $data['id']= $id;
		 $specialties = $this->Specialties_model->get_specialties_data($id);
		 $specialties=$specialties[0];
		  $data['controller']='specialties';
		  $data['row_data']=array(
		 array('alies'=>'اسم التخصص','data'=>$specialties['name']),
		 array('alies'=>'الملاحظات','data'=>$specialties['notes']));
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/view';
		 $this->Specialties_model->delete($id);
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
         //$this->load->view('admin_panel',$data);
		 $data['error']=1;
		 $this->view_true();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/specialties/edit';
	     $data['specialties']= $this->Specialties_model->get_specialties_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $specialties= $this->Specialties_model->get_specialties_data($id);
		 $specialties = $specialties[0];
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $doctors= $this->Doctors_model->get_doctors();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات التخصص';
		 $data['controller_name']='specialties';
		 $data['column_data']=array(
		 array('alies'=>'اسم التخصص','type'=>'text','name'=>'name', 'value'=>$specialties['name']),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes','value'=>$specialties['notes']));
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->Specialties_model->save_edit($id))
		{
		/* $data['content']='admin/specialties/view';
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=1;
		 $this->view_true();
		}
		else
		{
		 /*$data['content']='admin/specialties/view';
		 $data['specialties']= $this->Specialties_model->get_all_specialties();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['error']=0;
		$this->view_false();
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->Specialties_model->add_new_specialties())
		{
			$data['error']=1;
			$this->view_true();
		}
		else
		{
			$data['error']=0;
		     $this->view_false();
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */