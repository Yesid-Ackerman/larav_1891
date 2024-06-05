<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
</head>
<body>
    <h1>HOLA DESDE LOGIN</h1>

    <form id="loginForm" action="{{ route('login.Store') }}" method="POST">
        <!-- Asegúrate de incluir el token CSRF para proteger tu formulario contra ataques CSRF -->
        @csrf
        
        <label>
            Ingrese el nombre Email:
            <br>
            <input type="text" id="user" name="user" required>
        </label>
        <br><br>
        <label>
            Ingrese la Contraseña:
            <br>
            <input type="password" id="pass" name="pass" required>
        </label>
        <br><br>

        <button type="button" onclick="cifrarContraseña()">Ingresar</button>
    </form>

    <script>
        function cifrarContraseña() {
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;

            // Aquí se cifra la contraseña con SHA-512
            var hashedPass = CryptoJS.SHA512(pass).toString(CryptoJS.enc.Hex);

            // Asignamos la contraseña cifrada al campo de contraseña
            document.getElementById("pass").value = hashedPass;

            // Enviamos el formulario
            document.getElementById("loginForm").submit();
        }
    </script>
</body>
</html>
