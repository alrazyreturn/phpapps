<?


class Helpme_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
    public function check_login($user_name,$pass)
    {
        $sql="SELECT * FROM `admin` WHERE user_name='$user_name' and password='".md5($pass)."'";
		$query = $this->db->query($sql);
		return $query->result_array(); 
    }
	
				   
	public function get_table( $count,$tbl_rows,$tbl_columns ,$control_name,$tbl_column_alies,$all_rows,$from=0)
	{
		$to=$count*$from;
		//echo "to= $to <br/>";
		$from_data= ($from*$count)-$count;
		// $res="SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status  where reservations.day_id = days.id and reservations.contract_id = contracts.id  and reservations.doctor_id = doctors.id  and reservations.id = services.id and reservations.patient_id = patients.id and reservations.status = reserve_status.id order by id LIMIT $from_data , $to<br/>";
		// $res.="count = $count and from= $from <br/>";
		    
		$res="<table aria-describedby='sample-table-2_info' id='tbl_data' class='table table-striped table-bordered table-hover dataTable'>";
		
		 $res.=" <thead>
    <tr role='row'>";
       for ($i=0;$i< sizeof($tbl_column_alies);$i++) 
        {
	  
      $res.="<th aria-label='Domain: activate to sort column ascending' style='width: 172px;' colspan='1' rowspan='1' aria-controls='sample-table-2' tabindex='0' role='columnheader' >".$tbl_column_alies[$i]." </th>";
       
		}
	  
      $res.="<th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled' align='center'>عرض</th>
      <th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled'>تعديل</th>
      <th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled'>مسح</th>
    </tr>
  </thead>";
		
		$res.="<tbody aria-relevant='all' aria-live='polite' role='alert'>";
      foreach($tbl_rows as $row)
        {
       
    	$res.="<tr class='odd'>";
	   $temp=true;
	    for ($i=0;$i< sizeof($tbl_columns);$i++) 
        {
		  if($temp)
		  {
		 
      	$res.="<td ><a href='#'>".$row[$tbl_columns[$i]]."</a></td>";
       
		  }
		 else
		 {
		   $res.="<td >".$row[$tbl_columns[$i]]."</td>";
		   
		 }
	   $temp=false;
		}
	  
      $res.="<td class='hidden-480'>	
                                        <a class='blue' href='".base_url()."index.php/$control_name/data/".$row['id']."'>
													<i class='icon-zoom-in bigger-130'></i>	</a></td>
                                                    
										<td class='hidden-phone'>
                            <a class='green' href='".base_url()."index.php/$control_name/edit/".$row['id']."'>
													<i class='icon-pencil bigger-130'></i></a></td>

										<td class='td-actions'>
							<a class='red' href='".base_url()."index.php/$control_name/delete/".$row['id']."'>
													<i class='icon-trash bigger-130'></i></a></td>
    	</tr>";
     	 } 
  		$res.="</tbody>";
		$res.="</table>";
		
		     
$res.="<div class='row-fluid'>
          <div class='span6'>
        <div class='dataTables_info' id='sample-table-2_info'>Showing ".($from*$count)." to ".($from*$count+$count)." of $all_rows entries</div>
      </div>
          <div class='span6'>
        <div class='dataTables_paginate paging_bootstrap pagination'>
              <ul>";
			  if($from >1)
			  {
            $res.="<li class='prev enabled'><a href='#' onclick= \"get_data_under( '$control_name','".($from-1)."') \"><i class='icon-double-angle-left'></i></a></li>";
			  }
			  else
			  {
			$res.="<li class='prev disabled'><a href='#'><i class='icon-double-angle-left'></i></a></li>";
			  }
			//$res.="<li class='active'><a href='#'>1</a></li>";
			
			$temp_count=$from ;
			if($from <=1)
			{
				for($i=$from ;$i<($all_rows/$count); $i++)
				{
				//$res.="<li class=''><a href='#' onclick= \"get_data($temp_count,'$control_name')\">$temp_count</a></li>";
					if($temp_count !=0)
					{
						if(($temp_count == $from )|| ($from==0  && $temp_count==1))
						{
						$res.="<li class='active'><a href='#' onclick= \"get_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
						}
						else
						{
						//$res.="<li class='active'><a href='#' onclick= \"get_data_under(document.getElementById('mygrid').value,'$control_name','$temp_count') \">$temp_count</a></li>";
						
						$res.="<li class=''><a href='#' onclick= \"get_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
						}
					}
	
				
				$temp_count++;
					if($temp_count >(3+$from))
					{
						 break;
					}
				}
			}
			else
			{
			 $temp_count= $temp_count-1;
			for($i=$from-1 ;$i<($all_rows/$count)+1;$i++)
			{
            //$res.="<li class=''><a href='#' onclick= \"get_data($temp_count,'$control_name')\">$temp_count</a></li>";
				if($temp_count !=0)
				{
					if(($temp_count == $from ) )
					{
					$res.="<li class='active'><a href='#' onclick= \"get_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
					}
					else
					{
					//$res.="<li class='active'><a href='#' onclick= \"get_data_under(document.getElementById('mygrid').value,'$control_name','$temp_count') \">$temp_count</a></li>";
					
					$res.="<li class=''><a href='#' onclick= \"get_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
					}
				}

			
			$temp_count++;
				if($temp_count >(3+$from))
				{
					 break;
				}
			}
			}
			 if( $temp_count < $all_rows/$count) 
			 {
            $res.="<li class='next'><a href='#'  onclick= \"get_data_under( '$control_name' ,'".($temp_count)."') \"><i class='icon-double-angle-right'></i></a></li>";
			 }
			 
			 $res.="
          </ul>
            </div>
      </div>
        </div>
        
        
  </div>
    </div> ";
	
	//$res.="count = $count & all_rows = $all_rows";
		
	   return $res;
	 }
	 
	 
	 public function get_table_search( $count,$tbl_rows,$tbl_columns ,$control_name,$tbl_column_alies,$all_rows,$from=0)
	{
		$to=$count*$from;
		//echo "to= $to <br/>";
		$from_data= ($from*$count)-$count;
		// $res="SELECT  reserve_status.name reserve_name, reservations.id, days.name day,  services.name name,reserve_date, patients.name patient_name, doctors.name doctor_name,  contracts.name contract_name ,reservations.from_time, reservations.to_time, reservations.status FROM reservations,contracts,days,doctors,services ,patients,reserve_status  where reservations.day_id = days.id and reservations.contract_id = contracts.id  and reservations.doctor_id = doctors.id  and reservations.id = services.id and reservations.patient_id = patients.id and reservations.status = reserve_status.id order by id LIMIT $from_data , $to<br/>";
		// $res.="count = $count and from= $from <br/>";
		    
		$res="<table aria-describedby='sample-table-2_info' id='tbl_data' class='table table-striped table-bordered table-hover dataTable'>";
		
		 $res.=" <thead>
    <tr role='row'>";
       for ($i=0;$i< sizeof($tbl_column_alies);$i++) 
        {
	  
      $res.="<th aria-label='Domain: activate to sort column ascending' style='width: 172px;' colspan='1' rowspan='1' aria-controls='sample-table-2' tabindex='0' role='columnheader' >".$tbl_column_alies[$i]." </th>";
       
		}
	  
      $res.="<th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled' align='center'>عرض</th>
      <th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled'>تعديل</th>
      <th aria-label='' style='width: 20px;' colspan='1' rowspan='1' role='columnheader' class='sorting_disabled'>مسح</th>
    </tr>
  </thead>";
		
		$res.="<tbody aria-relevant='all' aria-live='polite' role='alert'>";
      foreach($tbl_rows as $row)
        {
       
    	$res.="<tr class='odd'>";
	   $temp=true;
	    for ($i=0;$i< sizeof($tbl_columns);$i++) 
        {
		  if($temp)
		  {
		 
      	$res.="<td ><a href='#'>".$row[$tbl_columns[$i]]."</a></td>";
       
		  }
		 else
		 {
		   $res.="<td >".$row[$tbl_columns[$i]]."</td>";
		   
		 }
	   $temp=false;
		}
	  
      $res.="<td class='hidden-480'>	
                                        <a class='blue' href='".base_url()."index.php/$control_name/data/".$row['id']."'>
													<i class='icon-zoom-in bigger-130'></i>	</a></td>
                                                    
										<td class='hidden-phone'>
                            <a class='green' href='".base_url()."index.php/$control_name/edit/".$row['id']."'>
													<i class='icon-pencil bigger-130'></i></a></td>

										<td class='td-actions'>
							<a class='red' href='".base_url()."index.php/$control_name/delete/".$row['id']."'>
													<i class='icon-trash bigger-130'></i></a></td>
    	</tr>";
     	 } 
  		$res.="</tbody>";
		$res.="</table>";
		
		     
$res.="<div class='row-fluid'>
          <div class='span6'>
        <div class='dataTables_info' id='sample-table-2_info'>Showing ".($from*$count)." to ".($from*$count+$count)." of $all_rows entries</div>
      </div>
          <div class='span6'>
        <div class='dataTables_paginate paging_bootstrap pagination'>
              <ul>";
			  if($from >1)
			  {
            $res.="<li class='prev enabled'><a href='#' onclick= \"search_data_under( '$control_name','".($from-1)."') \"><i class='icon-double-angle-left'></i></a></li>";
			  }
			  else
			  {
			$res.="<li class='prev disabled'><a href='#'><i class='icon-double-angle-left'></i></a></li>";
			  }
			//$res.="<li class='active'><a href='#'>1</a></li>";
			
			$temp_count=$from ;
			if($from <=1)
			{
				for($i=$from ;$i<($all_rows/$count); $i++)
				{
				//$res.="<li class=''><a href='#' onclick= \"get_data($temp_count,'$control_name')\">$temp_count</a></li>";
					if($temp_count !=0)
					{
						if(($temp_count == $from )|| ($from==0  && $temp_count==1))
						{
						$res.="<li class='active'><a href='#' onclick= \"search_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
						}
						else
						{
						//$res.="<li class='active'><a href='#' onclick= \"get_data_under(document.getElementById('mygrid').value,'$control_name','$temp_count') \">$temp_count</a></li>";
						
						$res.="<li class=''><a href='#' onclick= \"search_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
						}
					}
	
				
				$temp_count++;
					if($temp_count >(3+$from))
					{
						 break;
					}
				}
			}
			else
			{
			 $temp_count= $temp_count-1;
			for($i=$from-1 ;$i<($all_rows/$count)+1;$i++)
			{
            //$res.="<li class=''><a href='#' onclick= \"get_data($temp_count,'$control_name')\">$temp_count</a></li>";
				if($temp_count !=0)
				{
					if(($temp_count == $from ) )
					{
					$res.="<li class='active'><a href='#' onclick= \"search_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
					}
					else
					{
					//$res.="<li class='active'><a href='#' onclick= \"get_data_under(document.getElementById('mygrid').value,'$control_name','$temp_count') \">$temp_count</a></li>";
					
					$res.="<li class=''><a href='#' onclick= \"search_data_under( '$control_name','$temp_count') \">$temp_count</a></li>";
					}
				}

			
			$temp_count++;
				if($temp_count >(3+$from))
				{
					 break;
				}
			}
			}
			 if( $temp_count < $all_rows/$count) 
			 {
            $res.="<li class='next'><a href='#'  onclick= \"search_data_under( '$control_name' ,'".($temp_count)."') \"><i class='icon-double-angle-right'></i></a></li>";
			 }
			 
			 $res.="
          </ul>
            </div>
      </div>
        </div>
        
        
  </div>
    </div> ";
	
	//$res.="count = $count & all_rows = $all_rows";
		
	   return $res;
	 }
	 
	
	public function get_search_data($table_name, $value , $column_name)
	{
         	$sql="select * from $table_name where $column_name like '%$value%' ";
			$query = $this->db->query($sql);
		    return $query->result_array(); 
	}
   	public function get_query($table_name, $value , $column_name)
	{
         	$sql="select * from $table_name where $column_name like '%$value%' ";
			 
		    return $sql ; 
	}
   
   
}
 
   
 

						  