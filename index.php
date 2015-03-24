<html>
<head>
	<title>Pittsford Panthers Robotics Team Scouting Website</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<article style="border: 3px solid #1e208d;">
		<img src="http://pittsfordrobotics.org/Images/PantherBanner1.png"/>
	</article>
	<article style="border: 3px solid #1e208d;">
		<h1 class="scouting">Match Scouting</h1>
		<br/>
		<table style="width: 100%"><tr><td style="width: 50%">
		<form action="scout.php" method="POST" class="login">
			Your Team Number:<input type="number" name="num" min="1" required/>
			<br/>
			Your Name:<input name="name" required/>
			<br/>
			Match Number:<input type="number" name="match" min="1" required/>
			<br/>
			Event:<select name="event">
				<?php
					$events = array();
					if($handle = opendir("events"))
					{
						while(false !== ($entry = readdir($handle)))
						{
							if(is_dir("events/$entry") && $entry != '.' && $entry != '..')
							{
								$events[] = $entry;
							}
						}
						closedir($handle);
					}
					for($i = 0; $i < count($events); ++$i)
					{
				?>
				<option value="<?php echo($events[$i]); ?>"><?php echo(file_get_contents("events/".$events[$i]."/name")); ?></option>
				<?php
					}
				?>
			</select>
			<br/>
			<input type="submit" value="Start Scouting"/> 
		</form></td>
		<td style="text-align: left; width: 50%">
			Event not listed? <input type="button" onclick="window.location='editevent.php'" value="Create One"/>
			<br/>
				<form action="results.php" method="POST">
				If you've scouted, <input type="submit" value="View Results"/>
				<br/>
				For Team <input type="number" name="team" min="1" required/>
				<br/>
				As <input name="name" required/>
				<br/>
				From Team <input type="number" name="scouterteam" min="1" required/>
			</form>
		</td></tr></table>
	</article>
</body>
</html>
