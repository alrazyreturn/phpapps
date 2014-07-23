
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 



<script type='text/javascript' language='javascript' >
function search_data(contorler_name,value)
{

//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();

           var column_name= document.getElementById('mycolumns').value;
		   var count= document.getElementById('mygrid').value;
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/get_search_data/'+contorler_name+'/'+value+'/'+column_name
			+'/'+count,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
			scriptCharset:"UTF-8",
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>



<script type='text/javascript' language='javascript'>
function search_data_under(contorler_name,from)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();

           var column_name= document.getElementById('mycolumns').value;
		   var value= document.getElementById('mysearch').value;
		   var count= document.getElementById('mygrid').value;
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/get_search_data_from/'+contorler_name+'/'+value+'/'+column_name+'/'+from+'/'+count,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>


<script type='text/javascript' language='javascript'>
function get_data_under(contorler_name,from)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();

          var page_count= document.getElementById('mygrid').value;
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/get_data_from_to/'+page_count+'/'+contorler_name+'/'+from,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>


<script type='text/javascript' language='javascript'>
function test(id,contorler_name,from)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();
          var page_count= document.getElementById('mygrid').value;
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/testme/'+page_count+'/'+contorler_name+'/'+from,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>

<script type='text/javascript' language='javascript'>
function get_data(id,contorler_name)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/get_data/'+id+'/'+contorler_name,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>



  <?
						     // $error=0;
								if(isset($error))
								{
						  if($error==1)
							 {
							 ?>
							<div class="alert alert-block alert-fail">
								<button type="button" class="close" data-dismiss="alert" >
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>

								لقد تم تسجيل البيانات بنجــاح
							</div>
                            <?
							 }
							 else if($error==0)
							 {
							?>
                            	<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert" >
									<i class="icon-remove red"></i>
								</button>

								<i class="icon-ok green"></i>
من فضلك حاول مره اخرى مع الاهتمام بادخال البيانات بطريقة صحيحة
							</div>
                            
                            <?
							 }
								}
							?> 

  
<div class="row-fluid">
      <h3 class="header smaller lighter blue"> <? echo $title ; ?></h3>
      <div class="table-header"><? echo $title ; ?> </div>
      <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
    <div class="row-fluid">
          <div class="span6">
        <div id="sample-table-2_length" class="dataTables_length">
              <label>Display
            <select size="1" name="mygrid" id="mygrid" aria-controls="sample-table-2" onchange="get_data(document.getElementById('mygrid').value ,'<? echo $control_name; ?>')">
                  <option value="10" selected="selected">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
            records</label>
            </div>
      </div>
          <div class="span6">
        <div class="dataTables_filter" id="sample-table-2_filter">
              <label>Search:
            <input type="text" aria-controls="sample-table-2" id="mysearch" name="mysearch" onchange="search_data( '<? echo $control_name; ?>',document.getElementById('mysearch').value )">
            from 
              <select size="1" name="mycolumns" id="mycolumns" aria-controls="sample-table-2"  >
               <?
			   for ($i=0;$i<sizeof($tbl_column_alies);$i++)
			   {
			   ?>
                  <option value="<? echo  $tbl_columns[$i] ;?>"  ><? echo  $tbl_column_alies[$i] ;?></option>
                <?
			   }
			   ?>
                </select>
          </label>
            </div>
      </div>
        </div>
                 
                  

          <div id="mydata" > 

			<table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
  <thead>
    <tr role="row">
      <? for ($i=0;$i< sizeof($tbl_column_alies);$i++) 
        {
	  ?>
      <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" ><? echo $tbl_column_alies[$i];?> </th>
      <?
		}
	  ?>
      <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled" align="center">عرض</th>
      <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled">تعديل</th>
      <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled">مسح</th>
    </tr>
  </thead>
  <tbody aria-relevant="all" aria-live="polite" role="alert">
    <? foreach($tbl_rows as $row)
        {
        ?>
    <tr class="odd">
      <?
	   $temp=true;
	    for ($i=0;$i< sizeof($tbl_columns);$i++) 
        {
		  if($temp)
		  {
		?>
      <td ><a href="#"><? echo $row[$tbl_columns[$i]];?></a></td>
      <?
		  }
		 else
		 {
		   ?>
		  <td ><? echo $row[$tbl_columns[$i]];?></td>
		  <?
		 }
	   $temp=false;
		}
	  ?>
  <td class="hidden-480 ">	
   <a class="blue" href="<? echo base_url();?>index.php/<? echo $control_name; ?>/data/<? echo $row['id'];?>">
													<i class="icon-zoom-in bigger-130"></i>	</a></td>
                                                    
										<td class="hidden-phone ">
                            <a class="green" href="<? echo base_url();?>index.php/<? echo $control_name; ?>/edit/<? echo $row['id'];?>">
													<i class="icon-pencil bigger-130"></i></a></td>

										<td class="td-actions ">
							<a class="red" href="<? echo base_url();?>index.php/<? echo $control_name; ?>/delete/<? echo $row['id'];?>">
													<i class="icon-trash bigger-130"></i></a></td>
    </tr>
    <? }?>
  </tbody>
</table>   


   
  
 		    <div class="row-fluid">
          <div class="span6">
        <div class="dataTables_info" id="sample-table-2_info">Showing 1 to 10 of <? echo sizeof($tbl_rows) ; ?> entries</div>
      </div>
          <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
              <ul>
            <li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li>
            <li class="active"><a href="#" onclick= "get_data_under( '<? echo $control_name; ?>','1')">1</a></li>
          </ul>
            </div>
      </div>
        </div>
        
		</div>
 </div> 
  