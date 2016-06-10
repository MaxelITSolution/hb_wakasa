<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/admin_page.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sidebar_btn1').click(function(){
				$('#sidebar1').toggleClass('visible');
			});
		});
	</script>

</head>
<body>
<div id="wrapper">
	<div id="sidebar">
		<ul class="nav nav-list">
			<li style="text-align: center;" id="title_company_name"><a href="">WAKASA</a></li>
			<hr/>
			
			<!--DASHBOARD-->
			<li class="nav-header" id="dashboard" style="margin:0; padding:0;"><a href="dashboard"><i class="fa fa-dashboard fa-lg"> &nbsp;</i>&nbsp;&nbsp;Dashboard</a></li>

			<!--MASTER-->
			<li class="nav-header" id="master" data-toggle="collapse" data-target="#sub_master"><i class="fa fa-desktop fa-lg"> &nbsp;</i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-arrow-down fa-lg" style="margin-left: 80px;"></i>
				<ul id="sub_master" class="nav nav-list collapse sub_menu">
					<li id="product"><a href="product"><i class="fa fa-shopping-bag fa-lg"> &nbsp;</i>&nbsp;Produk</a></li>
					<li id="administrator"><a href="administrator"><i class="fa fa-user fa-lg"> &nbsp;</i>&nbsp;&nbsp;Administrator</a></li>
				</ul>
			</li>
			
			<!--DASHBOARD-->
			<li class="nav-header" style="margin:0; padding:0;"><a href="logout"><i class="fa fa-power-off fa-lg"> &nbsp;</i>&nbsp;&nbsp;Log Out</a></li>

		</ul>
	
	</div>