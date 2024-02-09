<?php

namespace masclases;

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
     * @param int $mode modo de movimiento (int)
     */
    public function __construct($mode) {
        $this->modo = $mode;
    }

    /**
     * Un método cualquiera
     * @param int $tipo tipo 
     * @param int $otro otro tipo
     * @return boolean true si correcta
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
      * @return array resultado de la consulta 
      */
      public function iniciar() {
        //
      }

}

