<?php
	$email = '<take in from textbox>'
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo("Email validated , passed")
	}
	else{
			echo("Email validated , Error !")
	}
?>