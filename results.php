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
<body>
</html>
<?php }
