<?php require_once ("./plantilla/header.php");?>
<?php require_once ("./plantilla/sidebar.php");?>
<link rel="stylesheet" type="text/css" href="estilo/categoria.css">

<main>
    <div class="nav-segundo">
            <h3 class="txtTiltle">Agregar Categorias</h3>
    </div>    

        <div class="container">
            
                <div class="form-container"> <!--por defecto -->

                                <div class="form-column">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" id="nombreCategoria" name="nombreCategoria" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Descripción:</label>
                                        <input type="text" id="nombreDescri" name="nombreDescri" required>
                                    </div>
                                
                                </div>
                </div>

                <div class="Div_btn">
                        <div class="btn-group">
                            <button class="btnEnviar" type="submit">Enviar</button>
                            <button class="btnLimpiar" type="submit">Limpiar</button>
                        </div>
                        </div>
                </div>
                
        </div>
    </div>
</main>
