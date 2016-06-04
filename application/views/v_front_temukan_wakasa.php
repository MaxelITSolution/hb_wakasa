<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/font.css")?>">

<script src="<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>"></script>
<script src="<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />

<script>
	$(document).ready(function(){
		$("img[name|='gambar1']").hover(function(){
			$(this).css('background-color','yellow');
			$(this).attr('src','<?php echo base_url("asset/image/HasilSearchProduk/gearHover.png")?>');
			$("img[name|='gambar2']").css('background-color','#1a75ff');
			$("img[name|='gambar3']").css('background-color','#1a75ff');
			$("img[name|='gambar4']").css('background-color','#1a75ff');
			$("img[name|='gambar2']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/boxIdle.png")?>');
			$("img[name|='gambar3']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/callIdle.png")?>');
			$("img[name|='gambar4']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/searchIdle.png")?>');
		})
		$("img[name|='gambar2']").hover(function(){
			$(this).css('background-color','yellow');
			$(this).attr('src','<?php echo base_url("asset/image/HasilSearchProduk/boxHover.png")?>');
			$("img[name|='gambar1']").css('background-color','#1a75ff');
			$("img[name|='gambar3']").css('background-color','#1a75ff');
			$("img[name|='gambar4']").css('background-color','#1a75ff');
			$("img[name|='gambar1']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/gearIdle.png")?>');
			$("img[name|='gambar3']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/callIdle.png")?>');
			$("img[name|='gambar4']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/searchIdle.png")?>');
		})
		$("img[name|='gambar3']").hover(function(){
			$(this).css('background-color','yellow');
			$(this).attr('src','<?php echo base_url("asset/image/HasilSearchProduk/callHover.png")?>');
			$("img[name|='gambar2']").css('background-color','#1a75ff');
			$("img[name|='gambar1']").css('background-color','#1a75ff');
			$("img[name|='gambar4']").css('background-color','#1a75ff');
			$("img[name|='gambar2']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/boxIdle.png")?>');
			$("img[name|='gambar1']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/gearIdle.png")?>');
			$("img[name|='gambar4']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/searchIdle.png")?>');
		})
		$("img[name|='gambar4']").hover(function(){
			$(this).css('background-color','yellow');
			$(this).attr('src','<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>');
			$("img[name|='gambar2']").css('background-color','#1a75ff');
			$("img[name|='gambar3']").css('background-color','#1a75ff');
			$("img[name|='gambar1']").css('background-color','#1a75ff');
			$("img[name|='gambar2']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/boxIdle.png")?>');
			$("img[name|='gambar3']").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/callIdle.png")?>');
			$("img[name|='gambar1]").attr('src','<?php echo base_url("asset/image/HasilSearchProduk/gearIdle.png")?>');
		})
	})
</script>
<style>

 @media only screen and (max-width: 360px)
 {
	#btnIMG
	{
		 width:15px;
		 height:auto;
	}
    #judulForm
	{
		padding:0px;
		font-size:14pt;
	}
	#formBanner
	{
		width:100%;
		top:16%;
	}
	#frmCombo
	{
		width:25%;
		height:10%;
	}
	#input1
	{
		width:35%;
	}
	#buttonFRM
	{
		width:20%;
		height:auto;
		font-size:12px;
	}
	 #tulisanBawahLogo
	 {
		 position:absolute;
		 width:200px;
		 top:7%;
		 left:20%
	 }
	 #kanan1
	 {
		 position:absolute;
		 left:29%;
		 top:3%;
		 font-size:8pt;
	 }
	 #kanan2
	 {
		 position:absolute;
		 left:75%;
		 top:6%;
		 font-size:8pt;
	 }
	 #logoDropDown2
	 {
		width:10%;
		height:auto;
	 }
		#menuBanner
		{
			right:0px;
			top:90px;
		}
		#dropdown-content1
		{
			width:30px;
		}
		.col1
		{
			top:9%;
		}
        .logo{
			width: 220px;
			height:auto;
			left:30px;
			top:5px;
		
        }
		.headerBG
		{
			
			padding:0px;
			margin:0px;
			background-color:#005ce6;
			width:100%;
			min-height:85px;
		}
		.f_size1
		{text-align:center;}

 }
 @media only screen and (max-height:400px)
 {
	 #tulisanBawahLogo
	 {
		 top:15%;
	 }
 }
 .active1
 {
	 background-color:yellow;
 }
body
{
	padding:0px;
	margin:0px;
}
.dropdown {
    position: relative;
    display: inline;
}

.dropdown-content {
    display: none;
    position: absolute;
    width: 50px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    color:white;
	left:0px;
	
}
.dropdown-content a{
    color: #1a75ff;
	margin-top:2px;
	border-radius:4px;
	background-color:white;
    text-decoration: bold;
    display: block;
	opacity:0.7;
	width:50px;
	height:50px;
}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown-content a:hover {
	display:block;
    background-color:#1a75ff;
	color:white;
	opacity:1;
}

.headerBG
{
	
	padding:0px;
	margin:0px;
	background-color:#00b386;
	width:100%;
	height:125px;
}
.logo
{
	position:absolute;
	max-width: 300px;
	margin:1.3% 2% 2% 2%;
}
.col1
{
	
	float:right;
	margin-right:1%;
}
.col1_1
{
	margin:10px;
}
.IsiPage
{
	width:100%;
	height:auto;
}
.IsiPageBG
{
	padding:0px;
	margin:0px;
	width:100%;
	height:100%;
	background-image:url("<?php echo base_url("asset/image/HasilSearchProduk/background.png")?>");
    background-size:100% 100%;
}
.GambarBanner
{
	width:100%;
	height:auto;
}
.logoDropDown
{
	width:17%;
	height:auto;
	background-color:#1a75ff;
    border-radius: 5px;
}
.menuBanner
{
	width:270px;
	position:absolute;
	right:0px;
	top:100px;
}
.tmptForm
{
	width:100%;
	height:10%;
}
.inputFRM
{
	margin-top:10px;
	border-radius:7px;
	box-shadow:0px 0px 10px lightblue;
	height:100%;
	width:14.5%;
}
.inputFRM1
{
	
	border-radius:7px;
	box-shadow:0px 0px 10px lightblue;
	height:100%;
	width:22%;
}

