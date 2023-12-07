<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<table border="1" width="50%" class="table table-dark table-striped">
    <thead>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>NOMBRE REAL</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </thead>


    <tbody>
    <?php foreach($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario['username']; ?></td>
            <td><?= $usuario['password']; ?></td>
            <td><?= $usuario['name'] . ' ' . $usuario ['lastname']; ?></td>
            <?php if ($usuario['status'] == 1): ?>
                <td>Activo</td>
            <?php else : ?>
                <td>Inactivo</td>
            <?php endif ?>
        </tr>
    <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>NOMBRE REAL</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </tfoot>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>