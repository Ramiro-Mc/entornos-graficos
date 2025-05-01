> Integrantes: 

Matias Fernando Garcia Marianelli - 52959

Ramiro Facundo Martinez Castro - 52992

## Ejercicio 1: Responder 
### 1. ¿ Qué es CSS y para qué se usa? 

CSS (Cascading Style Sheets, Hojas de Estilo en Cascada) es un lenguaje utilizado para describir la presentación de documentos HTML. Permite definir estilos como colores, fuentes, tamaños, márgenes, alineaciones, etc., separando el contenido (HTML) de la apariencia visual del sitio web.

### 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 

Las reglas de CSS se componen de un selector y un bloque de declaraciones.
Ejemplo:

```css
p {
  color: blue;
  font-size: 16px;
}
```
El selector (p) indica a qué elementos HTML se aplicará el estilo.

Las declaraciones (color, font-size) especifican los estilos aplicados.

### 3. ¿ Cuáles son las tres formas de dar estilo a un documento? 

CSS en línea: Se escribe directamente en el atributo style de una etiqueta HTML.
```html
<p style="color: red;">Texto rojo</p>
```

CSS interno: Se escribe dentro de una etiqueta ```<style> en el <head> del documento HTML.```

```html
<style>
  p { color: blue; }
</style>
```
CSS externo: Se escribe en un archivo .css vinculado con la etiqueta 

```html
<link>.
<link rel="stylesheet" href="estilos.css">
```


### 4. ¿ Cuáles son los distintos tipos de selectores más utilizados?  
Ejemplifique cada uno. 

Selector de tipo: Selecciona elementos por su etiqueta.

```css
h1 { color: green; }
```

Selector de clase: Selecciona elementos con una clase específica.

```css
.destacado { font-weight: bold; }
```


Selector de ID: Selecciona un elemento con un ID específico.

```css
#tituloPrincipal { font-size: 24px; }
```


Selector descendente: Selecciona elementos dentro de otros.

```css
div p { color: gray; }
```


Selector de grupo: Aplica el mismo estilo a varios elementos.

```css
h1, h2, h3 { font-family: Arial; }
```




### 5. ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos? 

Una pseudo-clase permite definir un estilo para un estado específico de un elemento.
En vínculos (```<a>```), las más comunes son:

:link – cuando el enlace no ha sido visitado.

:visited – cuando el enlace ya ha sido visitado.

:hover – cuando el cursor pasa sobre el enlace.

:active – cuando el enlace está siendo clicado.


### 6. ¿ Qué es la herencia? 

La herencia es el mecanismo por el cual algunos estilos definidos en un elemento padre se aplican automáticamente a sus elementos hijos. Por ejemplo, si se define una fuente para el ```<body>```, los párrafos y otros elementos hijos usarán esa fuente a menos que se indique lo contrario.

### 7. ¿ En qué consiste el proceso denominado cascada? 


La cascada es el algoritmo que utiliza CSS para decidir qué estilo aplicar cuando hay múltiples reglas que podrían aplicarse a un mismo elemento. Se basa en:

Especificidad del selector (IDs > clases > etiquetas).

Orden de aparición (la última regla tiene prioridad).

Origen de los estilos (usuario, navegador, autor).

¡Importante! (!important) que puede forzar la aplicación de una regla.

## Ejercicio 2

```css
p#normal { 
font-family: arial,helvetica; 
font-size: 11px; 
font-weight: bold; 
} 

/* Esta regla modifica a las etiquetas p con el id "normal". Como es una etiqueta de texto las declaraciones se centran principalmente en modificar texto. El font family cambia la tipografia a arial o, en su defecto a helvetica si ocurre algun error con arial.  font-size cambia el tamaño de la letra a 11px y font-weight cambia el espesor de la letra, en este caso la hace negrita */

*#destacado { 
border-style: solid; 
border-color: blue; 
border-width: 2px; 
} 

/* Esta regla modifica a todas las etiquetas que tienen el id "destacado", aunque el asterisco que esta antes del numeral no es necesario para esto. Tambien, es una mala practica poner el mismo id a mas de una etiqueta. En este caso las declaraciones modifican el borde. border-style:solid hace que el borde sea una linea solida, border-color cambia el color de esta y border-width le da un espesor de 2px */

#distinto { 
background-color: #9EC7EB; 
color: red; 
} 

/* Esta regla modifica a la etiqueta con el id "distinto". backgraund-color cambia el color del mismo, usando notacion hexadecimal a un color azulado y color cambia el color del texto a rojo */
```
```html
<p id="normal">Este es un párrafo</p> 
<p id="destacado">Este es otro párrafo</p> 
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table> 
<p id="distinto">Este es el último párrafo</p> 
```

## Ejercicio 3 

```css
p.quitar { 
color: red; 
} 
 /* p.quitar toma todos los elementos <p>, especificamente los que pertenecen a la clase quitar. Les aplica el color rojo */

*.desarrollo { 
font-size: 8px; 
} 

/* *.desarrollo Selecciona a todos los elementos que pertenencen a la clase desarrollo. Y les apica un tamaño de letra de 8 pixeles  */

.importante { 
font-size: 20px; 
} 

/* .importante hace lo mismo que desarrollo pero en este caso con su clase "importante" y les aplica una tamaño de letra de 20 pixeles */
```
```html
<p class="desarrollo">  
En este primer párrafo trataremos lo siguiente: 
<br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
<p class="quitar"> 
Este párrafo debe ser quitado de la obra… 
<br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
<p > 
</p> 
En este otro párrafo trataremos otro tema:<br /> 
xxxxxxxxxxxxxxxxxxxxxxxxx 
<p class="importante"> 
Y este es el párrafo más importante de la obra… 
<br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</ p> 
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1> 
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```


