<?php

namespace basicas;

/**
 * @file
 * Ejemplo de código PHP para documentar con Doxygen.
 * @author David GB
 * @version 1.0
 * @since 2024-01-12
 * @copyright David G. Bonacho
 */

/**
 * Clase principal que representa un sistema.
 */
class Sistema {
    /**
     * @var string Nombre del sistema.
     */
    public $nombre;

    /**
     * Constructor de la clase Sistema.
     *
     * @param string $nombre Nombre del sistema.
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre del sistema.
     *
     * @return string El nombre del sistema.
     */
    public function obtenerNombre() {
        return $this->nombre;
    }

    /**
     * Realiza una acción específica en el sistema.
     *
     * @param string $accion Acción a realizar.
     */
    public function realizarAccion($accion) {
        // Lógica para realizar la acción.
    }

    /**
     * @deprecated Este método será eliminado en futuras versiones.
     * Desconectar el sistema.
     */
    public function desconectar() {
        // Lógica para desconectar el sistema.
    }
}

/**
 * Clase que representa un usuario en el sistema.
 */
class Usuario {
    /**
     * @var string Nombre del usuario.
     */
    public $nombre;

    /**
     * Constructor de la clase Usuario.
     *
     * @param string $nombre Nombre del usuario.
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre del usuario.
     *
     * @return string El nombre del usuario.
     */
    public function obtenerNombre() {
        return $this->nombre;
    }

    /**
     * Realiza una acción específica como usuario.
     *
     * @param string $accion Acción a realizar.
     */
    public function realizarAccion($accion) {
        // Lógica para realizar la acción como usuario.
    }

    /**
     * Cambia la contraseña del usuario.
     *
     * @param string $nuevaContrasena Nueva contraseña.
     */
    public function cambiarContrasena($nuevaContrasena) {
        // Lógica para cambiar la contraseña del usuario.
    }
}


/**
 * Clase para pintar una página del sistema
 * @link https://www.tizedit.com
 */

class paintPage {
    /**
     * @var string Nombre de la página
     */
    public $nombre;

    /**
     * Constructor de la clase
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function paint() {
        // Lógica para pintar la página
    }

}

/**
 * Clase que no debe documentarse
 * @ignore 
 */

 class noDocumentar {
    /**
     * @var string Null var
     */
    public $nullvar;

    /**
     * Constructor de la clase no documentada
     */
    public function __construct($nombre) {
        $this->nullvar = $nombre;
    }

    public function myfunct() {
        // Lógica 
    }

}