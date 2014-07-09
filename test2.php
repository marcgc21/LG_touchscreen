<!DOCTYPE html>
<html>
<head>
	<title>Arduino Web</title>
	<script>
		function GetSwitchState()
		{
			nocache= "&nocache=" + Math.random() *10000;
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(this.readyState == 4){
					if(this.status==20){
						if(this.responseText != null){
							document.getElementById("switch_txt").innerHTML = this.responseText;
						}
					}
				}
			}
			request.open("GET", "ajax_switch" + nocache, true);
			request.send(null);
			setTimeout('GetSwitchState()',1000);
		}
	</script>
</head>
<body onload="GetSwitchState()">
	<h1>Arduino AJAX Switch Status </h1>
	<p id="switch_txt">Switch state: Not requested...</p>
</body>
</html>
