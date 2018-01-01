<!DOCTYPE html>
<html>
<head>
	<title> Yardsale! </title>
	<?php require_once "content/headIncludes.php" ?>
</head>
<body>
	<main>
  		<header>
  			<h1>Yardsale!</h1>
  			<p>The saying goes "one person's trash is another person's treasure".  The purpose of this site is to connect these two people and facilitate the redistribution of trash and treasure</p>
  		</header>
  		<form action="submitPost.php" method="post">
  			<input type="text" name="item" maxlength="100" value="Enter the name of your item"><br>
  			<textarea name="itemDescription" maxlength="65535" placeholder="Enter a description of your item." required="true"></textarea><br>
  			<input type="submit" name="submit" value="Submit">
  		</form>
  </main>
</body>
</html>