<?php 
if (isset($_GET['note']) and isset($_GET['form']) and $_GET['form'] == 'school_grades') {

    $note = $_GET['note']; 

    switch ($note) {
        case '1' :
            echo "<h3>This work is really bad. What a dumb kid!</h3>";
            break;
        case '2' :
            echo "<h3>This work is really bad. What a dumb kid!</h3>";
            break;    
        case '3' :
            echo "<h3>This work is really bad. What a dumb kid!</h3>";
            break;
        case '4' :
            echo "<h3>This work is really bad. What a dumb kid!</h3>";
            break;
        case '5' :
            echo "<h3>This is not sufficient. More studying is required.</h3>";  
            break;
        case '6' :
            echo "<h3>This is not sufficient. More studying is required.</h3>";;
            break;
        case '7' :
            echo "<h3>This is not sufficient. More studying is required.</h3>";
            break;
        case '8' : 
            echo "<h3>This is not sufficient. More studying is required.</h3>";
            break;
        case '9' :
            echo "<h3>This is not sufficient. More studying is required.</h3>";
            break;
        case '10' :
            echo "<h3>Barely enough</h3>";
            break;
        case '11' :
            echo "<h3>Not bad!</h3>";
            break;
        case '12' :
            echo "<h3>Not bad!</h3>";
            break;
        case '13' :
            echo "<h3>Not bad!</h3>";
            break;  
        case '14' :
            echo "<h3>Not bad!</h3>";
            break;   
        case '15' :
            echo "<h3>Bravo, bravissimo!</h3>";  
            break;  
        case '16' :
            echo "<h3>Bravo, bravissimo!</h3>";  
            break; 
        case '17' :
            echo "<h3>Bravo, bravissimo!</h3>";  
            break;
        case '18' :
            echo "<h3>Bravo, bravissimo!</h3>";  
            break;
        case '19' :
            echo "<h3>Too good to be true : confront the cheater!</h3>";  
            break; 
        case '20' :
            echo "<h3>Too good to be true : confront the cheater!</h3>";  
            break;        
    }

}
?>
<form method="get" action="">
	<input type="hidden" name="form" value="school_grades">

	<legend>Student's note</legend>
	<input type="number" name="note" min="0" max="20">
	<input type="submit" name="submit">

</form>