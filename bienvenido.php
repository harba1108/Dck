<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Juego de adivinanza</title>
    <style>
        body {
            background-image: url("game.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: red;
            font-size: 36px;
        }

        p {
            color: black;
            font-size: 24px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Juego de adivinanza</h1>

    <p style="color: black;">Escoge un número entre 1 y 10:</p>
    <form method="POST">
        <input type="number" name="guess" min="1" max="10" required>
        <input type="submit" value="Adivinar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $guess = $_POST['guess'];
            $number = rand(1, 10);

            if ($guess == $number) {
                echo '<p>¡Felicidades, adivinaste el número!</p>';
            } else {
                echo '<p>Lo siento, el número era ' . $number . '</p>';
            }
        }
    ?>

    <!-- Botón de cerrar sesión -->
    <a href="login.php" class="button">Cerrar sesión</a>
</body>
</html>
