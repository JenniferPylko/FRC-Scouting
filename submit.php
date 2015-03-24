<html>
<head>
<title>Processing...</title>
<script>
	window.onload = function()
	{
		window.location="index.php";
	}
</script>
</head>
<body>
Processing...
<?php
	flush();
	ob_flush();
	$robot = $_POST['bot'];
	if(!file_exists("robots/$robot.csv"))
	{
		file_put_contents("robots/$robot.csv","Scouter's Name,Scouter's Team,Event,Match #,Alliance,Position,Robot Moved Into Zone In Autonomous,Robot Moved Tote Into Zone In Autonomous,Robot Stacked Totes In Zone In Autonomous,Robot Moved Container Into Zone In Autonomous,Can Stack On Level 1,Can Stack On Level 2,Can Stack On Level 3,Can Stack On Level 4,Can Stack On Level 5,Can Stack On Level 6,Can Push Litter,Can Pick Up Litter,Can Place Litter In Container,Human Player Can Place Litter In Container,Fouls,Technical Fouls,Can Take Totes From Center, Can Receive Totes From Chute,Can Flip Totes,Can Traverse Scoring Platform,Can Stack Sideways Containers,Comments\n", LOCK_EX);
	}
	$invalid = array();
	$invalid[0] = "~\n~";
	$invalid[1] = "~\,~";
	$invalid[2] = "~\"~";
	$valid = array();
	$valid[0] = " ";
	$valid[1] = ".";
	$valid[2] = "'";
	$csvdata  = preg_replace($invalid, $valid, $_POST['name']).",";
	$csvdata .= $_POST['number'].",";
	$csvdata .= preg_replace($invalid, $valid,file_get_contents("events/".$_POST['event']."/name")).",";
	$csvdata .= $_POST['match'].",";
	$csvdata .= $_POST['alliance'].",";
	$csvdata .= $_POST['pos'].",";
	$csvdata .= (empty($_POST['ar']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['at']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['as']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['ac']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l1']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l2']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l3']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l4']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l5']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l6']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['pl']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['pul']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['l1']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['plic']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['hpplic']) ? "0" : "1").",";
	$csvdata .= $_POST['fouls'].",";
	$csvdata .= $_POST['tfouls'].",";
	$csvdata .= (empty($_POST['tfc']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['tfs']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['cft']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['ctp']) ? "0" : "1").",";
	$csvdata .= (empty($_POST['cssc']) ? "0" : "1").",";
	$csvdata .= preg_replace($invalid, $valid, $_POST['comments'])."\n";
	file_put_contents("robots/$robot.csv", $csvdata, LOCK_EX | FILE_APPEND);
?>
</body>
</html>
