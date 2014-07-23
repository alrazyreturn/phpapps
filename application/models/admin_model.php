<?

class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function check_login($user_name,$pass)
    {
        $sql="SELECT * FROM `admin` WHERE user_name='$user_name' and password='".md5($pass)."'";
		$query = $this->db->query($sql);
		return $query->result_array(); 
    }
	
	
    public function get_admin()
    {
		
	
	   
      $sql="SELECT * FROM `admin` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
	public function get_admin_columns()
	 {
      $array_names= array('name','user_name' );
	  return $array_names;
    }
	
		 
	public function get_admin_columns_alies()
    {
      $array_alies= array('اسم التخصص','اسم المستخدم' );
	  return $array_alies;
    }
	
	
	public function get_all_admin()
    {
      $sql="SELECT  * from admin";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	public function get_all_admin_from_to($from,$to)
    {
      $sql="SELECT  * from admin LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_admin_data($id)
    {
       $sql="SELECT  * from admin where  admin.id=$id "; 
	  
	 // $sql= "select * from admin where admin.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$name=$_POST['name'];
	    $user_name=$_POST['user_name'];
		//$password=$_POST['password'];
		
		
		if(isset($_POST['patients_access']))
		{
		$patients_access=1;
		}
		else
		{
			$patients_access=0;
		}
		
		if(isset($_POST['contracts_access']))
		{
		$contracts_access=1;
		}
		else
		{
			$contracts_access=0;
		}
		
		
		if(isset($_POST['services_access']))
		{
		$services_access=1;
		}
		else
		{
			$services_access=0;
		}
		
		
		if(isset($_POST['doctors_access']))
		{
		$doctors_access=1;
		}
		else
		{
			$doctors_access=0;
		}
		
		
		if(isset($_POST['reservations_access']))
		{
		$reservations_access=1;
		}
		else
		{
			$reservations_access=0;
		}
		
		
		if(isset($_POST['medicines_access']))
		{
		$medicines_access=1;
		}
		else
		{
			$medicines_access=0;
		}
		
		
		if(isset($_POST['patient_files_access']))
		{
		$patient_files_access=1;
		}
		else
		{
			$patient_files_access=0;
		}
		
		
		if(isset($_POST['tests_access']))
		{
		$tests_access=1;
		}
		else
		{
			$tests_access=0;
		}
		
		
		
		if(isset($_POST['patient_visits_access']))
		{
		$patient_visits_access=1;
		}
		else
		{
			$patient_visits_access=0;
		}
	   
	   
	   if(isset($_POST['specialties_access']))
		{
		$specialties_access=1;
		}
		else
		{
			$specialties_access=0;
		}
	   
	   
	   
	   if(isset($_POST['users_access']))
		{
		$users_access = 1;
		}
		else
		{
			$users_access=0;
		}
	   
		 
		 
      $sql="update `clinic`.`admin` set 
	  `name`= '$name' ,
	  `user_name`= '$user_name' ,
	  `patients_access`= '$patients_access' ,
	  `contracts_access`=  $contracts_access  ,
	  `services_access`=  $services_access  ,
	  `doctors_access`=  $doctors_access  ,
	  `reservations_access`=  $reservations_access  ,
	  `medicines_access`=  $medicines_access  ,
	  `patient_files_access`= $patient_files_access  ,
	  `tests_access`=  $tests_access ,
	  `patient_visits_access`=  $patient_visits_access  ,
	  `specialties_access`=  $specialties_access   ,
	  `users_access` =  $users_access   
	  where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_admin()
    {
		$name=$_POST['name'];
	    $user_name=$_POST['user_name'];
		$password=$_POST['password'];
		if(isset($_POST['patients_access']))
		{
		$patients_access=1;
		}
		else
		{
			$patients_access=0;
		}
		
		if(isset($_POST['contracts_access']))
		{
		$contracts_access=1;
		}
		else
		{
			$contracts_access=0;
		}
		
		
		if(isset($_POST['services_access']))
		{
		$services_access=1;
		}
		else
		{
			$services_access=0;
		}
		
		
		if(isset($_POST['doctors_access']))
		{
		$doctors_access=1;
		}
		else
		{
			$doctors_access=0;
		}
		
		
		if(isset($_POST['reservations_access']))
		{
		$reservations_access=1;
		}
		else
		{
			$reservations_access=0;
		}
		
		
		if(isset($_POST['medicines_access']))
		{
		$medicines_access=1;
		}
		else
		{
			$medicines_access=0;
		}
		
		
		if(isset($_POST['patient_files_access']))
		{
		$patient_files_access=1;
		}
		else
		{
			$patient_files_access=0;
		}
		
		
		if(isset($_POST['tests_access']))
		{
		$tests_access=1;
		}
		else
		{
			$tests_access=0;
		}
		
		
		
		if(isset($_POST['patient_visits_access']))
		{
		$patient_visits_access=1;
		}
		else
		{
			$patient_visits_access=0;
		}
	   
	   
	   if(isset($_POST['specialties_access']))
		{
		$specialties_access=1;
		}
		else
		{
			$specialties_access=0;
		}
	   
	   
	   
	   if(isset($_POST['users_access']))
		{
		$users_access=1;
		}
		else
		{
			$users_access=0;
		}
	   
	  
		 
      $sql="INSERT INTO `clinic`.`admin` (`name`,`user_name`,`password`,`patients_access`,`contracts_access`,`services_access`,`doctors_access`,`reservations_access`,`medicines_access`,`patient_files_access`,`tests_access`,`patient_visits_access`,`specialties_access` ,users_access ) VALUES ('$name', '$user_name', '".md5($password)."', '$patients_access', '$contracts_access', '$services_access', '$doctors_access', '$reservations_access', '$medicines_access', '$patient_files_access', '$tests_access', '$patient_visits_access', '$specialties_access' ,'$users_access');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `admin` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}

?>
  