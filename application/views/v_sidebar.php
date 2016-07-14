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
			<li class="nav-header" id="dashboard" style="margin:0; padding:0;"><a href="<?php echo base_url(); ?>Backend/dashboard"><i class="fa fa-dashboard fa-lg"> &nbsp;</i>&nbsp;&nbsp;Dashboard</a></li>

			<!--MASTER-->
			<li class="nav-header" id="master" data-toggle="collapse" data-target="#sub_master"><i class="fa fa-desktop fa-lg"> &nbsp;</i>&nbsp;Master&nbsp;&nbsp;<i class="fa fa-arrow-down fa-lg" style="margin-left: 80px;"></i>
				<ul id="sub_master" class="nav nav-list collapse sub_menu">
					<li id="product"><a href="<?php echo base_url(); ?>Backend/product"><i class="fa fa-shopping-bag fa-lg"> &nbsp;</i>&nbsp;Produk</a></li>
					<!--<li id="product_unggulan"><a href="<?php echo base_url(); ?>Backend/product_unggulan"><i class="fa fa-shopping-bag fa-lg"> &nbsp;</i>&nbsp;Produk Unggulan</a></li>-->
					<li id="administrator"><a href="<?php echo base_url(); ?>Backend/administrator"><i class="fa fa-user fa-lg"> &nbsp;</i>&nbsp;&nbsp;Administrator</a></li>
					<li id="import_image"><a href="<?php echo base_url(); ?>Backend/import_image"><i class="fa fa-file-image-o fa-lg"> &nbsp;</i>&nbsp;&nbsp;Import Gambar</a></li>
				</ul>
			</li>

			<!--SETTING-->
			<li class="nav-header" id="setting" data-toggle="collapse" data-target="#sub_setting"><i class="fa fa-cogs fa-lg"> &nbsp;</i>&nbsp;Setting&nbsp;&nbsp;<i class="fa fa-arrow-down fa-lg" style="margin-left: 78px;"></i>
				<ul id="sub_setting" class="nav nav-list collapse sub_menu">
					<li id="content"><a href="<?php echo base_url(); ?>Backend/setting_content"><i class="fa fa-file-code-o fa-lg"> &nbsp;</i>&nbsp;&nbsp;Content</a></li>
					<li id="banner"><a href="<?php echo base_url(); ?>Backend/setting_banner"><i class="fa fa-picture-o fa-lg"> &nbsp;</i>&nbsp;Banner</a></li>
					<li id="amail"><a href="<?php echo base_url(); ?>Backend/setting_email"><i class="fa fa-envelope fa-lg"> &nbsp;</i>&nbsp;Email</a></li>
					<li id="set_content_image"><a href="<?php echo base_url(); ?>Backend/setting_content_image"><i class="fa fa-file-image-o fa-lg"> &nbsp;</i>&nbsp;&nbsp;Content Image</a></li>
				</ul>
			</li>

			<!--REPORT-->
			<li class="nav-header" id="report" data-toggle="collapse" data-target="#sub_report"><i class="fa fa-file-text fa-lg"> &nbsp;</i>&nbsp;&nbsp;Report&nbsp;&nbsp;<i class="fa fa-arrow-down fa-lg" style="margin-left: 78px;"></i>
				<ul id="sub_report" class="nav nav-list collapse sub_menu">
					<li id="client_contact"><a href="<?php echo base_url(); ?>Backend/client_contact"><i class="fa fa-users fa-lg"> &nbsp;</i>&nbsp;&nbsp;Client Contact</a></li>
					<li id="client_subs"><a href="<?php echo base_url(); ?>Backend/client_subs"><i class="fa fa-users fa-lg"> &nbsp;</i>&nbsp;&nbsp;Client Subscribe</a></li>
					<li id="reseller_conf"><a href="<?php echo base_url(); ?>Backend/reseller_conf"><i class="fa fa-users fa-lg"> &nbsp;</i>&nbsp;&nbsp;Reseller</a></li>
				</ul>
			</li>
			
			<!--DASHBOARD-->
			<li class="nav-header" style="margin:0; padding:0;"><a href="<?php echo base_url(); ?>Backend/logout"><i class="fa fa-power-off fa-lg"> &nbsp;</i>&nbsp;&nbsp;Log Out</a></li>

		</ul>
	
	</div>