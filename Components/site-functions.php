<?php
	function hey($argument) {
		return "Tere {$argument}";
	}

	function redirect($new_addres) {
		header("Location: " . $new_addres);
	}
?>