<script type="text/javascript">
	$('#report').addClass('active_main');
	$('#reseller_conf').addClass('active');
	$(document).ready(function () {
		$('#reseller_no_Table').DataTable();
	});
</script>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">DASHBOARD</h3>
			<h5 style="text-align: center; font-size: 20px;">List Reseller</h5>
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<table id="reseller_no_Table" class="display cell-border" cellspacing="0" width="100%" data-click-to-select="true" data-single-select="true">
		<thead>
			<tr>
				<th>Id Reseller</th>
				<th>Nama Reseller</th>
				<th>Kota Reseller</th>
				<th>Provinsi Reseller</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($reseller_conf->result() as $row)
            {
            ?>
            <tr>
            	<td>
					<?php echo $row->reseller_id;?>
				</td>
				<td>
					<?php echo $row->reseller_uname;?>
				</td>
				<td>
					<?php echo $row->reseller_kota;?>
				</td>
				<td>
					<?php echo $row->reseller_provinsi;?>
				</td>
				<td>
					<a href="<?php echo 'detail_reseller_conf?id=' .$row->reseller_id; ?>"><span class="glyphicon glyphicon-user"></span> Detail </a> |
					<a href="<?php echo 'deleteResellerConf?id=' .$row->reseller_id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
</div>
