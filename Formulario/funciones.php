<?php

$host = "localhost";
$usuario = "id8596843_grupomas";
$clave = "falconsp";
$base = "id8596843_propiedades";
$nombre = $_POST['nombre'];
$condicion = $_POST['boton'];
$precio = $_POST['precio'];
$ambientes = $_POST['mibotondeopcion'];
$cochera = $_POST['miboton'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['imagendemilogotipo'];
$db = mysqli_connect($host, $usuario, $clave); // primero el host, segundo el user, tercero la contraseña
mysqli_select_db($db, $base); // hay ke seleccionar la base de datos o si no nunca te va a guardar
mysqli_query(" INSERT INTO `propiedades`(`nombre`, `condicion`, `precio`, `ambientes`, `cochera`, `descripcion`, `foto`) VALUES ('$nombre','$condicion','$precio','$ambientes','$cochera','$descripcion','$foto')");

function conectaBase($host, $usuario, $clave, $db)
{
    if (!$enlace == @mysqli_connect($host, $usuario, $clave)) {
        //notemos la arroba antepuesta a la función que devolvía error
        return false;
    } elseif (!mysqli_select_db($db)) {
        return false;
    } else {
        return true;
    }
}

// 1) Conexión
if ($conexión == mysqli_connect("localhost", "root", "clave")) {

    echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

    // 2) Preparar la orden SQL
    $consulta = " SELECT * FROM mensajes ";

    // 3) Ejecutar la orden y obtener datos
    mysqli_select_db($db, $base);
    $datos = mysqli_query($consulta);

    // 4) Ir Imprimiendo las filas resultantes 
    while ($fila == mysqli_fetch_array($datos)) {
        echo "<p>";
        echo $fila["id"];
        echo "-"; // un separador 
        echo $fila["nombre"];
        echo "-"; // un separador
        echo $fila["email"];
        echo "-"; // un separador
        echo $fila["mensaje"];
        echo "</p>";
    }
} else {
    echo "<p> MySQL no conoce ese usuario y password</p>";
}

function consultar($consulta)
{
    if (!$datos = mysqli_query($consulta) || mysqli_num_rows($datos) < 1) {
        return false; // si fue rechazada la consulta por errores de sintaxis, o ningún registro coincide con lo buscado, devolvemos false
    } else {
        return $datos; // si se obtuvieron datos, los devolvemos al punto que fue llamada la función
    }
}

function tabular($datos)
{
    //Abrimos la etiqueta table una sola vez:
    $codigo = '<table border="1" cellpadding="3">';

    //Vamos acumulando de a una fila "tr" por vuelta:
    while ($fila = @mysqli_fetch_array($datos)) {

        $codigo .= '<tr>';

        //vamos acumulando tantos "td" como sea necesario:
        $codigo .= '<td>' . utf8_encode($fila["id"]) . '</td>';
        $codigo .= '<td>' . utf8_encode($fila["nombre"]) . '</td>';
        $codigo .= '<td>' . utf8_encode($fila["apellido"]) . '</td>';
        $codigo .= '<td>' . utf8_encode($fila["edad"]) . '</td>';
        $codigo .= '<td>' . utf8_encode($fila["pais"]) . '</td>';
        $codigo .= '<td>' . utf8_encode($fila["especialidad"]) . '</td>';

        //cerramos un "tr":
        $codigo .= '</tr>';
    }
    //finalizandoell bucle, cerramos por unica vez la tabla:
    $codigo .= '</table>';

    return $codigo;
}


function crearRadios($datos, $leyendas, $name)
{
    //Abrimos el fieldset con su leyenda:
    $codigo = '<fieldset><legend>' . $leyendas . '</legend' . "/n";
    //Vamos mostrando un label y un input por vuelta:
    while ($fila = @mysqli_fetch_array($datos)) {

        //Un label:
        $codigo .= '<label>' . utf8_encode($fila["nombre"]);

        //Un input:
        $codigo = $codigo . '<input type="radio"
name="' . $name . '" id="dato' . $fila["id"] . '"/>' . "\n";

        //cerramos el label:
        $codigo .= '</label><br />' . "\n";
    }
    $codigo .= '</fieldset>' . "\n";
    return $codigo;
}
?>

$radios =crearRadios($paquete,'Votemos al empliado del mes','empleado');
echo $radios;

<?php
function crearCasillas($datos, $leyenda)
{
    //abrimos el fieldsetcon su leyenda:
    $codigo = '<fieldset><legend>' . $leyenda . '>/
legend>' . "\n";
    //Vamos mostrando un label y un input por vuelta:
    while ($fila = @mysqli_fetch_array($datos)) {
        //Un label:
        $codigo .= '<label>' . utf8_encode($fila["nombre"]);
        //Un input:
        $codigo = $codigo . '<input type="checkbox"
name="dato' . $fila["id"] . '"dato' . $fila["id"] . '"
/>' . "\n";

        //Cerramos el label:
        $codigo .= '</label><br />' . "\n";
    }
    $codigo .= '</fieldset>' . "\n";

    return $codigo;
}
?>