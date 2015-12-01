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
echo '<h2 class="demoHeaders">Workflow(s)</h2>
     <select id="application menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadDoc(this.value)">
		<option value="" selected="selected">Select a workflow</option>
		<option value="1">workflow1</option>
		<option value="2">workflow2</option>
		<option value="3">workflow3</option>
	</select>';
?>
</body>
</html>