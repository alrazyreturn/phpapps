<style type="text/css">
#pet {
	font-size: 16px;
	font-weight: bold;
	color: #06F;
}
</style>
<div class="table-header" style="font-size:20px;"> تعديل بيانات مريض </div>
<? $row=$patient[0];?>
<form action="<? echo base_url();?>index.php/patient/save_edit/<? echo $row['id']?>" method="post" enctype="multipart/form-data"  >
  <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
    <tbody aria-relevant="all" aria-live="polite" role="alert">
      <tr class="odd">
        <td  id="pet" class=" " width="25%"> صوره المريض </td>
        <td  id="pet" class=" "><input type="file" name="upload[]" id="upload" multiple />
          <img  src="<? echo base_url();?>assests/images/patients/<? echo $row['pic'];?>" width="150" height="200" ></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> اسم المريض </td>
        <td  id="pet" class=" "><input id="name" name="name" value="<? echo $row['patient_name']?>"  type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> كود المريض </td>
        <td  id="pet" class=" "><input id="code" name="code" value="<? echo $row['code'];?>" type="text" disabled="disabled"true"  style="width:50%"></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> الوظيفه </td>
        <td  id="pet" class=" "><input id="job" name="job" value="<? echo $row['job'];?>" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> جهة التعاقد </td>
        <td  id="pet" class=" "><select id="contract" name="contract">
            <option selected="selected" value="<? echo $row['contract_id'];?>"><? echo $row['contract'];?></option>
            <? foreach($contracts as $row)
															{
															 ?>
            <option value="<? echo $row['id']?>"><? echo $row['name'];?></option>
            <?
                                                            }
															?>
          </select></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> الجنس \ النوع </td>
        <td  id="pet" class=" "><select id="gender" name="gender">
            <option selected="selected" value="<? echo $row['sex'];?>">
            <? if( $row['sex']==0){echo "ذكـــر";}
								                                 else{echo "انثـى";} ?>
            </option>
            <option value="0">ذكـــر</option>
            <option value="1">انثــى</option>
          </select></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> تاريخ الميلاد </td>
        <td  id="pet" class=" "><input class="span10 date-picker" value="<? echo $row['birthdate'];?>" id="date" name="date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
          <span class="add-on"><i class="icon-calendar"></i></span></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> العمر </td>
        <td  id="pet" class=" "><input id="age" name="age" value="<? echo $row['age'];?>" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> العنوان </td>
        <td  id="pet" class=" "><input id="address" name="address" value="<? echo $row['address'];?>" type="text" style="width:50%" ></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> المحمول </td>
        <td  id="pet" class=" "><input id="mobile" name="mobile" value="<? echo $row['mobile'];?>" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> تليفون المنزل </td>
        <td  id="pet" class=" "><input id="phone" name="phone" value="<? echo $row['phone'];?>" type="text" style="width:50%"></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> ملاحظات </td>
        <td  id="pet" class=" "><textarea class="span12" id="notes" name="notes" ><? echo $row['patient_note'];?></textarea></td>
      </tr>
      <tr class="even">
        <td colspan="2" class=" "  id="pet"><div class="form-actions">
            <button class="btn btn-info"  type="submit"> <i class="icon-ok bigger-110"></i> <strong>حفــظ البيانـات</strong> </button>
          </div></td>
      </tr>
    </tbody>
  </table>
</form>
