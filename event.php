<html>
<head>
	<title>Processing...</title>
	<!--<script>
		window.onload = function()
		{
			window.location="index.php";
		}
	</script>-->
</head>
<body>
	Processing...
	<?php
		#from stackoverflow
		function curl_get_contents($url)
		{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);

		$data = curl_exec($ch);
		curl_close($ch);

		return $data;
		}

		flush();
		ob_flush();
		mkdir("events");
		mkdir("events/".$_POST["evtcode"]);
		file_put_contents("events/".$_POST["evtcode"]."/name", $_POST["evtname"], LOCK_EX);
		$teamdata = curl_get_contents("http://www.thebluealliance.com/api/v2/event/2014onwi/matches?X-TBA-App-Id=frc3181:CrowdScouting:git");
		$teams = [];
		preg_match_all("~frc([0-9]+)~m", $teamdata, $teams);
		for($i = 1; $i <= count($teams[1])/6; ++$i)
		{
			$matchstring = "";
			for($j = 0; $j < 6; ++$j)
			{
				$matchstring .= $teams[1][$i*6+$j-6]."\n";
			}
			mkdir("events/".$_POST["evtcode"]."/$i");
			file_put_contents("events/".$_POST["evtcode"]."/$i/lineup", $matchstring, LOCK_EX);
		}
		file_put_contents("scouters", $_POST["name"]."\n".$_POST["teamno"]."\n", LOCK_EX | FILE_APPEND);
		file_put_contents("events/".$_POST["evtcode"]."/edited", $_POST["name"]." ".$_POST["teamno"]."\n", LOCK_EX | FILE_APPEND);
	?>
</body>
</html>
