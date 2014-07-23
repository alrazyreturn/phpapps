<style type="text/css">
#pet {
	font-size: 16px;
	font-weight: bold;
	color: #06F;
}
</style>
<div class="table-header" style="font-size:20px;"><? echo $title; ?> </div>
<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
<div class="row-fluid">
  <div class="span6">
    <div class="dataTables_length" id="sample-table-2_length"></div>
  </div>
</div>
<form action="<? echo base_url();?>index.php/<? echo $controller_name; ?>/save_edit/<? echo $id ; ?>" method="post" enctype="multipart/form-data"  >
  <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
    <tbody aria-relevant="all" aria-live="polite" role="alert">
      <?php
		$temp= true;
			  foreach($column_data as $col)
			  {
				if($temp){		
				?>
      <tr class="odd">
        <? }
				else
				{
				?>
      <tr class="even">
        <?
				}
				?>
        <td  id="pet" class=" " width="25%"><? echo $col["alies"] ;?></td>
        <?
				if ($col["type"]== 'upload') 
				{
				  ?>
        <td  id="pet" class=" "><input type="file" name="upload[]" id="upload" multiple />
         <img  src="<? echo base_url();?>assests/images/patients/<? echo $col['value'];?>" width="150" height="200" >
        </td>
        <?
				}
				elseif($col["type"] =='text')
				{
				  ?>
        <td  id="pet" class=" "><input id="<? echo $col["name"]; ?>" name="<? echo $col["name"] ;?>" placeholder="<? echo $col["alies"] ;?>" type="text" style="width:50%" value ="<? echo $col["value"]; ?>"></td>
        <?
				}
				elseif($col["type"] =='password')
				{
				  ?>
        <td  id="pet" class=" "><input id="<? echo $col["name"]; ?>" name="<? echo $col["name"] ;?>" placeholder="<? echo $col["alies"] ;?>" type="password" style="width:50%" value ="<? echo $col["value"]; ?>"></td>
        <?
				}
				
				elseif($col["type"] =='true_false')
				{
					?>
				<td  id="pet" class=" ">  
											    <input name="<? echo $col["name"] ; ?>"  <? if($col["value"]== 1) { echo "checked=\"checked\""; }  ?>  class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												   </td>
                                                
                    <?
				}
				
				
				elseif($col["type"]=="select")
				{
					$flag= false;
	
   
					   
				  ?>
        <td  id="pet" class=" "><select id="<? echo $col["name"] ; ?>" name="<? echo $col["name"] ; ?>">
            
            <? foreach($col['sub_values'] as $row)
							{
							  
							  if($col['value'] == $row['id'])
							  {
								//  $flag = true;
							  
							   ?>
            <option value="<? echo $row['id']?>"  selected="selected" ><? echo $row['name'];?></option>
         					   <?
						 		 }
							else
							{
								?>
            <option value="<? echo $row['id']?>"   ><? echo $row['name'];?></option>
                                <?
							}
							}
						  ?>
          </select></td>
        <?
				 }
				elseif($col["type"]== "date")
				{
				?>
        <td  id="pet" class=" "><input class="span10 date-picker" id="<? echo $col["name"] ;?>" name="<? echo $col["name"] ;?>" data-date-format="dd-mm-yyyy" type="text" style="width:25%"  value ="<? echo $col["value"]; ?>" >
          <span class="add-on"><i class="icon-calendar"></i></span></td>
        <?
				}
				elseif($col["type"] =="textarea")
				{
			    ?>
                
        <td><textarea class="span12" id="<? echo $col["name"] ;?>" name="<? echo $col["name"]; ?>"  placeholder="Default Text"    ><? echo $col["value"]; ?></textarea></td>
        <?
				}
				elseif($col["type"] =="sex")
				{
			    ?>
        <td  id="pet" class=" "><select id="<? echo $col["name"] ;?>" name="<? echo $col["name"] ;?>">
             
            <?
			 $val= $col['value'];
			 
			?>
            <option value="0" <? if($val= "0") {echo "selected";} ?> >ذكـــر</option>
            <option value="1" <? if($val= "1") {echo "selected";} ?> >انثــى</option>
          </select></td>
        <?
				}
				?>
      </tr>
      <?
			  }
			  
                                        
	  
      if($temp){		
				?>
      <tr class="odd">
        <? }
				else
				{
				?>
      <tr class="even">
        <?
				}
				?>
        <td colspan="2" class=" "  id="pet"><div class="form-actions">
            <button class="btn btn-info" type="submit" > <i class="icon-ok bigger-110"></i> <strong>حفــظ البيانـات</strong> </button>
          </div></td>
      </tr>
    </tbody>
  </table>
</form>
