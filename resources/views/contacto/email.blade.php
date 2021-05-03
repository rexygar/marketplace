<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Esta empresa se quiere poner en contacto</h1>

    <p><strong>Nombre Representante: </strong>{{ $contacto['nom'] }}</p>
    <p><strong>Correo: </strong>{{ $contacto['email'] }}</p>
    <p><strong>Sitio Web: </strong>{{ $contacto['urls'] }}</p>
    <p><strong>Nombre de la Empresa: </strong>{{ $contacto['emp'] }}</p>
</body>
</html>