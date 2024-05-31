

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
//echo $now;
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

if (isset($_GET['age']) and isset($_GET['gender']) and isset($_GET['form']) and $_GET['form'] == 'greeting_form'){
	// Form processing
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$english = $_GET['english'];

	if ($age < 12) {
		// echo "<p>Hello kiddo!</p>";
		if ($gender == 'female') {
			//echo "<p>Hello Miss Kiddo!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Girl!</p>";
			} else {
				echo "<p>Aloha Girl!</p>";
			}
		} else {
			//echo "<p>Hello Mr Kiddo!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Boy!</p>";
			} else {
				echo "<p>Aloha Boy!</p>";
			}
		}
	} else if ($age >= 12 AND $age <= 18) {
		if ($gender == 'female') {
			//echo "<p>Hello Miss Teen!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Miss Teen!</p>";
			} else {
				echo "<p>Aloha Miss Teen!</p>";
			}
		} else {
			//echo "<p>Hello Mr Teen!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Mr Teen!</p>";
			} else {
				echo "<p>Aloha Mr Teen!</p>";
			}
		}
		//echo "<p>Hello Teenager!</p>";
	} else if ($age >= 18 AND $age <= 115) {
		//echo "<p>Hello Adult!</p>";
		if ($gender == 'female') {
			//echo "<p>Hello Miss Adult!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Madam!</p>";
			} else {
				echo "<p>Aloha Madam!</p>";
			}
		} else {
			//echo "<p>Hello Mr Adult!</p>";
			if ($english == 'yes') {
				echo "<p>Hello Mister!</p>";
			} else {
				echo "<p>Aloha Mister!</p>";
			}
		}
	} else {
		echo "<p>Wow! Still alive ? Are you a robot, like me ? Can I hug you?</p>";
	}
}

?>

<form method="get" action="">
    <input type="hidden" name = "form" value = "greeting_form">
	<label for="age">Please type your age:</label>
	<input type="number" name="age" min = "0">
	<input type="submit" name="submit" value="Greet me now">
 
	<legend>Please select your gender:</legend>
	<input type="radio" id = "userGender" name="gender" value = "female" >
	<label for="gender">Female</label><br>
	<input type="radio" id = "userGender" name="gender" value = "male" >
	<label for="gender">Male</label>

	<legend>Do you speak English?</legend>
	<input type="radio" name="english" value = "yes">
	<label for="english">Yes</label>
	<input type="radio" name="english" value = "no">
	<label for="english">No</label>
	<br>
</form>	


<?php 
//6. The Girl Soccer team

// if (isset($_GET['player_name']) and isset($_GET['player_age']) and isset($_GET['player_gender']) and isset($_GET['form']) and $_GET['form'] == 'soccer_team_form') {
// 	$firstName = $_GET['player_name'];
// 	$player_age = $_GET['player_age'];
// 	$player_gender = $_GET['player_gender'];

// 	if ($player_age >= 21 and $player_age <= 40 and $player_gender == 'female') {
// 		echo "<br><h3>Welcome to the team, $firstName!</h3>";
// 	} else {
// 		echo "<br>Sorry, you don't fit the criteria";
// 	}
// }

if (isset($_GET['player_name']) and isset($_GET['player_age']) and isset($_GET['player_gender']) and isset($_GET['form']) and $_GET['form'] == 'soccer_team_form') {
	$firstName = $_GET['player_name'];
	$player_age = $_GET['player_age'];
	$player_gender = $_GET['player_gender'];
	$message = "<br><h3>Sorry, you don't fit the criteria</h3>";

	if ($player_age >= 21 and $player_age <= 40 and $player_gender == 'female') {
		$message = "<br><h3>Welcome to the team, $firstName!</h3>";
	}
	echo $message;
}
?>
<!-- 6. The Girl Soccer team -->
<form method = "get" action="">
	<input type="hidden" name="form" value="soccer_team_form">
	
	<legend>Please enter your name:</legend>
	<input type="text" name="player_name">

	<legend>Please enter your age:</legend>
	<input type="number" name="player_age" min = "0">

	<legend>What is your gender?</legend>
	<input type="radio" name="player_gender" value = "female" >
	<label for="gender">Female</label><br>
	<input type="radio" name="player_gender" value = "male" >
	<label for="gender">Male</label><br>
	<input type="submit" name="submit" value="Am I in your team?">

</form>

<!-- "School sucks!" Exercise -->
<form method="get" action="">
	<input type="hidden" name="form" value="school_grades">

	<legend>Student's note</legend>
	<input type="number" name="note" min="0" max="20">
	<input type="submit" name="submit">

</form>

<?php 
if (isset($_GET['note']) and isset($_GET['form']) and $_GET['form'] == 'school_grades') {

    $note = $_GET['note']; 

    if ($note <= 4) {
    	echo "This work is really bad. What a dumb kid!";
    } elseif ($note <= 9) {
    	echo "This is not sufficient. More studying is required.";
    } elseif ($note == 10) {
    	echo "barely enough!";
    } elseif ($note <= 14) {
        echo "Not bad!";
    } elseif ($note <= 18) {
		echo "Bravo, bravissimo!";
	} elseif ($note <= 20) {
    	echo "Too good to be true : confront the cheater!";
    }
}
?>


