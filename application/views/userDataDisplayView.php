<html>
<head>
	<title> Users Information </title>
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

</head>
<body>
    <pre>           <button onclick='window.location.assign("<?php echo base_url(); ?>")' class="btn btn-success btn-block btn-default btn-lg" style="margin-left: 75%;float:right; width:15%; height:10%;line-height: 19px;align-items: center; position:relative!important;" ><b>Logout</b></button></pre>
<?php echo br(3); ?>

<table id="user-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
    <thead>
        <tr>
            <th>User name</th>
            <th>Password</th>
            <th>Age</th>
         	<th>Email ID</th>
			<th>Gender</th>
            <th></th>
            <th>Edit / Delete</th>
<!-- 			<th>State</th>
			<th>City</th> -->
        </tr>
    </thead>
</table>


<!-- Bootstrap modal -->
  <!-- <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <textarea id="jsonText"></textarea> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Book Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Book ISBN</label>
              <div class="col-md-9">
                <input name="book_isbn" placeholder="Book ISBN" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Book Title</label>
              <div class="col-md-9">
                <input name="book_title" placeholder="Book_title" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Book Author</label>
              <div class="col-md-9">
                                <input name="book_author" placeholder="Book Author" class="form-control" type="text">

              </div>
            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Book Category</label>
                            <div class="col-md-9">
                                <input name="book_category" placeholder="Book Category" class="form-control" type="text">

                            </div>
                        </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div> -->
        <!-- </div> --><!-- /.modal-content -->
      <!-- </div> --><!-- /.modal-dialog -->
    <!-- </div> --><!-- /.modal -->
  <!-- End Bootstrap modal -->


<!-- // modal2 -->
<!-- <div id="download_modal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="dialog-download">
            <br/><br/><h2>Your Download is ready.</h2>
            <hr/>
             Your Download link is here<a id="download_link" target="_blank"> </a>
            <br/>
        </div>
     </div>
</div> -->


<div id="modal_form" class="modal fade">
    
</div>




<script type="text/javascript" language="javascript" >



