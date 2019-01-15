<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body">
                <form action="validarCreacion.php" method="POST">
                    <div class="form-group">
                        <label>Ingresar nombre de usuario:</label>
                        <input type="text" class="form-control"
                        placeholder="Usuario" name="usuario" autofocus=on>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Ingresar Contraseña:</label>
                            <input type="password" class="form-control"
                            placeholder="Contraseña" name="clave1">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Repetir Contraseña:</label>
                            <input type="password" class="form-control"
                            placeholder="Contraseña" name="clave2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ingresar correo electrónico</label>
                        <input type="email" class="form-control"
                        placeholder="Correo" name="correo">
                    </div>
                    <div class="form-group">
                        <label>Ingresar nombre o alias</label>
                        <input type="text" class="form-control"
                        placeholder="Nombre o alias" name="nombre">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="crear" 
                        class="btn btn-success btn-block">Crear</button>
                        <button type="reset" name="crear"
                        class="btn btn-danger btn-block">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>