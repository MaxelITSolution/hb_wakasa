<script type="text/javascript">
	
	$(document).ready(function () {
		$('#productTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>PRODUK</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href=<?php echo site_url("Backend/add_product")?>><i class="fa fa-plus-square fa-lg"></i> Tambah Produk</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div id="sep">&nbsp;</div>
	<table id="productTable" class="display hover cell-border" width="100%">
		<thead>
			<tr>
				<td>Id</td>
				<td>Nama</td>
				<td>No. Asli</td>
				<td>Make</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->id;?>
				</td>
				<td>
					<?php echo $row->nama;?>
				</td>
				<td>
					<?php echo $row->nomor_asli;?>
				</td>
				<td>
					<?php echo $row->make;?>
				</td>
				<td>
					<a href="<?php echo 'detail_update_products?id=' .$row->id; ?>"><span class="glyphicon glyphicon-user"></span> Detail </a> | 
					<a href="<?php echo 'delete_products?id=' .$row->id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
	
</div>