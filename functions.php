<?php

function is_new_visitor(){
	if($_COOKIE['new_visitor']){ 
		return false; 
		}else{ 
		setcookie("new_visitor",1); 
		return true; 
		} 
}
}
?>