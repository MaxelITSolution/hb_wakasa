<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	public function index(){
		$this->load->view('link');
		$this->load->view('v_admin_login');
	}

	/*public function setWatermark(){
		// Images folder, must end with slash.
		$images_folder = 'asset/image/products/';

		// Save watermarked images to this folder, must end with slash.
		$destination_folder = 'asset/image/products_water/';

		// Path to the watermark image (apply this image as waretmark)
		$watermark_path = 'asset/image/qwe.png';

		// MOST LIKELY YOU WILL NOT NEED TO CHANGE CODE BELOW

		// Load functions for image watermarking
		include("asset/watermark_image.class.php");

		// Watermark all the "jpg" files from images folder
		// and save watermarked images into destination folder
		foreach (glob($images_folder."*.jpg") as $filename) {

		  // Image path
		  $image_path = $filename;

		  // Where to save watermarked image
		  $imgdestpath = $destination_folder . basename($filename);

		  // Watermark image
		  $img = new Zubrag_watermark($image_path);
		  $img->ApplyWatermark($watermark_path);
		  $img->SaveAsFile($imgdestpath);
		  $img->Free();

		}
	}*/
	
	public function dashboard(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "reseller_no_active";
		$data["data_reseller_no_active"] = $this->M_backend->load($table);
        $this->load->view('v_admin_dashboard', $data);
		$this->load->view('v_sidebar_foot');
	}
	
	public function detail_reseller(){
		$this->load->database();
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$this->load->model('M_backend');
		$id =  $this->input->get('id');
		$table = "reseller";
		$data["reseller"] = $this->M_backend->load_du($table, $id);
		$data['email'] = $this->M_backend->get_admin_mail();
        $this->load->view('v_admin_detail_reseller', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function conf_reseller(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['reseller_isactive'] = 1;
		$id =  $this->input->post('reseller_id');
		$table = "conf_reseller";
		$this->M_backend->update($table, $data, $id);
		$this->send_email($id);
		redirect('backend/dashboard');
	}

	public function send_email(){
		require 'asset/PHPMailer/PHPMailerAutoload.php';

		$amail = $this->input->post('email_address');
		$apass = $this->input->post('email_password');
		$aname = $this->input->post('email_name');
		$asub = $this->input->post('email_subject');
		$ames = $this->input->post('email_message');

		$user_mail = $this->input->post('reseller_email');
		$user_name = $this->input->post('reseller_username');

		$mail = new PHPMailer;            

		//$mail->isSMTP();                                      
		$mail->Host = 'smtp.gmail.com;smtp.mail.yahoo.com';  
		$mail->SMTPAuth = true;                               
		$mail->Username = $amail;               
		$mail->Password = $apass;                       
		$mail->SMTPSecure = 'tls';                       
		$mail->Port = 587;                                  

		$mail->setFrom($amail, $aname);
		$mail->addAddress($user_mail, $user_name);     

		$mail->addAttachment('/var/tmp/file.tar.gz');        
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  
		$mail->isHTML(true);                                

		$mail->Subject = $asub;
		$mail->Body    = $ames;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    
		}
	}

	public function product(){
		$this->load->database();
		$this->load->model('M_product');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "products";
		$data["products"] = $this->M_product->load($table);
        $this->load->view('v_admin_master_product', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function add_product(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_add_product');
		$this->load->view('v_sidebar_foot');	
	}

	public function add_new_product(){
		$this->load->database();
		$this->load->model('M_product');

		$kd_product = "PRO".date("dmYHis");
		$url_img = "./asset/image/products/";

		$fileName = $_FILES["upimageproduct"]["name"]; // The file name
		$fileTmpLoc = $_FILES["upimageproduct"]["tmp_name"]; // File in the PHP tmp folder
		$fileType = $_FILES["upimageproduct"]["type"]; // The type of file it is
		$fileSize = $_FILES["upimageproduct"]["size"]; // File size in bytes
		$fileErrorMsg = $_FILES["upimageproduct"]["error"]; // 0 for false... and 1 for true
		$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); // filter
		$kaboom = explode(".", $fileName); // Split file name into an array using the dot
		$fileExt = end($kaboom); // Now target the last array element to get the file extension

		// START PHP Image Upload Error Handling -------------------------------
		if (!$fileTmpLoc) { // if file not chosen
		    echo "ERROR: Please browse for a file before clicking the upload button.";
		    exit();
		} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
		    echo "ERROR: Your file was larger than 5 Megabytes in size.";
		    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
		    exit();
		} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
		     // This condition is only if you wish to allow uploading of specific file types    
		     echo "ERROR: Your image was not .gif, .jpg, or .png.";
		     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
		     exit();
		} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
		    echo "ERROR: An error occured while processing the file. Try again.";
		    exit();
		}
		// END PHP Image Upload Error Handling ---------------------------------
		// Place it into your "uploads" folder mow using the move_uploaded_file() function
		$moveResult = move_uploaded_file($fileTmpLoc, "asset/image/products_ori/$fileName");
		// Check to make sure the move result is true before continuing
		if ($moveResult != true) {
		    echo "ERROR: File not uploaded. Try again.";
		    exit();
		}
		// Include the file that houses all of our custom image functions
		include_once("asset/ak_php_img_lib_1.0.php");
		// ---------- Start Universal Image Resizing Function --------
		$target_file = "asset/image/products_ori/$fileName";
		$resized_file = "asset/image/products_ori/resized_$fileName";
		$wmax = 500;
		$hmax = 500;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
		// ----------- End Universal Image Resizing Function ----------
		// ---------- Start Convert to JPG Function --------
		if (strtolower($fileExt) != "jpg") {
		    $target_file = "asset/image/products_ori/resized_$fileName";
		    $new_jpg = "asset/image/products_ori/resized_".$kaboom[0].".jpg";
		    ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
		}
		// ----------- End Convert to JPG Function -----------
		// ---------- Start Image Watermark Function --------
		$target_file = "asset/image/products_ori/resized_".$kaboom[0].".jpg";
		$wtrmrk_file = "asset/image/wakasa_watermark.png";
		$new_file = "asset/image/products/protected_".$kaboom[0].".jpg";
		ak_img_watermark($target_file, $wtrmrk_file, $new_file);

		unlink('asset/image/products_ori/'.$kaboom[0].'.'.$kaboom[1]);
		//unlink('asset/image/products_ori/resized_'.$kaboom[0].'.'.$kaboom[1]);
		rename("asset/image/products_ori/resized_".$kaboom[0].'.'.$kaboom[1], "asset/image/products_ori/".$kd_product.'.'.$kaboom[1]);
		rename("asset/image/products/protected_".$kaboom[0].'.'.$kaboom[1], "asset/image/products/".$kd_product.'.'.$kaboom[1]);

		$data['id_jenis_barang'] = $this->input->post('id_jenis_barang');
		$data['id_kendaraan'] = $this->input->post('id_kendaraan');
		$data['id_varian'] = $this->input->post('id_varian');

		$data['nomor_asli'] = $this->input->post('no_asli');
		$data['nama'] = $this->input->post('nama_barang');
		$data['remarks'] = $this->input->post('remarks');

		$data['make'] = $this->input->post('make_barang');
		$data['model1'] = $this->input->post('model1_barang');
		$data['model2'] = $this->input->post('model2_barang');
		
		$data['harga'] = $this->input->post('harga_barang');
		$data['updated'] = $this->input->post('updated');
		$data['kemasan'] = $this->input->post('kemasan');
		$data['desc'] = $this->input->post('deskripsi');

		$data['image'] = $kd_product.'.'.$kaboom[1];

		$data['is_active'] = 1;
		$table = "product";
		$this->M_product->insert($table, $data);

		redirect('Backend/product');

		// ----------- End Image Watermark Function -----------
		// Display things to the page so you can see what is happening for testing purposes
		//echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
		//echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
		//echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
		//echo "The file extension is <strong>$fileExt</strong><br /><br />";
		//echo "The Error Message output for this upload is: $fileErrorMsg";
	}

	/*public function add_new_product(){
		$this->load->database();
		$this->load->model('M_product');

		$kd_product = "PRO".date("dmYHis");
		$url_img = "./asset/image/products/";
		
		$data['id_jenis_barang'] = $this->input->post('id_jenis_barang');
		$data['id_kendaraan'] = $this->input->post('id_kendaraan');
		$data['id_varian'] = $this->input->post('id_varian');

		$data['nomor_asli'] = $this->input->post('no_asli');
		$data['nama'] = $this->input->post('nama_barang');
		$data['remarks'] = $this->input->post('remarks');

		$data['make'] = $this->input->post('make_barang');
		$data['model1'] = $this->input->post('model1_barang');
		$data['model2'] = $this->input->post('model2_barang');
		
		$data['harga'] = $this->input->post('harga_barang');
		$data['updated'] = $this->input->post('updated');
		$data['kemasan'] = $this->input->post('kemasan');
		$data['desc'] = $this->input->post('deskripsi');

		$data['image'] = $this->do_upload($kd_product, $url_img);

		$data['is_active'] = 1;
		$table = "product";
		$this->M_product->insert($table, $data);

		redirect('Backend/product');
	}*/

	public function do_upload($kd_product, $url_img){
		$type = explode('.', $_FILES["upimageproduct"]["name"]);
		$type = $type[count($type)-1];
		$url = $url_img.$kd_product.'.'.$type;
		$img_name = $kd_product.'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["upimageproduct"]["tmp_name"]))
				if(move_uploaded_file($_FILES["upimageproduct"]["tmp_name"], $url))
					return $img_name;
		return "no.png";
	}

	public function delete_products(){
		$this->load->database();
		$this->load->model('M_product');

		$id = $this->input->get('id');
		$table = "products";
		$data['is_active'] = 0;
		$this->M_product->delete($table, $id, $data);

		redirect('Backend/product');
	}

	public function detail_update_products(){
		$this->load->database();
		$this->load->model('M_product');

		$id = $this->input->get('id');
		$table = "product";
		$data['product'] = $this->M_product->load_du($table, $id);

		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_detail_update_product', $data);
		$this->load->view('v_sidebar_foot');		
	}

	public function update_product(){
		$this->load->database();
		$this->load->model('M_product');

		$kd_product = "PRO".date("dmYHis");
		$url_img = "./asset/image/products/";

		$fileName = $_FILES["upimageproduct"]["name"]; // The file name
		$fileTmpLoc = $_FILES["upimageproduct"]["tmp_name"]; // File in the PHP tmp folder
		$fileType = $_FILES["upimageproduct"]["type"]; // The type of file it is
		$fileSize = $_FILES["upimageproduct"]["size"]; // File size in bytes
		$fileErrorMsg = $_FILES["upimageproduct"]["error"]; // 0 for false... and 1 for true
		$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); // filter
		$kaboom = explode(".", $fileName); // Split file name into an array using the dot
		$fileExt = end($kaboom); // Now target the last array element to get the file extension

		// START PHP Image Upload Error Handling -------------------------------
		if (!$fileTmpLoc) { // if file not chosen
		    echo "ERROR: Please browse for a file before clicking the upload button.";
		    exit();
		} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
		    echo "ERROR: Your file was larger than 5 Megabytes in size.";
		    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
		    exit();
		} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
		     // This condition is only if you wish to allow uploading of specific file types    
		     echo "ERROR: Your image was not .gif, .jpg, or .png.";
		     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
		     exit();
		} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
		    echo "ERROR: An error occured while processing the file. Try again.";
		    exit();
		}
		// END PHP Image Upload Error Handling ---------------------------------
		// Place it into your "uploads" folder mow using the move_uploaded_file() function
		$moveResult = move_uploaded_file($fileTmpLoc, "asset/image/products_ori/$fileName");
		// Check to make sure the move result is true before continuing
		if ($moveResult != true) {
		    echo "ERROR: File not uploaded. Try again.";
		    exit();
		}
		// Include the file that houses all of our custom image functions
		include_once("asset/ak_php_img_lib_1.0.php");
		// ---------- Start Universal Image Resizing Function --------
		$target_file = "asset/image/products_ori/$fileName";
		$resized_file = "asset/image/products_ori/resized_$fileName";
		$wmax = 500;
		$hmax = 500;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
		// ----------- End Universal Image Resizing Function ----------
		// ---------- Start Convert to JPG Function --------
		if (strtolower($fileExt) != "jpg") {
		    $target_file = "asset/image/products_ori/resized_$fileName";
		    $new_jpg = "asset/image/products_ori/resized_".$kaboom[0].".jpg";
		    ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
		}
		// ----------- End Convert to JPG Function -----------
		// ---------- Start Image Watermark Function --------
		$target_file = "asset/image/products_ori/resized_".$kaboom[0].".jpg";
		$wtrmrk_file = "asset/image/wakasa_watermark.png";
		$new_file = "asset/image/products/protected_".$kaboom[0].".jpg";
		ak_img_watermark($target_file, $wtrmrk_file, $new_file);

		unlink('asset/image/else/'.$kaboom[0].'.'.$kaboom[1]);
		//unlink('asset/image/products_ori/resized_'.$kaboom[0].'.'.$kaboom[1]);
		
		rename("asset/image/products_ori/resized_".$kaboom[0].'.'.$kaboom[1], "asset/image/products_ori/".$kd_product.'.'.$kaboom[1]);
		rename("asset/image/products/protected_".$kaboom[0].'.'.$kaboom[1], "asset/image/products/".$kd_product.'.'.$kaboom[1]);

		$id = $this->input->post('id_product');
		$ganti = $this->input->post('new_url_image');
		$ganti_1 = $this->input->post('new_url_image_ori');

		$data['id_jenis_barang'] = $this->input->post('id_jenis_barang');
		$data['id_kendaraan'] = $this->input->post('id_kendaraan');
		$data['id_varian'] = $this->input->post('id_varian');

		$data['nomor_asli'] = $this->input->post('no_asli');
		$data['nama'] = $this->input->post('nama_barang');
		$data['remarks'] = $this->input->post('remarks');

		$data['make'] = $this->input->post('make_barang');
		$data['model1'] = $this->input->post('model1_barang');
		$data['model2'] = $this->input->post('model2_barang');
		
		$data['harga'] = $this->input->post('harga_barang');
		$data['updated'] = $this->input->post('updated');
		$data['kemasan'] = $this->input->post('kemasan');
		$data['desc'] = $this->input->post('deskripsi');

		if ($ganti!=""){
			unlink($ganti);
			unlink($ganti_1);
			$data['image'] = $kd_product.'.'.$kaboom[1];
		}

		$table = "product";
		$this->M_product->update($table, $id, $data);

		redirect('Backend/product');

	}

	/*public function update_product(){
		$this->load->database();
		$this->load->model('M_product');

		$kd_product = "PRO".date("dmYHis");
		$url_img = "./asset/image/products/";

		$id = $this->input->post('id_product');
		$ganti = $this->input->post('new_url_image');

		$data['id_jenis_barang'] = $this->input->post('id_jenis_barang');
		$data['id_kendaraan'] = $this->input->post('id_kendaraan');
		$data['id_varian'] = $this->input->post('id_varian');

		$data['nomor_asli'] = $this->input->post('no_asli');
		$data['nama'] = $this->input->post('nama_barang');
		$data['remarks'] = $this->input->post('remarks');

		$data['make'] = $this->input->post('make_barang');
		$data['model1'] = $this->input->post('model1_barang');
		$data['model2'] = $this->input->post('model2_barang');
		
		$data['harga'] = $this->input->post('harga_barang');
		$data['updated'] = $this->input->post('updated');
		$data['kemasan'] = $this->input->post('kemasan');
		$data['desc'] = $this->input->post('deskripsi');

		if ($ganti!=""){
			unlink($ganti);
			$data['image'] = $this->do_upload($kd_product, $url_img);
		}

		$table = "product";
		$this->M_product->update($table, $id, $data);

		redirect('Backend/product');

	}*/

	public function do_upload_banner($kd_banner, $url_img, $ke){
		if ($ke==1){
			$type = explode('.', $_FILES["banner_home_1"]["name"]);
			$type = $type[count($type)-1];
			$url = $url_img.$kd_banner.'.'.$type;
			$img_name = $kd_banner.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["banner_home_1"]["tmp_name"]))
					if(move_uploaded_file($_FILES["banner_home_1"]["tmp_name"], $url))
						return $img_name;
			return "";
		}
		if ($ke==2){
			$type = explode('.', $_FILES["banner_home_2"]["name"]);
			$type = $type[count($type)-1];
			$url = $url_img.$kd_banner.'.'.$type;
			$img_name = $kd_banner.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["banner_home_2"]["tmp_name"]))
					if(move_uploaded_file($_FILES["banner_home_2"]["tmp_name"], $url))
						return $img_name;
			return "";
		}
		if ($ke==3){
			$type = explode('.', $_FILES["banner_home_3"]["name"]);
			$type = $type[count($type)-1];
			$url = $url_img.$kd_banner.'.'.$type;
			$img_name = $kd_banner.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["banner_home_3"]["tmp_name"]))
					if(move_uploaded_file($_FILES["banner_home_3"]["tmp_name"], $url))
						return $img_name;
			return "";
		}
		if ($ke==4){
			$type = explode('.', $_FILES["banner_home_4"]["name"]);
			$type = $type[count($type)-1];
			$url = $url_img.$kd_banner.'.'.$type;
			$img_name = $kd_banner.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["banner_home_4"]["tmp_name"]))
					if(move_uploaded_file($_FILES["banner_home_4"]["tmp_name"], $url))
						return $img_name;
			return "";
		}
		if ($ke==5){
			$type = explode('.', $_FILES["banner_home_5"]["name"]);
			$type = $type[count($type)-1];
			$url = $url_img.$kd_banner.'.'.$type;
			$img_name = $kd_banner.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["banner_home_5"]["tmp_name"]))
					if(move_uploaded_file($_FILES["banner_home_5"]["tmp_name"], $url))
						return $img_name;
			return "";
		}
	}

	public function update_banner_home(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";

		$ganti1 = $this->input->post('img1');
		$ganti2 = $this->input->post('img2');
		$ganti3 = $this->input->post('img3');
		$ganti4 = $this->input->post('img4');
		$ganti5 = $this->input->post('img5');

		if ($ganti1!=""){
			$kd_banner = "BA1".date("dmYHis");
			unlink($ganti1);
			$ke=1;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "home1";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti2!=""){
			$kd_banner = "BA2".date("dmYHis");
			unlink($ganti2);
			$ke=2;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "home2";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti3!=""){
			$kd_banner = "BA3".date("dmYHis");
			unlink($ganti3);
			$ke=3;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "home3";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti4!=""){
			$kd_banner = "BA4".date("dmYHis");
			unlink($ganti4);
			$ke=4;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "home4";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti5!=""){
			$kd_banner = "BA5".date("dmYHis");
			unlink($ganti5);
			$ke=5;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "home5";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_home');
	}

//PUNYA KENT
	/*public function product(){
		$hasil = Array();
		$datum = $this->M_backend->getData("product",null);
		$hasil = Array();
		foreach($datum as $row)
		{
			Array_push($hasil,Array($row->product_id,$row->product_name_eng,"<a href='detail_update_product/".$row->product_id."'><span class='glyphicon glyphicon-user'></span> Detail </a> |
					<a id='Hapus' productID='".$row->product_id."' href='#'><span class='glyphicon glyphicon-trash'></span> Hapus</a>"));
		}
		$data["produk"] =json_encode($hasil);
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_master_product',$data);
		$this->load->view('v_sidebar_foot');
	}

	public function detail_update_product(){
		$index=  $this->uri->segment(3);
		$datum = $this->M_backend->getData("product",Array("product_id"=>$index));
		$data["detailNameEng"]=$datum[0]->product_name_eng;
		$data["detailNameIna"]=$datum[0]->product_name_ina;
		$data["detailDescEng"]=$datum[0]->product_desc_eng;
		$data["detailDescIna"]=$datum[0]->product_desc_ina;
		$data["detailPicture"]=$datum[0]->product_image;
		$data["detailMake"]=$datum[0]->product_make;
		$data["detailModel"]=$datum[0]->product_model;
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_detail_update_product');
		$this->load->view('v_sidebar_foot');		
	}*/
	
	public function administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "administrator";
		$data["administrator"] = $this->M_backend->load($table);
        $this->load->view('v_admin_master_administrator', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function add_administrator(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_add_administrator');
		$this->load->view('v_sidebar_foot');	
	}

	public function new_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		date_default_timezone_set("Asia/Jakarta");
		$data['admin_id'] = "ADM".date("dmYHis");
		$data['admin_uname'] = $this->input->post('admin_uname');
		$data['admin_email'] = $this->input->post('admin_mail');
		$data['admin_phone'] = $this->input->post('admin_phone');
		$data['admin_address'] = $this->input->post('admin_address');
		$admin_pass = $this->input->post('admin_password');
		$admin_pass_ = md5($admin_pass);
		$data['admin_password'] = $admin_pass_;
		$data['admin_create_date'] = date("Y/m/d");
		$data['admin_create_time'] = date("h:i:sa");
		$data['admin_isactive'] = 1;
		$table = "new_administrator";
		$this->M_backend->insert($table, $data);

		$this->administrator();
	}

	public function detail_update_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$id =  $this->input->get('id');
		$table = "administrator";
		$data["administrator"] = $this->M_backend->load_du($table, $id);
        $this->load->view('v_admin_detail_update_administrator', $data);
		$this->load->view('v_sidebar_foot');		
	}

	public function update_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['admin_uname'] = $this->input->post('admin_uname');
		$data['admin_email'] = $this->input->post('admin_mail');
		$data['admin_phone'] = $this->input->post('admin_phone');
		$data['admin_address'] = $this->input->post('admin_address');
		$id =  $this->input->post('admin_id');
		$table = "administrator";
		$this->M_backend->update($table, $data, $id);

		redirect('Backend/administrator');
	}

	public function delete_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$id =  $this->input->get('id');
		$data['admin_isactive'] = 0;
		$table = "administrator";
		$this->M_backend->delete($table, $data, $id);

		redirect('Backend/administrator');
	}
	
	public function login(){
		$this->load->database();
		$this->load->model('M_backend');
		$umail = $this->input->post('admin_mail');
		$upass = $this->input->post('admin_password');
		$pass = md5($upass);
		$result = $this->M_backend->login($umail, $pass);
		if($result)
		{
			$this->dashboard();
		}
		else
		{
			echo '<script type="text/javascript">alert("Login Gagal! Pastikan Username dan Password Benar");</script>';
			$this->logout();
		}	
	}

	public function login_user(){
		$this->load->database();
		$this->load->model('M_backend');
		$umail = $this->input->post('email_login');
		$upass = $this->input->post('password_login');
		$pass = md5($upass);
		$result = $this->M_backend->login_user($umail, $pass);
		if($result)
		{
			$this->session->set_userdata('user_login', 'yes');
			redirect('login');
		}
		else
		{
			$this->session->set_userdata('user_name', 'nn');
			$this->session->set_userdata('user_login', 'no');
			echo '<script type="text/javascript">alert("Login Gagal! Pastikan Username dan Password Benar");</script>';
			echo "<script>window.location.href='javascript:history.back(-2);'</script>";
		}	
	}

	public function user_register(){
		$this->load->database();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('M_backend');
		$ureg_id = "RES".date("dmYHis");
		$uname = $this->input->post('uname_reg');
		$upass = $this->input->post('upass_reg');
		$upass_conf = $this->input->post('upass_conf_reg');
		$ufname = $this->input->post('uname_full_reg');
		$store_name = $this->input->post('nama_toko_reg');
		$store_address = $this->input->post('alamat_toko_reg');
		$store_city = $this->input->post('kota_reg');
		$store_provice = $this->input->post('provinsi_reg');
		$store_phone = $this->input->post('phone_reg');
		$uphone = $this->input->post('handphone_reg');
		$umail = $this->input->post('email_reg');
		$uknow_stat = $this->input->post('opt1');
		$u_buy_before = $this->input->post('opt_yn');
		$usince = $this->input->post('time_reg');
		$uknow_lain = $this->input->post('lainnya_reg');
		$showMe = $this->input->post('ckBox');
		$ureg_date = date("Y/m/d");
		$ureg_time = date("h:i:sa");
		$uisactive = 0;

		/*CEK PASSWORD DAN KONFORM SAMA*/
		if ($upass == $upass_conf){
			$data['reseller_id'] = $ureg_id;
			$data['reseller_username'] = $uname;
			$data['reseller_password'] = md5($upass);
			$data['reseller_uname'] = $ufname;
			$data['reseller_nama_toko'] = $store_name;
			$data['reseller_alamat_toko'] = $store_address;
			$data['reseller_kota'] = $store_city;
			$data['reseller_provinsi'] = $store_provice;
			$data['reseller_phone_toko'] = $store_phone;
			$data['reseller_phone_hand'] = $uphone;
			$data['reseller_email'] = $umail;
			if ($uknow_stat=='4'){
				$data['reseller_know_wakasa'] = $uknow_lain;
			}else{
				$data['reseller_know_wakasa'] = $uknow_stat;
			}
			if ($showMe=='1'){
				$data['reseller_is_show'] = '1';
			} else {
				$data['reseller_is_show'] = '0';
			}
			$data['reseller_buy_before'] = $u_buy_before;
			$data['reseller_since'] = $usince;
			$data['reseller_reg_date'] = $ureg_date;
			$data['reseller_reg_time'] =$ureg_time;
			$data['reseller_isactive'] =  $uisactive;
			$table = "new_reseller";
			$this->M_backend->insert($table, $data);
			$this->session->set_userdata('user_register', 'yes');
			redirect('menjadireseller');	
		} else {
			redirect('menjadireseller');	
		}

	}
	
	public function logout(){
		redirect('../backend');
	}
	
	public function DeleteData()
	{
		$temp = $this->input->post("productID");
		$this->M_backend->DeleteData("product",Array("product_id"=>$temp));
		
		$hasil = Array();
		$datum = $this->M_backend->getData("product",null);
		$hasil = Array();
		foreach($datum as $row)
		{
			Array_push($hasil,Array($row->product_id,$row->product_name_eng,"<a href='detail_update_product/".$row->product_id."'><span class='glyphicon glyphicon-user'></span> Detail </a> |
					<a id='Hapus' productID='".$row->product_id."' href='#'><span class='glyphicon glyphicon-trash'></span> Hapus</a>"));
		}
		$data["produk"] =json_encode($hasil);
		echo $data["produk"];
	}
	
	/*function do_upload()//Upload Gambar Ke folder 
	{
		$url = $this->input->post("url");
		$detailnameINA = $this->input->post("product_name_ina");
		$detailnameENG = $this->input->post("product_name_eng");
		
		$detailINA = $this->input->post("product_desc_ina");
		$detailENG = $this->input->post("product_desc_eng");
		
		//print($detailINA);print($detailnameINA);print($detailENG);print($detailnameENG);
		
		$detailMake = $this->input->post("product_make");
		$detailModel = $this->input->post("product_model");
		
		$config['upload_path'] ="asset/image/Upload";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->M_backend->updateData("product",Array("product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_make"=>$detailMake,"product_model"=>$detailModel),Array("product_id"=>$url));
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//print_r($data["upload_data"]["file_name"]);
			$this->M_backend->updateData("product",Array("product_image"=>$data["upload_data"]["file_name"],"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_make"=>$detailMake,"product_model"=>$detailModel),Array("product_id"=>$url));
		}
		$index = $url;
		$datum = $this->M_backend->getData("product",Array("product_id"=>$index));
		$data["detailNameEng"]=$datum[0]->product_name_eng;
		$data["detailNameIna"]=$datum[0]->product_name_ina;
		$data["detailDescEng"]=$datum[0]->product_desc_eng;
		$data["detailDescIna"]=$datum[0]->product_desc_ina;
		$data["detailPicture"]=$datum[0]->product_image;
		$data["detailMake"]=$datum[0]->product_make;
		$data["detailModel"]=$datum[0]->product_model;
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_detail_update_product',$data);
		$this->load->view('v_sidebar_foot');		
	}
	function do_uploadAddProduct()
	{
		$detailnameINA = $this->input->post("product_name_ina");
		$detailnameENG = $this->input->post("product_name_eng");
		
		$detailINA = $this->input->post("product_desc_ina");
		$detailENG = $this->input->post("product_desc_eng");
		
		$detailMake = $this->input->post("product_make");
		$detailModel = $this->input->post("product_model");

		$isactive = 1;

		$product_id = "PRD".date("dmYHis");
		
		$config['upload_path'] ="asset/image/Upload";
		$config['allowed_types'] = 'gif|jpg|png|PNG';
		$config['max_size']	= '100000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$config['file_name'] = $product_id;
		
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
		    $date = $this->M_backend->getDate1()->result()[0]->tanggal;
			$time =  $this->M_backend->getTime()->result()[0]->time;
			$this->M_backend->insertData("product",Array("product_id"=>$product_id,"product_make"=>$detailMake,"product_model"=>$detailModel,"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_create_date"=>$date,"product_create_time"=>$time,"product_isactive"=>$isactive));
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		    $date = $this->M_backend->getDate1()->result()[0]->tanggal;
			$time =  $this->M_backend->getTime()->result()[0]->time;
			$this->M_backend->insertData("product",Array("product_id"=>$product_id,"product_make"=>$detailMake,"product_model"=>$detailModel,"product_image"=>$data["upload_data"]["file_name"],"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_create_date"=>$date,"product_create_time"=>$time,"product_isactive"=>$isactive));
			
		}
		redirect("backend/add_product");
		
	}*/

	public function setting_content(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "content";
		$data["content"] = $this->M_backend->load($table);
        $this->load->view('v_admin_setting_content', $data);
		$this->load->view('v_sidebar_foot');
	}
	
	public function detail_content(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$id =  $this->input->get('id');
		$table = "content";
		$data["content"] = $this->M_backend->load_du($table, $id);
        $this->load->view('v_admin_detail_update_content', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_content(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['content_ina'] = $this->input->post('content_ina');
		$data['content_eng'] = $this->input->post('content_eng');
		$id =  $this->input->post('content_id');
		$table = "content";
		$this->M_backend->update($table, $data, $id);

		redirect('backend/setting_content');
	}

	public function product_unggulan(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "unggulan";
		$data["unggulan"] = $this->M_backend->load($table);
		$table = "all_product";
		$data["all_product"] = $this->M_backend->load($table);
        $this->load->view('v_admin_product_unggulan', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_product_unggulan(){
		$this->load->database();
		$this->load->model('M_backend');
		$kd1 = $this->input->post('kd1');
		$kd2 = $this->input->post('kd2');
		$kd3 = $this->input->post('kd3');
		$kd4 = $this->input->post('kd4');
		$kd5 = $this->input->post('kd5');
		$kd6 = $this->input->post('kd6');
		$kd7 = $this->input->post('kd7');
		$kd8 = $this->input->post('kd8');
		$kd9 = $this->input->post('kd9');
		$kd10 = $this->input->post('kd10');
		$this->M_backend->update_unggulan($kd1, $kd2, $kd3, $kd4, $kd5, $kd6, $kd7, $kd8, $kd9, $kd10);

		redirect('backend/product_unggulan');
	}

	public function setting_email(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$id=1;
		$table = "admin_mail";
		$data["admin_mail"] = $this->M_backend->get_admin_mail();
        $this->load->view('v_admin_setting_email', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_admin_mail(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['admin_email_address'] = $this->input->post('admin_email_address');
		$data['admin_email_Name'] = $this->input->post('admin_email_uname');
		$data['admin_email_message'] = $this->input->post('admin_email_message');
		$data['admin_email_password'] = $this->input->post('admin_email_password');
		$data['admin_email_subject'] = $this->input->post('admin_email_subject');
		$table = "admin_mail";
		$id = "1";
		$this->M_backend->update($table, $data, $id);
		redirect('backend/setting_email');
	}

	public function setting_banner(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$this->load->view('v_admin_setting_banner');
		$this->load->view('v_sidebar_foot');
	}

	public function detail_banner(){
		$this->load->database();
		$this->load->model('M_backend');
		$page = $this->input->get('page');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$data['image'] = $this->M_backend->getImage($page);
		$data['page'] = $page;
		$this->load->view('v_admin_detail_banner', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function detail_banner_home(){
		$this->load->database();
		$this->load->model('M_backend');

		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "home";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_home', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function detail_banner_produk(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "produk";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_jelajah_produk', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function do_upload_banner_($kd_banner, $url_img){
		$type = explode('.', $_FILES["banner_img"]["name"]);
		$type = $type[count($type)-1];
		$url = $url_img.$kd_banner.'.'.$type;
		$img_name = $kd_banner.'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["banner_img"]["tmp_name"]))
				if(move_uploaded_file($_FILES["banner_img"]["tmp_name"], $url))
					return $img_name;
		return "";
	}

	public function update_banner_product(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAP".date("dmYHis");
			unlink($ganti);
			$ke=1;
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "product";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_produk');
	}

	public function detail_banner_general(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "general";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_general', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_general(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAG".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "general";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_general');
	}

	public function detail_banner_kontak(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "kontak";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_kontak', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_kontak(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAK".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "kontak";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_kontak');
	}

	public function detail_banner_reseller(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "reseller";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_reseller', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_reseller(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAR".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "reseller";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_reseller');
	}

	public function detail_banner_temukan(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "temukan";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_temukan', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_temukan(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAT".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "temukan";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_temukan');
	}

	public function detail_banner_tentang(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "tentang";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_tentang', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_tentang(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAA".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "tentang";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_tentang');
	}

	public function detail_banner_karir(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "karir";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_karir', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_karir(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAC".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "karir";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_karir');
	}

	public function detail_banner_login(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "login";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_detail_banner_login', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_banner_login(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";
		$ganti = $this->input->post('img');

		if ($ganti!=""){
			$kd_banner = "BAL".date("dmYHis");
			unlink($ganti);
			$data['image'] = $this->do_upload_banner_($kd_banner, $url_img);
			$table = "login";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/detail_banner_login');
	}

	public function import_image(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$data['status'] = "";
		$this->load->view('v_admin_import_rar_file', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function upload_zip_file(){
		if ($_FILES['zip_file']['name'] != ''){
			$file_name = $_FILES['zip_file']['name'];
			$array = explode(".", $file_name);
			$name = $array[0];
			$ext = $array[1];
			if ($ext == 'zip'){
				$path = 'asset/image/products_temp';
				$location = $path . $file_name;
				if (move_uploaded_file($_FILES['zip_file']['tmp_name'], $location)){
					$zip = new ZipArchive;
					if ($zip->open($location)){
						$zip->extractTo($path);
						$zip->close();
						$data['status'] = "ok";
					}
				}
			}
			else {
				$data['status'] = "no";
			}
		}

		$this->setWatermark_fromzip();

		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$this->load->view('v_admin_import_rar_file', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function setWatermark_fromzip(){
		$folder = opendir("asset/image/products_temp");
		while($files=readdir($folder)){
			if($files!="." && $files!=".."){
				$this->resize_fromfolder($files);
				//$srcfile='asset/image/products_temp/'.$files;
				//$dstfile='asset/image/products_ori/'.$files;
				//copy($srcfile, $dstfile);
			}
		}
		$folder = opendir("asset/image/products_ori");
		while($files=readdir($folder)){
			if($files!="." && $files!=".."){
				$this->saveWatermark_tofolder_($files);
			}
		}
		$folder = opendir("asset/image/products_temp");
		while($files=readdir($folder)){
			if($files!="." && $files!=".."){
				unlink("asset/image/products_temp/".$files);
			}
		}
	}

	public function resize_fromfolder($files){
		include_once("asset/ak_php_img_lib_1.0.php");
		$target_file = "asset/image/products_temp/".$files;
		$resized_file = "asset/image/products_ori/".$files;
		$wmax = 500;
		$hmax = 500;
		ak_img_resize($target_file, $resized_file, $wmax, $hmax, ".jpg");
	}

	public function saveWatermark_tofolder_($files){
		include_once("asset/ak_php_img_lib_1.0.php");
		$target_file = "asset/image/products_ori/".$files;
		$wtrmrk_file = "asset/image/wakasa_watermark.png";
		$new_file = "asset/image/products/".$files;
		ak_img_watermark($target_file, $wtrmrk_file, $new_file);
	}

	public function saveWatermark_tofolder($image){
		
		$source = "asset/image/products_temp/".$image;
		
		$wm = imagecreatefrompng("asset/image/wakasa_watermark.png");
		$wmWidth = imagesx($wm);
		$wmHeight = imagesy($wm);

		$finalPic = imagecreatetruecolor($wmWidth, $wmHeight);
		$finalPic = imagecreatefromjpeg($source);

		$sourceDim = getimagesize($source);
		$startX = ($sourceDim[0] - $wmWidth) / 2;
		$startY = ($sourceDim[1] - $wmHeight) / 2;

		imagecopymerge($finalPic, $wm, $startX, $startY, 0, 0, $wmWidth, $wmHeight, 100);
		imagejpeg($finalPic,"asset/image/else/".$image);
	}


	public function set_unggulan(){
		$this->load->database();
		$this->load->model('M_backend');

		$id = $this->input->get('id');

		$table = "get_unggulan";
		$flg = $this->M_backend->load_du($table, $id);

		if ($flg=="0"){
			$data['is_unggulan'] = 1;
		} else {
			$data['is_unggulan'] = 0;
		}
		
		$table = "set_unggulan";
		$this->M_backend->update($table, $data, $id);

		redirect('Backend/product');
	}

	public function set_new(){
		$this->load->database();
		$this->load->model('M_backend');

		$id = $this->input->get('id');

		$table = "get_new";
		$flg = $this->M_backend->load_du($table, $id);

		if ($flg=="0"){
			$data['is_new'] = 1;
		} else {
			$data['is_new'] = 0;
		}
		
		$table = "set_new";
		$this->M_backend->update($table, $data, $id);

		redirect('Backend/product');
	}

	public function setting_content_image(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "content_about";
		$data['image'] = $this->M_backend->banner($table);
		$this->load->view('v_admin_setting_content_image', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function update_content_about_image(){
		$this->load->database();
		$this->load->model('M_backend');
		
		$url_img = "./asset/image/banner/";

		$ganti1 = $this->input->post('img1');
		$ganti2 = $this->input->post('img2');
		$ganti3 = $this->input->post('img3');

		if ($ganti1!=""){
			$kd_banner = "CA1".date("dmYHis");
			unlink($ganti1);
			$ke=1;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "ca1";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti2!=""){
			$kd_banner = "CA2".date("dmYHis");
			unlink($ganti2);
			$ke=2;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "ca2";
			$this->M_backend->update_banner($table, $data);
		}
		if ($ganti3!=""){
			$kd_banner = "CA3".date("dmYHis");
			unlink($ganti3);
			$ke=3;
			$data['image'] = $this->do_upload_banner($kd_banner, $url_img, $ke);
			$table = "ca3";
			$this->M_backend->update_banner($table, $data);
		}

		redirect('Backend/setting_content_image');
	}

	public function client_subs(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "subscriber";
		$data['subscriber'] = $this->M_backend->load($table);
		$this->load->view('v_admin_report_subs', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function delete_subscriber(){
		$this->load->database();
		$this->load->model('M_backend');

		$id = $this->input->get('id');

		$table = "update_subs";
		$data['is_active'] = 0;
		$this->M_backend->update($table, $data, $id);

		redirect('Backend/client_subs');
	}

	public function client_contact(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "user_contact";
		$data['user_contact'] = $this->M_backend->load($table);
		$this->load->view('v_admin_report_user_contact', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function detail_message(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$id = $this->input->get('id');
		$table = "update_read";
		$data['is_read'] = 1;
		$this->M_backend->update($table, $data, $id);
		$table = "detail_message";
		$data['detail_message'] = $this->M_backend->load_du($table, $id);
		$this->load->view('v_admin_detail_user_contact', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function reseller_conf(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "reseller_conf";
		$data['reseller_conf'] = $this->M_backend->load($table);
		$this->load->view('v_admin_report_reseller_conf', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function detail_reseller_conf(){
		$this->load->database();
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$this->load->model('M_backend');
		$id =  $this->input->get('id');
		$table = "reseller_conf";
		$data["reseller_conf"] = $this->M_backend->load_du($table, $id);
        $this->load->view('v_admin_detail_reseller_conf', $data);
		$this->load->view('v_sidebar_foot');
	}

}
?>