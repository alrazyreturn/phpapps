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
<form action="<? echo base_url();?>index.php/<? echo $controller_name; ?>/add/" method="post" enctype="multipart/form-data"  >
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
        <td  id="pet" class=" "><input type="file" name="upload[]" id="upload" multiple /></td>
        <?
				}
				elseif($col["type"] =='text')
				{
				  ?>
        <td  id="pet" class=" "><input id="<? echo $col["name"] ; ?>" name="<? echo $col["name"] ;?>" placeholder="<? echo $col["alies"] ;?>" type="text" style="width:50%"></td>
        <?
				}
				elseif($col["type"] =='true_false')
				{
					?>
				<td  id="pet" class=" "> 
											    <input name="<? echo $col["name"] ; ?>" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												  </td>
                                                
                    <?
				}
				
				
				elseif($col["type"] =='password')
				{
				  ?>
        <td  id="pet" class=" "><input id="<? echo $col["name"] ; ?>" name="<? echo $col["name"] ;?>" placeholder="<? echo $col["alies"] ;?>" type="password" style="width:50%"></td>
        <?
				}
				elseif($col["type"]=="select")
				{
				  ?>
        <td  id="pet" class=" "><select id="<? echo $col["name"] ; ?>" name="<? echo $col["name"] ; ?>">
            <option selected="selected" value="0">اختر القيمة</option>
            <? foreach($col['sub_values'] as $row)
							{
							   ?>
            <option value="<? echo $row['id']?>"><? echo $row['name'];?></option>
            <?
						  }
						  ?>
          </select></td>
        <?
				 }
				elseif($col["type"]== "date")
				{
				?>
        <td  id="pet" class=" "><input class="span10 date-picker" id="<? echo $col["name"] ;?>" name="<? echo $col["name"] ;?>" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
          <span class="add-on"><i class="icon-calendar"></i></span></td>
        <?
				}
				elseif($col["type"] =="textarea")
				{
			    ?>
        <td  id="pet" class=" "><textarea class="span12" id="<? echo $col["name"] ;?>" name="<? echo $col["name"] ;?>"  placeholder="Default Text"></textarea></td>
        <?
				}
				elseif($col["type"] =="sex")
				{
			    ?>
        <td  id="pet" class=" "><select id="<? echo $col["name"] ;?>" name="<? echo $col["name"] ;?>">
            <option selected="selected" value="">اختر النوع</option>
            <option value="0">ذكـــر</option>
            <option value="1">انثــى</option>
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
