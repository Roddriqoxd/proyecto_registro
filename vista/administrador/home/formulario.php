<?php require_once "estructura/parte_superior.php"?>

    <link rel="stylesheet" href="../../../estilos/css/formulario.css">

    <div class="datos_usuario">
        <form action="../../../modelo/formulario.php" method="POST">
            <h1>Registrar Usuario</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="email" name="email" placeholder="Correo">
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Agregar usuario">
        </form>
        
    <div>

    <div class="registro_usuario">
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

        <!-- </table> -->

        <!-- <thead> -->

            <tbody>

                <tr>
                   <td>1</td>
                   <td>Carlos</td>
                   <td>Carlos</td>
                   <td>Carlos</td>
                   <td>Carlos</td>
                   <td><a href="" class="registro_usuario--edit">Editar</td>
                   <td><a href=""class="registro_usuario--delete">Eliminar</td>
                </tr>

            </tbody>
            
        <!-- </thead> -->

        </table>
    </div>

<?php require_once "estructura/parte_inferior.php"?>