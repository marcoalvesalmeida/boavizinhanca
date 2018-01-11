<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('bootstrap/assets/img/favicon.ico');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin - Boa Vizinhança</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('bootstrap/assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/assets/css/style.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('bootstrap/assets/css/animate.min.css');?>" rel="stylesheet"/>
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('bootstrap/assets/css/light-bootstrap-dashboard.css?v=1.4.0');?>" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('bootstrap/assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet" />
   
    
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('bootstrap/assets/js/jquery.3.2.1.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('bootstrap/assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
   
    
	<!--  Charts Plugin -->
	<script src="<?php echo base_url('bootstrap/assets/js/chartist.min.js');?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('bootstrap/assets/js/bootstrap-notify.js');?>"></script>
    <script type="text/javascript">
        	
            $(document).ready(function(){
                $('#ajax_form').submit(function(){
                    var dados = $(this).serialize();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Usuario/salvar');?>",
                        data: dados,
                        success: function(data)
                        {
                            alert(data);
                        }
                    });
                    return false;
                });
            });

            demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Bem Vindo ao <b>Painel de Controle-Boa Vizinhança</b> Lembre-se: Com grandes poderes, ha grandes responsabilidades!"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
</head>
<body>

