<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyModule extends Module
{
    public function __construct()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => '1.7.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My module');
        $this->description = $this->l('Description of my module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return (
            parent::install() 
            && $this->registerHook('leftColumn')
            && $this->registerHook('home')
            && $this->registerHook('top')
            && $this->registerHook('actionFrontControllerSetMedia')
            && Configuration::updateValue('MYMODULE_NAME', 'my friend')
        ); 
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign([
            'my_module_name' => Configuration::get('MYMODULE_NAME'),
            'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
        ]);

        return $this->display(__FILE__, 'mymodule.tpl');
    }

    public function hookDisplayHome($params)
    {
        // $this->context->smarty->assign([
        //     'my_module_name' => Configuration::get('MYMODULE_NAME'),
        //     'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
        // ]);

        return $this->display(__FILE__, 'myhome.tpl');
    }

    public function hookDisplayTop($params)
    {
        $this->context->smarty->assign([
            'cartouches_link' => $this->context->link->getModuleLink('mymodule', 'cartouches')
        ]);

        return $this->display(__FILE__, 'mytop.tpl');
    }

    public function hookDisplayRightColumn($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'mymodule-style',
            $this->_path.'views/css/mymodule.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'mymodule-javascript',
            $this->_path.'views/js/mymodule.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }

    public function uninstall()
    {
        return (
            parent::uninstall() 
            && Configuration::deleteByName('MYMODULE_NAME')
        );
    }
}