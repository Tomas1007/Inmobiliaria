<body>
<header>
    <h1>Agregar imagenes</h1>
  </header>
<main class="content_main">
                       
                
                        <form action="<?php echo base_url();?>mantenimiento/imagenes/subirImagenes" method="post" enctype="multipart/form-data">
                        <input type="file" name="imagenes[]" multiple/>
                         <input type="submit" value="Subir Imagenes" />
                        </form>
                    
                   
                        </main>