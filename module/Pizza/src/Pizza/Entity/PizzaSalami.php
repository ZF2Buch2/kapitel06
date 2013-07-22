<?php
/**
 * ZF2 Buch Kapitel 6
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Entity;

use Pizza\Crust\WheatFlourAwareInterface;

/**
 * Pizza Salami entity class
 * 
 * @package    Pizza
 */
class PizzaSalami implements WheatFlourAwareInterface
{
    protected $id    = 1101;
    protected $name  = 'Pizza Salami';
    protected $price = 6.95;
    protected $crust = null;
    
    public function setWheatFlourCrust($crust)
    {
        $this->crust = $crust;
    }
    
    public function getWheatFlourCrust()
    {
        return $this->crust;
    }
}
