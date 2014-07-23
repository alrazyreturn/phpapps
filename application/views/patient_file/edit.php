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
						  
              <form action="<? echo base_url();?>index.php/patient_file/save_edit_patient/<? echo $row['file_id'];?>" method="post" enctype="multipart/form-data"  >
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet">
											اسم المريض
									    </td>
										<td  id="pet">
                                        <select id="patient_id" name="patient_id">
										<option selected="selected" value="<? echo $row['id']?>"><? echo $row['name'];?></option>
                                                            <? foreach($patients as $row1)
															{
																if($row1['id']==$row['id'])
																{
																continue;	
																}
															 ?>
															<option value="<? echo $row1['id']?>"><? echo $row1['name'];?></option>
															<?
                                                            }
															?>
															
														</select>
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet">
											  اسم العمليه
										  </td>
						                 <td  id="pet">
                            <input id="surgery_name" name="surgery_name" value="<? echo $row['surgery_name']?>" type="text" style="width:50%">
                                         </td>
									    </tr>
                                          <tr class="even">
											<td  id="pet">
												مكان العمليه
											</td>
											<td  id="pet">
                    <input id="surgery_place" name="surgery_place" value="<? echo $row['surgery_place']?>" type="text" style="width:50%">
                    </td>
											</tr>
                                            
                                            <tr class="odd">
											<td  id="pet">
												تاريخ العمليه
											</td>
											<td  id="pet">	
                                          
                    <input class="span10 date-picker" id="surgery_date" name="surgery_date" value="<? echo $row['surgery_date']?>" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span></td>
											</tr>
                                            
                                             <tr class="odd">
											<td  id="pet">
												تاريخ التسجيل
											</td>
											<td  id="pet">	
                                          
                    <input class="span10 date-picker" id="reserve_date" name="reserve_date" value="<? echo $row['reserve_date']?>" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span>
            
                    
                    </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet">
												وصف عن العملية
									</td>
								<td  id="pet"><textarea class="span12" id="surgery_description" name="surgery_description"  placeholder="Default Text"><? echo $row['surgery_description']?></textarea></td>
								            </tr>
                                            
                                            <tr class="even">
											<td  id="pet">
												اسم الدكتور القائم بالعمليه
											</td>
											<td  id="pet"><input id="doctor_name" name="doctor_name" value="<? echo $row['doctor_name']?>" type="text" style="width:50%"></td>
											</tr>
                                            
                                            <tr class="even">
									<td  id="pet">
												
                                    اسباب العمليه 
									</td>
								<td  id="pet">
                                <textarea class="span12" id="surgery_reasons" name="surgery_reasons"  placeholder="Default Text">
                                <? echo $row['surgery_reasons']?>
                                </textarea>
                                </td>
							    </tr>
                                        
                                        
                                <tr class="even">
								<td  id="pet">		
                                   الاعراض بعد انتهاء العمليه 
								</td>
								<td  id="pet">
                                <textarea class="span12" id="Symptoms" name="Symptoms"  placeholder="Default Text">
                                <? echo $row['Symptoms']?>
                                </textarea>
                                </td>
							    </tr>
                                            
                                            <tr class="odd">
											<td  id="pet">
												 سن المريض عند قيام العمليه
											</td>
											<td  id="pet"><input id="age" name="age" value="<? echo $row['patient_age_at_surgery']?>" type="text" style="width:50%" ></td>
											</tr>
                                            
                                 <tr class="even">
								<td  id="pet">		
                                    تاريخ الامراض السابقه  
								</td>
								<td  id="pet">
                       <textarea class="span12" id="pre_paient_disease" name="pre_paient_disease"  placeholder="Default Text">
                      <? echo $row['pre_paient_disease']?>
                       </textarea>
                                </td>
							    </tr>
                                
                                
                                 <tr class="even">
								<td  id="pet">		
                                   التاريخ الشخصى للمريض 
								</td>
								<td  id="pet">
                                <textarea class="span12" id="paient_history" name="paient_history"  placeholder="Default Text">
                                <? echo $row['paient_history']?>
                                </textarea>
                                </td>
							    </tr>
                                
                                  <tr class="odd">
									<td  id="pet">
										التحاليل   
									</td>
									<td  id="pet">
                                <input id="radiologic" name="radiologic" value="<? echo $row['radiologic']?>" type="text" style="width:50%" >:Radiologic <br />
                                <input id="ascending" name="ascending" value="<? echo $row['ascending']?>" type="text" style="width:50%" >:Ascending<br />
                                <input id="duplex" name="duplex" value="<? echo $row['duplex']?>" type="text" style="width:50%" >:Duplex u/s
                            </td>
									</tr>
                                    
                                <tr class="even">
								<td  id="pet">		
                                    التاريخ المرضى للعائلة  
								</td>
								<td  id="pet">
                                <textarea class="span12" id="paient_family_disease_history" name="paient_family_disease_history"  placeholder="Default Text"><? echo $row['paient_family_disease_history']?></textarea>
                                </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet">		
                                     شكوى المريض   
								</td>
								<td  id="pet">
                                <textarea class="span12" id="paient_problems" name="paient_problems"  placeholder="Default Text">
                                <? echo $row['paient_problems']?>
                                </textarea>
                                </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet">		
                                   التشخيص 
								</td>
								<td  id="pet">
                                <textarea class="span12" id="paient_diagnosis" name="paient_diagnosis"  placeholder="Default Text">
                                <? echo $row['paient_diagnosis']?>
                                </textarea>
                                </td>
							    </tr>
                                            
                                            <tr class="even">
											<td  id="pet">
												الادويه  
											</td>
											<td  id="pet">
                              <input id="midicne" name="midicne" value="<? echo $row['midicne']?>" type="text" style="width:50%"></td>
                              
                              <td  id="pet">
                                        <select id="midicne" name="midicne">
										<option selected="selected" value="<? echo $row['id']?>"><? echo $row['name'];?></option>
                                                            <? foreach($patients as $row1)
															{
																if($row1['id']==$row['mid_id'])
																{
																continue;	
																}
															 ?>
															<option value="<? echo $row1['id']?>"><? echo $row1['name'];?></option>
															<?
                                                            }
															?>
															
														</select>
                                                        </td>
								            </tr>
                                              <tr class="even">
											<td  id="pet">
												الاشعة 1  
											</td>
											<td  id="pet">
                                            <input id="ray1" name="ray1" value="<? echo $row['ray1']?>" type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet">
											 صوره الاشعه 1  
											</td>
											
                                            <td  id="pet">
          <img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray1_pic'];?>" width="100" height="100" >
                                            <input type="file" name="upload1[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet">
												الاشعة 2  
											</td>
											<td  id="pet"><input id="ray2" name="ray2" value="<? echo $row['ray2']?>" type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet">
												 صوره الاشعه 2   
											</td>
											
                                            <td  id="pet">
                                            <img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray2_pic'];?>" width="100" height="100" >
                                            <input type="file" name="upload2[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet">
												الاشعة 3  
											</td>
											<td  id="pet"><input id="ray3" name="ray3" value="<? echo $row['ray3']?>" type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet">
												 صوره الاشعه 3   
											</td>
											
                                            <td  id="pet">
                                            <img  src="<? echo base_url();?>assests/images/patients/<? echo $row['ray3_pic'];?>" width="100" height="100" >
                                            <input type="file" name="upload3[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet">
												ملاحظات
											</td>
											<td  id="pet">
                                            <textarea class="span12" id="notes" name="notes"  placeholder="Default Text">
                                           <? echo $row['notes']?>
                                            </textarea></td>
								            </tr>
                                            
                                                <tr class="even">
											<td colspan="2"  id="pet">
                                                                                   
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



	
