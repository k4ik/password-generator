<?php 
    include 'password.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lenght = $_POST["lenght"];

        $randomPassword = generatePassword($lenght);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <main>
        <div class="container">
            <h1>Password Generator</h1>
            <form method="post">
                <label for="lenght">Password length:</label>
                <input type="text" placeholder="12" name="lenght">
            </form>
            <p><?php echo $randomPassword; ?></p>
        </div>
    </main>
</body>
</html>