<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @scrf
    <h1>Hola desde Listar</h1>

    <table>

        @foreach ($cursos as $curso)

        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->name}}</td>
            <td>{{$curso->descripcion}}</td>
            <td><a href="{{route('curso.show', $curso->id)}}" >Mostrar</a></td>

        </tr>

            <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
                @csrf
                @method('delete')
                <td><button type="submit">Eliminar</button></td>
            </form>
        @endforeach

    </table>

</body>
</html>
