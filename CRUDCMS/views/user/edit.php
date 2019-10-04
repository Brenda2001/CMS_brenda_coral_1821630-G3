<section class="container">
    <h1>Modificar usuario</h1>
    <br>
    <form action="?controller=user&method=update" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <section class="form-group">
            <label for="name">Nombres</label>
            <input type="text" name="name" id="name" required class="form-control" required value="<?= $user->name ?>">
        </section>
        <section class="form-group">
            <label for="name">Apellidos</label>
            <input type="text" name="lastname" id="lastname" required class="form-control" required value="<?= $user->lastname ?>">
        </section>
        <section class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" required class="form-control" required value="<?= $user->email ?>">
        </section>
        <section class="form-group">
           <label for="password">Rol</label>
           <select name="rol_id" required class="form-control btn-lg ">
              <option value="1">Usuario</option>
            </select>
        </section>
        <br>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-outline-success btn-lg">
        </section>
    </form>
</section> 