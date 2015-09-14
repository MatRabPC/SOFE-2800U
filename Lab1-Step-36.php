<!DOCTYPE html>
<hr color="darkblue" size="20">
<h1 align="center"> Welcome to UOIT!</h1>
<hr color="darkblue" size="20">
<?php
$xyz = new DateTime("now", new DateTimeZone ('America/Toronto'));
echo $xyz -> format ('m/d/Y, H:i:s');
?>
<hr color="darkblue" size="4">
<form action="datastore.php" method="post">
<p>
<label for="strFirstName">First Name: </label>
<input type="text" name="a" id="strFirstName"></input>
</p>
<p>
<label for="strLastName">Last Name: </label>
<input type="text" name="b" id="strLastName"></input>
</p>
<p>
<label for="strUsername">User Name: </label>
<input type="text" name="c" id="strUsername"></input>
</p>
<p>
<label for="$strPassword">Password: </label>
<input type="password" name="d" id="strPassword"></input>
</p>
<p>
<label for="$strCellNumber">Cell Number: </label>
<input type="numerical" name="e" id="strCellNumber"></input>
</p>
<p>
<input type="submit" value="Register"></p>
</form>
