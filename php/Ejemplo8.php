<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎓 Cálculo de Pensión Estudiantil</title>
    <style>
        /* RESET GENERAL */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cinzel', serif;
        }

        /* FONDO GENERAL */
        body {
            background: url("../img/fondo8.jpg") center/cover no-repeat fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 30px 0;
        }

        /* HEADER */
        header {
            background: rgba(15, 15, 15, 0.85);
            border-radius: 20px;
            padding: 25px 20px;
            text-align: center;
            width: 70%;
            max-width: 600px;
            margin-bottom: 30px;
            box-shadow: 0 0 25px rgba(0,0,0,0.7);
            color: #fffacd;
        }

        header h1 {
            font-size: 2rem;
            color: #ffd700;
            text-shadow: 2px 2px 5px #000;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1rem;
            line-height: 1.5;
            text-shadow: 1px 1px 3px #000;
        }

        /* FORMULARIO */
        form {
            background: rgba(0,0,0,0.65);
            border-radius: 20px;
            padding: 30px 25px;
            width: 70%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 25px rgba(0,0,0,0.7);
        }

        label {
            align-self: flex-start;
            font-weight: bold;
            color: #ffec8b;
            margin-bottom: 6px;
            font-size: 1rem;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 14px 12px;
            margin-bottom: 18px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.4);
            background: rgba(0,0,0,0.85);
            color: #fffacd;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #ffd700;
            box-shadow: 0 0 8px #ffd700;
        }

        select {
            color: #fffacd;
        }

        /* BOTONES */
        input[type="submit"],
        .boton-volver {
            padding: 14px 28px;
            border-radius: 12px;
            border: none;
            background-color: #4a7023;
            color: #fffacd;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-shadow: 1px 1px 2px #000;
            margin-top: 10px;
        }

        input[type="submit"]:hover,
        .boton-volver:hover {
            transform: scale(1.08);
            box-shadow: 0 0 15px #ffd700;
            cursor: pointer;
        }

        /* RESULTADO */
        .resultado {
            margin-top: 25px;
            background: rgba(0,0,0,0.65);
            padding: 18px;
            border-radius: 15px;
            width: 100%;
            text-align: left;
            color: #fffacd;
            border: 1px solid rgba(255,255,255,0.25);
            font-size: 1rem;
        }

        .resultado strong {
            color: #ffd700;
            font-weight: bold;
            text-shadow: 1px 1px 3px #000;
        }

        /* CENTRADO */
        body > header,
        body > form {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>🎓 Cálculo de la Pensión del Estudiante</h1>
    <p>Completa el formulario para calcular la pensión según el turno del alumno.<br>
        Los estudiantes del turno <b>mañana</b> tienen un <b>30% de descuento</b>.</p>
</header>

<form method="post" action="">
    <label>Nombre del estudiante:</label>
    <input type="text" name="AL" required placeholder="Ejemplo: Julio Cesar">

    <label>Turno:</label>
    <select name="TU" required>
        <option value="">Seleccione el turno</option>
        <option value="Mañana">Mañana</option>
        <option value="Tarde">Tarde</option>
    </select>

    <label>Pensión base (S/):</label>
    <input type="number" name="PE" required placeholder="Ejemplo: 300">

    <input type="submit" value="Calcular Pensión">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $AL = htmlspecialchars($_POST['AL']);
    $TU = htmlspecialchars($_POST['TU']);
    $PE = floatval($_POST['PE']);
    $NP = ($TU == "Mañana") ? $PE * 0.7 : $PE;

    echo "<div class='resultado'>";
    echo "<p><strong>👩‍🎓 Alumno:</strong> $AL</p>";
    echo "<p><strong>🕘 Turno:</strong> $TU</p>";
    echo "<p><strong>💰 Pensión a pagar:</strong> S/ " . number_format($NP,2) . "</p>";
    echo "</div>";

    echo "<div class='volver'>
            <form method='GET' action='../index.html'>
                <button type='submit' class='boton-volver'>⬅️ Volver al inicio</button>
            </form>
          </div>";
}
?>

</body>
</html>
