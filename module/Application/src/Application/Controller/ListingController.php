<?php
/**
 * ZF2 Buch Kapitel 6
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Debug\Debug;
use Zend\Di\Config as DiConfig;
use Zend\Di\Di;
use Zend\Di\DefinitionList;
use Zend\Di\Definition\CompilerDefinition;
use Zend\Di\Definition\ArrayDefinition;
use Zend\Di\Definition\RuntimeDefinition;
use Zend\Math\Rand;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\Config as ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\View\Model\ViewModel;
use Pizza\Config\ServiceConfiguration;
use Pizza\Crust\WheatFlourAwareInterface;
use Pizza\Topping\ToppingAbstractFactory;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 06.01
     */
    public function listing0601Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.02
     */
    public function listing0602Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.03
     */
    public function listing0603Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.04
     */
    public function listing0604Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.05
     */
    public function listing0605Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.06
     */
    public function listing0606Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.07
     */
    public function listing0607Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.08
     */
    public function listing0608Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 06.09
     */
    public function listing0609Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.10
     */
    public function listing0610Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.11
     */
    public function listing0611Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.12
     */
    public function listing0612Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.13
     */
    public function listing0613Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.14
     */
    public function listing0614Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.15
     */
    public function listing0615Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.16
     */
    public function listing0616Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.17
     */
    public function listing0617Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.18
     */
    public function listing0618Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 06.19
     */
    public function listing0619Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.20
     */
    public function listing0620Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.21
     */
    public function listing0621Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 06.22
     */
    public function listing0622Action()
    {
        // setup output
        $output = '';
        
        // create configuration
        $config = new DiConfig(include LUIGI_ROOT . '/module/Pizza/config/di.config.php');
        
        // configure dependency injection container
        $di = new Di();
        $di->configure($config);
        
        // get pizza melon
        $pizzaMelon = $di->get('Pizza\Entity\PizzaMelon');
        
        // output pizza
        $output.= Debug::dump($pizzaMelon, null, false);

        return new ViewModel(array(
            'output' => $output,
        ));
    }
}
