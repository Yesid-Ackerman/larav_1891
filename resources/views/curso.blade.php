<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>FORMULARIO CURSO    </h1>

    <form action="{{route('curso.Store')}}"  method="POST" >
 @csrf
        <label>
            Ingrese el nombre del Curso:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Ingrese la descripcion:
            <br>
            <input type="text" name="descripcion">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>


    </form>

</body>
</html>
