<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo caso de emergencia en la ZONA 1</p>
    <p>Estos son los datos del usuario que ha realizado la denuncia:</p>
    <ul>
        <li>Nombre: {{$mensaje->tituloMensaje}} </li>
        <li>Contenido: {{$mensaje->textoMensaje}}</li>
        <li>Emisor: {{$mensaje->emisorMensaje}}</li>
    </ul>
</body>
</html>