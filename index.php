<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="tilde.team unix group">
		<meta name="author" content="khuxkm">
		<meta name="theme-color" content="#00cc00">
		<title>flash game collection</title>
		<link rel="stylesheet" type="text/css" href="https://tilde.team/css/hacker.css">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1><strong>flash game collection</strong></h1>
			</div>

			<p>This is a collection of Flash games. The games included are:</p>

			<ul>
<?php
	$FILE_HOST = "https://github.com/MineRobber9000/flashgames";
	foreach (glob("games/*.swf") as $file) {
		$name =  preg_replace("/([a-z0-9])([A-Z0-9])/","$1 $2",basename($file,".swf"));
		echo "\t\t\t\t<li>{$name}</li>".PHP_EOL;
	}
?>
			</ul>

			<p>Get it <a href="./games.zip">here!</p>
			<p>Suggest games/add games <a href="<?=$FILE_HOST?>">here!</a></p>
		</div>
	</body>
</html>