.buttonFRM
{
	width:7%;
	border-radius:10px;
	background-color:yellow;
	color:blue;
}
.formBanner
{
	top:23%;
	position:absolute;
	width:100%;
}
.margl05
{margin-left:5%;}
.margl1
{margin-left:10%;}
.margl2
{margin-left:20%;}
.margl3
{margin-left:30%;}

.margl4
{margin-left:40%;}
.margl5
{margin-left:50%;}
.margl6
{margin-left:60%;}
.margl7
{margin-left:70%;}
.f_size1
{font-size:10pt}
.f_size2
{font-size:8pt}
.f_size3
{font-size:6pt}
select{
	
    padding: 0 0 0 2.5%;
	text-align:center;
	font-family:Ubuntu;
}

	.footer{
		margin-top: 0px;
	}

</style>
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<br>
			<div class="margl6 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#00b386;font-family:Ubuntu">Login| Register</button>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/Office-Business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/gearIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar1" >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;"><span style="margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:25px;">Tentang Kami</span></a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/boxIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar2" >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;"><span style="word-wrap:break-word;margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:20px;">Temukan wakasa</span></a>
		</div>
	</div>
	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/callIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar3"  >
		<div class="dropdown-content" id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align:center; width:50px"><span id="btnIMG" style="word-wrap:break-word;margin-top:50px;height:50px;width:50px;margin-left:5px;line-height:20px;">Kontak Kami</span></a>
		</div>
	</div>

	<div class="dropdown">
		<img src="<?php echo base_url("asset/image/HasilSearchProduk/searchIdle.png")?>" class="logoDropDown" id="logoDropDown2" name="gambar4"  >
		<div class="dropdown-content"  id="dropdown-content1">
			<a href="#" class="f_size2" style="text-align: center; width:50px;height:50px;"><span style="margin-top:20px;height:50px;width:50px;margin-left:5px;line-height:50px;">cari</span></a>
			<a href="#" class="f_size2" style="text-align: center;width:50px;"><span style="font-family:ubuntu;margin-top:50%;height:50px;width:50px;margin-left:5px;line-height:100%;">cari produk</span></a>
		</div>
	</div>
</div>
<div class="isiContent" style="position:absolute;width:100%;left:0;top:45%;">
	<h3 class="margl4" style="font-size:22pt;font-family:Exo2;color:#1a75ff">CARI RESELLER WAKASA</h3>
	<br>
	<p style="font-size:12pt;margin-left:36%;font-family:Ubuntu">Produk Wakasa dapat Anda dapatkan di ribuan toko onderdil di berbagai<br> &nbsp&nbsp penjuru nusantara. Silahkan temukan peritel Wakasa di dekat Anda.</p>
	<br>
	<div  style="display:inline;margin-left:35%;">
		<select style="margin-left:20px;width:10%;border-radius:25px;">
			<option value="" default selected>Provinsi</option>
		</select>
		
		<select style="margin-left:20px;width:10%;border-radius:25px;">
			<option value="" default selected>Kabupaten</option>
		</select>

		<button style="margin-left:15px;font-family:Ubuntu;width:10%;border-radius:15px;background-color:yellow">
		Search
		<img style="width:20px;" src="<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>"/>
		</button>
	</div>
</div>
<div class="footer">
	<img src="<?php echo base_url(); ?>asset/image/footer/background.png" class="" id="footer_background">
	<div class="col-xs-4" id="footer_left_content">
		<div class="col-xs-3"><img src="<?php echo base_url(); ?>asset/image/footer/phone.png" id="footer_phone_image" class="pull-right"></div>
		<div class="col-xs-9" id="footer_content_left">
			<p id="cs">Customer Service</p>
			<p>021 - 2903 - 0924</p>
			<p>021 - 2903 - 0965</p>
			<p>021 - 2903 - 0966</p>
		</div>
	</div>
	<div class="col-xs-4" id="footer_center_content">
		<div class="col-xs-3"><img src="<?php echo base_url(); ?>asset/image/footer/envelope.png" id="footer_envelope_image" class="pull-right"></div>
		<div class="col-xs-9" id="footer_content_center">
			<p id="p_1">PT. Wira Karya Sempurna</p>
			<p id="p_2">Pool PPD Pesing Poglar no.2 / B15</p>
			<p id="p_3">Jakarta Barat 11710, Indonesia</p>
		</div>
	</div>
	<div class="col-xs-4" id="footer_right_content">
		<p>info@wakasaparts.com</p>
		<ul>
			<li><img src="<?php echo base_url(); ?>asset/image/footer/twitter.png"></li>
			<li><img src="<?php echo base_url(); ?>asset/image/footer/mail.png"></li>
			<li><img src="<?php echo base_url(); ?>asset/image/footer/g+.png"></li>
			<li><img src="<?php echo base_url(); ?>asset/image/footer/fb.png"></li>
		</ul>
	</div>
	<div class="col-xs-12" id="copy_rights">
		<p>&copy; 2016. PT. Wira Karya Sempurna. All rights reserved. Terms and Conditions Apply.</p>
	</div>
</div>
</body>
</html>

