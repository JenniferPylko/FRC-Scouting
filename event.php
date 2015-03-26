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
		mkdir("events");
		mkdir("events/".$_POST["evtcode"]);
		file_put_contents("events/".$_POST["evtcode"]."/name", $_POST["evtname"], LOCK_EX);
		$i = 905;
		for(; $_POST["$i"] == ""; --$i);
		for($j = 0; $j <= $i/6; ++$j)
		{
			mkdir("events/".$_POST["evtcode"]."/".($j+1));
			file_put_contents("events/".$_POST["evtcode"]."/".($j+1)."/lineup", $_POST[$j*6]."\n".$_POST[$j*6+1]."\n".$_POST[$j*6+2]."\n".$_POST[$j*6+3]."\n".$_POST[$j*6+4]."\n".$_POST[$j*6+5], LOCK_EX);
		}
		file_put_contents("scouters", $_POST["name"]."\n".$_POST["teamno"]."\n", LOCK_EX | FILE_APPEND);
		file_put_contents("events/".$_POST["evtcode"]."/edited", $_POST["name"]." ".$_POST["teamno"]."\n", LOCK_EX | FILE_APPEND);
	?>
</body>
</html>
