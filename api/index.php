>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-color: #2C3E50;
            --container-bg-color: #ECF0F1;
            --text-color: #323f3f;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: var(--bg-color);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 0;

            max-width: 500px;
            width: 100%;

            margin: 0 auto;

            background-color: var(--container-bg-color);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 5px;
            width: 80%;
        }

        p, label, h1 {
            color: var(--text-color);
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;

        }

        input {
            outline: none;
            border: 1px solid var(--text-color);
            padding: 2px 5px;
        }

        p {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <h1>Password Generator</h1>
            <form method="post">
                <label for="lenght">Password length:</label>
                <input type="text" placeholder="12" name="lenght">
            </form>
            <p>
                <?php 
                    include 'password.php';

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $lenght = $_POST["lenght"];

                        $randomPassword = generatePassword($lenght);
                        echo $randomPassword; 
                    }
                ?>
            </p>
        </div>
    </main>
</body>
</html>