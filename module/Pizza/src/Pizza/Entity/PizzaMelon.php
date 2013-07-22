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

use Pizza\Crust\WheatFlour;
use Pizza\Topping\Cheese;
use Pizza\Topping\Melon;
use Pizza\Topping\Salami;
use Pizza\Topping\TomatoStodge;

/**
 * Pizza Melon entity class
 * 
 * @package    Pizza
 */
class PizzaMelon
{
    protected $id;
    protected $name;
    protected $price;
    protected $crust = null;
    protected $toppings = array();
    
    public function __construct(WheatFlour $crust, TomatoStodge $tomatoStodge, 
        Cheese $cheese, Melon $melon, Salami $salami
    ) {
        $this->crust = $crust;
        $this->toppings[] = $tomatoStodge;
        $this->toppings[] = $cheese;
        $this->toppings[] = $melon;
        $this->toppings[] = $salami;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
