<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="color:red;"><!-- &times; --> X</span></button>
                <h4 class="modal-title"><u>Edit User Details</u></h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add" action="">
                	<input type="hidden" value="add" name="action" id="action">
                  	<div class="form-group">
                    	<label for="user_Name" class="control-label">Name:</label>
                    	<input type="text" class="form-control" id="user_Name" name="name" value="<?php echo $singleRowArray['registered_user_name']; ?>" required />
                  	</div>
                  	<div class="form-group">
                    	<label for="password" class="control-label">Password:</label>
                    	<input type="text" class="form-control" id="password" name="password" value="<?php echo $singleRowArray['password_value']; ?>" required />
                  	</div>
                  	<div class="form-group">
                    	<label for="email_id" class="control-label">Email ID:</label>
                    	<input type="text" class="form-control" id="email_id" name="email_id" edit="edit_<?php echo $singleRowArray["registered_user_id"]; ?>" value="<?php echo $singleRowArray['email_id_val']; ?>" required />
                  	</div>
                  	<div class="form-group">
                    	<label for="gender_id" class="control-label">Gender:</label>
                    	<input type="text" disabled class="form-control" id="gender_id" name="gender" value="<?php echo $singleRowArray['gender_data']; ?>"/>
                  	</div>
                  	<div class="form-group">
                    	<label for="state_id" class="control-label">State:</label>
                    	<!-- <input type="text" disabled class="form-control" id="state_id" name="state" value="<?php echo $singleRowArray['gender_data']; ?>"/> -->
						<select  name="state_Select" id="stateNameID" required>

							<option value="0" id="abc" selected> -- Select State -- </option>

							<?php 
								
								foreach ($listOfStates as $stateKey => $stateValue){ 
									$stateSelectorString="";
									if ($stateValue['state_id'] == $singleRowArray['state_id']) {
										$stateSelectorString = "selected";
									}
							?>
									<option value = "<?php echo $stateValue['state_id']; ?>" <?php echo $stateSelectorString; ?> > <?php echo $stateValue['state_name']; ?> </option>

							<?php
									
								} 

							?>	

						</select>
                  	</div>
                  	<div class="form-group">
                    	<label for="city_id" class="control-label" style="float:left;">City:</label>
<!--                     	<input type="text" disabled class="form-control" id="city_id" name="city" value="<?php echo $singleRowArray['gender_data']; ?>"/> -->
					<div id="CityDropDown">
								<?php echo nbs(1);?>	
								<select  name="city_Select" id="cityNameID" required>

									<option value="0" id="xyz"> -- Select City -- </option>

									<?php foreach ($listOfCities as $cityKey => $cityValue){ 
										$citySelectorString="";
										if ($cityValue['city_id'] == $singleRowArray['city_id']) {
											$citySelectorString = "selected";
										}
									?>
										<option value = "<?php echo $cityValue['city_id']; ?>" <?php echo $citySelectorString; ?> > <?php echo $cityValue['city_name']; ?> </option>

									<?php } ?>

								</select>
							</div>	
                  	</div>                                    
                
		            </div>
		            <div class="modal-footer">
		                <button type="button" id="btn_close" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="button" id="btn_save" class="btn btn-primary">Save</button>
		            </div>
	            </form>
        	</div>
    	</div>
</div>


<script type='text/javascript'>

$(document).ready(function(){

var NameVal_user = "";
var PassVal_user = "";
var EmailVal_user = "";
var StateVal_user = "";
var CityVal_user = "";

var user_ID = "";
var userID = "";
var edit_user_ID = "";

// Submit Edited record
            $('#btn_save').on('click', function () {
                
                user_ID = $('#email_id').attr("edit")

                userID = user_ID.split("_");

                edit_user_ID = userID[1];




  /*				var $lmTable = $("#user-grid").dataTable( { bRetrieve : true } );
  $lmTable.fnDraw(); */               

                  // alert(edit_user_ID);
                 // $(this).hide();
              	NameVal_user = $('#user_Name').val(); 
              	PassVal_user = $('#password').val(); 
              	EmailVal_user = $('#email_id').val(); 
              	StateVal_user = $('#stateNameID').val(); 
              	CityVal_user = $('#cityNameID').val(); 

        /*            	alert(StateVal_user); testing */
        				$.ajax({
        					url:"<?php echo site_url('CRUD_Users/updateSingleUserRow');?>",
        					method:"POST",
        					data: {search_user_ID : edit_user_ID, NameVal:NameVal_user, PassVal:PassVal_user, EmailVal:EmailVal_user, StateVal:StateVal_user, CityVal:CityVal_user },
        					success: function(result){
        						alert("Updated Successfully");
        /*						window.location.replace("<?php echo site_url('DisplayUsers');?>"); WIP*/

        				  }

        				});




            } );

/* $('#user-grid').on('click', function (e) {
                // jqDataTable.dataTable( { bRetrieve : true } );
                // jqDataTable.fnDraw();
                // $(this).hide();
                // $('#user-grid').dataTable();
                // jqDataTable.fixedColumns().update();
                

});*/ /*testing WIP*/ 



$('#btn_close').on('click', function () {
                    $('tr').removeClass('selected');

});

// var currentSource ="<?php echo site_url('DisplayUsers/viewAppUsers');?>";

$('#btn_save').on('click', function () {

                // $(this).parents('tr').removeClass('selected');
                $('#user-grid').DataTable().ajax.reload();
                // $(this).hide();
});


		$("#stateNameID").on("change", function(e){
			var stateID1 = $("#stateNameID").val();
			// alert(stateID+"<ID");		
			$.ajax({
				url: "<?php echo site_url('AppUsers/getAjaxCity');?>",
				// url: "..",
				type : "POST",
				data : {stateID:stateID1},

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


<?php

/*echo"Data"; check working*/

    /*e.preventDefault();
    $.ajax({
        type : 'POST',
        data: $("#softwareform").serialize(),
        url : 'url',
        success : function(data){
           
        }
    });
    return false;*/
                 // $("#download_link").html(data);

/*print_r($singleRowArray);*/
 	 ?>
