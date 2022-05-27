<?php

/**
 * --------------------------------------------------------------------------
 * MANEJO DE COLORES (USO PARA CHARTS O SIMILIARES)
 * --------------------------------------------------------------------------
 *
 * Manejo de colores HTML
 * Retorno de colores HTML para uso en graficas u otros
 *
 * --------------------------------------------------------------------------
 *
 * AUTOR: ING. RAUL MAURICIO UÑATE CASTRO
 * FECHA: 25-11-2021
 * V: 1.0.0
 * STATIC::CLASS
 *
 * METODOS USO ESTATICO | COMUNES -------------------------------------------
 *
 * @method  RandomRexColor::colorHTML([grupo])   |   Retorna los datos completos de los colores disponibles.
 * @method  RandomRexColor::hexColorArray([grupo])    |   Retorna los hexcolor del grupo de colores seleccionado.
 * @method  RandomRexColor::randomColor(cantidad, [grupo])  |   Retorna la cantidad de colores solicitado con la opcion de selccionar grupo.
 *
 * */

namespace App\Clases;

class RandomRexColor {

    /**
     * Arreglo de los colores disponibles.
     * Retorna el global de los detalles de los colores sobre el grupo seleccionado
     *
     * @return ARRAY
     *
     */
    public static function colorHTML(string $grupo = null){

        $colorHTML['rojos'] = [
            ['Nombre Castellano' => 'Rojo Indio', 'Nombre HTML' => 'IndianRed', 'Hexadecimal' => '#CD5C5C', 'RGB' => '205, 92, 205'],
            ['Nombre Castellano' => 'Coral Suave', 'Nombre HTML' => 'LightCoral', 'Hexadecimal' => '#F08080', 'RGB' => '240, 128, 128'],
            ['Nombre Castellano' => 'Salmón', 'Nombre HTML' => 'Salmon', 'Hexadecimal' => '#FA8072', 'RGB' => '250, 128, 114'],
            ['Nombre Castellano' => 'Salmón oscuro', 'Nombre HTML' => 'DarkSalmon', 'Hexadecimal' => '#E9967A', 'RGB' => '233, 150, 122'],
            ['Nombre Castellano' => 'Salmón Suave', 'Nombre HTML' => 'LightSalmon', 'Hexadecimal' => '#FFA07A', 'RGB' => '255, 160, 122'],
            ['Nombre Castellano' => 'Carmesí', 'Nombre HTML' => 'Crimson', 'Hexadecimal' => '#DC143C', 'RGB' => '220, 20, 60'],
            ['Nombre Castellano' => 'Rojo Puro', 'Nombre HTML' => 'Red', 'Hexadecimal' => '#FF0000', 'RGB' => '255, 0, 0'],
            ['Nombre Castellano' => 'Rojo Fuego', 'Nombre HTML' => 'FireBrick', 'Hexadecimal' => '#B22222', 'RGB' => '178, 34, 34'],
            ['Nombre Castellano' => 'Rojo Oscuro', 'Nombre HTML' => 'DarkRed', 'Hexadecimal' => '#8B0000', 'RGB' => '139, 0, 0']
        ];

        $colorHTML['rosas'] = [
            ['Nombre Castellano' => 'Rosa', 'Nombre HTML' => 'Pink', 'Hexadecimal' => '#FFC0CB', 'RGB' => '255, 192, 203'],
            ['Nombre Castellano' => 'Rosa Suave', 'Nombre HTML' => 'LightPink', 'Hexadecimal' => '#FFB6C1', 'RGB' => '255, 182, 193'],
            ['Nombre Castellano' => 'Rosa Cálido', 'Nombre HTML' => 'HotPink', 'Hexadecimal' => '#FF69B4', 'RGB' => '255, 105, 180'],
            ['Nombre Castellano' => 'Rosa Profundo', 'Nombre HTML' => 'DeepPink', 'Hexadecimal' => '#FF1493', 'RGB' => '255, 20, 147'],
            ['Nombre Castellano' => 'Medio Violeta Rojo', 'Nombre HTML' => 'MediumVioletRed', 'Hexadecimal' => '#C71585', 'RGB' => '199, 21, 133'],
            ['Nombre Castellano' => 'Rosa Pastel', 'Nombre HTML' => 'PaleVioletRed', 'Hexadecimal' => '#DB7093', 'RGB' => '219, 112, 147']
        ];

        $colorHTML['naranjas'] = [
            ['Nombre Castellano' => 'Salmón Suave', 'Nombre HTML' => 'LightSalmon', 'Hexadecimal' => '#FFA07A', 'RGB' => '255, 160, 122'],
            ['Nombre Castellano' => 'Naranja Coral', 'Nombre HTML' => 'Coral', 'Hexadecimal' => '#FF7F50', 'RGB' => '255, 127, 80'],
            ['Nombre Castellano' => 'Tomate', 'Nombre HTML' => 'Tomato', 'Hexadecimal' => '#FF6347', 'RGB' => '255, 99, 71'],
            ['Nombre Castellano' => 'Naranja Rojizo', 'Nombre HTML' => 'OrangeRed', 'Hexadecimal' => '#FF4500', 'RGB' => '255, 69, 0'],
            ['Nombre Castellano' => 'Naranja Oscuro', 'Nombre HTML' => 'DarkOrange', 'Hexadecimal' => '#FF8C00', 'RGB' => '255, 140, 0'],
            ['Nombre Castellano' => 'Naranja Puro', 'Nombre HTML' => 'Orange', 'Hexadecimal' => '#FFA500', 'RGB' => '255, 165, 0']
        ];

        $colorHTML['amarillos'] = [
            ['Nombre Castellano' => 'Amarillo Oro', 'Nombre HTML' => 'Gold', 'Hexadecimal' => '#FFD700', 'RGB' => '255, 215, 0'],
            ['Nombre Castellano' => 'Amarillo Puro', 'Nombre HTML' => 'Yellow', 'Hexadecimal' => '#FFFF00', 'RGB' => '255, 255, 0'],
            ['Nombre Castellano' => 'Amarillo Suave', 'Nombre HTML' => 'LightYellow', 'Hexadecimal' => '#FFFFE0', 'RGB' => '255, 255, 224'],
            ['Nombre Castellano' => 'Amarillo Limón', 'Nombre HTML' => 'LemonChiffon', 'Hexadecimal' => '#FFFACD', 'RGB' => '255, 250, 205'],
            ['Nombre Castellano' => 'Amarillo Manzana Suave', 'Nombre HTML' => 'LightGoldenrodYellow', 'Hexadecimal' => '#FAFAD2', 'RGB' => '250, 250, 210'],
            ['Nombre Castellano' => 'Amarillo Papaya', 'Nombre HTML' => 'PapayaWhip', 'Hexadecimal' => '#FFEFD5', 'RGB' => '255, 239, 213'],
            ['Nombre Castellano' => 'Amarillo Mocasín', 'Nombre HTML' => 'Moccasin', 'Hexadecimal' => '#FFE4B5', 'RGB' => '255, 228, 181'],
            ['Nombre Castellano' => 'Amarillo Melocotón', 'Nombre HTML' => 'PeachPuff', 'Hexadecimal' => '#FFDAB9', 'RGB' => '255, 218, 185'],
            ['Nombre Castellano' => 'Amarillo Oro Pálido', 'Nombre HTML' => 'PaleGoldenrod', 'Hexadecimal' => '#EEE8AA', 'RGB' => '238, 232, 170'],
            ['Nombre Castellano' => 'Amarillo Caqui', 'Nombre HTML' => 'Khaki', 'Hexadecimal' => '#F0E68C', 'RGB' => '240, 230, 140'],
            ['Nombre Castellano' => 'Amarillo Caqui Oscuro', 'Nombre HTML' => 'DarkKhaki', 'Hexadecimal' => '#BDB76B', 'RGB' => '189, 183, 107']
        ];

        $colorHTML['purpuras'] = [
            ['Nombre Castellano' => 'Espliego', 'Nombre HTML' => 'Lavender', 'Hexadecimal' => '#E6E6FA', 'RGB' => '230, 230, 250'],
            ['Nombre Castellano' => 'Cardo', 'Nombre HTML' => 'Thistle', 'Hexadecimal' => '#D8BFD8', 'RGB' => '216, 191, 216'],
            ['Nombre Castellano' => 'Ciruela', 'Nombre HTML' => 'Plum', 'Hexadecimal' => '#DDA0DD', 'RGB' => '221, 160, 221'],
            ['Nombre Castellano' => 'Violeta', 'Nombre HTML' => 'Violet', 'Hexadecimal' => '#EE82EE', 'RGB' => '238, 130, 238'],
            ['Nombre Castellano' => 'Orquídea', 'Nombre HTML' => 'Orchid', 'Hexadecimal' => '#DA70D6', 'RGB' => '218, 112, 214'],
            ['Nombre Castellano' => 'Fucsia', 'Nombre HTML' => 'Fuchsia', 'Hexadecimal' => '#FF00FF', 'RGB' => '255, 0, 255'],
            ['Nombre Castellano' => 'Magenta', 'Nombre HTML' => 'Magenta', 'Hexadecimal' => '#FF00FF', 'RGB' => '255, 0, 255'],
            ['Nombre Castellano' => 'Orquídea Medio', 'Nombre HTML' => 'MediumOrchid', 'Hexadecimal' => '#BA55D3', 'RGB' => '186, 85, 211'],
            ['Nombre Castellano' => 'Púrpura Medio', 'Nombre HTML' => 'MediumPurple', 'Hexadecimal' => '#9370DB', 'RGB' => '147, 112, 219'],
            ['Nombre Castellano' => 'Amatista', 'Nombre HTML' => 'Amethyst', 'Hexadecimal' => '#9966CC', 'RGB' => '153, 102, 204'],
            ['Nombre Castellano' => 'Azul Violeta', 'Nombre HTML' => 'BlueViolet', 'Hexadecimal' => '#8A2BE2', 'RGB' => '138, 43, 226'],
            ['Nombre Castellano' => 'Violeta Oscuro', 'Nombre HTML' => 'DarkViolet', 'Hexadecimal' => '#9400D3', 'RGB' => '148, 0, 211'],
            ['Nombre Castellano' => 'Orquídea Oscuro', 'Nombre HTML' => 'DarkOrchid', 'Hexadecimal' => '#9932CC', 'RGB' => '153, 50, 204'],
            ['Nombre Castellano' => 'Magenta Oscuro', 'Nombre HTML' => 'DarkMagenta', 'Hexadecimal' => '#8B008B', 'RGB' => '139, 0, 139'],
            ['Nombre Castellano' => 'Púrpura', 'Nombre HTML' => 'Purple', 'Hexadecimal' => '#800080', 'RGB' => '128, 0, 128'],
            ['Nombre Castellano' => 'Índigo', 'Nombre HTML' => 'Indigo', 'Hexadecimal' => '#4B0082', 'RGB' => '75, 0, 130'],
            ['Nombre Castellano' => 'Azul Pizarra', 'Nombre HTML' => 'SlateBlue', 'Hexadecimal' => '#6A5ACD', 'RGB' => '106, 90, 205'],
            ['Nombre Castellano' => 'Azul Pizarra Medio', 'Nombre HTML' => 'MediumSlateBlue', 'Hexadecimal' => '#7B68EE', 'RGB' => '123, 104, 238'],
            ['Nombre Castellano' => 'Azul Pizarra Oscuro', 'Nombre HTML' => 'DarkSlateBlue', 'Hexadecimal' => '#483D8B', 'RGB' => '72, 61, 139']
        ];

        $colorHTML['verdes'] = [
            ['Nombre Castellano' => 'Verde Amarillento', 'Nombre HTML' => 'GreenYellow', 'Hexadecimal' => '#ADFF2F', 'RGB' => '173, 255, 47'],
            ['Nombre Castellano' => 'Verde Cartujano', 'Nombre HTML' => 'Chartreuse', 'Hexadecimal' => '#7FFF00', 'RGB' => '127, 255, 0'],
            ['Nombre Castellano' => 'Verde Césped', 'Nombre HTML' => 'LawnGreen', 'Hexadecimal' => '#7CFC00', 'RGB' => '124, 253, 0'],
            ['Nombre Castellano' => 'Lima', 'Nombre HTML' => 'Lime', 'Hexadecimal' => '#00FF00', 'RGB' => '0, 255, 0'],
            ['Nombre Castellano' => 'Verde Lima', 'Nombre HTML' => 'LimeGreen', 'Hexadecimal' => '#32CD32', 'RGB' => '50, 205, 50'],
            ['Nombre Castellano' => 'Verde Pálido', 'Nombre HTML' => 'PaleGreen', 'Hexadecimal' => '#98FB98', 'RGB' => '152, 251, 152'],
            ['Nombre Castellano' => 'Verde Claro', 'Nombre HTML' => 'LightGreen', 'Hexadecimal' => '#90EE90', 'RGB' => '144, 238, 144'],
            ['Nombre Castellano' => 'Verde Primavera Medio', 'Nombre HTML' => 'MediumSpringGreen', 'Hexadecimal' => '#00FA9A', 'RGB' => '0, 250, 154'],
            ['Nombre Castellano' => 'Verde Primavera', 'Nombre HTML' => 'SpringGreen', 'Hexadecimal' => '#00FF7F', 'RGB' => '0, 255, 127'],
            ['Nombre Castellano' => 'Verde Mar Medio', 'Nombre HTML' => 'MediumSeaGreen', 'Hexadecimal' => '#3CB371', 'RGB' => '60, 179, 113'],
            ['Nombre Castellano' => 'Verde Mar', 'Nombre HTML' => 'SeaGreen', 'Hexadecimal' => '#2E8B57', 'RGB' => '46, 139, 87'],
            ['Nombre Castellano' => 'Verde Bosque', 'Nombre HTML' => 'ForestGreen', 'Hexadecimal' => '#228B22', 'RGB' => '34, 139, 34'],
            ['Nombre Castellano' => 'Verde', 'Nombre HTML' => 'Green', 'Hexadecimal' => '#008000', 'RGB' => '0, 128, 0'],
            ['Nombre Castellano' => 'Verde Oscuro', 'Nombre HTML' => 'DarkGreen', 'Hexadecimal' => '#006400', 'RGB' => '0, 100, 0'],
            ['Nombre Castellano' => 'Amarillo Verdoso', 'Nombre HTML' => 'YellowGreen', 'Hexadecimal' => '#9ACD32', 'RGB' => '154, 205, 50'],
            ['Nombre Castellano' => 'Verde Oliva', 'Nombre HTML' => 'OliveDrab', 'Hexadecimal' => '#6B8E23', 'RGB' => '107, 142, 35'],
            ['Nombre Castellano' => 'Oliva', 'Nombre HTML' => 'Olive', 'Hexadecimal' => '#808000', 'RGB' => '128, 128, 0'],
            ['Nombre Castellano' => 'Verde Oliva Oscuro', 'Nombre HTML' => 'DarkOliveGreen', 'Hexadecimal' => '#556B2F', 'RGB' => '85, 107, 47'],
            ['Nombre Castellano' => 'Aguamarina Medio', 'Nombre HTML' => 'MediumAquamarine', 'Hexadecimal' => '#66CDAA', 'RGB' => '102, 205, 170'],
            ['Nombre Castellano' => 'Verde Mar Oscuro', 'Nombre HTML' => 'DarkSeaGreen', 'Hexadecimal' => '#8FBC8F', 'RGB' => '143, 188, 143'],
            ['Nombre Castellano' => 'Verde Mar Claro', 'Nombre HTML' => 'LightSeaGreen', 'Hexadecimal' => '#20B2AA', 'RGB' => '32, 178, 170'],
            ['Nombre Castellano' => 'Cyan Oscuro', 'Nombre HTML' => 'DarkCyan', 'Hexadecimal' => '#008B8B', 'RGB' => '0, 139, 139'],
            ['Nombre Castellano' => 'Carcel', 'Nombre HTML' => 'Teal', 'Hexadecimal' => '#008080', 'RGB' => '0, 128, 128']
        ];

        $colorHTML['azul'] = [
            ['Nombre Castellano' => 'Agua', 'Nombre HTML' => 'Aqua', 'Hexadecimal' => '#00FFFF', 'RGB' => '0, 255, 255'],
            ['Nombre Castellano' => 'Cyan', 'Nombre HTML' => 'Cyan', 'Hexadecimal' => '#00FFFF', 'RGB' => '0, 255, 255'],
            ['Nombre Castellano' => 'Cyan Suave', 'Nombre HTML' => 'LightCyan', 'Hexadecimal' => '#E0FFFF', 'RGB' => '224, 255, 255'],
            ['Nombre Castellano' => 'Turquesa Pastel', 'Nombre HTML' => 'PaleTurquoise', 'Hexadecimal' => '#AFEEEE', 'RGB' => '175, 238, 238'],
            ['Nombre Castellano' => 'Aguamarina', 'Nombre HTML' => 'Aquamarine', 'Hexadecimal' => '#7FFFD4', 'RGB' => '127, 255, 212'],
            ['Nombre Castellano' => 'Turquesa', 'Nombre HTML' => 'Turquoise', 'Hexadecimal' => '#40E0D0', 'RGB' => '64, 224, 208'],
            ['Nombre Castellano' => 'Turquesa Medio', 'Nombre HTML' => 'MediumTurquoise', 'Hexadecimal' => '#48D1CC', 'RGB' => '72, 209, 204'],
            ['Nombre Castellano' => 'Turquesa Oscuro', 'Nombre HTML' => 'DarkTurquoise', 'Hexadecimal' => '#00CED1', 'RGB' => '0, 206, 209'],
            ['Nombre Castellano' => 'Azul Cadete', 'Nombre HTML' => 'CadetBlue', 'Hexadecimal' => '#5F9EA0', 'RGB' => '95, 158, 160'],
            ['Nombre Castellano' => 'Azul Acero', 'Nombre HTML' => 'SteelBlue', 'Hexadecimal' => '#4682B4', 'RGB' => '70, 130, 180'],
            ['Nombre Castellano' => 'Azul Acero Claro', 'Nombre HTML' => 'LightSteelBlue', 'Hexadecimal' => '#B0C4DE', 'RGB' => '176, 196, 222'],
            ['Nombre Castellano' => 'Azul Pálido', 'Nombre HTML' => 'PowderBlue', 'Hexadecimal' => '#B0E0E6', 'RGB' => '176, 224, 230'],
            ['Nombre Castellano' => 'Azul Claro', 'Nombre HTML' => 'LightBlue', 'Hexadecimal' => '#ADD8E6', 'RGB' => '173, 216, 230'],
            ['Nombre Castellano' => 'Azul Cielo', 'Nombre HTML' => 'SkyBlue', 'Hexadecimal' => '#87CEEB', 'RGB' => '135, 206, 235'],
            ['Nombre Castellano' => 'Azul Cielo Claro', 'Nombre HTML' => 'LightSkyBlue', 'Hexadecimal' => '#87CEFA', 'RGB' => '135, 206, 250'],
            ['Nombre Castellano' => 'Azul Cielo Profundo', 'Nombre HTML' => 'DeepSkyBlue', 'Hexadecimal' => '#00BFFF', 'RGB' => '0, 191, 255'],
            ['Nombre Castellano' => 'Azul Capota', 'Nombre HTML' => 'DodgerBlue', 'Hexadecimal' => '#1E90FF', 'RGB' => '30, 144, 255'],
            ['Nombre Castellano' => 'Azul Añil', 'Nombre HTML' => 'CornflowerBlue', 'Hexadecimal' => '#6495ED', 'RGB' => '100, 149, 237'],
            ['Nombre Castellano' => 'Azul Pizarra Medio', 'Nombre HTML' => 'MediumSlateBlue', 'Hexadecimal' => '#7B68EE', 'RGB' => '123, 104, 238'],
            ['Nombre Castellano' => 'Azul Real', 'Nombre HTML' => 'RoyalBlue', 'Hexadecimal' => '#4169E1', 'RGB' => '65, 105, 255'],
            ['Nombre Castellano' => 'Azul', 'Nombre HTML' => 'Blue', 'Hexadecimal' => '#0000FF', 'RGB' => '0, 0, 255'],
            ['Nombre Castellano' => 'Azul Medio', 'Nombre HTML' => 'MediumBlue', 'Hexadecimal' => '#0000CD', 'RGB' => '0, 0, 205'],
            ['Nombre Castellano' => 'Azul Oscuro', 'Nombre HTML' => 'DarkBlue', 'Hexadecimal' => '#00008B', 'RGB' => '0, 0, 139'],
            ['Nombre Castellano' => 'Azul Naval', 'Nombre HTML' => 'Navy', 'Hexadecimal' => '#000080', 'RGB' => '0, 0, 128'],
            ['Nombre Castellano' => 'Azul Media Noche', 'Nombre HTML' => 'MidnightBlue', 'Hexadecimal' => '#191970', 'RGB' => '25, 25, 112']
        ];

        $colorHTML['marrones'] = [
            ['Nombre Castellano' => 'Seda de Maiz', 'Nombre HTML' => 'Cornsilk', 'Hexadecimal' => '#FFF8DC', 'RGB' => '255, 248, 220'],
            ['Nombre Castellano' => 'Almendra', 'Nombre HTML' => 'BlanchedAlmond', 'Hexadecimal' => '#FFEBCD', 'RGB' => '255, 235, 205'],
            ['Nombre Castellano' => 'Bizcocho', 'Nombre HTML' => 'Bisque', 'Hexadecimal' => '#FFE4C4', 'RGB' => '255, 228, 196'],
            ['Nombre Castellano' => 'Marrón Navaja', 'Nombre HTML' => 'NavajoWhite', 'Hexadecimal' => '#FFDEAD', 'RGB' => '255, 222, 173'],
            ['Nombre Castellano' => 'Marrón Trigo', 'Nombre HTML' => 'Wheat', 'Hexadecimal' => '#F5DEB3', 'RGB' => '245, 222, 179'],
            ['Nombre Castellano' => 'Madera Fuerte', 'Nombre HTML' => 'BurlyWood', 'Hexadecimal' => '#DEB887', 'RGB' => '222, 184, 135'],
            ['Nombre Castellano' => 'Marrón bronceado', 'Nombre HTML' => 'Tan', 'Hexadecimal' => '#D2B48C', 'RGB' => '210, 180, 140'],
            ['Nombre Castellano' => 'Marrón Atractivo', 'Nombre HTML' => 'RosyBrown', 'Hexadecimal' => '#BC8F8F', 'RGB' => '188, 143, 143'],
            ['Nombre Castellano' => 'Marrón Arenoso', 'Nombre HTML' => 'SandyBrown', 'Hexadecimal' => '#F4A460', 'RGB' => '224, 164, 96'],
            ['Nombre Castellano' => 'Vara de Oro', 'Nombre HTML' => 'Goldenrod', 'Hexadecimal' => '#DAA520', 'RGB' => '218, 165, 32'],
            ['Nombre Castellano' => 'Vara de Oro Oscura', 'Nombre HTML' => 'DarkGoldenrod', 'Hexadecimal' => '#B8860B', 'RGB' => '184, 134, 11'],
            ['Nombre Castellano' => 'Marrón Perú', 'Nombre HTML' => 'Peru', 'Hexadecimal' => '#CD853F', 'RGB' => '205, 133, 63'],
            ['Nombre Castellano' => 'Marrón Chocolate', 'Nombre HTML' => 'Chocolate', 'Hexadecimal' => '#D2691E', 'RGB' => '210, 105, 30'],
            ['Nombre Castellano' => 'Marrón Silla', 'Nombre HTML' => 'SaddleBrown', 'Hexadecimal' => '#8B4513', 'RGB' => '139, 69, 19'],
            ['Nombre Castellano' => 'Marrón Siena', 'Nombre HTML' => 'Sienna', 'Hexadecimal' => '#A0522D', 'RGB' => '160, 82, 45'],
            ['Nombre Castellano' => 'Marrón', 'Nombre HTML' => 'Brown', 'Hexadecimal' => '#A52A2A', 'RGB' => '165, 42, 42'],
            ['Nombre Castellano' => 'Castaño', 'Nombre HTML' => 'Maroon', 'Hexadecimal' => '#800000', 'RGB' => '128, 0, 0']
        ];

        $colorHTML['blancos'] = [
            ['Nombre Castellano' => 'Blanco', 'Nombre HTML' => 'White', 'Hexadecimal' => '#FFFFFF', 'RGB' => '255, 255, 255'],
            ['Nombre Castellano' => 'Blanco Nieve', 'Nombre HTML' => 'Snow', 'Hexadecimal' => '#FFFAFA', 'RGB' => '255, 250, 250'],
            ['Nombre Castellano' => 'Miel Crema', 'Nombre HTML' => 'Honeydew', 'Hexadecimal' => '#F0FFF0', 'RGB' => '240, 255, 240'],
            ['Nombre Castellano' => 'Menta Crema', 'Nombre HTML' => 'MintCream', 'Hexadecimal' => '#F5FFFA', 'RGB' => '245, 255, 250'],
            ['Nombre Castellano' => 'Azul Celeste', 'Nombre HTML' => 'Azure', 'Hexadecimal' => '#F0FFFF', 'RGB' => '240, 255, 255'],
            ['Nombre Castellano' => 'Azul Alicia', 'Nombre HTML' => 'AliceBlue', 'Hexadecimal' => '#F0F8FF', 'RGB' => '240, 248, 255'],
            ['Nombre Castellano' => 'Blanco Fantasma', 'Nombre HTML' => 'GhostWhite', 'Hexadecimal' => '#F8F8FF', 'RGB' => '248, 248, 255'],
            ['Nombre Castellano' => 'Blanco Humo', 'Nombre HTML' => 'WhiteSmoke', 'Hexadecimal' => '#F5F5F5', 'RGB' => '245, 245, 245'],
            ['Nombre Castellano' => 'Concha de Mar', 'Nombre HTML' => 'Seashell', 'Hexadecimal' => '#FFF5EE', 'RGB' => '255, 245, 238'],
            ['Nombre Castellano' => 'Beige', 'Nombre HTML' => 'Beige', 'Hexadecimal' => '#F5F5DC', 'RGB' => '245, 245, 220'],
            ['Nombre Castellano' => 'Blanco Cordón Viejo', 'Nombre HTML' => 'OldLace', 'Hexadecimal' => '#FDF5E6', 'RGB' => '253, 245, 230'],
            ['Nombre Castellano' => 'Blanco Floral', 'Nombre HTML' => 'FloralWhite', 'Hexadecimal' => '#FFFAF0', 'RGB' => '255, 250, 240'],
            ['Nombre Castellano' => 'Blanco Marfil', 'Nombre HTML' => 'Ivory', 'Hexadecimal' => '#FFFFF0', 'RGB' => '255, 255, 240'],
            ['Nombre Castellano' => 'Blanco Antigüo', 'Nombre HTML' => 'AntiqueWhite', 'Hexadecimal' => '#FAEBD7', 'RGB' => '250, 235, 215'],
            ['Nombre Castellano' => 'Blanco Lino', 'Nombre HTML' => 'Linen', 'Hexadecimal' => '#FAF0E6', 'RGB' => '250, 240, 230'],
            ['Nombre Castellano' => 'Lavanda', 'Nombre HTML' => 'LavenderBlush', 'Hexadecimal' => '#FFF0F5', 'RGB' => '255, 240, 245'],
            ['Nombre Castellano' => 'Rosa Palo', 'Nombre HTML' => 'MistyRose', 'Hexadecimal' => '#FFE4E1', 'RGB' => '255, 228, 225']
        ];

        $colorHTML['grises'] = [
            ['Nombre Castellano' => 'Gainsboro', 'Nombre HTML' => 'Gainsboro', 'Hexadecimal' => '#DCDCDC', 'RGB' => '220, 220, 220'],
            ['Nombre Castellano' => 'Gris Claro', 'Nombre HTML' => 'LightGrey', 'Hexadecimal' => '#D3D3D3', 'RGB' => '211, 211, 211'],
            ['Nombre Castellano' => 'Gris Plata', 'Nombre HTML' => 'Silver', 'Hexadecimal' => '#C0C0C0', 'RGB' => '192, 192, 192'],
            ['Nombre Castellano' => 'Gris Oscuro', 'Nombre HTML' => 'DarkGray', 'Hexadecimal' => '#A9A9A9', 'RGB' => '169, 169, 169'],
            ['Nombre Castellano' => 'Gris', 'Nombre HTML' => 'Gray', 'Hexadecimal' => '#808080', 'RGB' => '128, 128, 128'],
            ['Nombre Castellano' => 'Gris Ténue', 'Nombre HTML' => 'DimGray', 'Hexadecimal' => '#696969', 'RGB' => '105, 105, 105'],
            ['Nombre Castellano' => 'Gris Pizarra Claro', 'Nombre HTML' => 'LightSlateGray', 'Hexadecimal' => '#778899', 'RGB' => '119, 136, 153'],
            ['Nombre Castellano' => 'Gris Pizarra', 'Nombre HTML' => 'SlateGray', 'Hexadecimal' => '#708090', 'RGB' => '112, 128, 144'],
            ['Nombre Castellano' => 'Gris Pizarra Oscuro', 'Nombre HTML' => 'DarkSlateGray', 'Hexadecimal' => '#2F4F4F', 'RGB' => '47, 79, 79'],
            ['Nombre Castellano' => 'Negro', 'Nombre HTML' => 'Black', 'Hexadecimal' => '#000000', 'RGB' => '0, 0, 0']
        ];

        if ($grupo == null) {
            $data = array_merge($colorHTML['rojos'], $colorHTML['rosas'], $colorHTML['naranjas'], $colorHTML['amarillos'], $colorHTML['purpuras'], $colorHTML['verdes'], $colorHTML['azul'], $colorHTML['marrones'], $colorHTML['blancos'], $colorHTML['grises']);
        } else {
            if (isset($colorHTML[$grupo])) {
                $data = $colorHTML[$grupo];
            } else {
                $data = null;
            }

        }

        return $data;

    }

    /**
     * Retorna un arreglo con el HEXCOLOR
     * Se puede seleccionar grupo o retornar el 100%
     *
     * @return ARRAY
     *
     */
    public static function hexColorArray(string $grupo = null){

        /* Colores */
        $colores = Self::colorHTML($grupo);

        /* Colores Hex */
        if ($colores != null) {
            return array_column($colores, 'Hexadecimal');
        } else {
            return null;
        }

    }

    /**
     * Retorna un arreglo con la cantidad de colores solicitados
     * Permite Definir que grupo de colores trabajaro o en caso de ser NULL trabajar sobre el 100% de los Colores.
     *
     * @return ARRAY
     *
     */
    public static function randomColor(int $cantidad, string $grupo = null){

        $arrayColor = Self::hexColorArray($grupo);

        if ($cantidad == 1) {

            $rand = rand(0,5);
            return $arrayColor[$rand];

        } elseif (($cantidad > 1)) {

            $coloresHex = array_rand($arrayColor, $cantidad);
            $data = array();
            foreach ($coloresHex as $llave => $index) {
                array_push($data, $arrayColor[$index]);
            }
            return $data;

        }
    }

}

?>
