<?

class Patient_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	 public function save_edit($id,$pic_name )
    {
		$name=$_POST['name'];
	    $code=$_POST['code'];
	    $job=$_POST['job'];
	    $contract=$_POST['contract'];
		$gender=$_POST['gender'];
	    $date=$_POST['date'];
	    $age=$_POST['age'];
	    $address=$_POST['address'];
		$mobile=$_POST['mobile'];
	    $phone=$_POST['phone'];
	    $notes=$_POST['notes']; 
		
      $sql="update `clinic`.`patients` set `name`='$name', `pic`='$pic_name', `job`='$job', `contract_id`='$contract', `sex`='$gender', `age`='$age', `address`='$address', `mobile`='$mobile', `phone`='$phone', `notes`='$notes', code='$code' ,birthdate='$date' where id=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_patient($pic_name)
    {
		$name=$_POST['name'];
	    $code=$_POST['code'];
	    $job=$_POST['job'];
	    $contract=$_POST['contract'];
		
		$gender=$_POST['gender'];
	    $date=$_POST['date'];
	    $age=$_POST['age'];
	    $address=$_POST['address'];
		
		$mobile=$_POST['mobile'];
	    $phone=$_POST['phone'];
	    $notes=$_POST['notes'];
	
	   
      $sql="INSERT INTO `clinic`.`patients` (`name`, `pic`, `job`, `contract_id`, `sex`, `age`, `address`, `mobile`, `phone`, `notes`, code ,birthdate) VALUES ('$name', '$pic_name', '$job', '$contract', '$gender', '$age', '$address', '$mobile', '$phone', '$notes', '$code' ,'$date');";
	 return $query = $this->db->query($sql);
    }
	
	
	public function get_all_patients()
    {
      $sql="SELECT * FROM `patients` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
   public function get_all_patients_from_to($from,$to)
    {
      $sql="	SELECT * 
FROM  `patients` 
LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_patient_data($id)
    {
      $sql="SELECT *,patients.name  patient_name  ,patients.notes  patient_note, contracts.name   contract FROM contracts,`patients` where patients.id=$id and contracts.id=patients.contract_id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
		public function get_patients_columns()
    {
      $array_names= array('name','code','contract_name','job','age','sex'  ,'address');
	  return $array_names;
    }
	
	
	
	
		 
	public function get_patients_columns_alies()
    {
      $array_alies= array('اسم المريض','كود المريض','جهة التعاقد','الوظيفة','العمر','الجنس' ,'العنوان');
	  return $array_alies;
    }
	
		public function delete($id)
    {
      $sql="delete from `patients` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }
	
	 public function get_patients()
    {
		
	
	   
      $sql="SELECT * FROM patients order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
	  
	 
    }

}