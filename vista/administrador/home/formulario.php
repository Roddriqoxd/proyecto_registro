<?php require_once "estructura/parte_superior.php"?>

    <link rel="stylesheet" href="../../../estilos/css/registro.css">

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

<?php require_once "estructura/parte_inferior.php"?>