## Ejercicio 4 

```css
* {color:green; } 
a:link {color:gray } 
a:visited{color:blue } 
a:hover {color:fuchsia } 
a:active {color:red } 
p {font-family: arial,helvetica;font-size: 10px;color:black; } 
.contenido{font-size: 14px;font-weight: bold; } 
```

```html
<body> 
    <p class="contenido" style="font-weight: normal;"> 
        Este es un texto ...............
    </p> 
    <table> 
        <tr> 
            <td>Y esta es una tabla.......</td> 
        </tr> 
        <tr> 
            <td><a href="http://www.google.com.ar">con un enlace</a></td> 
        </tr> 
    </table> 
</body> 
```
> En este caso la clase "contenido" solo esta en la primera etiqueta p, por lo que el resto del texto del body no se ve afectado por esta. A su vez, en esta misma etiqueta se modifica el font-weight y se lo pone en normal, por lo que ya no afecta el font-weight: bold de la clase contenido

```html
<body class="contenido"> 
    <p> Este es un texto................</p> 
    <table> 
        <tr> 
            <td>Y esta es una tabla.......</td> 
        </tr> 
        <tr> 
            <td><a href="http://www.google.com.ar">con un enlace</a></td> 
        </tr> 
    </table> 
</body> 
```
> En este segundo caso la clase "contenido" se encuentra dentro de la etiqueta body por lo que afecta a todas las demas etiquetas, dandoles un font-size de 14 px y un font-weight en negrita. 

## Ejercicio 5 

1. Los textos enfatizados dentro de cualquier título deben ser rojos.
 
 ```css
h1 em,
h2 em,
h3 em,
h4 em,
h5 em,
h6 em {
  color: red;
}
```
 
2. Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a su vez esté dentro de un bloque debe ser color negro. 

```css
div p [href]{
    color: black;
}


```
3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser amarillo pero si es un enlace a otra página debe ser azul. 

```css
#ultimo ul 
{
    color: yellow;
}

#ultimo ul a[href]
{
    color:blue;
}
```


4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si están dentro de un título deben ser rojos. 

```css
div #importante {
    color: green;
}

h1 #importante
h2 #importante,
h3 #importante,
h4 #importante,
h5 #importante,
h6 #importante{
    color: red;
}
```


5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules. 


```css
h1[title]{
    color: blue;
}

```

6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta para los ya visitados y, además, no deben aparecer subrayados. 

```css
ol a:link{
    color: blue;
     text-decoration: none;
} 
ol a:visited{ 
    color: violet;
    text-decoration: none;
    }


```



## Ejercicio 6 

> Codigo modificado:

```html
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang="es" xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
  <TITLE>Página Principal</TITLE>
  <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <LINK rel="stylesheet" type="text/css" href="estilo2.css"><!-- Conexion  -->
</HEAD>
<BODY>
  <DIV id="encabezado"><H1>ASIGNATURA ELECTIVA</H1></DIV>

  <DIV id="contenido">
    <H2>Contenido</H2>
    <P>En esta asignatura ...........................<BR></P>
    <P>El objetivo fundamental ..................</P>
    <P>etc., etc., ...........................................</P>
    <P>etc., etc., ...........................................</P>
    <P>Adem&aacute;s, ...........................................</P>
    <P>etc., etc., ...........................................</P>
    <P class="resaltado">Pero, lo más importante es ..............................</P>
    <P class="resaltado">etc., etc., ...........................................</P>
    <P>Y, entonces, podemos continuar con ..................</P>
    <P>etc., etc., ...........................................</P>
    <P>&nbsp;</P>
  </DIV>

  <DIV id="menu">
    <H3>Enlaces</H3>
    <UL class="vineta">
      <LI><A href="http://www.e-style.com.ar/moodle" target="_blank">Curso Actual</A></LI>
      <LI><A href="http://www.e-style.com.ar/logica" target="_blank">Curso anterior</A></LI>
      <LI><A href="http://www.e-style.com.ar/ntedu/consultas.htm" target="_blank">Contacto</A></LI>
    </UL>
  </DIV>

  <DIV id="pie" class="estilopie">
    Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario
  </DIV>
  <P>&nbsp;</P>
</BODY>
</HTML>


```

```css
body{ 
font-family:"Times New Roman", Times, serif; 
color: #000000; 
margin: 0px; 
padding: 0px; 
background-color: #FFFFCC; 
} 
a:link, a:visited{ 
color: #660099; 
text-decoration: none; 
} 
a:hover{ 
background-color: #dddddd; 
} 
h1, h2, h3{ 
font-family: Verdana, Arial, Helvetica, sans-serif; 
margin: 0px; 
padding: 0px; 
} 
h1{ 
font-size: 140%; 
color: #006666; 
} 
h2{ 
font-size: 120%; 
color: #990000; 
} 
h3{ 
font-size: 100%; 
color: #000099; 
} 
ul.vineta{ 
list-style-type: square; 
color:#000000; 
} 
#encabezado{ 
background-color: #CCFFCC; 
margin: 5px; 
padding: 0px 0px 10px 10px; 
} 
#menu{ 
background-color: #FFCC99; 
margin: 0 79% 0 0; 
padding: 20px; 
font-size: 90%; 
} 
#contenido{ 
float:right; 
width: 75%; 
margin: 0; 
padding: 0 3% 0 0; 
} 
.resaltado{ 
color: #ff0000; 
} 
#pie{ 
clear:both; 
text-align: center; 
padding: 10px 10px 10px 10px; 
} 
.estilopie{ 
border: 1px solid #006666; 
font-size: 75%; 
}

```
