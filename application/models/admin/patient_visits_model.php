<?

class patient_visits_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_patient_visits()
    {
		
	
	   
      $sql="SELECT * FROM `patient_visits` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}