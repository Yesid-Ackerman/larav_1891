<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><i class="fa-solid fa-list"></i> LISTADO DE CURSOS</h1>

        <table class="courses-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Curso</th>
                    <th>Descripción</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{$curso->id}}</td>
                        <td>{{$curso->name}}</td>
                        <td>{{$curso->descripcion}}</td>
                        <td>
                            <a href="{{route('curso.show',$curso->id)}}" class="action-button" title="Mostrar">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('curso.edit',$curso->id)}}" class="action-button" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('curso.destroy',$curso->id)}}" method="POST" class="delete-form">
                                @csrf
                                @method('delete')
                                <button type="submit" class="action-button delete-button" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<style>
    body {
        font-family: 'Courier New', Courier, monospace;
        margin: 0;
        padding: 0;
        background-color: #111;
    }

    .container {
        position: relative;
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    .container h1 {
        color: lime;
        text-align: center;
    }

    .courses-table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .courses-table th,
    .courses-table td {
        border: 1px solid lime;
        padding: 8px;
        color: lime;
    }

    .courses-table th {
        background-color: #111;
    }

    .courses-table a {
        color: lime;
        text-decoration: none;
    }

    .courses-table a:hover {
        text-decoration: underline;
    }

    .action-button {
        background-color: transparent;
        color: white;
        border: none;
        border-radius: 100%;
        padding: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        position: center;
    }

    .action-button:hover {
        background-color: #ffffff;
    }

    .delete-button {
        color: lime;
    }

    .delete-form.submitting {
        pointer-events: none;
    }

    .delete-form.submitting .action-button {
        animation: slideOutRight 1s forwards;
    }

    @keyframes slideOutRight {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
</style>
</html>
