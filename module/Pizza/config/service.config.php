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
use Pizza\Entity\Pizza;
use Zend\Math\Rand;

/**
 * Service-Manager configuration
 * 
 * @package    Pizza
 */
return array(
    'invokables' => array(
        'Pizza\CreateForm' => 'Pizza\Form\PizzaCreate',
    ),
    'factories' => array(
        'Pizza\Entity' => function ($serviceManager) {
            $pizza = new Pizza();
            $pizza->setId(Rand::getInteger(10000, 99999));
            $pizza->setName('Pizza Salami');
            $pizza->setPrice(6.95);
            
            return $pizza;
        },
        'Pizza\Service' => 'Pizza\Service\PizzaFactory',
    ),
    'aliases' => array(
        'CreateForm' => 'Pizza\CreateForm',
        'Entity'     => 'Pizza\Entity',
    ),
    'shared' => array(
        'Pizza\Entity' => false,
    ),
);
