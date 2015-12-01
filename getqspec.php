<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
echo '<h2 class="demoHeaders">Qspecs(s)</h2>
     <select id="qspec_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="">
		<option value="" selected="selected">Select a Qspec</option>
		<option value="1">Create a Qspec</option>
		<option value="1">Qspec1</option>
		<option value="2">Qspec2</option>
		<option value="3">Qspec3</option>
	</select>';
?>
</body>
</html>