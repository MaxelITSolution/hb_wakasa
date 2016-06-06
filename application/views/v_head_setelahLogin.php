<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/font.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/Headers.css")?>">

<script src="<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>"></script>
<script src="<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>"></script>
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
</head>
<body>
<div class="headerBG">
	<img class="logo" src="<?php echo base_url("asset/image/HasilSearchProduk/wakasalogo.png")?>"></img>
	<div class="col1">
		<div class="col1_1">
		<br>
			<div class="margl5 f_size1" id="kanan1"><Strong style="color:yellow;font-family:Ubuntu"><i>ENG</i>|<i>ID</i></strong></div>
			<button id="kanan2" style="border-radius:10px;border:2px solid yellow;background-color:#005ce6;font-family:Ubuntu;color:yellow">Login| Register</button>
		</div>
	</div>
</div>
<div>
	<img src="<?php echo base_url("asset/image/business.jpg")?>" class="GambarBanner"/>
</div>

<div class="menuBanner" id="menuBanner" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/gearIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Tentang Kami</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/boxIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:8pt">Temukan Wakasa</a>
   
  </div>
</div>

<div class="dropdown">
  <div class="dropbtn" id="logoDropDown2" style="background-color:#0099ff;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/callIdle.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Kontak Kami</a>
   
  </div>
</div>

<div class="dropdown" >
  <div class="dropbtn" id="logoDropDown2" style="background-color:yellow;background-image:url(<?php echo base_url('asset/image/HasilSearchProduk/searchHover.png')?>);"></div>
  <div class="dropdown-content" id="dropdown-content1">
    <a href="#" style="text-align:center;word-wrap: break-word;">Cari</a>
    <a href="#" style="text-align:center;word-wrap: break-word;font-size:10pt;">Cari Produk</a>
  </div>
</div>

</div>

<div class="formBanner" id="formBanner">
<h2 class="margl1" id="judulForm" style="color:blue;font-family:Ubuntu">CARI TENTANG WAKASA</h2><br>
	<div class="tmptForm">
		<input placeholder="Masukkan Kata Kunci" type="text" class="margl05 inputFRM1" ></input><button id="buttonFRM" class="margl05 buttonFRM" style="font-family:Ubuntu">Search<img id="btnIMG" src="<?php echo base_url("asset/image/HasilSearchProduk/searchHover.png")?>" style="width:20px;height:auto;"></img></button>
	</div>
</div>
</body>
</html>

