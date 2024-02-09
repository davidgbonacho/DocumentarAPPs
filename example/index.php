<?php


/** @mainpage Página principal del proyecto
 *
 * Este sería el texto a incluir en la página principal del proyecto.
 * Se puede linkar a otras páginas de esta manera
 * 
 * - @subpage puntoUno "Una página"
 *
 * - @subpage puntoDos "Otra página"
 *
 * @author David G. Bonacho
 * @version 67.9
 * @link https://www.tizedit.com
 */ 

/** @page puntoUno Esto es una página llamada puntoUno
 *
 * Este sería el texto a incluir en esta página
 *
 */

/** @page puntoDos Ora página
 *
 * Este sería el texto a incluir en otra página llamada puntoDos, con dos referencias:
 * 
 * - @ref referenciaA "Más sobre obtenerNombre"
 * - @ref referenciaB "Más sobre realizarAccion"
 */


 /** @anchor referenciaA 
 *   @page nuevaPagina obtenerNombre
 *
 * Referencia en relación a obtenerNombre
 * 
 */


 /** @anchor referenciaB
 *   @page nuevaPaginaB realizarAcction
 *
 * Referencia en relación a realizarAcction
 * 
 */


include("lib/classes.php");
use basicas\Sistema;


$instanciar = new Sistema("misistema");

echo $instanciar->obtenerNombre().'<br><br>';

include("lib/masclasses.php");
use masclases\Mover as mimovimiento;

echo mimovimiento::mover(1, "otro");
