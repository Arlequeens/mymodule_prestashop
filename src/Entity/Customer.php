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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use PrestaShop\PrestaShop\Adapter\Entity\Customer as BaseCustomer;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Customer
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_customer", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id_customer;
}