<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
include("con_db.php");

if ($conn) {
    
}else{
    echo "Incorrecto";
}

?>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin mx-auto w-50 w-lg-25">
        <form method="post">
            <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingInput">Contraseña</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Iniciar Sesion</button>
        </form>
        <a href="registrar.html">Registrar</a>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>