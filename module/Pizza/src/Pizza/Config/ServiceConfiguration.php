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
