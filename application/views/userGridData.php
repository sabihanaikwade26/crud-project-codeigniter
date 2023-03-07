<?php
	
	$query = $this->db->get('registered_user_data');

	if ($query->num_rows() > 0) {
		$userDataArray = $query->result_array();
	}

	$jsonUserData = json_encode($userDataArray);

	// print_r($jsonUserData);
// echo "<br/><br/>";
// Echo "Array
// (
//     [draw] => 2
//     [columns] =>";
	// echo"<pre>";
	echo($jsonUserData); //$userDataArray
	// echo"</pre>";


?>