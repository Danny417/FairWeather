<html>
	<head>
		<title>test</title>
	</head>
	<body>
		<?php
			print "page is loaded<br>";
			foreach($query as $row) {
				print $row->id;
				print $row->name;
				print $row->email;
				print "<br>";
			}
		?>
	</body>
</html>