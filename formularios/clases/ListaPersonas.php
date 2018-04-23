<?php

namespace app\clases;

class ListaPersonas 
{
    private static $lista = [
        [
            'correo'=>'correo1@gmail.com',
            'apellido'=>'Gimenez',
            'estudiante'=>'N',
        ],
        [
            'correo'=>'correo2@gmail.com',
            'apellido'=>'Boisselier',
            'estudiante'=>'N',
        ],
        [
            'correo'=>'correo3@gmail.com',
            'apellido'=>'Herrero',
            'estudiante'=>'N',
        ]
    ];
    public static function obtenerListaPersonas(): array
    {
      return self::$lista;
    }
    
}