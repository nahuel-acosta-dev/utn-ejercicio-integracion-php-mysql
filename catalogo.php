<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor" class="container">
<header class="catalogo_header">
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
</header>
    <?php
    if(isset($_GET['id'])){
        switch($_GET['id']){
            case 'sillon-capri':
                $imagen = "sillon1.jpg";
                $producto = "Sillón Capri";
                $precio =  345.00;
                $caracteristicas = "Concebida para ser utilizada tanto bajo techo como a la intemperie. 
                La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.";  
            break;
            case 'mesa-ipanema':
                $imagen = "ipanema.jpg";
                $producto = "Mesa Ipanema";
                $precio =  500.00;
                $caracteristicas = "Se trata de una colección de muebles de madera de eucaliptos, 
                certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie.
                La madera es de origen brasilera. Las medidas son: 120 cms";  
            break;
            case 'banco-venecia':
                $imagen = "venecia.jpg";
                $producto = "Banco Venecia";
                $precio =  450.00;
                $caracteristicas = "Se trata de una colección de muebles de madera de eucaliptos, 
                certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. 
                La madera es de origen brasilera. Las medidas son: 120 cms.";  
            break;
        }
    }
    ?>
    <section id="contenido">
    <h2>Catálogo</h2>
    <nav id="botonera_catalogo">
        	<ul class="nav nav-pills nav-fill">
                <li class="nav-item"><a class="btn btn-warning" href="catalogo.php?id=sillon-capri#contenido">Sillón Capri</a></li>
                <li class="nav-item"><a class="btn btn-warning" href="catalogo.php?id=mesa-ipanema#contenido">Mesa Ipanema</a></li>
                <li class="nav-item"><a class="btn btn-warning" href="catalogo.php?id=banco-venecia#contenido">Banco Venecia</a></li>
            </ul>
        </nav>
        <div id="cont_prod">
            <?php 
            if(isset($_GET['id'])){
                echo "<p>Producto =  " , $producto,"</p>";
                echo "<p>Precio = $ " , $precio,"</p>";
                echo "<p>Caracteristicas = " , $caracteristicas,"</p>";
                echo "<img src='imagenes/$imagen' />";  
            }
            else{
                echo "<p>Selecciona el producto que deseas ver</p>";
            }
        ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>