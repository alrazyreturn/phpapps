<?

class Contracts_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_contracts()
    {
		
	
	   
      $sql="SELECT * FROM `contracts` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}