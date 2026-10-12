<?php
if (!defined('_TB_VERSION_')) {
    exit;
}

/**
 * class AdminSkynetA11ypdfRemediationController
 */
class AdminSkynetA11ypdfRemediationController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign([
            'module_dir' => $this->module->getPathUri(),
            'my_form'    => $this->module->renderForm(),
        ]);
     $this->context->controller->addCSS(
            $this->module->getPathUri().'views/css/style.css'
        );

        $this->context->controller->addJS(
            $this->module->getPathUri().'views/js/config.js'
        );

        $this->context->controller->addJS(
            $this->module->getPathUri().'views/js/icons.js'
        );

        $this->context->controller->addJS(
            $this->module->getPathUri().'views/js/account.js'
        );

        $this->context->controller->addJS(
            $this->module->getPathUri().'views/js/api.js'
        );

        $this->context->controller->addJS(
            $this->module->getPathUri().'views/js/app.js'
        );

        // inject into controller template system
        $this->context->smarty->assign([
            'content' => $this->content,
        ]);
    }
}
