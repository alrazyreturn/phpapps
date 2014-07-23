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
 

 
 <div class="table-header" style="font-size:20px;"><? echo $title; ?> </div>
                             <? // $row=$patient[0];?>
				
             
 <DIV align="right">
 <button class="btn btn-app btn-light btn-mini" onClick="javascript:Print('printDetails');">
										<i class="icon-print bigger-160"></i>
										Print
									</button>
                                    
 <button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/<? echo $controller; ?>/edit/<? echo $id;?>'">
										<i class="icon-edit bigger-160"></i>
										Edit
									</button>
                                    
<button class="btn btn-app btn-light btn-mini" onclick="javascript:window.location.href='<? echo base_url();?>index.php/<? echo $controller; ?>/delete/<? echo $id;?>'">
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
             				
                                        <?
              foreach($row_data as $row)
			  {
				if($temp)
				{		
				 ?>
				  <tr class="odd">
					<? }
							else
							{
							?>
				  <tr class="even">
					<?
			  }
			    if($row['alies']=='img')
				{
					?>
					<td colspan="2" class=" "  id="pet" height="160" align="center"><div align="center">
					<? $pic=$row['data']; ?>
						<img  src="<? echo base_url();?>assests/images/patients/<? echo $row['data'];?>" width="200" height="250" >
                        	</div>
									    </td></tr>
                     <?
										
				}
				else
				{
									
			  ?>
										<td width="25%" class=" "  id="pet">
											<? echo $row['alies'];?>
									    </td>
										<td  id="blue" class=" ">
										<? if($row['data']== '1') {echo "Yes";}
										 elseif ($row['data']== '0') {echo "No";} 
										 else{ echo $row['data'];} ?></td>
										</tr>
                                        
                                        <?
				}
			  }
			  ?>
                                  </tbody></table>
 </div>