<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico del cliente</h1>
    <p>Esto ha enviado el cliente:</p>
    
    <p><strong>Nombre:</strong>{{($contacto['name'])}}</p>
    <p><strong>Corrreo:</strong>{{($contacto['correo'])}}</p>
    <p><strong>Mensaje:</strong>{{($contacto['mensaje'])}}</p>
</body>
</html>