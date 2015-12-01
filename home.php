<?php

  include("PHPAuth/Config.php");
  include("PHPAuth/Auth.php");

  $dbh = new PDO("mysql:host=localhost;dbname=phpauth", "root", "");

  $config = new PHPAuth\Config($dbh);
  $auth   = new PHPAuth\Auth($dbh, $config);

  if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();
  }
  
  $uid = $auth->getSessionUID( $_COOKIE[$config->cookie_name] );
  $data = $auth->getUser( $uid );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Federated Security Framework User Homepage</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script>
	function loadWorkflowDoc(str) {
  		if (str=="") {
    		document.getElementById("workflow").innerHTML="";
    		return;
 		} else{
  			if (window.XMLHttpRequest) {
    			// code for IE7+, Firefox, Chrome, Opera, Safari
    			xmlhttp=new XMLHttpRequest();
  			} else { 
  				// code for IE6, IE5
    			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.onreadystatechange = function() {
   				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      				document.getElementById("workflow").innerHTML = xmlhttp.responseText;
    			}
  			};
  		xmlhttp.open("GET", "getworkflow.php?q="+str, true);
  		xmlhttp.send();
		}
	}
	function loadSspecDoc(str) {
  		if (str=="") {
    		document.getElementById("sspec").innerHTML="";
    		return;
 		} else{
  			if (window.XMLHttpRequest) {
    			// code for IE7+, Firefox, Chrome, Opera, Safari
    			xmlhttp=new XMLHttpRequest();
  			} else { 
  				// code for IE6, IE5
    			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.onreadystatechange = function() {
   				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      				document.getElementById("sspec").innerHTML = xmlhttp.responseText;
    			}
  			};
  		xmlhttp.open("GET", "getsspec.php?q="+str, true);
  		xmlhttp.send();
	    }
	}
	function loadQspecDoc(str) {
  		if (str=="") {
    		document.getElementById("qspec").innerHTML="";
    		return;
 		} else{
  			if (window.XMLHttpRequest) {
    			// code for IE7+, Firefox, Chrome, Opera, Safari
    			xmlhttp=new XMLHttpRequest();
  			} else { 
  				// code for IE6, IE5
    			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
  			xmlhttp.onreadystatechange = function() {
   				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      				document.getElementById("qspec").innerHTML = xmlhttp.responseText;
    			}
  			};
  		xmlhttp.open("GET", "getqspec.php?q="+str, true);
  		xmlhttp.send();
		}
	}
</script>
    <style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
  </head>
  <body>
    <!-- page content -->
    <h2 class="demoHeaders"><?php echo "logged in as "; echo $data['email']; ?></h2>
    <button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.location.href='logout.php'"><span class="ui-button-text">Log Out</span></button>
    <!-- select bar -->
	<h2 class="demoHeaders">Applications</h2>
	<!-- loop through available applications for user(stored in DB) -->
	<select id="app_menu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onchange="loadWorkflowDoc(this.value)">
		<option value="" selected="selected">Select an Application</option>
		<option value="1">SoyKB</option>
		<option value="2">stuff</option>
		<option value="3">stuff2</option>
	</select>
	<br>
    <div id="workflow"><b></b></div>
    <div id="sspec"><b></b></div>
    <div id="qspec"><b></b></div>
  </body>
</html>
