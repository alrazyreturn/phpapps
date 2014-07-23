<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicines extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('admin/medicines_model');
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
        /* $data['content']='admin/medicines/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافة دواء';
		 $data['controller_name']='medicines';
		 
		 $data['column_data']=array(
		 array('alies'=>'الاسم','type'=>'text','name'=>'name'),
		 array('alies'=>'الإستخدام','type'=>'textarea','name'=>'for'));
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_medicines';
		 $data['title']=  "عرض الإدوية";
		 $data['tbl_rows']= $this->medicines_model->get_all_medicines();
		 $data['tbl_columns'] = $this->medicines_model->get_medicines_columns();
		 $data['tbl_column_alies'] = $this->medicines_model->get_medicines_columns_alies();
		 $data['control_name']= 'medicines';

         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/medicines/view';
		 $data['medicines']= $this->medicines_model->get_all_medicines();
		
         $this->load->view('admin_panel',$data);*/
	}
	
	public function view_true ()
	{
		 $data['content']='admin/new_view'; //'view_medicines';
		 $data['title']=  "عرض الإدوية";
		 $data['tbl_rows']= $this->medicines_model->get_all_medicines();
		 $data['tbl_columns'] = $this->medicines_model->get_medicines_columns();
		 $data['tbl_column_alies'] = $this->medicines_model->get_medicines_columns_alies();
		 $data['control_name']= 'medicines';
         $data['error']= 1;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/medicines/view';
		 $data['medicines']= $this->medicines_model->get_all_medicines();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function view_false ()
	{
		 $data['content']='admin/new_view'; //'view_medicines';
		 $data['title']=  "عرض الإدوية";
		 $data['tbl_rows']= $this->medicines_model->get_all_medicines();
		 $data['tbl_columns'] = $this->medicines_model->get_medicines_columns();
		 $data['tbl_column_alies'] = $this->medicines_model->get_medicines_columns_alies();
		 $data['control_name']= 'medicines';
 		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/medicines/view';
		 $data['medicines']= $this->medicines_model->get_all_medicines();
		
         $this->load->view('admin_panel',$data);*/
	}
	
	
		public function data($id)
	{
        /* $data['content']='admin/medicines/data';
		 $data['medicines']= $this->medicines_model->get_medicines_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 $data['title']='عرض بيانات الدواء';
		 $data['content']='admin/data';
		 $data['id']= $id;
		 $medicines = $this->medicines_model->get_medicines_data($id);
		 $medicines=$medicines[0];
		  $data['controller']='medicines';
		  $data['row_data']=array(
		 array('alies'=>'الإسم','data'=>$medicines['name']),
		 array('alies'=>'الإستخدام','data'=>$medicines['for']));
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/view';
		 $this->medicines_model->delete($id);
		 $data['medicines']= $this->medicines_model->get_all_medicines();
         //$this->load->view('admin_panel',$data);
		// $data['error']=1;
		 $this->view_true();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/medicines/edit';
	     $data['medicines']= $this->medicines_model->get_medicines_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $medicines= $this->medicines_model->get_medicines_data($id);
		 $medicines = $medicines[0];
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $doctors= $this->Doctors_model->get_doctors();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات الإدوية';
		 $data['controller_name']='medicines';
		 $data['column_data']=array(
		 array('alies'=>'الإسم','type'=>'text','name'=>'name', 'value'=>$medicines['name']),
		 array('alies'=>'الإستخدام','type'=>'textarea','name'=>'for','value'=>$medicines['for']));
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->medicines_model->save_edit($id))
		{
		/* $data['content']='admin/medicines/view';
		 $data['medicines']= $this->medicines_model->get_all_medicines();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=1;
		 $this->view_true();
		}
		else
		{
		 /*$data['content']='admin/medicines/view';
		 $data['medicines']= $this->medicines_model->get_all_medicines();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=0;
		$this->view_false();
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->medicines_model->add_new_medicines())
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