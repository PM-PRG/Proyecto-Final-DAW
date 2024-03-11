<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario registro</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    
        <div class="log-form">
        <!-- formulario de inicio de sesión -->
        <h2>Registrate</h2>
        <form method="POST" action="procesaRegistro.php">
        <input type="text" title="username" placeholder="usuario" />
        <input type="email" title="email" placeholder="email" />
        <input type="password" title="password" placeholder="contraseña" />
        <input type="password" title="repetirPassword" placeholder="repite la contraseña" />
        <button type="submit" class="btn">Registrate</button>
        <a class="forgot" href="index.php">Ya tienes una cuenta? Logeate</a>
        </form>
    </div>
    
    
    
    
</body>
</html>