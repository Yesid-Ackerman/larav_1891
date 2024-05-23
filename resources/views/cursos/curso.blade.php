<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Curso</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-laptop-code"></i> Formulario de Curso</h1>
        <form action="{{ route('cursos.Store') }}" method="POST" class="animate__animated animate__fadeInUp">
            @csrf
            <label>
                Ingrese el nombre del Curso:
                <br>
                <input type="text" name="name">
            </label>
            <br><br>
            <label>
                Ingrese la descripción:
                <br>
                <input type="text" name="descripcion">
            </label>
            <br><br>
            <div class="button-container">
                <button type="submit">Enviar Formulario</button>
                <a href="{{ route('curso.index') }}" class="action-button">Ver registros</a>
            </div>
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
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

form {
    background-color: rgba(17, 17, 17, 0.9);
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0 0 20px #00ff00;
    display: inline-block;
}

label {
    display: block;
    margin-bottom: 10px;
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

.button-container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    gap: 20px;
}

button[type="submit"],
a.action-button {
    padding: 10px 15px;
    background-color: #000;
    color: #00ff00;
    border: 1px solid #00ff00;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
    font-family: 'Courier New', Courier, monospace;
}

button[type="submit"]:hover,
a.action-button:hover {
    background-color: #333;
}

.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background: linear-gradient(to bottom, #000000, #0a0a0a);
    overflow: hidden;
}
</style>
</html>
