<?php
    require "../template/header.php"
?>

    <main class="container">
        <h1 class="text-center">lista de personas</h1>
        <a href="crear.php" class="btn btn-success"> Crear Persona</a>
        <table id="tblpersonas" class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">peso</th>
                <th scope="col">email</th>
                <th scope="col">opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>58.2</td>
                <td>mark@gamil.com</td>
                <td>e - ed - v</td>
                </tr>
                
            </tbody>
        </table>
    </main>

    <?php
    require "../template/footer.php"
?>

