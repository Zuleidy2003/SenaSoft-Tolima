<?php include '../MENU/header.php' ?>
    <form action="../LOGIN/GuardarEmpleado.php" method="POST">
        <div class="container">
            <h2>REGISTRO EMPLEADO</h2>

            <div class="row">
                <div class="input-field col s6">
                    <label for="">Nombre:</label>
                    <input type="text" name="Nombre" id="" required>
                </div>
                <div  class="input-field col s6">
                    <label for="">Apellidos:</label>
                    <input type="text" name="Apellidos" id="" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <label for="">Cargo:</label>
                    <input type="text" name="Cargo" id="" required>
                </div>
                <div class="input-field col s3">
                    <label for="">Cedula:</label> 
                    <input type="number" name="Cedula" id="" required>
                </div>
                <div class="input-field col s3">
                    <label for="">Email:</label>
                    <input type="text" name="Email" id="" required>
                </div>
                <div class="input-field col s3">
                    <label for="">Edad:</label>
                    <input type="number" name="Edad" id="" required>
                </div>
            </div>   
            <div class="row">
                <div  class="input-field col s4">
                    <label for="">Direccion:</label>
                    <input type="text" name="Direccion" id="" required>
                </div>
                <div class="input-field col s4">
                    <label for="">Ciudad:</label>
                    <input type="text" name="Ciudad" id="" required>
                </div>
                <div  class="input-field col s4">
                    <label for="">Celular:</label>
                    <input type="number" name="Celular" id="" required>
                </div>
            </div>    
            <div class="row">
                <div class="input-field col s6">
                    <label for="">Usuario:</label>
                    <input type="text" name="Usuario" id="" required>
                </div>
                <div class="input-field col s6">
                    <label for="">Contraseña:</label>
                    <input type="text" name="Contrasena" id="" required>
                </div>
                <button style="margin-left: 40%;" class="waves-effect waves-light btn" type="submit"><i class="material-icons left"></i>Registrar Empleado</button>
            </div>     
                
                
        </div>
    </form>

<?php
include '../MENU/footer.php'
?>
