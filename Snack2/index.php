<?php
    $mail = isset($_GET['mail']) ? $_GET['mail'] :'';
    $name = isset($_GET['name']) ? $_GET['name'] :'';
    $age = isset($_GET['age']) ? $_GET['age'] :'';

    if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];
		$chiocciola = strpos($mail, '@');
		if ($chiocciola && strpos($mail, '.', $chiocciola)) {
			$message = '- Accesso riuscito';
		} else {
			$message = '- Accesso negato';
		}
    };
    if (isset($_GET['name'])) {
		$name = $_GET['name'];
		if (strlen($name) > 3) {
			$message_name = '- Accesso riuscito';
		} else {
			$message_name = '- Accesso negato';
		}
    };
    if (isset($_GET['age'])) {
		$age = $_GET['age'];
		if (is_numeric($age)) {
			$message_age = '- Accesso riuscito';
		} else {
			$message_age = '- Accesso negato';
		}
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
<form action="" method="get">
		<label for="mail">Email:</label>
		<input type="text" name="mail" id="mail" value="<?= $mail ?>">

        <label for="name">Name:</label>
		<input type="text" name="name" id="name" value="<?= $name ?>">

        <label for="ege">Age:</label>
		<input type="text" name="age" id="age" value="<?= $age ?>">
 
		<button>invio</button>

        <h3><?= $message ?></h3>
        <h3><?= $message_name ?></h3>
        <h3><?= $message_age ?></h3>
        <h3><?= $last_message ?></h3>
	</form>
</body>
</html>