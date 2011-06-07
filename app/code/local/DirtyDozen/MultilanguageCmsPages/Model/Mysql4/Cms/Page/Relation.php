<?php

class DirtyDozen_MultilanguageCmsPages_Model_Mysql4_Cms_Page_Relation extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the multilanguagecmspages_id refers to the key field in your database table.
        $this->_init('multilanguagecmspages/cms_page_relation', 'multilanguagecmspages_id');
    }
}