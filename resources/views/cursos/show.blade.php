<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Curso</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-laptop-code"></i> Detalles del Curso</h1>
        <div class="course-info animate__animated animate__fadeInUp">
            <p><strong>ID:</strong> {{$curso->id}}</p>
            <p><strong>Nombre del Curso:</strong> {{$curso->name}}</p>
            <p><strong>Descripción:</strong> {{$curso->descripcion}}</p>
        </div>
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
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 20px #00ff00;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: lime;
}

.course-info {
    text-align: left;
    color: lime;
}

.course-info p {
    margin-bottom: 10px;
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
