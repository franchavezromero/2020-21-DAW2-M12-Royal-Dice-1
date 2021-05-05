<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('../resources/css/style.css')}}">
</head>

<body>
    <img src="{{ asset('img/logo.png')}}" id="logo">
    
    <form class="box registro" method="post" action="{{ route('register.store') }}">
        @csrf
        <h3>Registro</h3>
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="enviar">
        <p>Ya tienes cuenta?</p><a href="../public/login.blade.php">Inicia sesión</a>
    </form>




</body>

</html>