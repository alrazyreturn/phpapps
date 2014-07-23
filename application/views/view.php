 
    

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
<body>
<input id="id-button-borders" checked="checked" type="checkbox" class="ace-switch ace-switch-5"> 
<span class="lbl"></span>