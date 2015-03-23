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
			Your Team Number:<input type="number" name="num"/>
			<br/>
			Your Name:<input name="name"/>
			<br/>
			Match Number:<input type="number" name="match"/>
			<br/>
			Event:<select name="event">
				<option value="CODE">Colorado Regional</option>
				<option value="DCWA">Greater DC Regional</option>
				<option value="GADU">Peachtree Regional</option>
				<option value="HIHO">Hawaii Regional</option>
				<option value="NVLV">Las Vegas Regional</option>
				<option value="NYLI">SBPLI Long Island Regional</option>
				<option value="NYRO">Finger Lakes Regional</option>
				<option value="OHCL">Buckeye Regional</option>
				<option value="OKOK">Oklahoma Regional</option>
				<option value="ONNB">North Bay Regional</option>
				<option value="TXLV">Hub City Regional</option>
				<option value="CAVE">Ventura Regional</option>
				<option value="MICEN">FIM District - Centerline Event</option>
				<option value="MIESC">FIM District - Escanaba Event</option>
				<option value="MILIV">FIM District - Livonia Event</option>
				<option value="ORPHI">PNW District - Philomath Event</option>
				<option value="WAAHS">PNW District - Auburn Event</option>
				<option value="CTHAR">NE District - Hartford Event</option>
				<option value="MABOS">NE District - Northeastern University Event</option>
				<option value="NJBRI">MAR District - Bridgewater-Raritan Event</option>
				<option value="PADRE">MAR District - Upper Darby Event</option>
			</select>
			<br/>
			<input type="submit" value="Start Scouting"/> 
		</form>
	</article>
</body>
</html>
