<?php

class publiController extends publi{

    public function  __construct(){
        Security::verifyUser();
    }
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/public/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/public/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){

        $nomimg=$_FILES['link']['name'];
        $num=date("GHs");
        $nombreimg=$num.$nomimg;
        $archivo=$_FILES['link']['tmp_name'];
        $ruta="assets";
       
        $ruta=$ruta."/".$nombreimg;
       
       
        move_uploaded_file($archivo,$ruta);    

        $_POST['rutas'] =$ruta;

        echo parent::register($_POST) ? header('location: ?controller=publi') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        Security::verifyRole();
        $publicacion = parent::find($_GET['id']);


        require_once 'views/layouts/header.php';
        require_once 'views/public/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){  
        Security::verifyRole(2);  
        $url_path = 'assets'. $_FILES['link']['name'];
        var_dump(move_uploaded_file( $_FILES['link']['tmp_name'], $url_path));
        $_POST['image'] = $url_path;
        echo parent::update_register($_POST) ? header('location: ?controller=publi') : 'Error en la actualizacion';
    }


    //
    public function delete(){
        Security::verifyRole(2);
         echo parent::delete_register($_GET) ? header('location: ?controller=publi') : 'Error en la eliminacion';
    
       }

}