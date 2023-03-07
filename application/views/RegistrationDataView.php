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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/pace.min.css">
	<link rel="shortcut icon" type="image/ico" href="https://www.datatables.net/favicon.ico">
	<link rel="shortcut icon" type="image/ico" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.foundation.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/jquery.dataTables_themeroller.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/bootstrap/css/bootstrap-theme.min.css">



</head>
<!-- <body> -->
	<body class="align-items-center">
		<pre>			<button type="button" class="btn btn-success btn-block btn-default btn-lg" style="float:left; width:15%; height:10%;  position:fixed; z-index:999 !important;" id="loginFill"><b>Login</b></button></pre>
		<!-- //edited ^removed style btn-success btn-block -->
		<?php
		echo validation_errors();
		echo form_open("AppUsers/registerData");
		$attributesForm = array('id' => 'RegistFill', 'name' =>
			'RegistDataFill');
			?>

			<div class="container" style="">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card mx-6">
							<div class="card-body p-6">
								<h1>Register</h1>
								<p class="text-muted">Create your account</p>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-user"></i>
										</span>
									</div>
									<input class="form-control" type="text" placeholder="Username" name="User_name" id="fileNameID" required >
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text"></span>
									</div>
									<input class="form-control" type="text" placeholder="Email" name="Email_val" id="emailID" required>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-lock"></i>
										</span>
									</div>
									<input class="form-control" type="password" placeholder="Password" name="Pass_val" id="passValID" required>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text"></span>
									</div>
									<input class="form-control" type="text" placeholder = "Enter Age in years" name="Age_val" id="ageValID" required>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">Location</span>
									</div>
		<!--                       <label>> <u>Your Location:</u></label>

		                      <?php echo br(2);?> 
		                  -->


		                  <select  class="form-control" name="state_Select" id="stateNameID" required>

		                  	<option value="" selected> -- Select State -- </option>

		                  	<?php foreach ($listOfStates as $stateKey => $stateValue){ 
		                  		if ($stateValue['state_name'] == 'MAHARASHTRA') {    //Currently only data for MAHARASHTRA is added in DB
		                  			?>
		                  			<option value = "<?php echo $stateValue['state_id']; ?>" > <?php echo $stateValue['state_name']; ?> </option>
		                  			<?php 
		                  		}
		                  		?>
		                  	<?php } ?>

		                  </select>

		              </div>
		              <div class="input-group mb-4" id="CityDropDown">
		              	<div class="input-group-prepend">
		              		<span class="input-group-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		              	</div>


		              	<select  class="form-control" name="city_Select" id="cityNameID" required>

		              		<option value="0" selected> -- Select City  </option>

		              		<?php foreach ($listOfCities as $cityKey => $cityValue){ ?>

		              			<option value = "<?php echo $cityValue['city_id']; ?>" > <?php echo $cityValue['city_name']; ?> </option>

		              		<?php } ?>

		              	</select>

		              </div>
		              <div class="input-group mb-4">
		              	<div class="input-group-prepend">
		              		<span class="input-group-text"></span>
		              	</div>
		              	<span class="form-control">

		              		<label>Male:
		              			<input type="radio"  name="gender_Name" id="mGenderID" value="Male" required>
		              		</label>

		              		<label>Female:
		              			<input type="radio"  name="gender_Name" id="fGenderID" value="Female" required>
		              		</label>    

		              	</span>
		              </div>


		<!--               <div class="input-group mb-4">
		                <div class="input-group-prepend">
		                  <span class="input-group-text">
		                    <i class="icon-lock"></i>
		                  </span>
		                </div>
		                <input class="form-control" type="password" placeholder="Repeat password">
		            </div> -->
		            <input class="btn btn-block btn-success" type="submit" value="Create Account">
		        </div>
		<!--             <div class="card-footer p-4">
		              <div class="row">
		                <div class="col-6">
		                  <button class="btn btn-block btn-facebook" type="button">
		                    <span>facebook</span>
		                  </button>
		                </div>
		                <div class="col-6">
		                  <button class="btn btn-block btn-twitter" type="button">
		                    <span>twitter</span>
		                  </button>
		                </div>
		              </div>
		          </div> -->
		      </div>
		  </div>
		</div>

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
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

        	<div class="modal fade" id="myModal" role="dialog">
        		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/bootstrap/bootstrap/dist/css/3-3-7_bootstrap.min.css"> -->


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
    			var timestamp = Number(new Date()); // current time as number
			// alert(stateID+"<ID");		
			$.ajax({
				url: "<?php echo site_url('AppUsers/getAjaxCity?');?>"+timestamp,
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

