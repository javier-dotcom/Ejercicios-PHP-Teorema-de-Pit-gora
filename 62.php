
<style>
    body{
        width: 80%;
        background-color:black;
        color:white;
        text-align:center;
        margin:auto;
    }
</style>
<?php 
require_once "Clase_triangulo.php";
$t= new Triangulo($_GET["cat1"],$_GET["cat2"],$_GET["hipo"]);
echo "El triangulo ingresado es " . $t->tipoTriangulo();

?>