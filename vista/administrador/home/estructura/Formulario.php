<?php require_once "..../vista/administrador/home/estructura/parte_superior"?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos/css/registro.css">
    <title>Usuarios Crud</title>
</head>

<body>

    <div>
        <form action="">
            <h1>Registrar Usuario</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="nombre" placeholder="Apellido">
            <input type="email" name="email" placeholder="Correo">
            <input type="password" name="nombre" placeholder="Contraseña">

            <input type="submit" value="Agregar usuario">
        </form>
        
    <div>

    <div>
        <h2>Registrar Usuarios</h2>

        <table>
            <thead>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th></th>
                <th></th>

            </tr>

            </thead>

        </table>

        <thead>

            <tbody>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th><a href="">Editar</th>
                <th><a href="">Eliminar</th>

            </tbody>
        </thead>

    </div>
</body>
</html>
<?php require_once "..../vista/administrador/home/estructura/parte_inferior"?>