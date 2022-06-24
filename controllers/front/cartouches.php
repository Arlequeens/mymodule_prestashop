<?php

use mymodule\Entity\PDACustomer;
use Doctrine\ORM\EntityManagerInterface;

use mymodule\Repository\PDACustomerRepository;
class mymoduleCartouchesModuleFrontController extends ModuleFrontController
{
    private $num;

    public function process()
    {
        $id_customer = 3;

        $this->num = (int) Tools::getValue("num");
        $entityManager = $this->get('doctrine.orm.entity_manager');
        dump($entityManager);
        $repository = $entityManager->getRepository(PDACustomer::class);

        dump($repository);

        $pdaCustomers = $repository->findBy(
            ['id_customer' => $id_customer],
            ['name_customer' => 'DESC']
        );
        $pdaCustomerOne = $repository->findOneBy(['id_customer' => $id_customer]);
        $pdaCustomer = $repository->find(2);
        dump($pdaCustomers);
        dump($pdaCustomerOne);
        dump($pdaCustomer);
        dump($repository->findAll());

        // $pdaCustomer->setNameCustomer("Arnold");
        $pdaCustomer->setNameCustomer("Lambertus Apotheke");
        $entityManager->flush();

        $pdaCustomer = $repository->find(2);
        dump($pdaCustomer);

        // $entityManager->remove($pdaCustomer);
        // $entityManager->flush();

        // $pdaCustomers = $repository->findAllBySocId(4);
        // dump($pdaCustomers);

        // $pdaCustomerRepository = $this->get('pda_customer_repository');
        // $pdaCustomerRepository = $this->get('product_comment_repository');
        // dump($pdaCustomerRepository);

        // dump($doctrine);
    }

    public function initContent()
    {
        $formFields = [

            // Num
            (new FormField)
                ->setName('num')
                ->setType('number')
                ->setRequired(true)
                ->setValue("")
                // ->setMaxLength("128")
                ->setLabel($this->trans('Your num'))
                ->toArray(),

            // // Standard text field
            // (new FormField)
            //     ->setName('first_name')
            //     ->setType('text')
            //     ->setRequired(true)
            //     ->setValue("John")
            //     ->setMaxLength("128")
            //     ->setLabel($this->trans('Your first name'))
            //     ->toArray(),
                
            // // File field
            // (new FormField)
            //     ->setName('file_upload')
            //     ->setType('file')
            //     ->setLabel($this->l('Upload a document'))
            //     ->toArray(),
                
            // // Select field
            // (new FormField)
            //     ->setName('select_field')
            //     ->setType('select')
            //     ->setAvailableValues(['key' => 'value 1', 'key2' => 'value2'])
            //     ->setLabel($this->l('Select type'))
            //     ->toArray(),
                
            // // Country select field (like select but add a 'js js-country' class)
            // (new FormField)
            //     ->setName('country_field')
            //     ->setType('countrySelect')
            //     ->setAvailableValues(['key' => 'value 1', 'key2' => 'value2'])
            //     ->setLabel($this->l('Country select'))
            //     ->toArray(),
                
            // // Checkbox field
            // (new FormField)
            //     ->setName('checkbox_field')
            //     ->setType('checkbox')
            //     ->setValue(1)
            //     ->setLabel($this->l('Checkbox type'))
            //     ->toArray(),
                
            // // Radio buttons field
            // (new FormField)
            //     ->setName('radio_field')
            //     ->setType('radio-buttons')
            //     ->setAvailableValues(['key' => 'value 1', 'key2' => 'value2'])
            //     ->setLabel($this->l('Radio buttons type'))
            //     ->toArray(),
                
            // // Date field
            // (new FormField)
            //     ->setName('date_field')
            //     ->setType('date')
            //     ->setLabel($this->l('Date'))
            //     ->toArray(),
                
            // // Birthday field
            // (new FormField)
            //     ->setName('birthday_field')
            //     ->setType('birthday')
            //     ->setLabel($this->l('Birthday'))
            //     ->toArray(),
                
            // // Password field
            // (new FormField)
            //     ->setName('password_field')
            //     ->setType('password')
            //     ->setLabel($this->l('Password'))
            //     ->toArray(),
                
            // // Email field
            // (new FormField)
            //     ->setName('email_field')
            //     ->setType('email')
            //     ->setLabel($this->l('Email type'))
            //     ->toArray(),
                
            // // Phone field
            // (new FormField)
            //     ->setName('phone_field')
            //     ->setType('phone')
            //     ->setLabel($this->l('Phone type'))
            //     ->toArray(),
                
            // // Hidden field
            // (new FormField)
            //     ->setName('hidden_field')
            //     ->setType('hidden')
            //     ->setValue('My hidden value')
            //     ->toArray()
        ];
        
        parent::initContent();
        $this->context->smarty->assign([
            'num' => $this->num,
            'fields' => $formFields
        ]);
        $this->setTemplate('module:mymodule/views/templates/front/cartouches.tpl');
    }
}