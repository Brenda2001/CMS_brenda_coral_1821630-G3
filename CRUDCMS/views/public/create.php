
<form  action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" placeholder="Noticia" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input type="text" name="description" id="description" class="form-control"  placeholder="Importante hecho ocurrido en ..." required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Imagen</label>
    <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
  </div>
  <button type="submit" class="btn btn-outline-success btn-lg">Publicar</button>
</form>