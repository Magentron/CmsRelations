<?php

class DirtyDozen_MultilanguageCmsPages_Model_Mysql4_Cms_Page_Relation_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('multilanguagecmspages/cms_page_relation');
    }
}