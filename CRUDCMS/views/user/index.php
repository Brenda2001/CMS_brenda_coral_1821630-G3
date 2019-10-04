<h1>Lista de usuarios</h1>
<br>

<table class="table">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->name ?></td>
            <td><?= $user->lastname ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->rol_id ?></td>
            <td width="300" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-success btn-lg">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-danger btn-lg">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<center><a href="?controller=user&method=create" class="btn btn-outline-success btn-lg">Crear Usuario</a></center> 