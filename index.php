<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!-- the above code was borrowed from the in class/notes examples for PHP-->

<!DOCTYPE html>
<html>
<title>"44 Bits of Entropy" password generator</title>
<head>
</head>

<style type="text/css">
	body {
		text-align: center;
	}
	table {
		width: 100%;
		height: 60px;
		border-collapse: collapse;
		border: 1px solid black;
		text-align: center;
    }
    td {
		width: 25%;
		height: 60px;
		text-align: center;
    }
</style>


<body>

	<?php require 'logic.php';?>

	<h1>"44 Bits of Entropy" password generator*<br></h1>
	<h3>
		The standard password format of replacing characters in a word with:<br>
		numbers...<br>
		or special characters...<br>
		upper and lower case letters...<br>
		is actually relatively easy for a computer to guess.<br>
		A better method is to use a random phrase of multiple words,<br>
		and include a numer or character if needed.<br>
		The form below will help you generate an easy to remember, but very secure, password.<br>
	</h3>
	<pre>
    <?php print_r($_POST); ?>
    </pre>
	<pre>
    <?php print_r($_GET); ?>
    </pre>
		<pre>
    <?php print_r($passWord); ?>
    </pre>
	<table>
		<tr>
			<td><?php echo implode($passWord);?></td>
		<!--
			<td><?php echo $prep_list[array_rand($prep_list)];?></td>
			<td><?php echo $verb_list[array_rand($verb_list)];?></td>
			<td><?php echo $adj_list[array_rand($adj_list)];?></td>
			<td><?php echo $noun_list[array_rand($noun_list)];?></td>
			<td><?php echo $strARR[0];?></td>
			<td><?php echo $strARR[1];?></td>
			<td><?php echo $strARR[2];?></td>
			<td><?php echo $strARR[3];?></td>
		-->
		</tr>
	</table>
	<br>
	<br>
	<form method='GET' action='index.php'>
	    How many words can you use?<br>
	    <input type='text' name='wr_total'><br>
	    <input type='checkbox' name='inc_num'>Include a number?<br>
		<input type='checkbox' name='inc_spchr'>Include a special character?<br>
	    <input type='submit' value='Generate Password'><br>
	</form>
	
		<br>The web comic xkcd has a great explanation of how this works:
	<div><a href="https://xkcd.com/936/">
		<img src="https://imgs.xkcd.com/comics/password_strength.png" width="40%">
		</a>
	</div>
	
	<br>*for the record,  I totally stole that title from the xkcd comic
</body>

</html>
