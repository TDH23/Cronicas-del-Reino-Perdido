<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional en PHP - Promedio</title>
<style>


/* ===== RESET GENERAL ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Georgia', 'Times New Roman', serif;
}

/* ===== FONDO ===== */
body {
    background: url("../img/fondo5.jpg") center/cover no-repeat fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* ===== CONTENEDOR ===== */
.contenedor {
    background: rgba(0, 0, 0, 0.55); /* translúcido oscuro */
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 20px;
    padding: 40px 50px;
    width: 420px;
    backdrop-filter: blur(6px);
    box-shadow: 0 0 25px rgba(0,0,0,0.7);
    color: #fff;
    text-align: center;
}

/* ===== TITULO ===== */
.contenedor h1 {
    font-size: 2rem;
    margin-bottom: 15px;
    color: #ffd700; /* amarillo medieval */
    text-shadow: 1px 1px 4px black;
}

/* ===== PÁRRAFO INSTRUCCIONES ===== */
.contenedor p {
    margin-bottom: 20px;
    font-size: 1rem;
    color: #fffacd;
    text-shadow: 0 0 3px black;
}

/* ===== FORMULARIO ===== */
form label {
    display: block;
    text-align: left;
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #ffec8b;
}

form input[type="number"],
form input[type="text"] {
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
input[type="submit"],
.boton-volver {
    display: inline-block;
    margin-top: 15px;
    padding: 12px 25px;
    border-radius: 12px;
    border: none;
    background-color: #8b0000; /* rojo medieval */
    color: #fff976; /* amarillo pálido */
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    text-shadow: 1px 1px 2px black;
}

input[type="submit"]:hover,
.boton-volver:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px #fff976;
}

/* ===== RESULTADO ===== */
.resultado {
    margin-top: 20px;
    background: rgba(0,0,0,0.5);
    padding: 20px;
    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.3);
    text-align: left;
}

.resultado p {
    margin-bottom: 10px;
    color: #fffacd;
}

/* Colores especiales para aprobado/reprobado */
.aprobado {
    color: #32cd32; /* verde brillante */
    font-weight: bold;
}

.reprobado {
    color: #ff4500; /* rojo intenso */
    font-weight: bold;
}

/* ===== PIE DE PÁGINA ===== */
footer {
    margin-top: 30px;
    font-size: 0.9rem;
    color: #ffd700;
    text-align: center;
    text-shadow: 1px 1px 3px black;
}


</style>
   
   
</head>
<body>

<div class="contenedor">
    <h1>📘 Evaluando Condicionales en PHP</h1>
    <p>Ingrese las 4 notas del estudiante y presione <strong>Calcular</strong>.</p>

    <!-- ======== FORMULARIO DIDÁCTICO ======== -->
    <form method="POST" action="">
        <label>Nota 1:</label>
        <input type="number" name="n1" min="0" max="20" required>

        <label>Nota 2:</label>
        <input type="number" name="n2" min="0" max="20" required>

        <label>Nota 3:</label>
        <input type="number" name="n3" min="0" max="20" required>

        <label>Nota 4:</label>
        <input type="number" name="n4" min="0" max="20" required>

        <input type="submit" value="Calcular Promedio">
    </form>

    <!-- ======== PROCESAMIENTO PHP ======== -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];

        // Calcular promedio
        $prom = ($n1 + $n2 + $n3 + $n4) / 4;

        // Condicional
        if ($prom >= 13) {
            $con = "APROBADO";
            $clase = "aprobado";
        } else {
            $con = "REPROBADO";
            $clase = "reprobado";
        }

        echo "<div class='resultado'>";
        echo "<p><strong>Notas ingresadas:</strong> $n1, $n2, $n3, $n4</p>";
        echo "<p><strong>Promedio:</strong> " . number_format($prom, 2) . "</p>";
        echo "<p>El resultado es: <span class='$clase'>$con</span></p>";
        echo "</div>";

        // Botón para volver al inicio
        echo "<div class='volver'>
                <form method='GET' action='../index.html'>
                    <button type='submit' class='boton-volver'>⬅️ Volver al inicio</button>
                </form>
              </div>";
    }
    ?>

    <footer>💡 Ejemplo didáctico: uso del condicional IF en PHP</footer>
</div>

</body>
</html>
