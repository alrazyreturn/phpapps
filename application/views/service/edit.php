 <style type="text/css">
 #pet {font-size:16px;
 font-weight:bold;
 color:#06F;
  }
 </style> 
                            <div class="table-header" style="font-size:20px;">
									تعديل بيانات الخدمة
</div>
 <? 
 //$row1=$patients[0];
 $row=$patient[0];
 ?>
						  
              <form action="<? echo base_url();?>index.php/service/save_edit/<? echo $row['id'];?>" method="post" >
                          
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الخدمة
									    </td>
										<td  id="pet" class=" ">
    <input id="name" name="name"  type="text" style="width:50%" value="<? echo $row['name'];?>">
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											  سعر الخدمة
										  </td>
						                 <td  id="pet" class=" ">
                                         
 <input id="amount" name="amount" type="text" style="width:50%" value="<? echo $row['amount'];?>">                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												ملاحظات
											</td>
											<td  id="pet" class=" ">	
<textarea class="span12" id="notes" name="notes"  >
<? echo $row['notes'];?>
</textarea>
					</td>
											</tr>
                                            
                                                
                                    
                                
                                            
                                                <tr class="even">
											<td colspan="2" class=" "  id="pet">
                                                                                   
	<div class="form-actions">
									<button class="btn btn-info" type="submit" >
										<i class="icon-ok bigger-110"></i>
										<strong>حفــظ البيانـات</strong>
	  </button>

									
							</div>
                            
                                            
                                            </td>
											</tr>
                                  
                                  </tbody></table>
                            
                            </form>



	
