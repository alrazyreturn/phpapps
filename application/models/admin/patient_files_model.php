<?

class Patient_files_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_patient_files()
    {
		
	
	   
      $sql="SELECT * FROM `patient_files` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }

}