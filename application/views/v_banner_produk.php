<div class="banner">
	<?php foreach ($banner_produk->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<h3><?php echo $lang_array[71]; ?></h3>

	<!-- action="<?php echo base_url(); ?>Frontend/new_sp"-->
	<form class="form-inline" action="<?php echo base_url(); ?>cekS" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
	    	<input type="text" id="txt_make" name="txt_make" value="">
			<input type="text" id="txt_model" name="txt_model" value="">
		</div>

	  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>

	  	<!--<input type="hidden" id="search_input1" name="search_input1" placeholder="Masukkan kata kunci">

		onchange="setMake();"
	  	-->

	  	<div class="row"></div>

		<select class="selectpicker" id="make_select" name="make_select">
			<option value="">By Make</option>
			<?php foreach ($make->result() as $row) { ?>
	         	<option value="<?=$row->make;?>"><?=$row->make;?></option>
	        <?php } ?>
		</select>

    <select class="selectpicker model_select" id="model_select" name="model_select" onchange="setModel();">
      <option value="">By Model</option>
          <?php foreach ($models->result() as $row) { ?>
             <option class="<?=$row->make;?>" value="<?=$row->model;?>"><?=$row->model;?></option>
          <?php } ?>
    </select>

    <?php 
      foreach ($models->result() as $row) {
        $arr_make[$row->make] = "1"; 
      } 
      foreach ($arr_make as $key => $m) {
        ?>
          <select class="selectpicker model_select <?php echo $key?>" id="model_select" name="model_select" onchange="setModel();" style="display:none">
            <?php foreach ($models->result() as $row) { ?>
              <?php if ($row->make == $key) { ?>
                <option value="<?=$row->model;?>"><?=$row->model;?></option>
              <?php } ?>
            <?php } ?>
          </select>          
        <?php
      }
      
    ?>
        
	</form>

	<script type="text/javascript">

    var list_model = [];
    var ctr = 0;
    <?php $ctr = 0; ?>
    
		//CODING UNTUK FILTER YANG INI
		$('#make_select').on('change', function(){
			setMake();
			//DISPLAY ALL
      var optVal= $("#make_select").val();
      
      $('.model_select').hide();
			$('.model_select').prop( "disabled", true );
      $('.model_select.'+optVal).show();
      $('.model_select.'+optVal).prop( "disabled", false );

    
			//DISPLAY BY MAKE
//      var optVal= $("#make_select option:selected").val();
//  		var optVal= $("#make_select").val();
//			$('#model_select').find('option').each(function() {
//				if ($(this).attr('class') != optVal){
//					$(this).hide();
//				}
//			});
		});



		/*var field = document.getElementById('make_select');
		var operator = document.getElementById('model_select');
		field.onchange = function () { fieldcheck(); }
		function fieldcheck() {
			var getMake = document.getElementById('make_select').value;
			var getMake = getMake.replace(/'/g, "\\'");
			document.getElementById('txt_make').value = getMake;
			for (i = 0; i < operator.options.length; i++) {
				operator.options[i].style.display = "block";
	        };
			var get_mk = document.getElementById('make_select').value;
			for (i = 0; i < operator.options.length; i++) {
	            if (operator.options[i].className != get_mk) {
	                operator.options[i].style.display = "none";
	            }
	        };
		}*/
		function setMake(){
//			var getMake = document.getElementById('make_select').value;
      var getMake = $('#make_select').val();
			var getMake = getMake.replace(/'/g, "\\'");
//      document.getElementById('txt_make').value = getMake;
			$('#txt_make').val(getMake);
		}
		function setModel(){
//      var getModel = document.getElementById('model_select').value;
			var getModel = $('#model_select').val();
			var getModel = getModel.replace(/'/g, "\\'");
//      document.getElementById('txt_model').value = getModel;
			$('#txt_model').val(getModel);
		}

	</script>

</div>