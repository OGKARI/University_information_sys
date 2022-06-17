<?php
	function saveUserAuth($user) {
		$_SESSION = [];
		$_SESSION["autchStudent"] = true;
		$_SESSION["rule"] = $user["ID_Role"];
		$_SESSION["login"] = $user["Login"];
		$_SESSION["user_name"] = $user["Student_name"];
		$_SESSION["user_last_name"] = $user["Last_name_student"];
		$_SESSION["id_user"] = $user["ID_Student"];
		
	} 
	function saveProfAuth($user) {
		$_SESSION = [];
		$_SESSION["autchProf"] = true;
		$_SESSION["rule"] = $user["ID_Role"];
		$_SESSION["login"] = $user["Login"];
		$_SESSION["user_name"] = $user["Professor_name"];
		$_SESSION["user_last_name"] = $user["Last_name_professor"];
		$_SESSION["id_user"] = $user["ID_Professor"];
		
	} 
?>