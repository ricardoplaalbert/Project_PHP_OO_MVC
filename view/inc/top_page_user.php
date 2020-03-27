<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reservas</title>
	<!-- lang -->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<script type="text/javascript" src="module/lang/translate.js"></script>
	 <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/video-popup/modal-video.min.css">
  <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
  <link rel="stylesheet" href="plugins/date-picker/datepicker.min.css">
  <link rel="stylesheet" href="plugins/clock-picker/clockpicker.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css">
  <link rel="stylesheet" href="plugins/devices.min.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

	<!-- dataTables -->	
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	  
	<!-- dataTables -->
    	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    	<script type="text/javascript">
		

		$(function() {		
		$('#fecha').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1900:2020',
        			onSelect: function(selectedDate) {
        			}
        		});
			});
			
	    </script>
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
		<script src="module/user/model/controller_list.js"></script>
		<script src="module/user/model/validate_user.js"></script>
	</head>
