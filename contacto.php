<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor" class="container">
        <header class="catalogo_header">
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
            <h2>Contáctenos</h2>
            <form class="row g-3 needs-validation" method="POST" action="enviar_consulta.php">
                <div class="col-md-4 position-relative">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" max="20" required>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido" max="40" required>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="edad" class="form-label">Edad</label>
                    <div class="input-group has-validation">
                        <input placeholder="Ingresa edad" id="edad" type="number" name="edad" class="form-control"
                            max="100" min="18" required>
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" max="100" required>
                </div>
                <div class="col-md-8 position-relative">
                    <label for="motivo_consulta" class="form-label">Motivo de la consulta</label>
                    <input type="text" id="motivo_consulta" name="consulta" class="form-control" max="250" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" max="500"
                        placeholder="Escriba su mensaje" required></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>

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