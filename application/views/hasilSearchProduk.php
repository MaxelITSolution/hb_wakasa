<html>
<head>
<link rel="stylesheet" type="text/css" href=<?php echo base_url("asset/bootstrap/css/bootstrap.css")?>>
<link rel="stylesheet" type="text/css" href=<?php echo base_url("asset/css/hasilSearchProduk.css")?>>
<script src=<?php echo base_url("asset/bootstrap/js/jquery.min.js")?>></script>
<script src=<?php echo base_url("asset/bootstrap/js/bootstrap.js")?>></script>
<script src=<?php echo base_url("asset/bootstrap/js/jquery.shiningImage.min.js")?>></script>
<style>
.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	z-index:10;
}

.dropdown {
    position: relative;
    display: inline-block;
	z-index:10;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index:10;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	z-index:10;
}

.dropdown-content a:hover {background-color: #f1f1f1;z-index:10;}

.dropdown:hover .dropdown-content {
    display: block;
	z-index:10;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
	z-index:10;
}

.kanan
{
	right:6.5%;
	top:100px;
	position:absolute;
	z-index:5;
}
.besarImg
{
	size:30px;
}
</style>
<script>
	$(document).ready(function()
	{
		$("#wakasa").shiningImage({opacity:1,
		delay:9999999999});
		
	})
</script>
</head>

<body>
<div class="container-fluid headerBG">
	<br>
		<div class="row">
			<div class="col-sm-1">
				<div class="col-sm-1">
				<img id="wakasa" src="Wakasa copy.png" style="width:380px;height:100px;"></img>
				</div>
			</div>
			
			<div class="col-sm-9"></div>
			<div class="col-sm-2">
			<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="#" class="text1">Eng</a>|<a href="#" class="text1">Ind</a></h4>
			<h6 style="color:yellow">Welcome Back,<b style="color:white">MR Vincent</b></h6>
			<h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" style="color:yellow;font-size:10pt;">[ Logout ]</a></h5>
			</div>
			<br>
		</div>
		<br>
		<form class="form-inline" role="form" style="position:absolute;z-index:5;top:100px;right:6.5%;">
			<div class="form-group">
				<div class="dropdown">
				  <img style="width:50px;" class="dropdown-toggle" data-toggle="dropdown" src="iconGear.jpg" class="img-rounded"></img>
				  <ul class="dropdown-menu">
					<li><a href="#">Tentang Kami</a></li>
					
				  </ul>
				</div>
			</div>
			<div class="form-group">
				<div class="dropdown">
				   <img style="width:50px;" class="dropdown-toggle" data-toggle="dropdown" src="iconBox.jpg" class="img-rounded"></img>
				  <ul class="dropdown-menu">
					<li><a href="#">Temukan Wakasa</a></li>
					
				  </ul>
				</div>
			</div>
			<div class="form-group">
				<div class="dropdown">
				   <img style="width:50px;" class="dropdown-toggle" data-toggle="dropdown" src="iconCall.jpg" class="img-rounded"></img>
				  <ul class="dropdown-menu">
					<li><a href="#">Kontak Kami</a></li>
					
				  </ul>
				</div>
			</div>
			<div class="form-group">
				<div class="dropdown">
				  <img style="width:50px;" class="dropdown-toggle" data-toggle="dropdown" src="iconSearch.jpg" class="img-rounded"></img>
				  <ul class="dropdown-menu">
					<li><a href="#">Cari Produk</a></li>
					
				  </ul>
				</div>
			</div>
		</form>
	</div>
	<div class="kanan">
	<div class="dropdown ">
  <button class="dropbtn besarImg" style="width:50px;height:50px;background-image:url(iconGear.jpg);background-size:100% 100%;"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
  </div>
</div>
<div class="dropdown ">
  <button class="dropbtn"  style="width:50px;height:50px;background-image:url(iconBox.jpg);background-size:100% 100%;"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
  </div>
</div>
<div class="dropdown ">
  <button class="dropbtn besarImg" style="width:50px;height:50px;background-image:url(iconCall.jpg);background-size:100% 100%;"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
  </div>
</div>
<div class="dropdown ">
  <button class="dropbtn besarImg" style="width:50px;height:50px;background-image:url(iconSearch.jpg);background-size:100% 100%;"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
  </div>
</div>
</div>
	<form class="form-inline" action="#" style="position:absolute;z-index:2;left:10%;top:20%">
	<h1 style="text-align:center">CARI PRODUK WAKASA</h1>
		<div class="form-group">
			<input type="text" size="50" class="form-control col-sm-9">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<button class="btn btn-primary" style="background-color:yellow;color:#1a8cff">Search<span class="	glyphicon glyphicon-search"></span></button>
		</div><br><br>
		<div class="form-group">
				<select class="form-control" style="width:250;">
					<option>By Make</option>
				</select>
			</div>
		</div>
		<div class="form-group">
				<select class="form-control" style="width:250;margin-left:40px;">
					<option>By Model</option>
				</select>
		</div>
	</form>
	
	<div id="slider">
		
		<figure>
			<img src="ibiza.jpg" alt>
			<img src="taj-mahal_copy.jpg" alt>
			<img src="austin-fireworks.jpg" alt>
		</figure>
	</div>
		
	<div class="container-fluid" style="background-image:url(smartObject.png);background-size: 100% 100%;background-repeat:no-repeat;">
		<div class="row">
			<div class="col-sm-5">
			</div>
			<div class="col-sm-4">
				<h2 style="font-family:Exo-Medium;color:#1a8cff;">HASIL PENCARIAN</h2>
				<p style="font-family:ubuntu">Your Search for "XXX" has 20 matches</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
			  <div class="thumbnail">
				<img src="baut.png" alt="New York" width=100% height = 100% >
				<p style="padding:5px;font-family: Exo-medium;font-size:12pt;background-color: #fff000;text-align:center"><strong>BAUT MOBIL AVANZA TIPE S</strong></p>
				<p style="font-family: Ubuntu;;margin-left:10px;word-wrap:break-word;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam<br><br><a style="font-family: Ubuntu;font-size:12pt;"><B>SELENGKAPNYA >></b></a></p>
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="thumbnail">
				<img src="baut.png" alt="New York" width=100% height = 100% >
				<p style="padding:5px;font-family: Exo-medium;font-size:12pt;background-color: #fff000;text-align:center"><strong>BAUT MOBIL AVANZA TIPE S</strong></p>
				<p style="font-family: Ubuntu;;margin-left:10px;word-wrap:break-word;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam<br><br><a style="font-family: Ubuntu;font-size:12pt;"><b>SELENGKAPNYA >></b></a></p>
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="thumbnail">
				<img src="baut.png" alt="New York" width=100% height = 100% >
				<p style="padding:5px;font-family: Exo-medium;font-size:12pt;background-color: #fff000;text-align:center"><strong>BAUT MOBIL AVANZA TIPE S</strong></p>
				<p style="font-family: Ubuntu;;margin-left:10px;word-wrap:break-word;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam<br><br><a style="font-family: Ubuntu;font-size:12pt;"><b>SELENGKAPNYA >></b></a></p>
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="thumbnail">
				<img src="baut.png" alt="New York" width=100% height = 100% >
				<p style="padding:5px;font-family: Exo-medium;font-size:12pt;background-color: #fff000;text-align:center"><strong>BAUT MOBIL AVANZA TIPE S</strong></p>
				<p style="font-family: Ubuntu;;margin-left:10px;word-wrap:break-word;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam<br><br><a style="font-family: Ubuntu;font-size:12pt;"><b>SELENGKAPNYA >></b></a></p>
			  </div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-11">
			</div>
			<div class="col-sm-1">
				page 1 of 99
			</div>
		</div>
	</div>
	
	<div class="container-fluid foot" style="background-image:url(footerBG.png);background-size:100% 100%;background-repeat:no-repeat;">
	<div class="row" >
	<br><br>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-2">
		<p class="whiteText" style="font-family:Ubuntu"><span class="glyphicon glyphicon-earphone"></span>&nbspCustomer Service<br><br> 021-2903-0924<br>021-2903-0925<br>021-2903-0926<br></p>
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-2">
		
		<p class="whiteText" style="font-family:Roboto-regular"><span class="glyphicon glyphicon-envelope"></span>&nbsp PT.Wira Karya Sempurna <br><br> Pool PPD Pesing Poglar no.2/B15<br>Jakarta Barat 11710, Indonesia</p>
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-2">
		<p class="whiteText" style="font-family:Roboto-regular;">&nbspinfo@wakasaparts.com<br></p>
		<div class="row">
		&nbsp&nbsp&nbsp&nbsp <img class ="icon" src="envelope.png"></img><img class ="icon" src="twitter.png"></img><img class ="icon" src="gmail.png"></img><img class ="icon" src="fbi.png"></img>
		</div>
	</div>
	<br><br><br>
	</div>
</body>

</html>