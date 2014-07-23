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
	
	
	 public function get_contract($id)
    {
      $sql="SELECT * FROM `contracts` where id=$id ";
	  $query = $this->db->query($sql);
	  return $query->result_array(); 
    }
	
	 public function add_new_contract()
    {
		$name=$_POST['name'];
	    $personal_discount=$_POST['personal_discount'];
	    $family_discount=$_POST['family_discount'];
		$address=$_POST['address'];
	    $mobile=$_POST['mobile'];
	    $phone=$_POST['phone'];
		$from_date=$_POST['from_date'];
	    $to_date=$_POST['to_date'];
	    $paid_date=$_POST['paid_date'];
		$amount=$_POST['amount'];
		
		
		$sql="INSERT INTO contracts (name, personal_discount, family_discount,address, mobile, phone,from_date, to_date, paid_date,amount) VALUES ('$name', '$personal_discount', '$family_discount','$address', '$mobile', '$phone','$from_date', '$to_date', '$paid_date',$amount);";
	 return $query = $this->db->query($sql);
		
	}
	
		 public function save_edit($id)
    {
	    $name=$_POST['name'];
	    $personal_discount=$_POST['personal_discount'];
	    $family_discount=$_POST['family_discount'];
		$address=$_POST['address'];
	    $mobile=$_POST['mobile'];
	    $phone=$_POST['phone'];
		$from_date=$_POST['from_date'];
	    $to_date=$_POST['to_date'];
	    $paid_date=$_POST['paid_date'];
		$amount=$_POST['amount'];
		
		$sql="update contracts set name='$name', personal_discount='$personal_discount', family_discount='$family_discount',address='$address', mobile='$mobile', phone='$phone',from_date='$from_date', to_date='$to_date', paid_date='$paid_date',amount=$amount where id=$id";
	    return $query = $this->db->query($sql);
		
	}
	
		 public function delete($id)
    {
		try
		{
	 $sql="delete from contracts where id=$id";
	  $query = $this->db->query($sql);	
	  
	       if (!$query)
          {
           $error="true";
            return  $error;
          } 
		 
		      return $query;
		  
        }
		     
	  catch (Exception $e) 
	  {
         return;
      } 
	}
	
	
	
	

}