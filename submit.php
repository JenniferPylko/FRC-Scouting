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
	$robot = $_POST['bot'];
	if(!file_exists("robots/$robot.csv"))
	{
		file_put_contents("robots/$robot.csv","Scouter's Name,Scouter's Team,Event,Match #,Alliance,Position,Robot Moved Into Zone In Autonomous,Robot Moved Tote Into Zone In Autonomous,Robot Stacked Totes In Zone In Autonomous,Robot Moved Container Into Zone In Autonomous,Can Stack On Level 1,Can Stack On Level 2,Can Stack On Level 3,Can Stack On Level 4,Can Stack On Level 5,Can Stack On Level 6,Can Push Litter,Can Pick Up Litter,Can Place Litter In Container,Human Player Can Place Litter In Container,Fouls,Technical Fouls,Can Take Totes From Center, Can Receive Totes From Chute,Can Flip Totes,Can Traverse Scoring Platform,Can Stack Sideways Containers,Comments\n", LOCK_EX);
	}
	file_put_contents("robots/$robot.csv","\"".$_POST['name']."\",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['number'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",preg_replace("~\n~","",file_get_contents("events/".$_POST['event']."/name")).",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['match'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['alliance'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['pos'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['ar']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['at']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['as']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['ac']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l1']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l2']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l3']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l4']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l5']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l6']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['pl']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['pul']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['l1']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['plic']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['hpplic']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['fouls'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",$_POST['tfouls'].",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['tfc']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['tfs']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['cft']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['ctp']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv",(empty($_POST['cssc']) ? "0" : "1").",", LOCK_EX | FILE_APPEND);
	file_put_contents("robots/$robot.csv","\"".$_POST['comments']."\"\n", LOCK_EX | FILE_APPEND);
?>
</body>
</html>