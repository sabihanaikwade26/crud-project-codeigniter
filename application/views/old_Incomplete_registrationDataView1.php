<html>
<head>
	<title> Registration Form </title>
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
</head>
<body>
	<div>
		<?php
		echo validation_errors();
		echo form_open("AppUsers/registerData");
		$attributesForm = array('id' => 'RegistFill', 'name' =>'RegistDataFill');
		?>

		<label>Username:</label>
		<input type="text" placeholder = "Enter User Name" name="User_name" id="fileNameID" required>

		<?php echo br(3);?>
		<!-- <pre>
		</pre> -->

		<label>Password:</label>
		<input type="password" placeholder = "Enter Strong Password" name="Pass_val" id="passValID" required>

		<?php echo br(3);?>
		<!-- <pre>
		</pre> -->

		<label>Age:</label>
		<input type="text" placeholder = "Enter Age in years" name="Age_val" id="ageValID" required>


		<?php echo br(3);?>
		<label>Email:</label>
		<input type="text" placeholder = "Enter your email id" name="Email_val" id="emailID" required>

		<?php echo br(3);?>
		
		<label>> <u>Your Location:</u></label>

		<?php echo br(2);?>	

		<label>Select State:</label>

		<select  name="state_Select" id="stateNameID" required>

			<option value="" selected> -- Select State -- </option>

			<?php foreach ($listOfStates as $stateKey => $stateValue){ ?>

				<option value = "<?php echo $stateValue['state_id']; ?>" > <?php echo $stateValue['state_name']; ?> </option>

			<?php } ?>

		</select>


		<?php echo br(2);?>	
		<label style="float:left;">Select City: </label>

		<div id="CityDropDown">
			<?php echo nbs(1);?>	
			<select  name="city_Select" id="cityNameID" required>

				<option value="0" selected> -- Select City -- </option>

				<?php foreach ($listOfCities as $cityKey => $cityValue){ ?>

					<option value = "<?php echo $cityValue['city_id']; ?>" > <?php echo $cityValue['city_name']; ?> </option>

				<?php } ?>

			</select>
		</div>	
		
		<?php echo br(2);?>	
		<label>Select Gender:</label>
		<?php echo br(1);?>	
		<label>Male:
		<input type="radio"  name="gender_Name" id="mGenderID" value="Male" required>
		</label>

		<label>Female:
		<input type="radio"  name="gender_Name" id="fGenderID" value="Female" required>
		</label>		

		<pre>
		</pre>
		<input type="submit" value="Apply">

		<!-- <label> -->
		<?php echo form_close(); ?>
	</div>

</body>

<script type="text/javascript">
	$(document).ready(function(){


		$("#stateNameID").on("change", function(e){
			var stateID = $("#stateNameID").val();
			// alert(stateID+"<ID");		
			$.ajax({
				url: "<?php echo site_url('AppUsers/getAjaxCity');?>",
				// url: "..",
				type : "POST",
				data : {stateID:stateID},

				success : function(result){
					// alert(result);
					$("#cityNameID").hide();
					$("#CityDropDown").html(result);
				}
 
			});
			// $(this).hide();
		});
	});

</script>

</html>

