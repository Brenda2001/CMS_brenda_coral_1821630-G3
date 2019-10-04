<section class="container">
    <h1>Crear usuario</h1>
    <br>
    <form action="?controller=user&method=store" method="POST">
        <section class="form-group">
            <label for="name">Nombres</label>
            <input type="text" name="name" id="name" required class="form-control">
        </section>
        <section class="form-group">
            <label for="name">Apellidos</label>
            <input type="text" name="lastname" id="lastname" required class="form-control">
        </section>
        <section class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" required class="form-control">
        </section>
        <section class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required class="form-control">
        </section>
        <section class="form-group">
           <label for="password">Rol</label>
           <select name="rol_id" required class="form-control btn-lg ">
              <option value="1">Usuario</option>
           </select>
        </section>
        <br>
        <section class="form-group">
            <input type="submit" value="Registrar" class="btn btn-outline-success btn-lg">
        </section>
    </form>
</section>