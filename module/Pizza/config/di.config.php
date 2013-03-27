<?php
/**
 * ZF2 Buch Kapitel 6
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
use Zend\Math\Rand;

/**
 * Dependeny injection configuration
 * 
 * @package    Pizza
 */
return array(
    'definition' => array(
        'class' => array(
            'Pizza\Crust\WheatFlour'     => array(),
            'Pizza\Topping\TomatoStodge' => array(),
            'Pizza\Topping\Cheese'       => array(),
            'Pizza\Topping\Melon'        => array(),
            'Pizza\Topping\Salami'       => array(),
            'Pizza\Entity\PizzaMelon'    => array(
                'instantiator' => '__construct',
                'methods' => array(
                    '__construct' => array('required' => true),
                    'setId'       => array('required' => false),
                    'setName'     => array('required' => false),
                    'setPrice'    => array('required' => false),
                ),
                'parameters'  => array(
                    '__construct' => array(
                        array('crust', 'Pizza\Crust\WheatFlour', true),
                        array('tomatoStodge', 'Pizza\Topping\TomatoStodge', true),
                        array('cheese', 'Pizza\Topping\Cheese', true),
                        array('melon', 'Pizza\Topping\Melon', true),
                        array('salami', 'Pizza\Topping\Salami', true),
                    ),
                    'setId' => array(
                        array('id', null, true),
                    ),
                    'setName' => array(
                        array('name', null, true),
                    ),
                    'setPrice' => array(
                        array('price', null, true),
                    ),
                ),
            ),
        ),
    ),
    'instance' => array(
        'Pizza\Entity\PizzaMelon' => array(
            'parameters' => array(
                'id'    => Rand::getInteger(100, 199),
                'name'  => 'Pizza Melone',
                'price' => round(Rand::getFloat() + 6, 2),
            ),
        ),
    ),
);
