<div class="container mt-5">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center">
<?php if(isset($_SESSION['user'])): ?>
<a class="btn btn-outline-success btn-lg " href="?controller=publi&method=create" role="button">Crear Publicacion</a>
<?php endif; ?>
</div>
<div class="col-md-10">
<p class="display-4">Publicaciones</p>
</div>
</div>
<div class="container mt-5">
<div class="row">
    <?php foreach(publi::all() as $publi):  ?>
<div class="col-md-4 align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<img src="<?= $publi->image ?>" class="card-img-top" alt="..." style="max-witch: 100px; min-witch:100px;">
<div class="card-body">
<h5 class="card-title mb-2"><?= $publi->title ?></h5>
<div class="mt-4">
<p class="card-text"><?= $publi->description ?></p>
<?php  if(isset($_SESSION['user']) && $_SESSION['user']->rol_id == "2"): ?>
<a href="?controller=publi&method=delete&id=<?= $publi->id ?>">
<button class="btn btn-outline-danger btn-lg">Borrar</button>

<a href="?controller=publi&method=edit&id=<?= $publi->id ?>">
<button class="btn btn-outline-success btn-lg">Editar</button>
</a>
</a>
<?php endif;?>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>

