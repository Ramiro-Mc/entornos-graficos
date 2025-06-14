**Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función**

>mysqli_connect

**Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:**

> host, username y password

**Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función**

>mysqli_select_db()

**Esta función debe pasar como parámetro**

* La conexión establecida mediante mysqli_connect().

* El nombre de la base de datos que se desea utilizar.

**La función mysqli_query () se utiliza para**

>Ejecutar consultas SQL en la base de datos, como SELECT, INSERT, UPDATE, DELETE, etc.

**y requiere como parámetros**

* La conexión activa.

* La consulta SQL como una cadena de texto.

**La cláusula or die() se utiliza para**

Detener la ejecución del script si ocurre un error, y mostrar un mensaje de error personalizado o detallado.

**y la función mysqli_error () se puede usar para**

obtener el mensaje de error de la última operación realizada con SQL para mostrarlo o registrarlo

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):

``` php
<?php^
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
```

Explicacion 
Se recorre el conjunto de resultados almacenado en $vResultado, una fila a la vez.

**mysqli_fetch_array()** obtiene la fila actual como un array (puede ser numérico, asociativo o ambos).

Cada iteración asigna esa fila a la variable $fila.


**Inicio del HTML (dentro del bucle):**

* Se crea una fila HTML (<tr>) con tres columnas (<td>).

* Se imprime el contenido de cada columna de la base de da*tos, accediendo por índice


**Fila adicional** 

* Se abre otra fila con una celda que ocupa 5 columnas (colspan="5"), pero no se imprime contenido.

**Cierre del bucle y limpieza**

* mysqli_free_result se utiliza para liberar la memoria asociada al resultado de la consulta 

* mysqli_close cierra la conexion con la base de datos 