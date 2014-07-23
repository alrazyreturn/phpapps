<?

class Tests_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_tests()
    {
		
	
	   
      $sql="SELECT * FROM `tests` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

	
	public function get_tests_columns()
	 {
      $array_names= array('name','notes');
	  return $array_names;
    }
	
		 
	public function get_tests_columns_alies()
    {
      $array_alies= array('الاسم','الملاحظات');
	  return $array_alies;
    }
	
	
	public function get_all_tests()
    {
      $sql="SELECT  * from tests";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	public function get_all_tests_from_to($from,$to)
    {
      $sql="SELECT  * from tests LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
 
	
		public function get_tests_data($id)
    {
       $sql="SELECT  * from tests where  tests.id=$id "; 
	  
	 // $sql= "select * from tests where tests.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$name=$_POST['name'];
	    $notes=$_POST['notes'];
		 
		
      $sql="update `clinic`.`tests` set `name`= '$name' , `notes`='$notes' where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_tests()
    {
		$name=$_POST['name'];
	    $notes=$_POST['notes'];
	   
      $sql="INSERT INTO `clinic`.`tests` (`name`, `notes`  ) VALUES ('$name', '$notes');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `tests` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}