<form method="get" action="">
<legend>What is your gender?</legend>
	<input type="radio" name="gender" value = "F" >
	<label for="gender">F</label><br>
	<input type="radio" name="gender" value = "M" >
	<label for="gender">M</label><br>
	<input type="submit" name="submit">
</form>


<?php
if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    $hello = ($gender == 'M') ? "Hello Sir!" : "Hello Madam!";
    echo $hello;
}
?>


