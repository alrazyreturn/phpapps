<?

class Reservations_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_reservations()
    {
		
	
	   
      $sql="SELECT * FROM `reservations` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
	
	public function get_reservations_columns()
	 {
      $array_names= array('id','day','reserve_date','patient_name','doctor_name','service_name','contract_name'  ,'from_time','to_time','reserve_name');
	  return $array_names;
    }
	
		 
	public function get_reservations_columns_alies()
    {
      $array_alies= array('id','اليوم','تاريخ الحجز','المريض','الطبيب','نوع الخدمة','جهة التعاقد' ,'من','الى','حالة الحجز');
	  return $array_alies;
    }
	
	
	public function get_all_reservations_from_to($from,$to)
    {
      $sql="SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name service_name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status
	  where 
	  reservations.day_id = days.id 
	  and reservations.contract_id = contracts.id 
	  and reservations.doctor_id = doctors.id 
	  and reservations.service_id = services.id 
	  and reservations.patient_id = patients.id 
	   and reservations.status = reserve_status.id 
	   order by id
LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_all_reservations_search($column_name,$value)
    {
		
      $sql="select * from (SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name service_name ,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status
	  where 
	  reservations.day_id = days.id 
	  and reservations.contract_id = contracts.id 
	  and reservations.doctor_id = doctors.id 
	  and reservations.service_id = services.id 
	  and reservations.patient_id = patients.id 
	   and reservations.status = reserve_status.id )as data 
	   where $column_name like '%$value%'
	   order by id";
 
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	public function get_all_reservations()
    {
      $sql="SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name service_name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status
	  where 
	  reservations.day_id = days.id 
	  and reservations.contract_id = contracts.id 
	  and reservations.doctor_id = doctors.id 
	  and reservations.service_id = services.id 
	  and reservations.patient_id = patients.id 
	   and reservations.status = reserve_status.id 
	   order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
		public function get_reservations_data($id)
    {
       $sql="SELECT reserve_status.name reserve_name ,days.name day,  services.name service_name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.*  FROM reservations,contracts,days,doctors,services ,patients ,reserve_status
	  where 
	  reservations.day_id = days.id 
	  and reservations.contract_id = contracts.id 
	  and reservations.doctor_id = doctors.id 
	  and reservations.service_id = services.id 
	  and reservations.patient_id = patients.id 
	   and reservations.status = reserve_status.id 
	  and reservations.id=$id "; 
	  
	 // $sql= "select * from reservations where reservations.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$day_id=$_POST['day_id'];
	    $reserve_date=$_POST['reserve_date'];
	    $patient_id=$_POST['patient_id'];
	    $doctor_id=$_POST['doctor_id'];
		$service_id=$_POST['service_id'];
	    $contract_id=$_POST['contract_id'];
	    $from_time=$_POST['from_time'];
	    $to_time=$_POST['to_time'];
		$status=$_POST['status'];
		 
		
      $sql="update `clinic`.`reservations` set day_id= $day_id , reserve_date='$reserve_date', patient_id=$patient_id, doctor_id= $doctor_id , service_id= $service_id , contract_id= $contract_id , from_time='$from_time', to_time='$to_time',status='$status' where id=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_reservations()
    {
		$day_id=$_POST['day_id'];
	    $reserve_date=$_POST['reserve_date'];
	    $patient_id=$_POST['patient_id'];
	    $doctor_id=$_POST['doctor_id'];
		$service_id=$_POST['service_id'];
	    $contract_id=$_POST['contract_id'];
	    $from_time=$_POST['from_time'];
	    $to_time=$_POST['to_time'];
		$status=$_POST['status'];
	   
      $sql="INSERT INTO `clinic`.`reservations` (day_id, reserve_date, patient_id, doctor_id, service_id, contract_id, from_time, to_time,status ) VALUES ('$day_id', '$reserve_date',  $patient_id ,  $doctor_id ,  $service_id ,  $contract_id , '$from_time', '$to_time', $status );";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from `reservations` where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	

}