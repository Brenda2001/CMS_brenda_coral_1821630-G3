<section class="container">
    <h1>Modificar Publicacion</h1>
    <br>
    <form action="?controller=publi&method=update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $publicacion->id ?>">
        <section class="form-group">
            <label for="name">Titulo</label>
            <input type="text" name="title" id="title" required class="form-control" required value="<?= $publicacion->title ?>">
        </section>
        <section class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" name="description" id="description" required class="form-control" required value="<?= $publicacion->description ?>">
        </section>
        <section class="form-group">
            <label for="exampleInputPassword1">Imagen</label>
            <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required value="<?= $publicacion->image ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-outline-success btn-lg">
        </section>
    </form>
</section>