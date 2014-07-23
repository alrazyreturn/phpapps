  
                            <div class="table-header">
									<strong>اضافة بيانات مريض</strong>
                                    
                                    <? if($error=="true")
									{
										?>
                                           <script>
                                            alert("لايمكنك حذف هذا المريض مباشرة الا بعد حذف البيانات الخاصة به");
                                          </script>
                                        <?
									}
									?>
</div>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							  <thead>
								  <tr role="row">
                                  <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	اسم المريض </th>
                                  <th  style="width: 118px;" colspan="1" rowspan="1"  tabindex="0" role="columnheader" >	كود المريض </th><th aria-label="Clicks: activate to sort column ascending" style="width: 128px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	جهة التعاقد </th>
                                   <th aria-label="Update: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader">العنوان </th>
                                  <th aria-label="Update: activate to sort column ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader"> محمول </th>
                            
                                  <th aria-label="Update: activate to sort column ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader">تليفون</th>
                                       
                                  
                                  <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled" align="center">عرض</th>
                                       <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled">تعديل</th>
                                            <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled">مسح</th>
                                  </tr>
							  </thead>

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                            <? foreach($patients as $row)
							{
							?>
                            <tr class="odd">
	<td class=" "><a href="<? echo base_url();?>index.php/patient/data/<? echo $row['id'];?>"><? echo $row['name'];?></a>	 </td>
										<td class=" "><? echo $row['code'];?></td>
										<td class="hidden-480 "><? echo $row['contract_id'];?></td>
                                        <td class="hidden-phone "><? echo $row['address'];?></td>
										<td class="hidden-phone "><? echo $row['mobile'];?></td>
                                        <td class="hidden-480 "><? echo $row['phone'];?></td>
										
                                        <td class="hidden-480 ">	
       <a class="blue" href="<? echo base_url();?>index.php/patient/data/<? echo $row['id'];?>">
													<i class="icon-zoom-in bigger-130"></i>	</a></td>
                                                    
										<td class="hidden-phone ">
                            <a class="green" href="<? echo base_url();?>index.php/patient/edit/<? echo $row['id'];?>">
													<i class="icon-pencil bigger-130"></i></a></td>

										<td class="td-actions ">
							<a class="red" href="<? echo base_url();?>index.php/patient/delete/<? echo $row['id'];?>">
													<i class="icon-trash bigger-130"></i></a></td>
                                            
								  </tr>
                                  <? }?>
                                  </tbody></table>
                            
                            
                            
                            
                                       


	
