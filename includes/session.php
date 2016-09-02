<?php session_start(); 

function detect_user(){
	return isset($_SESSION['email']);
	}
	
function confirm_detect_user($url){
	if(!detect_user()){
		redirect_to($url);
		}
		
	}
?>