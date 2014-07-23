 
 <style type="text/css">
 #pet {
	 font-size:16px;
 font-weight:bold;

  }
  #blue
  {
	  	 font-size:16px;
 font-weight:bold;
	  color:#06F; 
  }
 </style> 
 

 
 <div class="table-header" style="font-size:20px;">عرض بيانات مريض</div>
                             <? 
							 $row=$patient[0];
							 
							 ?>
				
                
               
             
 <DIV align="right">
 <button class="btn btn-app btn-light btn-mini" onClick="javascript:Print('printDetails');">
										<i class="icon-print bigger-160"></i>
										Print
									</button>
                                    
 <button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/contracts/edit/<? echo $row['id'];?>'">
										<i class="icon-edit bigger-160"></i>
										Edit
									</button>
                                    
<button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/contracts/delete/<? echo $row['id'];?>'">
										<i class="icon-trash bigger-160"></i>
										Delete
									</button>
                                    
                                    	<!--<a href="#" class="btn btn-app btn-yellow btn-mini">
										<i class="icon-print bigger-160"></i>
										Print
									</a>
                                    	<a href="#" class="btn btn-app btn-yellow btn-mini">
										<i class="icon-edit bigger-160"></i>
										Edit
									</a>
                                    
                                    	<a href="#" class="btn btn-app btn-yellow btn-mini">
										<i class="icon-trash bigger-160"></i>
										Delete
									</a>-->
               </DIV>
                   <div id="printDetails">
                        
                        
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الجهة 
									    </td>
										<td  id="pet" class=" ">
                                        <? echo $row['name'];?>
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											   الخصم على العامل
										  </td>
						                 <td  id="pet" class=" ">
                                          <? echo $row['personal_discount'];?>
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 الخصم على عائله العامل
											</td>
											<td  id="pet" class=" ">
                                             <? echo $row['family_discount'];?>
                                          
                   </td>
											</tr>
                                            
                                                 <tr class="even">
											<td  id="pet" class=" ">
												 عنوان الجهة
											</td>
											<td  id="pet" class=" ">
                                             <? echo $row['address'];?>
                                            
                                            </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												 المحمول
									</td>
								<td  id="pet" class=" ">
                                 <? echo $row['mobile'];?>
          </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												الهاتف   
									</td>
								<td  id="pet" class=" ">
                                 <? echo $row['phone'];?>
                  
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												 من تاريخ تعاقد  
									</td>
								<td  id="pet" class=" ">
                                 <? echo $row['from_date'];?>
                   
                   </td>
								            </tr>
                                            
                                       
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                   إلى تاريخ تعاقد    
	                                           								</td>
								<td  id="pet" class=" ">
                                 <? echo $row['to_date'];?>
                  
                                </td>
							    </tr>
                                
                                  <tr class="even">
									<td  id="pet" class=" ">
												
                                   ميعاد التحصيل     
	                                           								</td>
								<td  id="pet" class=" ">
                                 <? echo $row['paid_date'];?>
                             
					
                                </td>
							    </tr>
                                        
                                        
                               
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										مبلغ التحصيل 
									</td>
									<td  id="pet" class=" ">
                                     <? echo $row['amount'];?>
    
 
                            </td>
									</tr>
                                    
                                 
                                 
                                            
                                  
                                  </tbody></table>

                       
                            </div>
                            


	
