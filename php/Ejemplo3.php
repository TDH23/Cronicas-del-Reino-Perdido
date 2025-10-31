<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página PHP Didáctica</title>

    <style>
/* ===== RESET GENERAL ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* ===== FONDO ===== */
body {
    background: url("../img/fondo3.jpg") center/cover no-repeat fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* ===== CONTENEDOR PRINCIPAL ===== */
.contenedor {
    background: rgba(0, 0, 0, 0.6); /* translúcido negro */
    border: 2px solid rgba(255, 255, 255, 0.4);
    border-radius: 20px;
    padding: 40px 50px;
    width: 400px;
    backdrop-filter: blur(5px);
    box-shadow: 0 0 30px rgba(0,0,0,0.7);
    color: #fff;
    text-align: center;
}

/* ===== TITULOS ===== */
.contenedor h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #f0e68c; /* amarillo medieval suave */
    text-shadow: 1px 1px 4px black;
}

/* ===== FORMULARIO ===== */
form label {
    display: block;
    text-align: left;
    margin-top: 15px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #ffd700; /* amarillo */
    text-shadow: 0 0 3px black;
}

form input[type="text"],
form input[type="number"],
form select,
form textarea {
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.5);
    margin-bottom: 10px;
    font-size: 1rem;
    outline: none;
    background: rgba(255,255,255,0.05);
    color: #fff;
}

/* ===== BOTONES ===== */
.boton-volver,
input[type="submit"] {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 25px;
    border-radius: 12px;
    border: none;
    background-color: #2e7d32; /* verde medieval */
    color: #fff776; /* amarillo pálido */
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    text-shadow: 1px 1px 2px black;
}

.boton-volver:hover,
input[type="submit"]:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px #fff776;
}

/* ===== RESULTADO ===== */
.resultado {
    margin-top: 20px;
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.3);
    text-align: left;
}

.resultado p {
    margin-bottom: 10px;
    color: #fffacd; /* un amarillo más suave */
}

/* ===== PIE DE PÁGINA ===== */
footer {
    margin-top: 30px;
    font-size: 0.9rem;
    color: #f0e68c;
    text-align: center;
    text-shadow: 1px 1px 3px black;
}

    </style>
</head>
<body>

<div class="contenedor">
    <h1>💻 Mis Datos en PHP</h1>

    <!-- ======== FORMULARIO DIDÁCTICO ======== -->
    <form method="POST" action="">
        <label>Escribe Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>

        <label>Edad:</label>
        <input type="number" name="edad" min="1" max="120" required>

        <label>Estatura (m):</label>
        <input type="text" name="mide" placeholder="Ejemplo: 1.75" required>

        <input type="submit" value="Mostrar mis datos">
    </form>

    <!-- ======== PROCESAMIENTO PHP ======== -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $edad = htmlspecialchars($_POST['edad']);
        $mide = htmlspecialchars($_POST['mide']);

        echo "<div class='resultado'>";
        echo "<p><strong>Resultado:</strong></p>";
        echo "<p>Mis datos son: <strong>$nombre $apellidos</strong>.</p>";
        echo "<p>Mi edad es <strong>$edad años</strong> y mido <strong>$mide m</strong>.</p>";
        echo "</div>";

        // Botón para volver al index.html
        echo "<div class='volver'>
                <form method='GET' action='../index.html'>
                    <button type='submit' class='boton-volver'>⬅️ Volver al inicio</button>
                </form>
              </div>";
    }
    ?>

    <footer>📘 Ejemplo didáctico de variables y formulario en PHP</footer>
</div>

</body>
</html>
