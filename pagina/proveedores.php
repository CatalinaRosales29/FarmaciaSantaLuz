<?php require_once ("./plantilla/header.php");?>
<?php require_once ("./plantilla/sidebar.php");?>

<link rel="stylesheet" type="text/css" href="estilo/proveedores.css">

<main>

        <div class="nav-segundo">
            <h3 class="txtTiltle">Registro de Proveedores</h3>
        </div>

        <div class="container">
            
            <div class="form-container"> <!--por defecto -->

                            <div class="form-column">
                                <div class="form-group">
                                    <label for="nombre">Edad:</label>
                                    <input type="text" id="edad" name="edad" required>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input type="text" id="apellido" name="apellido" required>
                                </div>
                            </div>

                    <div class="form-column">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" required>
                        </div>
                    </div>

            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </div>



</main>
