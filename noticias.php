<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor" class="container">
        <header>
            <nav id="botonera_principal">
                <ul class="ul_noticias">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Programador web con PHP y MySQL</h1>
            </div>
        </header>
        <section id="contenido">
            <h2>Noticias</h2>
            <div class="cont_noticias row">
                <?php
                $noticia = array(
                    array(
                        'imagen' => 'newspapers.jpg', 'titulo' => 'El diario historia',
                        'info' => 'Los primeros periódicos de actualidades (escritos) también se presentaron en forma cronológica, aunque pronto se evolucionó hacia una forma más sintética y práctica, 
                    clasificando los sucesos por temas y rúbricas.Precisamente de esta mejorada forma de presentación y ordenamiento es que surge el concepto de periódico en su acepción más moderna, 
                    como soporte en papel conteniendo informaciones y datos correspondientes a un cierto período, y sustituyendo así a los términos gaceta y gacetilla en una parte de los usos..'
                    ),
                    array(
                        'imagen' => 'new-york.jpg', 'titulo' => 'New York Resumen',
                        'info' => 'La ciudad de New York, "la Gran Manzana" o New York City, como se la suele llamar, 
                        se encuentra en la costa este de los Estados Unidos, en el extremo sur del estado de New York 
                        (el estado 11, abreviado como NYS, para diferenciarlo de la ciudad).
                        Es la ciudad con mayor población del país, la segunda más poblada de Norteamérica después de la Ciudad de México.'
                    ),
                    array(
                        'imagen' => 'facebook.jpg', 'titulo' => 'Facebook sus comienzos',
                        'info' => 'La historia de Facebook comienza en octubre de 2003, 
                    cuando a un jovencísimo Mark Zuckerberg se le ocurre crear una web 
                    para entretener a sus compañeros de Harvard.'
                    ),
                    array(
                        'imagen' => 'north-america.jpg', 'titulo' => 'Estados Unidos y su riqueza',
                        'info' => 'Estados Unidos es un país muy rico. Este es un hecho conocido, 
                        pero la escala real de esta riqueza es algo que se escapa a menudo de las comparaciones 
                        internacionales. El estado más pobre de los Estados Unidos, Mississippi, tiene un PIB per 
                        cápita de $40.464, similar al de Francia ($41.760) o Reino Unido ($41.030). Alemania, el 
                        país más poderoso de la Unión Europea, estaría entre los cinco estados más pobres de 
                        Estados Unidos, por detrás de Alabama o Kentucky.

                        '
                    )
                );

                for ($i = 0; $i < count($noticia); $i++) {
                ?>
                <div class="card col-5 bg-warning mb-3">
                    <img src="imagenes/<?php echo $noticia[$i]['imagen'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $noticia[$i]['titulo'] ?></h5>
                        <p class="card-text"><?php echo $noticia[$i]['info'] ?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </section>
        <footer>
            Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>