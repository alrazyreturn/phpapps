<?

class Yes_no_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_yes_no()
    {
		
	
	   
      $sql="SELECT * FROM `yes_no` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}