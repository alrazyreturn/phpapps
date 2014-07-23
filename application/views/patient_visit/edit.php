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
						  
              <form action="<? echo base_url();?>index.php/patient_visit/save_edit_patient/<? echo $row['visit_id'];?>" method="post" >
                          
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم المريض
									    </td>
										<td  id="pet" class=" ">
                                        <select id="patient_id" name="patient_id">
										<option selected="selected" value="<? echo $row['patient_id']?>"><? echo $row['patient_name'];?></option>
                                                            <? foreach($patients as $row1)
															{
															if($row1['id']==$row['patient_id'])
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
										  <td  id="pet" class=" ">
											  رقم الزيارة
										  </td>
						                 <td  id="pet" class=" ">
                                         <? echo $row['visit_number'];?>
                      <!--<input id="surgery_name" name="surgery_name" placeholder="اسم العمليه" type="text" style="width:50%">-->
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ الزيارة
											</td>
											<td  id="pet" class=" ">	
<input class="span10 date-picker" id="visit_date" name="visit_date" value="<? echo $row['visit_date'];?>" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span></td>
											</tr>
                                            
                                                 <tr class="even">
											<td  id="pet" class=" ">
												 اسم الخدمه
											</td>
											<td  id="pet" class=" ">
                            <select id="service_id" name="service_id">
							<option selected="selected" value="<? echo $row['service_id'];?>"><? echo $row['service'];?></option>
                                                            <?
															 foreach($service as $row2)
															{
																if($row2['id']==$row['service_id'])
																{
																continue;	
																}
															 ?>
															<option value="<? echo $row2['id']?>"><? echo $row2['name'];?></option>
															<?
                                                          }
															?>
															
														</select>
                                            
                                            </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												 شكوى المريض
									</td>
								<td  id="pet" class=" ">
                   <textarea class="span12" id="paient_problems" name="paient_problems"  placeholder="Default Text">
                   <? echo $row['paient_problems'];?>
                   </textarea>
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												المحاذير   
									</td>
								<td  id="pet" class=" ">
                   <textarea class="span12" id="caveats" name="caveats"  placeholder="Default Text">
                    <? echo $row['caveats'];?>
                   </textarea>
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												  التشخيص  
									</td>
								<td  id="pet" class=" ">
                   <textarea class="span12" id="paient_diagnosis" name="paient_diagnosis"  placeholder="Default Text">
                    <? echo $row['paient_diagnosis'];?>
                   </textarea>
                   </td>
								            </tr>
                                            
                                       
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                   الادويه    
	                                           								</td>
								<td  id="pet" class=" ">
                  
                                
                     <input id="midicne" name="midicne"  type="text" style="width:50%" value="<? echo $row['midicne'];?>">
                                <br /> <br /><br />
                                               <label>
											    <input name="dexazone_tab" class="ace-switch ace-switch-7" type="checkbox" 
                                                 <? if($row['dexazone_tab']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												 <strong>: DEXAZONE 10 TAB</strong></label>  <br /><br />
                                                
                                         <label>
											    <input name="tba" class="ace-switch ace-switch-7" type="checkbox" 
                                                 <? if($row['tba']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												<strong>: T.P.A </strong></label>	  <br /><br />
                                                
                                            <label>
											    <input name="Prostaglandime" class="ace-switch ace-switch-7" type="checkbox"
                                                 <? if($row['Prostaglandime']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												<strong>: Prostaglandime</strong></label>	   <br /><br />
                                
                                
                                </td>
							    </tr>
                                
                                  <tr class="even">
									<td  id="pet" class=" ">
												
                                    التحاليل المطلوبه     
	                                           								</td>
								<td  id="pet" class=" ">
                               
                                                <label>
											    <input name="radiologic" class="ace-switch ace-switch-7" type="checkbox" 
                                                <? if($row['radiologic']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												<strong>: Radiologic</strong>  </label>	 <br /><br />
                                                
                                         <label>
											    <input name="ascending" class="ace-switch ace-switch-7" type="checkbox" 
                                                 <? if($row['ascending']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												<strong>:  Ascending</strong></label>	    <br /><br />
                                                
                                            <label>
											    <input name="duplex" class="ace-switch ace-switch-7" type="checkbox"
                                                 <? if($row['duplex']==0)
												{}else{echo "checked='checked'";}
												?>
                                                >
												<span class="lbl"></span>
												<strong>: Duplex u/s</strong></label>	    <br /><br />
                                
                                
                                </td>
							    </tr>
                                        
                                        
                               
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										التحاليل  نتائج 
									</td>
									<td  id="pet" class=" ">
  <input id="radiologic_result" name="radiologic_result" placeholder="Radiologic" type="text" style="width:50%" value="<? echo $row['radiologic_result']?>" >:Radiologic <br /><br />
    <input id="ascending_result" name="ascending_result" placeholder="Ascending" type="text" style="width:50%" value="<? echo $row['ascending_result']?>">:Ascending<br /><br />
    <input id="duplex_result" name="duplex_result" placeholder="Duplex u/s" type="text" style="width:50%" value="<? echo $row['duplex_result']?>">:Duplex u/s
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



	
