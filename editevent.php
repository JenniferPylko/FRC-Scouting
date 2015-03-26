<html>
<head>
	<title>Create Event</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div style="position: fixed; float: right; right: 15%; width: 9%; height:97%; background: #fff"></div>
	<article class="head">
		<h1 style="color: #1e208d">Create Event</h1>
	</article>
	<article style="padding-top: 40pt; background: #1e208d">
		<form action="event.php" method="POST" style="text-align: right; padding-top: 3%; width: 87%; background: #fff">
			<div style="text-align: right; padding-right: 20%">
				Your Name: <input name="name" required/> Your Team#: <input name="teamno" required/>
				<br/>
				Event Name: <input name="evtname" required/> Event Code: <input name="evtcode" required/>
				<br/>
			</div>
			<?php
				for($i = 0; $i < 150; $i++)
				{
			?>
			<?php echo(($i+1).". ");?><input type="number" min="1" style="color: red" name="<?php echo(0+6*$i);?>"/>
			<input type="number" min="1" style="color: red" name="<?php echo(1+6*$i);?>"/>
			<input type="number" min="1" style="color: red" name="<?php echo(2+6*$i);?>"/>
			<input type="number" min="1" style="color: blue" name="<?php echo(3+6*$i);?>"/>
			<input type="number" min="1" style="color: blue" name="<?php echo(4+6*$i);?>"/>
			<input type="number" min="1" style="color: blue" name="<?php echo(5+6*$i);?>"/>
			<br/>
			<?php
				}
			?>
			<input type="submit" value="Save Event" style="position: fixed; top: 13%; right: 16.5%; text-align: center"/>
		</form>
	</article>
</body>
</html>
