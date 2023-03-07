<html>
<head>
	<title> Registration Form </title>
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/dataTables.foundation.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/dataTables.jqueryui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/editor.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/editor.css">

        <link rel="shortcut icon" type="image/ico" href="https://www.datatables.net/favicon.ico">
        <link rel="shortcut icon" type="image/ico" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.foundation.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.jqueryui.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/jquery.dataTables_themeroller.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/3-3-7_bootstrap.min.css">

</head>
<body>
	<div>
		<pre>
			<button type="button" class="btn btn-success btn-block btn-default btn-lg" style="float:left; width:10%; height:10%;  position:fixed" id="loginFill"><b>Login</b></button><center> <?php echo heading('Registration Form',3);?></center>
		</pre>
		<!-- //edited ^removed style btn-success btn-block -->
		<?php
		echo validation_errors();
		echo form_open("AppUsers/registerData");
		$attributesForm = array('id' => 'RegistFill', 'name' =>
			'RegistDataFill');
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

		<?php echo br(2);?>			
		<input type="submit" value="Apply">

		<!-- <label> -->
		<?php echo form_close(); ?>
		<pre>
		</pre>	
	</div>



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>

  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal"><span style="color:red;"><!-- &times; --> X</span></button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button class="btn btn-success btn-block" id="btnToLogin"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
</body>



<script type="text/javascript">
	$(document).ready(function(){


		$("#stateNameID").on("change", function(e){
			var stateID1 = $("#stateNameID").val();
			// alert(stateID+"<ID");		
			$.ajax({
				url: "<?php echo site_url('AppUsers/getAjaxCity');?>",
				// url: "..",
				type : "POST",
				data : {stateID:stateID1},

				success : function(htmlResponse){
					// alert(htmlResponse);
					$("#cityNameID").hide();
					$("#CityDropDown").html(htmlResponse);
				}
 
			});
			// $(this).hide();
		});

	    $("#loginFill").click(function(){
	        $("#myModal").modal();
	    });

	    $("#btnToLogin").click(function(e){
	        e.preventDefault();



			var NameVal_login_user = "";
			var PassVal_login_user = "";
/*			var EmailVal_login_user = "";
			var StateVal_login_user = "";
			var CityVal_login_user = "";

			var user_ID = "";
			var userID = "";
			var edit_user_login_ID = "";
			not required
			*/

			// Submit to Login validation
                
/*                user_ID = $('#email_id').attr("edit")

                userID = user_ID.split("_");

                edit_user_login_ID = userID[1];
                not required
*/


                // alert(edit_user_login_ID);
               // $(this).hide();
            	NameVal_login_user = $('#usrname').val(); 
            	PassVal_login_user = $('#psw').val(); 
/*            	EmailVal_login_user = $('#email_id').val(); 
            	StateVal_login_user = $('#state_id').val(); 
            	CityVal_login_user = $('#city_id').val(); 
				not required
            	*/



			$.ajax({

				url: "<?php echo site_url('AppUsers/loginVerify');?>",
				type : "POST",
				data : {NameVal_user:NameVal_login_user, PassVal_user:PassVal_login_user},

				success : function(resultValidate){
					// alert(resultValidate);
					/*$("#cityNameID").hide();
					$("#CityDropDown").html(resultValidate);*/
					if(resultValidate === "Registered1001001User"){
                        window.location.replace("<?php echo site_url('DisplayUsers');?>");
					}
					else{
						alert("Invalid Login Details. Try again");
					}

				}
 
			});	        
	        // $("#myModal").modal();
	    });    
	});



</script>

</html>

