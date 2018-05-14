<?php

namespace app;

// INCLUIR CLASES NECESARIAS

/**
 * Description of Persona
 *
 * @author mariano
 */
class Persona {
    private $nombre;
    private $edad;
    private $sexo;
    private $altura;
    
    public function __construct(string $nombre, int $edad, string $sexo, int $altura) 
    {
        // completar
    }
    
    /**
     * Es mayor de edad si su edad es mayor que 17
     * @return string la expresión SI o NO 
     */
    public function esMayorEdad()
    {
        // completar
    }
    
    /**
     * Una persona es Alta si mide más de 170, intermedia si está entre
     * 140 y 170 y baja si mide menos de 140
     * @return string el código de la altura de acuerdo a la lista de opciones
     */
    public function getValorRangoAltura()
    {
        // completar
    }

    /**
     * @return string la descripción del código de la altura
     */
    public function getDescripcionRangoAltura()
    {
        // completar
    }
    
    public function getDescripcionSexo()
    {
        // completar
    }
    
    function getNombre() 
    {
        return $this->nombre;
    }

    function getEdad() 
    {
        return $this->edad;
    }

    function getSexo() 
    {
        return $this->sexo;
    }

    function getAltura() 
    {
        return $this->altura;
    }

    function setNombre($nombre) 
    {
        $this->nombre = $nombre;
    }

    function setEdad($edad) 
    {
        $this->edad = $edad;
    }

    function setSexo($sexo) 
    {
        $this->sexo = $sexo;
    }

    function setAltura($altura) 
    {
        $this->altura = $altura;
    }


    
}
