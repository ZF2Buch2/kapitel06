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