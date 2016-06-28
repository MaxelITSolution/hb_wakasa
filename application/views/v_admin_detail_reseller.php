<script type="text/javascript">
	$('#dashboard').addClass('active_main');
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>DETAIL RESELLER</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="dashboard"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<br/>
	<form class="form-horizontal" action="conf_reseller" method="post">
		<?php foreach ($reseller->result() as $row)  
        {  
        ?>
		<div class="col-sm-6" id="left_content">
			<input type="hidden" class="input_box" id="reseller_id" name="reseller_id" placeholder="Id ... " value="<?php echo $row->reseller_id; ?>" required>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-3 control-label">User Name : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_username" name="reseller_username" placeholder="User Name ... " value="<?php echo $row->reseller_uname; ?>" required>
			    </div>
		 	</div>
		 	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Kota : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_kota" name="reseller_kota" placeholder="Kota ... " value="<?php echo $row->reseller_kota; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Provinsi : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_provinsi" name="reseller_provinsi" placeholder="Provinsi ... " value="<?php echo $row->reseller_provinsi; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">No. Telp. Toko : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_phone_toko" name="reseller_phone_toko" placeholder="No. Telp. Toko ... " value="<?php echo $row->reseller_phone_toko; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Email : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_email" name="reseller_email" placeholder="Email ... " value="<?php echo $row->reseller_email; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Pernah Beli : </label>
			    <div class="col-sm-9">
			    <?php 
			    	$bb = $row->reseller_buy_before;
			    	if ($bb=="n"){ ?>
			    		<input type="text" class="input_box" id="reseller_buy" name="reseller_buy" placeholder="pernah Membeli ... " value="Tidak Pernah" required>
			    	<?php } else { ?>
			    		<input type="text" class="input_box" id="reseller_buy" name="reseller_buy" placeholder="pernah Membeli ... " value="Pernah" required>
			    	<?php }
			    ?>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Tanggal Daftar : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_reg_date" name="reseller_reg_date" placeholder="Tanggal Daftar ... " value="<?php echo $row->reseller_reg_date; ?>" required>
			    </div>
		  	</div>
		</div>


		<div class="col-sm-6" id="right_content">
			<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Nama Toko : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_nama_toko" name="reseller_nama_toko" placeholder="Nama Toko ... " value="<?php echo $row->reseller_nama_toko; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Alamat Toko : </label>
			    <div class="col-sm-9">
			    	<textarea rows="3" class="textarea_box" id="reseller_alamat_toko" name="reseller_alamat_toko" placeholder="Alamat Toko ... " required><?php echo $row->reseller_alamat_toko; ?></textarea>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">No. Telp. User : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_uphone" name="reseller_uphone" placeholder="No. Telp. User ... " value="<?php echo $row->reseller_phone_hand; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Berdiri Sejak : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_since" name="reseller_since" placeholder="Toko Berdiri Sejak ... " value="<?php echo $row->reseller_since; ?>" required>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Tahu Dari : </label>
			    <div class="col-sm-9">
			    <?php 
			    	$kw = $row->reseller_know_wakasa;
			    	if ($kw=="1"){ ?>
				    	<input type="text" class="input_box" id="reseller_know" name="reseller_know" placeholder="Mengetahui Dari ... " value="Teman / Rekan" required>
			    	<?php } else if ($kw=="2"){?>
			    		<input type="text" class="input_box" id="reseller_know" name="reseller_know" placeholder="Mengetahui Dari ... " value="Internet" required>
			    	<?php } else if ($kw=="3"){ ?>
			    		<input type="text" class="input_box" id="reseller_know" name="reseller_know" placeholder="Mengetahui Dari ... " value="Salesman" required>
			    	<?php } else{?>
			    		<input type="text" class="input_box" id="reseller_know" name="reseller_know" placeholder="Mengetahui Dari ... " value="<?php echo $row->reseller_know_wakasa; ?>" required>
			    	<?php }
			    ?>
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label for="inputPassword3" class="col-sm-3 control-label">Jam Daftar : </label>
			    <div class="col-sm-9">
			      <input type="text" class="input_box" id="reseller_reg_time" name="reseller_reg_time" placeholder="Jam Daftar ... " value="<?php echo $row->reseller_reg_time; ?>" required>
			    </div>
		  	</div>
		  	<button type="submit" class="btn btn-default pull-right" id="btn_save_administrator">Konfirmasi</button>
		</div>
		<?php } ?>


		<?php foreach ($email->result() as $row) { ?>
			<input type="hidden" name="email_address" value="<?php echo $row->admin_email_address; ?>" />
			<input type="password" name="email_password" value="<?php echo $row->admin_email_password; ?>" hidden />
			<input type="hidden" name="email_name" value="<?php echo $row->admin_email_Name; ?>" />
			<input type="hidden" name="email_subject" value="<?php echo $row->admin_email_subject; ?>" />
			<input type="hidden" name="email_message" value="<?php echo $row->admin_email_message; ?>" />
        <?php } ?>


	</form>
</div>