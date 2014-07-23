  
                            <div class="table-header">
									<strong>عرض بيانات جهات التعاقد</strong>
</div>

                 <? if($error=="true")
									{
										?>
                                           <script>
                                            alert("لايمكنك حذف جهة التعاقد مباشرة الا بعد حذف البيانات الخاصة به");
                                          </script>
                                        <?
									}
									?>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							  <thead>
								  <tr role="row">
                                  <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	اسم جهة التعاقد </th>
                                  <th  style="width: 118px;" colspan="1" rowspan="1"  tabindex="0" role="columnheader" >	الخصم على العامل</th><th aria-label="Clicks: activate to sort column ascending" style="width: 128px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	الخصم على عائله العامل</th>
                                  
                                   <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	المحمول </th>
                                   
                                    <th aria-label="Domain: activate to sort column ascending" style="width: 172px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" >	التليفون </th>
                                 
                                   
                                    <th aria-label="Update: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader"> 	تاريخ التعاقد من </th>
                                    
                                     <th aria-label="Update: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader"> 	تاريخ التعاقد الى  </th>
                                 
                                 
                            
                          
                                       
                                  
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
				<td class=" "><a href="<? echo base_url();?>index.php/contracts/data/<? echo $row['id'];?>"><? echo $row['name'];?></a>	 </td>
										<td class=" "><? echo $row['personal_discount'];?></td>
										<td class="hidden-480 "><? echo $row['family_discount'];?></td>
                                           <td class="hidden-phone "><? echo $row['mobile'];?></td>
                                        <td class="hidden-phone "><? echo $row['phone'];?></td>
                                        <td class="hidden-phone "><? echo $row['from_date'];?></td>
                                        <td class="hidden-phone "><? echo $row['to_date'];?></td>
                                      
										
                                        <td class="hidden-480 " align="center">	
                                        <div align="center"><a class="blue" href="<? echo base_url();?>index.php/contracts/data/<? echo $row['id'];?>">
													<i class="icon-zoom-in bigger-130"></i>	</a></div></td>
                                                    
										<td class="hidden-phone " align="center">
                            <div align="center"><a class="green" href="<? echo base_url();?>index.php/contracts/edit/<? echo $row['id'];?>">
													<i class="icon-pencil bigger-130"></i></a></div></td>

										<td class="td-actions " align="center">
					<div align="center"><a class="red" href="<? echo base_url();?>index.php/contracts/delete/<? echo $row['id'];?>">
													<i class="icon-trash bigger-130"></i></a></div></td>
                                            
								  </tr>
                                  <? }?>
                                  </tbody></table>
                            
                            
                            
                            
                                       


	
