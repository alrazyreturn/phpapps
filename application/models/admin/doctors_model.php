<?

class Doctors_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function get_doctors()
    {
		
	
	   
      $sql="SELECT * FROM `doctors` order by id";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	
	
	public function get_doctors_columns()
	 {
      $array_names= array('name','kind','address','mobile','phone','notes');
	  return $array_names;
    }
	
		 
	public function get_doctors_columns_alies()
    {
      $array_alies= array('اسم الطبيب','نوع التخصص','العنوان','رقم الموبايل','رقم التليفون','الملاحظات');
	  return $array_alies;
    }
	
	
	public function get_all_doctors()
    {
      $sql="SELECT  * from doctors";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	public function get_all_doctors_from_to($from,$to)
    {
      $sql="SELECT  * from doctors LIMIT $from , $to";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
 
	
		public function get_doctors_data($id)
    {
       $sql="SELECT  * from doctors where  doctors.id=$id "; 
	  
	 // $sql= "select * from doctors where doctors.id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	
	 public function save_edit($id )
    {
		$name=$_POST['name'];
		$kind=$_POST['kind'];
		$mobile=$_POST['mobile'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
	    $notes=$_POST['notes'];
		 
		
      $sql="update `clinic`.doctors set `name`= '$name' , `notes`='$notes' 
	  , kind= '$kind' , mobile='$mobile' 
	  , phone= '$phone' , address='$address' 
	  where `id`=$id ";
	  
	 return $query = $this->db->query($sql);
	 
    }
	
	
	
    public function add_new_doctors()
    {
		$name=$_POST['name'];
		$kind=$_POST['kind'];
		$mobile=$_POST['mobile'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
	    $notes=$_POST['notes'];
	   
      $sql="INSERT INTO `clinic`.doctors (`name`, `notes` , kind, mobile , phone ,address) VALUES ('$name', '$notes','$kind','$mobile','$phone','$address');";
	 return $query = $this->db->query($sql);
    }
	
	
		public function delete($id)
    {
      $sql="delete from doctors where id=$id";
	  return $query = $this->db->query($sql);
	   
    }

	


}