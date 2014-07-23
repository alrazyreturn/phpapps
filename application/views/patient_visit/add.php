 <style type="text/css">
 #pet {font-size:16px;
 font-weight:bold;
 color:#06F;
  }
  
 </style>
 
                         <?
						// $error=33;
						    //echo "errro= ". $error."<br/>";
							if(isset($error))
							{
						  if($error == 0)
							 {
							 ?>
							<div class="alert alert-block alert-fail">
								<button type="button" class="close" data-dismiss="alert" >
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>

								لقد تم تسجيل البيانات بنجــاح
							</div>
                            <?
							 }
							 else if($error == 1)
							 {
							?>
                            	<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert" >
									<i class="icon-remove red"></i>
								</button>

								<i class="icon-ok green"></i>
من فضلك حاول مره اخرى مع الاهتمام بادخال البيانات بطريقة صحيحة
							</div>
                            
                            <?
							 }
							}
							 
							?> 
                            <div class="table-header" style="font-size:20px;">
									اضافة زيارات مريض
                                    
                                
</div>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
               <form action="<? echo base_url();?>index.php/patient_visit/add_new_patient/" method="post" enctype="multipart/form-data"  >
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم المريض
									    </td>
										<td  id="pet" class=" ">
                <select id="patient_id" name="patient_id" onchange="get_visit(this.value)">
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
											  رقم الزيارة
										  </td>
						                 <td  id="pet" class=" ">
                                         
                     <input id="visit" name="visit"  type="text" style="width:50%" >
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												تاريخ الزيارة
											</td>
											<td  id="pet" class=" ">	
                                          
                    <input class="span10 date-picker" id="visit_date" name="visit_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span></td>
											</tr>
                                            
                                                 <tr class="even">
											<td  id="pet" class=" ">
												 اسم الخدمه
											</td>
											<td  id="pet" class=" ">
                                                          <select id="id" name="id">
															<option selected="selected" value="1">اختر الخدمة</option>
                                                            <?
															 foreach($service as $row)
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
												 شكوى المريض
									</td>
								<td  id="pet" class=" ">
                   <textarea class="span12" id="paient_problems" name="paient_problems"  placeholder="Default Text"></textarea>
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												المحاذير   
									</td>
								<td  id="pet" class=" ">
                   <textarea class="span12" id="caveats" name="caveats"  placeholder="Default Text"></textarea>
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
								<td  id="pet" class=" ">
                  
                                
                                <input id="midicne" name="midicne"  type="text" style="width:50%">
                                <br /> <br /><br />
                                                <label>
											    <input name="dexazone_tab" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												</label>	: DEXAZONE 10 TAB  <br /><br />
                                                
                                         <label>
											    <input name="tba" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												</label>	: T.P.A   <br /><br />
                                                
                                            <label>
											    <input name="Prostaglandime" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												</label>	: Prostaglandime   <br /><br />
                                
                                
                                </td>
							    </tr>
                                
                                  <tr class="even">
									<td  id="pet" class=" ">
												
                                    التحاليل المطلوبه     
	                                           								</td>
								<td  id="pet" class=" ">
                                                <label>
											    <input name="radiologic" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												</label>	: Radiologic   <br /><br />
                                                
                                         <label>
											    <input name="ascending" class="ace-switch ace-switch-7" type="checkbox" v>
												<span class="lbl"></span>
												</label>	:  Ascending    <br /><br />
                                                
                                            <label>
											    <input name="duplex" class="ace-switch ace-switch-7" type="checkbox">
												<span class="lbl"></span>
												</label>	: Duplex u/s    <br /><br />
                                
                                
                                </td>
							    </tr>
                                        
                                        
                               
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										التحاليل  نتائج 
									</td>
									<td  id="pet" class=" ">
    <input id="radiologic_result" name="radiologic_result" placeholder="Radiologic" type="text" style="width:50%" >:Radiologic <br /><br />
    <input id="ascending_result" name="ascending_result" placeholder="Ascending" type="text" style="width:50%" >:Ascending<br /><br />
    <input id="duplex_result" name="duplex_result" placeholder="Duplex u/s" type="text" style="width:50%" >:Duplex u/s
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
                            
                            


	
<script type='text/javascript' language='javascript'>
function get_visit(id)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#total_amount').empty();
    $.ajax({
            url: '<?php echo base_url();?>index.php/patient_visit/get_visit/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            //$('#total_amount').val(output_string);
			
			var elem = document.getElementById("visit");
             elem.value = output_string;
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>