<html>
 <head>
     <title>productos </title>
 </head>

 <!-- Aqui se encuentra el fondo ¡--> 

<body background="IMG/1.jpg">
<br/>
<br/>
<br/>
<!-- Titulo central dee la pagina ¡-->

    <h1 text align='center'>Productos añadidos al carrito</h1>

        <!-- Se asignan los espacios de respuesta para el registro con su respectivo texto de dialogo, ademas de la especificar accion y el metodo ¡-->

        <p text  align='center'> Por favor escoja los productos que mas le llamaron la atencion con base en su presupuesto </p>

        <form action="TOTAL.php" method="post">
    <center>
        <label >Seleccione un par de tennis: </label> 

        <select name="tennis">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 155000 > Addidas = $155.000 </option>
            <option value = "167000"> Nike = $167.000 </option>
            <option value = "148000"> Puma = $148.000 </option>
        </select><br/><br/>

        <label > Seleccione una consola: </label> 

        <select name="consola">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 3049000> Xbox series x = $3.049.000 </option>
            <option value = "3584900"> Play station 5 = $3.584.900 </option>
            <option value = "1749000"> Nintendo Switch = $1.749.000 </option>
        </select><br/><br/>

        <label  > Seleccione un televisor: </label>   

        <select name="tele">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 899900> Challenger = $899.900 </option>
            <option value = "1899900"> LG = $1.899.900 </option>
            <option value = "1799900"> Samsung = $1.799.900 </option>
        </select><br/><br/>

        <label  > Seleccione un portatil: </label>   

        <select name="porta">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 1159000> HP = $1.159.000 </option>
            <option value = "3523530"> Apple = $3.523.530 </option>
            <option value = "2199900"> Lenovo = $2.199.900 </option>
        </select><br/><br/>

        <label  > Seleccione un celular: </label>   

        <select name="cel">
            <option value = "ninguno"> Ninguno  </option>
            <option value = 2159000> Samsung = $2.159.000 </option>
            <option value = "5663990"> Iphone = $5.663.990 </option>
            <option value = "1729900"> Huawei = $1.729.900 </option>
        </select><br/><br/>
    <center>

                <!-- Botones para cambiar de pagina ¡-->

            <center> <input  type="submit"  value="Consultar" /></center>
        </form>
    </body>         
</html>        
 
