<?php


/*! \mainpage Página principal del proyecto
 *
 * Este sería el texto a incluir en la página principal del proyecto.
 * Se puede linkar a otras páginas de esta maner
 * 
 * - \subpage puntoUno "Una página"
 *
 * - \subpage puntoDos "Otra página"
 *
 * \author David G. Bonacho
 * \version 67.9
 */ 

/*! \page puntoUno Esto es una página
 *
 * Este sería el texto a incluir en la página principal del proyecto.
 *
 */

/*! \page puntoDos Ora página
 *
 * Este sería el texto a incluir en la página principal del proyecto.
 * Es posible incluir referencias de esta manera
 * 
 * - \ref basicas\Sistema "Más sobre una página"
 * - \ref Usuario "Más sobre otra"
 */

include("lib/classes.php");
use basicas\Sistema;


$instanciar = new Sistema("misistema");

echo $instanciar->obtenerNombre().'<br><br>';

include("lib/masclasses.php");
use basicas\masclases\Mover as mimovimiento;

echo mimovimiento::mover(1, "otro");
