<html>
<head>
	<title>Pittsford Panthers Robotics Team Scouting Website</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<article>
		<img src="http://pittsfordrobotics.org/Images/PantherBanner1.png"/>
	</article>
	<article>
		<h1 class="scouting">Match Scouting</h1>
		<br/>
		<form action="scout.php" method="POST" class="login">
			Your Team Number:<input type="number" name="num" value="1" min="1"/>
			<br/>
			Your Name:<input name="name"/>
			<br/>
			Match Number:<input type="number" name="match" value="1" min="1"/>
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
		</form>
	</article>
</body>
</html>
