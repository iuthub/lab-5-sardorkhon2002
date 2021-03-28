<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name=isset($_POST["name"]) ? $_POST["name"] : "";
		$section=isset($_POST["section"]) ? $_POST["section"] : "";
		$card=isset($_POST["card"]) ? $_POST["card"] : "";
		$ctype=isset($_POST["ctype"]) ? $_POST["ctype"] : "";
	}
	$valid=true;

	if (!($_POST["name"] || $_POST["name"] === NULL)==NULL) {
		$valid=false;
	}
	if (!($_POST["section"] || $_POST["section"] === NULL)==NULL) {
		$valid=false;
	}
	if (!($_POST["card"] || $_POST["card"] === NULL)==NULL) {
		$valid=false;
	}
	if (!($_POST["ctype"] || $_POST["ctype"] === NULL)==NULL) {
		$valid=false;
	}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<?php 

		$name = $_POST['name'];
		$section = $_POST['section'];
		$credit = $_POST['card'];
		$ctype = $_POST['ctype'];


		file_put_contents("sucker.txt", file_get_contents("sucker.txt")."$name;$section;$credit;$ctype\n");

		?>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?=$name ?></dd>

			<dt>Section</dt>
			<dd><?=$section ?></dd>

			<dt>Credit Card</dt>
			<dd><?=$credit . "($ctype)" ?></dd>
		</dl>


		<p>Here are all the suckers who have submitted here:</p>
		<pre>
			<?php echo file_get_contents("sucker.txt"); ?>
		</pre>
	</body>
</html>