<?php include '../MENU/header.php' ?>
    <div class="centrar">
        <form action="../LOGIN/VerificarLogin.php" method="POST">
            <div class="container2">
                <h4>LOGIN EMPLEADO</h4>
                <div class="row">
                    <div style="left: 120px;" class="input-field col s6">
                        <label for="">Usuario</label>
                        <input type="text" name="Usuario" id="" required>
                    </div> 
                </div>    
                <div id="row" class="row">
                    <div style="left: 120px;" class="input-field col s6">
                        <label for="">Contraseña</label>
                        <input type="text" name="Contrasena" id="" required>
                    </div> 
                </div>
                    <button id="botonentrar" class="waves-effect waves-light btn" type="submit"><i class="material-icons left"></i>Ingresar al sistema!</button>
                    <p>No estas registrado, por favor registrate <a href="RegistrarEmpleado.php"> AQUI </a></p>
            </div>    
                
        </form>
    </div>
<?php
include '../MENU/footer.php'
?>
