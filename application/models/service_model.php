<?

class Service_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
		public function get_all_services()
    {
      $sql="SELECT * FROM services ORDER BY id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	  public function get_service($id)
    {
      $sql="SELECT * FROM `services` where id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	 public function add_new_patient()
    {
		$name=$_POST['name'];
	    $amount=$_POST['amount'];
	    $notes=$_POST['notes'];
		
		$sql="INSERT INTO services (name, amount, notes) VALUES ('$name', $amount, '$notes');";
	 return $query = $this->db->query($sql);
		
	}
	
		 public function save_edit($id)
    {
		$name=$_POST['name'];
	    $amount=$_POST['amount'];
	    $notes=$_POST['notes'];
		
		$sql="update services set name='$name', amount=$amount, notes='$notes' where id=$id";
	    return $query = $this->db->query($sql);
		
	}
	
		 public function delete($id)
    {
		try{
			
	 $sql="delete from services where id=$id";
	  $query = $this->db->query($sql);	
	  
	  if (!$query)
          {
           $error="true";
            return  $error;
          } 
		 
		      return $query;
		  
        }
		     
	  catch (Exception $e) 
	  {
         return;
      } 
	  
	}
	
	
	
	}