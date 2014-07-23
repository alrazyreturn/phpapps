 <style type="text/css">
 #pet {font-size:16px;
 font-weight:bold;
 color:#06F;
  }
 </style> 
                            <div class="table-header" style="font-size:20px;">
									تعديل بيانات مريض
</div>
 <? 
 //$row1=$patients[0];
 $row=$patient[0];
 ?>
						  
              <form action="<? echo base_url();?>index.php/contracts/save_edit/<? echo $row['id'];?>" method="post" >
                          
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الجهة 
									    </td>
										<td  id="pet" class=" ">
                                        <input id="name" name="name" value="<? echo $row['name'];?>" type="text" style="width:50%" >
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											   الخصم على العامل
										  </td>
						                 <td  id="pet" class=" ">
                                         
                       <input id="personal_discount" name="personal_discount" value="<? echo $row['personal_discount'];?>" type="text" style="width:50%" >
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 الخصم على عائله العامل
											</td>
											<td  id="pet" class=" ">
    <input id="family_discount" name="family_discount" value="<? echo $row['family_discount'];?>" type="text" style="width:50%" >	
                                          
                   </td>
											</tr>
                                            
                                                 <tr class="even">
											<td  id="pet" class=" ">
												 عنوان الجهة
											</td>
											<td  id="pet" class=" ">
          <input id="address" name="address" value="<? echo $row['address'];?>" type="text" style="width:50%" >
                                            
                                            </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												 المحمول
									</td>
								<td  id="pet" class=" ">
           <input id="mobile" name="mobile" value="<? echo $row['mobile'];?>" type="text" style="width:50%" > </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												الهاتف   
									</td>
								<td  id="pet" class=" ">
                   <input id="phone" name="phone" value="<? echo $row['phone'];?>" type="text" style="width:50%" >
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												 من تاريخ تعاقد  
									</td>
								<td  id="pet" class=" ">
     <input class="span10 date-picker" id="from_date" name="from_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%" value="<? echo $row['from_date'];?>">
					<span class="add-on"><i class="icon-calendar"></i></span>
                   </td>
								            </tr>
                                            
                                       
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                   إلى تاريخ تعاقد    
	                                           								</td>
								<td  id="pet" class=" ">
<input class="span10 date-picker" id="to_date" name="to_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%" value="<? echo $row['to_date'];?>">
					<span class="add-on"><i class="icon-calendar"></i></span>
                                </td>
							    </tr>
                                
                                  <tr class="even">
									<td  id="pet" class=" ">
												
                                   ميعاد التحصيل     
	                                           								</td>
								<td  id="pet" class=" ">
  <input class="span10 date-picker" id="paid_date" name="paid_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%" value="<? echo $row['paid_date'];?>">
					<span class="add-on"><i class="icon-calendar"></i></span>
                                </td>
							    </tr>
                                        
                                        
                               
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										مبلغ التحصيل 
									</td>
									<td  id="pet" class=" ">
    
    <input id="amount" name="amount" placeholder="مبلغ التحصيل" type="text" style="width:50%" value="<? echo $row['amount'];?>">
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



	
