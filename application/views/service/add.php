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
									اضافة الخدمات
</div>

						  <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="sample-table-2_length"></div></div></div>
               <form action="<? echo base_url();?>index.php/service/add_new_service/" method="post" enctype="multipart/form-data"  >
                          <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
							 

									
							<tbody aria-relevant="all" aria-live="polite" role="alert">
                           
                                        <tr class="even">
										<td  id="pet" class=" ">
											اسم الخدمة
									    </td>
										<td  id="pet" class=" ">
                      <input id="name" name="name" placeholder="اسم الخدمة" type="text" style="width:50%">
                                                        </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											  سعر الخدمة
										  </td>
						                 <td  id="pet" class=" ">
                                         
                    <input id="amount" name="amount" placeholder="سعر الخدمة" type="text" style="width:50%">
                                         </td>
									    </tr>
                                          
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												ملاحظات
											</td>
											<td  id="pet" class=" ">
                                            <textarea class="span12" id="notes" name="notes"  placeholder="Default Text"></textarea></td>
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
                            
                            


	