var editor; // use a global for the submit and return data rendering in the examples
    $(document).ready(function() {
        /*var dataTable = $('#user-grid').DataTable( {*/
            // $("#modal_form").html("");
    // editor = new $.fn.dataTable.Editor( {
       
       
    

    //         // "processing": true,
    //         // "serverSide": true,
    //         "ajax":"<?php echo site_url('DisplayUsers/viewAppUsers');?>",
    //         // "columns": [
    //         //  { "data": "registered_user_name" },
    //         //  { "data": "password_value" },
    //         //  { "data": "age_val" },
    //         //  { "data": "email_id_val" },
    //         //  { "data": "gender_data" }
    //         //  /*{ "data": "state_id" },
    //         //  { "data": "city_id" }*/
    //         // ],
    //         "table": "#user-grid",
    //         "fields": [ {
    //             "label": "User Name:",
    //             "name": "registered_user_name"
    //         }, {
    //             "label": "Password:",
    //             "name": "password_value"
    //         }, {
    //             "label": "Position:",
    //             "name": "age_val"
    //         }, {
    //             "label": "Office:",
    //             "name": "email_id_val"
    //         }, {
    //             "label": "Extension:",
    //             "name": "gender_data"
    //         }
    //         ]
    //     } );



        var jqDataTable = $('#user-grid').DataTable( {
            "processing": true,
            // "serverSide": true,
            "bRetrieve" : true,
            "datatye":"json",
            "ajax":{
                "url" :"<?php echo site_url('DisplayUsers/viewAppUsers');?>", // json datasource
                "dataSrc": "",
                "aaSorting": [[1,'desc']],
                "bAutoWidth": false,
                "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0 ] },
                { "bSearchable": false, "aTargets": [ 0 ] }],
                "type": "POST",  // method  , by default get
                error: function(){  // error handling
                    $(".user-grid-error").html("");
                    $("#user-grid").append('<tbody class="user-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#user-grid_processing").css("display","none");
 
                }
            },
            success: function (responseReceived) {
                    alert(responseReceived);
                    $("#jsonText").append(responseReceived);//Not working

            },
            "columns": [
           /* { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.registered_user_name+' '+data.password_value;
            } },*/
            	{ "data": "registered_user_name" },
            	{ "data": "password_value" },
            	{ "data": "age_val" },
            	{ "data": "email_id_val" },
            	{ "data": "gender_data" },
                { "data": "registered_user_id",
                  /*"name": "registered_user_id",*/

                   /*"data": "registered_user_id",*/
                  "visible":false
                }, 
                {
                data: null,
                className: "center",
                defaultContent: '<a href="" class="editor_edit" ><span style="color:orange;">Edit</span></a> / <a href="" class="editor_remove"><span style="color:red;">Delete</span></a>'

                }
                	/*{ "data": "state_id" },
                	{ "data": "city_id" }*/
                ]
            } );

/*var jqDataTable= $('#example').DataTable( {...
{ data: "position", "visible":false},
..} );*/



         // Edit record
            $('#user-grid').on('click', 'a.editor_edit', function (e) {
                e.preventDefault();

                var registrationID = jqDataTable.row( $(this).parents('tr') ).data()["registered_user_id"];
    
            // alert(registrationID+"<ID");        
            $.ajax({
                url: "<?php echo site_url('AppUsers/getSingleUserRow');?>",
                // url: "..",
                type : "POST",
                data : {registrationIdSingle:registrationID},

                success : function(singleRowData){
/*                    alert(singleRowData); testing*/
                    $("#modal_form").html(singleRowData);
                }
 
            });

                $(this).parents('tr').addClass('selected');
                        // jqDataTable.row('.selected').draw( true );

                // $(this).hide();

                    /*    e.preventDefault();
                        $.ajax({
                            type : 'POST',
                            data: $("#softwareform").serialize(),
                            url : 'url',
                            success : function(data){
                               
                            }
                        });
                        return false; check data*/
                 // $("#download_link").html(data);
                $("#download_modal").modal("show");
                $('#modal_form').modal('show');

            } );

// var currentSource ="<?php echo site_url('DisplayUsers/viewAppUsers');?>";

 /*$('#user-grid').on('click', function (e) {

                // jqDataTable.dataTable( { bRetrieve : true } );
                // jqDataTable.fnDraw();
                jqDataTable.ajax.url(currentSource).load();
 //testing worked currentSource
               // jqDataTable.fixedColumns().update();
                // $(this).hide();
});*/
            // Delete a record
            $('#user-grid').on('click', 'a.editor_remove', function (e) {
                e.preventDefault();
                var ID_DeleteRecord = jqDataTable.row( $(this).parents('tr') ).data()["registered_user_id"];                
                $(this).parents('tr').addClass('selected');


                    var approveAction = confirm("Are you sure you want to DELETE this User's details ?");
                    if (approveAction) {

                        //Logic to delete the item
                        
                        jqDataTable.row('.selected').remove().draw( false );
                        // alert(ID_DeleteRecord);

                $.ajax({
                        url:"<?php echo site_url('CRUD_Users/deleteSingleUserRow');?>",
                        method:"POST",
                        data: {DeleteRecord_ID : ID_DeleteRecord},
                        success: function(result){
                        
                        // window.location.replace("<?php echo site_url('DisplayUsers');?>") No need its finished
                    }

                });
                    }
                    else {
                        alert("You pressed Cancel!");
                         $(this).parents('tr').removeClass('selected');
                    }

/*                user_ID = $('#email_id').attr("edit")
                

                NameVal_user = $('#user_Name').val(); 
                PassVal_user = $('#password').val(); 
                EmailVal_user = $('#email_id').val(); 
                StateVal_user = $('#state_id').val(); 
                CityVal_user = $('#city_id').val(); */




            } );






// $('#user-grid').on('click', 'td', function (e) {
// //     var registrationID = jqDataTable.row( $(this).parents('tr') ).data()["registered_user_id"];
    
// //             // alert(registrationID+"<ID");        
// //             $.ajax({
// //                 url: "<?php echo site_url('AppUsers/getSingleUserRow');?>",
// //                 // url: "..",
// //                 type : "POST",
// //                 data : {registrationIdSingle:registrationID},

// //                 success : function(singleRowData){
// // /*                    alert(singleRowData); testing*/
// //                     $("#modal_form").html(singleRowData);
// //                 }
 
// //             });

//     // alert(rowIdData);
// } ); ******added in $('#user-grid').on('click', 'a.editor_edit'

/* var user_NameVal = $("#user_Name").val(); 
        // Submit Edited record
            $('#btn_save').on('click', function () {
                
                $(this).hide();
               

                alert("user_NameVal");*/

                // $(this).hide();
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


/*            } );*/


// $("#user-grid").fnGetPosition( document.getElementById("3") ) ;

   /*     // alert (jqDataTable);
        jqDataTable.$('td').click( function () {
    var sData = jqDataTable.fnGetData( this );
    alert( 'The cell clicked on had the value of '+sData );
});*/

/*$('#user-grid').on( 'click', 'td', function () {
    alert( table.cell( this ).data() );
} );*/




            

    } );
</script>