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
			<div class="col-xs-3"><a href=""><i class="fa fa-plus-square fa-lg"></i> Tambah Produk</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div id="sep">&nbsp;</div>
	<table id="productTable" class="display hover cell-border" width="100%">
		<thead>
			<tr>
				<td>Colom 1</td>
				<td>Colom 2</td>
				<td>Colom 3</td>
				<td>Colom 4</td>
				<td>Colom 5</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>col 1</td>
				<td>col 2</td>
				<td>col 3</td>
				<td>col 4</td>
				<td>col 5</td>
			</tr>
		</tbody>
	</table>
	
</div>