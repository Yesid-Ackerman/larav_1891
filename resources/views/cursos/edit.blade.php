<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('curso.update', $curso)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$curso->name) }}">
        <br>
        </label>
        <br>
        <label>
        Descripcion:
        <br>
        <input name="descripcion" type="text" value="{{old('descripcion',$curso->descripcion)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>