<script type="text/javascript">
	$('#master').addClass('active_main');	
	$('#product_unggulan').addClass('active');
	$(document).ready(function () {
		$('#listTable').DataTable();
		$('#btn_change1').click(function(){
			document.getElementById("for_kode").value="1";
		});
		$('#btn_change2').click(function(){
			document.getElementById("for_kode").value="2";
		});
		$('#btn_change3').click(function(){
			document.getElementById("for_kode").value="3";
		});
		$('#btn_change4').click(function(){
			document.getElementById("for_kode").value="4";
		});
		$('#btn_change5').click(function(){
			document.getElementById("for_kode").value="5";
		});
		$('#btn_change6').click(function(){
			document.getElementById("for_kode").value="6";
		});
		$('#btn_change7').click(function(){
			document.getElementById("for_kode").value="7";
		});
		$('#btn_change8').click(function(){
			document.getElementById("for_kode").value="8";
		});
		$('#btn_change9').click(function(){
			document.getElementById("for_kode").value="9";
		});
		$('#btn_change10').click(function(){
			document.getElementById("for_kode").value="10";
		});
	});
	function selectProduct()
    {
        var table = $('#listTable').DataTable();
        $('#listTable tbody').on( 'click', 'p', function () {
    		var qwe = document.getElementById('for_kode').value;
            var data = table.row( $(this).parents('tr') ).data();
            if (qwe==1){
            	document.getElementById('kd1').value=data[0];
            	document.getElementById('name1').value=data[1];
            }
            if (qwe==2){
            	document.getElementById('kd2').value=data[0];
            	document.getElementById('name2').value=data[1];
            }
            if (qwe==3){
            	document.getElementById('kd3').value=data[0];
            	document.getElementById('name3').value=data[1];
            }
            if (qwe==4){
            	document.getElementById('kd4').value=data[0];
            	document.getElementById('name4').value=data[1];
            }
            if (qwe==5){
            	document.getElementById('kd5').value=data[0];
            	document.getElementById('name5').value=data[1];
            }
            if (qwe==6){
            	document.getElementById('kd6').value=data[0];
            	document.getElementById('name6').value=data[1];
            }
            if (qwe==7){
            	document.getElementById('kd7').value=data[0];
            	document.getElementById('name7').value=data[1];
            }
            if (qwe==8){
            	document.getElementById('kd8').value=data[0];
            	document.getElementById('name8').value=data[1];
            }
            if (qwe==9){
            	document.getElementById('kd9').value=data[0];
            	document.getElementById('name9').value=data[1];
            }
            if (qwe==10){
            	document.getElementById('kd10').value=data[0];
            	document.getElementById('name10').value=data[1];
            }
        } );
    }
</script>
<style type="text/css">
	table#contentTable tbody td div{
		height:20px;
		overflow:hidden;
		word-wrap:break-word; 
	}
</style>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">PRODUK UNGGULAN</h3>
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<form class="form-inline" id="unggulan" action="update_product_unggulan" method="post">
	<?php $ung = array(); $ung_idx=0; $kd = array(); ?>
	<?php 
		foreach ($unggulan->result() as $row) {
			$ung[$ung_idx] = $row->product_name_eng;
			$kd[$ung_idx] = $row->product_id;
			$ung_idx = $ung_idx+1;
		} 
    ?>
		<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd1" name="kd1" placeholder="" value="<?php echo $kd[0]; ?>">
		    <input type="text" class="form-control inp_box_" id="name1" name="name1" placeholder="" value="<?php echo $ung[0]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change1" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd2" name="kd2" placeholder="" value="<?php echo $kd[1]; ?>">
		    <input type="text" class="form-control inp_box_" id="name2" name="name2" placeholder="" value="<?php echo $ung[1]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change2" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd3" name="kd3" placeholder="" value="<?php echo $kd[2]; ?>">
		    <input type="text" class="form-control inp_box_" id="name3" name="name3" placeholder="" value="<?php echo $ung[2]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change3" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd4" name="kd4" placeholder="" value="<?php echo $kd[3]; ?>">
		    <input type="text" class="form-control inp_box_" id="name4" name="name4" placeholder="" value="<?php echo $ung[3]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change4" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd5" name="kd5" placeholder="" value="<?php echo $kd[4]; ?>">
		    <input type="text" class="form-control inp_box_" id="name5" name="name5" placeholder="" value="<?php echo $ung[4]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change5" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd6" name="kd6" placeholder="" value="<?php echo $kd[5]; ?>">
		    <input type="text" class="form-control inp_box_" id="name6" name="name6" placeholder="" value="<?php echo $ung[5]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change6" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd7" name="kd7" placeholder="" value="<?php echo $kd[6]; ?>">
		    <input type="text" class="form-control inp_box_" id="name7" name="name7" placeholder="" value="<?php echo $ung[6]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change7" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd8" name="kd8" placeholder="" value="<?php echo $kd[7]; ?>">
		    <input type="text" class="form-control inp_box_" id="name8" name="name8" placeholder="" value="<?php echo $ung[7]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change8" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd9" name="kd9" placeholder="" value="<?php echo $kd[8]; ?>">
		    <input type="text" class="form-control inp_box_" id="name9" name="name9" placeholder="" value="<?php echo $ung[8]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change9" data-toggle="modal" data-target="#m_list">Ubah</button>

	  	<div class="form-group">
		    <label for="name">Name : </label>
		    <input type="hidden" class="form-control inp_box_" id="kd10" name="kd10" placeholder="" value="<?php echo $kd[9]; ?>">
		    <input type="text" class="form-control inp_box_" id="name10" name="name10" placeholder="" value="<?php echo $ung[9]; ?>">
	  	</div>
	  	<button type="button" class="btn btn-default btn_change_unggulan" id="btn_change10" data-toggle="modal" data-target="#m_list">Ubah</button>

    	<button type="submit" class="btn btn-default" id="btn_save_unggulan">Save</button>
    </form>

<!-- Modal -->
<div class="modal fade" id="m_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">List Produk</h4>
      </div>
      <div class="modal-body">
      	<input type="text" id="for_kode" value="" />
        <table id="listTable" class="display cell-border" cellspacing="0" width="100%" data-click-to-select="true" data-single-select="true">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama Indonesia</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($all_product->result() as $row)  
            {  
            ?>
            <tr>
            	<td>
					<?php echo $row->product_id;?>
				</td>
				<td>
					<?php echo $row->product_name_ina;?>
				</td>
				<td>
	            	<p onclick="selectProduct()"><button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> Pilih</button></p>
	            </td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	<div class="row"></div>
</div>