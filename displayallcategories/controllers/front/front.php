<?php
class DisplayAllCategoriesFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $categories = Category::getCategories($this->context->language->id, false);

        $this->context->smarty->assign('categories', $categories);
        $this->setTemplate('module:displayallcategories/views/templates/front/categories.tpl');
    }
}
