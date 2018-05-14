<?php

namespace app;
// INCLUIR CLASES NECESARIAS

/**
 * Description of Helpers
 *
 * @author mariano
 */
class Helpers 
{
   
    public static function listaPersonas()
    {        
        $persona1 = new Persona('mariano', 38, 'M', 180);
        $persona2 = new Persona('juan', 5, 'M', 110);
        $persona3 = new Persona('ivan', 15, 'M', 170);
        $persona4 = new Persona('valeria', 37, 'F', 160);
        $persona5 = new Persona('berenice', 18, 'F', 160);
        return [
            $persona1, $persona2, $persona3, $persona4, $persona5
        ];
    }
    
    public static function listaSexos()
    {
        return [
            ''=>'Todos',
            'M'=>'Masculino',
            'F'=>'Femenino'
            ];
    }
    
    public static function listaAlturas()
    {
        return [
            'A'=>'Altos',
            'I'=>'Intermedios',
            'B'=>'Bajos'
            ];
    }
    
    // Este sería un buen lugar para generar un método que genere una lista de opciones
    
    
}
