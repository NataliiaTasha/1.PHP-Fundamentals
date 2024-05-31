<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unikorn</title>
</head>
<body>
    <form method="post" action="unicorn.php">

    <legend>Are you a human, a cat or a unicorn ?</legend><br>

	<input type="radio" name="identity" value = "human">
	<label for="identity">Human</label>
    <input type="radio" name="identity" value = "cat">
	<label for="identity">Cat</label>
    <input type="radio" name="identity" value = "unicorn">
	<label for="identity">Unicorn</label><br>
    <input type="submit">
    </form>

    <?php
    if (isset($_POST['identity'])) {

        $identity = $_POST['identity'];

        $imgSrc = ($identity == 'human') ? 'https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExdXpmb3h6cmZreTV0cHdyNzNoa256dWppZTgzYWRjbDA3M292OGFsOSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gRfdDYd1MsDFS/giphy.gif' : (($identity == 'cat') ? 'https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExcDBvanF2N21zdnVubnk1OXM3Nnp2amVpeDV4YjY4MTM1aGoxeXJheiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/LHZyixOnHwDDy/giphy.gif' : (($identity == 'unicorn') ? 'https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExd3U5NXVhMWJlcWEzeTgwd3BzZW5pdHBpcXdxZnpveG5teHV2d2N1YyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/HULqwwF5tWKznstIEE/giphy.gif' : ''));
            echo '<img src="' . htmlspecialchars($imgSrc) . '" alt="' . htmlspecialchars($identity) . '">';
    }
    ?>

</body>
</html>