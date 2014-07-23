<?

class Days_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_days()
    {
		
	
	   
      $sql="SELECT * FROM `days` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}