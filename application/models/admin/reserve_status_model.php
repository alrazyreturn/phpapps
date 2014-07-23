<?

class Reserve_status_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_reserve_status()
    {
		
	
	   
      $sql="SELECT * FROM reserve_status order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}