<?

class Medicines_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_medicines()
    {
		
	
	   
      $sql="SELECT * FROM `medicines` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

	
	public function get_medicines_columns()
	 {
      $array_names= array('name','for');
	  return $array_names;
    }
	
		 
	public function get_medicines_columns_alies()
    {
      $array_alies= array('الاسم','الإستخدام');
	  return $array_alies;
    }
	

	
	public function get_all_medicines()
    {
      $sql="SELECT  * from medicines";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	 
	
 	public function get_all_medicines_from_to($from,$to)
    {
      $sql="	SELECT * 
FROM  medicines 
LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_medicines_data($id)
    {
       $sql="SELECT  * from medicines where  medicines.id=$id "; 
	  
	 // $sql= "select * from medicines where medicines.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$name=$_POST['name'];
	    $for=$_POST['for'];
		 
		
      $sql="update `clinic`.`medicines` set `name`= '$name' , `for`='$for' where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_medicines()
    {
		$name=$_POST['name'];
	    $for=$_POST['for'];
	   
      $sql="INSERT INTO `clinic`.`medicines` (`name`, `for`  ) VALUES ('$name', '$for');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `medicines` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}