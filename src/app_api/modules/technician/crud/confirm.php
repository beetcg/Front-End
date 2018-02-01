<?php
	require_once "./../../../../../vendor/autoload.php";
	require_once "./../../../config/connection.php";
	require_once "./../../methods/mail/mail.php";
	require_once "./../../methods/tech.php";

	$res = [];
	
	$obj = new Methods();
	$resp = $obj->tryToConnect();
	$res['connection'] = $resp;

	$id = $_POST["id"];
	$salt = $_POST["salt"];

	$res['id'] = $id;
	$res['salt'] = $salt;

	if(!empty($_POST)){
		$elements = $_POST['subcat'];

		if(isset($elements)){
			if($elements!=""){
				// Convert from String to Array
					$subcat = explode(',', $elements);
					$res['data'] = $subcat;

				// Save id 
					$file_name_id = $_FILES['id_card']['name'];
					$file_type_id = $_FILES['id_card']['type'];
					$file_size_id = $_FILES['id_card']['size'];
					$file_path_id = '/home/u420574110/public_html/src/app_api/documents/id/';

					// $name_id = file_type($file_type_id);
					if ($file_type_id == 'image/jpeg'){
						$new_id = $id.'.jpeg';
					}
					if ($file_type_id == 'image/jpg'){
						$new_id = $id.'.jpg';
					}
					if ($file_type_id == 'image/gif'){
						$new_id = $id.'.gif';
					}
					if ($file_type_id == 'image/png'){
						$new_id = $id.'.png';
					}
					if ($file_type_id == 'application/pdf'){
						$new_id = $id.'.pdf';
					}

					$final_route_id = $file_path_id.$new_id;

				// Save Passport
					$file_name_passport = $_FILES['passport']['name'];
					$file_type_passport = $_FILES['passport']['type'];
					$file_size_passport = $_FILES['passport']['size'];
					$file_path_passport = '/home/u420574110/public_html/src/app_api/documents/passport/';

					// $new_id = file_type($file_type_id);
					if ($file_type_passport == 'image/jpeg'){
						$new_passport = $id.'.jpeg';
					}
					if ($file_type_passport == 'image/jpg'){
						$new_passport = $id.'.jpg';
					}
					if ($file_type_passport == 'image/gif'){
						$new_passport = $id.'.gif';
					}
					if ($file_type_passport == 'image/png'){
						$new_passport = $id.'.png';
					}
					if ($file_type_passport == 'application/pdf'){
						$new_passport = $id.'.pdf';
					}

					$final_route_passport = $file_path_passport.$new_passport;

				// Save Bank Acount
					$file_name_bank_account = $_FILES['bank_account']['name'];
					$file_type_bank_account = $_FILES['bank_account']['type'];
					$file_size_bank_account = $_FILES['bank_account']['size'];
					$file_path_bank_account = '/home/u420574110/public_html/src/app_api/documents/bank_account/';

					// $name_bank_account = file_type($file_type_bank_account);
					if ($file_type_bank_account == 'image/jpeg'){
						$new_bank_account = $id.'.jpeg';
					}
					if ($file_type_bank_account == 'image/jpg'){
						$new_bank_account = $id.'.jpg';
					}
					if ($file_type_bank_account == 'image/gif'){
						$new_bank_account = $id.'.gif';
					}
					if ($file_type_bank_account == 'image/png'){
						$new_bank_account = $id.'.png';
					}
					if ($file_type_bank_account == 'application/pdf'){
						$new_bank_account = $id.'.pdf';
					}

					$final_route_bank_account = $file_path_bank_account.$new_bank_account;

				// Save Criminal Record
					$file_name_criminal_record = $_FILES['criminal_record']['name'];
					$file_type_criminal_record = $_FILES['criminal_record']['type'];
					$file_size_criminal_record = $_FILES['criminal_record']['size'];
					$file_path_criminal_record = '/home/u420574110/public_html/src/app_api/documents/criminal_record/';

					// $name_criminal_record = file_type($file_type_criminal_record);
					if ($file_type_criminal_record == 'image/jpeg'){
						$new_criminal_record = $id.'.jpeg';
					}
					if ($file_type_criminal_record == 'image/jpg'){
						$new_criminal_record = $id.'.jpg';
					}
					if ($file_type_criminal_record == 'image/gif'){
						$new_criminal_record = $id.'.gif';
					}
					if ($file_type_criminal_record == 'image/png'){
						$new_criminal_record = $id.'.png';
					}
					if ($file_type_criminal_record == 'application/pdf'){
						$new_criminal_record = $id.'.pdf';
					}

					$final_route_criminal_record = $file_path_criminal_record.$new_criminal_record;

				// Saving the documents

					if ($file_size_id<= 3000000 && $file_size_passport<= 3000000 && $file_size_criminal_record<= 3000000 && $file_size_bank_account<= 3000000) {
						$res['rulessize'] = true; 

						if ($file_type_id == 'image/jpeg' || $file_type_id == 'image/jpg' || $file_type_id == 'image/gif' || $file_type_id == 'image/png' || $file_type_id == 'application/pdf' &&
							  $file_type_passport == 'image/jpeg' || $file_type_passport == 'image/jpg' || $file_type_passport == 'image/gif' || $file_type_passport == 'image/png' || $file_type_passport == 'application/pdf' &&
							  $file_type_criminal_record == 'image/jpeg' || $file_type_criminal_record == 'image/jpg' || $file_type_criminal_record == 'image/gif' || $file_type_criminal_record == 'image/png' || $file_type_criminal_record == 'application/pdf' &&
							  $file_type_bank_account == 'image/jpeg' || $file_type_bank_account == 'image/jpg' || $file_type_bank_account == 'image/gif' || $file_type_bank_account == 'image/png' || $file_type_bank_account == 'application/pdf') {
							$res['rulestype'] = true;

							if (move_uploaded_file($_FILES['id_card']['tmp_name'], $final_route_id)) {
								$upload_id = true;
							}
							if (move_uploaded_file($_FILES['passport']['tmp_name'], $final_route_passport)) {
								$upload_passport = true;
							}
							if (move_uploaded_file($_FILES['bank_account']['tmp_name'], $final_route_bank_account)) {
								$upload_bank_account = true;
							}
							if (move_uploaded_file($_FILES['criminal_record']['tmp_name'], $final_route_criminal_record)) {
								$upload_criminal_record = true;
							}

							if ($upload_id && $upload_passport && $upload_bank_account && $upload_criminal_record) {
								$res['docUpload'] = true;
							}
						}
					}

				// Save the subcategory
					$count = 0;
					for ($i=0; $i < count($subcat); $i++) {
						$obj = new Methods();
						$resp = $obj->saveSubcategory($subcat[$i], $id);
						$res['trigger'] = $resp;

						if ($res['trigger']) {
							$count++;
						}
					}

					if ($count > 0) {
						$res['subcategory'] = true;
					} else {
						$res['subcategory'] = false;
					}

				// saveDocuments 
					if ($res['docUpload'] == true && $res['subcategory'] == true) {
						$res['aux'] = "entró";
						$obj = new Methods();
						$resp = $obj->saveDocuments($id, $final_route_passport, $final_route_criminal_record, $final_route_id, $final_route_bank_account);
						$res['saveDocuments'] = $resp;
					}

					if ($res['saveDocuments']) {
						$obj = new Methods();
						$resp = $obj->activateAcount('tech', $id, $salt);
						$res['active'] = $resp;
					} else {
						$res['error'] = true;
					}
		
			} else {
		    $res['empty'] = true;
			}
		}else {
			$res['empty'] = true;
		}
	} else {
		$res['empty'] = true;
	}

	echo json_encode($res);
