<?

class services_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_services()
    {
		
	
	   
      $sql="SELECT * FROM `services` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}