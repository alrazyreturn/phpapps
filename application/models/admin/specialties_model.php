<?

class Specialties_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_specialties()
    {
		
	
	   
      $sql="SELECT * FROM `specialties` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
	public function get_specialties_columns()
	 {
      $array_names= array('name','notes');
	  return $array_names;
    }
	
		 
	public function get_specialties_columns_alies()
    {
      $array_alies= array('اسم التخصص','الملاحظات');
	  return $array_alies;
    }
	
	
	public function get_all_specialties()
    {
      $sql="SELECT  * from specialties";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	public function get_all_specialties_from_to($from,$to)
    {
      $sql="SELECT  * from specialties LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
 
	
		public function get_specialties_data($id)
    {
       $sql="SELECT  * from specialties where  specialties.id=$id "; 
	  
	 // $sql= "select * from specialties where specialties.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$name=$_POST['name'];
	    $notes=$_POST['notes'];
		 
		
      $sql="update `clinic`.`specialties` set `name`= '$name' , `notes`='$notes' where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_specialties()
    {
		$name=$_POST['name'];
	    $notes=$_POST['notes'];
	   
      $sql="INSERT INTO `clinic`.`specialties` (`name`, `notes`  ) VALUES ('$name', '$notes');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `specialties` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}