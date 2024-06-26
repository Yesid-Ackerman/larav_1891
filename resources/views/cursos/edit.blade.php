<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-edit"></i> EDITAR CURSO</h1>
        <form action="{{ route('curso.update', $curso) }}" method="POST" class="animate__animated animate__fadeInUp">
            @csrf
            @method('put')
            <label>
                Name:
                <br>
                <input name="name" type="text" value="{{ old('Name', $curso->name) }}">
                <br>
            </label>
            <br>
            <label>
                Descripcion:
                <br>
                <input name="descripcion" type="text" value="{{ old('descripcion', $curso->descripcion) }}">
                <br>
            </label>
            <br>
            <button type="submit">Actualizar Curso</button>
        </form>
    </div>
</body>
<style>

body {
    font-family: 'Courier New', Courier, monospace;
    margin: 0;
    padding: 0;
    color: lime;
    background-color: #000;
}

.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    background-color: rgba(17, 17, 17, 0.9);
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0 0 20px #00ff00;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: lime;
}

form {
    display: inline-block;
}

label {
    display: block;
    margin-bottom: 10px;
    color: lime;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #00ff00;
    border-radius: 5px;
    background-color: #111;
    color: lime;
    font-family: 'Courier New', Courier, monospace;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #00ff00;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Courier New', Courier, monospace;
}

button[type="submit"]:hover {
    background-color: lime;
}

</style>

</html>

