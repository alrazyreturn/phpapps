  
                            <div class="table-header">
									<strong>عرض الخدمات</strong>
</div>
  <? if($error=="true")
									{
										?>
                                           <script>
                                            alert("لايمكنك حذف هذة الخدمة مباشرة الا بعد حذف البيانات الخاصة به");
                                          </script>
                                        <?
									}
									?>
						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							  <thead>
								  <tr role="row">
                                  <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	اسم الخدمة </th>
                                  <th  style="width: 118px;" colspan="1" rowspan="1"  tabindex="0" role="columnheader" >	سعر الخدمة </th><th aria-label="Clicks: activate to sort column ascending" style="width: 128px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	ملاحظــات </th>
                                 
                                 
                                 
                            
                          
                                       
                                  
 <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader"  align="center">عرض</th>
 <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" >تعديل</th>
 <th aria-label="" style="width: 20px;" colspan="1" rowspan="1" role="columnheader" >مسح</th>
                                  </tr>
							  </thead>

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                            <? foreach($patients as $row)
							{
							?>
                            <tr class="odd">
				<td class=" "><a href="<? echo base_url();?>index.php/service/data/<? echo $row['id'];?>"><? echo $row['name'];?></a>	 </td>
										<td class=" "><? echo $row['amount'];?></td>
										<td class="hidden-480 "><? echo $row['notes'];?></td>
                                       
                                      
										
                                        <td class="hidden-480 " align="center">	
                                        <div align="center"><a class="blue" href="<? echo base_url();?>index.php/service/data/<? echo $row['id'];?>">
													<i class="icon-zoom-in bigger-130"></i>	</a></div></td>
                                                    
										<td class="hidden-phone " align="center">
                            <div align="center"><a class="green" href="<? echo base_url();?>index.php/service/edit/<? echo $row['id'];?>">
													<i class="icon-pencil bigger-130"></i></a></div></td>

										<td class="td-actions " align="center">
					<div align="center"><a class="red" href="<? echo base_url();?>index.php/service/delete/<? echo $row['id'];?>">
													<i class="icon-trash bigger-130"></i></a></div></td>
                                            
								  </tr>
                                  <? }?>
                                  </tbody></table>
                            
                            
                            
                            
                                       


	
