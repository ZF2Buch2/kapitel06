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
namespace Pizza\Service;

use Pizza\Entity\Pizza as PizzaEntity;
use Pizza\Form\PizzaCreate;

/**
 * Pizza service class
 * 
 * @package    Pizza
 */
class Pizza
{
    protected $createForm = null;
    protected $entity     = null;
    
    public function __construct(PizzaCreate $createForm, PizzaEntity $entity)
    {
        $this->setCreateForm($createForm);
        $this->setEntity($entity);
    }
    
    public function setCreateForm(PizzaCreate $createForm)
    {
        $this->createForm = $createForm;
    }
    
    public function getCreateForm()
    {
        return $this->createForm;
    }

    public function setEntity(PizzaEntity $entity)
    {
        $this->entity = $entity;
    }
    
    public function getEntity()
    {
        return $this->entity;
    }
}