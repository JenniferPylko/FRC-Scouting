<?php
if(preg_match("~".$_POST["name"]."\n".$_POST["scouterteam"]."~",file_get_contents("scouters")))
{
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment; filename=\"".$_POST["team"]."\".csv");
	echo(file_get_contents("robots/".$_POST["team"].".csv"));
}
else
{
?>
<html>
<head>
	<title>Access Denied</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<article>
		<h1 style="color: #1e208d">Match Scouting</h1>
	</article>
	<article>
	In the spirit of coopertition and gracious professionalism, please submit some scouting results before trying to view scouting data.
	</article>
	<article>
		<a style="text-decoration: none" href="https://github.com/brpylko/FRC-Scouting">
			<img style="height: 5%" src="GitHub-Mark.png"/>
		</a>
		<a style="text-decoration: none" href="https://www.gnu.org/licenses/gpl.html">
			<img style="height: 5%" src="GPL3.jpg"/>
		</a>
		<a style="text-decoration: none" href="http://www3.usfirst.org/roboticsprograms/frc">
			<img style="height: 5%" src="logo-frc.gif"/>
		</a>
	</article>
<body>
</html>
<?php }
