<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#product').addClass('active');
	$(document).ready(function () {
		$('#productTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>PRODUK</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="add_product"><i class="fa fa-plus-square fa-lg"></i> Tambah Produk</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div id="sep">&nbsp;</div>
	<table id="productTable" class="display hover cell-border" width="100%">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Nama</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>col 1</td>
				<td>col 2</td>
				<td>col 3</td>
				<td>
					<a href="detail_update_product"><span class="glyphicon glyphicon-user"></span> Detail </a> |
					<a href=""><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
			</tr>
		</tbody>
	</table>
	
</div>