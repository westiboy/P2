<!DOCTYPE html>
<html>
<title>"44 Bits of Entropy" password generator</title>

<style type="text/css">
	body {
		text-align: center;
		background-color: #FFF0D1;
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
    #genpassword{
    	color: #3399FF;
    	font-size: 150%;
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
	<table>
		<tr>
			<td id=genpassword><?php echo implode($passWord);?></td>
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
		<img src="https://imgs.xkcd.com/comics/password_strength.png" width="40" alt="xkcd Comic on 40 bits of entropy passwords">
		</a>
	</div>
	
	<br>*for the record,  I totally stole that title from the xkcd comic
</body>

</html>