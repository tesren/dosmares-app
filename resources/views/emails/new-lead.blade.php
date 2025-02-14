<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mensaje del sitio web de Dos Mares Residencial</title>
    </head>

    <body>
        <p>
            Mensaje recibido del sitio web de Dos Mares Residencial
        </p>
        
        <p>Información del Lead</p> <br>
    
        <p>Nombre: <strong>{{$msg->name}}</strong></p>
        <p>Correo: <strong>{{$msg->email}}</strong></p>
        <p>Teléfono: <strong>{{$msg->phone ?? 'Sin especificar'}}</strong></p>
    
        <p>Notas: <strong>{{$msg->content ?? 'Sin Contenido'}}</strong></p> <br>
    
        <p>Fecha: {{$msg->created_at}}</p>
        <p>Desde: {{$msg->url}}</p>
    
        
        <p>Este mensaje fue enviado desde un formulario de contacto en el sitio web de Dos Mares Residencial</p>
       
    
    </body>

</html>