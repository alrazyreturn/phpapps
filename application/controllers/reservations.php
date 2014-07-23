<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservations extends CI_Controller {

	
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('admin/Reservations_model');
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
        /* $data['content']='admin/reservations/add';
		 $data['contracts']= $this->Contracts_model->get_contracts();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/add';
		 $data['title']=' اضافةحجز';
		 $data['controller_name']='reservations';
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $doctors= $this->Doctors_model->get_doctors();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 $data['column_data']=array(
		 array('alies'=>'اليوم','type'=>'select','name'=>'day_id','sub_values'=>$days),
		 array('alies'=>'تاريخ الحجز','type'=>'date','name'=>'reserve_date'),
		 array('alies'=>'اسم المريض','type'=>'select','name'=>'patient_id','sub_values'=>$patients),
		 array('alies'=>'الطبيب','type'=>'select','name'=>'doctor_id','sub_values'=>$doctors),
		 array('alies'=>'نوع الخدمة','type'=>'select','name'=>'service_id','sub_values'=>$services),
		 array('alies'=>'جهة التعاقد','type'=>'select','name'=>'contract_id','sub_values'=>$contracts),
		 array('alies'=>'من','type'=>'text','name'=>'from_time'),
		 array('alies'=>'الى','type'=>'text','name'=>'to_time'),
		 array('alies'=>'حالة الحجز','type'=>'select','name'=>'status','sub_values'=>$reserve_status));
         $this->load->view('admin_panel',$data);
	}
	
	public function view ()
	{
		 $data['content']='admin/new_view'; //'view_reservations';
		 $data['title']=  "عرض الحجوزات";
		 
  			
		 $data['tbl_rows']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		 $data['tbl_columns'] = $this->Reservations_model->get_reservations_columns();
		 $data['tbl_column_alies'] = $this->Reservations_model->get_reservations_columns_alies();
		 $data['control_name']= 'reservations';
		  
         $this->load->view('admin_panel',$data);
		
        /* $data['content']='admin/reservations/view';
		 $data['reservations']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		
         $this->load->view('admin_panel',$data);*/
	}
	
		public function data($id)
	{
        /* $data['content']='admin/reservations/data';
		 $data['reservations']= $this->Reservations_model->get_reservations_data($id);
		
         $this->load->view('admin_panel',$data);*/
		 	 $data['title']='عرض بيانات الحجز';
		 $data['content']='admin/data';
		 $data['id']= $id;
		 $reservations = $this->Reservations_model->get_reservations_data($id);
		 $reservations=$reservations[0];
		  $data['controller']='reservations';
		  $data['row_data']=array(
		 array('alies'=>'اليوم','data'=>$reservations['day']),
		 array('alies'=>'تاريخ الحجز','data'=>$reservations['reserve_date']),
		 array('alies'=>'اسم المريض','data'=>$reservations['patient_name']),
		 array('alies'=>'الطبيب','data'=>$reservations['doctor_name']),
		 array('alies'=>'جهة التعاقد','data'=>$reservations['contract_name']),
		 array('alies'=>'نوع الخدمة','data'=>$reservations['service_name']),
		 array('alies'=>'من','data'=>$reservations['from_time']),
		 array('alies'=>'الى','data'=>$reservations['to_time']),
		 array('alies'=>'حالة الحجز','data'=>$reservations['reserve_name']));
		
         $this->load->view('admin_panel',$data);
	}
	
	  public function delete($id)
	{
         $data['content']='admin/view';
		 $this->Reservations_model->delete($id);
		 $data['reservations']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
         //$this->load->view('admin_panel',$data);
		 $this->view();
	}
	
	 public function edit($id)
	{
       /*  $data['content']='admin/reservations/edit';
	     $data['reservations']= $this->Reservations_model->get_reservations_data($id);
         $this->load->view('admin_panel',$data);*/
		 
		 $reservations= $this->Reservations_model->get_reservations_data($id);
		 $reservations = $reservations[0];
		 $contracts= $this->Contracts_model->get_contracts();
		 $days= $this->Days_model->get_days();
		 $doctors= $this->Doctors_model->get_doctors();
		 $patients= $this->Patient_model->get_patients();
		 $services= $this->Services_model->get_services();
		 $reserve_status = $this->Reserve_status_model->get_reserve_status();
		 
		 $data['id']= $id;
		 $data['content']='admin/edit';
		 $data['title']=' تعديل بيانات الحجز';
		 $data['controller_name']='reservations';
		 $data['column_data']=array(
		 array('alies'=>'اليوم','type'=>'select','name'=>'day_id','sub_values'=>$days,'value'=>$reservations['day_id']),
		 array('alies'=>'تاريخ الحجز','type'=>'date','name'=>'reserve_date','value'=>$reservations['reserve_date']),
		 array('alies'=>'اسم المريض','type'=>'select','name'=>'patient_id','sub_values'=>$patients,'value'=>$reservations['patient_id']),
		 array('alies'=>'الطبيب','type'=>'select','name'=>'doctor_id','sub_values'=>$doctors,'value'=>$reservations['doctor_id']),
		 array('alies'=>'نوع الخدمة','type'=>'select','name'=>'service_id','sub_values'=>$services,'value'=>$reservations['service_id']),
		 array('alies'=>'جهة التعاقد','type'=>'select','name'=>'contract_id','sub_values'=>$contracts,'value'=>$reservations['contract_id']),
		 array('alies'=>'من','type'=>'text','name'=>'from_time','value'=>$reservations['from_time']),
		 array('alies'=>'الى','type'=>'text','name'=>'to_time','value'=>$reservations['to_time']),
		 array('alies'=>'حالة الحجز','type'=>'select','name'=>'status','sub_values'=>$reserve_status,'value'=>$reservations['status']));
         $this->load->view('admin_panel',$data);
         
		 
	}
	
		 public function save_edit ($id)
	{
       
		
		
		if($this->Reservations_model->save_edit($id))
		{
		/* $data['content']='admin/reservations/view';
		 $data['reservations']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
         $this->load->view('admin_panel',$data);*/
		 
		 $data['content']='admin/new_view'; //'view_reservations';
		 $data['title']=  "عرض الحجوزات";
		 $data['tbl_rows']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		 $data['tbl_columns'] = $this->Reservations_model->get_reservations_columns();
		 $data['tbl_column_alies'] = $this->Reservations_model->get_reservations_columns_alies();
		 $data['control_name']= 'reservations';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		}
		else
		{
		 /*$data['content']='admin/reservations/view';
		 $data['reservations']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
         $this->load->view('admin_panel',$data);*/
		 
		$data['content']='admin/new_view'; //'view_reservations';
		 $data['title']=  "عرض الحجوزات";
		 $data['tbl_rows']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		 $data['tbl_columns'] = $this->Reservations_model->get_reservations_columns();
		 $data['tbl_column_alies'] = $this->Reservations_model->get_reservations_columns_alies();
		 $data['control_name']= 'reservations';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		};
	}
	
	
	
	public function add ()
	{

		
		
		if($this->Reservations_model->add_new_reservations())
		{
			  $data['content']='admin/new_view'; //'view_reservations';
		 $data['title']=  "عرض الحجوزات";
		 $data['tbl_rows']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		 $data['tbl_columns'] = $this->Reservations_model->get_reservations_columns();
		 $data['tbl_column_alies'] = $this->Reservations_model->get_reservations_columns_alies();
		 $data['control_name']= 'reservations';
		 $data['error']= 1;
         $this->load->view('admin_panel',$data);
		}
		else
		{
		     $data['content']='admin/new_view'; //'view_reservations';
		 $data['title']=  "عرض الحجوزات";
		 $data['tbl_rows']= $this->Reservations_model->get_all_reservations_from_to(0,10);//$this->Reservations_model->get_all_reservations();
		 $data['tbl_columns'] = $this->Reservations_model->get_reservations_columns();
		 $data['tbl_column_alies'] = $this->Reservations_model->get_reservations_columns_alies();
		 $data['control_name']= 'reservations';
		 $data['error']= 0;
         $this->load->view('admin_panel',$data);
		}
		
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */