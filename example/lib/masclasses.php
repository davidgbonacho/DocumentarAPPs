<?php

namespace basicas\masclases;

/**
 * Clase para mover un objeto en pantalla
 * @author Tutanito de tal
 * @link www.tutanito.com
 */
class Mover {
    /**
     * @var int modo
     */
    public $modo;

    /**
     * Crear constructor
     */
    public function __construct($mode) {
        $this->modo = $mode;
    }

    /**
     * Un método cualquiera
     * @param int tipo 
     * @param int otro tipo
     */
    static function mover($tipo, $otro) {   
        return $tipo . $otro;
    }
}

/**
 * Clase para acceder a bbdd
 */
class acceso {
    /**
     * @var int tipo de acceso
     * @var string nombre de la bbdd
     */
    public $tipo;
    public $nombre;

    /**
     * Constructor
     * @param int $tipo el tipo de acceso
     * @param string $nombre el nombre de la bbdd
     */
     public function __construct($tipo, $nombre) {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
     }

     /**
      * Iniciar el acceso a la bbdd
      */
      public function iniciar() {
        //
      }

}

