	<?php
	echo "INCLUDE<br/>"; 
	include ('includeRequireFile.php');

	echo "<hr/>REQUIRE<br/>";
	require ('includeRequireFile.php');

	echo "<br/>End of PHP";
 	?>
<!DOCTYPE html>
<html>
<head>
	<title>Include & Require</title>
</head>
<body>
	<?php include 'includeRequireContent.php'; ?>

</body>
</html>