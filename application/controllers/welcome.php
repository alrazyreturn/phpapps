

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	 public function __construct()
	{
		parent::__construct();
			$this->load-> model('Admin_model');
			$this->load-> model('Helpme_model');
			//$this->load-> model('admin/Admin_model');
			$this->load-> model('admin/Medicines_model');
			$this->load-> model('admin/Tests_model');
			$this->load-> model('admin/Reservations_model');
			$this->load-> model('admin/Doctors_model');
			$this->load-> model('admin/Patient_model');
			$this->load-> model('admin/Services_model');
			$this->load-> model('admin/Contracts_model');
			$this->load-> model('admin/Specialties_model');
			

	}
	  
	 
	public function index()
	{
		$this->load->view('login');
	}
	
	public function test()
	{
	 
		 $data['content']='admin/test';
		  
         $this->load->view('admin_panel',$data);
	}
	
	
	public function get_search_data_from($control_name,$value,$column_name,$from,$count)
	{
		//$rows = $this->Helpme_model->get_search_data($control_name,$value,$column_name);
		
		 if($control_name=="medicines")
		{
		   $tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
		   $all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Medicines_model->get_medicines_columns();
		   $tbl_column_alies =$this->Medicines_model->get_medicines_columns_alies();
		}
		elseif($control_name=="patient")
		{												   	
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Patient_model->get_patient_columns();
		   $tbl_column_alies =$this->Patient_model->get_patients_columns_alies();
		}
		elseif($control_name=="reservations")
		{
			$tbl_rows= $this->Reservations_model->get_all_reservations_search($column_name,$value);
			//$tbl_rows= $this->Helpme_model->get_query($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
			 //$tbl_rows= $this->Reservations_model->get_all_reservations_from_to($from_data,$count);
		    $tbl_columns  = $this->Reservations_model->get_reservations_columns();
		    $tbl_column_alies =$this->Reservations_model->get_reservations_columns_alies();
		}
		elseif($control_name=="specialties")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Specialties_model->get_specialties_columns();
		   $tbl_column_alies =$this->Specialties_model->get_specialties_columns_alies();
		}
		elseif($control_name=="tests")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Tests_model->get_tests_columns();
		   $tbl_column_alies =$this->Tests_model->get_tests_columns_alies();
		}
		elseif($control_name=="admin")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Admin_model->get_admin_columns();
		   $tbl_column_alies =$this->Admin_model->get_admin_columns_alies();
		}
		
		elseif($control_name=="doctors")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Doctors_model->get_doctors_columns();
		   $tbl_column_alies =$this->Doctors_model->get_doctors_columns_alies();
		}
		//$count=100;
		//$from=1;
		  $output_string = $this->Helpme_model->get_table_search($count,$tbl_rows,$tbl_columns,$control_name,$tbl_column_alies,$all_rows,$from);
         //$output_string= "Note.. tbl_rows= $tbl_rows tbl_columns= $tbl_columns and  control_name= $control_name and tbl_column_alies= $tbl_column_alies and control_name= $control_name and tbl_column_alies= $tbl_column_alies  and all_rows= $all_rows ";
		//$output_string.="<br/>select * from $control_name where $column_name like '%$value%' ";
		
	 	echo json_encode($output_string);
		
	  
	}
	
	public function get_search_data($control_name,$value,$column_name,$count)
	{
		//$rows = $this->Helpme_model->get_search_data($control_name,$value,$column_name);
		//
		 if($control_name=="medicines")
		{
		   $tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
		   $all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Medicines_model->get_medicines_columns();
		   $tbl_column_alies =$this->Medicines_model->get_medicines_columns_alies();
		}
		elseif($control_name=="patient")
		{												   	
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Patient_model->get_patient_columns();
		   $tbl_column_alies =$this->Patient_model->get_patients_columns_alies();
		}
		elseif($control_name=="reservations")
		{
			$tbl_rows= $this->Reservations_model->get_all_reservations_search($column_name,$value);
			//$tbl_rows= $this->Helpme_model->get_query($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
			 //$tbl_rows= $this->Reservations_model->get_all_reservations_from_to($from_data,$count);
		    $tbl_columns  = $this->Reservations_model->get_reservations_columns();
		    $tbl_column_alies =$this->Reservations_model->get_reservations_columns_alies();
		}
		elseif($control_name=="specialties")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Specialties_model->get_specialties_columns();
		   $tbl_column_alies =$this->Specialties_model->get_specialties_columns_alies();
		}
		elseif($control_name=="tests")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Tests_model->get_tests_columns();
		   $tbl_column_alies =$this->Tests_model->get_tests_columns_alies();
		}
		
		elseif($control_name=="doctors")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Doctors_model->get_doctors_columns();
		   $tbl_column_alies =$this->Doctors_model->get_doctors_columns_alies();
		}
		
		
		elseif($control_name=="admin")
		{
			$tbl_rows= $this->Helpme_model->get_search_data($control_name,$value,$column_name);
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Admin_model->get_admin_columns();
		   $tbl_column_alies =$this->Admin_model->get_admin_columns_alies();
		}
		 //$count=100;
		//$from=1;
		$output_string =" value = $value <br/>";
		  $output_string .= $this->Helpme_model->get_table_search($count,$tbl_rows,$tbl_columns,$control_name,$tbl_column_alies,$all_rows);
         //$output_string= "Note.. tbl_rows= $tbl_rows tbl_columns= $tbl_columns and  control_name= $control_name and tbl_column_alies= $tbl_column_alies and control_name= $control_name and tbl_column_alies= $tbl_column_alies  and all_rows= $all_rows ";
		 $output_string.="select * from (SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name service_name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status
	  where 
	  reservations.day_id = days.id 
	  and reservations.contract_id = contracts.id 
	  and reservations.doctor_id = doctors.id 
	  and reservations.id = services.id 
	  and reservations.patient_id = patients.id 
	   and reservations.status = reserve_status.id )as data 
	   where $column_name like '%$value%'
	   order by id";
		
	 	echo json_encode($output_string);
		
	  
	}
	
	public function testme($id,$control_name,$from)
	{
	   //$data['tbl_rows']= $this->Helpme_model->get_all_tests();
		$output_string ="welcome at $id grid iam at controller_name= $control_name but from = $from";
		//$this->load->view('admin/tt.php');
		echo json_encode($output_string);
	}
	
	public function get_data($count,$control_name)
	{
		$tbl_columns='';
		$tbl_rows='';
		$tbl_column_alies='';
		$all_rows=0;
		$from=0;
		$to=$count;
	 
		if($control_name=="medicines")
		{
		   $tbl_rows= $this->Medicines_model->get_all_medicines();
		   $all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Medicines_model->get_medicines_columns();
		   $tbl_column_alies =$this->Medicines_model->get_medicines_columns_alies();
		}
		elseif($control_name=="patient")
		{
			$tbl_rows= $this->Patient_model->get_all_patient();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Patient_model->get_patient_columns();
		   $tbl_column_alies =$this->Patient_model->get_patients_columns_alies();
		}
		elseif($control_name=="reservations")
		{
			$tbl_rows= $this->Reservations_model->get_all_reservations();
			$all_rows=sizeof($tbl_rows);
			$tbl_rows= $this->Reservations_model->get_all_reservations_from_to($from,$to);
		   $tbl_columns  = $this->Reservations_model->get_reservations_columns();
		   $tbl_column_alies =$this->Reservations_model->get_reservations_columns_alies();
		}
		elseif($control_name=="specialties")
		{
			$tbl_rows= $this->Specialties_model->get_all_specialties();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Specialties_model->get_specialties_columns();
		   $tbl_column_alies =$this->Specialties_model->get_specialties_columns_alies();
		}
		elseif($control_name=="tests")
		{
			$tbl_rows= $this->Tests_model->get_all_tests();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Tests_model->get_tests_columns();
		   $tbl_column_alies =$this->Tests_model->get_tests_columns_alies();
		}
		
				elseif($control_name=="doctors")
		{
			$tbl_rows= $this->Doctors_model->get_all_doctors();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Doctors_model->get_doctors_columns();
		   $tbl_column_alies =$this->Doctors_model->get_doctors_columns_alies();
		}
		 
		elseif($control_name=="admin")
		{
			$tbl_rows= $this->Admin_model->get_all_admin();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Admin_model->get_admin_columns();
		   $tbl_column_alies =$this->Admin_model->get_admin_columns_alies();
		}
		
		 $output_string = $this->Helpme_model->get_table($count,$tbl_rows,$tbl_columns,$control_name,$tbl_column_alies,$all_rows);
		
        //$output_string="welcome";
		
	 	echo json_encode($output_string);
	}
	
	
	public function get_data_from_to($count,$control_name,$from=1)
	{
		$tbl_columns='';
		$tbl_rows='';
		$tbl_column_alies='';
		$all_rows=0;
		 //$from=0;
		$to=$count*$from;
		//echo "to= $to <br/>";
		$from_data= ($from*$count)-$count;
		//echo "from_data= $from_data <br/>";
	 
		if($control_name=="medicines")
		{
		   $tbl_rows= $this->Medicines_model->get_all_medicines();
		   $all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Medicines_model->get_medicines_columns();
		   $tbl_column_alies =$this->Medicines_model->get_medicines_columns_alies();
		}
		elseif($control_name=="patient")
		{
			$tbl_rows= $this->Patient_model->get_all_patient();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Patient_model->get_patient_columns();
		   $tbl_column_alies =$this->Patient_model->get_patients_columns_alies();
		}
		elseif($control_name=="reservations")
		{
			$tbl_rows= $this->Reservations_model->get_all_reservations();
			$all_rows=sizeof($tbl_rows);
			$tbl_rows= $this->Reservations_model->get_all_reservations_from_to($from_data,$count);
		   $tbl_columns  = $this->Reservations_model->get_reservations_columns();
		   $tbl_column_alies =$this->Reservations_model->get_reservations_columns_alies();
		}
		elseif($control_name=="specialties")
		{
			$tbl_rows= $this->Specialties_model->get_all_specialties();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Specialties_model->get_specialties_columns();
		   $tbl_column_alies =$this->Specialties_model->get_specialties_columns_alies();
		}
		elseif($control_name=="tests")
		{
			$tbl_rows= $this->Tests_model->get_all_tests();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Tests_model->get_tests_columns();
		   $tbl_column_alies =$this->Tests_model->get_tests_columns_alies();
		}
		
			elseif($control_name=="doctors")
		{
			$tbl_rows= $this->Doctors_model->get_all_doctors();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Doctors_model->get_doctors_columns();
		   $tbl_column_alies =$this->Doctors_model->get_doctors_columns_alies();
		}
		 
		 
		elseif($control_name=="admin")
		{
			$tbl_rows= $this->Admin_model->get_all_admin();
			$all_rows=sizeof($tbl_rows);
		   $tbl_columns  = $this->Admin_model->get_admin_columns();
		   $tbl_column_alies =$this->Admin_model->get_admin_columns_alies();
		}
		
		 $output_string = $this->Helpme_model->get_table($count,$tbl_rows,$tbl_columns,$control_name,$tbl_column_alies,$all_rows,$from);
		
        //$output_string="welcome";
		
	 	echo json_encode($output_string);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */