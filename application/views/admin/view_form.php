   
 

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
                          <div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>

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
        <div class="dataTables_info" id="sample-table-2_info">Showing 1 to 10 of 23 entries</div>
      </div>
          <div class="span6">
        <div class="dataTables_paginate paging_bootstrap pagination">
              <ul>
            <li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li>
          </ul>
            </div>
      </div>
        </div>
        
</div>