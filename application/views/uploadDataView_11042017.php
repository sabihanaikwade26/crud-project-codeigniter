<html>
<head>
	<title> Upload Form </title>
</head>
<body>
	<div>
		<?php
		echo validation_errors();
		echo form_open("Welcome/uploadData"); ?>
		<label>File Name:</label>
		<input type="text" placeholder = "Enter File Name here" name="file_name" id="fileNameID" >

		<label>Table Name:</label>
		<input type="text" placeholder = "Enter Table Name here" name="table_name" id="tableNameID" >
		
		<input type="submit" value="Upload">

		<!-- <label> -->
	</div>

</body>
</html>