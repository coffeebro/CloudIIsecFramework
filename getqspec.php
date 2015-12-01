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
	
	//output stage numbers
	$q = intval($_GET['q']);
	//$stages = array();
	//comment
	$info = array();
	$stages = 3;
	echo '<table style="width:600px">
	<tr>
	<th>Property / Stage #</th>';
	for($i = 1; $i <= $stages; $i++)
			{
				echo "<th>".$i."</th>";
			}
	echo '</tr>';
	if($q == 1) //populate form feilds
	{
		//loop stages and radio boxes
		echo '<tr>
			<td>AC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][0]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][0]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][0]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>AU</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][1]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][1]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][1]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>CA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][2]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][2]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][2]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>IA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][3]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][3]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][3]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>SA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][4]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][4]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][4]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>SC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][5]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][5]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][5]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>SI</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][6]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][6]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][6]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>AT</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][7]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][7]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][7]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>CM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][8]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][8]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][8]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>CP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][9]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][9]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][9]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>IR</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][10]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][10]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][10]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>MA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][11]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][11]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][11]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>MP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][12]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][12]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][12]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>PE</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][13]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][13]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][13]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>PL</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][14]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][14]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][14]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>PM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][15]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][15]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][15]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>PS</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][16]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][16]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][16]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>
		<tr>
			<td>RA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td>
						<form style="margin-top: 1em;">
							<div id="radioset">
								<input type="radio" id="radio1" name="stage[i][17]" value="low" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio1">Low</label>
								<input type="radio" id="radio2" name="stage[i][17]" value="medium" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio2">Medium</label>
								<input type="radio" id="radio3" name="stage[i][17]" value="high" class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><label for="radio3">High</label>
							</div>
						</form>
					</td>';
			}
		echo '</tr>';
		//make button to submit to server
		echo '</table>
		<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href=""><span class="ui-button-text">Add Sspec</span></button>';
	}else //get workflow information from DB
	{
		echo '<tr>
			<td>AC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AU</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SC</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>SI</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>AT</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>CP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>IR</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>MP</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PE</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PL</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PM</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>PS</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>
		<tr>
			<td>RA</td>';
			for($i = 1; $i <= $stages; $i++)
			{
				echo '<td></td>';
			}
		echo '</tr>';
		echo "</table>";
	}
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