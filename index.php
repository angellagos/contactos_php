<?php include("Conexion.php"); ?>
<?php Conexion::conectarDb(); ?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body">
                <form action="validarLogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="usuario"
                        placeholder="Ingresar Usuario"
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="clave"
                        placeholder="Ingresar Contraseña"
                        class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" 
                    value="Ingresar">
                    </div>
                    
                        <a href="" class="card-link">¿Se le olvidó la contraseña?</a>
                    
                    
                        <a href="crearUsuario.php" class="card-link">Crear cuenta</a>
                    
                </form>
            </div>
        </div>
    </div>
</div>