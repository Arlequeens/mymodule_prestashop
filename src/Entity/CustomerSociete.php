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

class CustomerSociete extends ObjectModel
{
    /**
     * @var int
     */
    public $id_customer;

    /**
     * @var int
     */
    public $rowid_dolibarr_societe;

    public static $definition = [
        'table' => 'customer_societe',
        'primary' => 'id_customer_societe',
        'fields' => [
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'rowid_dolibarr_societe' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        ],
    ];
}