<?

class Patientfile_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	 public function save_edit_patient($id,$pic_name1,$pic_name2,$pic_name3 )
    {
		$patient_id=$_POST['patient_id'];
	    $surgery_name=$_POST['surgery_name'];
	    $surgery_place=$_POST['surgery_place'];
	    $surgery_date=$_POST['surgery_date'];
		
		$reserve_date=$_POST['reserve_date'];
	    $surgery_description=$_POST['surgery_description'];
	    $doctor_name=$_POST['doctor_name'];
	    $surgery_reasons=$_POST['surgery_reasons'];
		$Symptoms=$_POST['Symptoms'];
		$age=$_POST['age'];
		
		$pre_paient_disease=$_POST['pre_paient_disease'];
	    $paient_history=$_POST['paient_history'];
	    $radiologic=$_POST['radiologic'];
		
		$ascending=$_POST['ascending'];
	    $duplex=$_POST['duplex'];
	    $paient_family_disease_history=$_POST['paient_family_disease_history'];
		
		$paient_problems=$_POST['paient_problems'];
	    $paient_diagnosis=$_POST['paient_diagnosis'];
	    $midicne=$_POST['midicne'];
		
		$ray1=$_POST['ray1'];
	    $ray2=$_POST['ray2'];
	    $ray3=$_POST['ray3'];
		
		$notes=$_POST['notes'];
		$pic="";
		$pic2="";
		$pic3="";
		if(empty($pic_name1))
		{
			$pic="";
		}
		else
		{
			$pic=",ray1_pic='$pic_name1'";
		}
		
			
		if(empty($pic_name2))
		{
			$pic2="";
		}
		else
		{
			$pic2=",ray2_pic='$pic_name2'";
		}
		
			
		if(empty($pic_name3))
		{
			$pic3="";
		}
		else
		{
			$pic3=",ray3_pic='$pic_name3'";
		}
		
		$end="where patient_files.id=$id";
	
	$sql="update patient_files set patient_id='$patient_id', surgery_name='$surgery_name', surgery_place='$surgery_place', surgery_date='$surgery_date', reserve_date='$reserve_date', surgery_description='$surgery_description', doctor_name='$doctor_name', surgery_reasons='$surgery_reasons', Symptoms='$Symptoms', patient_age_at_surgery=$age, pre_paient_disease='$pre_paient_disease' ,paient_history='$paient_history',radiologic='$radiologic',ascending='$ascending',duplex='$duplex',paient_family_disease_history='$paient_family_disease_history',paient_problems='$paient_problems',paient_diagnosis='$paient_diagnosis',midicne='$midicne',ray1='$ray1',ray2='$ray2',ray3='$ray3',notes='$notes'".$pic.$pic2.$pic3.$end;
	 return $query = $this->db->query($sql);
    }
	
	
	
    public function add_new_patient($pic_name1,$pic_name2,$pic_name3)
    {
		$patient_id=$_POST['patient_id'];
	    $surgery_name=$_POST['surgery_name'];
	    $surgery_place=$_POST['surgery_place'];
	    $surgery_date=$_POST['surgery_date'];
		
		$reserve_date=$_POST['reserve_date'];
	    $surgery_description=$_POST['surgery_description'];
	    $doctor_name=$_POST['doctor_name'];
	    $surgery_reasons=$_POST['surgery_reasons'];
		$Symptoms=$_POST['Symptoms'];
		$age=$_POST['age'];
		
		$pre_paient_disease=$_POST['pre_paient_disease'];
	    $paient_history=$_POST['paient_history'];
	    $radiologic=$_POST['radiologic'];
		
		$ascending=$_POST['ascending'];
	    $duplex=$_POST['duplex'];
	    $paient_family_disease_history=$_POST['paient_family_disease_history'];
		
		$paient_problems=$_POST['paient_problems'];
	    $paient_diagnosis=$_POST['paient_diagnosis'];
	    $midicne=$_POST['midicne'];
		
		$ray1=$_POST['ray1'];
	    $ray2=$_POST['ray2'];
	    $ray3=$_POST['ray3'];
		
		$notes=$_POST['notes'];
	   // $id9=$_POST['id9'];
	   
      $sql="INSERT INTO `clinic`. patient_files (patient_id, surgery_name, surgery_place, surgery_date, reserve_date, surgery_description, doctor_name, surgery_reasons, Symptoms, patient_age_at_surgery, pre_paient_disease ,paient_history,radiologic,ascending,duplex,paient_family_disease_history,paient_problems,paient_diagnosis,midicne,ray1,ray2,ray3,ray1_pic,ray2_pic,ray3_pic,notes) VALUES ('$patient_id', '$surgery_name', '$surgery_place', '$surgery_date', '$reserve_date', '$surgery_description', '$doctor_name', '$surgery_reasons', '$Symptoms', $age, '$pre_paient_disease' ,'$paient_history','$radiologic','$ascending','$duplex','$paient_family_disease_history','$paient_problems','$paient_diagnosis','$midicne', '$ray1', '$ray2', '$ray3','$pic_name1','$pic_name2','$pic_name3','notes');";
	 return $query = $this->db->query($sql);
    }
	
	
	public function get_all_patients()
    {
      $sql="SELECT patient_files.id,patient_files. surgery_name ,patient_files.reserve_date, patient_files.surgery_date,patient_files. doctor_name, patients.name FROM patient_files , patients where  patients.id=patient_files.patient_id  order by patient_files.id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_patient_data($id)
    {
      $sql="SELECT *,patient_files.id as file_id, patients.name FROM patient_files , patients where patient_files.id=$id  and patients.id=patient_files.patient_id    order by patient_files.id";
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
      $sql="delete from patient_files where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

}