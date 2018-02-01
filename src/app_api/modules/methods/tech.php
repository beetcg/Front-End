<?php
  use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	/**
	* This is the Methods Class
	*/
	class Methods {
		// try to Connect
		public function tryToConnect(){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;

			if (mysqli_ping($connect)) { $res = true; }
			mysqli_close($connect);

			return $res;
		}

		// If exist the User
		public function ifExist($table, $email){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;

			$email_lower = strtolower($email);
			$email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);

			$sql= "SELECT email FROM $table WHERE email='$email_s'";
			$result = mysqli_query($connect, $sql);

			if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		       $res = true;
		       break;
		    }
			}

			mysqli_close($connect);

			return $res;
		}

		// Create User
		public function create($fname,$lname,$email,$pass,$tlf,$zip){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;
			date_default_timezone_set('America/Guatemala');

			$id = uniqid();
			$salt = md5(uniqid());
			$hash = password_hash($pass, PASSWORD_BCRYPT);
			$email_lower = strtolower($email);
			$email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);
			$activate_code = md5(uniqid()).uniqid();
			$date = date("Y-m-d H:i:s", time());

			$sql= "INSERT INTO tech (__id, fname, lname, email, tlf, zip, salt, hash, active, created_at, update_at) VALUES ('$id','$fname','$lname','$email_s','$tlf','$zip','$salt','$hash','0','$date','$date')";

			if (mysqli_query($connect, $sql)) {

			  $res = true;

			  $obj = new Mailer();
			  $messageHtml = $obj->techHtml($fname,$lname,$id,$salt);
			  $messagePlain = $obj->techPlain($fname,$lname,$id,$salt);

				$mail = new PHPMailer(true);
				try {

			    //Server settings
			    $mail->isSMTP();
			    $mail->Host = 'smtp.gmail.com';
			    $mail->SMTPAuth = true;
			    $mail->Username = 'info@beetcg.com';
			    $mail->Password = 'beet!!1379';
			    $mail->SMTPSecure = 'tls';
    			$mail->Port = 587;

			    //Recipients
			    $mail->setFrom('info@beetcg.com', 'Beet Community');
			    $mail->addAddress($email_s, $fname.' '.$lname);
			    $mail->isHTML(true);
			    $mail->Subject = 'Hi '.$fname.' - Confirmation Message';
			    $mail->Body = $messageHtml;
			    $mail->AltBody = $messagePlain;

			    $mail->send();
				} catch (Exception $e) {
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				}
			}

			mysqli_close($connect);

			return $res;
		}

		// checkAcount
		public function checkAcount($table, $id, $salt){
			$obj = new connect();
			$connect = $obj->connection();
			$res = 'not found';

			$sql= "SELECT * FROM $table WHERE __id='$id' AND salt='$salt'";
			$result = mysqli_query($connect, $sql);

			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    $res = $row;
			    break;
			  }
			}

			mysqli_close($connect);
			return $res;
		}

		// Save Subcategories
		public function saveSubcategory($sub, $id){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;

			$sql= "INSERT INTO subcat_tech (id_tech, id_subc) VALUES ('$id', '$sub');";
			
			if ( mysqli_query($connect, $sql) ) {
			  $res = true;
			} else {
			  $res = false;
			}

			mysqli_close($connect);
			return $res;
		}

		// Save Documents
		public function saveDocuments($id_tech, $passport, $criminal_record, $id_card, $bank_account){
			date_default_timezone_set('America/Guatemala');

			$obj = new connect();
			$connect = $obj->connection();
			$res = false;
			$date = date("Y-m-d H:i:s", time());
			$id = uniqid();

			$sql = "INSERT INTO documents 
							(__id, passport, criminal_record, id_card, bank_account, id_tech, created_at, update_at) 
							VALUES 
							('$id', '$passport', '$criminal_record', '$id_card', '$bank_account', '$id_tech', '$date', '$date');";
			
			if ( mysqli_query($connect, $sql) ) {
			  $res = true;
			} else {
			  $res = false;
			}

			mysqli_close($connect);
			return $res;
		}

		// Activate acount
		public function activateAcount($table, $id, $salt){
			$obj = new connect();
			$connect = $obj->connection();
			$res = false;

			  date_default_timezone_set('America/Guatemala');
				$date = date("Y-m-d H:i:s", time());

			  $update = "
			  UPDATE $table
			  SET active= '1',
			  		update_at='$date'
			  WHERE __id='$id' AND salt='$salt';
			  ";

			  if (mysqli_query($connect, $update)) {
			  	$res = true;
			  }

			mysqli_close($connect);
			return $res;
		}

    // Recovery Password
    public function recovery($table, $email){
      $obj = new connect();
      $connect = $obj->connection();
      $res = false;

      $email_lower = strtolower($email);
      $email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);

      $sql= "SELECT * FROM $table WHERE email='$email_s'";
      $result = mysqli_query($connect, $sql);

      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $data = $row;
          break;
        }
      }
      mysqli_close($connect);

      if ($data) {
        $obj = new Mailer();
        $messageHtml = $obj->recoveryTechHtml($data['fname'],$data['lname'],$data['__id'],$data['salt']);
        $messagePlain = $obj->recoveryTechPlain($data['fname'],$data['lname'],$data['__id'],$data['salt']);;

        $mail = new PHPMailer(true);
        try {

          //Server settings
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'info@beetcg.com';
          $mail->Password = 'beet!!1379';
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;

          //Recipients
          $mail->setFrom('info@beetcg.com', 'Beet Community');
          $mail->addAddress($email_s, $data['fname'] .' '. $data['lname']);
          $mail->isHTML(true);
          $mail->Subject = 'Hi '.$data['fname'].' - Recovery Password';
          $mail->Body = $messageHtml;
          $mail->AltBody = $messagePlain;

          $mail->send();

          $res = true;
        } catch (Exception $e) {
          $res = false;
        }
      } else {
        $res = false;
      }
      return $res;
    }

    // Change Password
    public function new_pass($table, $pass, $id, $salt){
      $obj = new connect();
			$connect = $obj->connection();
			$res = false;

			  date_default_timezone_set('America/Guatemala');
				$date = date("Y-m-d H:i:s", time());
        $new_hash = password_hash($pass, PASSWORD_BCRYPT);

			  $update = "
			  UPDATE $table
			  SET hash= '$new_hash',
			  		update_at='$date'
			  WHERE __id='$id' AND salt='$salt';
			  ";

			if ( mysqli_query($connect, $update) ) {
			  $sql= "SELECT * FROM $table WHERE __id='$id' AND salt='$salt'";
	      $result = mysqli_query($connect, $sql);

	      if (mysqli_num_rows($result) > 0) {
	        while($row = mysqli_fetch_assoc($result)) {
	          $data = $row;
	          break;
	        }
	      }

			  $res = $data;

			  $obj = new Mailer();
			  $messageHtml = $obj->techSuccessRecoveryHtml($data['fname'],$data['lname'],$id,$salt);
			  $messagePlain = $obj->techSuccessRecoveryPlain($data['fname'],$data['lname'],$id,$salt);

				$mail = new PHPMailer(true);
				try {

			    //Server settings
			    $mail->isSMTP();
			    $mail->Host = 'smtp.gmail.com';
			    $mail->SMTPAuth = true;
			    $mail->Username = 'info@beetcg.com';
			    $mail->Password = 'beet!!1379';
			    $mail->SMTPSecure = 'tls';
    			$mail->Port = 587;

				//Recipients
          $mail->setFrom('info@beetcg.com', 'Beet Community');
          $mail->addAddress($data['email'], $data['fname'].' '. $data['lname']);
          $mail->isHTML(true);
          $mail->Subject = 'Hi '.$data['fname'].' - Password Changed';
          $mail->Body = $messageHtml;
          $mail->AltBody = $messagePlain;

          $mail->send();

          $res = true;
        } catch (Exception $e) {
          $res = $mail->ErrorInfo;
        }
      } else {
        $res = false;
      }

      return $res;
    }

    // Log-in
    public function login($table, $email, $pass){
      $obj = new connect();
      $connect = $obj->connection();
      $res = false;
      $email_lower = strtolower($email);
			$email_s = filter_var($email_lower, FILTER_SANITIZE_EMAIL);

      $sql= "SELECT * FROM $table WHERE email='$email_s'";
			$result = mysqli_query($connect, $sql);

			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    $res = $row;
			    break;
			  }
			}
			mysqli_close($connect);

      if ($res) {
        if ( password_verify($pass, $res['hash']) ) {
          return $row;
        }
      } else {
        return $res;
      }

    }
  }
