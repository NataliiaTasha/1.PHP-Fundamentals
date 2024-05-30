

<?php
// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array (
    0 => "dusty",
    1 => "messy",
    2 => "clean",
    3 => "sterile"
);

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[1]; 

if( $room_filthiness == "dusty"){
	echo "<br>The room is dusty, let's clean it up!";
} else if( $room_filthiness == "messy" ) {
	echo "<br>Yuk, the room is disgusting! Let's clean it up !";
} else if ( $room_filthiness == "clean") {
	echo "<br>Nothing to do, room is neat.";
} else {
    echo "<br>The room is sterile, that's nothing to do.";
}
// switch($room_filthiness) {
// 	case "dusty" : echo "<br>The room is dusty, let's clean it up!";
// 	break;
// 	case "sterile"  : echo "<br>The room is sterile, that's nothing to do.";
// 	break;
// 	default : break;
// }

// 2. "Different greetings according to time" Exercise

$now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)
echo $now;
$now_number = str_replace(":", "", $now);//to compare strins as numbers
// Test the value of $now and display the right message according to the specifications.
if( $now_number >= "0500" AND $now <= "0900"){
    echo "<br>Good morning!";
} else if ($now_number >= "0901" AND $now_number <= "1200") {
	echo "<br>Good day!";
} else if ($now_number >= "1201" AND $now_number <= "1600") {
	echo "<br>Good afternoon!";
} else if ($now_number >= "1601" AND $now_number <= "2100") {
	echo "<br>Good evening!";
} else {
	echo "<br>Good night!";
}

// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'])){
	// Form processing
	$age = $_GET['age'];

	if ($age < 12) {
		echo "<p>Hello kiddo!</p>";
	} else if ($age >= 12 AND $age <= 18) {
		echo "<p>Hello Teenager!</p>";
	} else if ($age >= 18 AND $age <= 115) {
		echo "<p>Hello Adult!</p>";
	} else {
		echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you?</p>";
	}
}
?>

<form method="get" action="">
	<label for="age">Please type your age:</label>
	<input type="number" name="age" min = "0">
	<input type="submit" name="submit" value="Greet me now">
</form>

