 
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
 

 
 <div class="table-header" style="font-size:20px;">عرض بيانات الخدمة</div>
                            
	<?  $row=$patient[0]; ?>			
             
 <DIV align="right">
 <button class="btn btn-app btn-light btn-mini" onClick="javascript:Print('printDetails');">
										<i class="icon-print bigger-160"></i>
										Print
									</button>
                                    
 <button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/service/edit/<? echo $row['id'];?>'">
										<i class="icon-edit bigger-160"></i>
										Edit
									</button>
                                    
<button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/service/delete/<? echo $row['id'];?>'">
										<i class="icon-trash bigger-160"></i>
										Delete
									</button>
                                    
                               
               </DIV>
                   <div id="printDetails">
                        
                        
                         <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الخدمة
									    </td>
										<td  id="blue" class=" ">
                                   <? echo $row['name'];?> 
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											   سعر الخدمة 
										  </td>
						                 <td  id="blue" class=" ">
                                           <? echo $row['amount'];?>
                                         </td>
									    </tr>
                                          <tr class="even">
											<td  id="pet" class=" ">
												ملاحظات 
											</td>
											<td  id="blue" class=" "> <? echo $row['notes'];?></td>
							  </tr>
                                            
                                           
                                            
                                  
                                  
                                  </tbody></table>
 </div>
                       
                            
                            


	
