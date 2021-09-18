<html>
 <head>
     <title> </title>
 </head>

 <!-- Aqui se encuentra el fondo ¡--> 

<body background="IMG/1.jpg">
<br/>
<br/>
<br/>
<!-- Titulo central dee la pagina ¡-->

    <h1 text align='center'>Total de los productos elegidos</h1>

    <p text align='center'>Aqui escontraras el resultado de la compra total, teniendo en cuenta los productos selecionados</p>
    <center>
<?php

    //Variables

        $tennis = $_POST ["tennis"];
        $consola = $_POST ["consola"];
        $tele = $_POST ["tele"];
        $porta = $_POST ["porta"];
        $cel = $_POST ["cel"];

        //Matriz para sumar

            $rel=array($tennis, $consola, $tele, $porta, $cel);
                echo 'El valor total es el siguiente <br/><br/>';
                echo "Total = $" . array_sum($rel) . "\n <br/><br/>";

        echo '<strong> Falabella le hara una recomendacion a continuacion, recuerde que no es obligatorio tomar esta sugerencia </strong> <br/><br/>';
        
        //Condicional de recomendacion

        if ('consola' == 3049000){
            echo 'ya que escogio la consola Xbox Falabella le recomienda comprar un televisor LG';
        }elseif ('consola' == 3584900){
            echo 'ya que escogio la consola Play Station Falabella le recomienda comprar un televisor Samsung';
        }else {
            echo 'ya que escogio la consola de nintendo Falabella le recomienda comprar un televisor Challenger';
        }        
?> 
    </center>
    <center>
        <p> Si desea cambiar algun producto dele clic en volver, pero si desea ir al banco Falabella escoja la segunda opcion
        <br/>
        <br/>
        <!-- Botones ¡-->
        <button onclick="location.href='http://localhost:81/0080_PHP/Productos.php'"> Volver</button> 
        <button onclick="location.href='http://localhost:81/0080_PHP/Proyecto/Banco.php'"> Banco </button>
    <center>
    </body>
</html>