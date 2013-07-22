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
namespace Pizza\Config;

use Pizza\Entity\Pizza;
use Zend\Math\Rand;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;

/**
 * Service-Manager configuration class
 * 
 * @package    Pizza
 */
class ServiceConfiguration extends Config
{
    public function configureServiceManager(ServiceManager $serviceManager)
    {
        $serviceManager->setInvokableClass('Pizza\CreateForm', 'Pizza\Form\PizzaCreate');
        
        $serviceManager->setFactory('Pizza\Entity', function ($serviceManager) {
            $pizza = new Pizza();
            $pizza->setId(Rand::getInteger(10000, 99999));
            $pizza->setName('Pizza Salami');
            $pizza->setPrice(6.95);
            
            return $pizza;
        });
        
        $serviceManager->setFactory('Pizza\Service', 'Pizza\Service\PizzaFactory');
        
        $serviceManager->setAlias('CreateForm', 'Pizza\CreateForm');
        $serviceManager->setAlias('Entity', 'Pizza\Entity');
        
        $serviceManager->setShared('Pizza\Entity', false);
    }
}
