<?

class Patientvisit_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
			 
	public function get_visit($id)
	{
	  $sql="select * from patient_visits where patient_id=$id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
	}
	
	
	 public function save_edit_patient($id)
    {
	    $patient_id=$_POST['patient_id'];
	    $visit_date=$_POST['visit_date'];
	    $service_id=$_POST['service_id'];
	    $paient_problems=$_POST['paient_problems'];
		
		$caveats=$_POST['caveats'];
	    $paient_diagnosis=$_POST['paient_diagnosis'];
		
	    $midicne=$_POST['midicne'];
	    @$dexazone_tab=$_POST['dexazone_tab'];
		@$tba=$_POST['tba'];
		@$Prostaglandime=$_POST['Prostaglandime'];
		
		@$radiologic=$_POST['radiologic'];
	    @$ascending=$_POST['ascending'];
	    @$duplex=$_POST['duplex'];
		
		$radiologic_result=$_POST['radiologic_result'];
	    $ascending_result=$_POST['ascending_result'];
	    $duplex_result=$_POST['duplex_result'];
		
		if(empty($dexazone_tab))
		{
		$dexazone_tab=0;
		}
		else
		{
		$dexazone_tab=1;
		}
		
			if(empty($tba))
		{
		$tba=0;
		}
		else
		{
		$tba=1;
		}
		
			if(empty($Prostaglandime))
		{
		$Prostaglandime=0;
		}
		else
		{
		$Prostaglandime=1;
		}
		
			if(empty($radiologic))
		{
		$radiologic=0;
		}
		else
		{
		$radiologic=1;
		}
		
			if(empty($ascending))
		{
		$ascending=0;
		}
		else
		{
		$ascending=1;
		}
		
				if(empty($duplex))
		{
		$duplex=0;
		}
		else
		{
		$duplex=1;
		}
		
		
	
      $sql="update   patient_visits set patient_id='$patient_id', visit_date='$visit_date', service_id=$service_id   ,paient_problems='$paient_problems', caveats='$caveats', paient_diagnosis='$paient_diagnosis', midicne='$midicne', dexazone_tab=$dexazone_tab, tba=$tba, Prostaglandime=$Prostaglandime, radiologic=$radiologic  ,ascending=$ascending,duplex=$duplex,radiologic_result='$radiologic_result',ascending_result='$ascending_result',duplex_result='$duplex_result' where id=$id";
	  
	 return $query = $this->db->query($sql);
    }
	
	
	
    public function add_new_patient()
    {
		$patient_id=$_POST['patient_id'];
	    $visit_date=$_POST['visit_date'];
	    $id=$_POST['id'];
		$visit=$_POST['visit'];
	    $paient_problems=$_POST['paient_problems'];
		
		$caveats=$_POST['caveats'];
	    $paient_diagnosis=$_POST['paient_diagnosis'];
		
	    $midicne=$_POST['midicne'];
	    @$dexazone_tab=$_POST['dexazone_tab'];
		@$tba=$_POST['tba'];
		@$Prostaglandime=$_POST['Prostaglandime'];
		
		@$radiologic=$_POST['radiologic'];
	    @$ascending=$_POST['ascending'];
	    @$duplex=$_POST['duplex'];
		
		$radiologic_result=$_POST['radiologic_result'];
	    $ascending_result=$_POST['ascending_result'];
	    $duplex_result=$_POST['duplex_result'];
		
		if(empty($dexazone_tab))
		{
		$dexazone_tab=0;
		}
		else
		{
		$dexazone_tab=1;
		}
		
			if(empty($tba))
		{
		$tba=0;
		}
		else
		{
		$tba=1;
		}
		
			if(empty($Prostaglandime))
		{
		$Prostaglandime=0;
		}
		else
		{
		$Prostaglandime=1;
		}
		
			if(empty($radiologic))
		{
		$radiologic=0;
		}
		else
		{
		$radiologic=1;
		}
		
			if(empty($ascending))
		{
		$ascending=0;
		}
		else
		{
		$ascending=1;
		}
		
				if(empty($duplex))
		{
		$duplex=0;
		}
		else
		{
		$duplex=1;
		}
		
		
	
      $sql="INSERT INTO `clinic`. patient_visits (patient_id, visit_date, service_id,visit_number ,paient_problems, caveats, paient_diagnosis, midicne, dexazone_tab, tba, Prostaglandime, radiologic ,ascending,duplex,radiologic_result,ascending_result,duplex_result) VALUES ($patient_id, '$visit_date', $id , $visit , '$paient_problems', '$caveats', '$paient_diagnosis', '$midicne', $dexazone_tab, $tba, $Prostaglandime, $radiologic ,$ascending,$duplex,'$radiologic_result','$ascending_result','$duplex_result');";
	 return $query = $this->db->query($sql);
    }
	
	
	public function get_all_patients()
    {
      $sql="SELECT * , patient_visits.id as visit_id
FROM `patient_visits` , patients
WHERE patient_visits.patient_id = patients.id
ORDER BY patient_visits.id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_patient_data($id)
    {
      $sql="SELECT * , patient_visits.id as visit_id, services.name as service , patients.name as patient_name
FROM `patient_visits` , patients , services
WHERE services.id=patient_visits.service_id   and  patient_visits.patient_id = patients.id and patient_visits.id=$id
ORDER BY patient_visits.id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_patients_columns()
    {
      $array_names= array('name','code','contract_name','job','age','sex'  ,'address');
	  return $array_names;
    }
	
		 
	public function get_patients_columns_alies()
    {
      $array_alies= array('اسم المريض','كود المريض','جهة التعاقد','الوظيفة','العمر','الجنس' ,'العنوان');
	  return $array_alies;
    }
	
		public function delete($id)
    {
      $sql="delete from patient_visits  where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

}