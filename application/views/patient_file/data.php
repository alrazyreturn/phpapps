 
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
                             <? $row=$patient[0];?>
				
             
 <DIV align="right">
 <button class="btn btn-app btn-light btn-mini" onClick="javascript:Print('printDetails');">
										<i class="icon-print bigger-160"></i>
										Print
									</button>
                                    
 <button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/patient_file/edit/<? echo $row['file_id'];?>'">
										<i class="icon-edit bigger-160"></i>
										Edit
									</button>
                                    
<button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/patient_file/delete/<? echo $row['file_id'];?>'">
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
											اسم المريض
									    </td>
										<td  id="blue" class=" ">
                                   <? echo $row['name'];?> 
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											  اسم العمليه
										  </td>
						                 <td  id="blue" class=" ">
                                           <? echo $row['surgery_name'];?>
                                         </td>
									    </tr>
                                          <tr class="even">
											<td  id="pet" class=" ">
												مكان العمليه
											</td>
											<td  id="blue" class=" "> <? echo $row['surgery_place'];?></td>
							  </tr>
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ العمليه
											</td>
											<td  id="blue" class=" ">	
                               <? echo $row['surgery_date'];?>            
                    
				</td>
											</tr>
                                            
                                             <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ التسجيل
											</td>
											<td  id="blue" class=" ">	
                                          
                     <? echo $row['reserve_date'];?>
                    </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												وصف عن العملية
									</td>
								<td  id="blue" class=" "> <? echo $row['surgery_description'];?></td>
				              </tr>
                                            
                                            <tr class="even">
											<td  id="pet" class=" ">
												اسم الدكتور القائم بالعمليه
											</td>
											<td  id="blue" class=" "><? echo $row['doctor_name'];?></td>
											</tr>
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                    اسباب العمليه 
									</td>
								<td  id="blue" class=" ">
                                <? echo $row['surgery_reasons'];?> </td>
							    </tr>
                                        
                                        
                                <tr class="even">
								<td  id="pet" class=" ">		
                                   الاعراض بعد انتهاء العمليه 
								</td>
								<td  id="blue" class=" ">
                               <? echo $row['Symptoms'];?>
                                </td>
							    </tr>
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 سن المريض عند قيام العمليه
											</td>
											<td  id="blue" class=" "><? echo $row['patient_age_at_surgery'];?></td>
											</tr>
                                            
                                 <tr class="even">
								<td  id="pet" class=" ">		
                                    تاريخ الامراض السابقه  
								</td>
								<td  id="blue" class=" ">
                                <? echo $row['pre_paient_disease'];?>
                                </td>
							    </tr>
                                
                                
                                 <tr class="even">
								<td  id="pet" class=" ">		
                                   التاريخ الشخصى للمريض 
								</td>
								<td  id="blue" class=" ">
                                <? echo $row['paient_history'];?>
                                </td>
							    </tr>
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										التحاليل   
									</td>
									<td  id="blue" class=" ">
                                <? echo $row['radiologic'];?>:Radiologic <br />
                                <? echo $row['ascending'];?>:Ascending<br />
                                <? echo $row['duplex'];?>:Duplex u/s
                            </td>
							  </tr>
                                    
                                <tr class="even">
								<td  id="pet" class=" ">		
                                    التاريخ المرضى للعائلة  
								</td>
								<td  id="blue" class=" ">
                                <? echo $row['paient_family_disease_history'];?>
                                </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet" class=" ">		
                                     شكوى المريض   
								</td>
								<td  id="blue" class=" ">
                                <? echo $row['paient_problems'];?> </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet" class=" ">		
                                   التشخيص 
								</td>
								<td  id="blue" class=" ">
                                <? echo $row['paient_diagnosis'];?>
                                </td>
							    </tr>
                                            
                                            <tr class="even">
											<td  id="pet" class=" ">
												الادويه  
											</td>
											<td  id="blue" class=" "><? echo $row['midicne'];?></td>
								            </tr>
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 1  
											</td>
											<td  id="blue" class=" "><? echo $row['ray1'];?></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
											 صوره الاشعه 1  
											</td>
											
                                            <td  id="blue" class=" ">
          <img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray1_pic'];?>" width="100" height="100" >
                                           </td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 2  
											</td>
											<td  id="blue" class=" "><? echo $row['ray2'];?></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
												 صوره الاشعه 2   
											</td>
											
                                            <td  id="blue" class=" ">
											<img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray2_pic'];?>" width="100" height="100" >
                                            </td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 3  
											</td>
											<td  id="blue" class=" "><? echo $row['ray3'];?></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
												 صوره الاشعه 3   
											</td>
											
                                            <td  id="blue" class=" ">
											<img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray3_pic'];?>" width="100" height="100" >
                                            </td>
                                          
								            </tr>
                                            
                                            
                              <tr class="even">
											<td  id="pet" >
												ملاحظات
											</td>
								<td  id="blue" ><? echo $row['notes'];?></td>
								            </tr>
                                            
                                  
                                  
                                  </tbody></table>
 </div>
                       
                            
                            


	
