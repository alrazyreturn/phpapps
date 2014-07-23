<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class doctors extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			//$this->load-> model('admin/Doctors_model');
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
        /* $data['content']='admin/doctors/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافة طبيب';
		 $data['controller_name']='doctors';
		 
		 $data['column_data']=array(
		 array('alies'=>'اسم الطبيب','type'=>'text','name'=>'name'),
		 array('alies'=>'تخصص الطبيب','type'=>'text','name'=>'kind'),
		 array('alies'=>'العنوان','type'=>'text','name'=>'address'),
		 array('alies'=>'رقم الموبايل','type'=>'text','name'=>'mobile'),
		 array('alies'=>'رقم التليفون','type'=>'text','name'=>'phone'),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes'));
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_doctors';
		 $data['title']=  "عرض الأطباء";
		 $data['tbl_rows']= $this->Doctors_model->get_all_doctors();
		 $data['tbl_columns'] = $this->Doctors_model->get_doctors_columns();
		 $data['tbl_column_alies'] = $this->Doctors_model->get_doctors_columns_alies();
		 $data['control_name']= 'doctors';
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/doctors/view';
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		
	public function view_true ()
	{
		 $data['content']='admin/new_view'; //'view_doctors';
		 $data['title']=  "عرض الأطباء";
		 $data['tbl_rows']= $this->Doctors_model->get_all_doctors();
		 $data['tbl_columns'] = $this->Doctors_model->get_doctors_columns();
		 $data['tbl_column_alies'] = $this->Doctors_model->get_doctors_columns_alies();
		 $data['control_name']= 'doctors';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/doctors/view';
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		
	public function view_false ()
	{
		 $data['content']='admin/new_view'; //'view_doctors';
		 $data['title']=  "عرض الأطباء";
		 $data['tbl_rows']= $this->Doctors_model->get_all_doctors();
		 $data['tbl_columns'] = $this->Doctors_model->get_doctors_columns();
		 $data['tbl_column_alies'] = $this->Doctors_model->get_doctors_columns_alies();
		 $data['control_name']= 'doctors';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/doctors/view';
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function data($id)
	{
        /* $data['content']='admin/doctors/data';
		 $data['doctors']= $this->Doctors_model->get_doctors_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/data';
		 $data['title']='عرض بيانات الأطباء';
		 $data['id']= $id;
		 $doctors = $this->Doctors_model->get_doctors_data($id);
		 $doctors=$doctors[0];
		  $data['controller']='doctors';
		  $data['row_data']=array(
		 array('alies'=>'اسم الطبيب','data'=>$doctors['name']),
		 array('alies'=>'التخصص','data'=>$doctors['kind']),
		 array('alies'=>'العنوان','data'=>$doctors['address']),
		 array('alies'=>'رقم الموبايل','data'=>$doctors['mobile']),
		 array('alies'=>'رقم التليفون','data'=>$doctors['phone']),
		 array('alies'=>'الملاحظات','data'=>$doctors['notes']));
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/view';
		 $this->Doctors_model->delete($id);
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
         //$this->load->view('admin_panel',$data);
		 $data['error']=1;
		 $this->view_true();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/doctors/edit';
	     $data['doctors']= $this->Doctors_model->get_doctors_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $doctors= $this->Doctors_model->get_doctors_data($id);
		 $doctors = $doctors[0];
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات الطبيب';
		 $data['controller_name']='doctors';
		 $data['column_data']=array(
		 array('alies'=>'اسم الطبيب','type'=>'text','name'=>'name', 'value'=>$doctors['name']),
		 array('alies'=>'التخصص','type'=>'text','name'=>'kind', 'value'=>$doctors['kind']),
		 array('alies'=>'العنوان','type'=>'text','name'=>'address', 'value'=>$doctors['address']),
		 array('alies'=>'رقم الموبايل','type'=>'text','name'=>'mobile', 'value'=>$doctors['mobile']),
		 array('alies'=>'رقم التليفون','type'=>'text','name'=>'phone', 'value'=>$doctors['phone']),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes','value'=>$doctors['notes']));
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->Doctors_model->save_edit($id))
		{
		/* $data['content']='admin/doctors/view';
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=1;
		 $this->view_true();
		}
		else
		{
		 /*$data['content']='admin/doctors/view';
		 $data['doctors']= $this->Doctors_model->get_all_doctors();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['error']=0;
		$this->view_false();
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->Doctors_model->add_new_doctors())
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