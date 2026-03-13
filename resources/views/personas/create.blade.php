<!DOCTYPE html>
<html>
<head>
    <title>Registro de Persona</title>
</head>
<body>
    <form method="POST" action="/personas">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellidos" placeholder="Apellidos">
        <input type="email" name="correo" placeholder="Correo">
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>