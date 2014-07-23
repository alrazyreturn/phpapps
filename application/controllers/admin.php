<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('Admin_model');
			//$this->load-> model('admin/Admin_model');
			$this->load-> model('admin/Yes_no_model');
	}
	 
	 
	 
	public function index()
	{
				//$this->load->view('admin_login');
	}
	
	public function log_out()
	{
		if(session_id() == '') {
    session_start();
}
		session_destroy();
		$this->load->view('admin_panel');
	}
		public function check()
	{
	
        $user_name=$_POST['name'];
		$pass=$_POST['pass'];
		
		//echo "name = $username , pass= $pass";	
 		$data['admin']= $this->Admin_model->check_login($user_name,$pass);
		
		if(sizeof($data['admin'])>=1)
		{
		 //$mydata['content']='patients/add_patient';
		 
		 if(session_id() == '') {
    session_start();
}
		 $_SESSION['User_Login']= $user_name ;
		 $_SESSION['admin_data']=$data['admin'][0];
         $this->load->view('admin_panel');
		 
		 // $this->load->view('patients/add_patient');
		}
		
		else
		{
		$data['error']='error';
		$this->load->view('login',$data);
		}
	}
	
	

		
	public function add_new()
	{
        /* $data['content']='admin/admin/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافة مستخدم';
		 $data['controller_name']='admin';
		 $yes_no= $this->Yes_no_model->get_yes_no();
			  
		 $data['column_data']=array(
		 array('alies'=>'الإسم','type'=>'text','name'=>'name'),
		 array('alies'=>'اسم المستخدم','type'=>'text','name'=>'user_name'),
		 array('alies'=>'كلمة المرور','type'=>'password','name'=>'password'),
		 array('alies'=>'الدخول للمرضى','type'=>'true_false','name'=>'patients_access'),
		 array('alies'=>'الدخول لجهات التعاقد','type'=>'true_false','name'=>'contracts_access'),
		 array('alies'=>'الدخول للخدمات','type'=>'true_false','name'=>'services_access'),
		 array('alies'=>'الدخول للأطباء','type'=>'true_false','name'=>'doctors_access'),
		 array('alies'=>'الدخول للحجوزات','type'=>'true_false','name'=>'reservations_access'),
		 array('alies'=>'الدخول للدواء','type'=>'true_false','name'=>'medicines_access'),
		 array('alies'=>'الدخول لملفات المرضى','type'=>'true_false','name'=>'patient_files_access'),
		 array('alies'=>'الدخول للتحاليل','type'=>'true_false','name'=>'tests_access'),
		 array('alies'=>'الدخول لزيارات المرضى','type'=>'true_false','name'=>'patient_visits_access'),
		 array('alies'=>'الدخول للتخصصات','type'=>'true_false','name'=>'specialties_access'),
		 array('alies'=>'الدخول للمستخدمين','type'=>'true_false','name'=>'users_access'));
		 
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_admin';
		 $data['title']=  "عرض المستخدمين";
		 $data['tbl_rows']= $this->Admin_model->get_all_admin();
		 $data['tbl_columns'] = $this->Admin_model->get_admin_columns();
		 $data['tbl_column_alies'] = $this->Admin_model->get_admin_columns_alies();
		 $data['control_name']= 'admin';
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/admin/view';
		 $data['admin']= $this->Admin_model->get_all_admin();
		
         $this->load->view('admin_panel',$data);*/
		 
		 
		
	}
	
	
	public function view_true ()
	{
		 $data['content']='admin/new_view'; //'view_admin';
		 $data['title']=  "عرض المستخدمين";
		 $data['tbl_rows']= $this->Admin_model->get_all_admin();
		 $data['tbl_columns'] = $this->Admin_model->get_admin_columns();
		 $data['tbl_column_alies'] = $this->Admin_model->get_admin_columns_alies();
		 $data['control_name']= 'admin';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/admin/view';
		 $data['admin']= $this->Admin_model->get_all_admin();
		
         $this->load->view('admin_panel',$data);*/
	}
	
	
	public function view_false ()
	{
		 $data['content']='admin/new_view'; //'view_admin';
		 $data['title']=  "عرض المستخدمين";
		 $data['tbl_rows']= $this->Admin_model->get_all_admin();
		 $data['tbl_columns'] = $this->Admin_model->get_admin_columns();
		 $data['tbl_column_alies'] = $this->Admin_model->get_admin_columns_alies();
		 $data['control_name']= 'admin';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/admin/view';
		 $data['admin']= $this->Admin_model->get_all_admin();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function data($id)
	{
        /* $data['content']='admin/admin/data';
		 $data['admin']= $this->Admin_model->get_admin_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/data';
		 $data['title']='عرض بيانات المستخدم';
		 $data['id']= $id;
		 $admin = $this->Admin_model->get_admin_data($id);
		 $admin=$admin[0];
		  $data['controller']='admin';
		   
		     
		 
		 $data['row_data']=array(
		 array('alies'=>'الإسم','data'=>$admin['name']),
		 array('alies'=>'اسم المستخدم','data'=>$admin['user_name']),
		 //array('alies'=>'كلمة المرور','data'=>$admin['password']),
		 array('alies'=>'الدخول للمرضى','data'=>$admin['patients_access']),
		 array('alies'=>'الدخول لجهات التعاقد','data'=>$admin['contracts_access']),
		 array('alies'=>'الدخول للخدمات','data'=>$admin['services_access']),
		 array('alies'=>'الدخول للأطباء','data'=>$admin['doctors_access']),
		 array('alies'=>'الدخول للحجوزات','data'=>$admin['reservations_access']),
		 array('alies'=>'الدخول للدواء','data'=>$admin['medicines_access']),
		 array('alies'=>'الدخول لملفات المرضى','data'=>$admin['patient_files_access']),
		 array('alies'=>'الدخول للتحاليل','data'=>$admin['tests_access']),
		 array('alies'=>'الدخول لزيارات المرضى','data'=>$admin['patient_visits_access']),
		 array('alies'=>'الدخول للتخصصات','data'=>$admin['specialties_access']),
		 array('alies'=>'الدخول للمستخدمين','data'=>$admin['users_access']));
		 
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/new_view';
		 $this->Admin_model->delete($id);
		 $data['admin']= $this->Admin_model->get_all_admin();
         //$this->load->view('admin_panel',$data);
		 $data['error']=1;
		 $this->view_true();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/admin/edit';
	     $data['admin']= $this->Admin_model->get_admin_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $admin= $this->Admin_model->get_admin_data($id);
		 $admin = $admin[0];
		 $yes_no= $this->Yes_no_model->get_yes_no();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات المستخدم';
		 $data['controller_name']='admin';
  
		 
		   $data['column_data']=array(
		 array('alies'=>'الإسم','type'=>'text','name'=>'name', 'value'=>$admin['name']),
		 array('alies'=>'اسم المستخدم','type'=>'text','name'=>'user_name', 'value'=>$admin['user_name']),
		 //array('alies'=>'كلمة المرور','type'=>'password','name'=>'password', 'value'=>$admin['password']),
		 array('alies'=>'الدخول للمرضى','type'=>'true_false','name'=>'patients_access','value'=>$admin['patients_access']),
		 array('alies'=>'الدخول لجهات التعاقد','type'=>'true_false','name'=>'contracts_access','value'=>$admin['contracts_access']),
		 array('alies'=>'الدخول للخدمات','type'=>'true_false','name'=>'services_access','value'=>$admin['services_access']),
		 array('alies'=>'الدخول للأطباء','type'=>'true_false','name'=>'doctors_access','value'=>$admin['doctors_access']),
		 array('alies'=>'الدخول للحجوزات','type'=>'true_false','name'=>'reservations_access','value'=>$admin['reservations_access']),
		 array('alies'=>'الدخول للدواء','type'=>'true_false','name'=>'medicines_access','value'=>$admin['medicines_access']),
		 array('alies'=>'الدخول لملفات المرضى','type'=>'true_false','name'=>'patient_files_access','value'=>$admin['patient_files_access']),
		 array('alies'=>'الدخول للتحاليل','type'=>'true_false','name'=>'tests_access','value'=>$admin['tests_access']),
		 array('alies'=>'الدخول لزيارات المرضى','type'=>'true_false','name'=>'patient_visits_access','value'=>$admin['patient_visits_access']),
		 array('alies'=>'الدخول للتخصصات','type'=>'true_false','name'=>'specialties_access','value'=>$admin['specialties_access']),
		 array('alies'=>'الدخول للمستخدمين','type'=>'true_false','name'=>'users_access','value'=>$admin['users_access']));
		 
		 
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->Admin_model->save_edit($id))
		{
		/* $data['content']='admin/admin/view';
		 $data['admin']= $this->Admin_model->get_all_admin();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=1;
		 $this->view_true();
		}
		else
		{
		 /*$data['content']='admin/admin/view';
		 $data['admin']= $this->Admin_model->get_all_admin();
         $this->load->view('admin_panel',$data);*/
		 $data['error']=0;
		$this->view_false();
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->Admin_model->add_new_admin())
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