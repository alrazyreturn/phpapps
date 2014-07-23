<style type="text/css">
#pet {
	font-size: 16px;
	font-weight: bold;
	color: #06F;
}
</style>
<div class="table-header" style="font-size:20px;"> اضافة بيانات مريض </div>
<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
<div class="row-fluid">
  <div class="span6">
    <div class="dataTables_length" id="sample-table-2_length"></div>
  </div>
</div>
<form action="<? echo base_url();?>index.php/patient/add/" method="post" enctype="multipart/form-data"  >
  <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
    <tbody aria-relevant="all" aria-live="polite" role="alert">
      <tr class="odd">
        <td  id="pet" class=" " width="25%"> صوره المريض </td>
        <td  id="pet" class=" "><input type="file" name="upload[]" id="upload" multiple /></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> اسم المريض </td>
        <td  id="pet" class=" "><input id="name" name="name"  placeholder="اسم المريض" type="text" style="width:50%"></td>
      </tr>
      <!--<tr class="odd">
        <td  id="pet" class=" "> كود المريض </td>
        <td  id="pet" class=" "><input id="code" name="code" placeholder=" كود المريض" type="text" style="width:50%"></td>
      </tr>-->
      <tr class="even">
        <td  id="pet" class=" "> الوظيفه </td>
        <td  id="pet" class=" "><input id="job" name="job" placeholder="الوظيفه" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> جهة التعاقد </td>
        <td  id="pet" class=" "><select id="contract" name="contract">
            <option selected="selected" value="0">اختر جهة التعاقد</option>
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
            <option selected="selected" value="">اختر النوع</option>
            <option value="0">ذكـــر</option>
            <option value="1">انثــى</option>
          </select></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> تاريخ الميلاد </td>
        <td  id="pet" class=" "><input class="span10 date-picker" id="date" name="date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
          <span class="add-on"><i class="icon-calendar"></i></span></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> العمر </td>
        <td  id="pet" class=" "><input id="age" name="age" placeholder="العمر" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> العنوان </td>
        <td  id="pet" class=" "><input id="address" name="address" placeholder="العنوان" type="text" style="width:50%" ></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> المحمول </td>
        <td  id="pet" class=" "><input id="mobile" name="mobile" placeholder="المحمول" type="text" style="width:50%"></td>
      </tr>
      <tr class="odd">
        <td  id="pet" class=" "> تليفون المنزل </td>
        <td  id="pet" class=" "><input id="phone" name="phone" placeholder="تليفون المنزل" type="text" style="width:50%"></td>
      </tr>
      <tr class="even">
        <td  id="pet" class=" "> ملاحظات </td>
        <td  id="pet" class=" "><textarea class="span12" id="notes" name="notes"  placeholder="Default Text"></textarea></td>
      </tr>
      <tr class="even">
        <td colspan="2" class=" "  id="pet"><div class="form-actions">
            <button class="btn btn-info" type="submit" > <i class="icon-ok bigger-110"></i> <strong>حفــظ البيانـات</strong> </button>
          </div></td>
      </tr>
    </tbody>
  </table>
</form>
