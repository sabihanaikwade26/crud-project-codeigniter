
<div class="input-group-prepend">
	<span class="input-group-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</div>

<?php
	$stateIdVal = $_REQUEST["stateID"];

	// echo $stateIdVal;

	$query = $this->db->get_where('list_cities',array('from_state_id' => $stateIdVal));

	 $cityArray= $query->result_array();
?>
		<select  class="form-control" name="city_Select" id="cityNameID" required>

			<option value="0" selected> -- Select City -- </option>

			<?php foreach ($cityArray as $cityKey => $cityValue){ ?>

				<option value = "<?php echo $cityValue['city_id']; ?>" > <?php echo $cityValue['city_name']; ?> </option>

			<?php } ?>

		</select>

<?php

	// print_r($cityArray); 
?>
