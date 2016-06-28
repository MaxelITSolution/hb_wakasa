<script type="text/javascript">
	$('#setting').addClass('active_main');	
	$('#banner').addClass('active');
	$(document).ready(function () {
		$('#bannerTable').DataTable();
	});
</script>

<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">BANNER</h3>
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<br/>
	<table id="bannerTable" class="display cell-border" cellspacing="0" width="100%" data-click-to-select="true" data-single-select="true">
		<thead>
			<tr>
				<th>Page</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Home</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_home"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Tentang Wakasa</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_tentang"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Temukan Wakasa</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_temukan"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Kontak Wakasa</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_kontak"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Jelajah Produk</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_produk"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Cari General</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_general"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Reseller</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_reseller"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Karir</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_karir"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
			<tr>
				<td>Setelah Login</td>
				<td><a href="<?php echo base_url(); ?>Backend/detail_banner_login"><span class="glyphicon glyphicon-user"></span> Detail </a></td>
			</tr>
		</tbody>
	</table>
</div>