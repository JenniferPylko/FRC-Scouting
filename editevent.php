<html>
<head>
	<title>Create Event</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<article>
		<h1 style="color: #1e208d">Create Event</h1>
	</article>
	<article>
		<form action="event.php" method="POST" style="padding-right: 50%; text-align: right">
				Your Name: <input name="name" required/>
				<br/>
				Your Team#: <input type="number" min="1" name="teamno" required/>
				<br/>
				Event Name: <input name="evtname" required/>
				<br/>
				<a href="https://docs.google.com/spreadsheet/ccc?key=0ApRO2Yzh2z01dExFZEdieV9WdTJsZ25HSWI3VUxsWGc">The Blue Alliance</a> Event Code: <input name="evtcode" required/>
				<br/>
			<input type="submit" value="Save Event"/>
		</form>
	</article>
</body>
</html>
