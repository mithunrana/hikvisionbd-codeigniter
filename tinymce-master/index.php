<!DOCTYPE html>
<html>
	<head>
		<title>TinyMCE - Setup</title>
	</head>
	<body>
	    <form id="get-data-form" method="POST">

			<textarea class="tinymce" id="texteditor" name="textvalue"></textarea>
			<input type="submit" name="submit" value="Get Data">

		</form>

		<div id="data-container">
		</div>
		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
		<script type="text/javascript" src="plugin/tinymce/getdata.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
	<?php 
		if(isset($_POST['submit'])){
		 echo $_POST['textvalue'];
		}
	?>
</html>