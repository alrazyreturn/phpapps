<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tests extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('admin/Tests_model');
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
        /* $data['content']='admin/tests/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافة تحليل';
		 $data['controller_name']='tests';
		 
		 $data['column_data']=array(
		 array('alies'=>'اسم التحليل','type'=>'text','name'=>'name'),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes'));
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_tests';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Tests_model->get_all_tests();
		 $data['tbl_columns'] = $this->Tests_model->get_tests_columns();
		 $data['tbl_column_alies'] = $this->Tests_model->get_tests_columns_alies();
		 $data['control_name']= 'tests';
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/tests/view';
		 $data['tests']= $this->Tests_model->get_all_tests();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function view_true ()
	{
		 $data['content']='admin/new_view'; //'view_tests';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Tests_model->get_all_tests();
		 $data['tbl_columns'] = $this->Tests_model->get_tests_columns();
		 $data['tbl_column_alies'] = $this->Tests_model->get_tests_columns_alies();
		 $data['control_name']= 'tests';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/tests/view';
		 $data['tests']= $this->Tests_model->get_all_tests();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function view_false ()
	{
		 $data['content']='admin/new_view'; //'view_tests';
		 $data['title']=  "عرض التحاليل";
		 $data['tbl_rows']= $this->Tests_model->get_all_tests();
		 $data['tbl_columns'] = $this->Tests_model->get_tests_columns();
		 $data['tbl_column_alies'] = $this->Tests_model->get_tests_columns_alies();
		 $data['control_name']= 'tests';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/tests/view';
		 $data['tests']= $this->Tests_model->get_all_tests();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function data($id)
	{
        /* $data['content']='admin/tests/data';
		 $data['tests']= $this->Tests_model->get_tests_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/data';
		 $data['title']='عرض بيانات الدواء';
		 $data['id']= $id;
		 $tests = $this->Tests_model->get_tests_data($id);
		 $tests=$tests[0];
		  $data['controller']='tests';
		  $data['row_data']=array(
		 array('alies'=>'اسم التحليل','data'=>$tests['name']),
		 array('alies'=>'الملاحظات','data'=>$tests['notes']));
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/view';
		 $this->Tests_model->delete($id);
		 $data['tests']= $this->Tests_model->get_all_tests();
         //$this->load->view('admin_panel',$data);
		 $data['error']=1;
		 $this->view_true();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/tests/edit';
	     $data['tests']= $this->Tests_model->get_tests_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $tests= $this->Tests_model->get_tests_data($id);
		 $tests = $tests[0];
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $doctors= $this->Doctors_model->get_doctors();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات التحليل';
		 $data['controller_name']='tests';
		 $data['column_data']=array(
		 array('alies'=>'اسم التحليل','type'=>'text','name'=>'name', 'value'=>$tests['name']),
		 array('alies'=>'الملاحظات','type'=>'textarea','name'=>'notes','value'=>$tests['notes']));
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->Tests_model->save_edit($id))
		{
		/* $data['content']='admin/tests/view';
		 $data['tests']= $this->Tests_model->get_all_tests();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=1;
		 $this->view_true();
		}
		else
		{
		 /*$data['content']='admin/tests/view';
		 $data['tests']= $this->Tests_model->get_all_tests();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=0;
		$this->view_false();
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->Tests_model->add_new_tests())
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