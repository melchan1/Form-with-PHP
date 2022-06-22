<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Muestro el porcentaje
if(isset($_POST["impuestos"])){
    $Porcentaje = $_POST["impuestos"];
    /* switch ($Porcentaje) {
        case "10%":
            echo "10%<br/>";
            break;
        case "20%":
            echo "20%<br/>";
            break;
        default:
            break;
    } */
}
//Variables
$Porcentaje = (int)$_POST["impuestos"];
$code1 = $_POST["codigo1"];
$description1 = $_POST["descripcion1"];
$cantidad1 = $_POST["cantidad1"];
$precio1 = $_POST["precio1"];


$code2 = $_POST["codigo2"];
$description2 = $_POST["descripcion2"];
$cantidad2 = $_POST["cantidad2"];
$precio2 = $_POST["precio2"];

//Suma de resultados
$elemento1 = $cantidad1*$precio1;
$elemento2 = $cantidad2*$precio2;
$Neto = $elemento1+$elemento2;
//Impuestos
$Impuesto = ($Porcentaje * $Neto)/100;
$Total = $Neto +  $Impuesto;
?>

<h1>Formulario / Entrega CDS</h1>
        <table align="left" style="border : 3px solid black" >
            <tr>
                <td>Fecha :</td>
                <td style="border : 1px solid black"><?php echo $_POST ["fecha"]; // Muestro fecha donde se compro  ?></td>
            </tr>
            <tr>  
                <td>Nombre:</td>
                <td style="border : 1px solid black"><?php echo $_POST ["nombre"]; // Muestro el  nombre  ?></td>
            </tr> 
            
            <tr>  
                <td>Impuestos: </td>
                <td style="border : 1px solid black"><?php echo $_POST["impuestos"]; //Impuesto elegido ?>
                </td>
            </tr>
                
                <tr>
                    <td><h4 style="color:red">Detalles</h4></td>
                </tr>
                
                <tr>
                    <td  style="border : 1px solid black" >Codigo       </td>
                    <td  style="border : 1px solid black" >Descripcion  </td>
                    <td  style="border : 1px solid black" >Cantidad     </td>
                    <td  style="border : 1px solid black" >Precio       </td>
                    <td  style="border : 1px solid black" >Total        </td>
                </tr>
                <tr>
                    <td style="border : 1px solid black"><?php  echo $_POST['codigo1']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['descripcion1']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['cantidad1']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['precio1']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $elemento1 ?></td>
                </tr>
                <tr>
                    <td style="border : 1px solid black"><?php  echo $_POST['codigo2']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['descripcion2']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['cantidad2']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $_POST['precio2']; ?></td>
                    <td style="border : 1px solid black"><?php  echo $elemento2 ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border : 1px solid black">Neto</td>
                    <!-- NETO -->
                    <td style="border : 1px solid black"><?php  echo $Neto ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border : 1px solid black">Impuesto</td>
                    <!-- IMPUESTO CALCULADO -->
                    <td style="border : 1px solid black"><?php  echo $Impuesto ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border : 2px solid black">Total</td>
                    <!-- TOTAL DE LA COMPRA -->
                    <td style="border : 2px solid black"><?php  echo $Total ?></td>
                </tr>
                <br>
        <td><a href="javascript: history.go(-1)">Volver</a></td>
        </table> 
        


</body>
</html>

