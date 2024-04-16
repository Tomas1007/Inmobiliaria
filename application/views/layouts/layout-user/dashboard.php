<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventer - Alquiler de Espacios para Eventos</title>
       <!--  Biblioteca AOS para animaciones -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
       
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user-style.css"/>
</head>
<body>
    <!--Header Section-->
    <header class="fixed-nav">
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo de Eventer">
            </div>
            <nav>
            <a href="<?php echo base_url();?>mantenimiento/inmueble/add" class="active">Agregar casa</a>
                <a href="#inicio" class="active">Inicio</a>
                <a href="#sobre-nosotros">Sobre nosotros</a>
                <a href="#contacto">Contacto</a>
                <a href="<?php echo base_url(); ?>usuario/Usuarios">Perfil</a>
                <a href="<?php echo base_url(); ?>auth/logout">Salir</a>
            </nav>
        </div>
    </header>

    <!--Call to Action Section-->
    <section id="inicio" class="hero" data-aos="fade-up">
        <div class="container">
            <div class="hero-content">
                <h1>EVENTER</h1>
                <h2>¡Encuentra tu Quinta Soñada!</h2>
                <p>Somos una plataforma nueva que ofrece un catálogo de propiedades a tu disposición.</p>
                <a href="#" class="btn-primary">Ver propiedades</a>
            </div>
        </div>
    </section>
<!--Testimony Section-->
<section class="testimony" data-aos="fade-up">
    <div class="container">
        <div class="testimony-content">
            <div class="carousel">
                <div class="testimonial"> <!-- Primer testimonio -->
                    <img src="assets/template/images/dashboard/img_1.jpg" alt="Imagen">
                    <blockquote>
                        <p>Estoy realmente impresionado con la facilidad de uso y la calidad de servicio que ofrece Eventer. Gracias a ellos, pude encontrar el lugar perfecto para organizar la fiesta de cumpleaños de mi hijo. ¡Altamente recomendado!.</p>
                        <cite>Lucia Maldonado</cite>
                    </blockquote>
                </div>
                <div class="testimonial"> <!-- Segundo testimonio -->
                    <img src="assets/template/images/dashboard/img_2.jpg" alt="Imagen">
                    <blockquote>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus earum veritatis illum, nam eveniet, temporibus fugit dicta laborum fugiat eos explicabo possimus, dignissimos dolorum voluptatem. Amet veritatis exercitationem debitis culpa!.</p>
                        <cite>Roberto Carlos</cite>
                    </blockquote>
                </div>
                <!-- Agrega más testimonios según sea necesario -->
            </div>
        </div>
    </div>
</section>
    <!--Properties Section-->
    <section class="properties">
    <?php if(!empty($inmuebles)):?>
                <?php foreach($inmuebles as $inmueble):?>
        <div class="container">
            <h2>Propiedades Disponibles</h2>
            <div class="property-grid">
                <div class="property-card">
                    <img src="<?php echo base_url('assets/images/uploads/' . $inmueble->nombre_imagen_portada) ?>">
                    <div class="property-details">
                        <h3>Quinta Soñada</h3>
                        <p> <?php echo $inmueble->descripcion;?></p>
                        <a href="<?php echo base_url('mantenimiento/inmueble/inmuebleById/'. $inmueble->id);?>" style="width:100%" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
                <!-- Agrega más tarjetas de propiedades según sea necesario -->
            </div>
            <?php endforeach;?>
            <?php endif;?>
            <!-- Paginación -->
            <div class="pagination">
                <a href="#" class="prev">&laquo; Anterior</a>
                <a href="#" class="page-number">1</a>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <!-- Agrega más enlaces de paginación según sea necesario -->
                <a href="#" class="next">Siguiente &raquo;</a>
            </div>
        </div>
    </section>

    <!--About us Section-->
    <section id="sobre-nosotros" class="about" data-aos="fade-up">
        <div class="container">
            <h2>Sobre nosotros</h2>
            <p>Eventer es una plataforma en línea que facilita la búsqueda y reserva de casas quinta y quinchos para eventos en Argentina. Nuestro objetivo es ofrecer una experiencia de usuario excepcional, enfocada en la facilidad de uso, la transparencia y la claridad en la información de las propiedades. Además, fomentamos la confianza y la seguridad en los usuarios, garantizando la calidad de las propiedades y la veracidad de la información publicada. Queremos establecer una buena reputación en el mercado como una plataforma confiable y eficiente para la búsqueda de casas quintas y quinchos disponibles para alquilar.</p>
        </div>
    </section>

    <!--Contact Section-->
    <section id="contacto" class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <div class="social-icons">
                <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
            </div>
        </div>  
    </section>
    <footer>
        <div class="container">
            <p>© 2024 Eventer - Alquiler de Espacios para Eventos</p>
            <a href="#">Aviso legal</a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/js/script.js">
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const sectionId = this.getAttribute('href');
                const targetSection = document.querySelector(sectionId);

                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: 'smooth' // Desplazamiento suave
                });
            });
        });
    </script>
    </body>
</html>

