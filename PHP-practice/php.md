# Practica 4
## PHP: variables, tipos, operadores, expresiones, estructuras de control



### Ejercicio 1:

```php
<?php
function doble($i) {
    return $i * 2;
}

$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;

echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if (is_int($d)) {
    $d += 4;
}

if (is_string($a)) {
    echo "Cadena: $a";
}

$d = $a ? ++$d : $d * 3;
$f = doble($d++);
$g = $f += 10; 

echo $a, $b, $c, $d, $f, $g;
?>

```

Análisis del código:
1. Variables y su tipo:
$a: Tipo boolean (TRUE).
$b: Tipo string ("xyz").
$c: Tipo string ('xyz').
$d: Tipo integer (12).
$f: Tipo integer (resultado de la función doble).
$g: Tipo integer (resultado de $f += 10).

2. Operadores:
Asignación: =, +=.
Aritméticos: *, ++, +=.
Condicional ternario: ? :.
Concatenación en echo: ,.
Llamada a función: doble($d++).

3. Funciones y sus parámetros:
doble($i): Recibe un parámetro $i (tipo integer) y devuelve el doble de su valor ($i * 2).
gettype($var): Devuelve el tipo de la variable pasada como parámetro.
is_int($var): Verifica si la variable es de tipo entero.
is_string($var): Verifica si la variable es de tipo cadena.

4. Estructuras de control:
Condicional if:
if (is_int($d)) { $d += 4; }: Si $d es un entero, se incrementa en 4.
if (is_string($a)) { echo "Cadena: $a"; }: Si $a es una cadena, imprime un mensaje.
Operador ternario:
$d = $a ? ++$d : $d * 3;: Si $a es TRUE, incrementa $d en 1; de lo contrario, multiplica $d por 3.

5. Salida por pantalla:
El código imprime los valores y tipos de las variables en el siguiente orden:

Tipos de las variables:

gettype($a): boolean.
gettype($b): string.
gettype($c): string.
gettype($d): integer.
Condicionales:

$d se incrementa en 4 porque es un entero ($d = 12 + 4 = 16).
No se imprime "Cadena: $a" porque $a no es una cadena, es un booleano.
Operador ternario:

$d = $a ? ++$d : $d * 3;: Como $a es TRUE, $d se incrementa en 1 ($d = 16 + 1 = 17).
Cálculos posteriores:

$f = doble($d++);: Llama a doble(17) (doble de 17 es 34), luego incrementa $d ($d = 18).
$g = $f += 10;: Incrementa $f en 10 ($f = 34 + 10 = 44) y asigna el mismo valor a $g ($g = 44).
Impresión final:

echo $a, $b, $c, $d, $f, $g;: Imprime los valores de las variables:
$a: 1 (porque TRUE se convierte en 1 al imprimirse).
$b: xyz.
$c: xyz.
$d: 18.
$f: 44.
$g: 44.


### Ejercicio 2:

a)
```php
$i = 1;
while ($i <= 10) {
    print $i++;
}
```
```php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
```
```php
$i = 0;
do {
    print ++$i;
} while ($i < 10);
```
> En este caso los 3 codigos iteran 10 veces printeando los numeros del 1 al 10, sus salidas son equivalentes.

b)
```php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
```
```php
for ($i = 1; $i <= 10; print $i, $i++);
```
```php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
```
```php
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
```
> En este caso nuevamente todos los codigos tienen salidas equivalentes. Ahora varian en la forma en la que definen la inicialización, condición, actualización y el cuerpo de la estructura for

c)
```php
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
```
```php
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
```
> Nuevamente, los 2 codigos tienen salidas equivamentes. Ambos printean un numero del 1 al 3 dependiendo del valor de la variable i. El primero con un if anidado y el segudo mediantes una estructura switch

### Ejercicio 3:

a)
 ``` html
<html>
<head><title>Documento 1</title></head>
<body>
 ```
```php
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;
 $col = 2;
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>";
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";
 } echo "</tr>\n";
 }
 echo "</table>\n";
?>
```
 ``` html
</body></html>
```

El código se utiliza para crear una tabla HTML con un número específico de filas y columnas. En este caso:

La tabla tiene 5 filas ($row = 5).
La tabla tiene 2 columnas ($col = 2).
Cada celda de la tabla está vacía (&nbsp;), lo que significa que no contiene contenido visible.


b)
```html
<html>
<head><title>Documento 2</title></head>
<body>
```
```php
<?php
if (!isset($_POST['submit'])) {
?>
```
```html
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
```
 ```php
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
?>
```
```html
</body></html>
```

El código genera un formulario HTML que solicita al usuario ingresar su edad. Dependiendo de la edad ingresada, el programa determina si el usuario es mayor de edad (21 años o más) o menor de edad (menos de 21 años).

### Ejercicio 4:

El codigo se ejecuta de la siguiente manera:
```php
echo "El $flor $color \n"; // como las variables aun no estan definidas se muestran las variables como texto vacio
include 'datos.php'; // se incluye  el documento donde se declaran las variables
echo " El $flor $color"; // se printea "El clavel blanco"
```


### Ejercicio 5:

Hecho

## PHP: arrays, funciones


### Ejercicio 1:

```php
$a = array(
  'color'  => 'rojo',
  'sabor'  => 'dulce',
  'forma'  => 'redonda',
  'nombre' => 'manzana',
  4
);
```
```php
$a['color']  = 'rojo';
$a['sabor']  = 'dulce';
$a['forma']  = 'redonda';
$a['nombre'] = 'manzana';
$a[]         = 4;
```
> Ambos codigos crean el mismo array, con valores y claves equivalentes, unicamente varia la forma en la que los asigna.

### Ejercicio 2:

a)
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```

> Salida: bar1

b)
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
> Salida: 5942

c)
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>
```
> No tiene salida

matriz[] = 56;
Seria hacer array(5 => 1, 12 => 2, 13 => 56)
unset elimina el elemento entre parentesis.

### Ejercicio 3:

```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
> La salida de este codigo es una frase que indica la fecha y hora exactas en las que se ejecuta
```php
<?php
function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
```
>Salida: 5+6=11

### Ejercicio 4:

```php
function comprobar_nombre_usuario($nombre_usuario){
 //compruebo que el tamaño del string sea válido.
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 
 //compruebo que los caracteres sean los permitidos
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
 for ($i=0; $i<strlen($nombre_usuario); $i++){
 if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 }
 echo $nombre_usuario . " es válido<br>";
 return true;
} 
```

