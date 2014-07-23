 
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
							
							 $dexazone_tab="";
							 $tba="";
							 $Prostaglandime="";
							 $radiologic="";
							 $ascending="";
							 $duplex="";
							 
		if($row['dexazone_tab']==0)
		{
		$dexazone_tab="";
		}
		else
		{
		$dexazone_tab="Dexazone Tab";
		}
		
			if($row['tba']==0)
		{
		$tba="";
		}
		else
		{
		$tba="TBA";
		}
		
			if($row['Prostaglandime']==0)
		{
		$Prostaglandime="";
		}
		else
		{
		$Prostaglandime="Prostaglandime";
		}
		
			if($row['radiologic']==0)
		{
		$radiologic="";
		}
		else
		{
		$radiologic="Radiologic";
		}
		
			if($row['ascending']==0)
		{
		$ascending="";
		}
		else
		{
		$ascending="Ascending";
		}
		
				if($row['duplex']==0)
		{
		$duplex="";
		}
		else
		{
		$duplex="Duplex";
		}
		
							
							 
							 
							 ?>
				
             
 <DIV align="right">
 <button class="btn btn-app btn-light btn-mini" onClick="javascript:Print('printDetails');">
										<i class="icon-print bigger-160"></i>
										Print
									</button>
                                    
 <button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/patient_visit/edit/<? echo $row['visit_id'];?>'">
										<i class="icon-edit bigger-160"></i>
										Edit
									</button>
                                    
<button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/patient_visit/delete/<? echo $row['visit_id'];?>'">
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
                                   <? echo $row['patient_name'];?> </td>
										</tr>
                                        <tr class="odd">
										  <td  id="pet" class=" ">
											   رقم الزياره 
										  </td>
						                 <td  id="blue" class=" ">
                                           <? echo $row['visit_number'];?>
                                         </td>
									    </tr>
                                          <tr class="even">
											<td  id="pet" class=" ">
												 تاريخ الزياره 
											</td>
											<td  id="blue" class=" "> <? echo $row['visit_date'];?></td>
							  </tr>
                                            
                                            <tr class="odd">
											<td  id="pet" class=" ">
												 اسم الخدمه 
											</td>
											<td  id="blue" class=" ">	
                               <? echo $row['service'];?>            
                    
				</td>
											</tr>
                                            
                                             <tr class="odd">
											<td  id="pet" class=" ">
												 شكوى المريض 
											</td>
											<td  id="blue" class=" ">	
                                          
                     <? echo $row['paient_problems'];?>
                    </td>
											</tr>
                                            
                                  <tr class="even">
									<td  id="pet" class=" ">
												 المحاذير 
									</td>
								<td  id="blue" class=" "> <? echo $row['caveats'];?></td>
				              </tr>
                                            
                                            <tr class="even">
											<td  id="pet" class=" ">
												 التشخيص 
											</td>
											<td  id="blue" class=" "><? echo $row['paient_diagnosis'];?></td>
											</tr>
                                            
                                            <tr class="even">
									<td  id="pet" class=" ">
												
                                    الادويه  
									</td>
								<td  id="blue" class=" ">
                                <? echo $row['midicne'];?> 
                                <br /><br />
                                <? echo $tba ."<br />".$dexazone_tab."<br />".$Prostaglandime ;?>
                                </td>
							    </tr>
                                        
                                        
                                <tr class="even">
								<td  id="pet" class=" ">		
                                  التحاليل المطلوبه  
								</td>
								<td  id="blue" class=" ">
                                 
                                <? echo $radiologic ."<br />".$ascending."<br />".$duplex ;?>
                                </td>
							    </tr>
                                
                                       <tr class="odd">
									<td  id="pet" class=" ">
										التحاليل  نتيجة 
									</td>
									<td  id="blue" class=" ">
                                <span style="color:#000000">Radiologic : </span><? echo $row['radiologic_result'];?> <br />
                              <span style="color:#000000">Ascending :  </span><? echo $row['ascending_result'];?><br />
                                <span style="color:#000000">Duplex u/s : </span><? echo $row['duplex_result'];?>
                            </td>
							  </tr>
                              
                              
                              
                                            
                                  
                                  
                                  </tbody></table>
 </div>
                       
                            
                            


	
