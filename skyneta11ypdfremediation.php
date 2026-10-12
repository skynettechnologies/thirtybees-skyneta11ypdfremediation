<?php
/**
 * Class SkynetA11ypdfRemediation
 *
 * @since 1.0.0
 */
class SkynetA11ypdfRemediation extends Module
{
    const DISPLAY_POSITION = 'SkynetA11ypdfRemediation_POSITION';
    const DISPLAY_LAYOUT = 'SkynetA11ypdfRemediation_LAYOUT';
    const DISPLAY_PALETTE_BANNER = 'SkynetA11ypdfRemediation_BANNER';
    const DISPLAY_PALETTE_BANNER_TEXT = 'SkynetA11ypdfRemediation_BANNERTXT';
    const DISPLAY_PALETTE_BUTTON = 'SkynetA11ypdfRemediation_BUTTON';
    const DISPLAY_PALETTE_BUTTON_TEXT = 'SkynetA11ypdfRemediation_BUTTONTXT';
    const DISPLAY_LEARN_MORE_LINK = 'SkynetA11ypdfRemediation_LEARNMORE';
    const DISPLAY_CUSTOM_TEXT = 'SkynetA11ypdfRemediation_CUSTOMTXT';
    const DISPLAY_MESSAGE_TEXT = 'SkynetA11ypdfRemediation_MESSAGETXT';
    const DISPLAY_DISMISS_TEXT = 'SkynetA11ypdfRemediation_DISMISSTXT';
    const DISPLAY_POLICY_LINK_TEXT = 'SkynetA11ypdfRemediation_POLICYTXT';

    /**
     * SkynetA11ypdfRemediation constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->name = 'skyneta11ypdfremediation';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Skynet Technologies USA LLC';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('SkynetA11y PDF Remediation');
        $this->description = $this->l('AI-powered PDF accessibility remediation - upload PDFs, scan website PDFs, and download remediated files.');
    }

    /**
     * Install this module
     *
     * @return bool Indicates whether this module has been successfully installed
     */
    public function install()
    {
        if (!parent::install()) {
            return false;
        }

        
        $this->registerHook('displayHeader');

        return true;
    }

    public function uninstall()
    {
        $id_tab = (int) Tab::getIdFromClassName('AdminSkynetA11ypdfRemediation');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            $tab->delete();
        }

        return parent::uninstall();
    }

    /**
     * @return string
     *
     * @since 1.0.0
     */


public function getContent()
{
    $this->postProcess();

    $this->context->controller->addCSS(
        $this->_path . 'views/css/style.css'
    );

    foreach ([
        'config.js',
        'icons.js',
        'account.js',
        'api.js',
        'app.js',
    ] as $script) {
        $this->context->controller->addJS(
            $this->_path . 'views/js/' . $script
        );
    }

    $data = [
        'websiteId' => 'websiteId',
    ];

    // Generate the AdminModules URL with the current admin token.
    $adminLink = $this->context->link->getAdminLink('AdminModules');

    $configureUrl = $adminLink
        . '&configure=' . rawurlencode($this->name)
        . '&tab_module=' . rawurlencode($this->tab)
        . '&module_name=' . rawurlencode($this->name);

    $this->context->smarty->assign([
        'data'         => $data,
        'my_form'      => '',
        'configureUrl' => $configureUrl,
        'module_dir'   => $this->_path,
    ]);

    return $this->display(
        __FILE__,
        'views/templates/admin/configure.tpl'
    );
}

    /**
     * @return string
     *
     * @since 1.0.0
     */

