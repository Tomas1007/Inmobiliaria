
<body>
  <header>
    <h1>Mi sitio web</h1>
  </header>
 
  
    <main class="content_main">
    <form action="<?php echo base_url();?>mantenimiento/inmueble/store" method="POST">
                            <div class="form-group">
                                <label for="titulo">Titulo:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo">
                               
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="datetime-local" class="form-control" id="fecha" name="fecha">
                               
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicacion:</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                            </div>
                            <div class="form-group">
                                 <label for="parrilla">Parrilla: </label>
                                <input type="checkbox" name="parrilla">
                            </div>
                            <div class="form-group">
                                 <label for="pileta">Pileta: </label>
                                <input type="checkbox" name="pileta">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>

        </main>

