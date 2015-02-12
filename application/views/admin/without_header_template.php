<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Visitor App Admin</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- Bootstrap -->
	<link href="<?php echo base_url()?>public/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>public/common/bootstrap/css/responsive.css" rel="stylesheet" />
	
	<!-- Glyphicons Font Icons -->
	<link href="<?php echo base_url()?>public/common/theme/css/glyphicons.css" rel="stylesheet" />
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- PrettyPhoto -->
    <link href="<?php echo base_url()?>public/common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo base_url()?>public/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/common/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	<link href="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />
	
	<!-- Select2 Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />
	
	<!-- DateTimePicker Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
	
	<!-- JQueryUI -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	
	<!-- MiniColors ColorPicker Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />
	
	<!-- Notyfy Notifications Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />
	
	<!-- Gritter Notifications Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />
	
	<!-- Easy-pie Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="<?php echo base_url()?>public/common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="<?php echo base_url()?>public/common/theme/css/style-dark.css?1369414384" rel="stylesheet" />
	
	
	<!-- LESS.js Library -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="login">
<header>

</header>
 
<?php $this->load->view($file);?>
	<!-- JQuery -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/jquery.min.js"></script>
	
	<!-- JQueryUI -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- Modernizr -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/modernizr.js"></script>
	
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>public/common/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
	
	<!-- Common Demo Script -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/demo/common.js?1369414384"></script>
	
	<!-- Holder Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/other/holder/holder.js"></script>
	
	<!-- Uniform Forms Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- PrettyPhoto -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
	
	<!-- Global -->
	<script>
	var basePath = '<?php echo base_url()?>public/common/';
	</script>

	<!-- Bootstrap Extended -->
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootbox.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
	<script src="<?php echo base_url()?>public/common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>
	
	<!-- Google Code Prettify -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>
	
	<!-- Gritter Notifications Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
	
	<!-- Notyfy Notifications Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
	
	<!-- MiniColors Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- DateTimePicker Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Cookie Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/system/jquery.cookie.js"></script>
	
	<!-- Colors -->
	<script>
	var primaryColor = '#e25f39',
		dangerColor = '#bd362f',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	</script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = primaryColor;
	</script>
	<script src="<?php echo base_url()?>public/common/theme/scripts/demo/themer.js"></script>
	
	<!-- Twitter Feed -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/demo/twitter.js"></script>
	
	<!-- Easy-pie Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>
	
	<!-- Sparkline Charts Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
	
	<!-- Ba-Resize Plugin -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>
	
	
	<!-- Optional Resizable Sidebars -->
	<!--[if gt IE 8]><!--><script src="<?php echo base_url()?>public/common/theme/scripts/demo/resizable.js?1369414384"></script><!--<![endif]-->
	
	<!-- Notifications Page Demo Script -->
	<script src="<?php echo base_url()?>public/common/theme/scripts/demo/notifications.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.validate.js"></script>
	
	<script src="<?php echo base_url()?>public/js/admin_form_validation.js"></script>
</body>
</html>
