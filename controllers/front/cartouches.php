<?php
class mymoduleCartouchesModuleFrontController extends ModuleFrontController
{
    private $num;

    public function process()
    {
        $this->num = Tools::getValue("num");
        dump($this->num);

        dump($this->context->link->getModuleLink('mymodule','cartouches'));
    }

    public function initContent()
    {
        // $num = 0;
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