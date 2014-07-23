<?

class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_admin()
    {
		
	
	   
      $sql="SELECT * FROM `admin` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
	public function get_admin_columns()
	 {
      $array_names= array('name','user_name','password','patients_access','contracts_access','services_access','doctors_access','reservations_access','medicines_access','patient_files_access','tests_access','patient_visits_access','specialties_access');
	  return $array_names;
    }
	
		 
	public function get_admin_columns_alies()
    {
      $array_alies= array('اسم التخصص','اسم المستخدم','كلمة المرور','دخول للمرضى','دخول جهات التعاقد','دخول للخدمات','دخول للإطباء','دخول للحجوزات','دخول للدواء','دخول لملفات المرضى','دخول للتحاليل','دخول لزيارات المرضى','دخول للتخصصات');
	  return $array_alies;
    }
	
	
	public function get_all_admin()
    {
      $sql="SELECT  * from admin";
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
	    $notes=$_POST['notes'];
		 
		 
      $sql="update `clinic`.`admin` set 
	  `name`= '$name' ,
	  `user_name`= '$user_name' ,
	  `password`= '$password' ,
	  `patients_access`= '$patients_access' ,
	  `contracts_access`= '$contracts_access' ,
	  `services_access`= '$services_access' ,
	  `doctors_access`= '$doctors_access' ,
	  `reservations_access`= '$reservations_access' ,
	  `medicines_access`= '$medicines_access' ,
	  `patient_files_access`= '$patient_files_access' ,
	  `tests_access`= '$tests_access' ,
	  `patient_visits_access`= '$patient_visits_access' ,
	  `specialties_access`= '$specialties_access' ,
	  
	  where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_admin()
    {
		$name=$_POST['name'];
	    $notes=$_POST['notes'];
	   
	     $array_names= array('name','user_name','password','patients_access','contracts_access','services_access','doctors_access','reservations_access','medicines_access','patient_files_access','tests_access','patient_visits_access','specialties_access');
		 
      $sql="INSERT INTO `clinic`.`admin` (`name`,`user_name`,`password`,`patients_access`,`contracts_access`,`services_access`,`doctors_access`,`reservations_access`,`medicines_access`,`patient_files_access`,`tests_access`,`patient_visits_access`,`specialties_access` ) VALUES ('$name', '$user_name', '$password', '$patients_access', '$contracts_access', '$services_access', '$doctors_access', '$reservations_access', '$medicines_access', '$patient_files_access', '$tests_access', '$patient_visits_access', '$specialties_access');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `admin` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}