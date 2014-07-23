<?
 if(session_id() == '') {
    session_start();
}
if(isset($_SESSION['User_Login']))
{
	$admin_data = $_SESSION['admin_data'];
	?>
    

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard - Ace Admin</title>

		<meta name="description" content="overview &amp; stats">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        

		<!--basic styles-->

		<link href="<? echo base_url();?>assests/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="<? echo base_url();?>assests/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="<? echo base_url();?>assests/themes/font-awesome/css/font-awesome.css">

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="<? echo base_url();?>assests/admin_files/css.css">

		<!--ace styles-->

		<link rel="stylesheet" href="<? echo base_url();?>assests/admin_files/ace.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/admin_files/ace-responsive.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/admin_files/ace-skins.css">
        
        
        
        <link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery-ui-1.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/chosen.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/datepicker.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/bootstrap-timepicker.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/daterangepicker.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/colorpicker.css">

		<!--fonts-->

		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/css.css">

		<!--ace styles-->

		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/ace.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/ace-responsive.css">
		<link rel="stylesheet" href="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/ace-skins.css">

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
        
        
		<!--basic scripts-->
        
        <!-- mahmoud script-->
        


<script type='text/javascript' language='javascript'>
function get_data(id,contorler_name)
{
//clearChildren(document.getElementById('example'));
 //$('#example').append('');
 $('#mydata').empty();
    $.ajax({
            url: '<?php echo base_url();?>index.php/welcome/get_data/'+id+'/'+contorler_name,
		   // url: '<?php // echo base_url();?>index.php/welcome/testme/'+id,
            type:'POST',
            dataType: 'json',
            success: function(output_string)
			{
			
            $('#mydata').append(output_string);
			
                } // End of success function of ajax form
				
            }); // End of ajax call 	
}

</script>

<!-- end of mahmoud scropt -->

		<!--[if !IE]>-->

		<script src="<? echo base_url();?>assests/admin_files/jquery_005.js"></script>
        <script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/daterangepicker.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<? echo base_url();?>assests/admin_files/bootstrap.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
<? $error=2;?>

		<!--ace scripts-->

		<script src="<? echo base_url();?>assests/admin_files/ace-elements.js"></script>
		<script src="<? echo base_url();?>assests/admin_files/ace.js"></script>

		<!--inline scripts related to this page-->

		<!--inline styles related to this page-->
	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

	<body class="rtl">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						
							<i class="icon-leaf"></i>
							 المصرية للخدمات الطبية
						
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-left">
						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<? echo base_url();?>assests/admin_files/avatar4.png" alt="Jason's Photo">
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="<? echo base_url();?>index.php/admin/log_out">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>


		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li class="active">
						<a href="<? echo base_url(); ?>index.php/admin/check/">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

			
                     <? if($admin_data['patients_access']== 1) { ?>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text">  بيانات المرضى </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/patient/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه بيانات المريض
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/patient/view_patients">
									<i class="icon-double-angle-right"></i>
									عرض بيانات المرضى
								</a>
							</li>

							
						</ul>
					</li>
                    <? } ?>
                    
                     <? if($admin_data['patient_files_access']== 1) { ?>
                    
                    <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-file-alt"></i>
							<span class="menu-text">  ملفات المرضى </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/patient_file/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه ملف المريض
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/patient_file/view_patients">
									<i class="icon-double-angle-right"></i>
									عرض ملفات المرضى
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['patient_visits_access']== 1) { ?>
                    <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-calendar"></i>
							<span class="menu-text">  زيارات المرضى </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/patient_visit/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه زيارات المريض
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/patient_visit/view">
									<i class="icon-double-angle-right"></i>
									عرض زيارات المرضى
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['contracts_access']== 1) { ?>
                    <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> جهات التعاقد </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/contracts/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه جهات التعاقد
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/contracts/view">
									<i class="icon-double-angle-right"></i>
									عرض جهات التعاقد
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['services_access']== 1) { ?>
                    <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> الخدمات </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/service/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه الخدمات
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/service/view">
									<i class="icon-double-angle-right"></i>
									عرض الخدمات
								</a>
							</li>

							
						</ul>
					</li>
                       <? } ?>
                    
 <? if($admin_data['doctors_access']== 1) { ?>
	<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text">  الاطبــاء </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/doctors/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه بيانات طبيب
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/doctors/view">
									<i class="icon-double-angle-right"></i>
									عرض بيانات الاطباء
								</a>
							</li>

							
						</ul>
					</li>
       <? } ?>              

				
					 <? if($admin_data['reservations_access']== 1) { ?>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> الحجوزات </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/reservations/add_new">
									<i class="icon-double-angle-right"></i>
									اضافة الحجوزات
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/reservations/view">
									<i class="icon-double-angle-right"></i>
									عرض الحجوزات 
								</a>
							</li>

						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['medicines_access']== 1) { ?>
                       <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> دليل الادوية </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/medicines/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه دواء
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/medicines/view">
									<i class="icon-double-angle-right"></i>
									عرض الادوية
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['tests_access']== 1) { ?>
                     <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-file-alt"></i>
							<span class="menu-text"> التحاليل </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/tests/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه تحاليل
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/tests/view">
									<i class="icon-double-angle-right"></i>
									عرض التحاليل
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                     <? if($admin_data['specialties_access']== 1) { ?>
                       <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> التخصصات </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/specialties/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه التخصاصات
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/specialties/view">
									<i class="icon-double-angle-right"></i>
									عرض التخصاصات
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                    
                     <? if($admin_data['users_access']== 1) { ?>
                      <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list"></i>
							<span class="menu-text"> المستخدمين </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<? echo base_url();?>index.php/admin/add_new">
									<i class="icon-double-angle-right"></i>
									اضافه مستخدم
								</a>
							</li>

							<li>
								<a href="<? echo base_url();?>index.php/admin/view">
									<i class="icon-double-angle-right"></i>
									عرض المستخدمين
								</a>
							</li>

							
						</ul>
					</li>
                     <? } ?>
                    
                    
                    
                      <li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> التقارير </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="#">
									<i class="icon-double-angle-right"></i>
									تقارير المرضى
								</a>
							</li>

							<li>
								<a href="#">
									<i class="icon-double-angle-right"></i>
									تقارير زيارات المرضى
								</a>
							</li>
                            
                            	<li>
								<a href="#">
									<i class="icon-double-angle-right"></i>
									تقارير الحجوزات
								</a>
							</li>

							
						</ul>
					</li>
           

			


			
				</ul><!--/.nav-list-->
                
                

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
		

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Page Title
							<small>
								<i class="icon-double-angle-right"></i>
								- overview &amp; stats
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
                        
							<!--PAGE CONTENT BEGINS-->
                             <!--welcome message-->
                             <? if(@$error==0)
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
							 else if($error==1)
							 {
							?>
                            	<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert" >
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>
من فضلك حاول مره اخرى مع الاهتمام بادخال البيانات بطريقة صحيحة
							</div>
                            
                            <?
							 }
							?>
                 <!--end of welcome message-->
							<div class="space-6"></div>
                        <?   
						if(!empty($content))
						{
						@$this->load->view(@$content);
						}
						
						 ?>
                          
       </div>
                            </div>
                            </div>
                            </div>
	

</div><div class="tooltip top in hide"><div class="tooltip-inner"></div></div></body></html>
                            
          
          
          
          <script type="text/javascript">
			$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/

					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
        
        
        
        <script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery-ui-1.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery_006.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/chosen.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/fuelux.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/bootstrap-datepicker.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/bootstrap-timepicker.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/moment.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/daterangepicker.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/bootstrap-colorpicker.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery_004.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery_003.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/jquery_002.js"></script>
		<script src="<? echo base_url();?>assests/Form%20Elements%20-%20Ace%20Admin_files/bootstrap-tag.js"></script>
        
        <script type="text/javascript" language="javascript">

function Print(elementId)
{
var printContent = document.getElementById(elementId);
var windowUrl = 'about:blank';
var uniqueName = new Date();
var windowName = 'Print' + uniqueName.getTime();
var printWindow = window.open(windowUrl, windowName, 'left=50000,top=50000,width=0,height=0');

printWindow.document.write(printContent.innerHTML);
printWindow.document.close();
printWindow.focus();
printWindow.print();
printWindow.close();
}



</script> 

<?
}
else
{ 
 ?>
 
<form name="log_form" id="log_form" action="<? echo base_url(); ?>" >
</form>
<script>
document.log_form.submit();
</script>
<?
 
}

?>
