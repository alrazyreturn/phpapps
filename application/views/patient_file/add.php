 <style type="text/css">
 #pet {font-size:16px;
 font-weight:bold;
 color:#06F;
  }
 </style> 
                            <div class="table-header" style="font-size:20px;">
									اضافة بيانات مريض
</div>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
               <form action="<? echo base_url();?>index.php/patient_file/add_new_patient/" method="post" enctype="multipart/form-data"  >
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم المريض
									    </td>
										<td  id="pet" class=" ">
                                        <select id="patient_id" name="patient_id">
															<option selected="selected" value="0">اختر اسم المريض</option>
                                                            <? foreach($patients as $row)
															{
															 ?>
															<option value="<? echo $row['id']?>"><? echo $row['name'];?></option>
															<?
                                                            }
															?>
															
														</select>
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											  اسم العمليه
										  </td>
						                 <td  id="pet" class=" ">
                                         <input id="surgery_name" name="surgery_name" placeholder="اسم العمليه" type="text" style="width:50%">
                                         </td>
									    </tr>
                                          <tr class="even">
											<td  id="pet" class=" ">
												مكان العمليه
											</td>
											<td  id="pet" class=" "><input id="surgery_place" name="surgery_place" placeholder="مكان العمليه" type="text" style="width:50%"></td>
											</tr>
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ العمليه
											</td>
											<td  id="pet" class=" ">	
                                          
                    <input class="span10 date-picker" id="surgery_date" name="surgery_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span></td>
											</tr>
                                            
                                             <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ التسجيل
											</td>
											<td  id="pet" class=" ">	
                                          
                    <input class="span10 date-picker" id="reserve_date" name="reserve_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span>
            
                    
                    </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												وصف عن العملية
									</td>
								<td  id="pet" class=" "><textarea class="span12" id="surgery_description" name="surgery_description"  placeholder="Default Text"></textarea></td>
								            </tr>
                                            
                                            <tr class="even">
											<td  id="pet" class=" ">
												اسم الدكتور القائم بالعمليه
											</td>
											<td  id="pet" class=" "><input id="doctor_name" name="doctor_name" placeholder="اسم الدكتور القائم بالعمليه" type="text" style="width:50%"></td>
											</tr>
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                    اسباب العمليه 
									</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="surgery_reasons" name="surgery_reasons"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                        
                                        
                                <tr class="even">
								<td  id="pet" class=" ">		
                                   الاعراض بعد انتهاء العمليه 
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="Symptoms" name="Symptoms"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 سن المريض عند قيام العمليه
											</td>
											<td  id="pet" class=" "><input id="age" name="age" placeholder="سن المريض" type="text" style="width:50%" ></td>
											</tr>
                                            
                                 <tr class="even">
								<td  id="pet" class=" ">		
                                    تاريخ الامراض السابقه  
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="pre_paient_disease" name="pre_paient_disease"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                
                                
                                 <tr class="even">
								<td  id="pet" class=" ">		
                                   التاريخ الشخصى للمريض 
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="paient_history" name="paient_history"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										التحاليل   
									</td>
									<td  id="pet" class=" ">
                                <input id="radiologic" name="radiologic" placeholder="Radiologic" type="text" style="width:50%" >:Radiologic <br />
                                <input id="ascending" name="ascending" placeholder="Ascending" type="text" style="width:50%" >:Ascending<br />
                                <input id="duplex" name="duplex" placeholder="Duplex u/s" type="text" style="width:50%" >:Duplex u/s
                            </td>
									</tr>
                                    
                                <tr class="even">
								<td  id="pet" class=" ">		
                                    التاريخ المرضى للعائلة  
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="paient_family_disease_history" name="paient_family_disease_history"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet" class=" ">		
                                     شكوى المريض   
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="paient_problems" name="paient_problems"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                
                                   <tr class="even">
								<td  id="pet" class=" ">		
                                   التشخيص 
								</td>
								<td  id="pet" class=" ">
                                <textarea class="span12" id="paient_diagnosis" name="paient_diagnosis"  placeholder="Default Text"></textarea>
                                </td>
							    </tr>
                                            
                                            <tr class="even">
											<td  id="pet" class=" ">
												الادويه  
											</td>
											<td >
                                            <select id="midicne" name="midicne">
															<option selected="selected" value="0">لا يوجد</option>
                                                            <? foreach($patients as $row)
															{
															 ?>
															<option value="<? echo $row['id']?>"><? echo $row['name'];?></option>
															<?
                                                            }
															?>
															
														</select>
                                                        </td>
								            </tr>
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 1  
											</td>
											<td  id="pet" class=" "><input id="ray1" name="ray1" placeholder="الاشعة 1 " type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
											 صوره الاشعه 1  
											</td>
											
                                            <td  id="pet" class=" "><input type="file" name="upload1[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 2  
											</td>
											<td  id="pet" class=" "><input id="ray2" name="ray2" placeholder="الاشعة 2 " type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
												 صوره الاشعه 2   
											</td>
											
                                            <td  id="pet" class=" "><input type="file" name="upload2[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet" class=" ">
												الاشعة 3  
											</td>
											<td  id="pet" class=" "><input id="ray3" name="ray3" placeholder="الاشعة 3 " type="text" style="width:50%"></td>
								            </tr>
                                            
                                              <tr class="odd">
											<td  id="pet" class=" ">
												 صوره الاشعه 3   
											</td>
											
                                            <td  id="pet" class=" "><input type="file" name="upload3[]" id="upload" multiple /></td>
                                          
								            </tr>
                                            
                                            
                                              <tr class="even">
											<td  id="pet" class=" ">
												ملاحظات
											</td>
											<td  id="pet" class=" "><textarea class="span12" id="notes" name="notes"  placeholder="Default Text"></textarea></td>
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
                            
                            


	
