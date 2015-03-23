<html>
<head>
	<title>Pittsford Panthers Robotics Team Scouting Website</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<article>
		<h1 style="color: #1e208d">Match Scouting</h1>
	</article>
	<article>
		<?php
		$evt = $_POST['event'];
		$matchno = $_POST['match'];
		if(!file_exists("events/$evt/$matchno/lineup"))
		{
			echo("<span style=\"color: red\">Error: Event $evt match $matchno doesn't have a lineup.</span><br/>");
			$error = "disabled=\"1\"";
		}
		if(!file_exists("events/$evt/$matchno/scouters"))
		{
			file_put_contents("events/$evt/$matchno/scouters", "0", LOCK_EX);
		}
		$scouters = file_get_contents("events/$evt/$matchno/scouters");
		$currentbot = preg_split("~[\\s]~", file_get_contents("events/$evt/$matchno/lineup"))[$scouters%6];
		file_put_contents("events/$evt/$matchno/scouters", (intval($scouters)+1).'', LOCK_EX);
		?>
		Team Number: <input disabled="1" value="<?php echo($currentbot); ?>"/>
		Alliance: <input disabled="1" value="<?php echo($scouters%6 > 2 ? "Blue" : "Red"); ?>" style="color: <?php echo($scouters%6 > 2 ? "blue" : "red"); ?>"/>
		Match Number: <input disabled="1" value="<?php echo($matchno); ?>"/>
		<br/><br/>
		<form action="submit.php" method="POST" style="text-align: left; padding-left: 2%">
			<input hidden="1" value="<?php echo($_POST['num']); ?>" name="number"/>
			<input hidden="1" value="<?php echo($_POST['name']); ?>" name="name"/>
			<input hidden="1" value="<?php echo($evt); ?>" name="event"/>
			<input hidden="1" value="<?php echo($currentbot); ?>" name="bot"/>
			<input hidden="1" value="<?php echo($scouters%6 > 2 ? "Blue" : "Red"); ?>" name="alliance"/>
			<input hidden="1" value="<?php echo($matchno); ?>" name="match"/>
			<table>
				<tr><td><h3>Autonomous</h3></td></tr>
				<tr><td><table class="subtable">
					<tr><td><h4>Moved Into Zone</h4></td></tr>
					<tr><td><table class="subsubtable">
						<tr><th>Robot</th><th>Tote</th><th>Tote Stack</th><th>Container</th></tr>
						<tr><td><input type="checkbox" name="ar"/></td><td><input type="checkbox" name="at"/></td><td><input type="checkbox" name="as"/></td><td><input type="checkbox" name="ac"/></td></tr>
					</table></td></tr>
				</table></td></tr>
				<tr><td><h3>General</h3></td></tr>
				<tr><td><table class="subtable">
					<tr><td><h4>Can Stack on Level</h4></td><td><h4>Litter</h4></td></tr>
					<tr><td><table class="subsubtable">
						<tr><th>(Include All Stackable Levels)</th></tr>
						<tr><td>1<input type="checkbox" name="l1" indeterminate/> 2<input type="checkbox" name="l2"/> 3<input type="checkbox" name="l3"/> 4<input type="checkbox" name="l4"/> 5<input type="checkbox" name="l5"/> 6<input type="checkbox" name="l6"/></td></tr>
					</table></td>
					<td><table class="subsubtable">
						<tr><th>Can Push</th><th>Can Pick Up</th><th>Can Place In Container</th><th>Human Player Can Place In Container</th></tr>
						<tr><td><input type="checkbox" name="pl"/></td><td><input type="checkbox" name="pul"/></td><td><input type="checkbox" name="plic"/></td><td><input type="checkbox" name="hpplic"/></td></tr>
					</td></table></tr>
				</table></td></tr>
				<tr><td><table class="subtable">
					<tr><td><h4>Fouls</h4></td><td><h4>Totes</h4></td></tr>
					<tr><td><table class="subsubtable">
						<tr><th>Fouls</th><th>Technical Fouls</th></tr>
						<tr><td><input type="number" name="fouls" value="0" min="0"/></td><td><input type="number" name="tfouls" value="0" min="0"/></td></tr>
					</table></td>
					<td><table class="subsubtable">
						<tr><th>From Center</th><th>From Station</th></tr>
						<tr><td><input type="number" name="tfc" value="0" min="0"/></td><td><input type="number" name="tfs" value="0" min="0"/></td></tr>
					</table></td></tr>
				</table></td></tr>
				<tr><td><table class="subtable">
					<tr><td><h4>Other</h4></td></tr>
					<tr><td><table class="subsubtable">
						<tr><th>Can Flip Totes</th><th>Can Traverse Platform</th><th>Can Stack Sideways Containers</th><th>Position</th></tr>
						<tr><td><input type="checkbox" name="cft"/></td><td><input type="checkbox" name="ctp"/></td><td><input type="checkbox" name="cssc"/></td><td>1<input type="radio" name="pos" value="1" checked/> 2<input type="radio" name="pos" value="2"/> 3<input type="radio" name="pos" value="2"/></td></tr>
					</table></td></tr>
				</table></td></tr>
				<tr><td><table class="subtable" style="width: 100%; padding-right: 10%">
					<tr><td><h4>Comments</h4></td></tr>
					<tr><td style="padding-left: 20pt"><textarea rows="5" name="comments"></textarea></td></tr>
					<tr><td style="padding-left: 20pt"><input type="submit" value="Submit Scouting Data" <?php echo($error); ?>/></td></tr>
				</table></td></tr>
			</table>
		</form>
	</article>
</body>
</html>