public function renderForm()
{
    return '';
}

    /**
     * @return array
     *
     * @since 1.0.0
     */
    public function getConfigFieldsValues()
    {
        return [
            static::DISPLAY_POSITION            => (int) Configuration::get(static::DISPLAY_POSITION),
            static::DISPLAY_LAYOUT              => (int) Configuration::get(static::DISPLAY_LAYOUT),
            static::DISPLAY_PALETTE_BANNER      => Configuration::get(static::DISPLAY_PALETTE_BANNER),
            static::DISPLAY_PALETTE_BANNER_TEXT => Configuration::get(static::DISPLAY_PALETTE_BANNER_TEXT),
            static::DISPLAY_PALETTE_BUTTON      => Configuration::get(static::DISPLAY_PALETTE_BUTTON),
            static::DISPLAY_PALETTE_BUTTON_TEXT => Configuration::get(static::DISPLAY_PALETTE_BUTTON_TEXT),
            static::DISPLAY_LEARN_MORE_LINK     => Configuration::getInt(static::DISPLAY_LEARN_MORE_LINK),
            static::DISPLAY_MESSAGE_TEXT        => Configuration::getInt(static::DISPLAY_MESSAGE_TEXT),
            static::DISPLAY_DISMISS_TEXT        => Configuration::getInt(static::DISPLAY_DISMISS_TEXT),
            static::DISPLAY_POLICY_LINK_TEXT    => Configuration::getInt(static::DISPLAY_POLICY_LINK_TEXT)
        ];
    }

    /**
     * @return string
     *
     * @since 1.0.0
     */
    public function hookDisplayHeader()
    {
        $PDFSettings = $this->generatePDFSettings();

        $this->context->smarty->assign(
            [
                'PDFSettings' => json_encode($PDFSettings),
            ]
        );

        return $this->display(__FILE__, 'views/templates/hooks/SkynetA11ypdfRemediation.tpl');
    }

    /**
     * @return array
     *
     * @since 1.0.0
     */
    protected function generatePDFSettings()
    {
        $PDFSettings = []
            + $this->getPDFLayout();

        $PDFSettings['palette'] = $this->getPDFPalette();
        $PDFSettings['content'] = $this->getPDFContent();

        if ((int) Configuration::get(static::DISPLAY_LAYOUT) !== 1 && (int) Configuration::get(static::DISPLAY_LAYOUT) !== 4) {
            switch ((int) Configuration::get(static::DISPLAY_LAYOUT)) {
                case 2:
                    $theme = 'edgeless';
                    break;
                default:
                    $theme = 'classic';
                    break;
            }

            $PDFSettings['theme'] = $theme;
        }

        return $PDFSettings;
    }

    /**
     * Process settings page
     *
     * @since 1.0.0
     */
    protected function postProcess()
    {
        if (Tools::isSubmit('submitSettings')) {
            $this->context->controller->confirmations[] = $this->l('Settings saved successfully');
        }
    }

    /**
     * @return array
     *
     * @since 1.0.0
     */
  

    /**
     * @return array
     *
     * @since 1.0.0
     */
    protected function getPDFLayout()
    {
        $layout = (int) Configuration::get(static::DISPLAY_LAYOUT);

        if ($layout === 1) {
            return [];
        }

        return [
            'theme' => $layout,
        ];
    }

    /**
     * @return array
     *
     * @since 1.0.0
     */
    protected function getPDFPalette()
    {
        $palette = [];

        $palette['popup'] = [
            'background' => Configuration::get(static::DISPLAY_PALETTE_BANNER),
            'text'       => Configuration::get(static::DISPLAY_PALETTE_BANNER_TEXT),
        ];

        $palette['button'] = [
            'background' => Configuration::get(static::DISPLAY_PALETTE_BUTTON),
            'text'       => Configuration::get(static::DISPLAY_PALETTE_BUTTON_TEXT),
        ];

        if ((int) Configuration::get(static::DISPLAY_LAYOUT) === 4) {
            $palette['button']['background'] = Configuration::get(static::DISPLAY_PALETTE_BUTTON_TEXT);
            $palette['button']['text'] = Configuration::get(static::DISPLAY_PALETTE_BUTTON);
            $palette['button']['border'] = Configuration::get(static::DISPLAY_PALETTE_BUTTON);
        }

        return $palette;
    }

    /**
     * @param null|int $idLang
     *
     * @return array
     *
     * @since 1.0.0
     */
    protected function getPDFContent($idLang = null): array
    {
        if (!$idLang) {
            $idLang = (int) Context::getContext()->language->id;
        }

        $content = [
            'message' => Configuration::get(static::DISPLAY_MESSAGE_TEXT, $idLang),
            'dismiss' => Configuration::get(static::DISPLAY_DISMISS_TEXT, $idLang),
            'link'    => Configuration::get(static::DISPLAY_POLICY_LINK_TEXT, $idLang),
        ];

        if (Configuration::get(static::DISPLAY_LEARN_MORE_LINK, $idLang)) {
            $content['href'] = Configuration::get(static::DISPLAY_LEARN_MORE_LINK, $idLang);
        }

        return $content;
    }
}
