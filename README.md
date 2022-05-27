# PHP-Color-Class
## _Manejo de arreglos de Colores HTML para uso en gráficos, paletas, entre otros.._

[![N|Solid](https://i.ibb.co/ZLzQTpm/Firma-Git-Hub.png)](#)

Esta clase permite manejar un grupo determinado de colores HTML, con el fin de emplearlos con fines como Gráficos, Paletas de Colores, Colores de Tema, entre otros.

## Características

-	Retorne colores aleatorios de acuerdo a la necesidad.
-	Defina el grupo de colores a usar.
-	Maneje Arreglos de un solo nivel en su uso.

## Instalación

Descargue el contenido del repositorio a su equipo.
Copie la clase a la ruta _app\Clases_
La carpeta Clases no viene incluida en el Framework, asi que tendremos que crearla.

```sh
app\Clases\RandomRexColor.php
```
## Comandos

Podrá invocar el metodo que requiera, .

```sh
Use App\Clases\RandomRexColor;
```

| COMANDO | DESCRIPCIÓN |
| ----------- | ----------- |
| RandomRexColor::colorHTML([grupo]) | Retorna los datos completos de los colores disponibles, en un arreglo. Nombre, Hexcolor, RGB... |
| RandomRexColor::hexColorArray([grupo]) | Retorna los hexcolor del grupo seleccionado, en caso de no seleccionar grupo retorna todos los Hexcolor disponibles en la clase |
| RandomRexColor::randomColor(cantidad, [grupo]) | Retorna la cantidad de Hexcolor, de acuerdo al grupo que se desee usar, en caso de no definir grupo se retornará sobre el total de colores disponibles. |

```sh
RandomRexColor::randomColor(10, 'azul');
```

## Desarrollador

Ingeniero, Raúl Mauricio Uñate Castro
sacon-raulmauricio@hotmail.com

## Licencia
MIT
