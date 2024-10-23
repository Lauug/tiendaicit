<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "ejemplo";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        body {
            font-family: 'Epilogue', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura completa de la ventana */
        }
        .form-content {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px; /* Ancho ajustado */
        }
        .form-input {
            margin-bottom: 1rem;
            width: 100%;
        }
        .form-input input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }
        .auth-button {
            padding: 0.75rem 1rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="form-content">
        <h3 class="text-gray-800 text-xl font-bold mb-4 text-center">Registro</h3>
        <form action="#" method="post">
            <div class="form-input">
                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-input">
                <input type="email" name="correo" placeholder="Correo" required>
            </div>
            <div class="form-input">
                <input type="text" name="telefono" placeholder="Teléfono" required>
            </div>
            <input type="submit" name="registro" value="Registrar" class="w-full py-3 px-5 bg-blue-500 text-white rounded-md font-bold text-base">
            <input type="reset" value="Limpiar" class="w-full py-3 px-5 bg-gray-300 rounded-md font-bold text-base">
        </form>

        <?php
        if (isset($_POST['registro'])) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $insertarDatos = "INSERT INTO datos (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

            if (mysqli_query($enlace, $insertarDatos)) {
                echo "<p class='text-green-500 text-center'>Datos insertados correctamente. Redirigiendo...</p>";
                header("refresh:2;url=categorias.php");
                exit();
            } else {
                echo "<p class='text-red-500 text-center'>Error al insertar datos: " . mysqli_error($enlace) . "</p>";
            }
        }

        mysqli_close($enlace);
        ?>
    </div>
</body>
</html>
