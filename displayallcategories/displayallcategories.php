<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class DisplayAllCategories extends Module
{
    public function __construct()
    {
        $this->name = 'displayallcategories';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Kim Ybanez';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Display All Categories');
        $this->description = $this->l('A module to display all product categories on a separate page.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');

        if (!$this->active) {
            return;
        }
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayHeader') ||
            !$this->registerHook('displayAllCategoriesPage') ||
            !Configuration::updateValue('CATEGORIES_PAGE_ROUTE', 'categories')
        ) {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return true;
    }

    public function getContent()
    {
        return 'This module does not require any configuration.';
    }
}
