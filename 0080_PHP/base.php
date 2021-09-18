<html>
    <head> 
        
    <head>
        <!-- Aqui se encuentra el fondo ¡--> 
    <body background="IMG/1.jpg">
<h1 text align='center'>Verifica tus datos</h1>

    </body>            
</html>    
<center>
<?php 

// se les da un valor a las variables

    $nombre = $_POST ["nombre"];
    $apellido=$_POST ["apellido"];
    $edad=$_POST ["edad"];
    $ciudad=$_POST ["ciudad"];
    $correo=$_POST ["correo"];
    $contraseña=$_POST ["contraseña"];
    $contraseña2=$_POST ["contraseña2"];
    $celular=$_POST ["celular"];
    $Tdocumento=$_POST ["Tdocumento"];
    $Ndocumento=$_POST ["Ndocumento"];
    $genero=$_POST ["genero"];

//se imprimen las variables

        echo "Nombre: " . $nombre . "<br/>";
        echo "Apellido:  ". $apellido . "<br/>";
        echo "edad:  ". $edad . "<br/>";
        echo "ciudad:  ". $ciudad . "<br/>"; 
        echo "Correo: " . $correo . "<br/>"; 
        echo "Contraseña: " . $contraseña . "<br/>";
        echo "Confirme la contraseña: " . $contraseña2 . "<br/>";
        echo "Numero de celular: " . $celular . "<br/>"; 
        echo "Tipo de documento: " . $Tdocumento . "<br/>"; 
        echo "Numero de documento: " . $Ndocumento . "<br/>"; 
        echo "Genero: " . $genero . "<br/> <br/>";

        //Condicional que avisa al usuario si debe comprar con la supervision de un adulto o no, esto dependiendo de la edad

        if ($edad < 18){
            echo 'Usted no puede hacer compras sin la supervision de un adulto <br/> <br/>';
        }else{
            echo 'Usted es mayor de edad, disfrute comprando <br/> <br/>';
        }

        //Le indica al usuaario que hacer dependiendo de los datos vistos

        echo "Si su infromacion es correcta dele clic en Iniciar sesion, de lo contrario dele clic ah registrarse <br/> <br/>";

        //Condicional que le indica al usuario que direcciones le sirven dependiendo de la ciudad
        
        if ($ciudad == 'Bogota'){

            echo '<strong> La direccion de las tiendas Falabella que estan en Bogota son: </strong> <br/> <br/>';
            echo 'Calle 38 A Sur No. 34D-51 <br/>';
            echo 'Calle 53 No. 25 - 35 <br/>';
            echo 'Av calle 13 entre cra 62 y cra 65 # 11-2 a 11-48 <br/>';
            echo 'Calle 19A 72-57 CC Multi Plaza <br/>';
            echo 'Calle 20 N 82-52 <br/>';
            echo 'Calle 99 11A - 32 <br/>';

        }elseif ($ciudad == 'Cali'){

            echo '<strong>La direccion de las tiendas Falabella que estan en Cali son: </strong> <br/> <br/>';
            echo 'Calle 36 #6a - 65 <br/>';
            echo 'Calle 25 # 98-416 local 229 <br/>';

        }elseif ($ciudad == 'Medellin'){

            echo '<strong> La direccion de las tiendas Falabella que estan en Medellin son: </strong> <br/> <br/>';
            echo 'Carrera 43 No. 36 - 04 <br/>';
            echo 'Carrera 70 # 1-141. 050025 <br/>';
            echo 'Cra 43A No. 7 Sur-170 <br/>';

        }elseif ($ciudad == 'Barranquilla'){

            echo '<strong> La direccion de las tiendas Falabella que estan en Barranquilla son: </strong> <br/> <br/>';
            echo 'Calle 78 No. 53 - 70 local 100 <br/>';
            echo 'Cra 55 # 99 ? 51. 080001 <br/>';

        }else{
            echo'<strong> Esta ciudad no cuenta con una tienda Falabella </strong> <br/> <br/>';
        }

        //Condicional de coincidencia de contraseña

        if($contraseña == $contraseña2){
            echo 'Las contraseñas coinciden';
        }else {
            echo 'Las contraseñas no coinciden';
        }

?><center>
<br/>
<br/>
<html>
    <body>
    <center>

        <!-- Botones para cambiar de pagina ¡-->

        <button onclick="location.href='http://localhost:81/0080_PHP/Inicio.php'"> Iniciar sesión manualmente</button> 
        <button onclick="location.href='http://localhost:81/0080_PHP/Registro.php'"> Registrarse </button>
        <br/>
        <br/>
        <button onclick="location.href='http://localhost:81/0080_PHP/Productos.php'">Iniciar sesion y comprar </button>
</center>
    </body>
</html>
 