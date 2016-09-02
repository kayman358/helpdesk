<?php
function check_required_fields($required_array){
	$field_errors = array();
	foreach($required_array as $fieldname){
		if(!isset($_POST[$fieldname]) 
		|| (empty($_POST[$fieldname]) && !is_numeric($_POST[$fieldname]))
		){
			$field_errors[] = $fieldname;
			}
		}
		return $field_errors;
	}
	
function check_max_field_lengths($field_length_array){
	
	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength ){
		if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength){
			$field_errors[] = $fieldname;
			}
		}
		return $field_errors;
	}
	
function display_errors($error_array){
	echo "<p class=\"errors\">";
	echo "Please review the following fields: <br />";
	foreach($error_array as $error){
		echo "-" . $error . "<br />";
		}
		echo "</p>";
	}
function verify_password($password, $confirm_pass){
	if($password!=$confirm_pass){
		$message = "Submission of form failed failed, password does not match please check the password fields again!!!";
			$message .= "<br />" . mysql_error();
	echo $message;
	
		
}

}

?>