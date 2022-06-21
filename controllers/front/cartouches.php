<?php
class mymoduleCartouchesModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:mymodule/views/templates/front/cartouches.tpl');
    }
}