<?php
/**
 * 2007-2019 Friends of PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 */

namespace mymodule\Entity;

use PrestaShop\PrestaShop\Adapter\Entity\ObjectModel;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use mymodule\Repository\PDACustomerRepository;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
// @ORM\Entity(repositoryClass=PDACustomerRepository::class)
class PDACustomer
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_pda_customer", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id_pda_customer;

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="id_customer", referencedColumnName="id_customer")
     */
    private $id_customer;

    /**
     * @var int
     *
     * @ORM\Column(name="socid_dolibarr", type="integer")
     */
    private $socid_dolibarr;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_customer", type="string", length=64)
     */
    private $ref_customer;

    /**
     * @var string
     *
     * @ORM\Column(name="name_customer", type="string", length=64)
     */
    private $name_customer;

    /**
     * Set the value of name_customer
     *
     * @param  string  $name_customer
     *
     * @return  self
     */ 
    public function setNameCustomer(string $name_customer)
    {
        $this->name_customer = $name_customer;

        return $this;
    }
}