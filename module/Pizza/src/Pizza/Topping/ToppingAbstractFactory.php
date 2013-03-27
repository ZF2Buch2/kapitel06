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
namespace Pizza\Topping;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Abstract topping factory
 * 
 * @package    Pizza
 */
class ToppingAbstractFactory implements AbstractFactoryInterface
{
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        if (class_exists($this->getClassName($requestedName))) {
            return true;
        }
        
        return false;
    }
    
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $class = $this->getClassName($requestedName);
        
        $instance = new $class;
        
        if ($instance instanceof ToppingInterface) {
            return $instance;
        }
        
        return false;
    }
    
    protected function getClassName($requestedName)
    {
        $parts = split('-', $requestedName);
        
        return __NAMESPACE__ . '\\' . $parts[1];
    }
}