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
                <label for="length">Password length:</label>
                <input type="text" placeholder="12" name="length" id="length">
                <button type="submit">Submit</button>
            </form>
            <p>
                <?php
                function generatePassword($length)
                {
                    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ!@#$%^&*()_-+=";
                    $password = "";

                    if ($length < 8) {
                        return "Password must be longer than 8 characters.";
                    } elseif ($length > 32) {
                        return "The maximum password length is 32 characters.";
                    } else {
                        for ($i = 0; $i < $length; $i++) {
                            $password .= $chars[rand(0, strlen($chars) - 1)];
                        }
                        return $password;
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $length = $_POST["length"];
                    echo generatePassword($length);
                }
                ?>
            </p>
        </div>
    </main>
</body>

</html>