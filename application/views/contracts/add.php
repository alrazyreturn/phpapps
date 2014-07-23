 <style type="text/css">
 #pet {font-size:16px;
 font-weight:bold;
 color:#06F;
  }
  
 </style>
 
                         <?
						     $error="";
						  if($error=="good")
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
							 else if($error=="error")
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
							?> 
                            <div class="table-header" style="font-size:20px;">
									اضافةجهة تعاقد
</div>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
               <form action="<? echo base_url();?>index.php/contracts/add_new_contract/" method="post" enctype="multipart/form-data"  >
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الجهة 
									    </td>
										<td  id="pet" class=" ">
                                        <input id="name" name="name" placeholder="اسم الجهة" type="text" style="width:50%" >
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											   الخصم على العامل
										  </td>
						                 <td  id="pet" class=" ">
                                         
                       <input id="personal_discount" name="personal_discount" placeholder=" الخصم على العامل" type="text" style="width:50%" >
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 الخصم على عائله العامل
											</td>
											<td  id="pet" class=" ">
    <input id="family_discount" name="family_discount" placeholder="الخصم على عائله العامل" type="text" style="width:50%" >	
                                          
                   </td>
											</tr>
                                            
                                                 <tr class="even">
											<td  id="pet" class=" ">
												 عنوان الجهة
											</td>
											<td  id="pet" class=" ">
          <input id="address" name="address" placeholder="عنوان الجهة" type="text" style="width:50%" >
                                            
                                            </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												 المحمول
									</td>
								<td  id="pet" class=" ">
           <input id="mobile" name="mobile" placeholder="المحمول" type="text" style="width:50%" > </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												الهاتف   
									</td>
								<td  id="pet" class=" ">
                   <input id="phone" name="phone" placeholder="الهاتف" type="text" style="width:50%" >
                   </td>
								            </tr>
                                            
                                                 <tr class="even">
									<td  id="pet" class=" ">
												 من تاريخ تعاقد  
									</td>
								<td  id="pet" class=" ">
                    <input class="span10 date-picker" id="from_date" name="from_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span>
                   </td>
								            </tr>
                                            
                                       
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                   إلى تاريخ تعاقد    
	                                           								</td>
								<td  id="pet" class=" ">
                   <input class="span10 date-picker" id="to_date" name="to_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span>
                                </td>
							    </tr>
                                
                                  <tr class="even">
									<td  id="pet" class=" ">
												
                                   ميعاد التحصيل     
	                                           								</td>
								<td  id="pet" class=" ">
                              <input class="span10 date-picker" id="paid_date" name="paid_date" data-date-format="dd-mm-yyyy" type="text" style="width:25%">
					<span class="add-on"><i class="icon-calendar"></i></span>
                                </td>
							    </tr>
                                        
                                        
                               
                                
                                  <tr class="odd">
									<td  id="pet" class=" ">
										مبلغ التحصيل 
									</td>
									<td  id="pet" class=" ">
    
    <input id="amount" name="amount" placeholder="مبلغ التحصيل" type="text" style="width:50%" >
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
                            
                            


	
