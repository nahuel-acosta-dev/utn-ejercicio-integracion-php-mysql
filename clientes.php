<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section id="contenedor">
        <header>
            <nav id="botonera_principal">
                <ul>
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
            <h2>Clientes</h2>
            <div class="row">
                <h3 class="text-center">Pedidos Clientes</h3>
                <?php
                include("conexion.php");
                $pedidos_clientes = mysqli_query($base, "SELECT * FROM pedidos_cliente");
                while ($productos = mysqli_fetch_assoc($pedidos_clientes)) {
                ?>
                <div class="card text-center col-5 productos text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong><?php echo $productos["producto"] ?></strong></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Precio: $ <?php echo $productos["precio"] ?></h6>
                        <p class="card-text">Cantidad: <?php echo $productos["cantidad"] ?></p>
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
</body>

</html>